<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity
 */
class Team
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
     * @ORM\Column(name="leaderiduser", type="integer", nullable=false)
     */
    private $leaderiduser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="leadersince", type="datetime", nullable=true)
     */
    private $leadersince;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="leaderuntil", type="datetime", nullable=true)
     */
    private $leaderuntil;

    /**
     * @var integer
     *
     * @ORM\Column(name="idteam", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="team_idteam_seq", allocationSize=1, initialValue=1)
     */
    private $idteam;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Team
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
     * Set leaderiduser
     *
     * @param integer $leaderiduser
     *
     * @return Team
     */
    public function setLeaderiduser($leaderiduser)
    {
        $this->leaderiduser = $leaderiduser;

        return $this;
    }

    /**
     * Get leaderiduser
     *
     * @return integer
     */
    public function getLeaderiduser()
    {
        return $this->leaderiduser;
    }

    /**
     * Set leadersince
     *
     * @param \DateTime $leadersince
     *
     * @return Team
     */
    public function setLeadersince($leadersince)
    {
        $this->leadersince = $leadersince;

        return $this;
    }

    /**
     * Get leadersince
     *
     * @return \DateTime
     */
    public function getLeadersince()
    {
        return $this->leadersince;
    }

    /**
     * Set leaderuntil
     *
     * @param \DateTime $leaderuntil
     *
     * @return Team
     */
    public function setLeaderuntil($leaderuntil)
    {
        $this->leaderuntil = $leaderuntil;

        return $this;
    }

    /**
     * Get leaderuntil
     *
     * @return \DateTime
     */
    public function getLeaderuntil()
    {
        return $this->leaderuntil;
    }

    /**
     * Get idteam
     *
     * @return integer
     */
    public function getIdteam()
    {
        return $this->idteam;
    }
}
