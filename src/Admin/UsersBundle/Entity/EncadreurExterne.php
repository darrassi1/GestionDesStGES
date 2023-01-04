<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncadreurExterne
 *
 * @ORM\Table(name="encadreur_externea", indexes={@ORM\Index(name="Id_Societe", columns={"Id_Societe"}), @ORM\Index(name="NCIN", columns={"NCIN"})})
 * @ORM\Entity
 */
class EncadreurExterne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_encadreurE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEncadreure;

    /**
     * @var string
     *
     * @ORM\Column(name="Poste", type="string", length=120, nullable=false)
     */
    private $poste;

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
     * @var \Societe
     *
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Societe", referencedColumnName="Id_Societe")
     * })
     */
    private $idSociete;


}

