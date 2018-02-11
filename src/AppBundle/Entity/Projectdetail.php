<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projectdetail
 *
 * @ORM\Table(name="projectdetail", indexes={@ORM\Index(name="IDX_B76B9A91F0B78280", columns={"idproject"}), @ORM\Index(name="IDX_B76B9A911944FFA", columns={"referidperson"}), @ORM\Index(name="IDX_B76B9A913E16D09E", columns={"referrepidperson"}), @ORM\Index(name="IDX_B76B9A91E0DEFF0", columns={"requestidperson"}), @ORM\Index(name="IDX_B76B9A911455C24E", columns={"requestrepidperson"}), @ORM\Index(name="IDX_B76B9A9194E16A79", columns={"venueidperson"}), @ORM\Index(name="IDX_B76B9A914344242D", columns={"venueidplace"})})
 * @ORM\Entity
 */
class Projectdetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="referercomission", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $referercomission;

    /**
     * @var integer
     *
     * @ORM\Column(name="comissiontype", type="integer", nullable=true)
     */
    private $comissiontype;

    /**
     * @var integer
     *
     * @ORM\Column(name="idprojectdetail", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="projectdetail_idprojectdetail_seq", allocationSize=1, initialValue=1)
     */
    private $idprojectdetail;

    /**
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="venueidperson", referencedColumnName="idperson")
     * })
     */
    private $venueidperson;

    /**
     * @var \AppBundle\Entity\Location
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="venueidplace", referencedColumnName="idlocation")
     * })
     */
    private $venueidplace;

    /**
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="requestrepidperson", referencedColumnName="idperson")
     * })
     */
    private $requestrepidperson;

    /**
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="requestidperson", referencedColumnName="idperson")
     * })
     */
    private $requestidperson;

    /**
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="referidperson", referencedColumnName="idperson")
     * })
     */
    private $referidperson;

    /**
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="referrepidperson", referencedColumnName="idperson")
     * })
     */
    private $referrepidperson;

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
     * Set referercomission
     *
     * @param string $referercomission
     *
     * @return Projectdetail
     */
    public function setReferercomission($referercomission)
    {
        $this->referercomission = $referercomission;

        return $this;
    }

    /**
     * Get referercomission
     *
     * @return string
     */
    public function getReferercomission()
    {
        return $this->referercomission;
    }

    /**
     * Set comissiontype
     *
     * @param integer $comissiontype
     *
     * @return Projectdetail
     */
    public function setComissiontype($comissiontype)
    {
        $this->comissiontype = $comissiontype;

        return $this;
    }

    /**
     * Get comissiontype
     *
     * @return integer
     */
    public function getComissiontype()
    {
        return $this->comissiontype;
    }

    /**
     * Get idprojectdetail
     *
     * @return integer
     */
    public function getIdprojectdetail()
    {
        return $this->idprojectdetail;
    }

    /**
     * Set venueidperson
     *
     * @param \AppBundle\Entity\Person $venueidperson
     *
     * @return Projectdetail
     */
    public function setVenueidperson(\AppBundle\Entity\Person $venueidperson = null)
    {
        $this->venueidperson = $venueidperson;

        return $this;
    }

    /**
     * Get venueidperson
     *
     * @return \AppBundle\Entity\Person
     */
    public function getVenueidperson()
    {
        return $this->venueidperson;
    }

    /**
     * Set venueidplace
     *
     * @param \AppBundle\Entity\Location $venueidplace
     *
     * @return Projectdetail
     */
    public function setVenueidplace(\AppBundle\Entity\Location $venueidplace = null)
    {
        $this->venueidplace = $venueidplace;

        return $this;
    }

    /**
     * Get venueidplace
     *
     * @return \AppBundle\Entity\Location
     */
    public function getVenueidplace()
    {
        return $this->venueidplace;
    }

    /**
     * Set requestrepidperson
     *
     * @param \AppBundle\Entity\Person $requestrepidperson
     *
     * @return Projectdetail
     */
    public function setRequestrepidperson(\AppBundle\Entity\Person $requestrepidperson = null)
    {
        $this->requestrepidperson = $requestrepidperson;

        return $this;
    }

    /**
     * Get requestrepidperson
     *
     * @return \AppBundle\Entity\Person
     */
    public function getRequestrepidperson()
    {
        return $this->requestrepidperson;
    }

    /**
     * Set requestidperson
     *
     * @param \AppBundle\Entity\Person $requestidperson
     *
     * @return Projectdetail
     */
    public function setRequestidperson(\AppBundle\Entity\Person $requestidperson = null)
    {
        $this->requestidperson = $requestidperson;

        return $this;
    }

    /**
     * Get requestidperson
     *
     * @return \AppBundle\Entity\Person
     */
    public function getRequestidperson()
    {
        return $this->requestidperson;
    }

    /**
     * Set referidperson
     *
     * @param \AppBundle\Entity\Person $referidperson
     *
     * @return Projectdetail
     */
    public function setReferidperson(\AppBundle\Entity\Person $referidperson = null)
    {
        $this->referidperson = $referidperson;

        return $this;
    }

    /**
     * Get referidperson
     *
     * @return \AppBundle\Entity\Person
     */
    public function getReferidperson()
    {
        return $this->referidperson;
    }

    /**
     * Set referrepidperson
     *
     * @param \AppBundle\Entity\Person $referrepidperson
     *
     * @return Projectdetail
     */
    public function setReferrepidperson(\AppBundle\Entity\Person $referrepidperson = null)
    {
        $this->referrepidperson = $referrepidperson;

        return $this;
    }

    /**
     * Get referrepidperson
     *
     * @return \AppBundle\Entity\Person
     */
    public function getReferrepidperson()
    {
        return $this->referrepidperson;
    }

    /**
     * Set idproject
     *
     * @param \AppBundle\Entity\Project $idproject
     *
     * @return Projectdetail
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
