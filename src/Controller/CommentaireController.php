<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Evenement;
use App\Form\CommentaireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentaireController extends AbstractController
{
    // #[Route('/commentaire', name: 'app_commentaire')]
    // public function index(): Response
    // {
    //     return $this->render('commentaire/index.html.twig', [
    //         'controller_name' => 'CommentaireController',
    //     ]);
    // }



}