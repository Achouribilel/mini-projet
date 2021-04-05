<?php

namespace App\Entity;

use App\Repository\CommandePlatsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandePlatsRepository::class)
 */
class CommandePlats
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Quantite;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Plat",inversedBy="commandeplat")
     * @ORM\JoinColumn(name="plat_id",referencedColumnName="id")
     */
    private $plat;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commande",inversedBy="commandeplate")
     * @ORM\JoinColumn(name="comande_id",referencedColumnName="id")
     */
    private $commande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->Quantite;
    }

    public function setQuantite(int $Quantite): self
    {
        $this->Quantite = $Quantite;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlat()
    {
        return $this->plat;
    }

    /**
     * @param mixed $plat
     */
    public function setPlat($plat): void
    {
        $this->plat = $plat;
    }

    /**
     * @return mixed
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * @param mixed $commande
     */
    public function setCommande($commande): void
    {
        $this->commande = $commande;
    }


}
