<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
    	$carousel = null;

        return $this->render('HomeBundle:Home:home.html.twig', array('carousel' => $carousel));
    }

    public function adminAction()
    {
    	$carousel = null;
        return $this->render('HomeBundle:Home:admin.html.twig', array('carousel' => $carousel));
    }
}
