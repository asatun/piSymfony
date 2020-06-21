<?php

namespace WorktnBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="WorktnBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
   protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_abonnement", type="integer")
     */
    private $idAbonnement;

    /**
     * @var string
     *
     * @ORM\Column(name="image_ste", type="string", length=255)
     */
    private $imageSte;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_prenom", type="string", length=255)
     */
    private $nomPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="matricFisc", type="string", length=255)
     */
    private $matricFisc;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_Ste", type="string", length=255)
     */
    private $nomSte;


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
     * Set idAbonnement
     *
     * @param integer $idAbonnement
     *
     * @return User
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
     * Set imageSte
     *
     * @param string $imageSte
     *
     * @return User
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
     * Set nomPrenom
     *
     * @param string $nomPrenom
     *
     * @return User
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
     * Set matricFisc
     *
     * @param string $matricFisc
     *
     * @return User
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

    /**
     * Set nomSte
     *
     * @param string $nomSte
     *
     * @return User
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
}

