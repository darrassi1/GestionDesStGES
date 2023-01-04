<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societea")
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


}

