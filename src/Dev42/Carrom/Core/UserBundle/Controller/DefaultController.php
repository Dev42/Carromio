<?php

namespace Dev42\Carrom\Core\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Dev42UserBundle:Default:index.html.twig', array('name' => $name));
    }
}
