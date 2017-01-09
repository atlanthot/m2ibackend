<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Student as Student;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as Controller;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AboutController extends Controller
{
   
	public function display($etudiant)
	{
		
		// on récupère l'instance de l'outil Doctrine
		$obj_doctrine = $this->getDoctrine();
		
		// ensuite on va chercher un objet qui nous permet de retrouver
		// l'ensemble des données qui nous interesse et qui sont stockées
		// en base de données
		$student_repository = $obj_doctrine->getRepository("AppBundle:Student");
		

		// on va chercher l'ensemble des étudiants contenus en bdd
		$list = $student_repository->findAll();
		$selected_student = $student_repository->findOneByFirstname($etudiant);
		
		
		return $this->render(
			'about.html.twig',
			array(
				'selected_student'=>$selected_student,
				'liste_participants'=>$list
			)
		);
	}
	
}