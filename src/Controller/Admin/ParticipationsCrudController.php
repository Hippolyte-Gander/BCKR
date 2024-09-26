<?php

namespace App\Controller\Admin;

use App\Entity\Participations;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ParticipationsCrudController extends AbstractCrudController
{
    use Trait\DetailTrait;
    
    public static function getEntityFqcn(): string
    {
        return Participations::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->onlyOnIndex(),
            IntegerField::new('nbrParticipants'),
            AssociationField::new('userInscrit')
                ->onlyOnIndex(),
            AssociationField::new('evenementInscrit')
                ->onlyOnIndex(),
        ];
    }
}
