<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Repository\MembreRepository;
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

    #[Route('/membre/{id}', name: 'show_membre')]
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

    // ------------- EDIT MEMBRE -------------

    // #[Route('/membre/new', name: 'new_membre')]
    // #[Route('/membre/{id}/edit', name: 'edit_membre')]
    // public function new_edit(Membre $membre = null, Request $request, EntityManagerInterface $entityManager): Response
    // {
    //     if (!$membre) {
    //         $membre = new Membre();
    //     }

    //     $form = $this->createForm(MembreType::class, $membre);

    //     $form->handleRequest($request);
    //     if ($form->isSubmitted() && $form->isValid()) {

    //         $membre = $form->getData();
    //         $entityManager->persist($membre);
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_membre');
    //     }
        
    //     return $this->render('membre/new.html.twig',[
    //         'formAddMembre'=> $form,
    //         'edit'=> $membre->getId()
    //     ]);
    // }
}