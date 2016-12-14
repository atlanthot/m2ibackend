<?php 

session_start() ;

$min = 0 ;
$max = 100 ;
$message = '' ;

if(isset($_POST['choix']))
{
	$choix = $_POST['choix'] ;
	$nombreMystere = $_SESSION['nombreMystere'] ;
	
	if($choix > $nombreMystere)
	{
		$message = "Le nombre mystère est plus petit" ;
	}

	if($choix < $nombreMystère)
	{
		$message = "Le nombre mystere est plus grand" ;
	}
	
	else
	{
		$message = "Bravo" ;
	}
	
	$_SESSION['count'] ++ ;
}
else
{
	$_SESSION['count'] = 0 ;
	$_SESSION['nombreMystere'] = rand($min, $max) ;	
}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>	Plus Ou Moins </title>
	</head>
	<body>
		<h1> Le nombre Mystère <em>entre <?= $min ?> et <?= $max ?> <em></h1>
		<h2> <?= $message ?> </h2>
		<h3> <?= $_SESSION['count'] ?> essais </h3>
		<form method="post">
			<input type="number" name="choix">
			<input type="submit">
		</form>
	</body>
</html>