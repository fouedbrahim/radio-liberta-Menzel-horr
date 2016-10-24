<?php
			
			include("config.php");
			
			
			
			$rep=$_POST['email'];
			
			
		$req="INSERT INTO `newsletter`(`id`, `email`) VALUES (null,'$rep');";
		
		
			mysql_query($req);
			header("location:index.php");
				
			
            ?>
			