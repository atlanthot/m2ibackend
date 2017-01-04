<?php


// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route as Route;
//use Symfony\Component\HttpFoundation\Response as Response;


class WebsiteController extends Controller
{
    
    public function home()
    {
        return $this->render('home.html.twig', array(
			'section_title'=>'home'
		));
    }
    
    public function contact()
    {
		return $this->render('contact.html.twig', array(
			'section_title'=>'contact'
		));
    }
    
    public function products()
    {
		return $this->render('products.html.twig', array(
			'section_title'=>'products'
		));
    }
	
    
    public function forum($post_id)
    {
		return $this->render('forum.html.twig', array(
			'section_title' => 'forum',
			'post_id'=>$post_id
		));
    }
    
    public function classroom($student_id)
    {
		return $this->render('classroom.html.twig', array(
			'section_title' => 'classroom',
			'student_id'	=>$student_id,
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