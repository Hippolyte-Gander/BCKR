<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Membre;
use App\Form\UserEditType;
use App\Repository\UserRepository;
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
        $membre = $user->getMembre();
        
        if ($membre) {
            return $this->render('user/pageperso.html.twig', [
                'user' => $user,
                'membre' => $membre,
            ]);
        } elseif ($user) {
            return $this->render('user/pageperso.html.twig', [
                'user' => $user
            ]);
        } else {
            return $this->render('home/club.html.twig');
        }
    }

    // ------------- MODIFIER USER EN SESSION -------------

    #[Route('/user/{id}/edit', name: 'edit_user')]
    public function editCurrentUser(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        // // récupérer l'id de l'user dans l'url et on récupère avec un findBy un utilisateur qui correspond à cet ID
        // $databaseID = $userRepository->findBy(['id' => $id]);
        // // si le $user correspond à l'ID du User 
        // if ($user->getId() == $databaseID) {
        //     // sinon on redirige vers ailleurs
        // } else {
        //     return $this->redirectToRoute('app_login');
        // }

        if ($user) {
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
    public function supprUser(User $user, EntityManagerInterface $entityManager)
    {
        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('app_user');
    }
}