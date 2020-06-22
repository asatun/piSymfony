<?php

namespace worktnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * abonnement
 *
 * @ORM\Table(name="abonnement")
 * @ORM\Entity(repositoryClass="worktnBundle\Repository\abonnementRepository")
 */
class abonnement
{
   

    /**
     * @var int
     *
     * @ORM\Column(name="id_abonnement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idAbonnement;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_abonnement", type="string", length=255)
     */
    private $descAbonnement;


    /**
     * Set idAbonnement
     *
     * @param integer $idAbonnement
     *
     * @return abonnement
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
     * Set descAbonnement
     *
     * @param string $descAbonnement
     *
     * @return abonnement
     */
    public function setDescAbonnement($descAbonnement)
    {
        $this->descAbonnement = $descAbonnement;

        return $this;
    }

    /**
     * Get descAbonnement
     *
     * @return string
     */
    public function getDescAbonnement()
    {
        return $this->descAbonnement;
    }
}

