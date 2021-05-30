<?php

namespace App\Form;

use App\Entity\Project;
use App\Entity\Student;
use App\Entity\Subject;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('arrivedAt', DateTimeType::class, [
                'label' => "Date d'entrée dans la formation"
            ])
            ->add('graduatedAt', DateTimeType::class, [
                'label' => "Date d'obtention du diplôme"
            ])
            ->add('relatedUser', EntityType::class, [
                'class' => User::class,
                'label' => "Utilisateur associé"
            ])
            ->add('promotion')
            ->add('subjects', EntityType::class, [
                'class' => Subject::class,
                'label' => "Matières suivies",
                'choice_label' => 'label',
                'expanded' => true,
                'multiple' => true
            ])
            ->add('projects', EntityType::class, [
                'class' => Project::class,
                'label' => "Projets associés",
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
