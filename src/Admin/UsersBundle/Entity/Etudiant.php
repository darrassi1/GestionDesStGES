<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudianta", indexes={@ORM\Index(name="Id_Departement", columns={"Id_Departement"}), @ORM\Index(name="Id_Specialite", columns={"Id_Specialite"})})
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


}

