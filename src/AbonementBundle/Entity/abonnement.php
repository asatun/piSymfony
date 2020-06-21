<?php

namespace AbonementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * abonnement
 *
 * @ORM\Table(name="abonnement")
 * @ORM\Entity(repositoryClass="AbonementBundle\Repository\abonnementRepository")
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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="des_abonnement", type="string", length=255)
     */
    private $desAbonnement;


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
     * Set desAbonnement
     *
     * @param string $desAbonnement
     *
     * @return abonnement
     */
    public function setDesAbonnement($desAbonnement)
    {
        $this->desAbonnement = $desAbonnement;

        return $this;
    }

    /**
     * Get desAbonnement
     *
     * @return string
     */
    public function getDesAbonnement()
    {
        return $this->desAbonnement;
    }
}

