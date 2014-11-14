<?php session_start(); ?>

<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>About us - ResearchIntern</title>
		<!--[if lt IE 9]>
			<script src="js/css3-mediaqueries.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		
		
		<!-- JS -->
		<script src="js/jquery-1.6.4.min.js"></script>
		
		<!--  <script src="js/less-grid-4.js"></script> -->
		<script src="js/custom.js"></script>
		<script src="js/tabs.js"></script>
		<script src="js/moveform.js"></script>
		
		<!-- Masonry -->
		<script src="js/masonry.min.js" ></script>
		<script src="js/imagesloaded.js" ></script>
		<!-- ENDS Masonry -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  /> 
		<script src="js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Allan:700' rel='stylesheet' type='text/css'>
		
		<!-- Flex Slider -->
		<link rel="stylesheet" href="css/flexslider.css" >
		<script src="js/jquery.flexslider-min.js"></script>
		<!-- ENDS Flex Slider -->
		
		
		<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6-hacks.css" media="screen" />
		<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
          		/* EXAMPLE */
          		DD_belatedPNG.fix('*');
        	</script>
		<![endif]-->
		
		<!-- Lessgrid -->
		<link rel="stylesheet" media="all" href="css/lessgrid.css"/>
		
		<!-- modernizr -->
		<script src="js/modernizr.js"></script>
		

	</head>
	
	<body lang="en">
	

		<!-- mobile-nav -->
		<div id="mobile-nav-holder">
			<div class="wrapper">
				<ul id="mobile-nav">
				    <li><a href="./Student_PROFILE/researcher_profile.html"><?php echo $_SESSION ['firstname']?></a></li>
					<li  ><a href="./profile_researcher_index.php">HOME</a></li>
					<li class="current-menu-item"><a href="profile_researcher_aboutus.php">About us</a></li>
					<li><a href="./profile_researcher_contact.php">CONTACT</a></li>
					<li><a href="./researcher_logout.php">LOGOUT</a></li>
				</ul>
				<div id="nav-open"><a href="#">Menu</a></div>
			</div>
		</div>
		<!-- ENDS mobile-nav -->
			
		<header>
			
				
			<div class="wrapper">
					
				<a href="index.php" id="logo"><img  src="img/logo.png" alt="Tandem"></a>
				
				<nav>
					<ul id="nav" class="sf-menu">
						<li><a href="./Student_PROFILE/researcher_profile.php"><span><img src="img/user_avatar_s.jpg" style="float: left; padding: 3px; background: #fff; border: 1px solid #ccc;"/></span><b> &nbsp;<?php echo $_SESSION['firstname'] ?></b><span class="subheader"> my profile</span></a></li>
						<li><a href="./profile_researcher_index.php"><b>Home</b><span class="subheader">welcome</span></a></li>
						<li class="current-menu-item"><a href="./profile_researcher_aboutus.php"><b>About us</b><span class="subheader"> know us </span></a></li>
												
						<li ><a> <b>Settings</b><span class="subheader">feel at home</span></a>
							<ul>
								<li><a href="../profile_researcher_edit.php">Edit Profile</a></li>
								<li><a href="#">Privacy Settings</a></li>
								<li><a href="#">Account Settings</a></li>
								<li><a href="#">Publicise **</a></li>
							</ul>
						</li>
						<li><a href="./researcher_logout.php"><b>Logout</b><span class="subheader">sign out</span></a></li>				
					</ul>
				</nav>
				
				<div class="clearfix"></div>
				
			</div>
		</header>
	
	
	
	
		<!-- MAIN -->
		<div id="main">
				
			<!-- social -->
			<div id="social-bar">
				<ul>
					<li><a href="http://www.facebook.com"  title="Become a fan"><img src="img/social/facebook_32.png"  alt="Facebook" /></a></li>
					<li><a href="http://www.twitter.com" title="Follow my tweets"><img src="img/social/twitter_32.png"  alt="Facebook" /></a></li>
					<li><a href="http://www.google.com"  title="Add to the circle"><img src="img/social/google_plus_32.png" alt="Facebook" /></a></li>
				</ul>
			</div>
			<!-- ENDS social -->
			
			
			
			<!-- Content -->
			<div id="content">
			
				<!-- masthead -->
		        <div id="masthead">
					<span class="head">About us</span><span class="subhead"></span>
					<ul class="breadcrumbs">
						<li><a href="profile_researcher_index.php">home</a></li>
						<li>/ about us</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	
	        	
	        	<!-- page content -->
	        	<div id="page-content-full">
	        	
						<br><br>
					
	        		<h2 class="heading">     Young Minds of Students + Experience of Researchers = INNOVATION</h2>
					<p style="text-align:justify; padding:20px;font-size:18px;font-family:'Calibri';"><span ><img class="adv_right" src="img/about/aboutus1.png" width="300" height="290" alt="about us 1"></span>
						<br><br><br><br><br>Best of the world&#39;s innovation was <br>
								made when they were least expected. <br>
								Bring a new set of eyes and fearless<br>
								thinking to your team. Our platform <br>
								aims at opening new dimension in research.<br> 
								Welcome to ResearchIntern.  <br><br><br><br><br><br>
						<br>
						
					</p>
					<br><br>
					
					<h2 class="heading">     You have to Work Inside the box to be able to Think Outside of it.</h2>
					<p style="text-align:justify; padding:20px;font-size:18px;font-family:'Calibri';"><span ><img class="adv_left" src="img/about/box.jpg" width="350" height="300" alt="about us 1"></span>
						<br><br><br><br><br>We are a young start up with group of people who are living the lives of young students and budding
						researchers. So we know exactly how to make the collaboration better between researchers and students. We optimize our services 
						to fit the best experience possible. With constant feedback from both researchers and students we constantly update our
						methods and offer the sustainable solution. <br><br><br>
				
					</p>
					<br><br>
					
					<h2 class="heading">  We are connecting the two world which is so close yet too far</h2>
					<p style="text-align:justify; padding:20px;font-size:18px;font-family:'Calibri';"><span ><img class="adv_right" src="img/about/Connect1.jpg" width="350" height="290" alt="about us 1"></span>
						<br><br><br><br><br>Research is an integral part of education, yet there has been a huge disconnect between textbook and current state of 
								the art. We envisage revolutionizing the way students learn by enabling Research based learning.  <br><br><br><br><br><br>
					
					</p>
					<br><br>
					
					<h2 class="heading">     We use the best algorithm to prepare research based internship project.</h2>
					<p style="text-align:justify; padding:20px;font-size:18px;font-family:'Calibri';"><span ><img class="adv_left" src="img/about/aboutus5.png" width="350" height="290" alt="about us 1"></span>
						<br><br><br><br>We use the in-house developed algorithm to help researchers sub-divide the research proposal to suit the frame work 
										of internships and get the maximum throughput with the minimum input. We constantly update our algorithm based on 
										the feedback to deliver the best in class service. <br><br><br><br><br><br><br>
				
					</p>
					<br><br>
					
					<h2 class="heading">     We are more than an internship matching portal</h2>
					<p style="text-align:justify; padding:20px;font-size:18px;font-family:'Calibri';"><span ><img class="adv_right" src="img/about/handpicked.png" width="350" height="290" alt="about us 1"></span>
						<br><br> <br><br><br>We help the student realize their strength and match them with right internship and increasing 
											their efficiency manifolds.  We stand by you through the entire journey of internship helping you 
											learn the key aspect of doing research. Define your future with us.
					
					</p>					
					<br><br><br><br><br><br>
					
					<h2 class="heading">  We use the cutting edge technology to build our platform</h2>
					<p style="text-align:justify; padding:20px;font-size:18px;font-family:'Calibri';"><span ><img class="adv_left" src="img/about/jigsaw.jpg" width="350" height="290" alt="about us 1"></span>
						<br><br><br><br><br><br>We use powerful collaboration 
tool to seamlessly connect and 
perform your research. We also 
use Amazon web services and 
other cloud based tools to power 
out platforms engine. 
				
					</p>
					<br>
					
					
										
	        	</div>
	        	<!-- ENDS page content -->
	        	
	        	
				
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
	        	
	        	
	        	
	        	
	        	
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<?php 
	include("profile_researcher_footer.php");
?>
		
	</body>
	
</html>
