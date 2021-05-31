<?php

namespace App\Form;

use App\Entity\Project;
use App\Entity\Student;
use App\Entity\Subject;
use App\Entity\Teacher;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('label', TextType::class, [
                'label' => 'Libellé'
            ])
            ->add('teachers', EntityType::class, [
                'class' => Teacher::class,
                'label' => 'Enseignants'
            ])
            ->add('students', EntityType::class, [
                'class' => Student::class,
                'label' => 'Étudiants'
            ])
            ->add('projects', EntityType::class, [
                'class' => Project::class,
                'label' => 'Projets associés'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Subject::class,
        ]);
    }
}
