<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search results</title>
    <meta charset="utf-8">  
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">    
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="search/search.js"></script>
 	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	
	<script>		
   jQuery(window).load(function() {	
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
<h1 class="brand brand_"><a href="#"><img src="img/logo.gif" alt="liberta" title="Radio Liberta" onClick="popup()"></a></h1>            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li ><a href="index.php">Acceuil الاستقبال</a></li>
                <li class="sub-menu"><a href="#">Radio    الراديو</a>
                      <ul>
                    <li><a href="programme.php">Programme  </a></li>
                    <li><a href="emission.php">emission</a></li>
                    <li><a href="equipe.php">equipe</a></li>
                  </ul>
                    </li>
                    <li class="sub-menu"><a href="#">Actualite المستجدات</a>
                      <ul>
                    <li><a href="regionale.php">Regionale </a></li>
                    <li><a href="nationale.php">Nationale</a></li>
                    <li><a href="international.php">International</a></li>
                    <li><a href="sport.php">Sport</a></li>
                    <li><a href="culture.php">Culture</a></li>
                   
                  </ul>
                    </li>
                <li><a href="gallerie.php">Photos صور</a></li>
                <li><a href="videos.php">Videos فيديو</a></li>
                <li><a href="forum.php">Forum المنتدى</a></li>
               <li class="sub-menu"><a href="#">Loisir  الترفيه</a>
                      <ul>
                    <li><a href="quiz.php">Quiz </a></li></ul>
                    
                 <li><a href="contacte.php">Contact اتصل بنا</a></li>
              </ul
                >
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">  

<!--============================== content =================================-->
<section id="content">
  <div class="container">
    <div class="row">
    	<div class="span12">
            <h3>Resultat de la recherche:</h3>
            <div id="search-results"></div>
		</div>  
    </div>        

</div>  
</section>
</div>

<!--============================== footer =================================-->
<footer>
<div> <div class="container clearfix">
    <ul class="list-social pull-right">
    
          <li><a class="icon-1" href="https://www.facebook.com/groups/220644174813120/" target="_blank"></a></li>
          <li><a class="icon-3" href="https://twitter.com/Radioliberta1" target="_blank"></a></li>
        <li><a class="icon-4" href="https://plus.google.com/u/0/b/107383158813870576446/107383158813870576446/posts" target="_blank"></a></li>
        <li><a class="icon-5" href="http://www.youtube.com/channel/UCHRNLo4IOkQWQXsbjKUAQDg" target="_blank"></a></li><BR><BR>
          <li><p> Copyright © 2014 - Radio LIBERTA </p></li><div >
							<ul id="latest_tweets">
							<?php include("config.php"); 
							$req='select * from visiteur where ip="'.$_SERVER['REMOTE_ADDR'].'"';
							mysql_query($req);
							$resultat = mysql_query($req);
							$nb =mysql_num_rows($resultat);
							if ($nb==0)
							{$dt = new DateTime();
							$req='insert into visiteur values("'.$_SERVER['REMOTE_ADDR'].'","'.$dt->format('Y-m-d H:i:s').'")';
							$resultat = mysql_query($req);}
							$req="select * from visiteur";
							$resultat = mysql_query($req);
							$nb =mysql_num_rows($resultat);
							;?>
							<li> Nombre de visiteurs : <?php echo $nb?> </li>
							</ul>
					</div>
      </ul>
        <address class="address-1">
    <strong>Menzel horr<br>
        8015 centre ville
        ,<BR>Radio LIBERTA.</strong><br>
          <div class="overflow"><span>E-mail:</span> <a href=" mailto:Radio.liberta1@gmail.com" class="mail-1">Radio.liberta1@gmail.com</a><br>
    <span>Skype:</span> <a href="skype:<?php echo('Radio.liberta')?> " class="mail-1">Radio.liberta</a></div>
      </address>
    
  </div>
</div>
     
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

