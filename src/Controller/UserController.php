<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Membre;
use App\Repository\UserRepository;
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

    // ------------- PAGE PERSO ------------- 
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
}