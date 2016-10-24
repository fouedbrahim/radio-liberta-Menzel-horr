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
         
        
						<form action="modifier_article_blog.php" method="post">
			   <fieldset>
		         <legend>gestion des articles</legend>
		         <p>&nbsp;</p>
		         <table width="80%" border="1" class="categories_table">
				          <tr>
				            <td width="8%"> id_article</td>
				            <td width="10%">titre</td>
				            <td width="74%">article</td>
				           
                            <td width="8%">supprimer</td>
	               </tr>
				          <?php
			include('config.php');
			$req="SELECT * FROM `articles blog`;";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			?>
				          <tr>
				            <td><?php echo $ligne[0] ?></td>
				            <td><?php echo $ligne[2] ?></td>
				            <td><?php echo $ligne[1] ?></td>
				            
				            <td><a href="supprimer_article_blog.php?id=<?php echo $ligne[0]?>" >supprimer</a></td>
	               </tr>
				          <?php
			}
			?>
	             </table>
		         <p>&nbsp;</p>
			     </fieldset>
					  
					  <br />
			 </form>
               <p>Ajout d'un article</p>
               <p><br />
               </p>
               
               <form action="ajout_article_blog.php" method="post">Titre : <input type="text" name="titre"/> auteur : <input type="text" name="auteur" /> Date : <input type="date" name="date"/>type : <select name="type"> <option value="regionale">regionale </option> 
         <option value="nationale">nationale </option>          <option value="international">international </option>          <option value="sport">sport </option>
         <option value="culture">culture </option>
         
                        </select><br/>
            texte : 
               <textarea name="para1" placeholder="<?php echo'   un champ de 160 caractères !! ' ;?>"></textarea><br />
            <br />
             <br />
               <input type="submit" value="ajouter l'article"  class="bstandard" style="width:auto; height:30px;"/>
               </form>
					     
          
          
          
          
          </div>  
        
      </div>
     </div>
  </div>
 </div>

<!--============================== footer =================================-->

<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="ckeditor/ckeditor.js"></script> <!-- fichier JS de l'editeur texte comme word wysiwyg "what you see is what you get" -->
 <script>
	// Initialisation du textarea qui prendra l'ID editor1
	CKEDITOR.replace( 'para1' );
</script>
</body>
</html>