<?php
include("config.php");
$req='INSERT INTO `contacte`(`nom`, `tel`, `mail`, `msg`) VALUES ("'.$_POST['nom'].'","'.$_POST['tel'].'","'.$_POST['mail'].'","'.$_POST['msg'].'");';
mysql_query($req);

header("location:contacte.php");
?>
