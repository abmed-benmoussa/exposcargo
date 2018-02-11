<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person", indexes={@ORM\Index(name="IDX_34DCD176856A684C", columns={"parentid"})})
 * @ORM\Entity
 */
class Person
{
    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", nullable=false)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="taxid", type="string", length=32, nullable=false)
     */
    private $taxid;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", nullable=false)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="financialcategory", type="integer", nullable=false)
     */
    private $financialcategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="behaivorcategory", type="integer", nullable=false)
     */
    private $behaivorcategory;

    /**
     * @var boolean
     *
     * @ORM\Column(name="performstaxexemption", type="boolean", nullable=false)
     */
    private $performstaxexemption;

    /**
     * @var integer
     *
     * @ORM\Column(name="averagereleasetime", type="integer", nullable=false)
     */
    private $averagereleasetime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evaluation", type="boolean", nullable=false)
     */
    private $evaluation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="evaluationdate", type="date", nullable=false)
     */
    private $evaluationdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="evaluatoridperson", type="integer", nullable=false)
     */
    private $evaluatoridperson;

    /**
     * @var string
     *
     * @ORM\Column(name="identificationtype", type="string", length=32, nullable=false)
     */
    private $identificationtype;

    /**
     * @var string
     *
     * @ORM\Column(name="identificationnumber", type="string", length=32, nullable=false)
     */
    private $identificationnumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date", nullable=false)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="personality", type="string", length=32, nullable=false)
     */
    private $personality;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=64, nullable=false)
     */
    private $job;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="idperson", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="person_idperson_seq", allocationSize=1, initialValue=1)
     */
    private $idperson;

    /**
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentid", referencedColumnName="idperson")
     * })
     */
    private $parentid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Phone", inversedBy="idperson")
     * @ORM\JoinTable(name="person_phone",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idperson", referencedColumnName="idperson")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idphone", referencedColumnName="idphone")
     *   }
     * )
     */
    private $idphone;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idphone = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return Person
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set taxid
     *
     * @param string $taxid
     *
     * @return Person
     */
    public function setTaxid($taxid)
    {
        $this->taxid = $taxid;

        return $this;
    }

    /**
     * Get taxid
     *
     * @return string
     */
    public function getTaxid()
    {
        return $this->taxid;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Person
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Person
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
     * Set status
     *
     * @param integer $status
     *
     * @return Person
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
     * Set logo
     *
     * @param string $logo
     *
     * @return Person
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Person
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set financialcategory
     *
     * @param integer $financialcategory
     *
     * @return Person
     */
    public function setFinancialcategory($financialcategory)
    {
        $this->financialcategory = $financialcategory;

        return $this;
    }

    /**
     * Get financialcategory
     *
     * @return integer
     */
    public function getFinancialcategory()
    {
        return $this->financialcategory;
    }

    /**
     * Set behaivorcategory
     *
     * @param integer $behaivorcategory
     *
     * @return Person
     */
    public function setBehaivorcategory($behaivorcategory)
    {
        $this->behaivorcategory = $behaivorcategory;

        return $this;
    }

    /**
     * Get behaivorcategory
     *
     * @return integer
     */
    public function getBehaivorcategory()
    {
        return $this->behaivorcategory;
    }

    /**
     * Set performstaxexemption
     *
     * @param boolean $performstaxexemption
     *
     * @return Person
     */
    public function setPerformstaxexemption($performstaxexemption)
    {
        $this->performstaxexemption = $performstaxexemption;

        return $this;
    }

    /**
     * Get performstaxexemption
     *
     * @return boolean
     */
    public function getPerformstaxexemption()
    {
        return $this->performstaxexemption;
    }

    /**
     * Set averagereleasetime
     *
     * @param integer $averagereleasetime
     *
     * @return Person
     */
    public function setAveragereleasetime($averagereleasetime)
    {
        $this->averagereleasetime = $averagereleasetime;

        return $this;
    }

    /**
     * Get averagereleasetime
     *
     * @return integer
     */
    public function getAveragereleasetime()
    {
        return $this->averagereleasetime;
    }

    /**
     * Set evaluation
     *
     * @param boolean $evaluation
     *
     * @return Person
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return boolean
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set evaluationdate
     *
     * @param \DateTime $evaluationdate
     *
     * @return Person
     */
    public function setEvaluationdate($evaluationdate)
    {
        $this->evaluationdate = $evaluationdate;

        return $this;
    }

    /**
     * Get evaluationdate
     *
     * @return \DateTime
     */
    public function getEvaluationdate()
    {
        return $this->evaluationdate;
    }

    /**
     * Set evaluatoridperson
     *
     * @param integer $evaluatoridperson
     *
     * @return Person
     */
    public function setEvaluatoridperson($evaluatoridperson)
    {
        $this->evaluatoridperson = $evaluatoridperson;

        return $this;
    }

    /**
     * Get evaluatoridperson
     *
     * @return integer
     */
    public function getEvaluatoridperson()
    {
        return $this->evaluatoridperson;
    }

    /**
     * Set identificationtype
     *
     * @param string $identificationtype
     *
     * @return Person
     */
    public function setIdentificationtype($identificationtype)
    {
        $this->identificationtype = $identificationtype;

        return $this;
    }

    /**
     * Get identificationtype
     *
     * @return string
     */
    public function getIdentificationtype()
    {
        return $this->identificationtype;
    }

    /**
     * Set identificationnumber
     *
     * @param string $identificationnumber
     *
     * @return Person
     */
    public function setIdentificationnumber($identificationnumber)
    {
        $this->identificationnumber = $identificationnumber;

        return $this;
    }

    /**
     * Get identificationnumber
     *
     * @return string
     */
    public function getIdentificationnumber()
    {
        return $this->identificationnumber;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Person
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set personality
     *
     * @param string $personality
     *
     * @return Person
     */
    public function setPersonality($personality)
    {
        $this->personality = $personality;

        return $this;
    }

    /**
     * Get personality
     *
     * @return string
     */
    public function getPersonality()
    {
        return $this->personality;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return Person
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Person
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
     * Get idperson
     *
     * @return integer
     */
    public function getIdperson()
    {
        return $this->idperson;
    }

    /**
     * Set parentid
     *
     * @param \AppBundle\Entity\Person $parentid
     *
     * @return Person
     */
    public function setParentid(\AppBundle\Entity\Person $parentid = null)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return \AppBundle\Entity\Person
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Add idphone
     *
     * @param \AppBundle\Entity\Phone $idphone
     *
     * @return Person
     */
    public function addIdphone(\AppBundle\Entity\Phone $idphone)
    {
        $this->idphone[] = $idphone;

        return $this;
    }

    /**
     * Remove idphone
     *
     * @param \AppBundle\Entity\Phone $idphone
     */
    public function removeIdphone(\AppBundle\Entity\Phone $idphone)
    {
        $this->idphone->removeElement($idphone);
    }

    /**
     * Get idphone
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdphone()
    {
        return $this->idphone;
    }
}
