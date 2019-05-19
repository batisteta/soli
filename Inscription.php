<?php
$bdd =new PDO('mysql:host=127.0.0.1;dbname=base_solebio;charset=utf8', 'root', '');

	if(!empty($_POST['pseudo'])AND !empty($_POST['mail'])AND !empty($_POST['mot_de_passe'])AND !empty($_POST['mdpR']))
	{
	$pseudo= htmlspecialchars($_POST['pseudo']);
	$mail= htmlspecialchars($_POST['mail']);
		$mot_de_passe= md5($_POST['mot_de_passe']);
		$mdpR= md5($_POST['mdpR']);
	if($Pseudo<= 255)
		{
		$requêtemail = $bdd->prepare("Select * From utilisateurs where mail=?");
		$requêtemail ->execute(array($mail));
		$mailexist =$requêtemail ->rowCount();
			if($mailexist==0)
			{
			if($mdp== $mdpR)
				{
					$insertmbr = $bdd->prepare("INSERT INTO utilisateurs(pseudo, mot_de_passe, mail) Values(?, ?, ?)");
					$insertmbr ->execute(array($pseudo, $mot_de_passe, $mail));
					$_erreur="votre compte a bien été créé";
				}
			else
				{
					$_erreur="Les mots de passe ne correspondent pas";
				}
			}
		}
	}
?>
