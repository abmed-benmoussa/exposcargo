<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Celog
 *
 * @ORM\Table(name="celog", indexes={@ORM\Index(name="IDX_64364C662371213E", columns={"idaction"}), @ORM\Index(name="IDX_64364C665E5C27E9", columns={"iduser"})})
 * @ORM\Entity
 */
class Celog
{
    /**
     * @var string
     *
     * @ORM\Column(name="sourceinfo", type="string", length=255, nullable=false)
     */
    private $sourceinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="changeto", type="string", length=255, nullable=false)
     */
    private $changeto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="idlog", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="celog_idlog_seq", allocationSize=1, initialValue=1)
     */
    private $idlog;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;

    /**
     * @var \AppBundle\Entity\Actioncatalog
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Actioncatalog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idaction", referencedColumnName="idaction")
     * })
     */
    private $idaction;



    /**
     * Set sourceinfo
     *
     * @param string $sourceinfo
     *
     * @return Celog
     */
    public function setSourceinfo($sourceinfo)
    {
        $this->sourceinfo = $sourceinfo;

        return $this;
    }

    /**
     * Get sourceinfo
     *
     * @return string
     */
    public function getSourceinfo()
    {
        return $this->sourceinfo;
    }

    /**
     * Set changeto
     *
     * @param string $changeto
     *
     * @return Celog
     */
    public function setChangeto($changeto)
    {
        $this->changeto = $changeto;

        return $this;
    }

    /**
     * Get changeto
     *
     * @return string
     */
    public function getChangeto()
    {
        return $this->changeto;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Celog
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Get idlog
     *
     * @return integer
     */
    public function getIdlog()
    {
        return $this->idlog;
    }

    /**
     * Set iduser
     *
     * @param \AppBundle\Entity\Users $iduser
     *
     * @return Celog
     */
    public function setIduser(\AppBundle\Entity\Users $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \AppBundle\Entity\Users
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set idaction
     *
     * @param \AppBundle\Entity\Actioncatalog $idaction
     *
     * @return Celog
     */
    public function setIdaction(\AppBundle\Entity\Actioncatalog $idaction = null)
    {
        $this->idaction = $idaction;

        return $this;
    }

    /**
     * Get idaction
     *
     * @return \AppBundle\Entity\Actioncatalog
     */
    public function getIdaction()
    {
        return $this->idaction;
    }
}
