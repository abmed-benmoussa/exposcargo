<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\Form\UserRegistrationForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{

    /**
     * @Route("/register", name="users_register")
     */
    public function registerAction(Request $request)
    {

        $form = $this->createForm(UserRegistrationForm::class);
        return $this->render('registration/register.html.twig', [
            'form' => $form->createView()
        ]);

        $form = $this->createForm(UserRegistrationForm::class);
        $form->handleRequest($request);
        if ($form->isValid()) {
            /** @var User $user */
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', 'Welcome '.$user->getEmail());
            return $this->redirectToRoute('homepage');
        }
        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
