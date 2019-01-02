<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\InfoRepository")
 */
class Info
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
    private $Poster;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="text")
     */
    private $Presentation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CV;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Motivation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Facebook;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Twitter;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Linkedin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Github;

       /**
     * @ORM\Column(type="string", length=255)
     */
    private $Telephone;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->Presentation;
    }

    public function setPresentation(string $Presentation): self
    {
        $this->Presentation = $Presentation;

        return $this;
    }

    public function getCV(): ?string
    {
        return $this->CV;
    }

    public function setCV(string $CV): self
    {
        $this->CV = $CV;

        return $this;
    }

    public function getMotivation(): ?string
    {
        return $this->Motivation;
    }

    public function setMotivation(string $Motivation): self
    {
        $this->Motivation = $Motivation;

        return $this;
    }

    public function getFacebook(): ?string
    {
        return $this->Facebook;
    }

    public function setFacebook(string $Facebook): self
    {
        $this->Facebook = $Facebook;

        return $this;
    }

    public function getTwitter(): ?string
    {
        return $this->Twitter;
    }

    public function setTwitter(string $Twitter): self
    {
        $this->Twitter = $Twitter;

        return $this;
    }

    public function getLinkedin(): ?string
    {
        return $this->Linkedin;
    }

    public function setLinkedin(string $Linkedin): self
    {
        $this->Linkedin = $Linkedin;

        return $this;
    }

    public function getGithub(): ?string
    {
        return $this->Github;
    }

    public function setGithub(string $Github): self
    {
        $this->Github = $Github;

        return $this;
    }

    public function getTelephone()
    {
        return $this->Telephone;
    }

    public function setTelephone($Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }
}
