<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
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
    private $Titre_article;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Poster;

    /**
     * @ORM\Column(type="text")
     */
    private $Article;

    /**
     * @ORM\Column(type="date")
     */
    private $Publication;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreArticle(): ?string
    {
        return $this->Titre_article;
    }

    public function setTitreArticle(string $Titre_article): self
    {
        $this->Titre_article = $Titre_article;

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

    public function getArticle(): ?string
    {
        return $this->Article;
    }

    public function setArticle(string $Article): self
    {
        $this->Article = $Article;

        return $this;
    }

    public function getPublication(): ?\DateTimeInterface
    {
        return $this->Publication;
    }

    public function setPublication(\DateTimeInterface $Publication): self
    {
        $this->Publication = $Publication;

        return $this;
    }
}
