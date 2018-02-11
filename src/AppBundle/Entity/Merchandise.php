<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Merchandise
 *
 * @ORM\Table(name="merchandise", indexes={@ORM\Index(name="IDX_D043D1A41BF4DEF0", columns={"idboxes"})})
 * @ORM\Entity
 */
class Merchandise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="classification", type="integer", nullable=false)
     */
    private $classification;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=64, nullable=true)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmerchandise", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="merchandise_idmerchandise_seq", allocationSize=1, initialValue=1)
     */
    private $idmerchandise;

    /**
     * @var \AppBundle\Entity\Boxes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Boxes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idboxes", referencedColumnName="idboxes")
     * })
     */
    private $idboxes;



    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Merchandise
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
     * Set classification
     *
     * @param integer $classification
     *
     * @return Merchandise
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;

        return $this;
    }

    /**
     * Get classification
     *
     * @return integer
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Merchandise
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Merchandise
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Merchandise
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Merchandise
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
     * Get idmerchandise
     *
     * @return integer
     */
    public function getIdmerchandise()
    {
        return $this->idmerchandise;
    }

    /**
     * Set idboxes
     *
     * @param \AppBundle\Entity\Boxes $idboxes
     *
     * @return Merchandise
     */
    public function setIdboxes(\AppBundle\Entity\Boxes $idboxes = null)
    {
        $this->idboxes = $idboxes;

        return $this;
    }

    /**
     * Get idboxes
     *
     * @return \AppBundle\Entity\Boxes
     */
    public function getIdboxes()
    {
        return $this->idboxes;
    }
}
