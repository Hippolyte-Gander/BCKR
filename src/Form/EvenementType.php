<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label'=>"Titre de l'événement",
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('description', TextType::class, [
                'label'=>"Description de l'événement",
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('places', IntegerType::class, [
                'label'=>'Nombre de places maximum',
                // 'data' => 1,
                'attr'=> [
                    'class'=> 'texte-formulaire',
                    'min'=> 1,
                ]
            ])
            ->add('contenu', TextareaType::class, [
                'label'=>"Contenu de l'événement",
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('dateDebut', DateTimeType::class,[
                'label'=>'Date de début',
                'widget'=>'single_text',
                'attr'=> [
                    'class'=> 'texte-formulaire',
                    'min'=> (new \DateTime('tomorrow'))->format('Y-m-d\TH:i'), // date minimum = demain
                ]
            ])
            ->add('dateFin', DateTimeType::class,[
                'label'=>'Date de fin',
                'widget'=>'single_text',
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('visibilite', ChoiceType::class, [
                'label'=>'Visible par',
                'choices' => [
                    'Tous' => 'tous',
                    'Membres' => 'membres',
                    'Comité' => 'admins',
                ],
                'attr'=> [
                    'class'=> 'texte-formulaire'
                ]
            ])
            ->add('affiche', FileType::class,[
                'label' => "Ajouter une affiche à l'événement",
                'multiple' => false,
                'mapped' => false,
                'required' => false,
                'attr'=> [
                    'class'=> 'upload-btn',
                    'enctype'=> 'multipart/form-data'
                ],
                'constraints' => [
                    new \Symfony\Component\Validator\Constraints\File([
                        'maxSize' => '4000k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'maxSizeMessage' => 'La taille maximale autorisée est de 4 Mo.',
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier valide (JPEG, PNG, ou WEBP).',
                    ])
                ],
            ])
            ->add('Valider', SubmitType::class, [
                'attr'=> [
                    'class'=> 'valider-btn-formulaire'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
