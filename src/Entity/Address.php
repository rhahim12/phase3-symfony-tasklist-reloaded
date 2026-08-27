<?php

namespace App\Entity;

use App\Repository\AddressRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AddressRepository::class)]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $rue = null;

    #[ORM\Column]
    private ?int $CodePostale = null;

    #[ORM\Column(length: 255)]
    private ?string $Ville = null;

    #[ORM\Column(length: 255)]
    private ?string $Pays = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(string $rue): static
    {
        $this->rue = $rue;

        return $this;
    }

    public function getCodePostale(): ?int
    {
        return $this->CodePostale;
    }

    public function setCodePostale(int $CodePostale): static
    {
        $this->CodePostale = $CodePostale;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): static
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->Pays;
    }

    public function setPays(string $Pays): static
    {
        $this->Pays = $Pays;

        return $this;
    }
}
