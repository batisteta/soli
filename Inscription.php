<?php
$conn-mysqli_connect('localhost','root','','base_solebio') or die(mysqli_error());
$NOM=$_POST['pseudo'];
$EML=$_POST['mail'];
$PWD=$_POST['pwd'];

$req="INSERT INTO utilisateurs (mail,mot_de_passe,pseudo) values ('$NOM','$EML','$PWD')";

$res=mysqli_query($conn,$red);
?>
