<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function __construct(protected Security $security) {}

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'required' => true,
                'label' => 'Username',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'form-control'
                ]
            ]);

        if ($options['add_password_fields']) {
            $builder
                ->add('firstPassword', PasswordType::class, [
                'mapped' => false,
                'label' => 'Password',
                'attr' => [
                    'autocomplete' => 'new-password',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),
                ],
            ])
                ->add('secondPassword', PasswordType::class, [
                    'mapped' => false,
                    'label' => 'Type the password again',
                    'attr' => [
                        'autocomplete' => 'new-password',
                        'class' => 'form-control'
                    ],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Please enter a password',
                        ]),
                        new Length([
                            'min' => 6,
                            'minMessage' => 'Your password should be at least {{ limit }} characters',
                            'max' => 4096,
                        ]),
                    ],
                ]);

            $builder->addEventListener(FormEvents::POST_SUBMIT, function(FormEvent $event) {
                $form = $event->getForm();
                $firstPassword = $form->get('firstPassword')->getData();
                $secondPassword = $form->get('secondPassword')->getData();

                if($firstPassword !== $secondPassword) {
                    $form->get('secondPassword')->addError(new FormError('Passwords must match.'));
                }
            });
        }

        if ($this->security->getUser()) {
            $builder->add('roles', ChoiceType::class, [
                'choices' => [
                    'User' => 'ROLE_USER',
                    'Admin' => 'ROLE_ADMIN',
                ],
                'expanded' => false,
                'multiple' => true,
                'label' => 'Role',
                'attr' => [
                    'class' => 'form-control'
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'add_password_fields' => true,
        ]);
    }
}
