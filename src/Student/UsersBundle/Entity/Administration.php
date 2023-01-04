<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administration
 *
 * @ORM\Table(name="administration", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Administration
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAdmin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadmin;

    /**
     * @var string
     *
     * @ORM\Column(name="FirstName", type="string", length=120, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=120, nullable=false)
     */
    private $lastname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Birth", type="date", nullable=false)
     */
    private $birth;

    /**
     * @var string
     *
     * @ORM\Column(name="EmailAddress", type="string", length=120, nullable=false)
     */
    private $emailaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone", type="string", length=11, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="Gender", type="string", length=11, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="ZipCode", type="string", length=11, nullable=false)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=120, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="img_src", type="string", length=120, nullable=false)
     */
    private $imgSrc;

    /**
     * @var \TutoUser
     *
     * @ORM\ManyToOne(targetEntity="TutoUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;



    /**
     * Get idadmin
     *
     * @return integer
     */
    public function getIdadmin()
    {
        return $this->idadmin;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Administration
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Administration
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set birth
     *
     * @param \DateTime $birth
     *
     * @return Administration
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set emailaddress
     *
     * @param string $emailaddress
     *
     * @return Administration
     */
    public function setEmailaddress($emailaddress)
    {
        $this->emailaddress = $emailaddress;

        return $this;
    }

    /**
     * Get emailaddress
     *
     * @return string
     */
    public function getEmailaddress()
    {
        return $this->emailaddress;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Administration
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Administration
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Administration
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Administration
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set imgSrc
     *
     * @param string $imgSrc
     *
     * @return Administration
     */
    public function setImgSrc($imgSrc)
    {
        $this->imgSrc = $imgSrc;

        return $this;
    }

    /**
     * Get imgSrc
     *
     * @return string
     */
    public function getImgSrc()
    {
        return $this->imgSrc;
    }

    /**
     * Set iduser
     *
     * @param \Student\UsersBundle\Entity\TutoUser $iduser
     *
     * @return Administration
     */
    public function setIduser(\Student\UsersBundle\Entity\TutoUser $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Student\UsersBundle\Entity\TutoUser
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
