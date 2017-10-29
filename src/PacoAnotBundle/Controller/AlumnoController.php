<?php

namespace PacoAnotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/alumnos")
 */
class AlumnoController extends Controller
{
    /**
     * @Route("/", name="alumnos_home")
     */
    public function indexAction()
    {
        return $this->render('PacoAnotBundle:Alumno:index.html.twig');
    }
}
