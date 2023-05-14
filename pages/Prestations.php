<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prestations</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/style_prestations.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
	<header>
		<div id="logo"><a href="../Accueil.php"></a></div>
		<div id="menu">
			<a href="../Accueil.php">Accueil</a>
			<a href="#">Prestations</a>
			<a href="Ecole.php">Ecole</a>
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
			<a href="#">Prestations</a>
			<a href="Ecole.php">Ecole</a>
			<a href="Cours.php">Cours</a>
			<a href="#contact">Contact</a>
		</div>
	</header>
	<div id="T-accueil">
		<h1>Prestations</h1>
	</div>
    <div id="main">
		<h2>Découvrez ci-dessous les perstations de l'Institut Perle</h2>
		<div id="epil" class="prest">
			<img src="../images/Epilations.jpg" alt="" class="img1">
			<div class="text">
				<h3>Epilations</h3>
				<p>L'institut Perle propose des épilations à la cire ou électriques. N'hésitez pas à demander conseil à notre esthéticienne diplômée!</p>
			</div>
		</div>
		<div id="soinsv" class="prest">
			<div class="text">
				<h3>Soins visage</h3>
				<p>Dans notre institut vous sont proposés différents soins du visage personnalisés avec des produits de qualité, des traitements anti-âge mais aussi de la teinture de cils/sourcils ou encore des maquillages.</p>
			</div>
			<img src="../images/Soins_Visage.jpg" alt="" class="img2">
		</div>
		<div id="soinsc" class="prest">
			<img src="../images/Massage_Jambe.jpg" alt="" class="img1">
			<div class="text">
				<h3>Soins corps</h3>
				<p>Venez vous détendre dans notre institut en choisissant l'un de nos massages, peelings ou encore enveloppements corporels. L'institut Perle propose également des cures anticellulite avec l'appareil Lumicell Wave 6.</p>
			</div>
		</div>
		<div id="model" class="prest">
			<div class="text">
				<h3>Modelage d'ongles</h3>
				<p>Nous proposons des manucures pour vos mains ainsi que pour vos pieds avec notamment de la pose de gel mais aussi des peelings ou de la pose de vernis simple.</p>
			</div>
			<img src="../images/Soins_Ongles.jpg" alt="" class="img2">
		</div>
		<div id="solar" class="prest">
			<img src="../images/Solarium.jpg" alt="" class="img1">
			<div class="text">
				<h3>Solarium</h3>
				<p>Profitez de séances de 30 minutes de bronzage en solarium. Découvrez également l'offre d'abonnement pour 11 séances.</p>
			</div>
		</div>
		<h3 id="listdownload">Obtenez la liste de prix en téléchargeant le fichier ci-dessous. <br>
		Cliquez simplement sur l'image.</h3>
		<a href="../files/Liste de prix.pdf" target="_blank"><img id="download" src="../images/Liste de prix.jpg" alt=""></a>
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