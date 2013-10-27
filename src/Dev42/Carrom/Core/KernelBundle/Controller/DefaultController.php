<?php

namespace Dev42\Carrom\Core\KernelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Dev32CarromKernelBundle:Default:index.html.twig', array('name' => $name));
    }
}
