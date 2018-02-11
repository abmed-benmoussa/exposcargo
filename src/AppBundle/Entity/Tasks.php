<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasks
 *
 * @ORM\Table(name="tasks", indexes={@ORM\Index(name="IDX_50586597F0B78280", columns={"idproject"}), @ORM\Index(name="IDX_50586597856A684C", columns={"parentid"})})
 * @ORM\Entity
 */
class Tasks
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timecreated", type="datetime", nullable=false)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="makeidperson", type="integer", nullable=false)
     */
    private $makeidperson;

    /**
     * @var integer
     *
     * @ORM\Column(name="assigatedidperson", type="integer", nullable=false)
     */
    private $assigatedidperson;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="datetime", nullable=false)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="enddate", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtask", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tasks_idtask_seq", allocationSize=1, initialValue=1)
     */
    private $idtask;

    /**
     * @var \AppBundle\Entity\Tasks
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tasks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentid", referencedColumnName="idtask")
     * })
     */
    private $parentid;

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
     * Set timecreated
     *
     * @param \DateTime $timecreated
     *
     * @return Tasks
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return \DateTime
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Tasks
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
     * Set makeidperson
     *
     * @param integer $makeidperson
     *
     * @return Tasks
     */
    public function setMakeidperson($makeidperson)
    {
        $this->makeidperson = $makeidperson;

        return $this;
    }

    /**
     * Get makeidperson
     *
     * @return integer
     */
    public function getMakeidperson()
    {
        return $this->makeidperson;
    }

    /**
     * Set assigatedidperson
     *
     * @param integer $assigatedidperson
     *
     * @return Tasks
     */
    public function setAssigatedidperson($assigatedidperson)
    {
        $this->assigatedidperson = $assigatedidperson;

        return $this;
    }

    /**
     * Get assigatedidperson
     *
     * @return integer
     */
    public function getAssigatedidperson()
    {
        return $this->assigatedidperson;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Tasks
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Tasks
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Tasks
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Tasks
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
     * Get idtask
     *
     * @return integer
     */
    public function getIdtask()
    {
        return $this->idtask;
    }

    /**
     * Set parentid
     *
     * @param \AppBundle\Entity\Tasks $parentid
     *
     * @return Tasks
     */
    public function setParentid(\AppBundle\Entity\Tasks $parentid = null)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return \AppBundle\Entity\Tasks
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set idproject
     *
     * @param \AppBundle\Entity\Project $idproject
     *
     * @return Tasks
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
