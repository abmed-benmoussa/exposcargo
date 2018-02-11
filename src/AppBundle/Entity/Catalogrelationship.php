<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogrelationship
 *
 * @ORM\Table(name="catalogrelationship", indexes={@ORM\Index(name="IDX_6F0DD7F0C4286029", columns={"idcatalog"})})
 * @ORM\Entity
 */
class Catalogrelationship
{
    /**
     * @var string
     *
     * @ORM\Column(name="tablename", type="string", length=255, nullable=false)
     */
    private $tablename;

    /**
     * @var string
     *
     * @ORM\Column(name="columnname", type="string", length=255, nullable=false)
     */
    private $columnname;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcatalogrelationship", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="catalogrelationship_idcatalogrelationship_seq", allocationSize=1, initialValue=1)
     */
    private $idcatalogrelationship;

    /**
     * @var \AppBundle\Entity\Catalog
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Catalog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcatalog", referencedColumnName="idcatalog")
     * })
     */
    private $idcatalog;



    /**
     * Set tablename
     *
     * @param string $tablename
     *
     * @return Catalogrelationship
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;

        return $this;
    }

    /**
     * Get tablename
     *
     * @return string
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * Set columnname
     *
     * @param string $columnname
     *
     * @return Catalogrelationship
     */
    public function setColumnname($columnname)
    {
        $this->columnname = $columnname;

        return $this;
    }

    /**
     * Get columnname
     *
     * @return string
     */
    public function getColumnname()
    {
        return $this->columnname;
    }

    /**
     * Get idcatalogrelationship
     *
     * @return integer
     */
    public function getIdcatalogrelationship()
    {
        return $this->idcatalogrelationship;
    }

    /**
     * Set idcatalog
     *
     * @param \AppBundle\Entity\Catalog $idcatalog
     *
     * @return Catalogrelationship
     */
    public function setIdcatalog(\AppBundle\Entity\Catalog $idcatalog = null)
    {
        $this->idcatalog = $idcatalog;

        return $this;
    }

    /**
     * Get idcatalog
     *
     * @return \AppBundle\Entity\Catalog
     */
    public function getIdcatalog()
    {
        return $this->idcatalog;
    }
}
