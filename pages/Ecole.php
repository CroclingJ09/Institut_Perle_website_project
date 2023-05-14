<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ecole</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/style_ecole.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
	<header>
		<div id="logo"><a href="../Accueil.php"></a></div>
		<div id="menu">
			<a href="../Accueil.php">Accueil</a>
			<a href="Prestations.php">Prestations</a>
			<a href="#">Ecole</a>
			<a href="Cours.php">Cours</a>
			<a href="#contact">Contact</a>
		</div>
		<div id="toggle" onClick="menu()">
			<a href="#">
				<i class="fas fa-bars"></i>
			</a>
		</div>
		<div id="menu-mobile">
            
			<a href="../Accueil.php">Accueil</a>
			<a href="Prestations.php">Prestations</a>
			<a href="#">Ecole</a>
			<a href="Cours.php">Cours</a>
			<a href="#contact">Contact</a>
		</div>
	</header>
	<div id="T-accueil">
		<h1>Ecole en soins esthétiques</h1>
	</div>
    <div id="main">
		<p>C'est avec plus de 25 ans d'expérience dans les soins esthétiques, dont 17 ans également en tant qu'experte dans une école privée, que tout naturellement, Nathalie Piaget Shala souhaite aujourd'hui transmettre son expérience et sa passion. C'est pourquoi elle décide d'ouvrir sa propre école en soins esthétiques à Colombier, dans le canton de Neuchâtel qui permettra de faire une formation d'esthéticienne diplômé et international de l'INFA. Dans une ambiance sympathique et détendue, vous apprendrez les techniques nécessaires pour devenir une professionnelle de la beauté. Offrez-vous une formation d'esthéticienne de qualité et reconnue!</p>
		<img class="img" src="../images/Machine_Massage.jpg" alt="">
		<h3>Durée?</h3>
		<p>La formation dure 12 mois en cours du soir ou en demi journée en institut
		</p>
		<h3>Lieu?</h3>
		<p>Les cours ont lieu dans les locaux de l'institut Perle à Colombier, dans le canton de Neuchâtel
		</p>
		<h3>Prix?</h3>
		<p>Le prix de la formation se situe entre CHF 7'800 et CHF15'800 (voir les détails dans le formulaire d'inscription ci-dessous)
		</p>
		<h3>Prochaines sessions à venir</h3>
		<div id="register"><a href="Inscription.php" target="_blank">S'insrire à la formation</a></div>
	</div>
	<footer>
		<div id="map">
			<h2>Contact</h2>
			<h3 id="name_foot">Institut et Ecole Perle</h3>
			<p>
				Nathalie Piaget Shala <br>
				Rue César-d'Ivernois 3 <br>
				2013 Colombier <br>
				032 841 25 05
			</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2722.7212521312217!2d6.853684351411032!3d46.96716653981979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478de0fc306e3553%3A0xc61217e7f6687a03!2sPerle!5e0!3m2!1sfr!2sch!4v1652044840303!5m2!1sfr!2sch" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
		</div>
		<div id="contact">
			<h2>Nous contacter</h2>
		<form id="form" name="contact" method="post" action="pages/form.php">
        	<input type="text" name="nom" id="nom" placeholder="Nom (obligatoire)" required>
			<input type="text" name="prenom" id="prenom" placeholder="Prénom">
			<input type="email" name="email" id="email" placeholder="E-mail (obligatoire)" required>
			<textarea name="text" id="text" cols="30" rows="10" placeholder="Message (obligatoire)" required></textarea>
			<input type="submit" name="envoyer" id="envoyer" value="Envoyer">
		</form>
			
			
		</div>
	</footer>
	<script type="text/javascript">
		function menu(){
			var menu_mobile=document.getElementById("menu-mobile");
			menu_mobile.classList.toggle("open");
		}
	</script>
</body>
</html>