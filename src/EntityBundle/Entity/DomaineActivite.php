<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DomaineActivite
 *
 * @ORM\Table(name="domaine_activite")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\DomaineActiviteRepository")
 */
class DomaineActivite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=true)
     */
    private $idParent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_domaine", type="string", length=255)
     */
    private $nomDomaine;

    /**
     * @var int
     *
     * @ORM\Column(name="id_abonnement", type="integer", nullable=true)
     */
    private $idAbonnement;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idParent
     *
     * @param integer $idParent
     *
     * @return DomaineActivite
     */
    public function setIdParent($idParent)
    {
        $this->idParent = $idParent;

        return $this;
    }

    /**
     * Get idParent
     *
     * @return int
     */
    public function getIdParent()
    {
        return $this->idParent;
    }

    /**
     * Set nomDomaine
     *
     * @param string $nomDomaine
     *
     * @return DomaineActivite
     */
    public function setNomDomaine($nomDomaine)
    {
        $this->nomDomaine = $nomDomaine;

        return $this;
    }

    /**
     * Get nomDomaine
     *
     * @return string
     */
    public function getNomDomaine()
    {
        return $this->nomDomaine;
    }

    /**
     * Set idAbonnement
     *
     * @param integer $idAbonnement
     *
     * @return DomaineActivite
     */
    public function setIdAbonnement($idAbonnement)
    {
        $this->idAbonnement = $idAbonnement;

        return $this;
    }

    /**
     * Get idAbonnement
     *
     * @return int
     */
    public function getIdAbonnement()
    {
        return $this->idAbonnement;
    }
}

