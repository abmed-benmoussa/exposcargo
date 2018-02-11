<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trackingnumber
 *
 * @ORM\Table(name="trackingnumber", indexes={@ORM\Index(name="IDX_F7F4EA65CB50B99", columns={"idcustomsdoc"})})
 * @ORM\Entity
 */
class Trackingnumber
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idperson", type="integer", nullable=false)
     */
    private $idperson;

    /**
     * @var string
     *
     * @ORM\Column(name="idtrackingnumber", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="trackingnumber_idtrackingnumber_seq", allocationSize=1, initialValue=1)
     */
    private $idtrackingnumber;

    /**
     * @var \AppBundle\Entity\Customsdocuments
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customsdocuments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcustomsdoc", referencedColumnName="idcustomsdoc")
     * })
     */
    private $idcustomsdoc;



    /**
     * Set idperson
     *
     * @param integer $idperson
     *
     * @return Trackingnumber
     */
    public function setIdperson($idperson)
    {
        $this->idperson = $idperson;

        return $this;
    }

    /**
     * Get idperson
     *
     * @return integer
     */
    public function getIdperson()
    {
        return $this->idperson;
    }

    /**
     * Get idtrackingnumber
     *
     * @return string
     */
    public function getIdtrackingnumber()
    {
        return $this->idtrackingnumber;
    }

    /**
     * Set idcustomsdoc
     *
     * @param \AppBundle\Entity\Customsdocuments $idcustomsdoc
     *
     * @return Trackingnumber
     */
    public function setIdcustomsdoc(\AppBundle\Entity\Customsdocuments $idcustomsdoc = null)
    {
        $this->idcustomsdoc = $idcustomsdoc;

        return $this;
    }

    /**
     * Get idcustomsdoc
     *
     * @return \AppBundle\Entity\Customsdocuments
     */
    public function getIdcustomsdoc()
    {
        return $this->idcustomsdoc;
    }
}
