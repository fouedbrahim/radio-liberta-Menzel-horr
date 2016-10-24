<?php
include("config.php");

$req='select * from utilisateur where email="'.$_POST['email'].'" and pass="'.$_POST['passadmin'].'";';
mysql_query($req);
$resultat = mysql_query($req);
$nb =mysql_num_rows($resultat);
if ($nb!=0)
header("location:gestion_act.php");
else 

header("location:index.php?err=1");
?>