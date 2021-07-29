<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CoursRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
#[ApiResource]
class Cours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $contenu;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=Salarie::class, inversedBy="cours")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getFormateur(): ?Salarie
    {
        return $this->formateur;
    }

    public function setFormateur(?Salarie $formateur): self
    {
        $this->formateur = $formateur;

        return $this;
    }
}
