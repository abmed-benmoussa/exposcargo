<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nonconformityticket
 *
 * @ORM\Table(name="nonconformityticket", indexes={@ORM\Index(name="IDX_B63A40A2F0B78280", columns={"idproject"})})
 * @ORM\Entity
 */
class Nonconformityticket
{
    /**
     * @var string
     *
     * @ORM\Column(name="nonconformityticketnumber", type="string", length=32, nullable=false)
     */
    private $nonconformityticketnumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="referencedetail", type="string", length=255, nullable=false)
     */
    private $referencedetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ticketdate", type="date", nullable=false)
     */
    private $ticketdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="reporteridperson", type="integer", nullable=false)
     */
    private $reporteridperson;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="causeanalisystype", type="string", length=255, nullable=false)
     */
    private $causeanalisystype;

    /**
     * @var integer
     *
     * @ORM\Column(name="analisysidperson", type="integer", nullable=false)
     */
    private $analisysidperson;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closeddate", type="date", nullable=false)
     */
    private $closeddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="idnonconfticket", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nonconformityticket_idnonconfticket_seq", allocationSize=1, initialValue=1)
     */
    private $idnonconfticket;

    /**
     * @var \AppBundle\Entity\Project
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idproject", referencedColumnName="idproject")
     * })
     */
    private $idproject;



    /**
     * Set nonconformityticketnumber
     *
     * @param string $nonconformityticketnumber
     *
     * @return Nonconformityticket
     */
    public function setNonconformityticketnumber($nonconformityticketnumber)
    {
        $this->nonconformityticketnumber = $nonconformityticketnumber;

        return $this;
    }

    /**
     * Get nonconformityticketnumber
     *
     * @return string
     */
    public function getNonconformityticketnumber()
    {
        return $this->nonconformityticketnumber;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Nonconformityticket
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
     * Set referencedetail
     *
     * @param string $referencedetail
     *
     * @return Nonconformityticket
     */
    public function setReferencedetail($referencedetail)
    {
        $this->referencedetail = $referencedetail;

        return $this;
    }

    /**
     * Get referencedetail
     *
     * @return string
     */
    public function getReferencedetail()
    {
        return $this->referencedetail;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Nonconformityticket
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set ticketdate
     *
     * @param \DateTime $ticketdate
     *
     * @return Nonconformityticket
     */
    public function setTicketdate($ticketdate)
    {
        $this->ticketdate = $ticketdate;

        return $this;
    }

    /**
     * Get ticketdate
     *
     * @return \DateTime
     */
    public function getTicketdate()
    {
        return $this->ticketdate;
    }

    /**
     * Set reporteridperson
     *
     * @param integer $reporteridperson
     *
     * @return Nonconformityticket
     */
    public function setReporteridperson($reporteridperson)
    {
        $this->reporteridperson = $reporteridperson;

        return $this;
    }

    /**
     * Get reporteridperson
     *
     * @return integer
     */
    public function getReporteridperson()
    {
        return $this->reporteridperson;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Nonconformityticket
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
     * Set causeanalisystype
     *
     * @param string $causeanalisystype
     *
     * @return Nonconformityticket
     */
    public function setCauseanalisystype($causeanalisystype)
    {
        $this->causeanalisystype = $causeanalisystype;

        return $this;
    }

    /**
     * Get causeanalisystype
     *
     * @return string
     */
    public function getCauseanalisystype()
    {
        return $this->causeanalisystype;
    }

    /**
     * Set analisysidperson
     *
     * @param integer $analisysidperson
     *
     * @return Nonconformityticket
     */
    public function setAnalisysidperson($analisysidperson)
    {
        $this->analisysidperson = $analisysidperson;

        return $this;
    }

    /**
     * Get analisysidperson
     *
     * @return integer
     */
    public function getAnalisysidperson()
    {
        return $this->analisysidperson;
    }

    /**
     * Set closeddate
     *
     * @param \DateTime $closeddate
     *
     * @return Nonconformityticket
     */
    public function setCloseddate($closeddate)
    {
        $this->closeddate = $closeddate;

        return $this;
    }

    /**
     * Get closeddate
     *
     * @return \DateTime
     */
    public function getCloseddate()
    {
        return $this->closeddate;
    }

    /**
     * Get idnonconfticket
     *
     * @return integer
     */
    public function getIdnonconfticket()
    {
        return $this->idnonconfticket;
    }

    /**
     * Set idproject
     *
     * @param \AppBundle\Entity\Project $idproject
     *
     * @return Nonconformityticket
     */
    public function setIdproject(\AppBundle\Entity\Project $idproject = null)
    {
        $this->idproject = $idproject;

        return $this;
    }

    /**
     * Get idproject
     *
     * @return \AppBundle\Entity\Project
     */
    public function getIdproject()
    {
        return $this->idproject;
    }
}
