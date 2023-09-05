<?php

namespace App\Form;

use App\Entity\ZoneDeLoisir;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ZoneDeLoisir1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('tel')
            ->add('prix')
            ->add('type')
            ->add('email')
            ->add('nbplace')
            ->add('nbmax')
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ZoneDeLoisir::class,
        ]);
    }
    
}
