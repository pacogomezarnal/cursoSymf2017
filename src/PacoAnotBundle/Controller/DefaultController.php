<?php

namespace PacoAnotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="pacoanot_home")
     */
    public function indexAction()
    {
        return $this->render('PacoAnotBundle:Default:index.html.twig');
    }
}
