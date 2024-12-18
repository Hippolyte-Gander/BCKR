<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class MembreRegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label'=>'Email'
            ])
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
                'label'=>'Date de naissance',
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
            ->add('agreeTerms', CheckboxType::class, [
                'label' => false,
                'label_html'=> true,
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => "Veuillez accepter les conditions générales d'utilisations.",
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                        'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[+\-\/\*\$&#]).+$/',
                        'message' => 'Le mot de passe doit contenir au moins une lettre minuscule, une majuscule, un chiffre et un caractère spécial (+ - / * $ & #).',
                    ]),
                    new Length([
                        'min' => 12,
                        'minMessage' => 'Le mot de passe doit contenir au moins 12 caractères.',
                    ]),
                ],
                'mapped' => false,
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent être identiques.',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => true,
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Répéter le mot de passe'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
