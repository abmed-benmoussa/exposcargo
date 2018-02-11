<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attachmentmediafiles
 *
 * @ORM\Table(name="attachmentmediafiles", indexes={@ORM\Index(name="IDX_A3131CAF1BF4DEF0", columns={"idboxes"})})
 * @ORM\Entity
 */
class Attachmentmediafiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="storaged", type="datetime", nullable=false)
     */
    private $storaged;

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=255, nullable=false)
     */
    private $filepath;

    /**
     * @var string
     *
     * @ORM\Column(name="filemimetype", type="string", length=255, nullable=false)
     */
    private $filemimetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmediafile", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="attachmentmediafiles_idmediafile_seq", allocationSize=1, initialValue=1)
     */
    private $idmediafile;

    /**
     * @var \AppBundle\Entity\Boxes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Boxes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idboxes", referencedColumnName="idboxes")
     * })
     */
    private $idboxes;



    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Attachmentmediafiles
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
     * Set storaged
     *
     * @param \DateTime $storaged
     *
     * @return Attachmentmediafiles
     */
    public function setStoraged($storaged)
    {
        $this->storaged = $storaged;

        return $this;
    }

    /**
     * Get storaged
     *
     * @return \DateTime
     */
    public function getStoraged()
    {
        return $this->storaged;
    }

    /**
     * Set filepath
     *
     * @param string $filepath
     *
     * @return Attachmentmediafiles
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Get filepath
     *
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Set filemimetype
     *
     * @param string $filemimetype
     *
     * @return Attachmentmediafiles
     */
    public function setFilemimetype($filemimetype)
    {
        $this->filemimetype = $filemimetype;

        return $this;
    }

    /**
     * Get filemimetype
     *
     * @return string
     */
    public function getFilemimetype()
    {
        return $this->filemimetype;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Attachmentmediafiles
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     *
     * @return Attachmentmediafiles
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Get idmediafile
     *
     * @return integer
     */
    public function getIdmediafile()
    {
        return $this->idmediafile;
    }

    /**
     * Set idboxes
     *
     * @param \AppBundle\Entity\Boxes $idboxes
     *
     * @return Attachmentmediafiles
     */
    public function setIdboxes(\AppBundle\Entity\Boxes $idboxes = null)
    {
        $this->idboxes = $idboxes;

        return $this;
    }

    /**
     * Get idboxes
     *
     * @return \AppBundle\Entity\Boxes
     */
    public function getIdboxes()
    {
        return $this->idboxes;
    }
}
