<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncadreurExterne
 *
 * @ORM\Table(name="encadreur_externe", indexes={@ORM\Index(name="Id_Societe", columns={"Id_Societe"}), @ORM\Index(name="NCIN", columns={"NCIN"})})
 * @ORM\Entity
 */
class EncadreurExterne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_encadreurE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEncadreure;

    /**
     * @var string
     *
     * @ORM\Column(name="Poste", type="string", length=120, nullable=false)
     */
    private $poste;

    /**
     * @var \Societe
     *
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Societe", referencedColumnName="Id_Societe")
     * })
     */
    private $idSociete;

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
     * Get idEncadreure
     *
     * @return integer
     */
    public function getIdEncadreure()
    {
        return $this->idEncadreure;
    }

    /**
     * Set poste
     *
     * @param string $poste
     *
     * @return EncadreurExterne
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set idSociete
     *
     * @param \Student\UsersBundle\Entity\Societe $idSociete
     *
     * @return EncadreurExterne
     */
    public function setIdSociete(\Student\UsersBundle\Entity\Societe $idSociete = null)
    {
        $this->idSociete = $idSociete;

        return $this;
    }

    /**
     * Get idSociete
     *
     * @return \Student\UsersBundle\Entity\Societe
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }

    /**
     * Set ncin
     *
     * @param \Student\UsersBundle\Entity\Encadreur $ncin
     *
     * @return EncadreurExterne
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
