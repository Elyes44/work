<?php
// src/Controller/ServicesController.php
namespace App\Controller;

use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Entity\Services;
use App\Form\ServicesType;
use App\Repository\ServicesRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface; // <-- Ajoutez cette ligne

class ServicesController extends AbstractController
{

    

//search of services using name or type

#[Route('/services', name: 'app_services')]
public function index(ServicesRepository $repository, Request $request, PaginatorInterface $paginator): Response
{
    // Récupérer le terme de recherche
    $searchTerm = $request->query->get('search');

    // Récupérer toutes les services ou filtrer par recherche
    $query = $repository->createQueryBuilder('p')
        ->where('p.nom LIKE :searchTerm OR p.content LIKE :searchTerm')
        ->setParameter('searchTerm', '%' . $searchTerm . '%')
        ->getQuery();

    // Paginer les résultats
    $services = $paginator->paginate(
        $query, // Requête à paginer
        $request->query->getInt('page', 1), // Numéro de page par défaut
        6 // Nombre d'éléments par page
    );

    // Calculer les variables pour la pagination
    $currentPage = $services->getCurrentPageNumber();
    $previous = $currentPage > 1 ? $currentPage - 1 : null;
    $next = $currentPage < $services->getPageCount() ? $currentPage + 1 : null;

    return $this->render('services/index.html.twig', [
        'services' => $services,
        'currentPage' => $currentPage,
        'previous' => $previous,
        'next' => $next,
    ]);
}

//add new service

    #[Route('/add_services', name: 'add_services')]
    public function add(Request $request, ManagerRegistry $doctrine): Response
    {
        $services = new Services();
        $form = $this->createForm(ServicesType::class, $services);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($services);
            $em->flush();
            return $this->redirectToRoute('all_services');
        }

        return $this->render('services/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }


//update one service

    #[Route('/update_services/{id}', name: 'update_services')]
    public function update(ServicesRepository $repository, int $id, Request $request, ManagerRegistry $doctrine): Response
    {
        $services = $repository->find($id);
        $form = $this->createForm(ServicesType::class, $services);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute('all_services');
        }

        return $this->render('services/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }


//delete one service
    #[Route('/delete_services/{id}', name: 'delete_services')]
    public function delete(ServicesRepository $repository, int $id, ManagerRegistry $doctrine): Response
    {
        $services = $repository->find($id);
        $em = $doctrine->getManager();
        $em->remove($services);
        $em->flush();
        return $this->redirectToRoute('all_services');
    }



//get all services 

#[Route('/allservices', name: 'all_services')]
public function getAllServices(ServicesRepository $repository, Request $request, PaginatorInterface $paginator): Response
{
    // Fetch all services
    $query = $repository->createQueryBuilder('p')
        ->getQuery();

    // Paginate results
    $services = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
        6
    );

    // Calculate usage for each service
    $servicesWithUsage = [];
    foreach ($services as $service) {
        // Example: Assuming you want to calculate the usage percentage for the service
        $usagePercentage = $this->getUsagePercentageForService($service); // Replace with actual logic
        $servicesWithUsage[] = [
            'service' => $service,
            'usagePercentage' => $usagePercentage
        ];
    }

    // Calculate pagination variables
    $currentPage = $services->getCurrentPageNumber();
    $previous = $currentPage > 1 ? $currentPage - 1 : null;
    $next = $currentPage < $services->getPageCount() ? $currentPage + 1 : null;

    return $this->render('services/allserives.html.twig', [
        'services' => $services,  // Pass paginated object
        'servicesWithUsage' => $servicesWithUsage,
        'currentPage' => $currentPage,
        'previous' => $previous,
        'next' => $next,
    ]);
}

// Example function to calculate usage percentage for a service
private function getUsagePercentageForService($service)
{
    // Example logic: You would replace this with actual data fetching and calculations
    return rand(1, 100); // Random percentage for demonstration
}




//get service by id

#[Route('/serviceet/{id}', name: 'serviceet')]
public function getServiceById(int $id, ServicesRepository $repository): Response
{
    // Fetch the service by its id
    $service = $repository->find($id);

    // Check if the service exists
    if (!$service) {
        throw $this->createNotFoundException('The service with id ' . $id . ' does not exist.');
    }

    return $this->render('services/service_detail.html.twig', [
        'service' => $service,
    ]);
}





#[Route('/pourcentageservices', name: 'pourcentageservices')]
public function pourcentagSservices(ServicesRepository $servicesRepository): Response
{
    // Get all services
    $services = $servicesRepository->findAll();

    // Ensure there are services
    if (!$services) {
        $services = [];
    }

    // Calculate usage percentage for each service
    $servicesWithUsage = [];
    foreach ($services as $service) {
        $usagePercentage = $servicesRepository->getUsagePercentage($service) ?? 0;
        $servicesWithUsage[] = [
            'service' => $service,
            'usagePercentage' => $usagePercentage,
        ];
    }
    dd($servicesWithUsage);
    return $this->render('services/allserives.html.twig', [
        'servicesWithUsage' => $servicesWithUsage, // Ensure this is set
        'currentPage' => 1, // Example page variable
        'previous' => null,
        'next' => null,
    ]);
}


}