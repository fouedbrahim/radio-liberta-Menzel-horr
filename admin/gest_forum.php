<!DOCTYPE html>
<html lang="en">
	<head>
	<title>espace admin</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	    
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>
	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();}	
	
	jQuery(".list-blog li:last-child").addClass("last"); 
	jQuery(".list li:last-child").addClass("last"); 

	
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
					
	</script>

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
	</head>

	<body>
<div class="spinner"></div>
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                   <ul class="nav sf-menu">
                <li><a href="index.php">Accueil</a></li>
                
                    <li><a href="gestion_act.php">gestion des actualites</a>
                     
                    </li>
                <li><a href="gest_gallerie.php">Gestion de Gallerie</a></li>
                <li><a href="gest_videos.php">Gestion de Videos</a></li>
                <li><a href="gest_forum.php">Gestion de Forum</a></li>
               
                    
                 <li><a href="messages.php">messages</a></li>
				 <li class="sub-menu"><a href="#">Radio </a>
                      <ul>
                    <li><a href="autre.php">administration  </a></li>
                    <li><a href="prog.php">programme</a></li>
                    
                  </ul>
                    </li>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">       
  <!--============================== content =================================-->      
   <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="container">
          <div class="row">
        
         <div class="inner-1">  
         
        
						<strong>Gestion des reponse de forum</strong>
                       
<form action="modifier_reponse_admin.php" method="post"> <br /> <br />
		      <table width="100%" border="1" class="categories_table">
				        <tr>
				          <td> id_reponse</td>
				          <td>auteur</td>
				          <td><strong>REPONSE</strong></td>
				          <td>date modification</td>
				          
				           
                            <td>supprimer reponse</td>
			            </tr>
				        <?php
			include('config.php');
			$req="SELECT * FROM `forum_reponses`;";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			?>
				        <tr>
				          <td><?php echo $ligne[0] ?></td>
				          <td><?php echo $ligne[1] ?></td>
				          <td><?php echo $ligne[2] ?></td>
				          <td><?php echo $ligne[3] ?></td> 
				         
				          <td><a href="supprimer_reponse_forum.php?id=<?php echo $ligne[0]?>" >supprimer</a></td>
			            </tr>
				        <?php
			}
			?>
			          </table>
                      
                      
                      </form>
                    <legend><strong>gestion des Sujets</strong></legend><table width="100%" border="1" class="categories_table">
  <tr>
    <td>id_sujet</td>
    <td>auteur_sujet</td>
    <td>titre sujet</td>
    <td>date</td>
    <td>gestion des sujets</td>
  </tr>
   <?php
			include('config.php');
			$req="SELECT * FROM `forum_sujets`;";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			?>
				        <tr>
				          <td><?php echo $ligne[0] ?></td>
				          <td><?php echo $ligne[1] ?></td>
				          <td><?php echo $ligne[2] ?></td>
				          <td><?php echo $ligne[3] ?></td>
				         
				          <td><a href="supprimer_sujet.php?id=<?php echo $ligne[0]?>" >supprimer</a></td>
			            </tr>
				        <?php
			}
			?>
</table>
                        
                        <?php
// on teste si le formulaire a été soumis
if (isset ($_POST['go']) && $_POST['go']=='Poster') {
	// on teste la déclaration de nos variables
	if (!isset($_POST['auteur']) || !isset($_POST['titre']) || !isset($_POST['message'])) {
	$erreur = 'Les variables nécessaires au script ne sont pas définies.';
	}
	else {
	// on teste si les variables ne sont pas vides
	if (empty($_POST['auteur']) || empty($_POST['titre']) || empty($_POST['message'])) {
		$erreur = 'Au moins un des champs est vide.';
	}

	// si tout est bon, on peut commencer l'insertion dans la base
	else {
		// on se connecte a notre base
		include('config.php');

		// on calcule la date actuelle
		$date = date("Y-m-d H:i:s");

		// préparation de la requete d'insertion (pour la table forum_sujets)
		$sql = 'INSERT INTO forum_sujets VALUES("", "'.mysql_escape_string($_POST['auteur']).'", "'.mysql_escape_string($_POST['titre']).'", "'.$date.'")';

		// on lance la requete (mysql_query) et on impose un message d'erreur si la requete ne se passe pas bien (or die)
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		// on recupere l'id qui vient de s'insérer dans la table forum_sujets
		$id_sujet = mysql_insert_id();

		// lancement de la requete d'insertion (pour la table forum_reponses
		$sql = 'INSERT INTO forum_reponses VALUES("", "'.mysql_escape_string($_POST['auteur']).'", "'.mysql_escape_string($_POST['message']).'", "'.$date.'", "'.$id_sujet.'")';

		// on lance la requete (mysql_query) et on impose un message d'erreur si la requete ne se passe pas bien (or die)
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		// on ferme la connexion a la base de données
		mysql_close();

		// on redirige vers la page d'accueil
		header('Location: gest_forum.php');


		// on termine le script courant
		exit;
	}
	}
}
?>


<!-- on fait pointer le formulaire vers la page traitant les données --><br />
<strong>AJOUTER UN SUJET :</strong>
<form action="gest_forum.php" method="post">
  <table>
<tr>
  <td><strong>admin</strong></td><td>
<input type="text" name="auteur" maxlength="30" size="50" value="administration" >
</td></tr><tr><td>
  <strong>Titre</strong></td><td>
<input type="text" name="titre" maxlength="50" size="50" value="<?php if (isset($_POST['titre'])) echo htmlentities(trim($_POST['titre'])); ?>">
</td></tr><tr><td>
  <strong>remarques</strong></td><td><textarea name="message" cols="50" rows="10"><?php if (isset($_POST['message'])) echo htmlentities(trim($_POST['message'])); ?>
</textarea></td></tr><tr><td><td align="right">&nbsp;</td></tr></table>

<input type="submit" value="poster" name="go"  class="bstandard" style="width:100px; height:30px;"/>
</form>



<p>
  <?php
// on affiche les erreurs éventuelles
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
  <br /><br />
  
					</div>
				    
          
          
          
          
          </div>  
        
      </div>
     </div>
  </div>
 </div>

<!--============================== footer =================================-->

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>