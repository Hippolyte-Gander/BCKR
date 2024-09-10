<?php

namespace App\Controller;

use App\Repository\EvenementRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    // ------------- PAGE D'ACCUEIL -------------
    #[Route('/', name: 'app_home')]
    public function index(EvenementRepository $evenementRepository): Response
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

        return $this->render('home/index.html.twig', [
            'evenements' => $evenements
        ]);
    }

    // ------------- PAGE MENTIONS LÉGALES -------------
    #[Route('/mentions', name: 'mentions_home')]
    public function mentions(): Response
    {
        return $this->render('home/mentions.html.twig');
    }

    // ------------- PAGE DU CLUB -------------
    #[Route('/club', name: 'club_home')]
    public function club(): Response
    {
        return $this->render('home/club.html.twig');
    }

    // ------------- PAGE ENTRAINEMENTS -------------
    #[Route('/entrainements', name: 'entrainements_home')]
    public function entrainement(): Response
    {
        return $this->render('home/entrainements.html.twig');
    }
}
