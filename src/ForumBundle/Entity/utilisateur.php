<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\utilisateurRepository")
 */
class utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_utilisateur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_utilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="qualite", type="integer")
     */
    private $qualite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_prenom", type="string", length=100)
     */
    private $nomPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ste", type="string", length=150)
     */
    private $nomSte;

    /**
     * @var string
     *
     * @ORM\Column(name="image_ste", type="string", length=250)
     */
    private $imageSte;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=100)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="motDePasse", type="string", length=100)
     */
    private $motDePasse;

    /**
     * @var int
     *
     * @ORM\Column(name="id_abonnement", type="integer")
     */
    private $idAbonnement;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="matricFisc", type="string", length=50)
     */
    private $matricFisc;


    /**
     * Get id
     *
     * @return int
     */
    public function getIdutilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * Set qualite
     *
     * @param integer $qualite
     *
     * @return utilisateur
     */
    public function setQualite($qualite)
    {
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Get qualite
     *
     * @return int
     */
    public function getQualite()
    {
        return $this->qualite;
    }

    /**
     * Set nomPrenom
     *
     * @param string $nomPrenom
     *
     * @return utilisateur
     */
    public function setNomPrenom($nomPrenom)
    {
        $this->nomPrenom = $nomPrenom;

        return $this;
    }

    /**
     * Get nomPrenom
     *
     * @return string
     */
    public function getNomPrenom()
    {
        return $this->nomPrenom;
    }

    /**
     * Set nomSte
     *
     * @param string $nomSte
     *
     * @return utilisateur
     */
    public function setNomSte($nomSte)
    {
        $this->nomSte = $nomSte;

        return $this;
    }

    /**
     * Get nomSte
     *
     * @return string
     */
    public function getNomSte()
    {
        return $this->nomSte;
    }

    /**
     * Set imageSte
     *
     * @param string $imageSte
     *
     * @return utilisateur
     */
    public function setImageSte($imageSte)
    {
        $this->imageSte = $imageSte;

        return $this;
    }

    /**
     * Get imageSte
     *
     * @return string
     */
    public function getImageSte()
    {
        return $this->imageSte;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     *
     * @return utilisateur
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set idAbonnement
     *
     * @param integer $idAbonnement
     *
     * @return utilisateur
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
     * Set etat
     *
     * @param integer $etat
     *
     * @return utilisateur
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set matricFisc
     *
     * @param string $matricFisc
     *
     * @return utilisateur
     */
    public function setMatricFisc($matricFisc)
    {
        $this->matricFisc = $matricFisc;

        return $this;
    }

    /**
     * Get matricFisc
     *
     * @return string
     */
    public function getMatricFisc()
    {
        return $this->matricFisc;
    }
}

