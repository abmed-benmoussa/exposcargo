<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boxesmanagment
 *
 * @ORM\Table(name="boxesmanagment", indexes={@ORM\Index(name="IDX_22289D161BF4DEF0", columns={"idboxes"})})
 * @ORM\Entity
 */
class Boxesmanagment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="clientrefer", type="integer", nullable=false)
     */
    private $clientrefer;

    /**
     * @var integer
     *
     * @ORM\Column(name="carrierpickup", type="integer", nullable=false)
     */
    private $carrierpickup;

    /**
     * @var integer
     *
     * @ORM\Column(name="returnboxes", type="integer", nullable=false)
     */
    private $returnboxes;

    /**
     * @var integer
     *
     * @ORM\Column(name="customservicesrefer", type="integer", nullable=false)
     */
    private $customservicesrefer;

    /**
     * @var integer
     *
     * @ORM\Column(name="consolidator", type="integer", nullable=false)
     */
    private $consolidator;

    /**
     * @var integer
     *
     * @ORM\Column(name="idboxesmanagment", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="boxesmanagment_idboxesmanagment_seq", allocationSize=1, initialValue=1)
     */
    private $idboxesmanagment;

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
     * Set status
     *
     * @param integer $status
     *
     * @return Boxesmanagment
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
     * Set clientrefer
     *
     * @param integer $clientrefer
     *
     * @return Boxesmanagment
     */
    public function setClientrefer($clientrefer)
    {
        $this->clientrefer = $clientrefer;

        return $this;
    }

    /**
     * Get clientrefer
     *
     * @return integer
     */
    public function getClientrefer()
    {
        return $this->clientrefer;
    }

    /**
     * Set carrierpickup
     *
     * @param integer $carrierpickup
     *
     * @return Boxesmanagment
     */
    public function setCarrierpickup($carrierpickup)
    {
        $this->carrierpickup = $carrierpickup;

        return $this;
    }

    /**
     * Get carrierpickup
     *
     * @return integer
     */
    public function getCarrierpickup()
    {
        return $this->carrierpickup;
    }

    /**
     * Set returnboxes
     *
     * @param integer $returnboxes
     *
     * @return Boxesmanagment
     */
    public function setReturnboxes($returnboxes)
    {
        $this->returnboxes = $returnboxes;

        return $this;
    }

    /**
     * Get returnboxes
     *
     * @return integer
     */
    public function getReturnboxes()
    {
        return $this->returnboxes;
    }

    /**
     * Set customservicesrefer
     *
     * @param integer $customservicesrefer
     *
     * @return Boxesmanagment
     */
    public function setCustomservicesrefer($customservicesrefer)
    {
        $this->customservicesrefer = $customservicesrefer;

        return $this;
    }

    /**
     * Get customservicesrefer
     *
     * @return integer
     */
    public function getCustomservicesrefer()
    {
        return $this->customservicesrefer;
    }

    /**
     * Set consolidator
     *
     * @param integer $consolidator
     *
     * @return Boxesmanagment
     */
    public function setConsolidator($consolidator)
    {
        $this->consolidator = $consolidator;

        return $this;
    }

    /**
     * Get consolidator
     *
     * @return integer
     */
    public function getConsolidator()
    {
        return $this->consolidator;
    }

    /**
     * Get idboxesmanagment
     *
     * @return integer
     */
    public function getIdboxesmanagment()
    {
        return $this->idboxesmanagment;
    }

    /**
     * Set idboxes
     *
     * @param \AppBundle\Entity\Boxes $idboxes
     *
     * @return Boxesmanagment
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
