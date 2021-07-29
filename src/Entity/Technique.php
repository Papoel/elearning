<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TechniqueRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=TechniqueRepository::class)
 */
#[ApiResource]
class Technique
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity=Procedures::class, mappedBy="technique", cascade={"persist", "remove"})
     */
    private $procedures;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getProcedures(): ?Procedures
    {
        return $this->procedures;
    }

    public function setProcedures(?Procedures $procedures): self
    {
        // unset the owning side of the relation if necessary
        if ($procedures === null && $this->procedures !== null) {
            $this->procedures->setTechnique(null);
        }

        // set the owning side of the relation if necessary
        if ($procedures !== null && $procedures->getTechnique() !== $this) {
            $procedures->setTechnique($this);
        }

        $this->procedures = $procedures;

        return $this;
    }
}
