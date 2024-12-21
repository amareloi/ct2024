<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $semestre = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $ects = null;

    #[ORM\Column]
    private ?int $heures_cm = null;

    #[ORM\Column]
    private ?int $heures_tp = null;

    #[ORM\Column]
    private ?int $heures_td = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSemestre(): ?int
    {
        return $this->semestre;
    }

    public function setSemestre(int $semestre): static
    {
        $this->semestre = $semestre;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getEcts(): ?int
    {
        return $this->ects;
    }

    public function setEcts(int $ects): static
    {
        $this->ects = $ects;

        return $this;
    }

    public function getHeuresCm(): ?int
    {
        return $this->heures_cm;
    }

    public function setHeuresCm(int $heures_cm): static
    {
        $this->heures_cm = $heures_cm;

        return $this;
    }

    public function getHeuresTp(): ?int
    {
        return $this->heures_tp;
    }

    public function setHeuresTp(int $heures_tp): static
    {
        $this->heures_tp = $heures_tp;

        return $this;
    }

    public function getHeuresTd(): ?int
    {
        return $this->heures_td;
    }

    public function setHeuresTd(int $heures_td): static
    {
        $this->heures_td = $heures_td;

        return $this;
    }
}
