<?php

namespace App\Entity;

use App\Repository\CofrendRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CofrendRepository::class)
 */
class Cofrend
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
    private $technique;

    /**
     * @ORM\OneToMany(targetEntity=Procedures::class, mappedBy="technique", orphanRemoval=true)
     */
    private $procedures;

    public function __construct()
    {
        $this->procedures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTechnique(): ?string
    {
        return $this->technique;
    }

    public function setTechnique(string $technique): self
    {
        $this->technique = $technique;

        return $this;
    }

    /**
     * @return Collection|Procedures[]
     */
    public function getProcedures(): Collection
    {
        return $this->procedures;
    }

    public function addProcedure(Procedures $procedure): self
    {
        if (!$this->procedures->contains($procedure)) {
            $this->procedures[] = $procedure;
            $procedure->setTechnique($this);
        }

        return $this;
    }

    public function removeProcedure(Procedures $procedure): self
    {
        if ($this->procedures->removeElement($procedure)) {
            // set the owning side to null (unless already changed)
            if ($procedure->getTechnique() === $this) {
                $procedure->setTechnique(null);
            }
        }

        return $this;
    }
}
