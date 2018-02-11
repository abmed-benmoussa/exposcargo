<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ChatInteractions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Chatinteraction controller.
 *
 * @Route("chatinteractions")
 */
class ChatInteractionsController extends Controller
{
    /**
     * Lists all chatInteraction entities.
     *
     * @Route("/", name="chatinteractions_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chatInteractions = $em->getRepository('AppBundle:ChatInteractions')->findAll();

        return $this->render('chatinteractions/index.html.twig', array(
            'chatInteractions' => $chatInteractions,
        ));
    }

    /**
     * Creates a new chatInteraction entity.
     *
     * @Route("/new", name="chatinteractions_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $chatInteraction = new Chatinteractions();
        $form = $this->createForm('AppBundle\Form\ChatInteractionsType', $chatInteraction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chatInteraction);
            $em->flush();

            return $this->redirectToRoute('chatinteractions_show', array('messageId' => $chatInteraction->getMessageid()));
        }

        return $this->render('chatinteractions/new.html.twig', array(
            'chatInteraction' => $chatInteraction,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a chatInteraction entity.
     *
     * @Route("/{messageId}", name="chatinteractions_show")
     * @Method("GET")
     */
    public function showAction(ChatInteractions $chatInteraction)
    {
        $deleteForm = $this->createDeleteForm($chatInteraction);

        return $this->render('chatinteractions/show.html.twig', array(
            'chatInteraction' => $chatInteraction,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing chatInteraction entity.
     *
     * @Route("/{messageId}/edit", name="chatinteractions_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ChatInteractions $chatInteraction)
    {
        $deleteForm = $this->createDeleteForm($chatInteraction);
        $editForm = $this->createForm('AppBundle\Form\ChatInteractionsType', $chatInteraction);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chatinteractions_edit', array('messageId' => $chatInteraction->getMessageid()));
        }

        return $this->render('chatinteractions/edit.html.twig', array(
            'chatInteraction' => $chatInteraction,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a chatInteraction entity.
     *
     * @Route("/{messageId}", name="chatinteractions_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ChatInteractions $chatInteraction)
    {
        $form = $this->createDeleteForm($chatInteraction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chatInteraction);
            $em->flush();
        }

        return $this->redirectToRoute('chatinteractions_index');
    }

    /**
     * Creates a form to delete a chatInteraction entity.
     *
     * @param ChatInteractions $chatInteraction The chatInteraction entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ChatInteractions $chatInteraction)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chatinteractions_delete', array('messageId' => $chatInteraction->getMessageid())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
