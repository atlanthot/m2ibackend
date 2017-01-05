<?php


// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route as Route;
//use Symfony\Component\HttpFoundation\Response as Response;


class WebsiteController extends Controller
{


	private function _getMenu()
	{
		$home_url 		= $this->generateUrl('home_route'			, array()	);
		$contact_url 	= $this->generateUrl('contact_route'		, array()	);
		$products_url 	= $this->generateUrl('products_route'		, array()	);
		$forum_url 		= $this->generateUrl('forum_route'			, array()	);
		$classroom_url 	= $this->generateUrl('classroomById_route'	, array('student_id'=>5)	);
		$galery_url 	= $this->generateUrl('galery_route'			, array()	);
		
		
		$menu = array( 	
						'home'=>$home_url,
						'contact'=>$contact_url,
						'products'=>$products_url,
						'forum'=>$forum_url,
						'classroom'=>$classroom_url,
						'galery'=>$galery_url
					);
					
		return $menu;
	}
    
    public function home()
    {
        return $this->render('home.html.twig', array(
			'section_title' => 'home',
			'menu'=>$this->_getMenu()
		));
    }
    
    public function contact()
    {
		return $this->render('contact.html.twig', array(
			'section_title'=>'contact',
			'menu'=>$this->_getMenu()
		));
    }
    
    public function products()
    {
		return $this->render('products.html.twig', array(
			'section_title'=>'products',
			'menu'=>$this->_getMenu()
		));
    }
	
    
    public function forum($post_id)
    {
		return $this->render('forum.html.twig', array(
			'section_title' => 'forum',
			'post_id'=>$post_id,
			'menu'=>$this->_getMenu()
		));
    }
    
    public function classroomById($student_id)
    {
		$list =  array(
			
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
				
		);
	
		if ( $student_id >= count($list) )
		{
			$student_id = count($list) - 1;
		}
		
		if ( $student_id < 0 )
		{
			$student_id = 0;
		}
	
		return $this->render('classroom.html.twig', array(
			'section_title' 	=>'classroom',
			'selected_student'	=>$list[$student_id],
			'students_list' 	=>$list,
			'menu'				=>$this->_getMenu()
		));
    } 
	 
    public function classroomByName($student_name)
    {
		$list =  array(
			
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
				
		);
		
		if ( !in_array($student_name, $list) )
		{
			$student_name = 'no_student';
		}
		
	
		return $this->render(
			'classroom.html.twig', 
			array
			(
				'section_title' => 'classroom',
				'selected_student'	=>$student_name,
				'students_list' => $list,
				'menu'=>$this->_getMenu()
			)
		);
    } 
	
	public function galery($img_id)
	{
		$images = array(
			'img/image_1.jpg',
			'img/image_2.jpg',
			'img/image_3.jpg',
			'img/image_4.jpg'
		);
		
		return $this->render(
						'galery.html.twig', 
						array(
							'section_title'=>'galery',
							'img_list' => $images,
							'img_id'=>$img_id,
							'menu'=>$this->_getMenu()
						)
		);
	}
	
	
}