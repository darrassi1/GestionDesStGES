<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Departement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="Departement", type="string", length=120, nullable=false)
     */
    private $departement;



    /**
     * Get idDepartement
     *
     * @return integer
     */
    public function getIdDepartement()
    {
        return $this->idDepartement;
    }

    /**
     * Set departement
     *
     * @param string $departement
     *
     * @return Departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    public function __toString()
    {
        return $this->getDepartement();
    }
}
