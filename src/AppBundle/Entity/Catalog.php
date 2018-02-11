<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalog
 *
 * @ORM\Table(name="catalog")
 * @ORM\Entity
 */
class Catalog
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="titleid", type="string", length=255, nullable=false)
     */
    private $titleid;

    /**
     * @var string
     *
     * @ORM\Column(name="titledescription", type="string", length=255, nullable=false)
     */
    private $titledescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcatalog", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="catalog_idcatalog_seq", allocationSize=1, initialValue=1)
     */
    private $idcatalog;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Catalog
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set titleid
     *
     * @param string $titleid
     *
     * @return Catalog
     */
    public function setTitleid($titleid)
    {
        $this->titleid = $titleid;

        return $this;
    }

    /**
     * Get titleid
     *
     * @return string
     */
    public function getTitleid()
    {
        return $this->titleid;
    }

    /**
     * Set titledescription
     *
     * @param string $titledescription
     *
     * @return Catalog
     */
    public function setTitledescription($titledescription)
    {
        $this->titledescription = $titledescription;

        return $this;
    }

    /**
     * Get titledescription
     *
     * @return string
     */
    public function getTitledescription()
    {
        return $this->titledescription;
    }

    /**
     * Get idcatalog
     *
     * @return integer
     */
    public function getIdcatalog()
    {
        return $this->idcatalog;
    }
}
