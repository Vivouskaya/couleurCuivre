<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
    	$carousel = $this->getDoctrine() ->getRepository('HomeBundle:carousel')->findAll();

        return $this->render('HomeBundle:Home:home.html.twig', array('carousel' => $carousel));
    }

    public function adminAction()
    {
    	$carousel = $this->getDoctrine() ->getRepository('HomeBundle:carousel')->findAll();
        return $this->render('HomeBundle:Home:admin.html.twig', array('carousel' => $carousel));
    }
}
