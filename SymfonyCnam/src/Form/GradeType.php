<?php

namespace App\Form;

use App\Entity\Grade;
use App\Entity\Student;
use App\Entity\Subject;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GradeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', TextType::class, [
                'label' => 'Libellé'
            ])
            ->add('date')
            ->add('value', IntegerType::class, [
                'label' => 'Valeur'
            ])
            ->add('subject', EntityType::class, [
                'class' => Subject::class,
                'label' => 'Matière associée'
            ])
            ->add('student', EntityType::class, [
                'class' => Student::class,
                'label' => 'Étudiant évalué'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Grade::class,
        ]);
    }
}
