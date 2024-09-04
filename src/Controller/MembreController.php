<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Form\MembreType;
use App\Repository\MembreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MembreController extends AbstractController
{
    // ------------- AFFICHER LISTE DES MEMBRES -------------

    #[Route('/membre', name: 'app_membre')]
    public function index(MembreRepository $membreRepository): Response
    {
        $membres = $membreRepository->findBy([], ["nom"=> "ASC"]);
        return $this->render('membre/index.html.twig', [
            'membres' => $membres
        ]);
    }

    // ------------- AFFICHER DÉTAIL MEMBRE ------------- ne fonctionne pas

    #[Route('/membre/{id<\d+>}', name: 'show_membre')]
    public function show(int $id, MembreRepository $membreRepository): Response
    {
        $membre = $membreRepository->find($id);
        
        if (!$membre) {
            throw $this->createNotFoundException('Le membre demandé n\'existe pas.');
        }

        return $this->render('membre/show.html.twig', [
            'membre' => $membre
        ]);
    }

    // ------------- AJOUT / EDIT MEMBRE -------------

    #[Route('/membre/new', name: 'new_membre')]
    #[Route('/membre/{id}/edit', name: 'edit_membre', requirements: ['id' => '\d+'])]
    public function new_editMembre(Membre $membre = null, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$membre) {
            $membre = new Membre();
        }

        $form = $this->createForm(MembreType::class, $membre);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $membre = $form->getData();
            $entityManager->persist($membre);
            $entityManager->flush();

            return $this->redirectToRoute('app_membre');
        }
        
        return $this->render('membre/new.html.twig',[
            'formAddMembre'=> $form,
            'edit'=> $membre->getId()
        ]);
    }

    // ------------- SUPRIMER UN MEMBRE -------------

    #[Route('/membre/{id}/suppr', name: 'suppr_membre')]
    public function supprMembre(Membre $membre, EntityManagerInterface $entityManager)
    {
    // Get the associated User
    $utilisateur = $membre->getUtilisateur();
    
    if ($utilisateur) {
        // Break the association by setting the foreign key to NULL
        $utilisateur->setMembre(null); // This will set the `membre_id` in the `User` table to NULL
        $entityManager->persist($utilisateur); // Persist changes to the User entity
    }

    // Now remove the Membre
    $entityManager->remove($membre);
    $entityManager->flush();

        return $this->redirectToRoute('app_membre');
    }
}