<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Standarddays
 *
 * @ORM\Table(name="standarddays")
 * @ORM\Entity
 */
class Standarddays
{
    /**
     * @var integer
     *
     * @ORM\Column(name="departureidlocation", type="integer", nullable=false)
     */
    private $departureidlocation;

    /**
     * @var integer
     *
     * @ORM\Column(name="deliveryidlocation", type="integer", nullable=false)
     */
    private $deliveryidlocation;

    /**
     * @var integer
     *
     * @ORM\Column(name="transportation", type="integer", nullable=false)
     */
    private $transportation;

    /**
     * @var integer
     *
     * @ORM\Column(name="days", type="integer", nullable=false)
     */
    private $days;

    /**
     * @var integer
     *
     * @ORM\Column(name="idstandarddays", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="standarddays_idstandarddays_seq", allocationSize=1, initialValue=1)
     */
    private $idstandarddays;



    /**
     * Set departureidlocation
     *
     * @param integer $departureidlocation
     *
     * @return Standarddays
     */
    public function setDepartureidlocation($departureidlocation)
    {
        $this->departureidlocation = $departureidlocation;

        return $this;
    }

    /**
     * Get departureidlocation
     *
     * @return integer
     */
    public function getDepartureidlocation()
    {
        return $this->departureidlocation;
    }

    /**
     * Set deliveryidlocation
     *
     * @param integer $deliveryidlocation
     *
     * @return Standarddays
     */
    public function setDeliveryidlocation($deliveryidlocation)
    {
        $this->deliveryidlocation = $deliveryidlocation;

        return $this;
    }

    /**
     * Get deliveryidlocation
     *
     * @return integer
     */
    public function getDeliveryidlocation()
    {
        return $this->deliveryidlocation;
    }

    /**
     * Set transportation
     *
     * @param integer $transportation
     *
     * @return Standarddays
     */
    public function setTransportation($transportation)
    {
        $this->transportation = $transportation;

        return $this;
    }

    /**
     * Get transportation
     *
     * @return integer
     */
    public function getTransportation()
    {
        return $this->transportation;
    }

    /**
     * Set days
     *
     * @param integer $days
     *
     * @return Standarddays
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return integer
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Get idstandarddays
     *
     * @return integer
     */
    public function getIdstandarddays()
    {
        return $this->idstandarddays;
    }
}
