<?php
// src/Repository/ServicesRepository.php
namespace App\Repository;

use App\Entity\Services;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ServicesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Services::class);
    }

    public function searchByNomOrType($searchTerm)
    {
        $qb = $this->createQueryBuilder('p');
        if ($searchTerm) {
            $qb->andWhere($qb->expr()->orX(
                $qb->expr()->like('p.nom', ':searchTerm'),
                $qb->expr()->like('p.content', ':searchTerm')
            ))
            ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }
        return $qb->getQuery()->getResult();
    }




    public function getUsagePercentage(Services $service): float
    {
        // Get the total number of appointments for this service
        $totalAppointments = $service->getRendezVouss()->count();

        // Get the total number of services
        $totalServices = $this->count([]);

        if ($totalServices === 0) {
            return 0; // Avoid division by zero
        }

        // Calculate the percentage
        return ($totalAppointments / $totalServices) * 100;
    }
}

