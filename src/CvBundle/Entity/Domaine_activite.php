<?php

namespace CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * domaine_activite
 *
 * @ORM\Table(name="domaine_activite")
 * @ORM\Entity(repositoryClass="CvBundle\Repository\domaine_activiteRepository")
 */
class Domaine_activite
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
     * @ORM\Column(name="id_parent", type="integer")
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
     * @ORM\Column(name="id_abonnement", type="integer")
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
     * @return domaine_activite
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
     * @return domaine_activite
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
     * @return domaine_activite
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

