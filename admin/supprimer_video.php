<?php
include("config.php");

$req='Delete from `videos` where `lien`="'.$_GET['lien'].'";';
if(mysql_query($req))
{

header('Location:gest_videos.php');
}
else 
	echo 'not Done';
?>
