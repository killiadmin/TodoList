<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class TaskFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'required' => true,
                'label' => 'Titre',
                'label_attr' => [
                  'class' => 'fw-bold'
                ],
                'attr' => [
                    'class' => 'form-control mb-2'
                ],
                'constraints' => [
                    new Length([
                        'max' => 100,
                        'maxMessage' => 'Votre titre ne peut pas dépasser {{ limit }} caractères',
                    ])
                ],
            ])
            ->add('content', TextareaType::class, [
                'required' => true,
                'label' => 'Contenu',
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
