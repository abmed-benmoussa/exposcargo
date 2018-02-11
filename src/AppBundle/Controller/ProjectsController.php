<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Project;
use AppBundle\Entity\Person;
use AppBundle\Entity\Location;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
//use Oro\ORM\Query\AST\Functions\SimpleFunction;

/**
 * Projects controller.
 *
 * @Route("projects")
 */
class ProjectsController extends Controller
{
    /**
     * Lists all project entities.
     *
     * @Route("/", name="projects_index")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
    {

        $xrfec = $request->request->get('reportrange', '');
        $xmonth = $request->request->get('month', '0');
        $xweek = $request->request->get('week', '0');
        $xwarehousedate = $request->request->get('m_warewhousedate', '');
        $xdocumentsdate = $request->request->get('m_documentsdate', '');
        $xtev = $request->request->get('typeevent', '0');
        $xstatusproject = $request->request->get('statusproject', '0');
        $xvenue = $request->request->get('venue', '');
        $xplace = $request->request->get('place', '');
        $xintrep = $request->request->get('internalrep', '');

        if (strlen($xwarehousedate) >= 10)
            $xwarehousedate0 = substr($xwarehousedate, 6, 4) . "-" . substr($xwarehousedate, 0, 2) . "-" . substr($xwarehousedate, 3, 2);
        if (strlen($xdocumentsdate) >= 10)
            $xdocumentsdate0 = substr($xdocumentsdate, 6, 4) . "-" . substr($xdocumentsdate, 0, 2) . "-" . substr($xdocumentsdate, 3, 2);

        if (strlen($xrfec) >= 23)
        {
            $xrfec1 = substr($xrfec, 0, 10);
            $xrfec2 = substr($xrfec, 13, 10);
            $xrfec1 = substr($xrfec1, 6, 4) . "-" . substr($xrfec1, 0, 2) . "-" . substr($xrfec1, 3, 2);
            $xrfec2 = substr($xrfec2, 6, 4) . "-" . substr($xrfec2, 0, 2) . "-" . substr($xrfec2, 3, 2);
        }

        $em = $this->getDoctrine()->getManager();

//        $projects = $em->getRepository('AppBundle:Project')->findAll();

        $repository = $this->getDoctrine()->getRepository(Project::class);

        $qb = $repository->createQueryBuilder('p');
        $qb->innerJoin('AppBundle:Person', 'u', 'WITH', 'p.internalrepidperson = u.idperson');
        $qb->innerJoin('AppBundle:Location', 'v', 'WITH', 'p.deliveryidlocation = v.idlocation');
        $qb->innerJoin('AppBundle:Location', 'l', 'WITH', 'p.deliveryidlocation = l.idlocation');
        //innerJoin($join, $alias, $conditionType = null, $condition = null, $indexBy = null)

        $qb->Where('1 = 1');


        if ( strlen($xrfec) >= 23)
        {
            // 12/19/2017 - 12/19/2017
            // 2017-04-01 - 2017-04-22

            $qb->andWhere("p.deliverydate BETWEEN '" . $xrfec1 . "' AND '" . $xrfec2 . "'");
            //$qb->andWhere('p.deliverydate BETWEEN :xdate1 AND :xdate2');
            //$qb->setParameter(':xdate1', $xrfec1);
            //$qb->setParameter(':xdate2', $xrfec2);
        }

        if ($xmonth != "0")
        {
            $qb->andWhere("MONTH(p.deliverydate) = :xmonth");
            //$qb->andWhere("DATE_PART('month', p.deliverydate) = :xmonth");
            $qb->setParameter(':xmonth', $xmonth);
        }

        if ($xweek != "0")
        {
            $qb->andWhere("WEEK(p.deliverydate) = :xweek");
            //$qb->andWhere("DATE_PART('week', p.deliverydate) = :xweek");
            $qb->setParameter(':xweek', $xweek);
        }

        if (strlen($xwarehousedate) >= 10)
        {
            $qb->andWhere("p.warehousedate = :xwarehousedate");
            $qb->setParameter(':xwarehousedate', $xwarehousedate0);
        }

        if (strlen($xdocumentsdate) >= 10)
        {
            $qb->andWhere("p.documentsdate = :xdocumentsdate");
            $qb->setParameter(':xdocumentsdate', $xdocumentsdate0);
        }

        if ( strlen($xtev) > 0 && $xtev != "0")
        {
            $qb->andWhere("p.eventtype = :xte");
            $qb->setParameter(':xte', $xtev);
        }

        if ( strlen($xstatusproject) > 0 && $xstatusproject != "0")
        {
            $qb->andWhere("p.status = :statusproject");
            $qb->setParameter(':xstatusproject', $xstatusproject);
        }

        if ( strlen($xvenue) > 0)
        {
            $qb->andWhere("v.fullname = :xvenue");
            $qb->setParameter(':xvenue', $xvenue);
        }

        if ( strlen($xplace) > 0)
        {
            $qb->andWhere("l.fullname = :xplace");
            $qb->setParameter(':xplace', $xplace);
        }

        if ( strlen($xintrep) > 0)
        {
            $qb->andWhere("u.fullname = :xirp");
            $qb->setParameter(':xirp', $xintrep);
        }

        $query = $qb->getQuery();

        $projects = $query->getResult();

//->setParameter(':date1', '2017-01-01', \Doctrine\DBAL\Types\Type::DATE)
//->setParameter(':date2', '2017-01-31', \Doctrine\DBAL\Types\Type::DATE)

//        $xq = "SELECT idproject, code, fullname, deliverydate, ";
//        $xq .= "week, client, updt, status ";
//        $xq .= "FROM AppBundle:Vproject01 ";
//        $xq .= "AND A.deliverydate between DATE '2015/11/16' AND DATE '2017/12/15' ";
//        $xq .= "AND DATE_PART('month', A.deliverydate) = 2 ";

//        $query = $em->createQuery($xq);   //->setParameter('price', '19.99');
//        $projects = $query->getResult();

$user = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('projects/index.html.twig', array(
            'projects' => $projects,
            'xrfec' => $xrfec,
            'xmonth' => $xmonth,
            'xweek' => $xweek,
            'xwarehousedate' => $xwarehousedate,
            'xdocumentsdate' => $xdocumentsdate,
            'xtev' => $xtev,
            'xstatusproject' => $xstatusproject,
            'xvenue' => $xvenue,
            'xplace' => $xplace,
            'xintrep' => $xintrep,
            'idusr' => $user,
            'query' => $query->getSQL(),
        ));
    }

    /**
     * Lists all project entities2.
     *
     * @Route("/index2", name="projects_index2")
     * @Method("GET")
     */
    public function index2Action()
    {
        $em = $this->getDoctrine()->getManager();

        $projects = $em->getRepository('AppBundle:Project')->findAll();

        return $this->render('projects/index2.html.twig', array(
            'projects' => $projects,
        ));
    }

