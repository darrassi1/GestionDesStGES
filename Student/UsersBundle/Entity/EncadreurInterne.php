<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncadreurInterne
 *
 * @ORM\Table(name="encadreur_interne", indexes={@ORM\Index(name="Id_Departement", columns={"Id_Departement"}), @ORM\Index(name="NCIN", columns={"NCIN"})})
 * @ORM\Entity
 */
class EncadreurInterne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_encadreurI", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEncadreuri;

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
     * @var \Encadreur
     *
     * @ORM\ManyToOne(targetEntity="Encadreur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NCIN", referencedColumnName="NCIN")
     * })
     */
    private $ncin;



    /**
     * Get idEncadreuri
     *
     * @return integer
     */
    public function getIdEncadreuri()
    {
        return $this->idEncadreuri;
    }

    /**
     * Set idDepartement
     *
     * @param \Student\UsersBundle\Entity\Departement $idDepartement
     *
     * @return EncadreurInterne
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

    /**
     * Set ncin
     *
     * @param \Student\UsersBundle\Entity\Encadreur $ncin
     *
     * @return EncadreurInterne
     */
    public function setNcin(\Student\UsersBundle\Entity\Encadreur $ncin = null)
    {
        $this->ncin = $ncin;

        return $this;
    }

    /**
     * Get ncin
     *
     * @return \Student\UsersBundle\Entity\Encadreur
     */
    public function getNcin()
    {
        return $this->ncin;
    }
}
