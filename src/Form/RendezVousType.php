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
            ->add('NomClient', TextType::class, [
                'label' => 'Nom du Client',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom du client ne peut pas être vide.']),
                    new Assert\Length(['max' => 255, 'maxMessage' => 'Le nom du client ne peut pas dépasser {{ limit }} caractères.']),
                ],
            ])
            ->add('title', TextType::class, [
                'label' => 'Titre du Rendez-Vous',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le titre du rendez-vous ne peut pas être vide.']),
                    new Assert\Length(['max' => 255, 'maxMessage' => 'Le titre du rendez-vous ne peut pas dépasser {{ limit }} caractères.']),
                ],
            ])
            ->add('start', DateTimeType::class, [
                'label' => 'Date et Heure de Début',
                'widget' => 'single_text', // Use a single input for datetime
                'required' => true, // Make the field required
                'empty_data' => null, // Allow empty data to be null
                'invalid_message' => 'La date et l\'heure doivent être une date valide.', // Custom error message
                'constraints' => [
                    new Assert\NotNull(['message' => 'La date et l\'heure de début sont obligatoires.']),
                    new Assert\GreaterThan(['value' => 'now', 'message' => 'La date de début doit être postérieure à aujourd\'hui.']),
                ],
            ])
            ->add('end', DateTimeType::class, [
                'label' => 'Date et Heure de Fin',
                'widget' => 'single_text', // Use a single input for datetime
                'required' => true, // Make the field required
                'empty_data' => null, // Allow empty data to be null
                'invalid_message' => 'La date et l\'heure doivent être une date valide.', // Custom error message
                'constraints' => [
                    new Assert\NotNull(['message' => 'La date et l\'heure de fin sont obligatoires.']),
                    new Assert\GreaterThan(['value' => 'now', 'message' => 'La date de fin doit être postérieure à aujourd\'hui.']),
                    new Assert\Expression([
                        'expression' => 'value >= this.getParent().get("start").getData().modify("+1 hour")',
                        'message' => 'La date de fin doit être au moins une heure après la date de début.',
                    ]),
                ],
            ])
            ->add('telephone', TextType::class, [
                'label' => 'Téléphone',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le numéro de téléphone est obligatoire.']),
                    new Assert\Regex([
                        'pattern' => '/^\+?\d{1,4}?[-.\s]?\(?\d{1,4}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/',
                        'message' => 'Le numéro de téléphone n\'est pas valide.',
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
                'label' => 'Adresse',
                'required' => false, // Make the field optional
                'constraints' => [
                    new Assert\Length(['max' => 255, 'maxMessage' => 'L\'adresse ne peut pas dépasser {{ limit }} caractères.']),
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