    /**
     * Lists all project entities.
     *
     * @Route("/report", name="projects_report")
     * @Method({"GET", "POST"})
     */
    public function reportAction(Request $request)
    {

        $xrfec = $request->request->get('reportrange', '');
        $xmonth = $request->request->get('month', '0');
        $xweek = $request->request->get('week', '0');
        $xwarehousedate = $request->request->get('m_warewhousedate', '');
        $xdocumentsdate = $request->request->get('m_documentsdate', '');
        $xtev = $request->request->get('typeevent', '0');
        $xstatusproject = $request->request->get('statusproject', '0');
        $xvenue = $request->request->get('venue', '');
        $xplace = $request->request->get('place', '');
        $xintrep = $request->request->get('internalrep', '');

        if (strlen($xwarehousedate) >= 10)
            $xwarehousedate0 = substr($xwarehousedate, 6, 4) . "-" . substr($xwarehousedate, 0, 2) . "-" . substr($xwarehousedate, 3, 2);
        if (strlen($xdocumentsdate) >= 10)
            $xdocumentsdate0 = substr($xdocumentsdate, 6, 4) . "-" . substr($xdocumentsdate, 0, 2) . "-" . substr($xdocumentsdate, 3, 2);

        if (strlen($xrfec) >= 23)
        {
            $xrfec1 = substr($xrfec, 0, 10);
            $xrfec2 = substr($xrfec, 13, 10);
            $xrfec1 = substr($xrfec1, 6, 4) . "-" . substr($xrfec1, 0, 2) . "-" . substr($xrfec1, 3, 2);
            $xrfec2 = substr($xrfec2, 6, 4) . "-" . substr($xrfec2, 0, 2) . "-" . substr($xrfec2, 3, 2);
        }

        $em = $this->getDoctrine()->getManager();

//        $projects = $em->getRepository('AppBundle:Project')->findAll();

        $repository = $this->getDoctrine()->getRepository(Project::class);

        $qb = $repository->createQueryBuilder('p');
        $qb->innerJoin('AppBundle:Person', 'u', 'WITH', 'p.internalrepidperson = u.idperson');
        $qb->innerJoin('AppBundle:Location', 'v', 'WITH', 'p.deliveryidlocation = v.idlocation');
        $qb->innerJoin('AppBundle:Location', 'l', 'WITH', 'p.deliveryidlocation = l.idlocation');
        //innerJoin($join, $alias, $conditionType = null, $condition = null, $indexBy = null)

        $qb->Where('1 = 1');


        if ( strlen($xrfec) >= 23)
        {
            // 12/19/2017 - 12/19/2017
            // 2017-04-01 - 2017-04-22

            $qb->andWhere("p.deliverydate BETWEEN '" . $xrfec1 . "' AND '" . $xrfec2 . "'");
            //$qb->andWhere('p.deliverydate BETWEEN :xdate1 AND :xdate2');
            //$qb->setParameter(':xdate1', $xrfec1);
            //$qb->setParameter(':xdate2', $xrfec2);
        }

        if ($xmonth != "0")
        {
            $qb->andWhere("MONTH(p.deliverydate) = :xmonth");
            //$qb->andWhere("DATE_PART('month', p.deliverydate) = :xmonth");
            $qb->setParameter(':xmonth', $xmonth);
        }

        if ($xweek != "0")
        {
            $qb->andWhere("WEEK(p.deliverydate) = :xweek");
            //$qb->andWhere("DATE_PART('week', p.deliverydate) = :xweek");
            $qb->setParameter(':xweek', $xweek);
        }

        if (strlen($xwarehousedate) >= 10)
        {
            $qb->andWhere("p.warehousedate = :xwarehousedate");
            $qb->setParameter(':xwarehousedate', $xwarehousedate0);
        }

        if (strlen($xdocumentsdate) >= 10)
        {
            $qb->andWhere("p.documentsdate = :xdocumentsdate");
            $qb->setParameter(':xdocumentsdate', $xdocumentsdate0);
        }

        if ( strlen($xtev) > 0 && $xtev != "0")
        {
            $qb->andWhere("p.eventtype = :xte");
            $qb->setParameter(':xte', $xtev);
        }

        if ( strlen($xstatusproject) > 0 && $xstatusproject != "0")
        {
            $qb->andWhere("p.status = :statusproject");
            $qb->setParameter(':xstatusproject', $xstatusproject);
        }

        if ( strlen($xvenue) > 0)
        {
            $qb->andWhere("v.fullname = :xvenue");
            $qb->setParameter(':xvenue', $xvenue);
        }

        if ( strlen($xplace) > 0)
        {
            $qb->andWhere("l.fullname = :xplace");
            $qb->setParameter(':xplace', $xplace);
        }

        if ( strlen($xintrep) > 0)
        {
            $qb->andWhere("u.fullname = :xirp");
            $qb->setParameter(':xirp', $xintrep);
        }

        $query = $qb->getQuery();

        $projects = $query->getResult();

$user = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('projects/report1.html.twig', array(
            'projects' => $projects,
            'xrfec' => $xrfec,
            'xmonth' => $xmonth,
            'xweek' => $xweek,
            'xwarehousedate' => $xwarehousedate,
            'xdocumentsdate' => $xdocumentsdate,
            'xtev' => $xtev,
            'xstatusproject' => $xstatusproject,
            'xvenue' => $xvenue,
            'xplace' => $xplace,
            'xintrep' => $xintrep,
            'idusr' => $user,
            'query' => $query->getSQL(),
        ));
    }


