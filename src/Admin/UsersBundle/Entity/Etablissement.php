<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departementa")
 * @ORM\Entity
 */
class Etablissement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Departement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="Departement", type="string", length=120, nullable=false)
     */
    private $etablissement;



    /**
     * Get idDepartement
     *
     * @return integer
     */
    public function getIdEtablissement()
    {
        return $this->idEtablissement;
    }

    /**
     * Set departement
     *
     * @param string $departement
     *
     * @return Departement
     */
    public function setDepartement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    public function __toString()
    {
        return $this->getEtablissement();
    }
}
