<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant", indexes={@ORM\Index(name="Id_Departement", columns={"Id_Departement"}), @ORM\Index(name="Id_Specialite", columns={"Id_Specialite"})})
 * @ORM\Entity
 */
class Etudiant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NCIN", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ncin;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Etudiant", type="string", length=120, nullable=false)
     */
    private $nomEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Etudiant", type="string", length=120, nullable=false)
     */
    private $prenomEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexe_Etudiant", type="string", length=120, nullable=false)
     */
    private $sexeEtudiant;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tel_Etudiant", type="integer", nullable=false)
     */
    private $telEtudiant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Nationalite_Etudiant", type="string", length=120, nullable=false)
     */
    private $nationaliteEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="Niveau_Etudiant", type="string", length=120, nullable=false)
     */
    private $niveauEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_Etudiant", type="string", length=120, nullable=false)
     */
    private $adresseEtudiant;

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
     * @var \Specialite
     *
     * @ORM\ManyToOne(targetEntity="Specialite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Specialite", referencedColumnName="Id_Specialite")
     * })
     */
    private $idSpecialite;



    /**
     * Get ncin
     *
     * @return integer
     */
    public function getNcin()
    {
        return $this->ncin;
    }

    /**
     * Set nomEtudiant
     *
     * @param string $nomEtudiant
     *
     * @return Etudiant
     */
    public function setNomEtudiant($nomEtudiant)
    {
        $this->nomEtudiant = $nomEtudiant;

        return $this;
    }

    /**
     * Get nomEtudiant
     *
     * @return string
     */
    public function getNomEtudiant()
    {
        return $this->nomEtudiant;
    }

    /**
     * Set prenomEtudiant
     *
     * @param string $prenomEtudiant
     *
     * @return Etudiant
     */
    public function setPrenomEtudiant($prenomEtudiant)
    {
        $this->prenomEtudiant = $prenomEtudiant;

        return $this;
    }

    /**
     * Get prenomEtudiant
     *
     * @return string
     */
    public function getPrenomEtudiant()
    {
        return $this->prenomEtudiant;
    }

    /**
     * Set sexeEtudiant
     *
     * @param string $sexeEtudiant
     *
     * @return Etudiant
     */
    public function setSexeEtudiant($sexeEtudiant)
    {
        $this->sexeEtudiant = $sexeEtudiant;

        return $this;
    }

    /**
     * Get sexeEtudiant
     *
     * @return string
     */
    public function getSexeEtudiant()
    {
        return $this->sexeEtudiant;
    }

    /**
     * Set telEtudiant
     *
     * @param integer $telEtudiant
     *
     * @return Etudiant
     */
    public function setTelEtudiant($telEtudiant)
    {
        $this->telEtudiant = $telEtudiant;

        return $this;
    }

    /**
     * Get telEtudiant
     *
     * @return integer
     */
    public function getTelEtudiant()
    {
        return $this->telEtudiant;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Etudiant
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set nationaliteEtudiant
     *
     * @param string $nationaliteEtudiant
     *
     * @return Etudiant
     */
    public function setNationaliteEtudiant($nationaliteEtudiant)
    {
        $this->nationaliteEtudiant = $nationaliteEtudiant;

        return $this;
    }

    /**
     * Get nationaliteEtudiant
     *
     * @return string
     */
    public function getNationaliteEtudiant()
    {
        return $this->nationaliteEtudiant;
    }

    /**
     * Set niveauEtudiant
     *
     * @param string $niveauEtudiant
     *
     * @return Etudiant
     */
    public function setNiveauEtudiant($niveauEtudiant)
    {
        $this->niveauEtudiant = $niveauEtudiant;

        return $this;
    }

    /**
     * Get niveauEtudiant
     *
     * @return string
     */
    public function getNiveauEtudiant()
    {
        return $this->niveauEtudiant;
    }

    /**
     * Set adresseEtudiant
     *
     * @param string $adresseEtudiant
     *
     * @return Etudiant
     */
    public function setAdresseEtudiant($adresseEtudiant)
    {
        $this->adresseEtudiant = $adresseEtudiant;

        return $this;
    }

    /**
     * Get adresseEtudiant
     *
     * @return string
     */
    public function getAdresseEtudiant()
    {
        return $this->adresseEtudiant;
    }

    /**
     * Set idDepartement
     *
     * @param \Student\UsersBundle\Entity\Departement $idDepartement
     *
     * @return Etudiant
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
     * Set idSpecialite
     *
     * @param \Student\UsersBundle\Entity\Specialite $idSpecialite
     *
     * @return Etudiant
     */
    public function setIdSpecialite(\Student\UsersBundle\Entity\Specialite $idSpecialite = null)
    {
        $this->idSpecialite = $idSpecialite;

        return $this;
    }

    /**
     * Get idSpecialite
     *
     * @return \Student\UsersBundle\Entity\Specialite
     */
    public function getIdSpecialite()
    {
        return $this->idSpecialite;
    }
}
