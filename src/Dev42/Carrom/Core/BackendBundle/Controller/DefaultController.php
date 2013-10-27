<?php

namespace Dev42\Carrom\Core\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Dev42BackendBundle:Default:index.html.twig', array('name' => $name));
    }
}
