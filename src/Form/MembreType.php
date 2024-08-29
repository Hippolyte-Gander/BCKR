<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Membre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class MembreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numLicence', TextType::class, [
                'label'=>'Titre événement',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('nom', TextType::class, [
                'label'=>'Titre événement',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('prenom', TextType::class, [
                'label'=>'Titre événement',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('numTelephone', TextType::class, [
                'label'=>'Titre événement',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('dateNaissance', null, [
                'widget' => 'single_text',
            ])
            ->add('photo', TextType::class, [
                'label'=>'Titre événement',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('adresse', TextType::class, [
                'label'=>'Titre événement',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('ville', TextType::class, [
                'label'=>'Titre événement',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('cp', TextType::class, [
                'label'=>'Titre événement',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('dateInscription', DateTimeType::class,[
                'label'=>"Date d'inscription",
                'widget'=>'single_text',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('utilisateur', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'pseudo',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Membre::class,
        ]);
    }
}
