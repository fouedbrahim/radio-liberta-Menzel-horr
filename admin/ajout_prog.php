<?php
			
			include("config.php");
			
			
    $p1=$_POST['p1'];
	$p2=$_POST['p2'];
	$p3=$_POST['p3'];
	$p4=$_POST['p4'];
	$jour=$_POST['jour'];
			
			
			
		$req="INSERT INTO `programme`(`jour`, `prog1`, `prog2`, `prog 3`, `prog 4`) VALUES('$jour','$p1','$p2','$p3','$p4');";
		
		
			mysql_query($req);
			header("location:prog.php");
				
			
            ?>
			