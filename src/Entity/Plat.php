<?php

namespace App\Entity;

use App\Repository\PlatRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;

/**
 * @ORM\Entity(repositoryClass=PlatRepository::class)
 */
class Plat
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
    private $nomplat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie",inversedBy="plats")
     * @ORM\JoinColumn(name="categorie_id",referencedColumnName="id")
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prix;

    /**
     * @ORM\OneToMany (targetEntity="App\Entity\CommandePlats",mappedBy="plat")
     *
     */
    private $commandeplat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomplat(): ?string
    {
        return $this->nomplat;
    }

    public function setNomplat(?string $nomplat): self
    {
        $this->nomplat = $nomplat;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getCommande()
    {
        return $this->commandeplat;
    }

    /**
     * @param mixed $commande
     */
    public function setCommande($commande): void
    {
        $this->commandeplat = $commande;
    }

    /**
     * @return mixed
     */
    public function getCommandeplat()
    {
        return $this->commandeplat;
    }

    /**
     * @param mixed $commandeplat
     */
    public function setCommandeplat($commandeplat): void
    {
        $this->commandeplat = $commandeplat;
    }



}
