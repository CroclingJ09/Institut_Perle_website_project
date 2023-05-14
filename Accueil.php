<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Institut et Ecole Perle</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
	<header>
		<div id="logo"><a href="#"></a></div>
		<div id="menu">
			<a href="#">Accueil</a>
			<a href="pages/Prestations.php">Prestations</a>
			<a href="pages/Ecole.php">Ecole</a>
			<a href="pages/Cours.php">Cours</a>
			<a href="#contact">Contact</a>
		</div>
		<div id="toggle" onClick="menu()">
			<a href="#">
				<i class="fas fa-bars"></i>
			</a>
		</div>
		<div id="menu-mobile">
            
			<a href="#">Accueil</a>
			<a href="pages/Prestations.php">Prestations</a>
			<a href="pages/Ecole.php">Ecole</a>
			<a href="pages/Cours.php">Cours</a>
			<a href="#contact">Contact</a>
		</div>
	</header>
	<div id="T-accueil">
		<h1>Détendez-vous <br> dans un univers de bien être</h1>
		<div id="listeprix"><a href="files/Liste de prix.pdf" target="_blank">Télécharger la liste de prix</a></div>
	</div>
    <div id="main">
		<h2>A propos</h2>
		<p>L'institut Perle à Colombier, institut de beauté et école en soins esthétiques, vous accueille pour un moment de
		bien-être et vous offre également une formation d'esthéticienne reconnue.</p>
		<img class="img" src="images/Institut_1.jpg" alt="">
		<p>Situé dans le village de Colombier dans le canton de Neuchâtel, L'institut Perle vous accueille dans son univers de 
		bien-être. Nathalie Piaget Shala, esthéticienne diplômée, vous offre un moment de détente et de relaxation 
		en vous proposant des épilations, des soins du visage et du corps, du modelage d'ongles ou encore du maquillage permanent. 
		Profitez également des abonnements solarium afin de garder un teint bronzé tout l'été!</p>
		<p>L'institut propose également différents traitements et soins spécifiques et travaille avec les produits 
		de la marque Mary Cohr. N'hésitez pas à nous contacter pour en savoir plus!</p>
		<img class="img" src="images/Institut_2.jpg" alt="">
		<p>En 2018, Nathalie Piaget Shala ouvre également son école en soins esthétiques à Colombier, dans le canton de Neuchâtel 
		qui permettra de faire une formation d'esthéticienne.</p>
		<p>Nous proposons également des cours de massages, épilation électrique et stylisme ongulaire.</p>
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