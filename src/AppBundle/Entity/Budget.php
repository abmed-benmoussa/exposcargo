<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Budget
 *
 * @ORM\Table(name="budget", indexes={@ORM\Index(name="IDX_73F2F77B856A684C", columns={"parentid"}), @ORM\Index(name="IDX_73F2F77BCF3084A3", columns={"idbudgetcatalog"}), @ORM\Index(name="IDX_73F2F77BF0B78280", columns={"idproject"})})
 * @ORM\Entity
 */
class Budget
{
    /**
     * @var string
     *
     * @ORM\Column(name="totalamount", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $totalamount;

    /**
     * @var integer
     *
     * @ORM\Column(name="spillover", type="integer", nullable=false)
     */
    private $spillover;

    /**
     * @var string
     *
     * @ORM\Column(name="currencymoney", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $currencymoney;

    /**
     * @var integer
     *
     * @ORM\Column(name="prepaid", type="integer", nullable=false)
     */
    private $prepaid;

    /**
     * @var integer
     *
     * @ORM\Column(name="paymentsnumber", type="integer", nullable=false)
     */
    private $paymentsnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="transportation", type="string", nullable=false)
     */
    private $transportation;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="idbudget", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="budget_idbudget_seq", allocationSize=1, initialValue=1)
     */
    private $idbudget;

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
     * @var \AppBundle\Entity\Budgetconcept
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Budgetconcept")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idbudgetcatalog", referencedColumnName="idbudgetconcept")
     * })
     */
    private $idbudgetcatalog;

    /**
     * @var \AppBundle\Entity\Budget
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Budget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentid", referencedColumnName="idbudget")
     * })
     */
    private $parentid;



    /**
     * Set totalamount
     *
     * @param string $totalamount
     *
     * @return Budget
     */
    public function setTotalamount($totalamount)
    {
        $this->totalamount = $totalamount;

        return $this;
    }

    /**
     * Get totalamount
     *
     * @return string
     */
    public function getTotalamount()
    {
        return $this->totalamount;
    }

    /**
     * Set spillover
     *
     * @param integer $spillover
     *
     * @return Budget
     */
    public function setSpillover($spillover)
    {
        $this->spillover = $spillover;

        return $this;
    }

    /**
     * Get spillover
     *
     * @return integer
     */
    public function getSpillover()
    {
        return $this->spillover;
    }

    /**
     * Set currencymoney
     *
     * @param string $currencymoney
     *
     * @return Budget
     */
    public function setCurrencymoney($currencymoney)
    {
        $this->currencymoney = $currencymoney;

        return $this;
    }

    /**
     * Get currencymoney
     *
     * @return string
     */
    public function getCurrencymoney()
    {
        return $this->currencymoney;
    }

    /**
     * Set prepaid
     *
     * @param integer $prepaid
     *
     * @return Budget
     */
    public function setPrepaid($prepaid)
    {
        $this->prepaid = $prepaid;

        return $this;
    }

    /**
     * Get prepaid
     *
     * @return integer
     */
    public function getPrepaid()
    {
        return $this->prepaid;
    }

    /**
     * Set paymentsnumber
     *
     * @param integer $paymentsnumber
     *
     * @return Budget
     */
    public function setPaymentsnumber($paymentsnumber)
    {
        $this->paymentsnumber = $paymentsnumber;

        return $this;
    }

    /**
     * Get paymentsnumber
     *
     * @return integer
     */
    public function getPaymentsnumber()
    {
        return $this->paymentsnumber;
    }

    /**
     * Set transportation
     *
     * @param string $transportation
     *
     * @return Budget
     */
    public function setTransportation($transportation)
    {
        $this->transportation = $transportation;

        return $this;
    }

    /**
     * Get transportation
     *
     * @return string
     */
    public function getTransportation()
    {
        return $this->transportation;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Budget
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
     * Set comment
     *
     * @param string $comment
     *
     * @return Budget
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
     * Get idbudget
     *
     * @return integer
     */
    public function getIdbudget()
    {
        return $this->idbudget;
    }

    /**
     * Set idproject
     *
     * @param \AppBundle\Entity\Project $idproject
     *
     * @return Budget
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

    /**
     * Set idbudgetcatalog
     *
     * @param \AppBundle\Entity\Budgetconcept $idbudgetcatalog
     *
     * @return Budget
     */
    public function setIdbudgetcatalog(\AppBundle\Entity\Budgetconcept $idbudgetcatalog = null)
    {
        $this->idbudgetcatalog = $idbudgetcatalog;

        return $this;
    }

    /**
     * Get idbudgetcatalog
     *
     * @return \AppBundle\Entity\Budgetconcept
     */
    public function getIdbudgetcatalog()
    {
        return $this->idbudgetcatalog;
    }

    /**
     * Set parentid
     *
     * @param \AppBundle\Entity\Budget $parentid
     *
     * @return Budget
     */
    public function setParentid(\AppBundle\Entity\Budget $parentid = null)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return \AppBundle\Entity\Budget
     */
    public function getParentid()
    {
        return $this->parentid;
    }
}
