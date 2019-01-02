<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\ProjetRepository")
 */
class Projet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre_projet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Poster;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Techno;

    /**
     * @ORM\Column(type="text")
     */
    private $Team;

    /**
     * @ORM\Column(type="text")
     */
    private $Travail;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_conception;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreProjet(): ?string
    {
        return $this->Titre_projet;
    }

    public function setTitreProjet(string $Titre_projet): self
    {
        $this->Titre_projet = $Titre_projet;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->Poster;
    }

    public function setPoster(string $Poster): self
    {
        $this->Poster = $Poster;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getTechno(): ?string
    {
        return $this->Techno;
    }

    public function setTechno(string $Techno): self
    {
        $this->Techno = $Techno;

        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->Team;
    }

    public function setTeam(string $Team): self
    {
        $this->Team = $Team;

        return $this;
    }

    public function getTravail(): ?string
    {
        return $this->Travail;
    }

    public function setTravail(string $Travail): self
    {
        $this->Travail = $Travail;

        return $this;
    }

    public function getDateConception(): ?\DateTimeInterface
    {
        return $this->Date_conception;
    }

    public function setDateConception(\DateTimeInterface $Date_conception): self
    {
        $this->Date_conception = $Date_conception;

        return $this;
    }
}
