<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChatInteractions
 *
 * @ORM\Table(name="chat_interactions")
 * @ORM\Entity
 */
class ChatInteractions
{
    /**
     * @var string
     *
     * @ORM\Column(name="to_id", type="string", length=255, nullable=false)
     */
    private $toId;

    /**
     * @var string
     *
     * @ORM\Column(name="from_id", type="string", length=255, nullable=false)
     */
    private $fromId;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime", nullable=false)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=255, nullable=false)
     */
    private $ipAddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="message_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chat_interactions_message_id_seq", allocationSize=1, initialValue=1)
     */
    private $messageId;



    /**
     * Set toId
     *
     * @param string $toId
     *
     * @return ChatInteractions
     */
    public function setToId($toId)
    {
        $this->toId = $toId;

        return $this;
    }

    /**
     * Get toId
     *
     * @return string
     */
    public function getToId()
    {
        return $this->toId;
    }

    /**
     * Set fromId
     *
     * @param string $fromId
     *
     * @return ChatInteractions
     */
    public function setFromId($fromId)
    {
        $this->fromId = $fromId;

        return $this;
    }

    /**
     * Get fromId
     *
     * @return string
     */
    public function getFromId()
    {
        return $this->fromId;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return ChatInteractions
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
     * Set time
     *
     * @param \DateTime $time
     *
     * @return ChatInteractions
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return ChatInteractions
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Get messageId
     *
     * @return integer
     */
    public function getMessageId()
    {
        return $this->messageId;
    }
}
