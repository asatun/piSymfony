<?php

namespace worktnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="worktnBundle\Repository\sessionRepository")
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


}

