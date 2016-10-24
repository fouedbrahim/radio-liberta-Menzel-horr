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
                <li><a href="index.php">Acceuil</a></li>
                
                    <li><a href="gestion_act.php">gestion des actualites</a>
                     
                    </li>
                <li><a href="gest_gallerie.php">Gestion de Gallerie</a></li>
                <li class="active"><a href="gest_videos.php">Gestion de Videos</a></li>
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
         
        <fieldset>
		         <legend>gestion de videos</legend>
		         <p>&nbsp;</p>
		         <table width="80%" border="1" class="categories_table">
				          <tr>
				           
				            <td width="36%">lien</td>
				            <td width="40%">commentaire</td>
                            <td width="40%">type</td>
				           
                            <td width="18%">supprimer</td>
	               </tr>
				          <?php
			include('config.php');
			$req="SELECT * FROM `videos`;";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			?>
				          <tr>
				            
				            <td><?php echo $ligne[0] ?></td>
				            <td><?php echo $ligne[1] ?></td>
                            <td><?php echo $ligne[2] ?></td>
				            
				            <td><a href="supprimer_video.php?lien=<?php echo $ligne[0]?>" >supprimer</a></td>
	               </tr>
				          <?php
			}
			?>
	             </table>
		         <p>&nbsp;</p>
			     </fieldset>      
                <h3>Ajouter un video </h3>
               <p><br />
               </p>
               
               <form action="ajout_video.php" method="post">Lien youtube : <input type="text" name="lien"/><br>
                  commentaire : 
                  <input type="text" name="comm"/>
                  <br/>
                  type de video: 
                   <select name="type" required="required"><option value="">selectionner un type ! </option>
                   <option value="sport">sport </option>  
         <option value="interview">interview </option>          <option value="emission">emission </option>          <option value="culture">culture </option>
         
                        </select>
                 <br />
            <br />
             <br />
               <input type="submit" value="ajouter le video"  class="bstandard" style="width:auto; height:30px;"/>
               </form>
					      
          
          
          
          
          </div>  
        
      </div>
     </div>
  </div>
 </div>

<!--============================== footer =================================-->

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>