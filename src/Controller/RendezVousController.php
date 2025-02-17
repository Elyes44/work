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



    #[Route('/indexx', name: 'app_indexx')]
    public function indexx(): Response
    {

        return $this->render('client/index.html.twig');
    }
    #[Route('/rendezVous', name: 'app_rendezVous')]
    public function index(): Response
    {
        return $this->render('admin.html.twig', [
            'controller_name' => 'RendezVousController',
        ]);
    }
    #[Route('/add_rendezVous', name: 'add_rendezVous')]

    public function Add(Request  $request , ManagerRegistry $doctrine ,SluggerInterface $slugger, SessionInterface $session) : Response {

        $RendezVous =  new RendezVous() ;
        $form =  $this->createForm(RendezVousType::class,$RendezVous) ;
        $form->handleRequest($request) ;


         // Les lignes de censure
   


        if($form->isSubmitted()&& $form->isValid()){
            $brochureFile = $form->get('image')->getData();
            //$file =$RendezVous->getImage();
            $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
            //$uploads_directory = $this->getParameter('upload_directory');
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
            //$fileName = md5(uniqid()).'.'.$file->guessExtension();
            $brochureFile->move(
                $this->getParameter('upload_directory'),
                $newFilename
            );
            $RendezVous->setImage(($newFilename));


        


            
            $em= $doctrine->getManager() ;
            $em->persist($RendezVous);
            $em->flush();
            $rendezVousName = $RendezVous->getNomClient();


        

            return $this ->redirectToRoute('add_rendezVous') ;
        }
        return $this->render('rendezVous/addrendezVous.html.twig' , [
            'form' => $form->createView()
        ]) ;
    }

    #[Route('/afficher_rendezVous', name: 'afficher_rendezVous')]
   
public function AfficheRendezVous(RendezVousRepository $repo, PaginatorInterface $paginator, Request $request): Response
{
    $searchTerm = $request->query->get('search');
    $rendezVous = $repo->searchByTypeOrNameOrComment($searchTerm);

    $pagination = $paginator->paginate(
        $rendezVous,
        $request->query->getInt('page', 1),
        2    // items per page
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
        return $this->redirectToRoute("afficher_rendezVousAdmin") ;

    }
    #[Route('/updaterendez/{id}', name: 'updaterendez')]
    function update(RendezVousRepository $repo, $id, Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {
        $RendezVous = $repo->find($id);
        $form = $this->createForm(RendezVousType::class, $RendezVous);
        $form->add('update', SubmitType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $brochureFile = $form->get('image')->getData();
            $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
            $brochureFile->move(
                $this->getParameter('upload_directory'),
                $newFilename
            );
            $RendezVous->setImage($newFilename);
    
            $em = $doctrine->getManager();
            $em->flush();
    
            return $this->redirectToRoute('afficher_rendezVous');
        }
    
        return $this->render('rendezVous/updaterendezVous.html.twig', [
            'form' => $form->createView()
        ]);
    }

  
    
   

 

}


?>                                                  