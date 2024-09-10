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
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ParticipationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nbrParticipants', IntegerType::class, [
                'label'=>'Nombre de places maximum',
                'data' => 1,
                'attr'=> [
                    'class'=> 'texte-formulaire',
                    'min'=> 1,
                ]
            ])
            ->add('Valider', SubmitType::class, [
                'attr'=> [
                    'class'=> 'valider-btn-formulaire'
                ]
            ])
//             ->add('inscrit', EntityType::class, [
//                 'class' => User::class,
// 'choice_label' => 'id',
//             ])
//             ->add('inscriptions', EntityType::class, [
//                 'class' => Evenement::class,
// 'choice_label' => 'id',
//             ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participations::class,
        ]);
    }
}
