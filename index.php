<!DOCTYPE html>
<html lang="en">
	<head>
	<title>ACC</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
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
    <?php
		 session_start();
//Cette page permet dafficher la liste des categories
include('config.php');
?>
    <div>
	
    <ul class="list-social pull-right">
    <li><form id="search" action="search.php" method="GET" accept-charset="utf-8" >
            <div class="clearfix">
              <input name="s" type="search" onChange="white" class="clearfix" style="margin-left: 136px; color: #FFFFFF; background: #e85356; width: 205px;" onFocus="if(this.value =='' ) this.value=''" onBlur="if(this.value=='') this.value=''" value="Recherche">
             <a href="#"> <img src="img/search.png"  alt="" height="21" onClick="document.getElementById('search').submit()"/></a> </div>
        
          </form></li>
          <li><a class="icon-1" href="https://www.facebook.com/groups/220644174813120/" target="_blank"></a></li>
          <li><a class="icon-3" href="https://twitter.com/Radioliberta1" target="_blank"></a></li>
        <li><a class="icon-4" href="https://plus.google.com/u/0/b/107383158813870576446/107383158813870576446/posts" target="_blank"></a></li>
        <li><a class="icon-5" href="http://www.youtube.com/channel/UCHRNLo4IOkQWQXsbjKUAQDg" target="_blank"></a></li>
      </ul></div>
	
	<?php
						
                   
if(!empty($_SESSION['prenom'])){ ?>
	<font face="Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif" size="4"><B>Bonjour ,<?php echo($_SESSION['nom']."&nbsp".$_SESSION['prenom'])?></B><a href="logout.php">   (  Déconnexion  )</a></font>			
                         
<?php } ?>


<?php
if(empty($_SESSION['prenom'])){ ?>
		<a href="con_forum.php" class="btn-1"><strong>connexion</strong></a> <a href="inscription.php" class="btn-1"><strong>Inscription</strong></a>
<?php } ?>
<!--============================== header =================================-->
<header>

<div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
             
            <h1 class="brand brand_"><a href="#"><img src="img/logo.gif" alt="liberta" title="Radio Liberta" onClick="popup()"></a></h1>
          
			
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                   <ul class="nav sf-menu">
                <li class="active"><a href="index.php">الاستقبال</a></li>
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
              </ul>
                </div>
          </div>
            </div>
      </div>
  </div>
  </div>
    </header>
<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12"> 
        <!--============================== slider =================================-->
        <div class="flexslider">
              <ul class="slides">
            <li> <img src="img/slide-1.jpg" alt="" > </li>
            <li> <img src="img/slide-2.jpg" alt="" > </li>
            <li> <img src="img/slide-3.jpg" alt="" > </li>
            <li> <img src="img/slide-4.jpg" alt="" > </li>
            <li> <img src="img/slide-5.jpg" alt="" > </li>
          </ul>
            </div>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
              <h2>Radio Liberta</h2>
              
              <div>
            <p>for more info about this free website template created by TemplateMonster.com. This is a Bootstrap template that goes with several layout options (for desktop, tablet, smartphone landscape and portrait) to fit all popular screen resolutions. The PSD source files of this template are available for free for the registered members of TemplateMonster.com. Feel free to get them!</p>
          
          </div>
            </div>
      </div>
        </div>
  </div>
      
      <!--============================== content =================================-->
      
      <div id="content" class="content-extra"><div class="ic"></div>
    <div class="row-1">
          <div class="container">
        <div class="row">
              <ul class="thumbnails thumbnails-1">
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Sport</h3>
                <img  src="img/page1-img1.jpg" alt="">
                <section> <h5> نشرة أسبوعية تجدون فيها أبرز الأخبار الرياضية على الساحة الوطنية طيلة اسبوع كامل : فرصة لمن تجاوزته الأحداث لمواكبة الجديد ... </h5>
                     <br> 
                      <a href="Sport.php" class="btn btn-1">Liberta Sport !  </a> </section>
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Culture !</h3>
                <img  src="img/page1-img2.jpg" alt="">
                <section> <h5> نشرة أسبوعية تجدون فيها أبرز الأخبار الثقافية على الساحة الوطنية طيلة أسبوع كامل : فرصة لمن تجاوزته الأحداث لمواكبة الجديد ... </h5><br>
                      <a href="culture.php" class="btn btn-1">Liberta Culture !</a> </section>
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Actualites nationale</h3>
                <img  src="img/page1-img3.jpg" alt="">
                <section> <strong>Similique sunt in culpa qui officia </strong>
                      <p>Deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                      <a href="nationale.php" class="btn btn-1">Liberta news !</a> </section>
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3 class="title-1 extra">Actualites regionale</h3>
                <img  src="img/page1-img4.jpg" alt="">
                <section> <strong>Similique sunt in culpa qui officia</strong>
                      <p>Deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                      <a href="regionale.php" class="btn btn-1">Liberta news !</a> </section>
              </div>
                </li>
          </ul>
            </div>
      </div>
        </div>
    <div class="container">
          <div class="row">
        <article class="span6">
             <h3><a href="quiz.php">أ<strong>ســـــئلة ثـــقــافــية</strong></a></h3>
              <div class="wrapper">
            <figure class="img-indent">
            <a href="quiz.php"><img src="img/page1-img5.jpg " alt="" /></a></figure>
            <div class="inner-1 overflow extra">
                  <div class="txt-1">
                  <form action="newsletter.php" method="post">
                    <div class="thumbnail thumbnail-1" style="
    width: 221px;
    height: 117px;
