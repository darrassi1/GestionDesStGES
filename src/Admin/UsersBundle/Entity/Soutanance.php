<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soutanance
 *
 * @ORM\Table(name="soutanancea", indexes={@ORM\Index(name="Id_TypeSoutenance", columns={"Id_TypeSoutenance"}), @ORM\Index(name="Id_Stage", columns={"Id_Stage"})})
 * @ORM\Entity
 */
class Soutanance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Soutenance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSoutenance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Soutenance", type="datetime", nullable=false)
     */
    private $dateSoutenance;

    /**
     * @var string
     *
     * @ORM\Column(name="Salle_Soutenance", type="string", length=10, nullable=false)
     */
    private $salleSoutenance;

    /**
     * @var \TypeSoutanance
     *
     * @ORM\ManyToOne(targetEntity="TypeSoutanance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_TypeSoutenance", referencedColumnName="Id_TypeSoutenance")
     * })
     */
    private $idTypesoutenance;

    /**
     * @var \Stage
     *
     * @ORM\ManyToOne(targetEntity="Stage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Stage", referencedColumnName="Id_Stage")
     * })
     */
    private $idStage;



    /**
     * Get idSoutenance
     *
     * @return integer
     */
    public function getIdSoutenance()
    {
        return $this->idSoutenance;
    }

    /**
     * Set dateSoutenance
     *
     * @param \DateTime $dateSoutenance
     *
     * @return Soutanance
     */
    public function setDateSoutenance($dateSoutenance)
    {
        $this->dateSoutenance = $dateSoutenance;

        return $this;
    }

    /**
     * Get dateSoutenance
     *
     * @return \DateTime
     */
    public function getDateSoutenance()
    {
        return $this->dateSoutenance;
    }

    /**
     * Set salleSoutenance
     *
     * @param string $salleSoutenance
     *
     * @return Soutanance
     */
    public function setSalleSoutenance($salleSoutenance)
    {
        $this->salleSoutenance = $salleSoutenance;

        return $this;
    }

    /**
     * Get salleSoutenance
     *
     * @return string
     */
    public function getSalleSoutenance()
    {
        return $this->salleSoutenance;
    }

    /**
     * Set idTypesoutenance
     *
     * @param \Admin\UsersBundle\Entity\TypeSoutanance $idTypesoutenance
     *
     * @return Soutanance
     */
    public function setIdTypesoutenance(\Admin\UsersBundle\Entity\TypeSoutanance $idTypesoutenance = null)
    {
        $this->idTypesoutenance = $idTypesoutenance;

        return $this;
    }

    /**
     * Get idTypesoutenance
     *
     * @return \Admin\UsersBundle\Entity\TypeSoutanance
     */
    public function getIdTypesoutenance()
    {
        return $this->idTypesoutenance;
    }

    /**
     * Set idStage
     *
     * @param \Admin\UsersBundle\Entity\Stage $idStage
     *
     * @return Soutanance
     */
    public function setIdStage(\Admin\UsersBundle\Entity\Stage $idStage = null)
    {
        $this->idStage = $idStage;

        return $this;
    }

    /**
     * Get idStage
     *
     * @return \Admin\UsersBundle\Entity\Stage
     */
    public function getIdStage()
    {
        return $this->idStage;
    }
}
