<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location", indexes={@ORM\Index(name="IDX_5E9E89CBD24A3DEF", columns={"idaddress"}), @ORM\Index(name="IDX_5E9E89CB50617CDA", columns={"idperson"})})
 * @ORM\Entity
 */
class Location
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", nullable=false)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="schedule", type="string", nullable=true)
     */
    private $schedule;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=16, nullable=true)
     */
    private $category;

    /**
     * @var integer
     *
     * @ORM\Column(name="locationidcountry", type="integer", nullable=false)
     */
    private $locationidcountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="locationidcity", type="integer", nullable=false)
     */
    private $locationidcity;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", nullable=true)
     */
    private $comments;

    /**
     * @var integer
     *
     * @ORM\Column(name="idphone", type="integer", nullable=false)
     */
    private $idphone;

    /**
     * @var integer
     *
     * @ORM\Column(name="idlocation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="location_idlocation_seq", allocationSize=1, initialValue=1)
     */
    private $idlocation;

    /**
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idperson", referencedColumnName="idperson")
     * })
     */
    private $idperson;

    /**
     * @var \AppBundle\Entity\Address
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idaddress", referencedColumnName="idaddress")
     * })
     */
    private $idaddress;



    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Location
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return Location
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set schedule
     *
     * @param string $schedule
     *
     * @return Location
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get schedule
     *
     * @return string
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Location
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set locationidcountry
     *
     * @param integer $locationidcountry
     *
     * @return Location
     */
    public function setLocationidcountry($locationidcountry)
    {
        $this->locationidcountry = $locationidcountry;

        return $this;
    }

    /**
     * Get locationidcountry
     *
     * @return integer
     */
    public function getLocationidcountry()
    {
        return $this->locationidcountry;
    }

    /**
     * Set locationidcity
     *
     * @param integer $locationidcity
     *
     * @return Location
     */
    public function setLocationidcity($locationidcity)
    {
        $this->locationidcity = $locationidcity;

        return $this;
    }

    /**
     * Get locationidcity
     *
     * @return integer
     */
    public function getLocationidcity()
    {
        return $this->locationidcity;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Location
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set idphone
     *
     * @param integer $idphone
     *
     * @return Location
     */
    public function setIdphone($idphone)
    {
        $this->idphone = $idphone;

        return $this;
    }

    /**
     * Get idphone
     *
     * @return integer
     */
    public function getIdphone()
    {
        return $this->idphone;
    }

    /**
     * Get idlocation
     *
     * @return integer
     */
    public function getIdlocation()
    {
        return $this->idlocation;
    }

    /**
     * Set idperson
     *
     * @param \AppBundle\Entity\Person $idperson
     *
     * @return Location
     */
    public function setIdperson(\AppBundle\Entity\Person $idperson = null)
    {
        $this->idperson = $idperson;

        return $this;
    }

    /**
     * Get idperson
     *
     * @return \AppBundle\Entity\Person
     */
    public function getIdperson()
    {
        return $this->idperson;
    }

    /**
     * Set idaddress
     *
     * @param \AppBundle\Entity\Address $idaddress
     *
     * @return Location
     */
    public function setIdaddress(\AppBundle\Entity\Address $idaddress = null)
    {
        $this->idaddress = $idaddress;

        return $this;
    }

    /**
     * Get idaddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getIdaddress()
    {
        return $this->idaddress;
    }
}
