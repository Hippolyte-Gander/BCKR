<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Membre;
use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
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
                'label'=>'Nom'
            ])
            ->add('prenom', TextType::class, [
                'label'=>'Prénom'
            ])
            ->add('numTelephone', TextType::class, [
                'label'=>'Numéro de téléphone'
            ])
            ->add('dateNaissance', DateType::class,[
                'label'=>'Date de début',
                'widget'=>'single_text',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('adresse', TextType::class, [
                'label'=>'Adresse'
            ])
            ->add('ville', TextType::class, [
                'label'=>'Ville'
            ])
            ->add('cp', TextType::class, [
                'label'=>'Code Postal'
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
