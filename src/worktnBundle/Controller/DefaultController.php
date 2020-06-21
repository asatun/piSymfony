<?php

namespace worktnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('worktnBundle:Default:index.html.twig');
    }
}
