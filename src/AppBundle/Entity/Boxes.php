<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boxes
 *
 * @ORM\Table(name="boxes", indexes={@ORM\Index(name="IDX_CDF1B2E9F0B78280", columns={"idproject"}), @ORM\Index(name="IDX_CDF1B2E9E68C7B2E", columns={"idtrackingnumber"})})
 * @ORM\Entity
 */
class Boxes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pakingtype", type="integer", nullable=false)
     */
    private $pakingtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalboxes", type="integer", nullable=false)
     */
    private $totalboxes;

    /**
     * @var string
     *
     * @ORM\Column(name="wrid", type="string", length=32, nullable=false)
     */
    private $wrid;

    /**
     * @var integer
     *
     * @ORM\Column(name="boxnumber", type="integer", nullable=false)
     */
    private $boxnumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="large", type="integer", nullable=false)
     */
    private $large;

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="integer", nullable=false)
     */
    private $width;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer", nullable=false)
     */
    private $height;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=false)
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemnumber", type="integer", nullable=false)
     */
    private $itemnumber;

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
     * @var integer
     *
     * @ORM\Column(name="classification", type="integer", nullable=false)
     */
    private $classification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedeliveryestimated", type="date", nullable=false)
     */
    private $datedeliveryestimated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedepartureestimated", type="date", nullable=false)
     */
    private $datedepartureestimated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="realdatedelivery", type="date", nullable=false)
     */
    private $realdatedelivery;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="realdatedeparture", type="date", nullable=false)
     */
    private $realdatedeparture;

    /**
     * @var integer
     *
     * @ORM\Column(name="boxdepartureidcity", type="integer", nullable=false)
     */
    private $boxdepartureidcity;

    /**
     * @var integer
     *
     * @ORM\Column(name="boxdeliveryidcity", type="integer", nullable=false)
     */
    private $boxdeliveryidcity;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="idboxes", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="boxes_idboxes_seq", allocationSize=1, initialValue=1)
     */
    private $idboxes;

    /**
     * @var \AppBundle\Entity\Trackingnumber
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Trackingnumber")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtrackingnumber", referencedColumnName="idtrackingnumber")
     * })
     */
    private $idtrackingnumber;

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
     * Set pakingtype
     *
     * @param integer $pakingtype
     *
     * @return Boxes
     */
    public function setPakingtype($pakingtype)
    {
        $this->pakingtype = $pakingtype;

        return $this;
    }

    /**
     * Get pakingtype
     *
     * @return integer
     */
    public function getPakingtype()
    {
        return $this->pakingtype;
    }

    /**
     * Set totalboxes
     *
     * @param integer $totalboxes
     *
     * @return Boxes
     */
    public function setTotalboxes($totalboxes)
    {
        $this->totalboxes = $totalboxes;

        return $this;
    }

    /**
     * Get totalboxes
     *
     * @return integer
     */
    public function getTotalboxes()
    {
        return $this->totalboxes;
    }

    /**
     * Set wrid
     *
     * @param string $wrid
     *
     * @return Boxes
     */
    public function setWrid($wrid)
    {
        $this->wrid = $wrid;

        return $this;
    }

    /**
     * Get wrid
     *
     * @return string
     */
    public function getWrid()
    {
        return $this->wrid;
    }

    /**
     * Set boxnumber
     *
     * @param integer $boxnumber
     *
     * @return Boxes
     */
    public function setBoxnumber($boxnumber)
    {
        $this->boxnumber = $boxnumber;

        return $this;
    }

    /**
     * Get boxnumber
     *
     * @return integer
     */
    public function getBoxnumber()
    {
        return $this->boxnumber;
    }

    /**
     * Set large
     *
     * @param integer $large
     *
     * @return Boxes
     */
    public function setLarge($large)
    {
        $this->large = $large;

        return $this;
    }

    /**
     * Get large
     *
     * @return integer
     */
    public function getLarge()
    {
        return $this->large;
    }

    /**
     * Set width
     *
     * @param integer $width
     *
     * @return Boxes
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return Boxes
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return Boxes
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set itemnumber
     *
     * @param integer $itemnumber
     *
     * @return Boxes
     */
    public function setItemnumber($itemnumber)
    {
        $this->itemnumber = $itemnumber;

        return $this;
    }

    /**
     * Get itemnumber
     *
     * @return integer
     */
    public function getItemnumber()
    {
        return $this->itemnumber;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Boxes
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
     * @return Boxes
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
     * Set classification
     *
     * @param integer $classification
     *
     * @return Boxes
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
     * Set datedeliveryestimated
     *
     * @param \DateTime $datedeliveryestimated
     *
     * @return Boxes
     */
    public function setDatedeliveryestimated($datedeliveryestimated)
    {
        $this->datedeliveryestimated = $datedeliveryestimated;

        return $this;
    }

    /**
     * Get datedeliveryestimated
     *
     * @return \DateTime
     */
    public function getDatedeliveryestimated()
    {
        return $this->datedeliveryestimated;
    }

    /**
     * Set datedepartureestimated
     *
     * @param \DateTime $datedepartureestimated
     *
     * @return Boxes
     */
    public function setDatedepartureestimated($datedepartureestimated)
    {
        $this->datedepartureestimated = $datedepartureestimated;

        return $this;
    }

    /**
     * Get datedepartureestimated
     *
     * @return \DateTime
     */
    public function getDatedepartureestimated()
    {
        return $this->datedepartureestimated;
    }

    /**
     * Set realdatedelivery
     *
     * @param \DateTime $realdatedelivery
     *
     * @return Boxes
     */
    public function setRealdatedelivery($realdatedelivery)
    {
        $this->realdatedelivery = $realdatedelivery;

        return $this;
    }

    /**
     * Get realdatedelivery
     *
     * @return \DateTime
     */
    public function getRealdatedelivery()
    {
        return $this->realdatedelivery;
    }

    /**
     * Set realdatedeparture
     *
     * @param \DateTime $realdatedeparture
     *
     * @return Boxes
     */
    public function setRealdatedeparture($realdatedeparture)
    {
        $this->realdatedeparture = $realdatedeparture;

        return $this;
    }

    /**
     * Get realdatedeparture
     *
     * @return \DateTime
     */
    public function getRealdatedeparture()
    {
        return $this->realdatedeparture;
    }

    /**
     * Set boxdepartureidcity
     *
     * @param integer $boxdepartureidcity
     *
     * @return Boxes
     */
    public function setBoxdepartureidcity($boxdepartureidcity)
    {
        $this->boxdepartureidcity = $boxdepartureidcity;

        return $this;
    }

    /**
     * Get boxdepartureidcity
     *
     * @return integer
     */
    public function getBoxdepartureidcity()
    {
        return $this->boxdepartureidcity;
    }

    /**
     * Set boxdeliveryidcity
     *
     * @param integer $boxdeliveryidcity
     *
     * @return Boxes
     */
    public function setBoxdeliveryidcity($boxdeliveryidcity)
    {
        $this->boxdeliveryidcity = $boxdeliveryidcity;

        return $this;
    }

    /**
     * Get boxdeliveryidcity
     *
     * @return integer
     */
    public function getBoxdeliveryidcity()
    {
        return $this->boxdeliveryidcity;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Boxes
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
     * Get idboxes
     *
     * @return integer
     */
    public function getIdboxes()
    {
        return $this->idboxes;
    }

    /**
     * Set idtrackingnumber
     *
     * @param \AppBundle\Entity\Trackingnumber $idtrackingnumber
     *
     * @return Boxes
     */
    public function setIdtrackingnumber(\AppBundle\Entity\Trackingnumber $idtrackingnumber = null)
    {
        $this->idtrackingnumber = $idtrackingnumber;

        return $this;
    }

    /**
     * Get idtrackingnumber
     *
     * @return \AppBundle\Entity\Trackingnumber
     */
    public function getIdtrackingnumber()
    {
        return $this->idtrackingnumber;
    }

    /**
     * Set idproject
     *
     * @param \AppBundle\Entity\Project $idproject
     *
     * @return Boxes
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
