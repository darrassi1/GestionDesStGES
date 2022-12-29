<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encadreur
 *
 * @ORM\Table(name="encadreur")
 * @ORM\Entity
 */
class Encadreur
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
     * @ORM\Column(name="Nom_Encadreur", type="string", length=120, nullable=false)
     */
    private $nomEncadreur;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Encadreur", type="string", length=120, nullable=false)
     */
    private $prenomEncadreur;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexe_Encadreur", type="string", length=120, nullable=false)
     */
    private $sexeEncadreur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_Encadreur", type="string", length=120, nullable=false)
     */
    private $adresseEncadreur;



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
     * Set nomEncadreur
     *
     * @param string $nomEncadreur
     *
     * @return Encadreur
     */
    public function setNomEncadreur($nomEncadreur)
    {
        $this->nomEncadreur = $nomEncadreur;

        return $this;
    }

    /**
     * Get nomEncadreur
     *
     * @return string
     */
    public function getNomEncadreur()
    {
        return $this->nomEncadreur;
    }

    /**
     * Set prenomEncadreur
     *
     * @param string $prenomEncadreur
     *
     * @return Encadreur
     */
    public function setPrenomEncadreur($prenomEncadreur)
    {
        $this->prenomEncadreur = $prenomEncadreur;

        return $this;
    }

    /**
     * Get prenomEncadreur
     *
     * @return string
     */
    public function getPrenomEncadreur()
    {
        return $this->prenomEncadreur;
    }

    /**
     * Set sexeEncadreur
     *
     * @param string $sexeEncadreur
     *
     * @return Encadreur
     */
    public function setSexeEncadreur($sexeEncadreur)
    {
        $this->sexeEncadreur = $sexeEncadreur;

        return $this;
    }

    /**
     * Get sexeEncadreur
     *
     * @return string
     */
    public function getSexeEncadreur()
    {
        return $this->sexeEncadreur;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Encadreur
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
     * Set adresseEncadreur
     *
     * @param string $adresseEncadreur
     *
     * @return Encadreur
     */
    public function setAdresseEncadreur($adresseEncadreur)
    {
        $this->adresseEncadreur = $adresseEncadreur;

        return $this;
    }

    /**
     * Get adresseEncadreur
     *
     * @return string
     */
    public function getAdresseEncadreur()
    {
        return $this->adresseEncadreur;
    }
}
