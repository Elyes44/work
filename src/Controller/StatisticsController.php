<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\DBAL\Connection;

final class StatisticsController extends AbstractController
{
    #[Route('/statistics', name: 'statistics')]
    public function statistics(Connection $conn): Response
    {
        // Get Camembert data (service-wise appointment counts)
        list($servicesForCamembert, $percentagesForCamembert) = $this->getCamembertData($conn);
    
        // Get Line chart data (appointments by date)
        list($datesForLineChart, $countsForLineChart) = $this->getLineChartData($conn);
    
        // Get Histogram data (appointments by month)
        list($monthsForHistogram, $countsForHistogram) = $this->getHistogramData($conn);
    
        // Debug: Output the histogram data
        dump($monthsForHistogram, $countsForHistogram);
    
        return $this->render('statistics/index.html.twig', [
            'servicesForCamembert' => json_encode($servicesForCamembert),
            'percentagesForCamembert' => json_encode($percentagesForCamembert),
            'datesForLineChart' => json_encode($datesForLineChart),
            'countsForLineChart' => json_encode($countsForLineChart),
            'monthsForHistogram' => json_encode($monthsForHistogram), // Pass histogram data
            'countsForHistogram' => json_encode($countsForHistogram), // Pass histogram data
        ]);
    }

    private function getCamembertData(Connection $conn): array
    {
        // SQL query to count appointments per service
        $sqlCamembert = "
            SELECT s.nom as service_name, COUNT(r.id) as appointment_count
            FROM rendez_vous r
            JOIN services s ON s.id = r.services_id
            GROUP BY s.nom
        ";

        // Execute the query to fetch service-wise appointment counts
        $appointmentsData = $conn->executeQuery($sqlCamembert)->fetchAllAssociative();

        // Calculate total appointments to calculate percentage
        $totalAppointments = array_sum(array_column($appointmentsData, 'appointment_count'));

        // Prepare Camembert chart data (services and their percentages)
        $servicesForCamembert = [];
        $percentagesForCamembert = [];

        foreach ($appointmentsData as $data) {
            // Avoid division by zero
            $percentage = ($totalAppointments > 0) ? ($data['appointment_count'] / $totalAppointments) * 100 : 0;
            $servicesForCamembert[] = $data['service_name'];
            $percentagesForCamembert[] = $percentage;
        }

        return [$servicesForCamembert, $percentagesForCamembert];
    }

    private function getLineChartData(Connection $conn): array
    {
        // SQL query to count appointments per date
        $sqlLineChart = "
            SELECT DATE(r.start) as appointment_date, COUNT(r.id) as appointment_count
            FROM rendez_vous r
            GROUP BY appointment_date
            ORDER BY appointment_date ASC
        ";

        // Execute the query to fetch date-wise appointment counts
        $appointmentsDataForLine = $conn->executeQuery($sqlLineChart)->fetchAllAssociative();

        // Prepare Line chart data (dates and their appointment counts)
        $datesForLineChart = [];
        $countsForLineChart = [];

        foreach ($appointmentsDataForLine as $data) {
            $datesForLineChart[] = $data['appointment_date'];
            $countsForLineChart[] = $data['appointment_count'];
        }

        return [$datesForLineChart, $countsForLineChart];
    }


    private function getHistogramData(Connection $conn): array
    {
        // SQL query to count appointments per month
        $sqlHistogram = "
            SELECT DATE_FORMAT(r.start, '%Y-%m') as month, COUNT(r.id) as appointment_count
            FROM rendez_vous r
            GROUP BY month
            ORDER BY month ASC
        ";
    
        // Execute the query to fetch month-wise appointment counts
        $appointmentsDataForHistogram = $conn->executeQuery($sqlHistogram)->fetchAllAssociative();
    
        // Prepare histogram data (months and their appointment counts)
        $monthsForHistogram = [];
        $countsForHistogram = [];
    
        foreach ($appointmentsDataForHistogram as $data) {
            $monthsForHistogram[] = $data['month'];
            $countsForHistogram[] = $data['appointment_count'];
        }
    
        return [$monthsForHistogram, $countsForHistogram];
    }
}