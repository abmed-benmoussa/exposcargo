<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Merchandisedetail
 *
 * @ORM\Table(name="merchandisedetail", indexes={@ORM\Index(name="IDX_1C36B8611682A10B", columns={"idmerchandise"})})
 * @ORM\Entity
 */
class Merchandisedetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="exportrestrictions", type="integer", nullable=false)
     */
    private $exportrestrictions;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmerchandisedetail", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="merchandisedetail_idmerchandisedetail_seq", allocationSize=1, initialValue=1)
     */
    private $idmerchandisedetail;

    /**
     * @var \AppBundle\Entity\Merchandise
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Merchandise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmerchandise", referencedColumnName="idmerchandise")
     * })
     */
    private $idmerchandise;



    /**
     * Set exportrestrictions
     *
     * @param integer $exportrestrictions
     *
     * @return Merchandisedetail
     */
    public function setExportrestrictions($exportrestrictions)
    {
        $this->exportrestrictions = $exportrestrictions;

        return $this;
    }

    /**
     * Get exportrestrictions
     *
     * @return integer
     */
    public function getExportrestrictions()
    {
        return $this->exportrestrictions;
    }

    /**
     * Get idmerchandisedetail
     *
     * @return integer
     */
    public function getIdmerchandisedetail()
    {
        return $this->idmerchandisedetail;
    }

    /**
     * Set idmerchandise
     *
     * @param \AppBundle\Entity\Merchandise $idmerchandise
     *
     * @return Merchandisedetail
     */
    public function setIdmerchandise(\AppBundle\Entity\Merchandise $idmerchandise = null)
    {
        $this->idmerchandise = $idmerchandise;

        return $this;
    }

    /**
     * Get idmerchandise
     *
     * @return \AppBundle\Entity\Merchandise
     */
    public function getIdmerchandise()
    {
        return $this->idmerchandise;
    }
}
