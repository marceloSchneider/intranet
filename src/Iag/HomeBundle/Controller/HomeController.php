<?php

namespace Iag\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function IndexAction()
    {
        return $this->render('IagHomeBundle:Home:index.html.twig');
    }
}