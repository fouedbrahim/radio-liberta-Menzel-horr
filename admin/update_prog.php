
<?php
include("config.php");
    $p1=$_POST['p1'];
	$p2=$_POST['p2'];
	$p3=$_POST['p3'];
	$p4=$_POST['p4'];
	$jour=$_POST['jour'];
$req="UPDATE `programme` SET `prog1`='$p1',`prog2`='$p2',`prog 3`='$p3',`prog 4`='$p4'  WHERE `jour`='$jour';";
if(mysql_query($req))
	header('Location:prog.php');
else
	echo 'error'.mysql_error();
?>