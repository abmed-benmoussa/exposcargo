<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactevent
 *
 * @ORM\Table(name="contactevent", indexes={@ORM\Index(name="IDX_4E74F84363491F5B", columns={"idcompanyevent"})})
 * @ORM\Entity
 */
class Contactevent
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactname", type="string", length=255, nullable=false)
     */
    private $contactname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=false)
     */
    private $phone;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcontactevent", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="contactevent_idcontactevent_seq", allocationSize=1, initialValue=1)
     */
    private $idcontactevent;

    /**
     * @var \AppBundle\Entity\Companyevent
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Companyevent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcompanyevent", referencedColumnName="idcompanyevent")
     * })
     */
    private $idcompanyevent;



    /**
     * Set contactname
     *
     * @param string $contactname
     *
     * @return Contactevent
     */
    public function setContactname($contactname)
    {
        $this->contactname = $contactname;

        return $this;
    }

    /**
     * Get contactname
     *
     * @return string
     */
    public function getContactname()
    {
        return $this->contactname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contactevent
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
     * Set phone
     *
     * @param string $phone
     *
     * @return Contactevent
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
     * Get idcontactevent
     *
     * @return integer
     */
    public function getIdcontactevent()
    {
        return $this->idcontactevent;
    }

    /**
     * Set idcompanyevent
     *
     * @param \AppBundle\Entity\Companyevent $idcompanyevent
     *
     * @return Contactevent
     */
    public function setIdcompanyevent(\AppBundle\Entity\Companyevent $idcompanyevent = null)
    {
        $this->idcompanyevent = $idcompanyevent;

        return $this;
    }

    /**
     * Get idcompanyevent
     *
     * @return \AppBundle\Entity\Companyevent
     */
    public function getIdcompanyevent()
    {
        return $this->idcompanyevent;
    }
}
