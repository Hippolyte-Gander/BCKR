<?php

namespace App\Controller\Admin;

use App\Entity\Evenement;
use phpDocumentor\Reflection\Types\Integer;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Component\Translation\TranslatableMessage;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EvenementCrudController extends AbstractCrudController
{
    use Trait\DetailTrait;

    public static function getEntityFqcn(): string
    {
        return Evenement::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('titre'),
            TextField::new('description'),
            TextField::new('contenu'),
            IntegerField::new('places'),
            TextField::new('visibilite'),
            // Ajouter un champ personnalisé pour afficher les participations
            CollectionField::new('participations', 'Participations')
                ->setTemplatePath('admin/evenementParticipations.html.twig') // Template Twig personnalisé pour les participations
                ->onlyOnDetail(),
            // ImageField::new('affiche')->setUploadedFileNamePattern('[year]/[month]/[day]/[slug]-[contenthash].[extension]')->setBasePath('assets/img/affiche-event/')->setUploadDir('assets/img/affiche-event/')->setRequired(false),
        ];
    }
}
