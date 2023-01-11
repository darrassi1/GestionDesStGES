<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="stagea", indexes={@ORM\Index(name="Id_technologie", columns={"Id_technologie"}), @ORM\Index(name="Id_TypeStage", columns={"Id_TypeStage"}), @ORM\Index(name="Id_Etablissement", columns={"Id_Etablissement"})})
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

    /**
     * @var \Etablissement
     *
     * @ORM\ManyToOne(targetEntity="Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Etablissement", referencedColumnName="Id_Etablissement")
     * })
     */
    private $idEtablissement;

    /**
     * @var \TypeStage
     *
     * @ORM\ManyToOne(targetEntity="TypeStage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_TypeStage", referencedColumnName="Id_TypeStage")
     * })
     */



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
     * @param \Admin\UsersBundle\Entity\Technologie $idTechnologie
     *
     * @return Stage
     */


    /**
     * Get idTechnologie
     *
     * @return \Admin\UsersBundle\Entity\Technologie
     */


    /**
     * Set idEtablissement
     *
     * @param \Admin\UsersBundle\Entity\Etablissement $idEtablissement
     *
     * @return Stage
     */
    public function setIdEtablissement(\Admin\UsersBundle\Entity\Etablissement $idEtablissement = null)
    {
        $this->idEtablissement = $idEtablissement;

        return $this;
    }

    /**
     * Get idEtablissement
     *
     * @return \Admin\UsersBundle\Entity\Etablissement
     */
    public function getIdEtablissement()
    {
        return $this->idEtablissement;
    }

    /**
     * Set idTypestage
     *
     * @param \Admin\UsersBundle\Entity\TypeStage $idTypestage
     *
     * @return Stage
     */


    public function __toString()
    {
        return $this->getIdStage() . "";
    }
}
