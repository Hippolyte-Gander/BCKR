<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pseudo', TextType::class, [
                'label'=>'Pseudo'
            ])
            ->add('nom', TextType::class, [
                'label'=>'Nom',
                'required' => false
            ])
            ->add('prenom', TextType::class, [
                'label'=>'Prénom',
                'required' => false
            ])
            ->add('numTelephone', TextType::class, [
                'label'=>'Numéro de téléphone',
                'required' => false
            ])
            ->add('photoProfil', FileType::class,[
                'label' => false,
                'multiple' => false,
                'mapped' => false,
                'required' => false,
                'attr'=> [
                    'enctype'=> 'multipart/form-data'
                ]
            ])
            ->add('dateNaissance', DateType::class,[
                'label'=>'Date de début',
                'widget'=>'single_text',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ],
                'required' => false
            ])
            ->add('adresse', TextType::class, [
                'label'=>'Adresse',
                'required' => false
            ])
            ->add('ville', TextType::class, [
                'label'=>'Ville',
                'required' => false
            ])
            ->add('cp', TextType::class, [
                'label'=>'Code Postal',
                'required' => false
            ])
            ->add('valider', SubmitType::class, [
                'attr'=> [
                    'class'=> 'valider-btn-formulaire'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
