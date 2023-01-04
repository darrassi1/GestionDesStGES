<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeSoutanance
 *
 * @ORM\Table(name="type_soutanance")
 * @ORM\Entity
 */
class TypeSoutanance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_TypeSoutenance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypesoutenance;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_Soutenance", type="string", length=120, nullable=false)
     */
    private $typeSoutenance;



    /**
     * Get idTypesoutenance
     *
     * @return integer
     */
    public function getIdTypesoutenance()
    {
        return $this->idTypesoutenance;
    }

    /**
     * Set typeSoutenance
     *
     * @param string $typeSoutenance
     *
     * @return TypeSoutanance
     */
    public function setTypeSoutenance($typeSoutenance)
    {
        $this->typeSoutenance = $typeSoutenance;

        return $this;
    }

    /**
     * Get typeSoutenance
     *
     * @return string
     */
    public function getTypeSoutenance()
    {
        return $this->typeSoutenance;
    }
    public function __toString()
    {
        return $this->getTypeSoutenance();
    }
}
