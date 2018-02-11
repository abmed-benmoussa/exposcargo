<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customsdocuments
 *
 * @ORM\Table(name="customsdocuments")
 * @ORM\Entity
 */
class Customsdocuments
{
    /**
     * @var string
     *
     * @ORM\Column(name="customsdocnumber", type="string", length=32, nullable=false)
     */
    private $customsdocnumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcountry", type="integer", nullable=false)
     */
    private $idcountry;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrivaldate", type="date", nullable=false)
     */
    private $arrivaldate;

    /**
     * @var string
     *
     * @ORM\Column(name="originalcustomsdocnumber", type="string", length=32, nullable=false)
     */
    private $originalcustomsdocnumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="mustreturn", type="integer", nullable=false)
     */
    private $mustreturn;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="agentidperson", type="integer", nullable=false)
     */
    private $agentidperson;

    /**
     * @var string
     *
     * @ORM\Column(name="customscomment", type="string", length=255, nullable=true)
     */
    private $customscomment;

    /**
     * @var string
     *
     * @ORM\Column(name="doccomment", type="string", length=255, nullable=true)
     */
    private $doccomment;

    /**
     * @var string
     *
     * @ORM\Column(name="importer", type="string", length=255, nullable=true)
     */
    private $importer;

    /**
     * @var string
     *
     * @ORM\Column(name="authorization", type="string", length=255, nullable=true)
     */
    private $authorization;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="vat", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="importtaxes", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $importtaxes;

    /**
     * @var string
     *
     * @ORM\Column(name="duties", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $duties;

    /**
     * @var string
     *
     * @ORM\Column(name="storage", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $storage;

    /**
     * @var string
     *
     * @ORM\Column(name="additionalcost", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $additionalcost;

    /**
     * @var string
     *
     * @ORM\Column(name="providerinvoice", type="string", length=32, nullable=true)
     */
    private $providerinvoice;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcustomsdoc", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="customsdocuments_idcustomsdoc_seq", allocationSize=1, initialValue=1)
     */
    private $idcustomsdoc;



    /**
     * Set customsdocnumber
     *
     * @param string $customsdocnumber
     *
     * @return Customsdocuments
     */
    public function setCustomsdocnumber($customsdocnumber)
    {
        $this->customsdocnumber = $customsdocnumber;

        return $this;
    }

    /**
     * Get customsdocnumber
     *
     * @return string
     */
    public function getCustomsdocnumber()
    {
        return $this->customsdocnumber;
    }

    /**
     * Set idcountry
     *
     * @param integer $idcountry
     *
     * @return Customsdocuments
     */
    public function setIdcountry($idcountry)
    {
        $this->idcountry = $idcountry;

        return $this;
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

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Customsdocuments
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set arrivaldate
     *
     * @param \DateTime $arrivaldate
     *
     * @return Customsdocuments
     */
    public function setArrivaldate($arrivaldate)
    {
        $this->arrivaldate = $arrivaldate;

        return $this;
    }

    /**
     * Get arrivaldate
     *
     * @return \DateTime
     */
    public function getArrivaldate()
    {
        return $this->arrivaldate;
    }

    /**
     * Set originalcustomsdocnumber
     *
     * @param string $originalcustomsdocnumber
     *
     * @return Customsdocuments
     */
    public function setOriginalcustomsdocnumber($originalcustomsdocnumber)
    {
        $this->originalcustomsdocnumber = $originalcustomsdocnumber;

        return $this;
    }

    /**
     * Get originalcustomsdocnumber
     *
     * @return string
     */
    public function getOriginalcustomsdocnumber()
    {
        return $this->originalcustomsdocnumber;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Customsdocuments
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
     * Set mustreturn
     *
     * @param integer $mustreturn
     *
     * @return Customsdocuments
     */
    public function setMustreturn($mustreturn)
    {
        $this->mustreturn = $mustreturn;

        return $this;
    }

    /**
     * Get mustreturn
     *
     * @return integer
     */
    public function getMustreturn()
    {
        return $this->mustreturn;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Customsdocuments
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
     * Set agentidperson
     *
     * @param integer $agentidperson
     *
     * @return Customsdocuments
     */
    public function setAgentidperson($agentidperson)
    {
        $this->agentidperson = $agentidperson;

        return $this;
    }

    /**
     * Get agentidperson
     *
     * @return integer
     */
    public function getAgentidperson()
    {
        return $this->agentidperson;
    }

    /**
     * Set customscomment
     *
     * @param string $customscomment
     *
     * @return Customsdocuments
     */
    public function setCustomscomment($customscomment)
    {
        $this->customscomment = $customscomment;

        return $this;
    }

    /**
     * Get customscomment
     *
     * @return string
     */
    public function getCustomscomment()
    {
        return $this->customscomment;
    }

    /**
     * Set doccomment
     *
     * @param string $doccomment
     *
     * @return Customsdocuments
     */
    public function setDoccomment($doccomment)
    {
        $this->doccomment = $doccomment;

        return $this;
    }

    /**
     * Get doccomment
     *
     * @return string
     */
    public function getDoccomment()
    {
        return $this->doccomment;
    }

    /**
     * Set importer
     *
     * @param string $importer
     *
     * @return Customsdocuments
     */
    public function setImporter($importer)
    {
        $this->importer = $importer;

        return $this;
    }

    /**
     * Get importer
     *
     * @return string
     */
    public function getImporter()
    {
        return $this->importer;
    }

    /**
     * Set authorization
     *
     * @param string $authorization
     *
     * @return Customsdocuments
     */
    public function setAuthorization($authorization)
    {
        $this->authorization = $authorization;

        return $this;
    }

    /**
     * Get authorization
     *
     * @return string
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return Customsdocuments
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set vat
     *
     * @param string $vat
     *
     * @return Customsdocuments
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set importtaxes
     *
     * @param string $importtaxes
     *
     * @return Customsdocuments
     */
    public function setImporttaxes($importtaxes)
    {
        $this->importtaxes = $importtaxes;

        return $this;
    }

    /**
     * Get importtaxes
     *
     * @return string
     */
    public function getImporttaxes()
    {
        return $this->importtaxes;
    }

    /**
     * Set duties
     *
     * @param string $duties
     *
     * @return Customsdocuments
     */
    public function setDuties($duties)
    {
        $this->duties = $duties;

        return $this;
    }

    /**
     * Get duties
     *
     * @return string
     */
    public function getDuties()
    {
        return $this->duties;
    }

    /**
     * Set storage
     *
     * @param string $storage
     *
     * @return Customsdocuments
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Get storage
     *
     * @return string
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Set additionalcost
     *
     * @param string $additionalcost
     *
     * @return Customsdocuments
     */
    public function setAdditionalcost($additionalcost)
    {
        $this->additionalcost = $additionalcost;

        return $this;
    }

    /**
     * Get additionalcost
     *
     * @return string
     */
    public function getAdditionalcost()
    {
        return $this->additionalcost;
    }

    /**
     * Set providerinvoice
     *
     * @param string $providerinvoice
     *
     * @return Customsdocuments
     */
    public function setProviderinvoice($providerinvoice)
    {
        $this->providerinvoice = $providerinvoice;

        return $this;
    }

    /**
     * Get providerinvoice
     *
     * @return string
     */
    public function getProviderinvoice()
    {
        return $this->providerinvoice;
    }

    /**
     * Get idcustomsdoc
     *
     * @return integer
     */
    public function getIdcustomsdoc()
    {
        return $this->idcustomsdoc;
    }
}
