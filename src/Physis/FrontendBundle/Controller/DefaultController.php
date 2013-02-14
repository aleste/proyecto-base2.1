<?php

namespace Physis\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        
        
         // Nuevo en Sf2.1:
         // No es necesario indicar el template que debe renderizar. Cuando se especifica 
         // @Template() toma el template por defecto en funcion al nombre del Action)        
         // $this->render('FrontendBundle:Default:index.html.twig')

        return array();
    }

    public function cargaConAjaxAction()
    {
        
        return $this->render('FrontendBundle:Default:contenido_ajax.html.twig');
    }
}
