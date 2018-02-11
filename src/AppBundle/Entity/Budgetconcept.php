<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Budgetconcept
 *
 * @ORM\Table(name="budgetconcept")
 * @ORM\Entity
 */
class Budgetconcept
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="maxpluschargeamt", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $maxpluschargeamt;

    /**
     * @var string
     *
     * @ORM\Column(name="maxpluschargepct", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $maxpluschargepct;

    /**
     * @var integer
     *
     * @ORM\Column(name="idbudgetconcept", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="budgetconcept_idbudgetconcept_seq", allocationSize=1, initialValue=1)
     */
    private $idbudgetconcept;



    /**
     * Set description
     *
     * @param string $description
     *
     * @return Budgetconcept
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
     * Set comment
     *
     * @param string $comment
     *
     * @return Budgetconcept
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
     * Set maxpluschargeamt
     *
     * @param string $maxpluschargeamt
     *
     * @return Budgetconcept
     */
    public function setMaxpluschargeamt($maxpluschargeamt)
    {
        $this->maxpluschargeamt = $maxpluschargeamt;

        return $this;
    }

    /**
     * Get maxpluschargeamt
     *
     * @return string
     */
    public function getMaxpluschargeamt()
    {
        return $this->maxpluschargeamt;
    }

    /**
     * Set maxpluschargepct
     *
     * @param string $maxpluschargepct
     *
     * @return Budgetconcept
     */
    public function setMaxpluschargepct($maxpluschargepct)
    {
        $this->maxpluschargepct = $maxpluschargepct;

        return $this;
    }

    /**
     * Get maxpluschargepct
     *
     * @return string
     */
    public function getMaxpluschargepct()
    {
        return $this->maxpluschargepct;
    }

    /**
     * Get idbudgetconcept
     *
     * @return integer
     */
    public function getIdbudgetconcept()
    {
        return $this->idbudgetconcept;
    }
}
