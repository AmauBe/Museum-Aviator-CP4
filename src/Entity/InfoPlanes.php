<?php

namespace App\Entity;

use App\Repository\InfoPlanesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoPlanesRepository::class)]
class InfoPlanes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $model = null;

    #[ORM\Column(length: 255)]
    private ?string $lentgh = null;

    #[ORM\Column(length: 255)]
    private ?string $height = null;

    #[ORM\Column(length: 255)]
    private ?string $capacity_passenger = null;

    #[ORM\Column(length: 255)]
    private ?string $distance_capacity = null;

    #[ORM\Column(length: 255)]
    private ?string $pictures = null;

    #[ORM\Column(length: 255)]
    private ?string $picture_cockpit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getLentgh(): ?string
    {
        return $this->lentgh;
    }

    public function setLentgh(string $lentgh): self
    {
        $this->lentgh = $lentgh;

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

    public function getCapacityPassenger(): ?string
    {
        return $this->capacity_passenger;
    }

    public function setCapacityPassenger(string $capacity_passenger): self
    {
        $this->capacity_passenger = $capacity_passenger;

        return $this;
    }

    public function getDistanceCapacity(): ?string
    {
        return $this->distance_capacity;
    }

    public function setDistanceCapacity(string $distance_capacity): self
    {
        $this->distance_capacity = $distance_capacity;

        return $this;
    }

    public function getPictures(): ?string
    {
        return $this->pictures;
    }

    public function setPictures(string $pictures): self
    {
        $this->pictures = $pictures;

        return $this;
    }

    public function getPictureCockpit(): ?string
    {
        return $this->picture_cockpit;
    }

    public function setPictureCockpit(string $picture_cockpit): self
    {
        $this->picture_cockpit = $picture_cockpit;

        return $this;
    }
}
