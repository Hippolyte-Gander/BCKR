<?php

namespace App\Form;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('expediteur', EmailType::class, [
                'attr'=> [
                    'label'=> 'Expéditeur',
                    'placeholder'=> 'Entrez votre adresse mail ici',
                    'class'=>'texte-formulaire'
                ],
                'constraints' => [
                new Assert\NotBlank([
                    'message' => 'L\'email ne peut pas être vide.',
                ]),
                new Assert\Email([
                    'message' => 'L\'adresse email "{{ value }}" n\'est pas valide.',
                ]),
            ],
            ])
            ->add('message', TextareaType::class, [
                'attr'=> [
                    'placeholder'=> 'Rédigez votre message ici',
                    'class'=>'texte-mail',
                    'wrap'=>'hard'
                ]
            ])
            ->add('valider', SubmitType::class, [
                'label'=> 'Envoyer',
                'attr'=> [
                    'class'=>'btn-clair'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}