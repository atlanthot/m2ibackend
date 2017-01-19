<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as Controller;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\JsonResponse as JsonResponse;

class WebServiceController extends Controller
{
   
    public function presentation()
	{
		$articles = $this	->getDoctrine()
							->getRepository('AppBundle:Articles')
							->findAll();
							
		$tabArticles = array();
		foreach($articles as $item) 
		{
			$tabArticles[] = array	(
										'id' => $item->getId(),
										'id_user' => $item->getId_user(),
										'title' => $item->getTitle(),
										'content' => $item->getContent(),
										'category' => $item->getCategory(),
										'creation_date' => $item->getCreationDate(),
										'modification_date' => $item->getModificationDate(),
									);
		}
		return new JsonResponse($tabArticles);
	}



	lkjdsfoigjzprefokvvn
}


llllllllllllllllll,,,,,,,,,,,,,,,,,,,,ppppppppppppppppppppppppppppppppppppp