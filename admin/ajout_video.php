<?php
			
			include("config.php");
			
			
			$lien=$_POST['lien'];
			$comm=$_POST['comm'];
			$type=$_POST['type'];
			
			
			
		$req="INSERT INTO `videos`(`lien`, `commentaire`,`type`) VALUES('$lien','$comm','$type');";
		
		
			mysql_query($req);
			header("location:gest_videos.php");
				
			
            ?>
			