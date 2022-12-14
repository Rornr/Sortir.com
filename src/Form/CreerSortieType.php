<?php

namespace App\Form;

use App\Entity\TabFiltre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreerSortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomDeLaSortie')
            ->add('dateLaSortie', DateType::class )
            ->add('cloture')
            ->add('inscrits')
            ->add('place')
            ->add('etats')
            ->add('inscrit')
            ->add('organisateur')
            ->add('actions')
            ->add('dateLimiteInscription', DateType::class)
            ->add('duree')
            ->add('descriptionEtInfos',TextareaType::class)
            ->add('campus')
            ->add('ville')
            ->add('lieu')
            ->add('rue')
            ->add('codePostal')
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
