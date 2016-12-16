<?php 
	include "Personnage.php" ;
	include "Warrior.php" ;
	include "Wizard.php" ;
	include "combat.php";
	
	$guerrier = new Warrior('Yatta', 20, 'Barbare', '5');
	$magicien = new Wizard('Albus', 15, 'Necromancien', '5', 100, 'Baton');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
		 RPG
		</title>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" >
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js" ></script>		  
	</head>
	<body>
	<div class="container">		
		<div class="carousel carousel-slider center" data-indicators="true">
			<div class="carousel-item red white-text" href="#one!">
			  <h2>Warrior</h2>
				<ul class="collection">
					<?php 
						echo '<li class="collection-item blue-text text-darken-2">'. $guerrier->name .'</li>';
						echo '<li class="collection-item blue-text text-darken-2">'. $guerrier->labor .'</li>';
						echo '<li class="collection-item blue-text text-darken-2">'. $guerrier->getPV() .'</li>';
						echo '<li class="collection-item blue-text text-darken-2">'. $guerrier->getPower() .'</li>';
					?>
				</ul>
			</div>
			<div class="carousel-item amber white-text" href="#two!">
				<h2>Wizard</h2>
				<ul class="collection">
					<?php 
						echo '<li class="collection-item blue-text text-darken-2">'. $magicien->name .'</li>';
						echo '<li class="collection-item blue-text text-darken-2">'. $magicien->labor .'</li>';
						echo '<li class="collection-item blue-text text-darken-2">'. $magicien->getPV() .'</li>';
						echo '<li class="collection-item blue-text text-darken-2">'. $magicien->getPower() .'</li>';
						echo '<li class="collection-item blue-text text-darken-2">'. $magicien->getMana() .'</li>';
						echo '<li class="collection-item blue-text text-darken-2">'. $magicien->getWandstick() .'</li>';
					?>
				</ul>
			</div>
		</div>
		<script> $('.carousel.carousel-slider').carousel({full_width: true});</script>
		<div class="container">
			<ul class="collection">
				<?php 
					combat($guerrier, $magicien);
				?>
			</ul>
		</div>
	</body>
</html>