<?php

namespace PacoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PacoBundle\Entity\Alumno;

class AlumnoController extends Controller
{
    public function indexAction()
    {
        return $this->render('PacoBundle:Default:index.html.twig');
    }
    /*
    Controlador de nombre
    */
    public function nombreAction($nombrePila=null)
    {
        return $this->render('PacoBundle:Default:nombre.html.twig',array('nPila'=>$nombrePila));
    }
    /*
    Sacar todos los alumnos
    */
    public function listaAlumnosAction()
    {
        //Devuelve la clase para interactuar con la DB
        $repository = $this->getDoctrine()->getRepository(Alumno::class);
        $alumnos = $repository->findAll();

        return $this->render('PacoBundle:Default:listaAlumnos.html.twig',array('alumnos'=>$alumnos));
    }
}
