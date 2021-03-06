<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publication_utilisateur
 *
 * @ORM\Table(name="publication_utilisateur")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\Publication_utilisateurRepository")
 */
class Publication_utilisateur
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
     * @var int
     *
     * @ORM\Column(name="idPublication", type="integer")
     */
    private $idPublication;

    /**
     * @var int
     *
     * @ORM\Column(name="idUtilisateur", type="integer")
     */
    private $idUtilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="likeDislike", type="integer")
     */
    private $likeDislike;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;


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
     * Set idPublication
     *
     * @param integer $idPublication
     *
     * @return Publication_utilisateur
     */
    public function setIdPublication($idPublication)
    {
        $this->idPublication = $idPublication;

        return $this;
    }

    /**
     * Get idPublication
     *
     * @return int
     */
    public function getIdPublication()
    {
        return $this->idPublication;
    }

    /**
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Publication_utilisateur
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

    /**
     * Set likeDislike
     *
     * @param integer $likeDislike
     *
     * @return Publication_utilisateur
     */
    public function setLikeDislike($likeDislike)
    {
        $this->likeDislike = $likeDislike;

        return $this;
    }

    /**
     * Get likeDislike
     *
     * @return int
     */
    public function getLikeDislike()
    {
        return $this->likeDislike;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Publication_utilisateur
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}

