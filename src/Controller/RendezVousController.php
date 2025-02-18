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

use Dompdf\Dompdf;
use Dompdf\Options;

class RendezVousController extends AbstractController
{





    // #[Route('/indexx', name: 'app_indexx')]
    // public function indexx(): Response
    // {
    //     return $this->render('client/index.html.twig');
    // }

    #[Route('/', name: 'app_index')]
    public function indeex(): Response
    {
        return $this->render('base.html.twig');
    }


    // #[Route('/rendezVous', name: 'app_rendezVous')]
    // public function index(): Response
    // {
    //     return $this->render('admin.html.twig', [
    //         'controller_name' => 'RendezVousController',
    //     ]);
    // }




   #[Route('/addrdv', name: 'add_rendezVous')]
public function add(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
{
    // Step 1: Create a new RendezVous entity
    $RendezVous = new RendezVous();

    // Step 2: Create the form using the RendezVousType form class
    $form = $this->createForm(RendezVousType::class, $RendezVous);

    // Step 3: Handle the form submission
    $form->handleRequest($request);

    // Step 4: Debugging - Check if the form is submitted
    if ($form->isSubmitted()) {
        // Debugging - Dump form data and entity state
        dump('Form submitted!');
        dump('Form data:', $form->getData());
        dump('RendezVous entity:', $RendezVous);

        // Step 5: Check if the form is valid
        if ($form->isValid()) {
            // Debugging - Form is valid
            dump('Form is valid!');

            // Step 6: Handle file upload (image)
            $brochureFile = $form->get('image')->getData();
            if ($brochureFile) {
                // Generate a unique filename for the uploaded file
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();

                // Move the file to the upload directory
                $brochureFile->move(
                    $this->getParameter('upload_directory'),
                    $newFilename
                );

                // Set the image filename in the RendezVous entity
                $RendezVous->setImage($newFilename);
            }

            // Step 7: Save the RendezVous entity to the database
            $em = $doctrine->getManager();
            $em->persist($RendezVous);
            $em->flush();

            // Step 8: Add a success flash message
            $this->addFlash('success', 'Rendez-vous ajouté avec succès!');

            // Step 9: Redirect to the same route (or another route if needed)
            return $this->redirectToRoute('afficher_rendezVous');
        } else {
            // Debugging - Form is not valid, dump errors
            dump('Form is not valid. Errors:', $form->getErrors(true, false));
        }
    }

    // Step 10: Render the form template
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
    public function update(RendezVousRepository $repo, $id, Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {
        $RendezVous = $repo->find($id);
    
        // Check if the RendezVous entity exists
        if (!$RendezVous) {
            throw $this->createNotFoundException('Rendez-vous non trouvé.');
        }
    
        // Store the current image filename
        $currentImage = $RendezVous->getImage();
    
        $form = $this->createForm(RendezVousType::class, $RendezVous);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $brochureFile = $form->get('image')->getData();
    
            // Only update the image if a new file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
                $brochureFile->move(
                    $this->getParameter('upload_directory'),
                    $newFilename
                );
                $RendezVous->setImage($newFilename);
            } else {
                // Preserve the existing image if no new file is uploaded
                $RendezVous->setImage($currentImage);
            }
    
            $em = $doctrine->getManager();
            $em->flush();
    
            $this->addFlash('success', 'Rendez-vous mis à jour avec succès!');
            return $this->redirectToRoute('afficher_rendezVous');
        }
    
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


}


?>                                                  