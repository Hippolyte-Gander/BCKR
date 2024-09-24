<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserEditType;
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
                $photoProfil = $form->get('photoProfil')->getData();

                if ($photoProfil) {
                    // supprimer l'ancienne photo de profil
                    if ($user->getPhotoProfil()) {
                        $img = $user->getPhotoProfil();
                        // On supprime le fichier
                        unlink($this->getParameter('photoProfil_directory').'/'.$img);
                    }
                    // On génère un nouveau nom de fichier
                    $fichier = md5(uniqid()).'.'.$photoProfil->guessExtension();
                    // On copie le fichier dans le dossier uploads
                    $photoProfil->move(
                        $this->getParameter('photoProfil_directory'),
                        $fichier
                    );
                    //modifier l'image de profil
                    $user->setPhotoProfil($fichier);
                }

                $user = $form->getData();

                $entityManager->persist($user);

                $entityManager->flush();

                return $this->redirectToRoute('pageperso_user');
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
}