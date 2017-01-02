<?php

require_once 'config.php';

//pullitzer
//luthor

function isLogged()
{
	
	if ( 	
			isset($_SESSION['connected']) && 
			$_SESSION['connected'] == true 
	)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function login($param_pdo, $param_user, $param_passwd)
{
	$sql = 'SELECT * FROM reporters WHERE login=:login AND passwd=MD5(:passwd)';
	$statement = $param_pdo->prepare($sql);
	$statement->bindParam(':login', $param_user, PDO::PARAM_STR);
	$statement->bindParam(':passwd', $param_passwd, PDO::PARAM_STR);
	$statement->execute();
	
	$data = $statement->fetchAll();
	
	if ( count($data) < 1 )
	{
		return false;
	}
	else
	{
		return true;
	}
}


// si on reçoit des données du formulaire de connexion...
if( 
	isset($_POST['login']) &&
	!empty($_POST['login']) &&
	isset($_POST['passwd']) &&
	!empty($_POST['passwd'])
)
{
	// on va tenter de se connecter avec les identifiants
	// envoyés en paramètre
	$login_success = login($pdo, $_POST['login'], $_POST['passwd'] );
	$_SESSION['connected'] = $login_success;
	
}

// si on reçoit des données du formulaire de création de contenu...
if( 
	isLogged() == true 			&&
	isset($_POST['title']) 		&&
	!empty($_POST['title']) 	&&
	isset($_POST['content']) 	&&
	!empty($_POST['content']) 	&&
	isset($_POST['theme']) 		&&
	!empty($_POST['theme'])
)
{
	// on va insérer les données en bdd
	$sql = "INSERT INTO news (title,theme,content,date) VALUES(:title, :theme, :content, NOW() )";
	$statement = $pdo->prepare($sql);
	$statement->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
	$statement->bindParam(':theme', $_POST['theme'], PDO::PARAM_STR);
	$statement->bindParam(':content', $_POST['content'], PDO::PARAM_STR);
	$statement->execute();
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
	<?php
		if( isLogged() == false )
		{
	?>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<label>Login</label>
		<input type="text" name="login" />
		<br/>
		
		<label>Mot de passe</label>
		<input type="text" name="passwd" />
		<br/>
		
		<input type="submit" value="Se connecter"/>
	</form>
	<?php
		}
		else
		{
	?>
		
	
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<label>Titre:</label><input type="text" name="title"/><br/>
		<label>Theme:</label><input type="text" name="theme"/><br/>
		
		<label>Contenu:</label>
		<textarea name="content">
		</textarea>
		<br/>
		
		<input type="submit" value="Créer"/>
		
	</form>
	
	<?php
		}
	?>
	
</body>
</html>