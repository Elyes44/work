<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\CategorieRepository;
#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class   RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'datetime', nullable: true)] // Allow null values temporarily
    #[Assert\NotNull(message: "La date et l'heure sont obligatoires.")] // Validation constraint
    #[Assert\GreaterThan("now", message: "La date doit être postérieure à aujourd'hui.")]
    private ?\DateTimeInterface $dateHeure = null; 

    #[ORM\ManyToOne(targetEntity: Services::class)]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Le service ne peut pas être vide.")]
    private ?Services $services = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom du client ne peut pas être vide.")]
    #[Assert\Length(max: 255, maxMessage: "Le nom du client ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $NomClient = null;

    #[ORM\Column(length: 255, nullable: true)] // Allow null values
    private ?string $image = null; 

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255, maxMessage: "Le lieu ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $lieu = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255, maxMessage: "Les antécédents médicaux ne peuvent pas dépasser {{ limit }} caractères.")]
    private ?string $adresse = null;


   

    public function getServices(): ?Services
    {
        return $this->services;
    }

    public function setServices(?Services $services): self
    {
        $this->services = $services;
        return $this;
    }



    public function getLieu(): ?string
{
    return $this->lieu;
}

public function setLieu(?string $lieu): self
{
    $this->lieu = $lieu;
    return $this;
}

public function getAdresse(): ?string
{
    return $this->adresse;
}

public function setAdresse(?string $adresse): self
{
    $this->adresse = $adresse;
    return $this;
}





    

    public function getId(): ?int
    {
        return $this->id;
    }

    
     
    

   
 public function getDateHeure(): ?\DateTimeInterface
    {
        return $this->dateHeure;
    }

    public function setDateHeure(\DateTimeInterface $dateHeure): self
    {
        $this->dateHeure = $dateHeure;

        return $this;
    }
   

   

    
    



    

    
    

    public function getNomClient(): ?string
    {
        return $this->NomClient;
    }

    public function setNomClient(string $NomClient): self
    {
        $this->NomClient = $NomClient;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }


     

    

    
}
