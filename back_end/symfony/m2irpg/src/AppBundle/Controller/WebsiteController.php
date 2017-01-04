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
        return $this->render('home.html.twig', array(
			'section_title'=>'home'
		));
    }
    /**
     * @Route("/contact")
     */
    public function contact()
    {
		return $this->render('contact.html.twig', array(
			'section_title'=>'contact'
		));
    }
    /**
     * @Route("/products")
     */
    public function products()
    {
		return $this->render('products.html.twig', array(
			'section_title'=>'products'
		));
    }
	
    /**
	 * Matches /forum exactly
	 *
     * @Route("/forum", name="forum_no_post")
     */
    public function forumNoPost()
    {
		return $this->render('forum.html.twig', array(
			'section_title' => 'forum',
			'post_id'=>'pas de post id'
		));
    }
    
    /**
	 * Matches /forum/*
	 *
     * @Route("/forum/{post_id}", name="forum_post")
     */
    public function forumPost($post_id)
    {
		return $this->render('forum.html.twig', array(
			'section_title' => 'forum',
			'post_id'=>$post_id
		));
    }
    
    /**
     * @Route("/classroom")
     */
    public function classroom()
    {
		return $this->render('classroom.html.twig', array(
			'section_title' => 'classroom',
			'students_list' => array(
			
				'Christophe',
				'Frédéric',
				'Johann',
				'Mohammed',
				'Nicolas',
				'Richard',
				'Thomas',
				'Adberrahmane',
				'Alexandre',
				'Rudy',
				'Younes',
				'Farid',
				'Melissa'
				
			)
		));
    }
}