<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use App\Repository\EvenementRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;

class HomeController extends AbstractController
{
    // ------------- PAGE D'ACCUEIL -------------
    #[Route('/', name: 'app_home')]
    public function index(EvenementRepository $evenementRepository, PaginatorInterface $paginator,Request $request): Response
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
            4 /*limit per page*/
        );

        return $this->render('home/index.html.twig', [
            'pagination' => $pagination,
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
    
    // ------------- PAGE CONTACT -------------
    #[Route('/contact', name: 'contact_home')]
    public function contact(Request $request, MailerInterface $mailer): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // on récupère le message du formulaire
            $message = $form->get('message')->getData();
            // s'il y a un utilisateur on prend son adresse mail, si non on prends celle du formulaire
            if ($user) {
                $expediteur = $user->getEmail();
            } else {
                $expediteur = $form->get('expediteur')->getData();
            }
            // on créé l'email en prenant les paramètres fournis plus haut
            $email = (new Email())
                ->from($expediteur)
                ->to('Badminton.bckr@gmail.com')
                ->subject('Mail envoyé depuis le site')
                ->text($message);
            $mailer->send($email);

            $this->addFlash('success', 'Mail envoyé avec succès');
            
            return $this->redirectToRoute('contact_home');
        // si le formulaire n'est pas valide on affiche un message d'erreur
        } elseif ($form->isSubmitted()) {
            $this->addFlash('danger', 'Une erreur est survenue');
        }
        
        return $this->render('home/contact.html.twig', [
            'form' => $form->createView(),
        ]);
        
    }

}
