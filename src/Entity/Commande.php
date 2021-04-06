<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
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
    private $code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $desciption;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $qte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $montant;

    /**
     * @ORM\OneToOne (targetEntity="App\Entity\Facture",mappedBy="commande")
     */
    private $facture;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client",inversedBy="commandes")
     * @JoinColumn(name="client_id", referencedColumnName="id")
     */

    private $client;

    /**
     * @ORM\OneToMany (targetEntity="App\Entity\CommandePlats",mappedBy="commande")
     * @JoinTable(name="commande_plats")
     */
    private $commandeplats;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Livreur",inversedBy="commande")
     * @JoinColumn(name="livreur_id",referencedColumnName="id")
     */
    private $livreur;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDesciption(): ?string
    {
        return $this->desciption;
    }

    public function setDesciption(?string $desciption): self
    {
        $this->desciption = $desciption;

        return $this;
    }

    public function getQte(): ?string
    {
        return $this->qte;
    }

    public function setQte(?string $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(?string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client): void
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * @param mixed $facture
     */
    public function setFacture($facture): void
    {
        $this->facture = $facture;
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

    /**
     * @return mixed
     */
    public function getLivreur()
    {
        return $this->livreur;
    }

    /**
     * @param mixed $livreur
     */
    public function setLivreur($livreur): void
    {
        $this->livreur = $livreur;
    }

    /**
     * @return mixed
     */
    public function getCommandeplats()
    {
        return $this->commandeplats;
    }

    /**
     * @param mixed $commandeplats
     */
    public function setCommandeplats($commandeplats): void
    {
        $this->commandeplats = $commandeplats;
    }





}
