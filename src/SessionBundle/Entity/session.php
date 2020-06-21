<?php

namespace SessionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="SessionBundle\Repository\sessionRepository")
 */
class session
{
 
    /**
     * @var int
     *
     * @ORM\Column(name="id_session", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idSession;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_session", type="string", length=255)
     */
    private $titreSession;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;


    /**
     * @var int
     *
     * @ORM\Column(name="id_recruteur", type="integer")
     */
    private $idRecruteur;

    /**
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer")
     */
    private $idDomaine;

    /**
     * @return int
     */
    public function getIdSession()
    {
        return $this->idSession;
    }

    /**
     * @param int $idSession
     */
    public function setIdSession($idSession)
    {
        $this->idSession = $idSession;
    }

    /**
     * @return string
     */
    public function getTitreSession()
    {
        return $this->titreSession;
    }

    /**
     * @param string $titreSession
     */
    public function setTitreSession($titreSession)
    {
        $this->titreSession = $titreSession;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}

