<?php

namespace worktnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * session_candidature
 *
 * @ORM\Table(name="session_candidature")
 * @ORM\Entity(repositoryClass="worktnBundle\Repository\session_candidatureRepository")
 */
class session_candidature
{ 

    /**
     * @var int
     *
     * @ORM\Column(name="id_session", type="integer")
     * @ORM\Id
     */
    private $idSession;

    /**
     * @var int
     *
     * @ORM\Column(name="id_recruteur", type="integer")
     * @ORM\Id
     */
    private $idRecruteur;

    /**
     * @var int
     *
     * @ORM\Column(name="id_candidat", type="integer")
     * @ORM\Id
     */
    private $idCandidat;

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

