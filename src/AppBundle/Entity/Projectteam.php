<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projectteam
 *
 * @ORM\Table(name="projectteam", indexes={@ORM\Index(name="IDX_1BF06506F0B78280", columns={"idproject"}), @ORM\Index(name="IDX_1BF065065E5C27E9", columns={"iduser"})})
 * @ORM\Entity
 */
class Projectteam
{
    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="idprojectteam", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="projectteam_idprojectteam_seq", allocationSize=1, initialValue=1)
     */
    private $idprojectteam;

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
     * @var \AppBundle\Entity\Project
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idproject", referencedColumnName="idproject")
     * })
     */
    private $idproject;



    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Projectteam
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
     * Get idprojectteam
     *
     * @return integer
     */
    public function getIdprojectteam()
    {
        return $this->idprojectteam;
    }

    /**
     * Set iduser
     *
     * @param \AppBundle\Entity\Users $iduser
     *
     * @return Projectteam
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
     * Set idproject
     *
     * @param \AppBundle\Entity\Project $idproject
     *
     * @return Projectteam
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
