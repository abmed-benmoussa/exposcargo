<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project", indexes={@ORM\Index(name="IDX_2FB3D0EE13494946", columns={"idstandarddays"}), @ORM\Index(name="IDX_2FB3D0EE50617CDA", columns={"idperson"}), @ORM\Index(name="IDX_2FB3D0EEACB13136", columns={"departureidlocation"}), @ORM\Index(name="IDX_2FB3D0EE41BA6B31", columns={"parentidproject"}), @ORM\Index(name="IDX_2FB3D0EEFDB22C49", columns={"deliveryidlocation"}), @ORM\Index(name="IDX_2FB3D0EE86447ADC", columns={"internalrepidperson"})})
 * @ORM\Entity
 */
class Project
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timecreated", type="datetime", nullable=false)
     */
    private $timecreated;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=255, nullable=false)
     */
    private $fullname;

    /**
     * @var integer
     *
     * @ORM\Column(name="budget", type="integer", nullable=true)
     */
    private $budget;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="departuredate", type="date", nullable=true)
     */
    private $departuredate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deliverydate", type="date", nullable=true)
     */
    private $deliverydate;

    /**
     * @var string
     *
     * @ORM\Column(name="unknowndeliverydate", type="string", nullable=true)
     */
    private $unknowndeliverydate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="realdeparturedate", type="date", nullable=true)
     */
    private $realdeparturedate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="realdeliverydate", type="date", nullable=true)
     */
    private $realdeliverydate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="previousidproject", type="integer", nullable=true)
     */
    private $previousidproject;

    /**
     * @var integer
     *
     * @ORM\Column(name="nextidproject", type="integer", nullable=true)
     */
    private $nextidproject;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="warehousedate", type="date", nullable=true)
     */
    private $warehousedate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="documentsdate", type="date", nullable=true)
     */
    private $documentsdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="eventtype", type="integer", nullable=true)
     */
    private $eventtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="departurepostcode", type="string", length=10, nullable=true)
     */
    private $departurepostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="deliverypostcode", type="string", length=10, nullable=true)
     */
    private $deliverypostcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="ismultiparticipant", type="integer", nullable=true)
     */
    private $ismultiparticipant;



    /**
     * @var integer
     *
     * @ORM\Column(name="idproject", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="project_idproject_seq", allocationSize=1, initialValue=1)
     */
    private $idproject;

    /**
     * @var \AppBundle\Entity\Location
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Location",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deliveryidlocation", referencedColumnName="idlocation")
     * })
     */
    private $deliveryidlocation;

    /**
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person",fetch="EAGER",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="internalrepidperson", referencedColumnName="idperson")
     * })
     */
    private $internalrepidperson;

    /**
     * @var \AppBundle\Entity\Project
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentidproject", referencedColumnName="idproject")
     * })
     */
    private $parentidproject;

    /**
     * @var \AppBundle\Entity\Location
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Location",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="departureidlocation", referencedColumnName="idlocation")
     * })
     */
    private $departureidlocation;

    /**
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idperson", referencedColumnName="idperson")
     * })
     */
    private $idperson;

    /**
     * @var \AppBundle\Entity\Standarddays
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Standarddays",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idstandarddays", referencedColumnName="idstandarddays")
     * })
     */
    private $idstandarddays;

    public function getbudget()      {        return ($this->budget);    }
    public function getcode()      {        return ($this->code);    }
    public function getcomment()      {        return ($this->comment);    }
    public function getdeliverydate()      {        return ($this->deliverydate);    }
    public function getdeliveryidlocation()      {        return ($this->deliveryidlocation);    }
    public function getdeparturedate()      {        return ($this->departuredate);    }
    public function getdepartureidlocation()      {        return ($this->departureidlocation);    }
    public function getfullname()      {        return ($this->fullname);    }
    public function getidperson()      {        return ($this->idperson);    }
    public function getidproject()      {        return ($this->idproject);    }
    public function getidstandarddays()      {        return ($this->idstandarddays);    }
    public function getinternalrepidperson()      {        return ($this->internalrepidperson);    }
    public function getnextidproject()      {        return ($this->nextidproject);    }
    public function getparentidproject()      {        return ($this->parentidproject);    }
    public function getpreviousidproject()      {        return ($this->previousidproject);    }
    public function getrealdeliverydate()      {        return ($this->realdeliverydate);    }
    public function getrealdeparturedate()      {        return ($this->realdeparturedate);    }
    public function gettimecreated()      {        return ($this->timecreated);    }
    public function getunknowndeliverydate()      {        return ($this->unknowndeliverydate);    }

    public function getwarehousedate()      {        return ($this->warehousedate);    }
    public function getdocumentsdate()      {        return ($this->documentsdate);    }
    public function geteventtype()      {        return ($this->eventtype);    }
    public function getstatus()      {        return ($this->status);    }

    public function getdeparturepostcode()      {        return ($this->departurepostcode);    }
    public function getdeliverypostcode()      {        return ($this->deliverypostcode);    }

    public function setbudget($xbudget)    {     $this->budget = $xbudget;    }
    public function setcode($xcode)    {     $this->code = $xcode;    }
    public function setcomment($xcomment)    {     $this->comment = $xcomment;    }
    public function setdeliverydate($xdeliverydate)    {     $this->deliverydate = $xdeliverydate;    }
    public function setdeliveryidlocation($xdeliveryidlocation)    {     $this->deliveryidlocation = $xdeliveryidlocation;    }
    public function setdeparturedate($xdeparturedate)    {     $this->departuredate = $xdeparturedate;    }
    public function setdepartureidlocation($xdepartureidlocation)    {     $this->departureidlocation = $xdepartureidlocation;    }
    public function setfullname($xfullname)    {     $this->fullname = $xfullname;    }
    public function setidperson($xidperson)    {     $this->idperson = $xidperson;    }
    public function setidproject($xidproject)    {     $this->idproject = $xidproject;    }
    public function setidstandarddays($xidstandarddays)    {     $this->idstandarddays = $xidstandarddays;    }
    public function setinternalrepidperson($xinternalrepidperson)    {     $this->internalrepidperson = $xinternalrepidperson;    }
    public function setnextidproject($xnextidproject)    {     $this->nextidproject = $xnextidproject;    }
    //public function setparentidproject($xparentidproject)    {     $this->parentidproject = $xparentidproject;    }
    public function setpreviousidproject($xpreviousidproject)    {     $this->previousidproject = $xpreviousidproject;    }
    public function setrealdeliverydate($xrealdeliverydate)    {     $this->realdeliverydate = $xrealdeliverydate;    }
    public function setrealdeparturedate($xrealdeparturedate)    {     $this->realdeparturedate = $xrealdeparturedate;    }
    public function settimecreated($xtimecreated)    {     $this->timecreated = $xtimecreated;    }
    public function setunknowndeliverydate($xunknowndeliverydate)    {     $this->unknowndeliverydate = $xunknowndeliverydate;    }

    public function setwarehousedate($xwarehousedate)    {     $this->warehousedate = $xwarehousedate;    }
    public function setdocumentsdate($xdocumentsdate)    {     $this->documentsdate = $xdocumentsdate;    }
    public function seteventtype($xeventtype)    {     $this->eventtype = $xeventtype;    }
    public function setstatus($xstatus)    {     $this->status = $xstatus;    }

    public function setdeparturepostcode($xdeparturepostcode)    {     $this->departurepostcode = $xdeparturepostcode;    }
    public function setdeliverypostcode($xdeliverypostcode)    {     $this->deliverypostcode = $xdeliverypostcode;    }


    public function getweek()
    {
        $xhoy = date_format(new \DateTime("now"), "Y/m/d");
        $xent = date_format($this->deliverydate, "Y/m/d");
        //$xdif = $xhoy - $xent;
        $xdif = strtotime($xhoy) - strtotime($xent);
        return(floor($xdif / 604800));
        //return($xent);
    }

    public function getclient()
    {
        $xcli = $this->idperson->getfullname();
        return($xcli);
    }

    public function getplace()
    {
        if ($this->deliveryidlocation != null)
            $xdl = $this->deliveryidlocation->getfullname();
        else
            $xdl = null;
        return($xdl);
    }

    public function getdeparturelocation()
    {
        if ($this->departureidlocation != null)
            $xdl = $this->departureidlocation->getfullname();
        else
            $xdl = null;
        return($xdl);
    }

    public function getdeliverylocation()
    {
        if ($this->deliveryidlocation != null)
            $xdl = $this->deliveryidlocation->getfullname();
        else
            $xdl = null;
        return($xdl);
    }

    public function getdeparturelocationid()
    {
        if ($this->departureidlocation != null)
            $xdlid = $this->departureidlocation->getid();
        else
            $xdl = null;
        return($xdlid);
    }

    public function getdeliverylocationid()
    {
        if ($this->deliveryidlocation != null)
            $xdlid = $this->deliveryidlocation->getid();
        else
            $xdl = null;
        return($xdlid);
    }

    public function getinternalrep()
    {
        $xirp = $this->internalrepidperson->getfullname();
        return($xirp);
    }

    public function getupdt()
    {
        $xhoy = date_format(new \DateTime("now"), "Y/m/d");
        return($xhoy);
    }



}

