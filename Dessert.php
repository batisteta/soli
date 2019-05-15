<!DOCTYPE html>
<html>
	<head>
		<title>Nos Desserts</title>
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
							<li><a href="Viande.php">Liste de recettes rapides</a></li>
							<li><a href="Viande.php">Nos entrées</a></li>
							<li><a href="Viande.php">Nos plats</a></li>
							<li><a href="Dessert.php">Nos desserts</a></li>
					</ul></li>
					<li class="menu-contact"><a href="Contact.php">Nous Rejoindre</a></li>
				</ul>
			</nav>
		<div>
			<form style="border:2px solid #32CD32">
			<mark><center><h1>Les Desserts</h1></center></mark>
			</form>
			<br/>
			<center> <img src="creme.jpg" alt="crême brûlée"> </center>
				<form style="border:1px solid #32CD32">
					<mark><p class="oblique">Etape 1 :</p>

					<p class="thick">Faire bouillir le lait, ajouter la crème et le sucre hors du feu. Ajouter les jaunes d'oeufs, mettre à chauffer tout doucement (surtout ne pas bouillir), puis verser dans de petits plats individuels.</p>

					<p class="oblique">Etape 2 :</p>
					<p class="normal">Mettre au four au bain marie et laisser cuire doucement à 180°C environ 50 minutes.</p>

					<p class="oblique">Etape 3 :</p>
					<p class="normal">Laisser refroidir puis mettre dessus du sucre roux et le brûler avec un petit chalumeau de cuisine.</p>

					<p class="oblique">Ingrédients pour 4 personnes :</p>
					<p class="normal">	3 jaunes d'oeuf<br/>
										20 cl de crème liquide<br/>
										12.5 cl de lait<br/>
										100 g de sucre </p>
				</form>
		</div>
			<br/><br/><br/>
			Nom: <input type="text" name="nom">
			<br/>
			Prénom <input type="text" name="Prénom">
			<br/>
			E-mail: <input type="text" name="email">
			<br/>
			Commentaire: <textarea name="commentaire" rows="5" cols="40"></textarea>
			<br/>
			<div class="clearfix">
				<button type="submit" class="signupbtn">Envoyer un commentaire</button>
			</div>
			<br/>
		<!-- footer !-->
		<footer>
			<div class="footer-main-div">
		
			<div class="footer-social-icons">
				<ul>
					<li><a href="https://www.facebook.com/solibio.eu/" target target="blank"><img src="logoFB.jpg"><i class="fa-facebook"></i></a></li>
					<li><a href="https://www.solibio.eu/presentation-solibio" target target="blank"><img src="soli.jpg"><i class="fa fa-solibio"></i></a></li>
					<li><a href="https://www.gralon.net/mairies-france/eure-et-loir/association-amicale-du-lycee-fulbert-chartres_W281005626.htm" target target="blank"><img src="mozi.jpg"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="https://www.youtube.com/watch?v=tJEVqqRPg3g" target target="blank"><img src="you.jpg"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
			<div class="footer-menu-one">
				<ul>
					<li><a href="accueil.php">Accueil</a></li>
					<li><a href="about.php">A propos de nous</a></li>
					<li><a href="#">Nos recettes</a></li>
					<li><a href="Contact.php">Nous Rejoindre</a></li>
				</ul>
			</div>
			<div class="footer-menu-two">
				<ul>
					<li><a href="Viande.php">Commentaires</a></li>
					<li><a href="Dessert.php">Nouveautés</a></li>
					<li><a href="accueil.php">Galeries</a></li>
				</ul>
			</div>
			<div class="footer-bottom">
				<p>Design by: <a href="about.php">Baptiste Lacroix</a></p>
			</div>
		</footer>
	</body>
</html>
