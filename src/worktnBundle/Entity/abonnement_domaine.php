<?php

namespace worktnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * abonnement_domaine
 *
 * @ORM\Table(name="abonnement_domaine")
 * @ORM\Entity(repositoryClass="worktnBundle\Repository\abonnement_domaineRepository")
 */
class abonnement_domaine
{
   

    /**
     * @var int
     *
     * @ORM\Column(name="id_abonnement", type="integer")
     * @ORM\Id
     */
    private $idAbonnement;

    /**
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer")
     */
    private $idDomaine;



    /**
     * Set idAbonnement
     *
     * @param integer $idAbonnement
     *
     * @return abonnement_domaine
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

    /**
     * Set idDomaine
     *
     * @param integer $idDomaine
     *
     * @return abonnement_domaine
     */
    public function setIdDomaine($idDomaine)
    {
        $this->idDomaine = $idDomaine;

        return $this;
    }

    /**
     * Get idDomaine
     *
     * @return int
     */
    public function getIdDomaine()
    {
        return $this->idDomaine;
    }
}

