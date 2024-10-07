<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Evenement;
use App\Entity\Participations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DeleteParticipationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('valider', SubmitType::class, [
                'label'=> 'Se désinscrire',
                'attr'=> [
                    'class'=> 'suppr-btn-formulaire'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participations::class,
        ]);
    }
}
