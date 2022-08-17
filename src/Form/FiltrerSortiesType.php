<?php

namespace App\Form;

use App\Entity\TabFiltre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FiltrerSortiesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom_de_la_sortie')
            ->add('Date_la_sortie')
            ->add('cloture')
            ->add('inscrits')
            ->add('place')
            ->add('etats')
            ->add('inscrit')
            ->add('organisateur')
            ->add('actions')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TabFiltre::class,
        ]);
    }
}
