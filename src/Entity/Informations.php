<?php

namespace App\Entity;

use App\Repository\InformationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InformationsRepository::class)]
class Informations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $length = null;

    #[ORM\Column(length: 255)]
    private ?string $height = null;

    #[ORM\Column(length: 255)]
    private ?string $speedMax = null;

    #[ORM\Column(length: 255)]
    private ?string $passagerCapacity = null;

    #[ORM\Column(length: 255)]
    private ?string $distanceCapacity = null;

    #[ORM\Column(length: 255)]
    private ?string $fuelCapacity = null;

    #[ORM\Column(length: 700)]
    private ?string $cockpitImage = null;

    #[ORM\Column(length: 700)]
    private ?string $presentImage = null;

    #[ORM\ManyToOne(inversedBy: 'Information')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Plane $plane = null;

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

    public function getLength(): ?string
    {
        return $this->length;
    }

    public function setLength(string $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getSpeedMax(): ?string
    {
        return $this->speedMax;
    }

    public function setSpeedMax(string $speedMax): self
    {
        $this->speedMax = $speedMax;

        return $this;
    }

    public function getPassagerCapacity(): ?string
    {
        return $this->passagerCapacity;
    }

    public function setPassagerCapacity(string $passagerCapacity): self
    {
        $this->passagerCapacity = $passagerCapacity;

        return $this;
    }

    public function getDistanceCapacity(): ?string
    {
        return $this->distanceCapacity;
    }

    public function setDistanceCapacity(string $distanceCapacity): self
    {
        $this->distanceCapacity = $distanceCapacity;

        return $this;
    }

    public function getFuelCapacity(): ?string
    {
        return $this->fuelCapacity;
    }

    public function setFuelCapacity(string $fuelCapacity): self
    {
        $this->fuelCapacity = $fuelCapacity;

        return $this;
    }

    public function getCockpitImage(): ?string
    {
        return $this->cockpitImage;
    }

    public function setCockpitImage(string $cockpitImage): self
    {
        $this->cockpitImage = $cockpitImage;

        return $this;
    }

    public function getPresentImage(): ?string
    {
        return $this->presentImage;
    }

    public function setPresentImage(string $presentImage): self
    {
        $this->presentImage = $presentImage;

        return $this;
    }

    public function getPlane(): ?Plane
    {
        return $this->plane;
    }

    public function setPlane(?Plane $plane): self
    {
        $this->plane = $plane;

        return $this;
    }
}
