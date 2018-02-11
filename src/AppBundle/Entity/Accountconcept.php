<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountconcept
 *
 * @ORM\Table(name="accountconcept", indexes={@ORM\Index(name="IDX_394D49A03356D6B4", columns={"idbudgetconcept"})})
 * @ORM\Entity
 */
class Accountconcept
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idperson", type="integer", nullable=false)
     */
    private $idperson;

    /**
     * @var integer
     *
     * @ORM\Column(name="idproject", type="integer", nullable=false)
     */
    private $idproject;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperator", type="integer", nullable=false)
     */
    private $idoperator;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="totalamt", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $totalamt;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=false)
     */
    private $reference;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="exchangetype", type="decimal", precision=18, scale=6, nullable=false)
     */
    private $exchangetype;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcurrency", type="integer", nullable=false)
     */
    private $idcurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="idaccountconcept", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="accountconcept_idaccountconcept_seq", allocationSize=1, initialValue=1)
     */
    private $idaccountconcept;

    /**
     * @var \AppBundle\Entity\Budgetconcept
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Budgetconcept")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idbudgetconcept", referencedColumnName="idbudgetconcept")
     * })
     */
    private $idbudgetconcept;



    /**
     * Set idperson
     *
     * @param integer $idperson
     *
     * @return Accountconcept
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
     * Set idproject
     *
     * @param integer $idproject
     *
     * @return Accountconcept
     */
    public function setIdproject($idproject)
    {
        $this->idproject = $idproject;

        return $this;
    }

    /**
     * Get idproject
     *
     * @return integer
     */
    public function getIdproject()
    {
        return $this->idproject;
    }

    /**
     * Set idoperator
     *
     * @param integer $idoperator
     *
     * @return Accountconcept
     */
    public function setIdoperator($idoperator)
    {
        $this->idoperator = $idoperator;

        return $this;
    }

    /**
     * Get idoperator
     *
     * @return integer
     */
    public function getIdoperator()
    {
        return $this->idoperator;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Accountconcept
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set totalamt
     *
     * @param string $totalamt
     *
     * @return Accountconcept
     */
    public function setTotalamt($totalamt)
    {
        $this->totalamt = $totalamt;

        return $this;
    }

    /**
     * Get totalamt
     *
     * @return string
     */
    public function getTotalamt()
    {
        return $this->totalamt;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Accountconcept
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Accountconcept
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set exchangetype
     *
     * @param string $exchangetype
     *
     * @return Accountconcept
     */
    public function setExchangetype($exchangetype)
    {
        $this->exchangetype = $exchangetype;

        return $this;
    }

    /**
     * Get exchangetype
     *
     * @return string
     */
    public function getExchangetype()
    {
        return $this->exchangetype;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Accountconcept
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set idcurrency
     *
     * @param integer $idcurrency
     *
     * @return Accountconcept
     */
    public function setIdcurrency($idcurrency)
    {
        $this->idcurrency = $idcurrency;

        return $this;
    }

    /**
     * Get idcurrency
     *
     * @return integer
     */
    public function getIdcurrency()
    {
        return $this->idcurrency;
    }

    /**
     * Get idaccountconcept
     *
     * @return integer
     */
    public function getIdaccountconcept()
    {
        return $this->idaccountconcept;
    }

    /**
     * Set idbudgetconcept
     *
     * @param \AppBundle\Entity\Budgetconcept $idbudgetconcept
     *
     * @return Accountconcept
     */
    public function setIdbudgetconcept(\AppBundle\Entity\Budgetconcept $idbudgetconcept = null)
    {
        $this->idbudgetconcept = $idbudgetconcept;

        return $this;
    }

    /**
     * Get idbudgetconcept
     *
     * @return \AppBundle\Entity\Budgetconcept
     */
    public function getIdbudgetconcept()
    {
        return $this->idbudgetconcept;
    }
}
