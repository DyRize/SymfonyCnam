<?php

namespace App\Form;

use App\Entity\Calendar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre'
            ])
            ->add('start', DateTimeType::class, [
                'date_widget' => 'single_text',
                'label' => 'Date de début'
            ])
            ->add('end', DateTimeType::class, [
                'date_widget' => 'single_text',
                'label' => 'Date de fin'
            ])
            ->add('description')
            ->add('all_day')
            ->add('background_color', ColorType::class, [
                'label' => 'Couleur de fond'
            ])
            ->add('border_color', ColorType::class, [
                'label' => 'Couleur de bordure'
            ])
            ->add('text_color', ColorType::class, [
                'label' => 'Couleur du texte'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Calendar::class,
        ]);
    }
}
