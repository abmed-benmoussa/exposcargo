<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Companyevent
 *
 * @ORM\Table(name="companyevent", indexes={@ORM\Index(name="IDX_25E66052EDAB66BE", columns={"idevent"})})
 * @ORM\Entity
 */
class Companyevent
{
    /**
     * @var string
     *
     * @ORM\Column(name="companyname", type="string", length=255, nullable=false)
     */
    private $companyname;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=false)
     */
    private $phone;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcompanyevent", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="companyevent_idcompanyevent_seq", allocationSize=1, initialValue=1)
     */
    private $idcompanyevent;

    /**
     * @var \AppBundle\Entity\Event
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idevent", referencedColumnName="idevent")
     * })
     */
    private $idevent;



    /**
     * Set companyname
     *
     * @param string $companyname
     *
     * @return Companyevent
     */
    public function setCompanyname($companyname)
    {
        $this->companyname = $companyname;

        return $this;
    }

    /**
     * Get companyname
     *
     * @return string
     */
    public function getCompanyname()
    {
        return $this->companyname;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Companyevent
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get idcompanyevent
     *
     * @return integer
     */
    public function getIdcompanyevent()
    {
        return $this->idcompanyevent;
    }

    /**
     * Set idevent
     *
     * @param \AppBundle\Entity\Event $idevent
     *
     * @return Companyevent
     */
    public function setIdevent(\AppBundle\Entity\Event $idevent = null)
    {
        $this->idevent = $idevent;

        return $this;
    }

    /**
     * Get idevent
     *
     * @return \AppBundle\Entity\Event
     */
    public function getIdevent()
    {
        return $this->idevent;
    }
}
