<?php

namespace App\Form;

use App\Entity\ImageEvenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageEvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('imageFile', VichImageType::class, [
            'label' => 'Images',
        ]);
    }
    // {
    //     $builder
    //         ->add('name')
    //         ->add('size')
    //         ->add('updatedAt', null, [
    //             'widget' => 'single_text',
    //         ])
    //         ->add('evenement', EntityType::class, [
    //             'class' => Evenement::class,
    //             'choice_label' => 'id',
    //         ])
    //     ;
    // }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ImageEvenement::class,
        ]);
    }
}
