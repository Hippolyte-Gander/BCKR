<?php

namespace App\Form;

use App\Model\SearchData;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('recherche', TextType::class, [
                'attr'=> [
                    'placeholder'=> 'Rechercher un événement',
                    'class'=>'barre-recherche'
                ]
            ])
            ->add('valider', SubmitType::class, [
                'label'=> '<i aria-label="Rechercher un événement par titre" class="fa-solid fa-magnifying-glass"></i>',
                'label_html' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class'=> SearchData::class,
            // 'method'=> 'GET'
        ]);
    }
}
