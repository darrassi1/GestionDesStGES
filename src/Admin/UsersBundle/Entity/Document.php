<?php

namespace Admin\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="documenta", indexes={@ORM\Index(name="NCINET", columns={"NCINET", "NCINED"}), @ORM\Index(name="NCINED", columns={"NCINED"}), @ORM\Index(name="Id_typeDocument", columns={"Id_typeDocument"}), @ORM\Index(name="IDX_D8698A76E6D371F6", columns={"NCINET"})})
 * @ORM\Entity
 */
class Document
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Document", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDocument;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Document", type="string", length=120, nullable=false)
     */
    private $nomDocument;

    /**
     * @var string
     *
     * @ORM\Column(name="Chemin_Document", type="string", length=120, nullable=false)
     */
    private $cheminDocument;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date__Document", type="date", nullable=false)
     */
    private $dateDocument;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NCINED", referencedColumnName="id")
     * })
     */
    private $ncined;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NCINET", referencedColumnName="id")
     * })
     */
    private $ncinet;

    /**
     * @var \TypeDocument
     *
     * @ORM\ManyToOne(targetEntity="TypeDocument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_typeDocument", referencedColumnName="Id_typeDocument")
     * })
     */
    private $idTypedocument;



    /**
     * Get idDocument
     *
     * @return integer
     */
    public function getIdDocument()
    {
        return $this->idDocument;
    }

    /**
     * Set nomDocument
     *
     * @param string $nomDocument
     *
     * @return Document
     */
    public function setNomDocument($nomDocument)
    {
        $this->nomDocument = $nomDocument;

        return $this;
    }

    /**
     * Get nomDocument
     *
     * @return string
     */
    public function getNomDocument()
    {
        return $this->nomDocument;
    }

    /**
     * Set cheminDocument
     *
     * @param string $cheminDocument
     *
     * @return Document
     */
    public function setCheminDocument($cheminDocument)
    {
        $this->cheminDocument = $cheminDocument;

        return $this;
    }

    /**
     * Get cheminDocument
     *
     * @return string
     */
    public function getCheminDocument()
    {
        return $this->cheminDocument;
    }

    /**
     * Set dateDocument
     *
     * @param \DateTime $dateDocument
     *
     * @return Document
     */
    public function setDateDocument($dateDocument)
    {
        $this->dateDocument = $dateDocument;

        return $this;
    }

    /**
     * Get dateDocument
     *
     * @return \DateTime
     */
    public function getDateDocument()
    {
        return $this->dateDocument;
    }

    /**
     * Set ncined
     *
     * @param \Admin\UsersBundle\Entity\Etudiant $ncined
     *
     * @return Document
     */
    public function setNcined(\Admin\UsersBundle\Entity\User $ncined = null)
    {
        $this->ncined = $ncined;

        return $this;
    }

    /**
     * Get ncined
     *
     * @return \Admin\UsersBundle\Entity\Etudiant
     */
    public function getNcined()
    {
        return $this->ncined;
    }

    /**
     * Set ncinet
     *
     * @param \Admin\UsersBundle\Entity\Encadreur $ncinet
     *
     * @return Document
     */
    public function setNcinet(\Admin\UsersBundle\Entity\User $ncinet = null)
    {
        $this->ncinet = $ncinet;

        return $this;
    }

    /**
     * Get ncinet
     *
     * @return \Admin\UsersBundle\Entity\Encadreur
     */
    public function getNcinet()
    {
        return $this->ncinet;
    }

    /**
     * Set idTypedocument
     *
     * @param \Admin\UsersBundle\Entity\TypeDocument $idTypedocument
     *
     * @return Document
     */
    public function setIdTypedocument(\Admin\UsersBundle\Entity\TypeDocument $idTypedocument = null)
    {
        $this->idTypedocument = $idTypedocument;

        return $this;
    }

    /**
     * Get idTypedocument
     *
     * @return \Admin\UsersBundle\Entity\TypeDocument
     */
    public function getIdTypedocument()
    {
        return $this->idTypedocument;
    }
}
