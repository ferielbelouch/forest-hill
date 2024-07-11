<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;
use Gregwar\CaptchaBundle\Type\CaptchaType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


        ->add('profile', ChoiceType::class, [
            'label' => false,
            'required'   => false,
            'attr'  => [
                'class' => 'form-control p-3',
            ], 
            'choices' => [
                'Membre Pacha' => 'pacha', 
                'Carte Fréquence' => 'frequence',
                'Non Membre' => 'non_membre',
            ],
            'placeholder' => 'Sélectionner votre profil ...'
            
        ])
            ->add('firstname', null, [
                'label' => false,
                'attr'  => [
                    'class' => 'form-control p-3',
                    'placeholder' => 'Prénom ...'
                ], 
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez votre prénom',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Votre prénom ne doit contenir que des lettres',
                    ]),
                ],
            ])

            ->add('lastname', TextType::class, [
                'label' => false,
                'attr'  => [
                    'class' => 'form-control p-3',
                    'placeholder' => 'Nom ...'
                ], 
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez votre nom',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Votre nom ne doit contenir que des lettres',
                    ]),
                ],
            ] )
            ->add('birth', null, [
                'label' => false,
                'required'   => false,
                'widget' => 'single_text',
                'attr'  => [
                    'class' => 'form-control p-3',
                    'placeholder' => 'Date de naissance ...'
                ], 
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez votre date de naissance',
                    ]),
                    new LessThanOrEqual([
                        'value' => new \DateTime(),
                        'message' => "La date de naissance ne doit pas être une date ultérieur à la date d'aujourd'hui",
                    ]),
                ],
            ])

            ->add('email', TextType::class, [
                'label' => false,
                'attr'  => [
                    'class' => 'form-control p-3',
                    'placeholder' => 'Email ...'
                ], 
                
            ] )
          
            ->add('plainPassword', PasswordType::class, [
                'label' => false,
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'class' => 'form-control p-3',
                    'placeholder' => 'Mot de passe ...'
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

            ->add('agreeTerms', CheckboxType::class, [
                'label' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-check-label text-muted',
                ],
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])

            ->add('captcha', CaptchaType::class, [
                'label' => false,
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter the captcha',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control p-3',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
