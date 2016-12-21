<?php

header("Content-type: application/json");
// à la bdd.
$dsn = 'mysql:dbname=pyrates;host=127.0.0.1';
$user = 'root';
$password = '';

// puis on tente la connexion avec les paramètres fournis
try 
{
	// si on réussit, on obtient un objet de type PDO, qui va nous permettre
	// de manipuler la bdd
	$pdo = new PDO($dsn, $user, $password);
} 
catch (PDOException $e) 
{
	// sinon on affiche le message d'erreur qui va nous permettre de déterminer
	// pourquoi on a pas réussi à se connecter à la bdd.
	echo 'Connexion échouée : ' . $e-> getMessage();
	exit();
}


$sql 			= "SELECT * FROM weapons";
$statement 		= $pdo->query($sql);
$weapons_data 	= $statement->fetchAll();


$json			= json_encode($weapons_data);

echo $json;