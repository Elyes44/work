<?php

namespace App\Controller;

use App\Entity\RendezVous;
use App\Entity\Services;
use App\Form\RendezVousType;
use App\Form\ServicesType;
use App\Repository\RendezVousRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse; 
use Twilio\Rest\Client;



use Dompdf\Dompdf;
use Dompdf\Options;

class RendezVousController extends AbstractController
{


    #[Route('/cal', name: 'cal')]
    public function cal(): Response
    {
        return $this->render('calendar.html.twig');
    }


    #[Route('/', name: 'app_index')]
    public function indeex(): Response
    {
        return $this->render('base.html.twig');
    }

    #[Route('/addrdv', name: 'add_rendezVous')]
public function add(Request $request, ManagerRegistry $doctrine): Response
{
    // Step 1: Create a new RendezVous entity
    $RendezVous = new RendezVous();

    // Step 2: Create the form using the RendezVousType form class
    $form = $this->createForm(RendezVousType::class, $RendezVous);

    // Step 3: Handle the form submission
    $form->handleRequest($request);

    // Step 4: Check if the form is submitted and valid
    if ($form->isSubmitted() && $form->isValid()) {
        // Step 5: Save the RendezVous entity to the database
        $em = $doctrine->getManager();
        $em->persist($RendezVous);
        $em->flush();

        // Debug: Log that the appointment is saved
        error_log('Appointment saved successfully. Attempting to send SMS...');

        // Step 6: Send SMS using Twilio API
        // $sid = "here!.................................................."; 
        // $token = "here!.................................................."; 
        // $fromNumber = "here!.................................................."; 

        // $twilio = new Client($sid, $token);

        // try {
        //     $message = $twilio->messages->create(
        //         "$RendezVous->getTelephone()", // $RendezVous->getTelephone(), // Recipient's phone number
        //         [
        //             'from' => $fromNumber, // Twilio From number
        //             'body' => 'Bonjour, votre rendez-vous a été enregistré avec succès. Merci!' // Static SMS message
        //         ]
        //     );

        //     // Debug: Log the message SID for debugging
        //     error_log('SMS sent successfully. SID: ' . $message->sid);

        //     $this->addFlash('success', 'Rendez-vous ajouté et SMS envoyé avec succès! SID: ' . $message->sid);
        // } catch (\Exception $e) {
        //     // Debug: Log the error
        //     error_log('Failed to send SMS: ' . $e->getMessage());

        //     $this->addFlash('error', 'Erreur lors de l\'envoi du SMS: ' . $e->getMessage());
        // }

        // Step 7: Redirect to the same route (or another route if needed)
        return $this->redirectToRoute('afficher_rendezVous');
    }

    // Step 8: Render the form template
    return $this->render('rendezVous/addrendezVous.html.twig', [
        'form' => $form->createView(),
    ]);
}












    #[Route('/afficher_rendezVous', name: 'afficher_rendezVous')]
   
public function AfficheRendezVous(RendezVousRepository $repo, PaginatorInterface $paginator, Request $request): Response
{
    $searchTerm = $request->query->get('search');
    $rendezVous = $repo->searchByTypeOrNameOrComment($searchTerm);

    $pagination = $paginator->paginate(
        $rendezVous,
        $request->query->getInt('page', 1),
        5   // items per page
    );

    return $this->render('rendezVous/index.html.twig', [
        'RendezVous' => $pagination,
        'ajoutA' => $rendezVous
    ]);
}





    #[Route('/deleterendez/{id}', name: 'deleterendez')]
    public function Delete($id,RendezVousRepository $repository , ManagerRegistry $doctrine) : Response {
        $RendezVous=$repository->find($id) ;
        $em=$doctrine->getManager() ;
        $em->remove($RendezVous);
        $em->flush();
        return $this->redirectToRoute("afficher_rendezVous") ;

    }





