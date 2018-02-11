<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projectconfig
 *
 * @ORM\Table(name="projectconfig")
 * @ORM\Entity
 */
class Projectconfig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="projecttype", type="integer", nullable=false)
     */
    private $projecttype;

    /**
     * @var integer
     *
     * @ORM\Column(name="shipmenttype", type="integer", nullable=false)
     */
    private $shipmenttype;

    /**
     * @var integer
     *
     * @ORM\Column(name="consolidator", type="integer", nullable=false)
     */
    private $consolidator;

    /**
     * @var integer
     *
     * @ORM\Column(name="servicespickup", type="integer", nullable=false)
     */
    private $servicespickup;

    /**
     * @var integer
     *
     * @ORM\Column(name="servicesinsurance", type="integer", nullable=false)
     */
    private $servicesinsurance;

    /**
     * @var integer
     *
     * @ORM\Column(name="servicestaged", type="integer", nullable=false)
     */
    private $servicestaged;

    /**
     * @var integer
     *
     * @ORM\Column(name="servicescheck", type="integer", nullable=false)
     */
    private $servicescheck;

    /**
     * @var integer
     *
     * @ORM\Column(name="servicesdelivery", type="integer", nullable=false)
     */
    private $servicesdelivery;

    /**
     * @var integer
     *
     * @ORM\Column(name="servicesgifts", type="integer", nullable=false)
     */
    private $servicesgifts;

    /**
     * @var string
     *
     * @ORM\Column(name="mandatoryfields", type="string", length=512, nullable=false)
     */
    private $mandatoryfields;

    /**
     * @var \AppBundle\Entity\Project
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idproject", referencedColumnName="idproject")
     * })
     */
    private $idproject;



    /**
     * Set projecttype
     *
     * @param integer $projecttype
     *
     * @return Projectconfig
     */
    public function setProjecttype($projecttype)
    {
        $this->projecttype = $projecttype;

        return $this;
    }

    /**
     * Get projecttype
     *
     * @return integer
     */
    public function getProjecttype()
    {
        return $this->projecttype;
    }

    /**
     * Set shipmenttype
     *
     * @param integer $shipmenttype
     *
     * @return Projectconfig
     */
    public function setShipmenttype($shipmenttype)
    {
        $this->shipmenttype = $shipmenttype;

        return $this;
    }

    /**
     * Get shipmenttype
     *
     * @return integer
     */
    public function getShipmenttype()
    {
        return $this->shipmenttype;
    }

    /**
     * Set consolidator
     *
     * @param integer $consolidator
     *
     * @return Projectconfig
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
     * Set servicespickup
     *
     * @param integer $servicespickup
     *
     * @return Projectconfig
     */
    public function setServicespickup($servicespickup)
    {
        $this->servicespickup = $servicespickup;

        return $this;
    }

    /**
     * Get servicespickup
     *
     * @return integer
     */
    public function getServicespickup()
    {
        return $this->servicespickup;
    }

    /**
     * Set servicesinsurance
     *
     * @param integer $servicesinsurance
     *
     * @return Projectconfig
     */
    public function setServicesinsurance($servicesinsurance)
    {
        $this->servicesinsurance = $servicesinsurance;

        return $this;
    }

    /**
     * Get servicesinsurance
     *
     * @return integer
     */
    public function getServicesinsurance()
    {
        return $this->servicesinsurance;
    }

    /**
     * Set servicestaged
     *
     * @param integer $servicestaged
     *
     * @return Projectconfig
     */
    public function setServicestaged($servicestaged)
    {
        $this->servicestaged = $servicestaged;

        return $this;
    }

    /**
     * Get servicestaged
     *
     * @return integer
     */
    public function getServicestaged()
    {
        return $this->servicestaged;
    }

    /**
     * Set servicescheck
     *
     * @param integer $servicescheck
     *
     * @return Projectconfig
     */
    public function setServicescheck($servicescheck)
    {
        $this->servicescheck = $servicescheck;

        return $this;
    }

    /**
     * Get servicescheck
     *
     * @return integer
     */
    public function getServicescheck()
    {
        return $this->servicescheck;
    }

    /**
     * Set servicesdelivery
     *
     * @param integer $servicesdelivery
     *
     * @return Projectconfig
     */
    public function setServicesdelivery($servicesdelivery)
    {
        $this->servicesdelivery = $servicesdelivery;

        return $this;
    }

    /**
     * Get servicesdelivery
     *
     * @return integer
     */
    public function getServicesdelivery()
    {
        return $this->servicesdelivery;
    }

    /**
     * Set servicesgifts
     *
     * @param integer $servicesgifts
     *
     * @return Projectconfig
     */
    public function setServicesgifts($servicesgifts)
    {
        $this->servicesgifts = $servicesgifts;

        return $this;
    }

    /**
     * Get servicesgifts
     *
     * @return integer
     */
    public function getServicesgifts()
    {
        return $this->servicesgifts;
    }

    /**
     * Set mandatoryfields
     *
     * @param string $mandatoryfields
     *
     * @return Projectconfig
     */
    public function setMandatoryfields($mandatoryfields)
    {
        $this->mandatoryfields = $mandatoryfields;

        return $this;
    }

    /**
     * Get mandatoryfields
     *
     * @return string
     */
    public function getMandatoryfields()
    {
        return $this->mandatoryfields;
    }

    /**
     * Set idproject
     *
     * @param \AppBundle\Entity\Project $idproject
     *
     * @return Projectconfig
     */
    public function setIdproject(\AppBundle\Entity\Project $idproject)
    {
        $this->idproject = $idproject;

        return $this;
    }

    /**
     * Get idproject
     *
     * @return \AppBundle\Entity\Project
     */
    public function getIdproject()
    {
        return $this->idproject;
    }
}
