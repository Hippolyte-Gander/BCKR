<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class UserCrudController extends AbstractCrudController
{
    use Trait\DetailTrait;
    
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('pseudo'),
            EmailField::new('email'),
            ArrayField::new('roles'),
            TextField::new('nom'),
            TextField::new('prenom'),
            TextField::new('numTelephone'),
            TextField::new('numLicence'),
            DateField::new('numLicencedateNaissance'),
            TextField::new('photo'),
            TextField::new('adresse'),
            TextField::new('ville'),
            TextField::new('cp'),
            CollectionField::new('participationsEvenement', 'Participations')
            ->setTemplatePath('admin/userParticipations.html.twig') // Template Twig personnalisé pour les participations
            ->onlyOnDetail(),
        ];
    }
}
