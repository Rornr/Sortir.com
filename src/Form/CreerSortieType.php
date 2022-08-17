<?php

namespace App\Form;

use App\Entity\TabFiltre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreerSortieType extends AbstractType
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
            ->add('date_limite_inscription')
            ->add('duree')
            ->add('description_et_infos')
            ->add('campus')
            ->add('ville')
            ->add('lieu')
            ->add('rue')
            ->add('code_postal')
            ->add('latitude')
            ->add('longitude')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TabFiltre::class,
        ]);
    }
}
