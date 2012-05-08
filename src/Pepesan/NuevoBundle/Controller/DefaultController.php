<?php

namespace Pepesan\NuevoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('PepesanNuevoBundle:Default:index.html.twig', array('name' => $name));
    }
}
