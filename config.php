<?php
			mysql_connect("127.0.0.1","root","") or die ("connexion impossible".mysql_error());
			mysql_select_db("liberta");

//Nom dutilisateur de ladministrateur
$admin='admin';

/******************************************************
----------------Configuration Optionelle---------------
******************************************************/

//Nom du fichier de laccueil
$url_home = 'forum.php';

//Nom du design
$design = 'default';
//include('init.php');


/******************************************************
----------------------Initialisation-------------------
******************************************************/

		?>