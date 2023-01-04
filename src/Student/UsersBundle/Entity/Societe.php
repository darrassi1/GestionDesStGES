<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societe")
 * @ORM\Entity
 */
class Societe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Societe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Societe", type="string", length=120, nullable=false)
     */
    private $nomSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="Descption_Societe", type="string", length=120, nullable=false)
     */
    private $descptionSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="Local_Societe", type="string", length=120, nullable=false)
     */
    private $localSociete;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tel_Societe", type="integer", nullable=false)
     */
    private $telSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail_Societe", type="string", length=120, nullable=false)
     */
    private $mailSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="SiteWeb_Societe", type="string", length=120, nullable=false)
     */
    private $sitewebSociete;



    /**
     * Get idSociete
     *
     * @return integer
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }

    /**
     * Set nomSociete
     *
     * @param string $nomSociete
     *
     * @return Societe
     */
    public function setNomSociete($nomSociete)
    {
        $this->nomSociete = $nomSociete;

        return $this;
    }

    /**
     * Get nomSociete
     *
     * @return string
     */
    public function getNomSociete()
    {
        return $this->nomSociete;
    }

    /**
     * Set descptionSociete
     *
     * @param string $descptionSociete
     *
     * @return Societe
     */
    public function setDescptionSociete($descptionSociete)
    {
        $this->descptionSociete = $descptionSociete;

        return $this;
    }

    /**
     * Get descptionSociete
     *
     * @return string
     */
    public function getDescptionSociete()
    {
        return $this->descptionSociete;
    }

    /**
     * Set localSociete
     *
     * @param string $localSociete
     *
     * @return Societe
     */
    public function setLocalSociete($localSociete)
    {
        $this->localSociete = $localSociete;

        return $this;
    }

    /**
     * Get localSociete
     *
     * @return string
     */
    public function getLocalSociete()
    {
        return $this->localSociete;
    }

    /**
     * Set telSociete
     *
     * @param integer $telSociete
     *
     * @return Societe
     */
    public function setTelSociete($telSociete)
    {
        $this->telSociete = $telSociete;

        return $this;
    }

    /**
     * Get telSociete
     *
     * @return integer
     */
    public function getTelSociete()
    {
        return $this->telSociete;
    }

    /**
     * Set mailSociete
     *
     * @param string $mailSociete
     *
     * @return Societe
     */
    public function setMailSociete($mailSociete)
    {
        $this->mailSociete = $mailSociete;

        return $this;
    }

    /**
     * Get mailSociete
     *
     * @return string
     */
    public function getMailSociete()
    {
        return $this->mailSociete;
    }

    /**
     * Set sitewebSociete
     *
     * @param string $sitewebSociete
     *
     * @return Societe
     */
    public function setSitewebSociete($sitewebSociete)
    {
        $this->sitewebSociete = $sitewebSociete;

        return $this;
    }

    /**
     * Get sitewebSociete
     *
     * @return string
     */
    public function getSitewebSociete()
    {
        return $this->sitewebSociete;
    }
}
