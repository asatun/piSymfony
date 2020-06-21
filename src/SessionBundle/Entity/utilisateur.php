<?php

namespace worktnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="worktnBundle\Repository\utilisateurRepository")
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
    private $idUtilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="qualite", type="integer")
     */
    private $qualite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_prenom", type="string", length=255)
     */
    private $nomPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ste", type="string", length=255)
     */
    private $nomSte;

    /**
     * @var string
     *
     * @ORM\Column(name="image_ste", type="string", length=255)
     */
    private $imageSte;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;


    /**
     * @var string
     *
     * @ORM\Column(name="motDePasse", type="string", length=255)
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
     * @ORM\Column(name="matricFisc", type="string", length=255)
     */
    private $matricFisc;

    /**
     * @return int
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * @param int $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * @return int
     */
    public function getQualite()
    {
        return $this->qualite;
    }

    /**
     * @param int $qualite
     */
    public function setQualite($qualite)
    {
        $this->qualite = $qualite;
    }


}

