<?php
include("config.php");

$req='Delete from `utilisateur` where `email`="'.$_GET['em'].'";';
if(mysql_query($req))
{

header('Location:autre.php');
}
else 
	echo 'not Done';
?>
