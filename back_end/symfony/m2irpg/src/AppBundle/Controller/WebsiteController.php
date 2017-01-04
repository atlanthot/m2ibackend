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
	
	public function galery($img_id)
	{
		$images = array(
			'http://fr.web.img2.acsta.net/c_215_290/pictures/15/04/09/12/10/228112.jpg',
			'https://mi-od-live-s.legocdn.com/r/www/r/starwars/-/media/franchises/starwars2015/misc/tfa_cta_744x421.jpg?l.r2=-521045527',
			'https://media.starwars.ea.com/content/starwars-ea-com/fr_FR/starwars/battlefront/news-articles/collect-iconic-heroes-and-dominate-the-universe-in-star-wars-gal/_jcr_content/featuredImage/renditions/rendition1.img.jpg',
			'http://img.lum.dolimg.com/v1/images/starwars_551c43f4.jpeg'
		);
		
		return $this->render('galery.html.twig', 
								array(
									'section_title'=>'galery',
									'img_list' => $images,
									'img_id'=>$img_id
								)
							);
	}
	
	
}