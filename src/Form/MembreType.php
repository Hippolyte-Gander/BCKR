<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Membre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class MembreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numLicence', TextType::class, [
                'required'=>false,
                'label'=>'Numéro de licence',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('nom', TextType::class, [
                'required'=>false,
                'label'=>'Nom',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('prenom', TextType::class, [
                'required'=>false,
                'label'=>'Prénom',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('numTelephone', TextType::class, [
                'required'=>false,
                'label'=>'Numéro de téléphone',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('dateNaissance', DateTimeType::class, [
                'required'=>false,
                'label'=>'Date de naissance',
                'widget'=>'single_text',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('photo', TextType::class, [
                'required'=>false,
                'label'=>'Photo',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('adresse', TextType::class, [
                'required'=>false,
                'label'=>'Adresse',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('ville', TextType::class, [
                'required'=>false,
                'label'=>'Ville',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('cp', TextType::class, [
                'required'=>false,
                'label'=>'Code postal',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('dateInscription', DateTimeType::class,[
                'required'=>false,
                'label'=>"Date d'inscription",
                'widget'=>'single_text',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('utilisateur', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'pseudo',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('Valider', SubmitType::class, [
                'attr'=> [
                    'class'=> 'valider-btn-formulaire'
                ]
            ])
        ;    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Membre::class,
        ]);
    }
}
