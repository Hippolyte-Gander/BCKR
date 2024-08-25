<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentaireController extends AbstractController
{
    // #[Route('/commentaire', name: 'app_commentaire')]
    // public function index(): Response
    // {
    //     return $this->render('commentaire/index.html.twig', [
    //         'controller_name' => 'CommentaireController',
    //     ]);
    // }


    // ------------- FORMULAIRE CREATION NOUVEAU COMMENTAIRE ------------- fonction à compléter
    #[Route('/evenement/{id}', name: 'show_evenement')]
    #[Route('/commentaire/new', name: 'new_commentaire')]
    public function new_edit(Commentaire $commentaire = null, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$commentaire) {
            $commentaire = new Commentaire();
        }

        $form = $this->createForm(CommentaireType::class, $commentaire);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $commentaire = $form->getData();
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_commentaire');
        }
        
        return $this->render('commentaire/new.html.twig',[
            'formAddCommentaire'=> $form,
            'edit'=> $commentaire->getId()
        ]);
    }
}