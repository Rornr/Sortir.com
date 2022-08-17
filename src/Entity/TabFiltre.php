<?php

namespace App\Entity;

use App\Repository\TabFiltreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TabFiltreRepository::class)]
class TabFiltre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Nom_de_la_sortie = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_la_sortie = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cloture = null;

    #[ORM\Column(nullable: true)]
    private ?int $inscrits = null;

    #[ORM\Column(nullable: true)]
    private ?int $place = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $etats = null;

    #[ORM\Column(nullable: true)]
    private ?bool $inscrit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $organisateur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $actions = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDeLaSortie(): ?string
    {
        return $this->Nom_de_la_sortie;
    }

    public function setNomDeLaSortie(?string $Nom_de_la_sortie): self
    {
        $this->Nom_de_la_sortie = $Nom_de_la_sortie;

        return $this;
    }

    public function getDateLaSortie(): ?\DateTimeInterface
    {
        return $this->Date_la_sortie;
    }

    public function setDateLaSortie(?\DateTimeInterface $Date_la_sortie): self
    {
        $this->Date_la_sortie = $Date_la_sortie;

        return $this;
    }

    public function getCloture(): ?\DateTimeInterface
    {
        return $this->cloture;
    }

    public function setCloture(?\DateTimeInterface $cloture): self
    {
        $this->cloture = $cloture;

        return $this;
    }

    public function getInscrits(): ?int
    {
        return $this->inscrits;
    }

    public function setInscrits(?int $inscrits): self
    {
        $this->inscrits = $inscrits;

        return $this;
    }

    public function getPlace(): ?int
    {
        return $this->place;
    }

    public function setPlace(?int $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getEtats(): ?string
    {
        return $this->etats;
    }

    public function setEtats(?string $etats): self
    {
        $this->etats = $etats;

        return $this;
    }

    public function isInscrit(): ?bool
    {
        return $this->inscrit;
    }

    public function setInscrit(?bool $inscrit): self
    {
        $this->inscrit = $inscrit;

        return $this;
    }

    public function getOrganisateur(): ?string
    {
        return $this->organisateur;
    }

    public function setOrganisateur(?string $organisateur): self
    {
        $this->organisateur = $organisateur;

        return $this;
    }

    public function getActions(): ?string
    {
        return $this->actions;
    }

    public function setActions(?string $actions): self
    {
        $this->actions = $actions;

        return $this;
    }
}
