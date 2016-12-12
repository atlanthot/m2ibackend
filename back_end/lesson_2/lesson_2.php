<?php

// renvoie un nouvel objet vide

/*
$voiture = new stdClass();


$voiture->marque = "Citroën";


echo( $voiture-> marque );

var_dump($voiture);
*/



class Voiture
{
	public $price 		= 1;
	protected $_marque 	= null;
	private $_conso 	= 1;
	
	// la fonction constructrice, peut prendre soit le nom __construct
	// soit le nom de la classe. Elle sera appelée, à chaque nouvelle
	// création d'objet.
	
	// dès qu'un paramètre possède une valeur par défaut, tout ceux qui le suivent
	// doivent également en avoir une.
	
	public function Voiture($param_price 	= 1, 
							$param_marque 	= null, 
							$param_conso 	= 1
	)
	{
		$this->price 	= $param_price;
		$this->_marque 	= $param_marque;
		//$this->_conso 	= $param_conso;
		
		$this->setConso($param_conso);
		
		echo("nouvel objet de type voiture !");
	}
	
	
	public function setConso($param_conso) // 1 - 40
	{
		// convertit la donnée en nombre flottant ( à virgule )
		$value = (float)($param_conso);
		
		if ( $value >= 1 && $value <= 40 )
		{
			$this->_conso = $param_conso;
		}
	}
	
	public function getConso()
	{
		return $this->_conso;
	}
	
	
	
	
}

$voiture_de_johann = new Voiture();

var_dump($voiture_de_johann);


