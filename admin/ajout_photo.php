<?php
			
			include("config.php");
			
			
			$fileName = $_FILES['image']['name'];
			$comm=$_POST['comm'];
			$type=$_POST['type'];
			
			
			
		$req="INSERT INTO `gallerie`(`id`, `photo`, `commentaire`, `type`) VALUES(null,'$fileName','$comm','$type');";
		
		
			mysql_query($req);
			header("location:gest_gallerie.php");
				$fileTmpLoc = $_FILES['image']['tmp_name'];
$pathAndName = './photo/'.$fileName;

move_uploaded_file($fileTmpLoc, $pathAndName);
			
            ?>
			