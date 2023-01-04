<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDocument
 *
 * @ORM\Table(name="type_documenta")
 * @ORM\Entity
 */
class TypeDocument
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_typeDocument", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypedocument;

    /**
     * @var string
     *
     * @ORM\Column(name="typeDocument", type="string", length=120, nullable=false)
     */
    private $typedocument;


    

    /**
     * Get idTypedocument
     *
     * @return integer
     */
    public function getIdTypedocument()
    {
        return $this->idTypedocument;
    }

    /**
     * Set typedocument
     *
     * @param string $typedocument
     *
     * @return TypeDocument
     */
    public function setTypedocument($typedocument)
    {
        $this->typedocument = $typedocument;

        return $this;
    }

    /**
     * Get typedocument
     *
     * @return string
     */
    public function getTypedocument()
    {
        return $this->typedocument;
    }

    public function __toString()
    {
        return $this->getTypedocument();
    }
}
