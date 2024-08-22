<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use Doctrine\ORM\EntityManager;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EvenementController extends AbstractController
{

    // ------------- AFFICHER LISTE DES EVENEMENTS -------------
    #[Route('/evenement', name: 'app_evenement')]
    public function index(EvenementRepository $evenementRepository): Response
    {
        $evenements = $evenementRepository->findBy([], ["dateDebut"=> "ASC"]);
        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements
        ]);
    }

    // ------------- AFFICHER LISTE DES 4 PROCHAINS EVENEMENTS -------------
    
    #[Route('/', name: 'app_home')]
    public function nextEvents(EvenementRepository $evenementRepository): Response
    {
        $evenements = $evenementRepository->findNextEvents(4);

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements
        ]);
    }


    // ------------- FORMULAIRE CREATION NOUVEL EVENEMENT -------------
    #[Route('/evenement/new', name: 'new_evenement')]
    #[Route('/evenement/{id}/edit', name: 'edit_evenement')]
    public function new_edit(Evenement $evenement = null, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$evenement) {
            $evenement = new Evenement();
        }

        $form = $this->createForm(EvenementType::class, $evenement);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $evenement = $form->getData();
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement');
        }
        
        return $this->render('evenement/new.html.twig',[
            'formAddEvenement'=> $form,
            'edit'=> $evenement->getId()
        ]);
    }
    // ------------- SUPRIMER UN EVENEMENT -------------
    #[Route('/evenement/{id}/suppr', name: 'suppr_evenement')]
    public function supprEvenement(Evenement $evenement, EntityManagerInterface $entityManager)
    {
        $entityManager->remove($evenement);
        $entityManager->flush();

        return $this->redirectToRoute('app_evenement');
    }
    
    // ------------- AFFICHER UN EVENEMENT -------------
    #[Route('/evenement/{id}', name: 'show_evenement')]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement
        ]);
    }

    // ------------- PARTICIPATION A UN EVENEMENT -------------
    #[Route('/evenement/{id}/participer', name: 'participer_evenement')]
    public function participerEvenement($id, EvenementRepository $evenementRepository, EntityManagerInterface $entityManager, UserInterface $user): Response
    {
        // Récupérer id événement
        $evenement = $evenementRepository->find($id);

        // vérifier s'il reste de la place
        if ($evenement->getPlacesPrises() < $evenement->getPlaces()) {
            // Ajouter l'utilisateur comme participant à l'événement
            $evenement->addParticipant($user);

            // Incrémenter le nombre de places prises
            $evenement->setPlacesPrises($evenement->getPlacesPrises() + 1);

            // Passer les changements en BDD
            $entityManager->persist($evenement);
            $entityManager->flush();

            $this->addFlash('success', 'Vous vous êtes inscrit à l\'événement.');
        } else {
            // Gérer le cas où il n'y a plus de place
            $this->addFlash('error', 'Cet événement est complet.');
        }

        return $this->redirectToRoute('app_evenement');
    }

    // ------------- NE PLUS PARTICIPER A UN EVENEMENT -------------
    #[Route('/evenement/{id}/ne-pas-participer', name: 'pas_participer_evenement')]
    public function nePasParticiperEvenement($id, EvenementRepository $evenementRepository, EntityManagerInterface $entityManager, UserInterface $user): Response
    {
        // Récupérer id événement
        $evenement = $evenementRepository->find($id);

        // Supprimer l'utilisateur comme participant à l'événement
        $evenement->removeParticipant($user);

        // Décrémenter le nombre de places prises
        $evenement->setPlacesPrises($evenement->getPlacesPrises() - 1);

        // Passer les changements en BDD
        $entityManager->persist($evenement);
        $entityManager->flush();

        $this->addFlash('success', 'Vous vous êtes désinscrit de l\'événement.');

        return $this->redirectToRoute('app_evenement');
    }
}