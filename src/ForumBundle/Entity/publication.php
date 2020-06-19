<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * publication
 *
 * @ORM\Table(name="publication")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\publicationRepository")
 */
class publication
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_publication", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idpublication;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=255)
     */
    private $sujet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="date")
     */
    private $datePublication;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_createur", type="integer")
     */
    private $idCreateur;

    /**
     * publication constructor.
     * @param string $objet
     * @param string $sujet
     * @param \DateTime $datePublication
     */
    public function __construct($objet, $sujet, \DateTime $datePublication)
    {
        $this->objet = $objet;
        $this->sujet = $sujet;
        $this->datePublication = $datePublication;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getIdpublication()
    {
        return $this->idpublication;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return publication
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
     * Set sujet
     *
     * @param string $sujet
     *
     * @return publication
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return publication
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set idCreateur
     *
     * @param integer $idCreateur
     *
     * @return publication
     */
    public function setIdCreateur($idCreateur)
    {
        $this->idCreateur = $idCreateur;

        return $this;
    }

    /**
     * Get idCreateur
     *
     * @return int
     */
    public function getIdCreateur()
    {
        return $this->idCreateur;
    }
}

