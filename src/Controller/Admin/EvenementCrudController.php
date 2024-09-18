<?php

namespace App\Controller\Admin;

use App\Entity\Evenement;
use App\Entity\ImageEvenement;
use App\Form\ImageEvenementType;
use DateTime;
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
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

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
            yield IdField::new('id')
                ->hideOnIndex()
                ->hideOnForm(),
            yield TextField::new('titre'),
            yield TextField::new('description'),
            yield TextField::new('contenu')
                ->hideOnIndex(),
            yield DateTimeField::new('dateDebut'),
            yield DateTimeField::new('dateFin')
                ->hideOnIndex(),
            yield IntegerField::new('places')
                ->hideOnIndex(),
            yield TextField::new('visibilite'),
            yield TextField::new('affiche')
                ->hideOnIndex(),
            // Ajout d'un champ personnalisé pour afficher les participations
            yield CollectionField::new('participations', 'Participations')
                ->setTemplatePath('admin/evenementParticipations.html.twig') // Template Twig personnalisé pour les participations
                ->onlyOnDetail(),
            yield CollectionField::new('imagesEvenement')
                ->setEntryType(ImageEvenementType::class)
                ->hideOnIndex()
            // ImageField::new('affiche')->setUploadedFileNamePattern('[year]/[month]/[day]/[slug]-[contenthash].[extension]')->setBasePath('assets/img/affiche-event/')->setUploadDir('assets/img/affiche-event/')->setRequired(false),
        ];
    }
}