<!DOCTYPE html>
<html lang="en">
	<head>
	<title>modif reponse</title>
	<meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	  
	<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>

	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
    jQuery('.spinner').animate({'opacity':0},2000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
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
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="img/logo.gif"> </a></h1>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                                <ul class="nav sf-menu">
                <li class="active"><a href="index.php">Acceuil الاستقبال</a></li>
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
        <article class="span8">
         <div class="inner-1">  
         
       <?php
//Cette page permet de modifer un message
include('config.php');
if(isset($_GET['id'], $_GET['id2']))
{
	$id = intval($_GET['id']);
	$id2 = intval($_GET['id2']);
if(isset($_SESSION['username']))
{
	$dn1 = mysql_fetch_array(mysql_query('select count(t.id) as nb1, t.authorid, t2.title, t.message, t.parent, c.name from topics as t, topics as t2, categories as c where t.id="'.$id.'" and t.id2="'.$id2.'" and t2.id="'.$id.'" and t2.id2=1 and c.id=t.parent group by t.id'));
if($dn1['nb1']>0)
{
if($_SESSION['userid']==$dn1['authorid'] or $_SESSION['username']==$admin)
{
include('bbcode_function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Modifier une réponse - <?php echo htmlentities($dn1['title'], ENT_QUOTES, 'UTF-8'); ?> - <?php echo htmlentities($dn1['name'], ENT_QUOTES, 'UTF-8'); ?> - Forum</title>
		<script type="text/javascript" src="functions.js"></script>
    </head>
    <body>
    	<div class="header"></div>
        <div class="content">
<?php
$nb_new_pm = mysql_fetch_array(mysql_query('select count(*) as nb_new_pm from pm where ((user1="'.$_SESSION['userid'].'" and user1read="no") or (user2="'.$_SESSION['userid'].'" and user2read="no")) and id2="1"'));
$nb_new_pm = $nb_new_pm['nb_new_pm'];
?>
<div class="box">
	<div class="box_left">
    	<a href="<?php echo $url_home; ?>">Index du Forum</a> &gt; <a href="list_topics.php?parent=<?php echo $dn1['parent']; ?>"><?php echo htmlentities($dn1['name'], ENT_QUOTES, 'UTF-8'); ?></a> &gt; <a href="read_topic.php?id=<?php echo $id; ?>"><?php echo htmlentities($dn1['title'], ENT_QUOTES, 'UTF-8'); ?></a> &gt; Modifier une réponse
    </div>
	<div class="box_right">
    	<a href="list_pm.php">Vos messages(<?php echo $nb_new_pm; ?>)</a> - <a href="profile.php?id=<?php echo $_SESSION['userid']; ?>"><?php echo htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8'); ?></a> (<a href="login.php">Déconnexion</a>)
    </div>
    <div class="clean"></div>
</div>
<?php
if(isset($_POST['message']) and $_POST['message']!='')
{
	if($id2==1)
	{
		if($_SESSION['username']==$admin and isset($_POST['title']) and $_POST['title']!='')
		{
			$title = $_POST['title'];
			if(get_magic_quotes_gpc())
			{
				$title = stripslashes($title);
			}
			$title = mysql_real_escape_string($dn1['title']);
		}
		else
		{
			$title = mysql_real_escape_string($dn1['title']);
		}
	}
	else
	{
		$title = '';
	}
	$message = $_POST['message'];
	if(get_magic_quotes_gpc())
	{
		$message = stripslashes($message);
	}
	$message = mysql_real_escape_string(bbcode_to_html($message));
	if(mysql_query('update topics set title="'.$title.'", message="'.$message.'" where id="'.$id.'" and id2="'.$id2.'"'))
	{
	?>
	<div class="message">Le message a bien &eacute;t&eacute; modifi&eacute;.<br />
	<a href="read_topic.php?id=<?php echo $id; ?>">Retourner au sujet</a></div>
	<?php
	}
	else
	{
		echo 'Une erreur s\'est produite lors de la modification du message.';
	}
}
else
{
?>
<form action="edit_message.php?id=<?php echo $id; ?>&id2=<?php echo $id2; ?>" method="post">
<?php
if($_SESSION['username']==$admin and $id2==1)
{
?>
	<label for="title">Titre</label><input type="text" name="title" id="title" value="<?php echo htmlentities($dn1['title'], ENT_QUOTES, 'UTF-8'); ?>" />
<?php
}
?>
    <label for="message">Message</label><br />
    <div class="message_buttons">
        <input type="button" value="Gras" onclick="javascript:insert('[b]', '[/b]', 'message');" /><!--
        --><input type="button" value="Italique" onclick="javascript:insert('[i]', '[/i]', 'message');" /><!--
        --><input type="button" value="Souligne" onclick="javascript:insert('[u]', '[/u]', 'message');" /><!--
        --><input type="button" value="Image" onclick="javascript:insert('[img]', '[/img]', 'message');" /><!--
        --><input type="button" value="Lien" onclick="javascript:insert('[url]', '[/url]', 'message');" /><!--
        --><input type="button" value="Gauche" onclick="javascript:insert('[left]', '[/left]', 'message');" /><!--
        --><input type="button" value="Centre" onclick="javascript:insert('[center]', '[/center]', 'message');" /><!--
        --><input type="button" value="Droite" onclick="javascript:insert('[right]', '[/right]', 'message');" />
    </div>
    <textarea name="message" id="message" cols="70" rows="6"><?php echo html_to_bbcode($dn1['message']); ?></textarea><br />
    <input type="submit" value="Envoyer" />
</form>
<?php
}
?>
		</div>
		<div class="foot"></div>
	</body>
</html>
<?php
}
else
{
	echo '<h2>Vous n\'avez pas le droit de modifier ce message.</h2>';
}
}
else
{
	echo '<h2>Le message que vous désirez modifier n\'existe pas.</h2>';
}
}
else
{
?>
<h2>Vous devez être connecté pour accéder à cette page:</h2>
<div class="box_login">
	<form action="login.php" method="post">
		<label for="username">Nom d'utilisateur</label><input type="text" name="username" id="username" /><br />
		<label for="password">Mot de passe</label><input type="password" name="password" id="password" /><br />
        <label for="memorize">Se souvenir</label><input type="checkbox" name="memorize" id="memorize" value="yes" />
        <div class="center">
	        <input type="submit" value="Login" /> <input type="button" onclick="javascript:document.location='signup.php';" value="S'inscrire" />
        </div>
    </form>
</div>
<?php
}
}
else
{
	echo '<h2>Un identifiant du message que vous désirez modifier n\'est pas défini.</h2>';
}
?>     
          
          
          
          
          </div>  
        </article>
<article class="span4">
          <h3 class="extra">Recherche</h3>
          <form id="search" action="search.php" method="GET" accept-charset="utf-8" >
            <div class="clearfix">
              <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" ><a href="#" onClick="document.getElementById('search').submit()" class="btn btn-1">search</a> </div>
          </form>
          
          <div class="flexslider">
              <ul class="slides">
             
            <li> <img src="img/pub_1.jpg" alt="" > </li>
            <li> <img src="img/pub_2.jpg" alt="" > </li>
            <li> <img src="img/pub_3.jpg" alt="" ></li>
            </ul>
          </div>
        </article>
      </div>
     </div>
  </div>
 </div>

<!--============================== footer =================================-->
<footer>
<div> <div class="container clearfix">
    <ul class="list-social pull-right">
    
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
        <li><a class="icon-4" href="#"></a></li>
        <li><a class="icon-5" href="#"></a></li><BR><BR>
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
							<li> Il y'a visiteurs <?php echo $nb?> en ligne  ! </li>
							</ul>
					</div>
        </ul>
        <address class="address-1">
    <strong>Menzel horr<br>
        8015 centre ville
        ,<BR>Radio LIBERTA.</strong><span>Telephone:</span>+1 800 603 6035<br>
          <div class="overflow"><span>E-mail:</span> <a href="#" class="mail-1">Radio.liberta1@gmail.com</a><br>
    <span>Skype:</span> <a href="#" class="mail-1">Radio.liberta</a></div>
          </address>
    
  </div>
</div>
     
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>