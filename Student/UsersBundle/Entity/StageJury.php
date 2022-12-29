<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StageJury
 *
 * @ORM\Table(name="stage_jury", indexes={@ORM\Index(name="Id_Soutenance", columns={"Id_Soutenance"}), @ORM\Index(name="NCIN", columns={"NCIN"})})
 * @ORM\Entity
 */
class StageJury
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_StageJury", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStagejury;

    /**
     * @var string
     *
     * @ORM\Column(name="Role_Membre", type="string", length=120, nullable=false)
     */
    private $roleMembre;

    /**
     * @var \Soutanance
     *
     * @ORM\ManyToOne(targetEntity="Soutanance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Soutenance", referencedColumnName="Id_Soutenance")
     * })
     */
    private $idSoutenance;

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
     * Get idStagejury
     *
     * @return integer
     */
    public function getIdStagejury()
    {
        return $this->idStagejury;
    }

    /**
     * Set roleMembre
     *
     * @param string $roleMembre
     *
     * @return StageJury
     */
    public function setRoleMembre($roleMembre)
    {
        $this->roleMembre = $roleMembre;

        return $this;
    }

    /**
     * Get roleMembre
     *
     * @return string
     */
    public function getRoleMembre()
    {
        return $this->roleMembre;
    }

    /**
     * Set idSoutenance
     *
     * @param \Student\UsersBundle\Entity\Soutanance $idSoutenance
     *
     * @return StageJury
     */
    public function setIdSoutenance(\Student\UsersBundle\Entity\Soutanance $idSoutenance = null)
    {
        $this->idSoutenance = $idSoutenance;

        return $this;
    }

    /**
     * Get idSoutenance
     *
     * @return \Student\UsersBundle\Entity\Soutanance
     */
    public function getIdSoutenance()
    {
        return $this->idSoutenance;
    }

    /**
     * Set ncin
     *
     * @param \Student\UsersBundle\Entity\Encadreur $ncin
     *
     * @return StageJury
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
