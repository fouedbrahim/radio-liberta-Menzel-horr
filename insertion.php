<?php include("config.php");
 
 	
			$email=$_POST['email'];
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$pass=$_POST['pass'];
			
			
		$req="INSERT INTO `utilisateur`(`nom`, `prenom`, `email`, `pass`) VALUES ('$nom',$prenom,'$email','$pass');";
		
		
			mysql_query($req);
			header("location:forum.php");
          ?>