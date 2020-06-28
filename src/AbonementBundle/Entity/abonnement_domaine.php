<?php

namespace AbonementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * abonnement_domaine
 *
 * @ORM\Table(name="abonnement_domaine")
 * @ORM\Entity(repositoryClass="AbonementBundle\Repository\abonnement_domaineRepository")
 */
class abonnement_domaine
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
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer")
     */
    private $idDomaine;


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

