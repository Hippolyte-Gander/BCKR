<?php

namespace App\Controller;

use App\Entity\Entrainement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EntrainementController extends AbstractController
{
    // #[Route('/entrainements', name: 'app_entrainements')]
    // public function listEntrainements(EntityManagerInterface $entityManager): Response
    // {
    //     $entrainements = $entityManager->getRepository(Entrainement::class)->findBy([], ['date' => 'ASC']);

    //     return $this->render('entrainement/list.html.twig', [
    //         'entrainements' => $entrainements,
    //     ]);
    // }
}
