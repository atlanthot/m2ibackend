<?php


// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route as Route;
//use Symfony\Component\HttpFoundation\Response as Response;


class WebsiteController extends Controller
{
    /**
     * @Route("/home")
     */
    public function home()
    {
        return $this->render('home.html.twig', array());
    }
    /**
     * @Route("/contact")
     */
    public function contact()
    {
		return $this->render('contact.html.twig', array());
    }
    /**
     * @Route("/products")
     */
    public function products()
    {
		return $this->render('products.html.twig', array());
    }
}