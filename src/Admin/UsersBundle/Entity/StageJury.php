<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StageJury
 *
 * @ORM\Table(name="stage_jurya", indexes={@ORM\Index(name="Id_Soutenance", columns={"Id_Soutenance"}), @ORM\Index(name="NCIN", columns={"NCIN"})})
 * @ORM\Entity
 */
class StageJury
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_StageJury", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStagejury;

    /**
     * @var string
     *
     * @ORM\Column(name="Role_Membre", type="string", length=120, nullable=false)
     */
    private $roleMembre;

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
     * @var \Soutanance
     *
     * @ORM\ManyToOne(targetEntity="Soutanance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Soutenance", referencedColumnName="Id_Soutenance")
     * })
     */
    private $idSoutenance;


}