    /**
     * Json all team entities.
     *
     * @Route("/json", name="projects_json")
     * @Method({"GET", "POST"})
     */
    public function jsonAction()
    {
        $em = $this->getDoctrine()->getManager();

        $projects = $em->getRepository('AppBundle:Project')->findAll();

        return $this->render('resptable.html.twig', array(
            'xtable' => $projects,
            'xcmps' => $em->getClassMetadata('AppBundle:Project')->getFieldNames(),
        ));
    }

    /**
     * Saves a new project entity.
     *
     * @Route("/save", name="project_save")
     * @Method({"GET", "POST"})
     */
    public function saveAction(Request $request)
    {
        $xcompanyname = $request->request->get('ycompanyname', '');
        $xphonenumber = $request->request->get('yphonenumber', '');
        $xcontactname = $request->request->get('ycontactname', '');
        $xemail = $request->request->get('yemail', '');
        $xcontactphonenumber = $request->request->get('ycontactphonenumber', '');

        $xprojecttype = $request->request->get('yprojecttype', '');

        $xrcommercial = $request->request->get('yrcommercial', '');
        $xrcorporation = $request->request->get('yrcorporation', '');
        $xrpersonal = $request->request->get('yrpersonal', '');
        $xrretrieval = $request->request->get('yrretrieval', '');
        $xrwedding = $request->request->get('yrwedding', '');
        $xtmultiparticipant = $request->request->get('ytmultiparticipant', '');
        $xtconsult = $request->request->get('ytconsult', '');
        $xdeparture_country = $request->request->get('ydeparture_country', '');
        $xdeparture_city = $request->request->get('ydeparture_city', '');
        $xdeparture_postcode = $request->request->get('ydeparture_postcode', '');
        $xdelivery_country = $request->request->get('ydelivery_country', '');
        $xdelivery_city = $request->request->get('ydelivery_city', '');
        $xdelivery_postcode = $request->request->get('ydelivery_postcode', '');
        $xdelivery_date = $request->request->get('ydelivery_date', '');
        $xprojectcode = $request->request->get('projectcode', '');

        $xtcon = ($xtconsult == '4') ? 4 : 2;

        $user = $this->get('security.token_storage')->getToken()->getUser();

        $repoloc1 = $this->getDoctrine()->getRepository(Location::class);
        $repoper1 = $this->getDoctrine()->getRepository(Person::class);

        $qbl1 = $repoloc1->createQueryBuilder('l');
        //$qb->innerJoin('AppBundle:Person', 'u', 'WITH', 'p.internalrepidperson = u.idperson');

        $qbl1->Where('l.fullname = :xdlo1 ');
        $qbl1->setParameter(':xdlo1', $xdelivery_city);
        $queryloc1 = $qbl1->getQuery();
        $ydelivery_locations = $queryloc1->getResult();
        if ($ydelivery_locations)
            $ydelivery_location = reset($ydelivery_locations);
        else
            $ydelivery_location = new Location();

        $qbl2 = $repoloc1->createQueryBuilder('l');
        $qbl2->Where('l.fullname = :xdlo2 ');
        $qbl2->setParameter(':xdlo2', $xdeparture_city);
        $queryloc2 = $qbl2->getQuery();
        $ydeparture_locations = $queryloc2->getResult();
        if ($ydeparture_locations)
            $ydeparture_location = reset($ydeparture_locations);
        else
            $ydeparture_location = new Location();

        $qbp1 = $repoper1->createQueryBuilder('p');
        $qbp1->Where('p.fullname = :xcus ');
        $qbp1->setParameter(':xcus', $xcompanyname);
        $queryper1 = $qbp1->getQuery();
        $ycompanies = $queryper1->getResult();
        if ($ycompanies)
            $ycompany = reset($ycompanies);
        else
            $ycompany = new Person();














        $project = new Project();

$project->setbudget(0);
$project->setcode($xprojectcode);
$project->setcomment('comment');

if (strlen($xdelivery_date) == 8)
{
    $xfec = '20' . substr($xdelivery_date, 6, 2) . '-' . substr($xdelivery_date, 0, 2) . '-' . substr($xdelivery_date, 3, 2);
    $project->setdeliverydate( new \DateTime($xfec));
}

$project->setdeliveryidlocation($ydelivery_location);
//$project->setdeparturedate('');
$project->setdepartureidlocation($ydeparture_location);
$project->setfullname('New project');
$project->setidperson($ycompany);
//$project->setidstandarddays(0);
$project->setinternalrepidperson($user->getidperson());
//$project->setnextidproject(0);
//$project->setpreviousidproject(0);
//$project->setrealdeliverydate($xdelivery_date);
//$project->setrealdeparturedate('');
$project->settimecreated( new \DateTime() );
$project->setunknowndeliverydate('');

$project->seteventtype($xprojecttype);
$project->setstatus($xtcon);

$project->setdeparturepostcode($xdeparture_postcode);
$project->setdeliverypostcode($xdelivery_postcode);


//        if ($form->isSubmitted() && $form->isValid())
//        {
            $em = $this->getDoctrine()->getManager();
            //$em->persist($ydelivery_location);
            //$em->persist($ydeparture_location);
            //$em->persist($user);
            $em->persist($project);
            $em->flush();

            return $this->redirectToRoute('project_show', array('idproject' => $project->getIdproject()));
//        }

//        return $this->render('projects/new.html.twig', array(
//            'project' => $project,
//            'form' => $form->createView(),
//        ));
    }

