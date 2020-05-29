<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Ville;

/**
 * @ORM\Entity(repositoryClass=HotelRepository::class)
 */
class Hotel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $imgPath;

    // /**
    //  * @ORM\OneToOne(targetEntity=Marker::class)
    //  */
    // private $marker;

    /**
     * @ORM\ManyToOne(targetEntity="Ville", inversedBy="hotels")
     * @ORM\JoinColumn(name="ville_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

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

    public function getImgPath(): ?string
    {
        return $this->imgPath;
    }

    public function setImgPath(string $imgPath): self
    {
        $this->imgPath = $imgPath;

        return $this;
    }

    // public function getMarker(): ?Marker
    // {
    //     return $this->marker;
    // }

    // public function setMarker(?Marker $marker): self
    // {
    //     $this->marker = $marker;

    //     return $this;
    // }


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getVille(): ?Ville
    {
        return $this->ville;
    }

    public function setVille(?Ville $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * toString
     * @return string
     */
    public function __toString()
    {
        return $this->getNom();
    }
}
