<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="IDX_1483A5E984A67BCA", columns={"idrole"}), @ORM\Index(name="IDX_1483A5E950617CDA", columns={"idperson"}), @ORM\Index(name="IDX_1483A5E9172F57BF", columns={"idteam"}), @ORM\Index(name="IDX_1483A5E9856A684C", columns={"parentid"})})
 * @ORM\Entity
 */
class Users implements UserInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="users_iduser_seq", allocationSize=1, initialValue=1)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="integer")
     *
     */
    private $parentid;

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
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idperson", referencedColumnName="idperson")
     * })
     */
    private $idperson;

    /**
     * @var \AppBundle\Entity\Role
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrole", referencedColumnName="idrole")
     * })
     */
    private $idrole;

   public function getusername()      {        return ($this->username);    }

    public function getPassword()
    {
        return ($this->password);
    }


   public function getiduser()        {        return ($this->iduser);    }
   public function getparentid()      {        return ($this->parentid);    }
   public function getidteam()        {        return ($this->idteam);    }
   public function getidperson()      {        return ($this->idperson);    }
   public function getidrole()        {        return ($this->idrole);    }


   public function setusername($xusername)          {     $this->username = $xusername;    }
   public function setpassword($xpassword)          {     $this->password = $xpassword;    }
   public function setiduser($xiduser)              {     $this->iduser = $xiduser;    }
   public function setparentid($xparentid)          {     $this->parentid = $xparentid;    }
   public function setidteam($xidteam)              {     $this->idteam = $xidteam;    }
   public function setidperson($xidperson)          {     $this->idperson = $xidperson;    }
   public function setidrole($xidrole)              {     $this->idrole = $xidrole;    }

    public function eraseCredentials()
    {
        ;
    }

    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }

    public function getSalt()
    {
        return (null);
    }

    public function __toString()
    {
        return ($this->username);
    }

}

