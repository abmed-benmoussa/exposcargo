<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userrights
 *
 * @ORM\Table(name="userrights", indexes={@ORM\Index(name="IDX_699AC6C7E22715EA", columns={"idprocedure"}), @ORM\Index(name="IDX_699AC6C75E5C27E9", columns={"iduser"})})
 * @ORM\Entity
 */
class Userrights
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iduserright", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="userrights_iduserright_seq", allocationSize=1, initialValue=1)
     */
    private $iduserright;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;

    /**
     * @var \AppBundle\Entity\Procedures
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Procedures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idprocedure", referencedColumnName="idprocedure")
     * })
     */
    private $idprocedure;



    /**
     * Get iduserright
     *
     * @return integer
     */
    public function getIduserright()
    {
        return $this->iduserright;
    }

    /**
     * Set iduser
     *
     * @param \AppBundle\Entity\Users $iduser
     *
     * @return Userrights
     */
    public function setIduser(\AppBundle\Entity\Users $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \AppBundle\Entity\Users
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set idprocedure
     *
     * @param \AppBundle\Entity\Procedures $idprocedure
     *
     * @return Userrights
     */
    public function setIdprocedure(\AppBundle\Entity\Procedures $idprocedure = null)
    {
        $this->idprocedure = $idprocedure;

        return $this;
    }

    /**
     * Get idprocedure
     *
     * @return \AppBundle\Entity\Procedures
     */
    public function getIdprocedure()
    {
        return $this->idprocedure;
    }
}
