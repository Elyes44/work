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

//////////////////////////////////////////////_Calendar_//////////////////////////////////////////////////////////
    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $start = null;
    
    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $end = null;
///////////////////////////////////////////////_Calendar_/////////////////////////////////////////////////////////

    #[ORM\ManyToOne(targetEntity: Services::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Services $services = null;

    #[ORM\Column(length: 255)]
    private ?string $NomClient = null;

    // #[ORM\Column(length: 255, nullable: true)] 
    // private ?string $image = null; 

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private ?string $telephone = null;






    // Getter and Setter for title
    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    // Getter and Setter for start
    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(?\DateTimeInterface $start): self
    {
        $this->start = $start;
        return $this;
    }

    // Getter and Setter for end
    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(?\DateTimeInterface $end): self
    {
        $this->end = $end;
        return $this;
    }
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

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
