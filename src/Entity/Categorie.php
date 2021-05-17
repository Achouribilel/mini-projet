<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 * @ORM\Entity
 * @ORM\Table(name="categorie")
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Plat",mappedBy="categorie")
     */
    private $plats;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlats()
    {
        return $this->plats;
    }

    /**
     * @param mixed $plats
     */
    public function setPlats($plats): void
    {
        $this->plats = $plats;
    }

    public function __toString() {
        return $this->libelle;
    }

}
