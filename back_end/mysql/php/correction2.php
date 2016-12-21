<?php

// on initialise les variables qui vont nous permettre de nous connecter
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

if( 
	isset($_POST['weapon_name']) 	&& !empty($_POST['weapon_name']) &&
	isset($_POST['weapon_price']) 	&& !empty($_POST['weapon_price']) &&
	isset($_POST['weapon_weight']) 	&& !empty($_POST['weapon_weight']) &&
	isset($_POST['weapon_power']) 	&& !empty($_POST['weapon_power']) &&
	isset($_POST['weapon_type']) 	&& !empty($_POST['weapon_type'])
)
{
	// ici, je suis sur d'avoir toutes les données avec lesquelles je souhaite travailler
	
	$sql = "INSERT INTO weapons (name,type,price,weight,power) ";
	$sql .= "VALUES('".$_POST['weapon_name'].
			"','".$_POST['weapon_type'].
			"',".$_POST['weapon_price'].
			",".$_POST['weapon_weight'].
			",".$_POST['weapon_power'].
			") ";
		
	// on éxécute la requête SQL
	$statement 	= $pdo->query($sql);
}


if( 
	isset( $_POST['weapon_delete_ids'] ) && 
	!empty($_POST['weapon_delete_ids'])
)
{
	$weapon_ids = explode(",", $_POST['weapon_delete_ids']);
	
	/*
	foreach( $weapon_ids as $current_weapon_id )
	{
		$sql = "DELETE FROM weapons WHERE id=".(int)($current_weapon_id);
		$pdo->query($sql);
	}
	*/
	
	
	$sql = "DELETE FROM weapons WHERE ";
	$counter = 0;
	
	foreach( $weapon_ids as $current_weapon_id )
	{
		if ( $counter > 0 )
		{
			$sql .= " OR ";
		}
		$sql .= "id=".(int)($current_weapon_id);
		$counter++;
	}
	
	
	echo $sql;
	//$pdo->query($sql);
}


$sql 			= "SELECT * FROM weapons";
$statement 		= $pdo->query($sql);
$weapons_data 	= $statement->fetchAll();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
	
	
	
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<label>Nom: </label>
		<input type="text" name="weapon_name"/>
		<br/>
		
		<label>Type: </label>
		<input type="text" name="weapon_type"/>
		<br/>
		
		<label>Puissance: </label>
		<input type="text" name="weapon_power"/>
		<br/>
		
		<label>Poids: </label>
		<input type="text" name="weapon_weight"/>
		<br/>
		
		<label>Prix: </label>
		<input type="text" name="weapon_price"/>
		<br/>
		
		<input type="submit" value="OK" />
		
	</form>
	
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<label>Identifiants de lignes às supprimer (séparateur: ","): </label>
		<input type="text" name="weapon_delete_ids"/>
		<br/>
		
		<input type="submit" value="OK" />
		
	</form>
	
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>price</th>
			<th>weight</th>
			<th>type</th>
			<th>power</th>
		</tr>
	<?php
	
		foreach($weapons_data as $current_weapon )
		{
			echo '<tr>';
				echo '<td>'.$current_weapon['id'].'</td>';
				echo '<td>'.$current_weapon['name'].'</td>';
				echo '<td>'.$current_weapon['price'].'</td>';
				echo '<td>'.$current_weapon['weight'].'</td>';
				echo '<td>'.$current_weapon['type'].'</td>';
				echo '<td>'.$current_weapon['power'].'</td>';
			echo '</tr>';
		}
	
	?>
	</table>
	
</body>
</html>