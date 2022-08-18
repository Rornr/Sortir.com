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

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_limite_inscription = null;

    #[ORM\Column(nullable: true)]
    private ?int $duree = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description_et_infos = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $campus = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $rue = null;

    #[ORM\Column(nullable: true)]
    private ?int $code_postal = null;

    #[ORM\Column(nullable: true)]
    private ?int $latitude = null;

    #[ORM\Column(nullable: true)]
    private ?int $longitude = null;

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

    public function getDateLimiteInscription(): ?\DateTimeInterface
    {
        return $this->date_limite_inscription;
    }

    public function setDateLimiteInscription(?\DateTimeInterface $date_limite_inscription): self
    {
        $this->date_limite_inscription = $date_limite_inscription;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(?int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDescriptionEtInfos(): ?string
    {
        return $this->description_et_infos;
    }

    public function setDescriptionEtInfos(?string $description_et_infos): self
    {
        $this->description_et_infos = $description_et_infos;

        return $this;
    }

    public function getCampus(): ?string
    {
        return $this->campus;
    }

    public function setCampus(?string $campus): self
    {
        $this->campus = $campus;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

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

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(?string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(?int $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getLatitude(): ?int
    {
        return $this->latitude;
    }

    public function setLatitude(?int $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?int
    {
        return $this->longitude;
    }

    public function setLongitude(?int $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function setIsPublished(bool $true)
    {
    }

    public function setDateCreation(\DateTime $param)
    {
    }
}
