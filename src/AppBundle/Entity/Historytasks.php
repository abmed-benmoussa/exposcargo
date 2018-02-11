<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historytasks
 *
 * @ORM\Table(name="historytasks", indexes={@ORM\Index(name="IDX_64865F081B12A85", columns={"idtask"})})
 * @ORM\Entity
 */
class Historytasks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idhistorytasks", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historytasks_idhistorytasks_seq", allocationSize=1, initialValue=1)
     */
    private $idhistorytasks;

    /**
     * @var \AppBundle\Entity\Tasks
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tasks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtask", referencedColumnName="idtask")
     * })
     */
    private $idtask;



    /**
     * Get idhistorytasks
     *
     * @return integer
     */
    public function getIdhistorytasks()
    {
        return $this->idhistorytasks;
    }

    /**
     * Set idtask
     *
     * @param \AppBundle\Entity\Tasks $idtask
     *
     * @return Historytasks
     */
    public function setIdtask(\AppBundle\Entity\Tasks $idtask = null)
    {
        $this->idtask = $idtask;

        return $this;
    }

    /**
     * Get idtask
     *
     * @return \AppBundle\Entity\Tasks
     */
    public function getIdtask()
    {
        return $this->idtask;
    }
}
