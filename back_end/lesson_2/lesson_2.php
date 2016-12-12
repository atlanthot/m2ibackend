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
	public $price 		= 1; // tout le monde peut utiliser cette propriété
	
	protected $_marque 	= null; //  les classes filles pourront utiliser cette propriété mais pas les élements à l'extérieur de l'objet
	
	private $_conso 	= 1; // les classes filles ne pourront pas utiliser cette propriété
	
	
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
		
		echo("nouvel objet de type voiture ! <br/> <br/>");
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
	
	protected function _startEngine()
	{
		echo 'allume le moteur <br/>';
	}
	
	protected function _startLights()
	{
		echo 'allume les phares <br/>';
	}
	
	protected function _stopEngine()
	{
		echo 'allume le moteur <br/>';
	}
	
	protected function _stopLights()
	{
		echo 'allume les phares <br/>';
	}
	
	
	public function start()
	{
		echo "*********** demarre la voiture ************* <br/>";
		$this->_startEngine();
		$this->_startLights();
		echo "******************************************** <br/>";
	}
	
	public function stop()
	{
		echo "*********** stoppe la voiture ************* <br/>";
		$this->_stopEngine();
		$this->_stopLights();
		echo "******************************************** <br/>";
	}
	
	
}


class Batmobile extends Voiture
{
	
	public function Batmobile(
							$param_price 	= 1, 
							$param_marque 	= null, 
							$param_conso 	= 1
	)
	{
		parent::Voiture($param_price, $param_marque, $param_conso);
		
		echo '<h1>en fait je suis une batmobile ! </h1><br/>';
	}
	
	
	protected function _startBatRockets()
	{
		echo 'allume les batrockets ! <br/>';
	}
	
	// surcharge de la fonction parente
	public function start()
	{
		/*
		parent::start();
		$this->_startBatRockets();
		*/
		
		echo "*********** demarre la batmobile ************* <br/>";
		$this->_startEngine();
		$this->_startLights();
		$this->_startBatRockets();
		echo "******************************************** <br/>";
	}
	
}

$batmobile = new Batmobile();

$batmobile->start();
$batmobile->stop();


/*

coder une méthode _stopBatRockets sur la classe Batmobile.
Surcharger la méthode stop et utiliser _stopBatRockets à l'intérieur.
*/



