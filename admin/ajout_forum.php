<?php
			
			include("config.php");
			
			
			$titre=$_POST['titre'];
			$comm=$_POST['comm'];
			
			
		$req="INSERT INTO `categories`(`id`,`name`,`description`) VALUES(null,'$titre','$comm');";
		
		
			mysql_query($req);
			header("location:gest_forum.php");
				
			
            ?>
			