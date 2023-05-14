<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Merci pour votre message</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/style_form.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
	<header>
		<div id="logo"><a href="../Accueil.php"></a></div>
		<div id="menu">
			<a href="../Accueil.php">Accueil</a>
			<a href="Prestations.php">Prestations</a>
			<a href="Ecole.php">Ecole</a>
			<a href="Cours.php">Cours</a>
			<a href="#map">Contact</a>
		</div>
		<div id="toggle" onClick="menu()">
			<a href="#">
				<i class="fas fa-bars"></i>
			</a>
		</div>
		<div id="menu-mobile">
            
			<a href="../Accueil.php">Accueil</a>
			<a href="Prestations.php">Prestations</a>
			<a href="Ecole.php">Ecole</a>
			<a href="Cours.php">Cours</a>
			<a href="#contact">Contact</a>
		</div>
	</header>
	<?php
	
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$text=$_POST['text'];
	
	if(isset($nom)){
		echo "<div id='T-accueil'>
			<h1>Merci pour votre message, ".$nom." </h1>
			<div id='listeprix'><a href='../Accueil.php'>Revenir à l'accueil</a></div>
			</div>";
	}
	?>
	<footer>
		<div id="map">
			<h2>Contact</h2>
			<h3>Institut et Ecole Perle</h3>
			<p>
				Nathalie Piaget Shala <br>
				Rue César-d'Ivernois 3 <br>
				2013 Colombier <br>
				032 841 25 05
			</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.16810507156!2d6.747432115737304!3d47.05655263380498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478de57f2fd553b9%3A0x455e7802b8e69d7b!2sRue%20des%20Envers%2043%2C%202400%20Le%20Locle!5e0!3m2!1sfr!2sch!4v1642408640862!5m2!1sfr!2sch" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</footer>
	<script type="text/javascript">
		function menu(){
			var menu_mobile=document.getElementById("menu-mobile");
			menu_mobile.classList.toggle("open");
		}
	</script>
<!--
	<div id='rep'>
		<p>Merci pour votre message, ".$prenom." ".$nom". <br>
		Voilà le message que vous nous avez écrit:</p>
		<p>".$text."</p>
	</div>
-->
</body>
</html>