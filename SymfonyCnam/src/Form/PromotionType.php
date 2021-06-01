<?php

namespace App\Form;

use App\Entity\Promotion;
use App\Entity\Teacher;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('label', TextType::class, [
                'label' => 'Libellé'
            ])
            ->add('startedAt', DateTimeType::class, [
                'label' => 'Date de début'
            ])
            ->add('endedAt', DateTimeType::class, [
                'label' => 'Date de fin'
            ])
            ->add('manager', EntityType::class, [
                'class' => Teacher::class,
                'label' => "Utilisateur associé"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Promotion::class,
        ]);
    }
}