">
                 Newsletter  <input type="email" value="entrez votre email si vous voulez participer a notre Newsletter" required style="
    width: 205px;
    height: 20px;
" onKeyPress=""  name="email">
 
                  <section>
                <input type="submit" class="btn-1" title="entrez votre email si vous voulez participer a notre Newsletter" value="Participe" style="
    width: 216px;">
    
              </section>
                </div></div>
         </form>
                  <div class="border-horiz"></div>
                  <div class="overflow"><strong>مــا هو رأيــك في آداء اذاعـــة ليبرتا ؟</strong><br><br>
<div class="thumbnail thumbnail-1">
  <section> 
                   
                     
    <form action="vote.php" method="post">            
             
               <table width="220">
                     <tr>
                       
                         <td><strong> جـــيـــــــد</strong> </td><td>
                         <input type="radio" name="Liberta_r" value="bien" id="Liberta_r_0"></td>
                     </tr>
                     <tr>
                       
                         <td><strong> مــتــوسـط</strong></td><td>
                         <input type="radio" name="Liberta_r" value="assez bien" id="Liberta_r_1"></td>
                     </tr>
                     <tr>
                       <td><strong> ســـيــــئ</strong></td><td>
                         <input type="radio" name="Liberta_r" value="mauvais" id="Liberta_r_2">
                         </td>
                     </tr>
                   </table>
                  
                   <center>  <input type="submit" value="أكـــــد" align="middle" class="btn-1" onClick="popquiz()"></center></form>
  </section>
              </div>
                
              </div>
                </div>
          </div>
            </article>
        <article class="span6">
              <h3>Photos de la semaine...</h3>
              <ul class="list-photo">
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img6.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img7.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img8.jpg " alt="" /></a></li>
            <li class="last"><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img9.jpg " alt="" /></a></li>
          
          
          </ul>
          <div class="border-horiz"></div>
          <div class="wrapper">
          <ul class="list extra2 list-pad ">
            <li><a href="forum.php">FORUM</a></li>
            <li><a href="quiz.php">Quiz</a></li>
            <li><a href="videos.php">Videos</a></li>
            <li><a href="gallerie.php">Photos</a></li>
            <li><a href="sport.php">Sport</a></li>
            <li><a href="culture.php">Culture</a></li>
         
          </ul>
            <ul class="list extra2">
            <li><a href="videos3.php">Interviews</a></li>
            <li><a href="gallerie4.php">evennements</a></li>
            <li><a href="nationale.php">act.nationale</a></li>
            <li><a href="international.php">act.internationale</a></li>
            <li><a href="emission.php">Emissions</a></li>
            <li><a href="equipe.php">Equipe liberta</a></li>
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

