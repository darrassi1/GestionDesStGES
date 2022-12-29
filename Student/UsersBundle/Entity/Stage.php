<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="stage", indexes={@ORM\Index(name="Id_technologie", columns={"Id_technologie"}), @ORM\Index(name="Id_TypeStage", columns={"Id_TypeStage"}), @ORM\Index(name="Id_Departement", columns={"Id_Departement"})})
 * @ORM\Entity
 */
class Stage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Stage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStage;

    /**
     * @var string
     *
     * @ORM\Column(name="Sujet_Stage", type="text", length=65535, nullable=false)
     */
    private $sujetStage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="affect", type="integer", nullable=false)
     */
    private $affect;

    /**
     * @var \Technologie
     *
     * @ORM\ManyToOne(targetEntity="Technologie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_technologie", referencedColumnName="Id_Technologie")
     * })
     */
    private $idTechnologie;

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
     * @var \TypeStage
     *
     * @ORM\ManyToOne(targetEntity="TypeStage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_TypeStage", referencedColumnName="Id_TypeStage")
     * })
     */
    private $idTypestage;



    /**
     * Get idStage
     *
     * @return integer
     */
    public function getIdStage()
    {
        return $this->idStage;
    }

    /**
     * Set sujetStage
     *
     * @param string $sujetStage
     *
     * @return Stage
     */
    public function setSujetStage($sujetStage)
    {
        $this->sujetStage = $sujetStage;

        return $this;
    }

    /**
     * Get sujetStage
     *
     * @return string
     */
    public function getSujetStage()
    {
        return $this->sujetStage;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Stage
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Stage
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set affect
     *
     * @param integer $affect
     *
     * @return Stage
     */
    public function setAffect($affect)
    {
        $this->affect = $affect;

        return $this;
    }

    /**
     * Get affect
     *
     * @return integer
     */
    public function getAffect()
    {
        return $this->affect;
    }

    /**
     * Set idTechnologie
     *
     * @param \Student\UsersBundle\Entity\Technologie $idTechnologie
     *
     * @return Stage
     */
    public function setIdTechnologie(\Student\UsersBundle\Entity\Technologie $idTechnologie = null)
    {
        $this->idTechnologie = $idTechnologie;

        return $this;
    }

    /**
     * Get idTechnologie
     *
     * @return \Student\UsersBundle\Entity\Technologie
     */
    public function getIdTechnologie()
    {
        return $this->idTechnologie;
    }

    /**
     * Set idDepartement
     *
     * @param \Student\UsersBundle\Entity\Departement $idDepartement
     *
     * @return Stage
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
     * Set idTypestage
     *
     * @param \Student\UsersBundle\Entity\TypeStage $idTypestage
     *
     * @return Stage
     */
    public function setIdTypestage(\Student\UsersBundle\Entity\TypeStage $idTypestage = null)
    {
        $this->idTypestage = $idTypestage;

        return $this;
    }

    /**
     * Get idTypestage
     *
     * @return \Student\UsersBundle\Entity\TypeStage
     */
    public function getIdTypestage()
    {
        return $this->idTypestage;
    }
}
