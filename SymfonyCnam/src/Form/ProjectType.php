<?php

namespace App\Form;

use App\Entity\Project;
use App\Entity\Student;
use App\Entity\Subject;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('label', TextType::class, [
                'label' => 'Libellé'
            ])
            ->add('startedAt', DateTimeType::class, [
                'label' => 'Date de début du projet'
            ])
            ->add('endedAt', DateTimeType::class, [
                'label' => 'Date de fin du projet'
            ])
            ->add('description')
            ->add('students', EntityType::class, [
                'class' => Student::class,
                'label' => 'Participants',
                'choice_label' => 'relatedUser',
                'expanded' => true,
                'multiple' => true
            ])
            ->add('subjects', EntityType::class, [
                'class' => Subject::class,
                'label' => 'Matières associées',
                'choice_label' => 'label',
                'expanded' => true,
                'multiple' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
