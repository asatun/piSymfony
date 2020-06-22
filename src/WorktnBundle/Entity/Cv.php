<?php

namespace WorktnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cv
 *
 * @ORM\Table(name="cv")
 * @ORM\Entity(repositoryClass="WorktnBundle\Repository\CvRepository")
 */
class Cv
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cv", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="diplome", type="string", length=100)
     */
    private $diplome;

    /**
     * @var string
     *
     * @ORM\Column(name="annee_obtention", type="string", length=100)
     */
    private $anneeObtention;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_prof", type="string", length=500)
     */
    private $expProf;

    /**
     * @var string
     *
     * @ORM\Column(name="stage", type="string", length=500)
     */
    private $stage;

    /**
     * @var string
     *
     * @ORM\Column(name="formation", type="string", length=500)
     */
    private $formation;

    /**
     * @var string
     *
     * @ORM\Column(name="competences", type="string", length=500)
     */
    private $competences;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_academique", type="string", length=500)
     */
    private $expAcademique;

    /**
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer")
     */
    private $idDomaine;

    /**
     * @var int
     *
     * @ORM\Column(name="id_utilisateur", type="integer")
     */
    private $idUtilisateur;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Cv
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set diplome
     *
     * @param string $diplome
     *
     * @return Cv
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return string
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set anneeObtention
     *
     * @param string $anneeObtention
     *
     * @return Cv
     */
    public function setAnneeObtention($anneeObtention)
    {
        $this->anneeObtention = $anneeObtention;

        return $this;
    }

    /**
     * Get anneeObtention
     *
     * @return string
     */
    public function getAnneeObtention()
    {
        return $this->anneeObtention;
    }

    /**
     * Set expProf
     *
     * @param string $expProf
     *
     * @return Cv
     */
    public function setExpProf($expProf)
    {
        $this->expProf = $expProf;

        return $this;
    }

    /**
     * Get expProf
     *
     * @return string
     */
    public function getExpProf()
    {
        return $this->expProf;
    }

    /**
     * Set stage
     *
     * @param string $stage
     *
     * @return Cv
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return string
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Set formation
     *
     * @param string $formation
     *
     * @return Cv
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return string
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set competences
     *
     * @param string $competences
     *
     * @return Cv
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;

        return $this;
    }

    /**
     * Get competences
     *
     * @return string
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * Set expAcademique
     *
     * @param string $expAcademique
     *
     * @return Cv
     */
    public function setExpAcademique($expAcademique)
    {
        $this->expAcademique = $expAcademique;

        return $this;
    }

    /**
     * Get expAcademique
     *
     * @return string
     */
    public function getExpAcademique()
    {
        return $this->expAcademique;
    }

    /**
     * Set idDomaine
     *
     * @param integer $idDomaine
     *
     * @return Cv
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
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Cv
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return int
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
}

