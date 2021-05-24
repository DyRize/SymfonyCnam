<?php

namespace App\Form;

use App\Entity\Project;
use App\Entity\Student;
use App\Entity\Subject;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('arrivedAt')
            ->add('graduatedAt')
            ->add('relatedUser')
            ->add('promotion')
            ->add('subjects', EntityType::class, [
                'class' => Subject::class,
                'choice_label' => 'label',
                'expanded' => true,
                'multiple' => true
            ])
            ->add('projects', EntityType::class, [
                'class' => Project::class,
                'choice_label' => 'label',
                'expanded' => true,
                'multiple' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
