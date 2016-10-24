<!DOCTYPE html>
<html lang="fr">
	<head>
	<title>Quiz</title>
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
	<script type="text/javascript" src="js/quiz.js"></script>
	<link rel="stylesheet" href="css/quiz_styling.css" type="text/css">
	
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
<h1 class="brand brand_"><a href="#"><img src="img/logo.gif" alt="liberta" title="Radio Liberta" onClick="popup()"></a></h1>            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                             <ul class="nav sf-menu">
                <li><a href="index.php">Acceuil الاستقبال</a></li>
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
                <li ><a href="forum.php">Forum المنتدى</a></li>
               <li class="active"><a href="#">Loisir  الترفيه</a>
                      <ul>
                    <li class="active"><a href="quiz.php">Quiz </a></li></ul>
                    
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
  <!--============================== content =================================-->      
   <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="container" align="right">
          <div class="row">
        <article class="span8">
         <div class="inner-1">  
         <center><h3>اسئلة ثقافية</h3></center>      
         <br><br><br><form action="" method="post">
	<fieldset>
	<legend>  من الأديب العربي الذي نال جائزة نوبل للاداب عام 1988 م ؟ </legend>
		<label><input type="radio" name="question1" value="a" /> نجيب محفوظ . </label>

		<label><input type="radio" name="question1" value="b" /> إحسان عبد القدوس .</label>

		<label><input type="radio" name="question1" value="c" /> أحمد زويل .</label>

		
	</fieldset>
	<fieldset>
	<legend>  من أول من أنشأ أسلوب الرسائل في الأدب العربي ؟</legend>
		<label><input type="radio" name="question2" value="e" />  عبد الحميد الكاتب </label>

		<label><input type="radio" name="question2" value="f" />جابن العميد .</label>
	</fieldset>
	<fieldset>
	<legend> من صاحب قصيدة البردة ؟</legend>
		
     <label><input type="radio" name="question3" value="h" /> زهير بن أبي سلمه .</label>

		<label><input type="radio" name="question3" value="j" /> كعب بن زهير .</label>

		<label><input type="radio" name="question3" value="k" />  لبيد بن ربيعة . </label>
	</fieldset>
	<fieldset>
	<legend> ما هو أثقل عضو في جسم الإنسان ؟</legend>
		<label><input type="radio" name="question4" value="l" /> الرئة</label>

		<label><input type="radio" name="question4" value="m" /> الكليه</label>

		<label><input type="radio" name="question4" value="o" />  القلب </label>
		<label><input type="radio" name="question4" value="p" />  الكبد.</label>

	</fieldset>
	<fieldset>
	<legend> ما هو لون الرئتين الصِّحي ؟</legend>
		<label><input type="radio" name="question5" value="q" /> الوردي.</label>

		<label><input type="radio" name="question5" value="r" /> الاحمر</label>

		<label><input type="radio" name="question5" value="s" /> لاسود</label>

	</fieldset>
	<fieldset>
	<legend> ما هو الكوكب الأكثر بعداً عن النظام الشمسي ؟</legend>
		<label><input type="radio" name="question6" value="u" /> زحل</label>

		<label><input type="radio" name="question6" value="v" />بلوتو</label>

		<label><input type="radio" name="question6" value="w" /> المريخ</label>

		
	</fieldset>
	<fieldset>
	<legend>ما هو الحيوان الثَّديي الذي يطير ؟ </legend>
		<label><input type="radio" name="question7" value="y" /> الخفاش .</label>

		<label><input type="radio" name="question7" value="z" /> العصفور</label>

		<label><input type="radio" name="question7" value="1" /> النسر</label>

		
	</fieldset>
	<fieldset>
	<legend> ما هي نسبة الماء في الحليب ؟ </legend>
		
         <label><input type="radio" name="question8" value="4" /> 32 % </label>

		<label><input type="radio" name="question8" value="5" /> 87 %  </label>

		
	</fieldset>
	<fieldset>
	<legend> كم عضلة في جسم الإنسان ؟</legend>
		<label><input type="radio" name="question9" value="7" /> 656 عضلة.</label>

		<label><input type="radio" name="question9" value="8" /> 907 عضلة.</label>

		<label><input type="radio" name="question9" value="9" /> 561 عضلة.</label>

		<label><input type="radio" name="question9" value="10" /> 950 عضلة.</label>
	</fieldset>
	<fieldset>
		<input type="button" id="submit" value="اكد" class="btn btn-1"/> <input type="button" id="reload_quiz" value="اعد" class="btn btn-1"/><br>
		<h2 id="quiz_results"></h2>
	</fieldset>
	</form>
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

