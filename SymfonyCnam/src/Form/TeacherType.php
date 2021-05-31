<?php

namespace App\Form;

use App\Entity\Subject;
use App\Entity\Teacher;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeacherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('relatedUser', EntityType::class, [
                'class' => User::class,
                'label' => 'Utilisateur associé'
            ])
            ->add('subjects', EntityType::class, [
                'class' => Subject::class,
                'label' => 'Matières enseignées',
                'choice_label' => 'label',
                'expanded' => true,
                'multiple' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Teacher::class,
        ]);
    }
}
