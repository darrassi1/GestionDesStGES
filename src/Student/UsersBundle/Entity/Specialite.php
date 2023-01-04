<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 *
 * @ORM\Table(name="specialite", indexes={@ORM\Index(name="Id_Departement", columns={"Id_Departement"})})
 * @ORM\Entity
 */
class Specialite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Specialite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpecialite;

    /**
     * @var string
     *
     * @ORM\Column(name="Specialite", type="string", length=120, nullable=false)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="Diplome", type="string", length=120, nullable=false)
     */
    private $diplome;

    /**
     * @var \Departement
     *
     * @ORM\ManyToOne(targetEntity="Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Departement", referencedColumnName="Id_Departement")
     * })
     */
    private $idDepartement;



    /**
     * Get idSpecialite
     *
     * @return integer
     */
    public function getIdSpecialite()
    {
        return $this->idSpecialite;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Specialite
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set diplome
     *
     * @param string $diplome
     *
     * @return Specialite
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
     * Set idDepartement
     *
     * @param \Student\UsersBundle\Entity\Departement $idDepartement
     *
     * @return Specialite
     */
    public function setIdDepartement(\Student\UsersBundle\Entity\Departement $idDepartement = null)
    {
        $this->idDepartement = $idDepartement;

        return $this;
    }

    /**
     * Get idDepartement
     *
     * @return \Student\UsersBundle\Entity\Departement
     */
    public function getIdDepartement()
    {
        return $this->idDepartement;
    }
}
