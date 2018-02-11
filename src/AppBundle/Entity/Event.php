<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
{
    /**
     * @var string
     *
     * @ORM\Column(name="eventname", type="string", length=255, nullable=false)
     */
    private $eventname;

    /**
     * @var integer
     *
     * @ORM\Column(name="eventwedding", type="integer", nullable=false)
     */
    private $eventwedding;

    /**
     * @var integer
     *
     * @ORM\Column(name="eventcorporate", type="integer", nullable=false)
     */
    private $eventcorporate;

    /**
     * @var integer
     *
     * @ORM\Column(name="eventmultiparticipant", type="integer", nullable=false)
     */
    private $eventmultiparticipant;

    /**
     * @var integer
     *
     * @ORM\Column(name="eventpersonal", type="integer", nullable=false)
     */
    private $eventpersonal;

    /**
     * @var integer
     *
     * @ORM\Column(name="eventretrieval", type="integer", nullable=false)
     */
    private $eventretrieval;

    /**
     * @var integer
     *
     * @ORM\Column(name="idinternalrep", type="integer", nullable=false)
     */
    private $idinternalrep;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddeparturecountry", type="integer", nullable=false)
     */
    private $iddeparturecountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddeparturecity", type="integer", nullable=false)
     */
    private $iddeparturecity;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddeliverycountry", type="integer", nullable=false)
     */
    private $iddeliverycountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddeliverycity", type="integer", nullable=false)
     */
    private $iddeliverycity;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="idevent", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="event_idevent_seq", allocationSize=1, initialValue=1)
     */
    private $idevent;



    /**
     * Set eventname
     *
     * @param string $eventname
     *
     * @return Event
     */
    public function setEventname($eventname)
    {
        $this->eventname = $eventname;

        return $this;
    }

    /**
     * Get eventname
     *
     * @return string
     */
    public function getEventname()
    {
        return $this->eventname;
    }

    /**
     * Set eventwedding
     *
     * @param integer $eventwedding
     *
     * @return Event
     */
    public function setEventwedding($eventwedding)
    {
        $this->eventwedding = $eventwedding;

        return $this;
    }

    /**
     * Get eventwedding
     *
     * @return integer
     */
    public function getEventwedding()
    {
        return $this->eventwedding;
    }

    /**
     * Set eventcorporate
     *
     * @param integer $eventcorporate
     *
     * @return Event
     */
    public function setEventcorporate($eventcorporate)
    {
        $this->eventcorporate = $eventcorporate;

        return $this;
    }

    /**
     * Get eventcorporate
     *
     * @return integer
     */
    public function getEventcorporate()
    {
        return $this->eventcorporate;
    }

    /**
     * Set eventmultiparticipant
     *
     * @param integer $eventmultiparticipant
     *
     * @return Event
     */
    public function setEventmultiparticipant($eventmultiparticipant)
    {
        $this->eventmultiparticipant = $eventmultiparticipant;

        return $this;
    }

    /**
     * Get eventmultiparticipant
     *
     * @return integer
     */
    public function getEventmultiparticipant()
    {
        return $this->eventmultiparticipant;
    }

    /**
     * Set eventpersonal
     *
     * @param integer $eventpersonal
     *
     * @return Event
     */
    public function setEventpersonal($eventpersonal)
    {
        $this->eventpersonal = $eventpersonal;

        return $this;
    }

    /**
     * Get eventpersonal
     *
     * @return integer
     */
    public function getEventpersonal()
    {
        return $this->eventpersonal;
    }

    /**
     * Set eventretrieval
     *
     * @param integer $eventretrieval
     *
     * @return Event
     */
    public function setEventretrieval($eventretrieval)
    {
        $this->eventretrieval = $eventretrieval;

        return $this;
    }

    /**
     * Get eventretrieval
     *
     * @return integer
     */
    public function getEventretrieval()
    {
        return $this->eventretrieval;
    }

    /**
     * Set idinternalrep
     *
     * @param integer $idinternalrep
     *
     * @return Event
     */
    public function setIdinternalrep($idinternalrep)
    {
        $this->idinternalrep = $idinternalrep;

        return $this;
    }

    /**
     * Get idinternalrep
     *
     * @return integer
     */
    public function getIdinternalrep()
    {
        return $this->idinternalrep;
    }

    /**
     * Set iddeparturecountry
     *
     * @param integer $iddeparturecountry
     *
     * @return Event
     */
    public function setIddeparturecountry($iddeparturecountry)
    {
        $this->iddeparturecountry = $iddeparturecountry;

        return $this;
    }

    /**
     * Get iddeparturecountry
     *
     * @return integer
     */
    public function getIddeparturecountry()
    {
        return $this->iddeparturecountry;
    }

    /**
     * Set iddeparturecity
     *
     * @param integer $iddeparturecity
     *
     * @return Event
     */
    public function setIddeparturecity($iddeparturecity)
    {
        $this->iddeparturecity = $iddeparturecity;

        return $this;
    }

    /**
     * Get iddeparturecity
     *
     * @return integer
     */
    public function getIddeparturecity()
    {
        return $this->iddeparturecity;
    }

    /**
     * Set iddeliverycountry
     *
     * @param integer $iddeliverycountry
     *
     * @return Event
     */
    public function setIddeliverycountry($iddeliverycountry)
    {
        $this->iddeliverycountry = $iddeliverycountry;

        return $this;
    }

    /**
     * Get iddeliverycountry
     *
     * @return integer
     */
    public function getIddeliverycountry()
    {
        return $this->iddeliverycountry;
    }

    /**
     * Set iddeliverycity
     *
     * @param integer $iddeliverycity
     *
     * @return Event
     */
    public function setIddeliverycity($iddeliverycity)
    {
        $this->iddeliverycity = $iddeliverycity;

        return $this;
    }

    /**
     * Get iddeliverycity
     *
     * @return integer
     */
    public function getIddeliverycity()
    {
        return $this->iddeliverycity;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Event
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
     * Get idevent
     *
     * @return integer
     */
    public function getIdevent()
    {
        return $this->idevent;
    }
}
