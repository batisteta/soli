 <!DOCTYPE html>
<html>
	<head>
		<title>Nos plats</title>
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
		<div>
			<br/>
			<form style="border:2px solid #32CD32">
			<center><h1>Les plats</h1></center>
			</form>
			<br/>
			<center> <img src="burger.jpg" alt="burger"> </center>
			<br/>
				<form style="border:1px solid #32CD32">
					<mark><p class="oblique">Le burger, ce n'est plus seulement du pain, une tranche de fromage insipide et un steak. Découvrez comment faire de vrais bons burgers maison avec nos idées.</p>

					<p class="thick">Ce plat, icône de la fast food à l’américaine, a su se tailler la part du lion dans le pays de la gastronomie qu’est la France. Rares sont les restaurants et les brasseries qui ne proposent pas au moins un burger à la carte. Si dans un premier temps, le burger est cantonné à la restauration rapide, il est adopté par les chefs qui lui apportent une french touch. Il est mis à la mode locale avec à l’intérieur des fromages bien de chez nous, des pains buns inspirés du vrai pain et des garnitures locales qui changent du classique “tomates salade oignons”. Avec nos astuces, découvrez comment faire des burgers goûtus, ici chez vous, à la maison.
					Pour des burgers carnivores</p>

					<p class="oblique">Un bon steak : </p>
					<p class="normal">Bien sûr, pour faire un bon burger, le basic numéro un est de le préparer avec un bon steak haché. Évitez de le prendre tout prêt, privilégiez plutôt de la viande hachée pour pouvoir le façonner et l'assaisonner vous même.
					Pour préparer un bon steak à burger, commencez par placer la viande dans un récipient et ajoutez une bonne pincée de sel. Ensuite, c’est selon chacun, vous pouvez incorporer une pincée de paprika doux, d’épices à chili, de piment d’Espelette, d’ail ou de poivre pour relever un peu le goût.</p>

					<p class="oblique">Du bacon :</p>
					<p class="normal">Même s’il n’est pas indispensable, le bacon grillé est un ingrédient classique des burgers. Surtout ne choisissez pas le bacon ronds présent dans les rayons, mais bien de la poitrine fumée en lamelles. Il ne vous reste plus qu’à les faire dorer au four pour qu’elles deviennent croustillantes.</p>

					<p class="oblique">Du poulet :</p>
					<p class="normal">Si vous n’êtes pas très viande rouge, vous pouvez opter pour du chicken fries, un filet de blanc de poulet pané dans de la chapelure dorée. Le secret pour que votre panure tienne bien à la cuisson : après avoir trempé les filets dans la farine, l’oeuf et la chapelure, laissez les reposer au frais 30 minutes avant de les cuire.
					Pour une recette plus light et moins grasse, misez sur des blancs de poulet émincés. Auparavant, faites mariner la viande dans un mélange jus de citron, d’huile d’olive, de thym et de romarin pour parfumer le poulet.</p>
					</mark>
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
