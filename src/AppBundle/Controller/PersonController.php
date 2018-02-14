<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Person;
use AppBundle\Entity\Project;
use AppBundle\Entity\Phone;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * Person controller.
 *
 * @Route("person")
 */
class PersonController extends Controller {

    /**
     * Lists all person entities.
     *
     * @Route("/", name="person_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $people = $em->getRepository('AppBundle:Person')->findAll();

        return $this->render('person/index.html.twig', array(
                    'people' => $people,
        ));
    }

    /**
     * Lists reports.
     *
     * @Route("/report", name="person_report_page")
     * @Method("GET")
     */
    public function reportAction() {

        $em = $this->getDoctrine()->getManager();
        //$peoples = $em->getRepository('AppBundle:Person')->findAll();
        //var_dump($peoples);die;

        return $this->render('person/report1.html.twig', array(
                        //'peoples' => $peoples,
        ));
    }

    /**
     * Lists reports.
     *
     * @Route("/jsonreport", name="person_report")
     * @Method({"GET", "POST"})
     */
    public function jsonreportAction(Request $request) {

        $page = $request->query->get('datatable')['pagination']['page'];

        $perpage = $request->query->get('datatable')['pagination']['perpage'];

        if ($request->query->get('datatable')['query']) {

            $statusperson = $request->query->get('datatable')['query']['statusperson'];

            $generalSearch = $request->query->get('datatable')['query']['generalSearch'];

            $range = $request->query->get('datatable')['query']['range'];

            $behaivorcategory = $request->query->get('datatable')['query']['behaivorcategory'];

            $financialcategory = $request->query->get('datatable')['query']['financialcategory'];

            $persontype = $request->query->get('datatable')['query']['persontype'];

            $status_project = $request->query->get('datatable')['query']['status_project'];

            $eventtype = $request->query->get('datatable')['query']['eventtype'];

            $country = $request->query->get('datatable')['query']['country'];
        }



        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Person::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->leftJoin('AppBundle:Project', 'pr', 'WITH', 'pr.internalrepidperson = p.idperson');
        $qb->leftJoin('AppBundle:Location', 'v', 'WITH', 'pr.deliveryidlocation = v.idlocation');
        $qb->Where('1 = 1');

        if (strlen($range) >= 23) {

            $xrfec1 = substr($range, 0, 10);
            $xrfec2 = substr($range, 13, 10);
            $xrfec1 = substr($xrfec1, 6, 4) . "-" . substr($xrfec1, 0, 2) . "-" . substr($xrfec1, 3, 2);
            $xrfec2 = substr($xrfec2, 6, 4) . "-" . substr($xrfec2, 0, 2) . "-" . substr($xrfec2, 3, 2);
            $qb->andWhere("pr.deliverydate BETWEEN '" . $xrfec1 . "' AND '" . $xrfec2 . "'");
        }
        if ($statusperson != "") {
            $qb->andWhere("p.status = :statusperson");
            $qb->setParameter(':statusperson', $statusperson);
        }
        if ($behaivorcategory != "") {

            $qb->andWhere("p.behaivorcategory = :behaivorcategory");
            $qb->setParameter(':behaivorcategory', $behaivorcategory);
        }
        if ($financialcategory != "") {

            $qb->andWhere("p.financialcategory = :financialcategory");
            $qb->setParameter(':financialcategory', $financialcategory);
        }
        if ($persontype != "") {

            $qb->andWhere("p.type = :persontype");
            $qb->setParameter(':persontype', $persontype);
        }
        if ($status_project != "") {

            $qb->andWhere("pr.status = :statusp");
            $qb->setParameter(':statusp', $status_project);
        }
        if ($eventtype != "") {

            $qb->andWhere("pr.eventtype = :eventtype");
            $qb->setParameter(':eventtype', $eventtype);
        }
        if ($generalSearch != "") {

            $qb->andWhere("p.fullname LIKE :generalSearch");
            $qb->setParameter(':generalSearch', '%' . $generalSearch . '%');
        }
        
        $qb->setFirstResult(($page - 1) * $perpage)->setMaxResults($perpage);
        $persons = new Paginator($qb->getQuery(),$fetchJoinCollection  = true);
        $response = array();
        $data = array();
        foreach ($persons as $person) {
            $data [] = array(
                'fullname' => $person->getFullname(),
                'idphone' => $person->getIdphone(),
                'job' => $person->getJob(),
                'email' => $person->getEmail(),
            );
        }
        $response = array(
            "meta" => array(
                "page" => $page,
                "pages" => count($persons->getQuery()->getResult()),
                "perpage" => $perpage,
                "total" => count($persons)
            ),
            "data" => $data
        );
        return new JsonResponse($response);
    }

