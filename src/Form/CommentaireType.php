<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Evenement;
use App\Entity\Commentaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('message', TextareaType::class, [
                'label'=>"Laissez un commentaire !",
                'required'=> true,
                'attr'=> [
                    'class'=> 'texte-commentaire'
                    ]
                ])
            ->add('valider', SubmitType::class, [
                'label'=>"Commenter",
                'attr'=> [
                    'class'=> 'btn-clair'
                ]
                ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
            // Activé par défaut
            'csrf_protection' => true,
            // Nom du champ pour le token CSRF
            'csrf_field_name' => '_token',
            // Identifiant unique pour le formulaire
            'csrf_token_id'   => 'formulaire_suppression_commentaire',
        ]);
    }
}
