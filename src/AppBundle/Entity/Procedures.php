<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Procedures
 *
 * @ORM\Table(name="procedures")
 * @ORM\Entity
 */
class Procedures
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="authrequired", type="integer", nullable=false)
     */
    private $authrequired;

    /**
     * @var integer
     *
     * @ORM\Column(name="idprocedure", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="procedures_idprocedure_seq", allocationSize=1, initialValue=1)
     */
    private $idprocedure;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Procedures
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Procedures
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
     * Set comment
     *
     * @param string $comment
     *
     * @return Procedures
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
     * Set authrequired
     *
     * @param integer $authrequired
     *
     * @return Procedures
     */
    public function setAuthrequired($authrequired)
    {
        $this->authrequired = $authrequired;

        return $this;
    }

    /**
     * Get authrequired
     *
     * @return integer
     */
    public function getAuthrequired()
    {
        return $this->authrequired;
    }

    /**
     * Get idprocedure
     *
     * @return integer
     */
    public function getIdprocedure()
    {
        return $this->idprocedure;
    }
}
