<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Technologie
 *
 * @ORM\Table(name="technologie")
 * @ORM\Entity
 */
class Technologie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Technologie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTechnologie;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_Technologie", type="string", length=120, nullable=false)
     */
    private $typeTechnologie;



    /**
     * Get idTechnologie
     *
     * @return integer
     */
    public function getIdTechnologie()
    {
        return $this->idTechnologie;
    }

    /**
     * Set typeTechnologie
     *
     * @param string $typeTechnologie
     *
     * @return Technologie
     */
    public function setTypeTechnologie($typeTechnologie)
    {
        $this->typeTechnologie = $typeTechnologie;

        return $this;
    }

    /**
     * Get typeTechnologie
     *
     * @return string
     */
    public function getTypeTechnologie()
    {
        return $this->typeTechnologie;
    }
}
