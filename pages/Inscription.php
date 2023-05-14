<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inscription</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/style_inscription.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
	<header>
		<div id="logo"><a href="../Accueil.php"></a></div>
		<div id="menu">
			<a href="../Accueil.php">Accueil</a>
			<a href="Prestations.php">Prestations</a>
			<a href="Ecole.php">Ecole</a>
			<a href="#">Cours</a>
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
			<a href="Ecole.php">Ecole</a>
			<a href="Cours.php">Cours</a>
			<a href="#contact">Contact</a>
		</div>
	</header>
	<div id="T-accueil">
		<h1>Programmes de cours</h1>
	</div>
    <div id="main">
  	  <form id="register" name="register" method="post" action="form.php">
		  <h3>Informations personelles</h3>
		  <p id="infos">
		  	<input type="text" id="nom" name="nom" placeholder="Nom" required>
			<input type="text" id="forename" name="prenom" placeholder="prenom" required>
			<input type="text" id="street" name="street" placeholder="Rue et no." required>
			<input type="text" id="town" name="town" placeholder="NPA, localité" required>
			<input type="text" id="phone" name="phone" placeholder="Téléphone" required>
			<input type="date" id="birth" name="birth" placeholder="Date de naissance">
		</p>
		<h3>Choix de la formation</h3>
	  	<p id="for">
		  	    <input type="radio" name="formation" value="for_1" id="for_1">
				<label>
		  	    Cours du soir 12 mois + demi-journée en institut avec clientèle: CHF 15'800
				</label>
		  	  <br>
		  	    <input type="radio" name="formation" value="for_2" id="for_2">
				<label>
		  	    Cours du soir 12 mois : CHF 7’800.</label>
		  	  <br>
  	    </p>
		<h3>Choix du paiement</h3>
		<p id="pai">
		  	  <label>
		  	    <input type="radio" name="paiement" value="pai_1" id="pai_1">
		  	    Au comptant (5% d’escompte) (payable à 10 jours, offre non cumulable)</label>
		  	  <br>
		  	  <label>
		  	    <input type="radio" name="paiement" value="pai_2" id="pai_2">
		  	    Par trimestre (à convenir lors de la signature du contrat)</label>
		  	  <br>
			<label>
		  	    <input type="radio" name="paiement" value="pai_3" id="pai_3">
		  	    Par mensualités (à convenir lors de la signature du contrat)</label>
  	    </p>  
		  	<p>Dès la réception de ce formulaire d’inscription, je prendrai contact avec vous, afin de fixer un rendez-vous pour la signature du contrat. <br>
			Je reste à votre disposition pour tout complément d’information et je vous adresse mes meilleures salutations.</p>
		  <p id="age"><i>Vous devez avoir 18 ans révolu pour pouvoir vous inscrire à la formation</i></p>
		  	<input type="submit" id="submit" value="S'inscrire à la formation">
      </form>
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