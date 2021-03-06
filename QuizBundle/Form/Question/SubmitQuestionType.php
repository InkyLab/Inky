<?php

namespace Inky\QuizBundle\Form\Question;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Inky\QuizBundle\Form\Answer\SubmitAnswerType;

class SubmitQuestionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content')
            ->add('answer', 'collection', array('type' => new SubmitAnswerType(),
												'allow_add' => true,
												'allow_delete' => true,
												'prototype' => true,
												'prototype_name' => '__char_prot__'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Inky\QuizBundle\Entity\Question\SubmitQuestion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inky_quizbundle_question_submitquestiontype';
    }
}
