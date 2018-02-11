<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity
 */
class Country
{
    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", nullable=false)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="idregion", type="string", nullable=true)
     */
    private $idregion;

    /**
     * @var string
     *
     * @ORM\Column(name="idcc1", type="string", nullable=true)
     */
    private $idcc1;

    /**
     * @var string
     *
     * @ORM\Column(name="idisoalpha2", type="string", nullable=true)
     */
    private $idisoalpha2;

    /**
     * @var string
     *
     * @ORM\Column(name="idisoalpha3", type="string", nullable=true)
     */
    private $idisoalpha3;

    /**
     * @var string
     *
     * @ORM\Column(name="idiso4217", type="string", nullable=true)
     */
    private $idiso4217;

    /**
     * @var string
     *
     * @ORM\Column(name="idphonecc", type="string", nullable=true)
     */
    private $idphonecc;

    /**
     * @var string
     *
     * @ORM\Column(name="idiso6391", type="string", nullable=true)
     */
    private $idiso6391;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcountry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="country_idcountry_seq", allocationSize=1, initialValue=1)
     */
    private $idcountry;



    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return Country
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
     * Set idregion
     *
     * @param string $idregion
     *
     * @return Country
     */
    public function setIdregion($idregion)
    {
        $this->idregion = $idregion;

        return $this;
    }

    /**
     * Get idregion
     *
     * @return string
     */
    public function getIdregion()
    {
        return $this->idregion;
    }

    /**
     * Set idcc1
     *
     * @param string $idcc1
     *
     * @return Country
     */
    public function setIdcc1($idcc1)
    {
        $this->idcc1 = $idcc1;

        return $this;
    }

    /**
     * Get idcc1
     *
     * @return string
     */
    public function getIdcc1()
    {
        return $this->idcc1;
    }

    /**
     * Set idisoalpha2
     *
     * @param string $idisoalpha2
     *
     * @return Country
     */
    public function setIdisoalpha2($idisoalpha2)
    {
        $this->idisoalpha2 = $idisoalpha2;

        return $this;
    }

    /**
     * Get idisoalpha2
     *
     * @return string
     */
    public function getIdisoalpha2()
    {
        return $this->idisoalpha2;
    }

    /**
     * Set idisoalpha3
     *
     * @param string $idisoalpha3
     *
     * @return Country
     */
    public function setIdisoalpha3($idisoalpha3)
    {
        $this->idisoalpha3 = $idisoalpha3;

        return $this;
    }

    /**
     * Get idisoalpha3
     *
     * @return string
     */
    public function getIdisoalpha3()
    {
        return $this->idisoalpha3;
    }

    /**
     * Set idiso4217
     *
     * @param string $idiso4217
     *
     * @return Country
     */
    public function setIdiso4217($idiso4217)
    {
        $this->idiso4217 = $idiso4217;

        return $this;
    }

    /**
     * Get idiso4217
     *
     * @return string
     */
    public function getIdiso4217()
    {
        return $this->idiso4217;
    }

    /**
     * Set idphonecc
     *
     * @param string $idphonecc
     *
     * @return Country
     */
    public function setIdphonecc($idphonecc)
    {
        $this->idphonecc = $idphonecc;

        return $this;
    }

    /**
     * Get idphonecc
     *
     * @return string
     */
    public function getIdphonecc()
    {
        return $this->idphonecc;
    }

    /**
     * Set idiso6391
     *
     * @param string $idiso6391
     *
     * @return Country
     */
    public function setIdiso6391($idiso6391)
    {
        $this->idiso6391 = $idiso6391;

        return $this;
    }

    /**
     * Get idiso6391
     *
     * @return string
     */
    public function getIdiso6391()
    {
        return $this->idiso6391;
    }

    /**
     * Get idcountry
     *
     * @return integer
     */
    public function getIdcountry()
    {
        return $this->idcountry;
    }
}
