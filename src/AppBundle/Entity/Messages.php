<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages", indexes={@ORM\Index(name="IDX_DB021E96F0B78280", columns={"idproject"})})
 * @ORM\Entity
 */
class Messages
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
     * @ORM\Column(name="sendidperson", type="integer", nullable=false)
     */
    private $sendidperson;

    /**
     * @var integer
     *
     * @ORM\Column(name="reciveidperson", type="integer", nullable=false)
     */
    private $reciveidperson;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255, nullable=false)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtask", type="integer", nullable=false)
     */
    private $idtask;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmessage", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="messages_idmessage_seq", allocationSize=1, initialValue=1)
     */
    private $idmessage;

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
     * @return Messages
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
     * @return Messages
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
     * Set sendidperson
     *
     * @param integer $sendidperson
     *
     * @return Messages
     */
    public function setSendidperson($sendidperson)
    {
        $this->sendidperson = $sendidperson;

        return $this;
    }

    /**
     * Get sendidperson
     *
     * @return integer
     */
    public function getSendidperson()
    {
        return $this->sendidperson;
    }

    /**
     * Set reciveidperson
     *
     * @param integer $reciveidperson
     *
     * @return Messages
     */
    public function setReciveidperson($reciveidperson)
    {
        $this->reciveidperson = $reciveidperson;

        return $this;
    }

    /**
     * Get reciveidperson
     *
     * @return integer
     */
    public function getReciveidperson()
    {
        return $this->reciveidperson;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Messages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set idtask
     *
     * @param integer $idtask
     *
     * @return Messages
     */
    public function setIdtask($idtask)
    {
        $this->idtask = $idtask;

        return $this;
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
     * Get idmessage
     *
     * @return integer
     */
    public function getIdmessage()
    {
        return $this->idmessage;
    }

    /**
     * Set idproject
     *
     * @param \AppBundle\Entity\Project $idproject
     *
     * @return Messages
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
