<?php
			
			include("config.php");
			
			
			
			$rep=$_POST['Liberta_r'];
			
			
		$req="INSERT INTO `vote`(`id`, `reponse`) VALUES (null,'$rep');";
		
		
			mysql_query($req);
			header("location:index.php");
				
			
            ?>
			