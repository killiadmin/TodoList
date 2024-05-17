<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'required' => true,
                'label' => 'Title',
                'label_attr' => [
                  'class' => 'fw-bold'
                ],
                'attr' => [
                    'class' => 'form-control mb-2'
                ]
            ])
            ->add('content', TextareaType::class, [
                'required' => true,
                'label' => 'Content',
                'label_attr' => [
                    'class' => 'fw-bold'
                ],
                'attr' => [
                    'class' => 'form-control mb-2'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