    /**
     * Json1 all person entities
     *
     * @Route("/json1", name="person_json1")
     * @Method({"GET", "POST"})
     */
    public function json1Action() {

        $em = $this->getDoctrine()->getManager();

        $repository = $this->getDoctrine()->getRepository(Person::class);

        $qb = $repository->createQueryBuilder('p');

        $qb->Where('p.type = 1');

        $query = $qb->getQuery();

        $persons = $query->getResult();

        $response = array();
        foreach ($persons as $person) {
            $response[] = $person->getfullname();
        }
        $response[] = $this->get('session')->get('iduser');
        return new JsonResponse($response);
    }

    /**
     * Json2 all person entities
     *
     * @Route("/json2", name="person_json2")
     * @Method({"GET", "POST"})
     */
    public function json2Action() {
        $em = $this->getDoctrine()->getManager();

        $repository = $this->getDoctrine()->getRepository(Person::class);

        $qb = $repository->createQueryBuilder('p');

        $qb->Where('p.type = 2');

        $query = $qb->getQuery();

        $persons = $query->getResult();

        $response = array();
        foreach ($persons as $person) {
            $response[] = $person->getfullname();
        }

        return new JsonResponse($response);
    }

    /**
     * Json3 all person entities
     *
     * @Route("/json3", name="person_json3")
     * @Method({"GET", "POST"})
     */
    public function json3Action(Request $request) {
        $xnp = $request->query->get('n', '');

        $em = $this->getDoctrine()->getManager();

        $repository = $this->getDoctrine()->getRepository(Person::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->Where('p.type = 2');
        $qb->andWhere("p.fullname = :xnp");
        $qb->setParameter(':xnp', $xnp);

        $query = $qb->getQuery();
        $persons = $query->getResult();

        $response = array();

        if ($persons) {
            $xidp = $persons[0]->getIdperson();

            $repository1 = $this->getDoctrine()->getRepository(Person::class);
            $qb1 = $repository1->createQueryBuilder('c');
            $qb1->Where('c.type = 3');
            $qb1->andWhere("c.parentid = :xidp");
            $qb1->setParameter(':xidp', $xidp);

            $query1 = $qb1->getQuery();
            $childs = $query1->getResult();

            foreach ($childs as $child) {
                $response[] = $child->getfullname();
            }
        }

        return new JsonResponse($response);
    }

    /**
     * Jsonp all person phones
     *
     * @Route("/jsonp", name="person_jsonp")
     * @Method({"GET", "POST"})
     */
    public function jsonpAction(Request $request) {
        $xnp = $request->query->get('n', '');

        $em = $this->getDoctrine()->getManager();

        $repository = $this->getDoctrine()->getRepository(Person::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->Where("p.fullname = :xnp");
        $qb->setParameter(':xnp', $xnp);

        $query = $qb->getQuery();
        $persons = $query->getResult();

        $response = array();

        if ($persons) {
            $xidp = $persons[0]->getIdperson();

            $repository1 = $this->getDoctrine()->getRepository(Phone::class);
            $qb1 = $repository1->createQueryBuilder('ph');
            $qb1->innerJoin('AppBundle:PersonPhone', 'pp', 'WITH', 'ph.idphone = pp.idphone');
            $qb1->innerJoin('AppBundle:Person', 'p', 'WITH', 'p.idperson = pp.idperson');
            $qb1->Where('p.idperson = :xidp');
            $qb1->setParameter(':xidp', $xidp);

            $query1 = $qb1->getQuery();
            $childs = $query1->getResult();

            foreach ($childs as $child) {
                $response[] = $child->getnumber();
            }
        }

        return new JsonResponse($response);
    }

    /**
     * Creates a new person entity.
     *
     * @Route("/new", name="person_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $person = new Person();
        $form = $this->createForm('AppBundle\Form\PersonType', $person);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();

            return $this->redirectToRoute('person_show', array('idperson' => $person->getIdperson()));
        }

        return $this->render('person/new.html.twig', array(
                    'person' => $person,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a person entity.
     *
     * @Route("/{idperson}", name="person_show")
     * @Method("GET")
     */
    public function showAction(Person $person) {
        $deleteForm = $this->createDeleteForm($person);

        return $this->render('person/show.html.twig', array(
                    'person' => $person,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing person entity.
     *
     * @Route("/{idperson}/edit", name="person_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Person $person) {
        $deleteForm = $this->createDeleteForm($person);
        $editForm = $this->createForm('AppBundle\Form\PersonType', $person);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('person_edit', array('idperson' => $person->getIdperson()));
        }

        return $this->render('person/edit.html.twig', array(
                    'person' => $person,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a person entity.
     *
     * @Route("/{idperson}", name="person_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Person $person) {
        $form = $this->createDeleteForm($person);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($person);
            $em->flush();
        }

        return $this->redirectToRoute('person_index');
    }

    /**
     * Creates a form to delete a person entity.
     *
     * @param Person $person The person entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Person $person) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('person_delete', array('idperson' => $person->getIdperson())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
