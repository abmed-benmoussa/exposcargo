<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phone
 *
 * @ORM\Table(name="phone", indexes={@ORM\Index(name="IDX_444F97DDFE94F394", columns={"idcity"})})
 * @ORM\Entity
 */
class Phone
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
     * @ORM\Column(name="number", type="string", length=32, nullable=false)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="ext", type="string", length=16, nullable=true)
     */
    private $ext;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="idphone", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="phone_idphone_seq", allocationSize=1, initialValue=1)
     */
    private $idphone;

    /**
     * @var \AppBundle\Entity\City
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcity", referencedColumnName="idcity")
     * })
     */
    private $idcity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Person", mappedBy="idphone")
     */
    private $idperson;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idperson = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Phone
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
     * Set number
     *
     * @param string $number
     *
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set ext
     *
     * @param string $ext
     *
     * @return Phone
     */
    public function setExt($ext)
    {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Get ext
     *
     * @return string
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Phone
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
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
     * Set idcity
     *
     * @param \AppBundle\Entity\City $idcity
     *
     * @return Phone
     */
    public function setIdcity(\AppBundle\Entity\City $idcity = null)
    {
        $this->idcity = $idcity;

        return $this;
    }

    /**
     * Get idcity
     *
     * @return \AppBundle\Entity\City
     */
    public function getIdcity()
    {
        return $this->idcity;
    }

    /**
     * Add idperson
     *
     * @param \AppBundle\Entity\Person $idperson
     *
     * @return Phone
     */
    public function addIdperson(\AppBundle\Entity\Person $idperson)
    {
        $this->idperson[] = $idperson;

        return $this;
    }

    /**
     * Remove idperson
     *
     * @param \AppBundle\Entity\Person $idperson
     */
    public function removeIdperson(\AppBundle\Entity\Person $idperson)
    {
        $this->idperson->removeElement($idperson);
    }

    /**
     * Get idperson
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdperson()
    {
        return $this->idperson;
    }
}
