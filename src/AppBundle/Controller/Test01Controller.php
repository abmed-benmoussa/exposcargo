<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class Test01Controller extends Controller
{
    /**
     * @Route("/add")
     */
    public function addAction()
    {
        return $this->render('AppBundle:Test01:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Test01:show.html.twig', array(
            // ...
        ));
    }

}
