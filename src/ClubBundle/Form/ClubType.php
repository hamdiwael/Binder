<?php

namespace ClubBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ClubType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
                 ->add('specialty')
            ->add('file')

            ->add('responsible',EntityType::class,array(
                'class'=>'ClubBundle:teacher',
                'choice_label'=>'name',
                'multiple'=>false,
                'expanded' => false,))
                  ->add('members',EntityType::class,array(
                      'class'=>'ClubBundle:Pupil',
                      'choice_label'=>'name',
                      'multiple'=>false,
                      'expanded' => false,))




                    ->add('add',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ClubBundle\Entity\Club'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'clubbundle_club';
    }



}
