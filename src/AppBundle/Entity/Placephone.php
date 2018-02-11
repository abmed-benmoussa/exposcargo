<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Placephone
 *
 * @ORM\Table(name="placephone", indexes={@ORM\Index(name="IDX_D3DF972A924AFBC4", columns={"idphone"}), @ORM\Index(name="IDX_D3DF972AF44BC1C6", columns={"idlocation"})})
 * @ORM\Entity
 */
class Placephone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idplacephone", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="placephone_idplacephone_seq", allocationSize=1, initialValue=1)
     */
    private $idplacephone;

    /**
     * @var \AppBundle\Entity\Location
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idlocation", referencedColumnName="idlocation")
     * })
     */
    private $idlocation;

    /**
     * @var \AppBundle\Entity\Phone
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Phone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idphone", referencedColumnName="idphone")
     * })
     */
    private $idphone;



    /**
     * Get idplacephone
     *
     * @return integer
     */
    public function getIdplacephone()
    {
        return $this->idplacephone;
    }

    /**
     * Set idlocation
     *
     * @param \AppBundle\Entity\Location $idlocation
     *
     * @return Placephone
     */
    public function setIdlocation(\AppBundle\Entity\Location $idlocation = null)
    {
        $this->idlocation = $idlocation;

        return $this;
    }

    /**
     * Get idlocation
     *
     * @return \AppBundle\Entity\Location
     */
    public function getIdlocation()
    {
        return $this->idlocation;
    }

    /**
     * Set idphone
     *
     * @param \AppBundle\Entity\Phone $idphone
     *
     * @return Placephone
     */
    public function setIdphone(\AppBundle\Entity\Phone $idphone = null)
    {
        $this->idphone = $idphone;

        return $this;
    }

    /**
     * Get idphone
     *
     * @return \AppBundle\Entity\Phone
     */
    public function getIdphone()
    {
        return $this->idphone;
    }
}
