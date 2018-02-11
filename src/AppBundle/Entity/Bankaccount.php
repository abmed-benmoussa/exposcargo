<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bankaccount
 *
 * @ORM\Table(name="bankaccount", indexes={@ORM\Index(name="IDX_A4609E5A856A684C", columns={"parentid"}), @ORM\Index(name="IDX_A4609E5A50617CDA", columns={"idperson"})})
 * @ORM\Entity
 */
class Bankaccount
{
    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="idbank", type="integer", nullable=false)
     */
    private $idbank;

    /**
     * @var string
     *
     * @ORM\Column(name="accountnumber", type="string", length=50, nullable=false)
     */
    private $accountnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="accounttype", type="string", length=50, nullable=false)
     */
    private $accounttype;

    /**
     * @var string
     *
     * @ORM\Column(name="clabe", type="string", length=18, nullable=false)
     */
    private $clabe;

    /**
     * @var string
     *
     * @ORM\Column(name="abacode", type="string", length=32, nullable=false)
     */
    private $abacode;

    /**
     * @var string
     *
     * @ORM\Column(name="swiftcode", type="string", length=35, nullable=false)
     */
    private $swiftcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcurrency", type="integer", nullable=false)
     */
    private $idcurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="idbankaccount", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bankaccount_idbankaccount_seq", allocationSize=1, initialValue=1)
     */
    private $idbankaccount;

    /**
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idperson", referencedColumnName="idperson")
     * })
     */
    private $idperson;

    /**
     * @var \AppBundle\Entity\Bankaccount
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bankaccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentid", referencedColumnName="idbankaccount")
     * })
     */
    private $parentid;



    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Bankaccount
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
     * Set idbank
     *
     * @param integer $idbank
     *
     * @return Bankaccount
     */
    public function setIdbank($idbank)
    {
        $this->idbank = $idbank;

        return $this;
    }

    /**
     * Get idbank
     *
     * @return integer
     */
    public function getIdbank()
    {
        return $this->idbank;
    }

    /**
     * Set accountnumber
     *
     * @param string $accountnumber
     *
     * @return Bankaccount
     */
    public function setAccountnumber($accountnumber)
    {
        $this->accountnumber = $accountnumber;

        return $this;
    }

    /**
     * Get accountnumber
     *
     * @return string
     */
    public function getAccountnumber()
    {
        return $this->accountnumber;
    }

    /**
     * Set accounttype
     *
     * @param string $accounttype
     *
     * @return Bankaccount
     */
    public function setAccounttype($accounttype)
    {
        $this->accounttype = $accounttype;

        return $this;
    }

    /**
     * Get accounttype
     *
     * @return string
     */
    public function getAccounttype()
    {
        return $this->accounttype;
    }

    /**
     * Set clabe
     *
     * @param string $clabe
     *
     * @return Bankaccount
     */
    public function setClabe($clabe)
    {
        $this->clabe = $clabe;

        return $this;
    }

    /**
     * Get clabe
     *
     * @return string
     */
    public function getClabe()
    {
        return $this->clabe;
    }

    /**
     * Set abacode
     *
     * @param string $abacode
     *
     * @return Bankaccount
     */
    public function setAbacode($abacode)
    {
        $this->abacode = $abacode;

        return $this;
    }

    /**
     * Get abacode
     *
     * @return string
     */
    public function getAbacode()
    {
        return $this->abacode;
    }

    /**
     * Set swiftcode
     *
     * @param string $swiftcode
     *
     * @return Bankaccount
     */
    public function setSwiftcode($swiftcode)
    {
        $this->swiftcode = $swiftcode;

        return $this;
    }

    /**
     * Get swiftcode
     *
     * @return string
     */
    public function getSwiftcode()
    {
        return $this->swiftcode;
    }

    /**
     * Set idcurrency
     *
     * @param integer $idcurrency
     *
     * @return Bankaccount
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
     * Set comment
     *
     * @param string $comment
     *
     * @return Bankaccount
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
     * Get idbankaccount
     *
     * @return integer
     */
    public function getIdbankaccount()
    {
        return $this->idbankaccount;
    }

    /**
     * Set idperson
     *
     * @param \AppBundle\Entity\Person $idperson
     *
     * @return Bankaccount
     */
    public function setIdperson(\AppBundle\Entity\Person $idperson = null)
    {
        $this->idperson = $idperson;

        return $this;
    }

    /**
     * Get idperson
     *
     * @return \AppBundle\Entity\Person
     */
    public function getIdperson()
    {
        return $this->idperson;
    }

    /**
     * Set parentid
     *
     * @param \AppBundle\Entity\Bankaccount $parentid
     *
     * @return Bankaccount
     */
    public function setParentid(\AppBundle\Entity\Bankaccount $parentid = null)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return \AppBundle\Entity\Bankaccount
     */
    public function getParentid()
    {
        return $this->parentid;
    }
}
