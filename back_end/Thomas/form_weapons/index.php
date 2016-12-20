<?php require_once 'database.php' ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Formulaire </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<h1 class="text-center">DATA Weapons</h1>
		</header>
		
		<section class="col-md-6 col-lg-6">
			<h2 class="text-center">Form</h2>
			<form action="post.php" method="POST">
				<div class="form-inline">
					<label> Name </label>
					<input type="text" class="form-control" name="name"/>
					<label> Price </label>
					<input type="number" class="form-control" name="price"/>
				</div>
				<div class="form-inline">
					<label> Weight </label>
					<input type="number" class="form-control" name="weight"/>
					<label> Power </label>
					<input type="number" class="form-control" name="power"/>
				</div>
					<input type="submit" class="btn btn-default" value="Ajouter"/>
			</form>
		</section>
		
		<section class="col-md-6 col-lg-6"> 
			<h2 class="text-center">Data Base</h2>
			<article class="row">
			<form method="post" action="remove.php">
			<table class="table table-striped">
				<?php
					$sql = 'SELECT * FROM pyrates_weapons';
				
					$statement = $pdo->query($sql);

					if( $statement === false )
					{
						var_dump($pdo->errorInfo());
					}
					else
					{
						$statement->execute();
						$data = $statement->fetchAll();
						
						foreach($data as $currentRow )
						{
							echo '<tr>';
								echo '<td>'. $currentRow['id'] .'</td>';
								echo '<td>'. $currentRow['name'] .'</td>';
								echo '<td>'. $currentRow['price'] .'</td>';
								echo '<td>'. $currentRow['weight'] .'</td>';
								echo '<td>'. $currentRow['power'] .'</td>';
								echo '<td>'. $currentRow['power'] .'</td>';
								echo '<td><input type="checkbox" class="form-check-input" value="'. $currentRow['id'] .' "name="'. $currentRow['id'] .'"></td>';
							echo '</tr>';
						}	
					}
				?>
			<tr>
			<td>
				<input type="submit" value="effacer"/>
			</td>
			<tr>
			</table>
			</form>
			</article>
		</section>
	</body>
</html>