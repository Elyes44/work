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

use App\Entity\Services;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Categorie;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
class RendezVousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('services', EntityType::class, [
            'class' => Services::class,
            'choice_label' => 'nom',
            'label' => 'Services',
        ])
           ->add('nomClient')
          
           ->add('dateHeure')
           
            
            
            
            ->add('image' , FileType::class, array('data_class' => null , 'label'=>"image") )
            ->add('lieu', TextType::class, [
                'label' => 'Lieu',
                'required' => false, // Rend le champ facultatif
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Antécédents médicaux',
                'required' => false, // Rend le champ facultatif
            ])
            
            
          
            
        ;
        
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
        ]);
    }
}
    