<?php

namespace App\Form;

use App\Entity\CategorierendezVous;
use App\Entity\RendezVous;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert; 
use App\Entity\Services;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Categorie;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType; 







class RendezVousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('services', EntityType::class, [
                'class' => Services::class,
                'choice_label' => 'nom',
                'label' => 'Services',
                'constraints' => [
                    new Assert\NotNull(['message' => 'Le service ne peut pas être vide.']),
                ],
            ])
            ->add('nomClient', TextType::class, [
                'label' => 'Nom du Client',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom du client ne peut pas être vide.']),
                    new Assert\Length(['max' => 255, 'maxMessage' => 'Le nom du client ne peut pas dépasser {{ limit }} caractères.']),
                ],
            ])

            ->add('dateHeure', DateTimeType::class, [
                'label' => 'Date et Heure',
                'widget' => 'single_text', // Use a single input for datetime
                'required' => true, // Make the field required
                'empty_data' => null, // Allow empty data to be null
                'invalid_message' => 'La date et l\'heure doivent être une date valide.', // Custom error message
                'constraints' => [
                    new Assert\NotNull(['message' => 'La date et l\'heure sont obligatoires.']),
                    new Assert\GreaterThan(['value' => 'now', 'message' => 'La date doit être postérieure à aujourd\'hui.']),
                ],
            ])

            ->add('image', FileType::class, [
                'label' => 'Image',
                'required' => false, // Make the field optional
                'data_class' => null, // Allow null values
                'empty_data' => '', // Ensure empty data is an empty string, not null
                'constraints' => [
                    new Assert\File([
                        'maxSize' => '1024k',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF).',
                    ]),
                ],
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu',
                'required' => false, // Make the field optional
                'constraints' => [
                    new Assert\Length(['max' => 255, 'maxMessage' => 'Le lieu ne peut pas dépasser {{ limit }} caractères.']),
                ],
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Antécédents médicaux',
                'required' => false, // Make the field optional
                'constraints' => [
                    new Assert\Length(['max' => 255, 'maxMessage' => 'Les antécédents médicaux ne peuvent pas dépasser {{ limit }} caractères.']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
        ]);
    }
}
    