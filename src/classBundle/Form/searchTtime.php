<?php

namespace classBundle\Form;

use Doctrine\DBAL\Types\TextType;
use Proxies\__CG__\classBundle\Entity\timeTable;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;


class searchTtime extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('day',   ChoiceType::class,array(
                'placeholder' => '',

                'choices' => array( '1-Monday' => '1-Monday', '2-Tuesday' => '2-Tuesday', '3-Wednesday' => '3-Wednesday',
                    '4-Thursday' => '4-Thursday', '5-Friday' => '5-Friday' )))
            ->add('subject',   ChoiceType::class,array(
                'placeholder' => '',

                'choices' => array( 'History' => 'History', 'Science' => 'Science', 'Geography' => 'Geography',
                    'Music' => 'Music', 'French' => 'French' )))
            ->add('time',   ChoiceType::class,array(
                'placeholder' => '',

                'choices' => array( '8:00=>10:00' => '8:00=>10:00', '10:00=>12:00' => '10:00=>12:00', '14:00=>16:00' => '14:00=>16:00',
                    '16:00=>18:00' => '16:00=>18:00' )))

            ->add('classe',EntityType::class,array(
                'class'=>'classBundle:classe',
                'choice_label'=>'nom',
                'placeholder' => '',

                'multiple'=>false,
                'expanded' => false,))



            ->add('search',SubmitType::class,[
                'attr' => ['formnovalidate ' => 'formnovalidate']
            ]);


    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'classBundle\Entity\Ttimee'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'classbundle_ttime';
    }


}
