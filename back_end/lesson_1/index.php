<?php



$toto = "johann";
$$toto = 800; 		// == $johann = 800;


//echo($johann);



$toto = true; 
$toto = false;




// tableaux non typés, commes les variables, on peut mettre tout ce que l'on veut à l'intérieur
$toto = array(30,20,800,"johann","rudy", array());


$toto[0]; // = 30;

// tableaux en mode dictionnaire de données sous forme de paire clé / valeur
$toto = array(
	"rudy" => 100,
	"melissa" => 200,
	"farid"=> 300
);


//echo $toto["rudy"]; // affiche 100

/*

// boucle for normale 

$i 		= 0;
$max 	= count($toto);

for( $i = 0; $i < $max; $i++ )
{
	echo $toto[$i];
}

*/


foreach( $toto as $key=>$value )
{
	echo $key.":".$value."<br/>";
}






