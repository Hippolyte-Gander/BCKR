<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Evenement;
use App\Entity\Commentaire;
use App\Form\EvenementType;
use App\Form\CommentaireType;
use App\Entity\Participations;
use App\Form\ParticipationType;
use Doctrine\ORM\EntityManager;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
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
    public function index(EvenementRepository $evenementRepository, PaginatorInterface $paginator, Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if ($user) {
            // chercher les events en fonction de leur visibilité
            if ($user->isAdmin()) {
                $evenements = $evenementRepository->evenementsFutursAdmin();
            } elseif ($user->isMembre()) {
                $evenements = $evenementRepository->evenementsFutursMembre();
            } else {
                $evenements = $evenementRepository->evenementsFutursTous();
            }
        } else {
            $evenements = $evenementRepository->evenementsFutursTous();
        }
            
            $pagination = $paginator->paginate(
            $evenements, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );

        // PARTIE FORM PARTICIPATION

        $forms = [];
    
        foreach ($pagination as $evenement) {
            $participation = $evenement->getParticipations();

            // Crée une nouvelle instance de la participation s'il n'y en as aucune
            $participation = new Participations();  

            $form = $this->createForm(ParticipationType::class, $participation, [
                'action' => $this->generateUrl('app_evenement_participation', ['id' => $evenement->getId()]),
            ]);
    
            // Sauvegarder la vue du formulaire pour chaque événement
            $forms[$evenement->getId()] = $form->createView();  
        }
    
        return $this->render('evenement/index.html.twig', [
            'pagination' => $pagination,
            'forms' => $forms,
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
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_home');
        }

        if ($this->isGranted('ROLE_ADMIN')) {
            $entityManager->remove($evenement);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_evenement');
        } else {
            return $this->redirectToRoute('app_home');
        }

    }
    
    // ------------- AFFICHER DÉTAIL EVENEMENT -------------

    #[Route('/evenement/{id}', name: 'show_evenement')]
    public function show(Evenement $evenement, Request $request, EntityManagerInterface $entityManager): Response
    {
        // poster commentaire
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $timezone = new \DateTimeZone('Europe/Paris');

        $commentaire->setAppartient($evenement);
        $commentaire->setPoste($this->getUser());
        $commentaire->setDatePoste(new \DateTime('now', $timezone));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $commentaire = $form->getData();
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('show_evenement', ['id' => $evenement->getId()]);
        }
        // fin form commentaire
        
        $user = $this->getUser();
        $visibilite = $evenement->getVisibilite();

        if ($visibilite == 'tous') {
            return $this->render('evenement/show.html.twig', [
                'evenement' => $evenement,
                'formAddCommentaire'=> $form
            ]);
        } elseif ($visibilite == 'membres' and ($user->isMembre() or $user->isAdmin())) {
            return $this->render('evenement/show.html.twig', [
                'evenement' => $evenement,
                'formAddCommentaire'=> $form
            ]);
        } elseif ($visibilite == 'admins' and $user->isAdmin()) {
            return $this->render('evenement/show.html.twig', [
                'evenement' => $evenement,
                'formAddCommentaire'=> $form
            ]);
        } else {
            return $this->redirectToRoute('app_login');
        }
    }

    // ------------- PARTICIPER A UN EVENEMENT -------------

    #[Route('/evenement/{id}/participation', name: 'app_evenement_participation', methods: ['POST'])]
    public function participer(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
    
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
    
        // Crée une nouvelle participation
        $participation = new Participations();  
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Assigner l'utilisateur et l'événement à la participation
            $participation->setInscrit($user);
            $participation->setInscriptions($evenement);
    
            // Récupérer le nombre de participants soumis
            $nbrParticipants = $form->get('nbrParticipants')->getData();
            $participation->setNbrParticipants($nbrParticipants);
    
            // Sauvegarder dans la base de données
            $entityManager->persist($participation);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_evenement');
        }
    }

    // // ------------- NE PLUS PARTICIPER A UN EVENEMENT -------------

    // #[Route('/evenement/{id}/ne-pas-participer', name: 'pas_participer_evenement')]
    // public function nePasParticiperEvenement($id, EvenementRepository $evenementRepository, EntityManagerInterface $entityManager, UserInterface $user): Response
    // {
    //     // Récupérer id événement
    //     $evenement = $evenementRepository->find($id);

    //     // Supprimer l'utilisateur comme participant à l'événement
    //     $evenement->removeParticipant($user);

    //     // Décrémenter le nombre de places prises
    //     $evenement->setPlacesPrises($evenement->getPlacesPrises() - 1);

    //     // Passer les changements en BDD
    //     $entityManager->persist($evenement);
    //     $entityManager->flush();

    //     $this->addFlash('success', 'Vous vous êtes désinscrit de l\'événement.');

    //     return $this->redirectToRoute('app_evenement');
    // }

        // ------------- Supprimer un commentaire -------------
        #[Route('/commentaire/delete/{id}', name: 'suppr_commentaire')]
        public function supprCommentaire(Commentaire $commentaire, EntityManagerInterface $entityManager)
        {
            $user = $this->getUser();
            if (!$user) {
                return $this->redirectToRoute('app_home');
            }


            if ($this->isGranted('ROLE_ADMIN')) {
                $idEvent = $commentaire->getAppartient()->getId();
                $entityManager->remove($commentaire);
                $entityManager->flush();
        
                return $this->redirectToRoute('show_evenement', ['id' => $idEvent]);
            } else {
                return $this->redirectToRoute('app_home');
            }

        }
}