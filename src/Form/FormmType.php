<?php

namespace App\Form;

use App\Entity\ZoneDeLoisir;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class FormmType extends AbstractType
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
            ->add('image', FileType::class,array('data_class' => null,'attr' => array(
                'class'=>'form-control border-color-6'
            )))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ZoneDeLoisir::class,
        ]);
    }
}
