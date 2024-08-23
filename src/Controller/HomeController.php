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
        $evenements = $evenementRepository->findBy([], ["dateDebut"=> "DESC"]);
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
}
