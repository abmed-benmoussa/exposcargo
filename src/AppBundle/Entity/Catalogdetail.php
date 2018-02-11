<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogdetail
 *
 * @ORM\Table(name="catalogdetail", indexes={@ORM\Index(name="IDX_1D2DF2B6C4286029", columns={"idcatalog"})})
 * @ORM\Entity
 */
class Catalogdetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="iddetail", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iddetail;

    /**
     * @var \AppBundle\Entity\Catalog
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Catalog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcatalog", referencedColumnName="idcatalog")
     * })
     */
    private $idcatalog;



    /**
     * Set description
     *
     * @param string $description
     *
     * @return Catalogdetail
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set iddetail
     *
     * @param string $iddetail
     *
     * @return Catalogdetail
     */
    public function setIddetail($iddetail)
    {
        $this->iddetail = $iddetail;

        return $this;
    }

    /**
     * Get iddetail
     *
     * @return string
     */
    public function getIddetail()
    {
        return $this->iddetail;
    }

    /**
     * Set idcatalog
     *
     * @param \AppBundle\Entity\Catalog $idcatalog
     *
     * @return Catalogdetail
     */
    public function setIdcatalog(\AppBundle\Entity\Catalog $idcatalog)
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
