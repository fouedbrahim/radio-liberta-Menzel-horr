<?php
			
			include("config.php");
			
			$auteur=$_POST['auteur'];
			$titre=$_POST['titre'];
			$p1=$_POST['para1'];
		    $type=$_POST['type'];
			$date=$_POST['date'];
			
			
		$req="INSERT INTO `articles blog`(`id_article`, `para1`, `titre`, `auteur`, `date`, `type`) VALUES  (null,'$p1','$titre', '$auteur','$date', '$type');";
		
		
			mysql_query($req);
			header("location:gestion_act.php");
				
			
            ?>