<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encadreur
 *
 * @ORM\Table(name="encadreura")
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
}
