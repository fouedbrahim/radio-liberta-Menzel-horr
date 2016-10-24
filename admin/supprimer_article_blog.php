<?php
include("config.php");

$req='Delete from `articles blog` where `id_article`="'.$_GET['id'].'";';
if(mysql_query($req))
{

header('Location:gestion_act.php');
}
else 
	echo 'not Done';
?>
