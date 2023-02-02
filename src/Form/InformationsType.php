<?php

namespace App\Form;

use App\Entity\Informations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InformationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('length')
            ->add('height')
            ->add('speedMax')
            ->add('passagerCapacity')
            ->add('distanceCapacity')
            ->add('fuelCapacity')
            ->add('cockpitImage')
            ->add('presentImage')
            ->add('model')
            ->add('plane')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Informations::class,
        ]);
    }
}
