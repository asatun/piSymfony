<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreEmploi
 *
 * @ORM\Table(name="offre_emploi")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\OffreEmploiRepository")
 */
class OffreEmploi
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_offre", type="string", length=200)
     */
    private $titreOffre;

    /**
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer")
     */
    private $idDomaine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="des_offre", type="string", length=500, nullable=true)
     */
    private $desOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=100, nullable=true)
     */
    private $objet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_postule", type="datetime", nullable=true)
     */
    private $datePostule;

    /**
     * @var int
     *
     * @ORM\Column(name="valider", type="integer", nullable=true)
     */
    private $valider;

    /**
     * @var int
     *
     * @ORM\Column(name="id_recruteur", type="integer")
     */
    private $idRecruteur;


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
     * Set titreOffre
     *
     * @param string $titreOffre
     *
     * @return OffreEmploi
     */
    public function setTitreOffre($titreOffre)
    {
        $this->titreOffre = $titreOffre;

        return $this;
    }

    /**
     * Get titreOffre
     *
     * @return string
     */
    public function getTitreOffre()
    {
        return $this->titreOffre;
    }

    /**
     * Set idDomaine
     *
     * @param integer $idDomaine
     *
     * @return OffreEmploi
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
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return OffreEmploi
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
     * Set desOffre
     *
     * @param string $desOffre
     *
     * @return OffreEmploi
     */
    public function setDesOffre($desOffre)
    {
        $this->desOffre = $desOffre;

        return $this;
    }

    /**
     * Get desOffre
     *
     * @return string
     */
    public function getDesOffre()
    {
        return $this->desOffre;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return OffreEmploi
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set datePostule
     *
     * @param \DateTime $datePostule
     *
     * @return OffreEmploi
     */
    public function setDatePostule($datePostule)
    {
        $this->datePostule = $datePostule;

        return $this;
    }

    /**
     * Get datePostule
     *
     * @return \DateTime
     */
    public function getDatePostule()
    {
        return $this->datePostule;
    }

    /**
     * Set valider
     *
     * @param integer $valider
     *
     * @return OffreEmploi
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return int
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set idRecruteur
     *
     * @param integer $idRecruteur
     *
     * @return OffreEmploi
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
     * Set id
     *
     * @param integer $id
     *
     * @return OffreEmploi
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}

