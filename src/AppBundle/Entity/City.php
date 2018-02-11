<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city", indexes={@ORM\Index(name="IDX_2D5B02348C779B08", columns={"idcountry"})})
 * @ORM\Entity
 */
class City
{
    /**
     * @var string
     *
     * @ORM\Column(name="iso639_3", type="string", nullable=false)
     */
    private $iso6393;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", nullable=false)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="phonecitycode", type="string", nullable=false)
     */
    private $phonecitycode;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=18, scale=9, nullable=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=18, scale=9, nullable=false)
     */
    private $longitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcity", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="city_idcity_seq", allocationSize=1, initialValue=1)
     */
    private $idcity;

    /**
     * @var \AppBundle\Entity\Country
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcountry", referencedColumnName="idcountry")
     * })
     */
    private $idcountry;



    /**
     * Set iso6393
     *
     * @param string $iso6393
     *
     * @return City
     */
    public function setIso6393($iso6393)
    {
        $this->iso6393 = $iso6393;

        return $this;
    }

    /**
     * Get iso6393
     *
     * @return string
     */
    public function getIso6393()
    {
        return $this->iso6393;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return City
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
     * Set phonecitycode
     *
     * @param string $phonecitycode
     *
     * @return City
     */
    public function setPhonecitycode($phonecitycode)
    {
        $this->phonecitycode = $phonecitycode;

        return $this;
    }

    /**
     * Get phonecitycode
     *
     * @return string
     */
    public function getPhonecitycode()
    {
        return $this->phonecitycode;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return City
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return City
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Get idcity
     *
     * @return integer
     */
    public function getIdcity()
    {
        return $this->idcity;
    }

    /**
     * Set idcountry
     *
     * @param \AppBundle\Entity\Country $idcountry
     *
     * @return City
     */
    public function setIdcountry(\AppBundle\Entity\Country $idcountry = null)
    {
        $this->idcountry = $idcountry;

        return $this;
    }

    /**
     * Get idcountry
     *
     * @return \AppBundle\Entity\Country
     */
    public function getIdcountry()
    {
        return $this->idcountry;
    }
}
