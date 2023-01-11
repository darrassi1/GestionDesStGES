<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filliere
 *
 * @ORM\Table(name="Filliere", indexes={@ORM\Index(name="Id_Etablissement", columns={"Id_Etablissement"})})
 * @ORM\Entity
 */
class Filliere
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Filliere", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFilliere;

    /**
     * @var string
     *
     * @ORM\Column(name="Filliere", type="string", length=120, nullable=false)
     */
    private $filliere;

    /**
     * @var string
     *
     * @ORM\Column(name="Diplome", type="string", length=120, nullable=false)
     */
    private $diplome;

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
     * Get idFilliere
     *
     * @return integer
     */
    public function getIdFilliere()
    {
        return $this->idFilliere;
    }

    /**
     * Set Filliere
     *
     * @param string $filliere
     *
     * @return Filliere
     */
    public function setFilliere($filliere)
    {
        $this->filliere = $filliere;

        return $this;
    }

    /**
     * Get Filliere
     *
     * @return string
     */
    public function getFilliere()
    {
        return $this->filliere;
    }

    /**
     * Set diplome
     *
     * @param string $diplome
     *
     * @return Filliere
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
     * @param \Admin\UsersBundle\Entity\Etablissement $idEtablissement
     *
     * @return Filliere
     */
    public function setIdEtablissement(\Admin\UsersBundle\Entity\Etablissement $idEtablissement = null)
    {
        $this->idEtablissement = $idEtablissement;

        return $this;
    }

    /**
     * Get idDepartement
     *
     * @return \Admin\UsersBundle\Entity\Etablissement
     */
    public function getIdEtablissement()
    {
        return $this->idEtablissement;
    }
}
