<?php
//renvoi un nouvel objet vide
$voiture = new stdClass();

$voiture->marque = "Citroën";

echo($voiture->marque);


//affichage de tout ce qui est dans la variable
var_dump($voiture);

class Voiture
{
	public $marque;
}

$voiture_de_johann = new Voiture();

var_dump($voiture_de_johann);


// la fonction constructrice peut prendre soit le nom__construct
//soit le nom de la classe . elle sera appelée, à chque nouvelle
//création d'objet

public function Voiture(
						$param_price = 0,
						$param_marque = null,
						$param_conso = 0
						)

{
	$this->price = $param_price;
	$this->marque = $param_marque;
	$this->conso = $param_conso;
}