    /**
     * Creates a new project entity.
     *
     * @Route("/new", name="project_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $project = new Project();
        $form = $this->createForm('AppBundle\Form\ProjectType', $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();

            return $this->redirectToRoute('project_show', array('idproject' => $project->getIdproject()));
        }

        return $this->render('projects/new.html.twig', array(
            'project' => $project,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a project entity.
     *
     * @Route("/{idproject}", name="project_show")
     * @Method("GET")
     */
    public function showAction(Project $project)
    {
        $deleteForm = $this->createDeleteForm($project);

        return $this->render('projects/show.html.twig', array(
            'project' => $project,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing project entity.
     *
     * @Route("/{idproject}/edit", name="project_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Project $project)
    {
        $deleteForm = $this->createDeleteForm($project);
        $editForm = $this->createForm('AppBundle\Form\ProjectType', $project);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('project_edit', array('idproject' => $project->getIdproject()));
        }

        return $this->render('projects/edit.html.twig', array(
            'project' => $project,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a project entity.
     *
     * @Route("/{idproject}", name="project_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Project $project)
    {
        $form = $this->createDeleteForm($project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($project);
            $em->flush();
        }

        return $this->redirectToRoute('project_index');
    }

    /**
     * Creates a form to delete a project entity.
     *
     * @param Project $project The project entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Project $project)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('project_delete', array('idproject' => $project->getIdproject())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
