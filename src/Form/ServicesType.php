<?php
// src/Form/ServicesType.php
namespace App\Form;

use App\Entity\RendezVous;
use App\Entity\Services;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ServicesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           
            // Champ pour le nom
            ->add('nom', TextType::class, [
                'label' => 'Nom du service',
            ])
            // Champ pour le contenu
            ->add('content', TextType::class, [
                'label' => 'Description du service',
            ])
            // Champ pour la date de création
            ->add('created', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de création',
            ])
            // Champ pour la date de mise à jour
            ->add('updated', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de mise à jour',
                'required' => false, // Ce champ est facultatif
            ])
            // Champ pour la catégorie
            ->add('categorie', TextType::class, [
                'label' => 'Catégorie',
                'required' => false, // Ce champ est facultatif
            ])
            // Champ pour la disponibilité à domicile
            ->add('dispoDomicile', CheckboxType::class, [
                'label' => 'Disponible à domicile',
                'required' => false, // Ce champ est facultatif
            ])
            // Champ pour la durée
            ->add('duree', IntegerType::class, [
                'label' => 'Durée (en minutes)',
            ])
            // Champ pour le prix
            ->add('prix', IntegerType::class, [
                'label' => 'Prix (en euros)',
            ])
            // Bouton de soumission
            ->add('Ajouter', SubmitType::class, [
                'label' => 'Ajouter le service',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Services::class,
        ]);
    }
}