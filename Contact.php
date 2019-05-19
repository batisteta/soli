<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<nav>
			<ul> 
				<li class="menu-accueil"><a href="accueil.php">Accueil</a></li>
				<li class="menu-Recette"><a href="Nouveautes.php">Nos recettes</a>
					<ul class="submenu">
						<li><a href="Nouveautes.php">Tout savoir en video!</a></li>
						<li><a href="Entree.php">Nos entrées</a></li>
						<li><a href="Nosplats.php">Nos plats</a></li>
						<li><a href="Dessert.php">Nos desserts</a></li>
				</ul></li>
				<li class="menu-contact"><a href="Contact.php">Nous Rejoindre</a></li>
			</ul>
		</nav>
		<br/><br/>
		<form style="border:1px solid #32CD32">
			<div class="container">
			<form action="Inscription.php" method="post">
			<mark><h1>S'inscrire</h1></mark>
				<hr>
			<p style="color:green">	<label><b>Email</b></label>
				<input type="text" placeholder="Entrer un email" name="mail" required>
				<br /></p>
			<p style="color:green">	<label><b>Pseudo</b></label>
				<input type="text" placeholder="Choisissez votre pseudo" name="pseudo" required>
				<br /></p>
			<p style="color:green">	<label><b>Mot de passe</b></label>
				<input type="password" placeholder="Entrer un mot de passe" name="mot_de_passe" required>
				<br /></p>
			<p style="color:green">	<label><b>Répéter le mot de passe</b></label>
				<input type="password" placeholder="Repeter le mot de passe" name="mdpR" required>
				<br /></p>
				<label>
			<p style="color:green">	<input type="checkbox" checked="Verifier" style="margin-bottom:15px"> Se rappeler de moi
				</label></p>
				<a href="#" style="color:dodgerblue">Terms & Privacy</a>.
				<hr>
			
				<div class="clearfix">
				  <button type="button" class="cancelbtn"value="Save">Annuler</button>
				  <button type="submit" class="signupbtn" value="Save">S'enregistrer</button>
				</div>
			</div>
			</form>
		</form>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				<!-- footer !-->
		<footer>
			<div class="footer-main-div">
		
			<div class="footer-social-icons">
				<ul>
					<li><a href="https://www.facebook.com/solibio.eu/" target target="blank"><img src="logoFB.jpg"><i class="fa-facebook"></i></a></li>
					<li><a href="https://www.solibio.eu/presentation-solibio" target target="blank"><img src="soli.jpg"><i class="fa fa-solibio"></i></a></li>
					<li><a href="https://www.gralon.net/mairies-france/eure-et-loir/association-amicale-du-lycee-fulbert-chartres_W281005626.htm" target target="blank"><img src="mozi.png"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="https://www.youtube.com/watch?v=tJEVqqRPg3g" target target="blank"><img src="you.jpg"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
			<div class="footer-menu-one">
				<ul>
					<li><a href="accueil.php">Accueil</a></li>
					<li><a href="about.php">A propos de nous</a></li>
					<li><a href="Entree.php">Nos recettes</a></li>
					<li><a href="Contact.php">Nous Rejoindre</a></li>
				</ul>
			</div>
			<div class="footer-menu-two">
				<ul>
					<li><a href="Nosplats.php">Commentaires</a></li>
					<li><a href="Nouveautes.php">Nouveautés</a></li>
					<li><a href="accueil.php">Galeries</a></li>
				</ul>
			</div>
			<div class="footer-bottom">
				<p>Design by: <a href="about.php">Baptiste Lacroix</a></p>
			</div>
		</footer>
	</body>
</html>
