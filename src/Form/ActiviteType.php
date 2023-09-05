<?php

namespace App\Form;

use App\Entity\Activites;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ActiviteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
       
            ->add('nom', TextType::class)
            ->add('description', TextType::class)
            ->add('categorie',ChoiceType::class,[
                'choices'=> array(
                    'randonnée'=>'randonnée',
                    'quad'=>'quad',
                    'escalades'=>'escalades',
                ),
            ])
            ->add('date', DateType::class,[
                'attr' => ['class' => 'form-control '],

                'widget' =>'single_text',

            ])
            
            ->add('image', FileType::class, [
                'label' => 'image',
                'mapped' => false,
                
                ],
            )
            ->add('prix', NumberType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Activites::class,
        ]);
    }
}
