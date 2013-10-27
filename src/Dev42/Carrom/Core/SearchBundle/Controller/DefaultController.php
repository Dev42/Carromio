<?php

namespace Dev42\Carrom\Core\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Dev42SearchBundle:Default:index.html.twig', array('name' => $name));
    }
}
