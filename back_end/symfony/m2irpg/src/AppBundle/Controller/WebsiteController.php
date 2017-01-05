<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Student as Student;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route as Route;


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
	
		// on récupère tout les étudiants stockés en base de données
		$students = $this->getDoctrine()->getRepository('AppBundle:Student')->findAll();
		
		// on construit un tableau vide
		$list = array();
		
		// puis on boucle sur l'ensemble des étudiants que l'on a récupéré.
		foreach( $students as $current_student )
		{
			// on ajoute à l'intérieur de la liste, le prénom de chacun des étudiants
			$list[]=$current_student->getFirstName();
		}
		
		// et notre code refonctionne
		if ( !in_array($student_name, $list) )
		{
			// on crée un nouvel objet de type student
			// en langage symfony, on crée donc une nouvelle entité
			// ce qui va correspondre à une nouvelle entrée dans 
			// notre table "students"
			$student = new Student();
			
			// on définit la valeur du prénom
			$student->setFirstName($student_name);
			
			// puis la valeur du nom 
			$student->setLastName('m2i');
			
			
			/*
			* ici on récupère un objet ( le manager ) qui nous permet
			* de piloter Doctrine
			*/
			$manager = $this->getDoctrine()->getManager();
			
			// On précise à Doctrine que l'on souhaite stocker
			// au moins, de façon temporaire, l'objet  nouvellement crée
			// ( sa durée de vie de base, sera celle de la session
			$manager->persist($student);
			
			// Pour chaque objet stocké en session, on peut éventuellement
			// le rentrer en base de données à l'aide de la méthode 'flush'
			$manager->flush();
			
			$list[]= $student_name;
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