    #[Route('/updaterendez/{id}', name: 'updaterendez')]
    public function update(RendezVousRepository $repo, $id, Request $request, ManagerRegistry $doctrine): Response
    {
        // Find the RendezVous entity by ID
        $RendezVous = $repo->find($id);
    
        // Check if the RendezVous entity exists
        if (!$RendezVous) {
            throw $this->createNotFoundException('Rendez-vous non trouvé.');
        }
    
        // Create the form using the RendezVousType form class
        $form = $this->createForm(RendezVousType::class, $RendezVous);
        $form->handleRequest($request);
    
        // Handle form submission
        if ($form->isSubmitted() && $form->isValid()) {
            // Save the updated RendezVous entity to the database
            $em = $doctrine->getManager();
            $em->flush();
    
            // Add a success flash message
            $this->addFlash('success', 'Rendez-vous mis à jour avec succès!');
    
            // Redirect to the list of Rendez-vous
            return $this->redirectToRoute('afficher_rendezVous');
        }
    
        // Render the update form template
        return $this->render('rendezVous/updaterendezVous.html.twig', [
            'form' => $form->createView(),
            'RendezVous' => $RendezVous,
        ]);
    }


    #[Route('/search', name: 'app_search')]
    public function search(Request $request, RendezVousRepository $rendezVousRepository, PaginatorInterface $paginator)
    {
        $searchTerm = $request->query->get('q'); // Get the search term from the query string

        // Fetch all results or filtered results based on the search term
        $query = $rendezVousRepository->createQueryBuilder('r');
        if ($searchTerm) {
            $query->andWhere($query->expr()->orX(
                $query->expr()->like('r.NomClient', ':searchTerm')
            ))
            ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        // Paginate the results
        $RendezVous = $paginator->paginate(
            $query->getQuery(), // Query to paginate
            $request->query->getInt('page', 1), // Current page number, default to 1
            10 // Items per page
        );

        return $this->render('rendezVous/index.html.twig', [
            'RendezVous' => $RendezVous,
            'searchTerm' => $searchTerm,
        ]);
    }




    #[Route('/rendezvous/events', name: 'rendezvous_events', methods: ['GET'])]
    public function getEvents(ManagerRegistry $doctrine, LoggerInterface $logger): JsonResponse 
    {
        $repository = $doctrine->getRepository(RendezVous::class);
        $rendezvous = $repository->findAll();
        $events = [];
    
        foreach ($rendezvous as $rdv) {
            try {
                $events[] = [
                    'id' => $rdv->getId(),
                    'title' => $rdv->getTitle(),
                    'start' => $rdv->getStart()->format('Y-m-d\TH:i:s'),
                    'end' => $rdv->getEnd()->format('Y-m-d\TH:i:s'),
                ];
            } catch (\Exception $e) {
                $logger->error('Error processing RendezVous: ' . $e->getMessage());
            }
        }
    
        return $this->json($events); 
    }


    #[Route('/rendezvous/update', name: 'rendezvous_update', methods: ['POST'])]
    public function updateCalendar(Request $request, ManagerRegistry $doctrine, LoggerInterface $logger): JsonResponse
    {
        try {
            // Decode the JSON data from the request
            $data = json_decode($request->getContent(), true);
    
            // Get the entity manager and repository
            $entityManager = $doctrine->getManager();
            $repository = $doctrine->getRepository(RendezVous::class);
    
            // Find the RendezVous entity by ID
            $rdv = $repository->find($data['id']);
    
            // Check if the RendezVous entity exists
            if (!$rdv) {
                return new JsonResponse(['error' => 'RendezVous not found'], 404);
            }
    
            // Update the start and end fields
            $rdv->setStart(new \DateTime($data['start']));
            $rdv->setEnd(new \DateTime($data['end']));
    
            // Save the changes to the database
            $entityManager->flush();
    
            // Return a success response
            return new JsonResponse(['success' => true]);
        } catch (\Exception $e) {
            // Log the error and return an error response
            $logger->error('Error updating RendezVous: ' . $e->getMessage());
            return new JsonResponse(['error' => 'Internal Server Error'], 500);
        }
    }


}


?>  