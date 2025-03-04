<?php

// src/Entity/Services.php
namespace App\Entity;

//control de saisie librebry 
use Symfony\Component\Validator\Constraints as Assert;

use App\Repository\RendezVousRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CategorieRepository;
use App\Repository\ServicesRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

#[ORM\Entity(repositoryClass: ServicesRepository::class)]
class Services
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Le nom ne peut pas être vide.")]
    #[Assert\Length(max: 255, maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $nom = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Le contenu ne peut pas être vide.")]
    #[Assert\Length(max: 255, maxMessage: "Le contenu ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $content = null;

    #[ORM\Column(type: 'date')]
    #[Assert\NotBlank(message: "La date de création ne peut pas être vide.")]
    #[Assert\Type("\DateTimeInterface", message: "La date de création doit être une date valide.")]
    private ?\DateTimeInterface $created = null;

    #[ORM\OneToMany(mappedBy: 'services', targetEntity: RendezVous::class, orphanRemoval: true)]
    private Collection $rendezVouss;

    #[ORM\Column(type: 'date', nullable: true)]
    #[Assert\Type("\DateTimeInterface", message: "La date de mise à jour doit être une date valide.")]
    private ?\DateTimeInterface $updated = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\Length(max: 255, maxMessage: "La catégorie ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $categorie = null;

    #[ORM\Column(type: 'boolean')]
    private bool $dispoDomicile = false;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank(message: "La durée ne peut pas être vide.")]
    #[Assert\Positive(message: "La durée doit être un nombre positif.")]
    private ?int $duree = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank(message: "Le prix ne peut pas être vide.")]
    #[Assert\Positive(message: "Le prix doit être un nombre positif.")]
    private ?int $prix = null;

    public function __construct()
    {
       // $this->created = new \DateTime(); // Automatically set creation date
        $this->rendezVouss = new ArrayCollection(); // Initialize collection
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;
        return $this;
    }

    

    // Getters et Setters pour les nouveaux attributs
    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(?\DateTimeInterface $updated): self
    {
        $this->updated = $updated;
        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function isDispoDomicile(): bool
    {
        return $this->dispoDomicile;
    }

    public function setDispoDomicile(bool $dispoDomicile): self
    {
        $this->dispoDomicile = $dispoDomicile;
        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;
        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    /**
     * @return Collection<int, RendezVous>
     */
    public function getRendezVouss(): Collection
    {
        return $this->rendezVouss;
    }

    public function addCRendezVousontrat( $rendezVous): self
    {
        if (!$this->rendezVouss->contains($rendezVous)) {
            $this->rendezVouss->add($rendezVous);
            $rendezVous->setServices($this);
        }

        return $this;
    }

    public function removeCRendezVousontrat( $rendezVous): self
    {
        if ($this->rendezVouss->removeElement($rendezVous)) {
            // set the owning side to null (unless already changed)
            if ($rendezVous->getServices() === $this) {
                $rendezVous->setServices(null);
            }
        }

        return $this;
    }


}


    
    