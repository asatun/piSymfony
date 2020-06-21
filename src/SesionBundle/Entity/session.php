<?php

namespace SesionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="SesionBundle\Repository\sessionRepository")
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
    private $id_session;

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
     * Get id
     *
     * @return int
     */
    public function getid_session()
    {
        return $this->id_session;
    }

    /**
     * Set titreSession
     *
     * @param string $titreSession
     *
     * @return session
     */
    public function setTitreSession($titreSession)
    {
        $this->titreSession = $titreSession;

        return $this;
    }

    /**
     * Get titreSession
     *
     * @return string
     */
    public function getTitreSession()
    {
        return $this->titreSession;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return session
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return session
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return session
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set idRecruteur
     *
     * @param integer $idRecruteur
     *
     * @return session
     */
    public function setIdRecruteur($idRecruteur)
    {
        $this->idRecruteur = $idRecruteur;

        return $this;
    }

    /**
     * Get idRecruteur
     *
     * @return int
     */
    public function getIdRecruteur()
    {
        return $this->idRecruteur;
    }

    /**
     * Set idDomaine
     *
     * @param integer $idDomaine
     *
     * @return session
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

    /**
     * Set id
     *
     * @param integer $id_session
     *
     * @return session
     */
    public function setId($id_session)
    {
        $this->id = $id_session;

        return $this;
    }
}

