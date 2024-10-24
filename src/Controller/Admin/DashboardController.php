<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Evenement;
use App\Entity\Commentaire;
use App\Entity\ImageEvenement;
use App\Entity\Participations;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(EvenementCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('BCKR');
    }

    public function configureMenuItems(): iterable
    {
        // yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToRoute('Retour accueil', 'fas fa-home', 'app_home');
        yield MenuItem::linkToCrud('Événements', 'fas fa-calendar', Evenement::class);
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user-pen', User::class);
        // yield MenuItem::linkToCrud('Commentaire', 'fas fa-pen', Commentaire::class);
        yield MenuItem::linkToCrud('Participations', 'fas fa-handshake', Participations::class);
        yield MenuItem::linkToCrud("Images d'événement", 'fas fa-image', ImageEvenement::class);
    }
}
