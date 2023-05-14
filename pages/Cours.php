<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cours</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/style_cours.css">
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
			<a href="#">Cours</a>
			<a href="#contact">Contact</a>
		</div>
	</header>
	<div id="T-accueil">
		<h1>Programmes de cours</h1>
	</div>
    <div id="main">
		<p>Dans leurs descriptifs et buts en général, nous sommes persuadés que ces propositions vous intéressent car elles vous guideront vers le progrès et le succès.</p>
		<div class="cours">
			<h2>Styliste Ongulaire</h2>
			<p>Pour ce cours de styliste ongulaire, nous vous prions de vous présenter avec un modèle sans faux-ongles. <br>
			Avec kit de départ compris dans le prix
			</p>
			<h3>Prix du cours</h3>
			<p>CHF 2'800.-</p>
			<h3>Prix du cours pour élèves de l'école</h3>
			<p>CHF 2'520.-</p>
			<h3>Durée du cours</h3>
			<p>5 semaines - 10 sessions en cours du soir.<br>
			Formation individuelle possible en journée sur demande.</p>
			<img src="" alt="">
		</div>
		<div class="cours">
			<h2>Drainage lymphatique</h2>
			<p>Le drainage lymphatique (détoxification du corps) est un massage effectué par des mouvements légers bien spécifiques sur le corps entier et agit notamment sur le système ganglionnaire en aidant au retour de la circulation veineuse. Il est excellent pour le maintient de la santé car il revitalise et facilite la circulation de l'énergie vitale nécessaire à notre bien-être et notre santé.
			</p>
			<h3>Prix du cours</h3>
			<p>CHF 1'200.-</p>
			<img src="" alt="">
		</div>
		<div class="cours">
			<h2>Massage aux pierres chaudes et froides</h2>
			<p>Le massage aux pierres chaudes et froides et un massage relaxant par excellence, mais également thérapeutique, qui vise l'équilibration des énergies, l'harmonisation globale du métabolisme, la détente musculaire, il supprime également les tensions, dissout le stress et rétablit l'harmonie entre le corps, le mental et l'esprit!
			</p>
			<h3>Prix du cours</h3>
			<p>CHF1800.-, avec set pierre chaude complet</p>
			<img src="" alt="">
		</div>
		<div class="cours">
			<h2>Epilation électrique</h2>
			<p>L'épilation électrique permet d'enlever les poils disgracieux et indérisables du visage et du corps. Au moyen d'une fine aiguille et d'un courant à faible intensité, on procède à l'ablation du poil dans son bulbe.
			</p>
			<img src="" alt="">
		</div>
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