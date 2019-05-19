<!DOCTYPE html>
<html>
	<head>
		<title>Entrées</title>
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
		<br/>
		<div>
			<form style="border:2px solid #32CD32">
			<mark><center><h1>Les Entrées</h1></center></mark>
			</form>
			<br/>
			<center> <img src="entree.jpg" alt="Soupe veloutée à la carotte"> </center>
			<br/>
				<form style="border:1px solid #32CD32">
					<mark><p class="oblique">Etape 1 :</p>

					<p class="thick">Éplucher les carottes et les couper en rondelles pas trop grosses afin qu'elles cuisent plus vite.</p>

					<p class="oblique">Etape 2 :</p>
					<p class="normal">Découper le poireau en morceaux ainsi que l'oignon, puis écraser la gousse d'ail. </p>

					<p class="oblique">Etape 3 :</p>
					<p class="normal">Faire revenir tous les légumes dans la marmite 5 min dans 3 cuillères à soupe d'huile d'olive.</p>
					
					<p class="oblique">Etape 4 :</p>
					<p class="normal">Préparer le bouillon de volaille puis le verser sur les légumes.</p>

					<p class="oblique">Etape 5 :</p>
					<p class="normal">Au 1er bouillon, baisser la cuisson sur feu moyen et laisser.</p>
					
					<p class="oblique">Etape 6 :</p>
					<p class="normal">Cuire ainsi pendant au moins 1h15.</p>

					<p class="oblique">Etape 7 :</p>
					<p class="normal">Surveiller de temps en temps afin de vérifier qu'il ne manque pas de l'eau. Allonger le temps de cuisson si les carottes ne sont pas assez cuites pour être mixées.</p>
					
					<p class="oblique">Etape 8 :</p>
					<p class="normal">Une fois tous les légumes cuits, mixer puis ajouter la crème liquide. Mixer de nouveau.</p>

					<p class="oblique">Etape 9 :</p>
					<p class="normal">Équeuter le persil, puis l'ajouter dans la soupe (ne pas le faire cuire en même temps que les autres légumes). Ajouter la cuillère à soupe de cumin, puis mixer encore une fois.</p>
					
					<p class="oblique">Etape 10 :</p>
					<p class="normal">Saler et poivrer selon votre goût.</p>

					<p class="oblique">Ingrédients pour 4 personnes :</p>
					<p class="normal">	6 carottes<br/>
										1 oignon<br/>
										1 poireau<br/>
										1 gousse d'ail<br/>
										3 cuillères à soupe de huile d'olive<br/>
										1 cuillère à soupe de cumin en poudre<br/>
										1/2 botte de persil<br/>
										20 cl de crème liquide<br/>
										1.5 l d'eau<br/>
										1 cube de bouillon de volaille<br/>
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
