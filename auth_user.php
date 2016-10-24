<?php
include("config.php");
$req='select * from utilisateur where email="'.$_POST['email'].'" and pass="'.$_POST['pass'].'";';
mysql_query($req);
$resultat = mysql_query($req);
$nb =mysql_num_rows($resultat);
$url=$_SERVER['HTTP_REFERER'];
if ($nb!=0)
{
$ligne=mysql_fetch_row($resultat);
session_start();


$_SESSION['login']=$_POST['email'];
$_SESSION['nom']=$ligne[0];
$_SESSION['prenom']=$ligne[1];

$_SESSION['pass']=$ligne[4];

$_SESSION['email']=$ligne[3];

}

 if($_POST['pass']=='admin.liberta' and $_POST['email']=='Radio.liberta1@gmail.com')
		{
			header("location:admin/index.php");
			
			} else header("location:index.php");
		



?>
