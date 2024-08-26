<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Evenement;
use App\Entity\Commentaire;
use App\Form\EvenementType;
use App\Form\CommentaireType;
use Doctrine\ORM\EntityManager;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\DependencyInjection\Loader\Configurator\request;

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
    
    // ------------- AFFICHER DÉTAIL EVENEMENT -------------

    #[Route('/evenement/{id}', name: 'show_evenement')]
    public function show(Evenement $evenement, User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // poster commentaire
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $timezone = new \DateTimeZone('Europe/Paris');

        $commentaire->setAppartient($evenement);
        $commentaire->setPoste($user);
        $commentaire->setDatePoste(new \DateTime('now', $timezone));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $commentaire = $form->getData();
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('show_evenement', ['id' => $evenement->getId()]);
        }
        // fin form commentaire
        
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
            'formAddCommentaire'=> $form
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

        // ------------- Supprimer un commentaire -------------
        #[Route('/commentaire/{id}', name: 'suppr_commentaire')]
        public function supprCommentaire(Commentaire $commentaire, EntityManagerInterface $entityManager, Evenement $evenement)
        {
            $entityManager->remove($commentaire);
            $entityManager->flush();
    
            return $this->redirectToRoute('show_evenement', ['id' => $evenement->getId()]);
        }
}