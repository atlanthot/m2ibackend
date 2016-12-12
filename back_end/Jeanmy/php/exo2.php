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
