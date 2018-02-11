<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teamrights
 *
 * @ORM\Table(name="teamrights", indexes={@ORM\Index(name="IDX_4C5E74DFE22715EA", columns={"idprocedure"}), @ORM\Index(name="IDX_4C5E74DF172F57BF", columns={"idteam"})})
 * @ORM\Entity
 */
class Teamrights
{
    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="idteamrights", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="teamrights_idteamrights_seq", allocationSize=1, initialValue=1)
     */
    private $idteamrights;

    /**
     * @var \AppBundle\Entity\Team
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idteam", referencedColumnName="idteam")
     * })
     */
    private $idteam;

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
     * Set comment
     *
     * @param string $comment
     *
     * @return Teamrights
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
     * Get idteamrights
     *
     * @return integer
     */
    public function getIdteamrights()
    {
        return $this->idteamrights;
    }

    /**
     * Set idteam
     *
     * @param \AppBundle\Entity\Team $idteam
     *
     * @return Teamrights
     */
    public function setIdteam(\AppBundle\Entity\Team $idteam = null)
    {
        $this->idteam = $idteam;

        return $this;
    }

    /**
     * Get idteam
     *
     * @return \AppBundle\Entity\Team
     */
    public function getIdteam()
    {
        return $this->idteam;
    }

    /**
     * Set idprocedure
     *
     * @param \AppBundle\Entity\Procedures $idprocedure
     *
     * @return Teamrights
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
