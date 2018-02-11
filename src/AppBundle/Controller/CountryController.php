<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Country;
use AppBundle\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Country controller.
 *
 * @Route("country")
 */
class CountryController extends Controller
{
    /**
     * Lists all country entities.
     *
     * @Route("/", name="country_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $countries = $em->getRepository('AppBundle:Country')->findAll();

        return $this->render('country/index.html.twig', array(
            'countries' => $countries,
        ));
    }

    /**
     * Json all country entities.
     *
     * @Route("/json", name="country_json")
     * @Method({"GET", "POST"})
     */
    public function jsonAction()
    {
        $countries = $this->get('doctrine')->getRepository('AppBundle:Country')->findAll();
        $response = array();
        foreach ($countries as $country)
        {
//            $response[] = array(
                //'idcountry' => $country->getidcountry(),
                //'fullname' => $country->getfullname(),
                //$response[] = $country->getidisoalpha3() . '-' . $country->getfullname();
                $response[] = $country->getfullname();
                // other fields
//            );
        }

        //return new JsonResponse(json_encode($response));
        return new JsonResponse($response);
    }

    /**
     * Json all city entities of a country.
     *
     * @Route("/json1", name="country_json1")
     * @Method({"GET", "POST"})
     */
    public function json1Action(Request $request)
    {
        $xncountry = $request->query->get('c', '');

// $_GET parameters
//$request->query->get('name');
// $_POST parameters
//$request->request->get('name');

        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(City::class);

        $qb = $repository->createQueryBuilder('c0');
        $qb->innerJoin('AppBundle:Country', 'c1', 'WITH', 'c0.idcountry = c1.idcountry');
        //innerJoin($join, $alias, $conditionType = null, $condition = null, $indexBy = null)

        $qb->Where('c1.fullname = :xidc');
        $qb->setParameter(':xidc', $xncountry);

        $query = $qb->getQuery();

        $cities = $query->getResult();

        //$cities = $country->getcities();
        $response = array();
        foreach ($cities as $city)
        {
            $response[] = $city->getfullname();
        }
        //return new JsonResponse(json_encode($response));
        return new JsonResponse($response);
    }


    /**
     * Creates a new country entity.
     *
     * @Route("/new", name="country_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $country = new Country();
        $form = $this->createForm('AppBundle\Form\CountryType', $country);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($country);
            $em->flush();

            return $this->redirectToRoute('country_show', array('idcountry' => $country->getIdcountry()));
        }

        return $this->render('country/new.html.twig', array(
            'country' => $country,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a country entity.
     *
     * @Route("/{idcountry}", name="country_show")
     * @Method("GET")
     */
    public function showAction(Country $country)
    {
        $deleteForm = $this->createDeleteForm($country);

        return $this->render('country/show.html.twig', array(
            'country' => $country,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing country entity.
     *
     * @Route("/{idcountry}/edit", name="country_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Country $country)
    {
        $deleteForm = $this->createDeleteForm($country);
        $editForm = $this->createForm('AppBundle\Form\CountryType', $country);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('country_edit', array('idcountry' => $country->getIdcountry()));
        }

        return $this->render('country/edit.html.twig', array(
            'country' => $country,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a country entity.
     *
     * @Route("/{idcountry}", name="country_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Country $country)
    {
        $form = $this->createDeleteForm($country);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($country);
            $em->flush();
        }

        return $this->redirectToRoute('country_index');
    }

    /**
     * Creates a form to delete a country entity.
     *
     * @param Country $country The country entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Country $country)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('country_delete', array('idcountry' => $country->getIdcountry())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
