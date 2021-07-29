<?php

namespace App\Entity;

use App\Repository\ProceduresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProceduresRepository::class)
 */
class Procedures
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity=Cofrend::class, inversedBy="procedures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $technique;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $rdu;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $indice;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isQualifie;

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

    public function getTechnique(): ?Cofrend
    {
        return $this->technique;
    }

    public function setTechnique(?Cofrend $technique): self
    {
        $this->technique = $technique;

        return $this;
    }

    public function getRdu(): ?string
    {
        return $this->rdu;
    }

    public function setRdu(?string $rdu): self
    {
        $this->rdu = $rdu;

        return $this;
    }

    public function getIndice(): ?string
    {
        return $this->indice;
    }

    public function setIndice(string $indice): self
    {
        $this->indice = $indice;

        return $this;
    }

    public function getIsQualifie(): ?bool
    {
        return $this->isQualifie;
    }

    public function setIsQualifie(?bool $isQualifie): self
    {
        $this->isQualifie = $isQualifie;

        return $this;
    }
}
