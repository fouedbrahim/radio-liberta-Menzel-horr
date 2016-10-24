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
         <h3>utlilisateurs </h3>
         <table width="80%" border="1" class="categories_table">
				          <tr>
				           
				            <td width="36%">nom</td>
				            <td width="40%">prenom</td>
				           <td width="36%">email</td>
				            <td width="40%">m.passe </td>
                            
                            
                            <td width="18%">supprimer <td>
	               </tr>
                   <?php
$connexion = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($connexion, 'liberta');
?>
				          <?php
			include('config.php');
			$req="SELECT * FROM `utilisateur`;";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			?>
				          <tr>
				            
				            <td><?php echo $ligne[0] ?></td>
				            <td><?php echo $ligne[1] ?></td>
                            <td><?php echo $ligne[2] ?></td>
				            <td><?php echo $ligne[3] ?></td>
				            
				            <td><a href="supprimer_utlisateur.php?em=<?php echo $ligne[2]?>" >supprimer</a></td>
	               </tr>
				          <?php
			}
			?>
	             </table>
         <br>
         <H3> Resultats du questionnaire</h3>
         <p>مــا هو رأيــك في آداء اذاعـــة ليبرتا ؟ <br>  <?php
			include('config.php');
			$req="SELECT COUNT(reponse) FROM `vote` where reponse='bien';";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			
         echo $ligne[0]; } ?> personnes ont repondu 'bien '.
           <br>
           <?php
			include('config.php');
			$req="SELECT COUNT(reponse) FROM `vote` where reponse='assez bien';";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			
         echo $ligne[0]; } ?> personnes ont repondu 'assez bien '.
           <br>
           <?php
			include('config.php');
			$req="SELECT COUNT(reponse) FROM `vote` where reponse='mal';";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			
         echo $ligne[0]; } ?> personnes ont repondu 'j'aime pas'.
           
         </p>
       
         <h3>Newsletter</h3>
         <table width="80%" border="1" class="categories_table">
				          <tr>
				           
				            <td width="36%">id</td>
				            <td width="40%">email</td>
				           
	               </tr>
				          <?php
			include('config.php');
			$req="SELECT * FROM `newsletter`;";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			?>
				          <tr>
				            
				            <td><?php echo $ligne[0] ?></td>
				            <td><?php echo $ligne[1] ?></td>
                           
	               </tr>
				          <?php
			}
			?>
           </table>
         <br>

<?php
$heure = date ('H');
$retour_afflu = mysqli_query($connexion, 'SELECT COUNT(*) AS
maintenant FROM affluence WHERE date = CURRENT_DATE() AND heure = '
. $heure);
$donnees_afflu = mysqli_fetch_assoc($retour_afflu);
if ($donnees_afflu['maintenant'] == 0) //Si l'heure n'a pas encore été enregistrée
{
mysqli_query($connexion, 'INSERT INTO affluence(heure, date,
visites) VALUES (' . $heure . ', CURRENT_DATE(), 1);'); //On rentre la date et l'heure et on marque 1 comme nombre de visites.
} else {
mysqli_query($connexion, 'UPDATE affluence SET visites = visites +
1 WHERE date = CURRENT_DATE() AND heure = ' .$heure); //On rentre l'heure et la date d'aujourd'hui et on marque 1 comme nombre de visites.
}?>


  <?php
echo '<table>';
echo '<tr>';
for ($i = 0; $i < 23; $i++)
{     echo '<td><strong>' . $i . 'h</strong></td>';
}
echo '</tr>';
echo '<tr>';
$req = mysqli_query($connexion, "SELECT SUM(visites) AS nb_visites
FROM affluence WHERE date != CURRENT_DATE() GROUP BY heure ORDER BY
heure ASC");
while($dat = mysqli_fetch_assoc($req))
echo '<td>' . $dat['nb_visites'] . '</td>';
echo '</tr>';
echo '</table>';
?> 
                      
		
		
         </div>  
        
      </div>
     </div>
  </div>
 </div>

<!--============================== footer =================================-->

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>