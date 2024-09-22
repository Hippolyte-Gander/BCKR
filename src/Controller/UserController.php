<?php

namespace App\Controller;

use App\Entity\User;
use DateTimeImmutable;
use App\Form\UserEditType;
use App\Form\PhotoProfilType;
use App\Repository\UserRepository;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    // ------------- AFFICHER LISTE DES USERS -------------
    
    #[Route('/user', name: 'app_user')]
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findBy([], ["pseudo"=> "ASC"]);



        return $this->render('user/index.html.twig', [
            'users' => $users
        ]);
    }
    
    // ------------- AFFICHER DÉTAILS -------------

    #[Route('/user/{id}', name: 'show_user')]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
            'roles'=> $user->getRoles()
        ]);
    }

    // ------------- PAGE PERSO ------------- en cours

    #[Route('/espace-perso', name: 'pageperso_user')]
    public function pagePerso(): Response
    {
        $user = $this->getUser();
        
        if ($user) {
            return $this->render('user/pageperso.html.twig', [
                'user' => $user
            ]);
        } else {
            return $this->render('home/club.html.twig');
        }
    }

    // ------------- MODIFIER USER EN SESSION -------------

    #[Route('/user/{id}/edit', name: 'edit_user')]
    public function editCurrentUser(User $user, Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
        $userSession = $this->getUser();
        // récupérer l'id de l'user dans l'url et on récupère avec un findBy un utilisateur qui correspond à cet ID
        $user = $userRepository->findOneBy(['id' => $user->getId()]);
        
        // si le $user correspond à l'ID du User 
        if ($userSession->getId() == $user->getId()) {

            $form = $this->createForm(UserEditType::class, $user);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $user = $form->getData();

                $entityManager->persist($user);

                $entityManager->flush();
            }
            return $this->render('user/edit.html.twig',[
                'formEditUser'=> $form,
                'edit'=> $user->getId()
            ]);

        } else {
            return $this->redirectToRoute('app_login');

        }
    }

    // ------------- SUPRIMER UN USER -------------

    #[Route('/user/{id}/suppr', name: 'suppr_user')]
    public function supprUser(User $user, EvenementRepository $evenementRepository, EntityManagerInterface $entityManager)
    {
        // mettre à jour le compteur de places libres
        $participation = $user->getParticipe();
        foreach ($participation as $evenement) {
            $id = $evenement->getId();
            $evenementToUpdate = $evenementRepository->find($id);
            $evenementToUpdate->setPlacesPrises($evenementToUpdate->getPlacesPrises() - 1);
        }

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('app_user');
    }

    #[Route('/profil/photo', name: 'profil_photo_upload')]
    public function uploadPhoto(Request $request, EntityManagerInterface $entityManager,): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(PhotoProfilType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Mettre à jour l'utilisateur
            $user->setUpdatedAt(new DateTimeImmutable());
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Photo de profil mise à jour avec succès.');

            return $this->redirectToRoute('profil_photo_upload');
        }

        return $this->render('user/pageperso.html.twig', [
            'editPhotoProfil' => $form->createView(),
        ]);        
    }
}