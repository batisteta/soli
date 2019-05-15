<?php
$conn-mysqli_connect('localhost','root','','base_solebio') or die(mysqli_error());
$NOM=$_POST['pseudo'];
$EML=$_POST['mail'];
$PWD=$_POST['pwd'];

$req="INSERT INTO utilisateurs (mail,mot_de_passe,pseudo) values ('$NOM','$EML','$PWD')";

$res=mysqli_query($conn,$red);
?>
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
						<li><a href="Viande.php">Liste de recettes rapides</a></li>
						<li><a href="Viande.php">Nos entrées</a></li>
						<li><a href="Viande.php">Nos plats</a></li>
						<li><a href="Dessert.php">Nos desserts</a></li>
				</ul></li>
				<li class="menu-contact"><a href="Contact.php">Nous Rejoindre</a></li>
			</ul>
		</nav>
		<br/><br/>
		
	<form >
		<form style="border:1px solid #32CD32">
			<div class="container">
			<mark><h1>S'inscrire</h1></mark>
				<hr>
			<p style="color:green">	<label><b>Email</b></label>
				<br /><?php echo ($EML)?></p>
			<p style="color:green">	<label><b>Pseudo</b></label>
				
				<br /><?php echo ($NOM)?></p>
			<p style="color:green">	<label><b>Mot de passe</b></label>
				
				<br /><?php echo ($PWD)?></p>
			<p style="color:green">	<label><b>Répéter le mot de passe</b></label>
				
				<br /></p>
				<label>
				</label>
				<a href="#" style="color:dodgerblue">Terms & Privacy</a>.
				<hr>
			<p><a href="Accueil.php">Retourner à l'accueil</a></p>
			</div>
		</form>
	</form>
	</body>
	</html>
