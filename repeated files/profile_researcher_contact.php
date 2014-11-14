<?php session_start(); ?>
<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>ResearchIntern - Contact</title>
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
					<li><a href="./Student_PROFILE/researcher_profile.html"><?php echo $_SESSION['firstname'] ?></a></li>
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
					<li class="current-menu-item"><a href="./Student_PROFILE/researcher_profile.php"><span><img src="img/user_avatar_s.jpg" style="float: left; padding: 3px; background: #fff; border: 1px solid #ccc;"/></span><b> &nbsp;<?php echo $_SESSION['firstname'] ?></b><span class="subheader"> my profile</span></a></li>
						<li><a href="./profile_researcher_index.php"><b>Home</b><span class="subheader">welcome</span></a></li>
						<li ><a href="./profile_researcher_aboutus.php"><b>About us</b><span class="subheader"> know us </span></a></li>
												
						<li ><a> <b>Settings</b><span class="subheader">feel at home</span></a>
							<ul>
								<li><a href="../profile_researcher_edit.php">Edit Profile</a></li>
								<li><a href="res_profile_project.php">Edit Project</a></li>
								<li><a href="res_profile_work.php">Edit Work And Publications</a></li>	
                                                                <li><a href="../profile_researcher_chagepassword.php">Change Password</a></li>
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
					<span class="head">Contact Us</span><span class="subhead">Let us know whats troubling you</span>
					<ul class="breadcrumbs">
						<li><a href="index.php">home</a></li>
						<li>/ contact</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	
	        	
	        	<!-- page content -->
	        	<div id="page-content">
	        	
						
					<!-- Map -->
				<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true" /></script>
				<script type="text/javascript">
					function initialize() {
						var latlng = new google.maps.LatLng(47.379173,8.510732);
						var myOptions = {
						  zoom: 8,
						  center: latlng,
						  mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					var map = new google.maps.Map(document.getElementById("map"),
					    myOptions);
					}
				</script>
				
				<div id="map-holder">
					<div id="map"></div>
					
				</div>
				
				<!-- ENDS Map -->
						
	        		
					<p>
						At ResearchIntern, all we care care is to provide the best platform for research 
						and innovative projects with the sole motto of enabling research colaborations.
						Spread across the globe, we are set-up and established at Zurich, Switzerland. 
						
					</p>
					
					<!-- form -->
					<script type="text/javascript" src="js/form-validation.js"></script>
					<form id="contactForm" action="#" method="post">
						<h3 class="heading">Contact us using this form</h3>
						<p> Feel free to reach us. Please fill in the fields below and hit send!</p>
						<fieldset>
							<div>
								<input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
								<label>Name</label>
							</div>
							<div>
								<input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
								<label>Email</label>
							</div>
							<div>
								
								<input name="web"  id="web" type="text" class="form-poshytip" title="Enter your website" />
								<label>Website</label>
							</div>
							<div>
								<textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
							</div>
							
							<!-- send mail configuration -->
							<input type="hidden" value="email@yourserver.com" name="to" id="to" />
							<input type="hidden" value="Enter the subject here" name="subject" id="subject" />
							<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
							<!-- ENDS send mail configuration -->
							
							<p><input type="button" value="Send" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
						</fieldset>
						
					</form>
					<p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
					<!-- ENDS form -->
						
	        		
	        	</div>
	        	<!-- ENDS page content -->
	        	
	        	
	        	<!-- sidebar -->
	        	<aside id="sidebar">
	        		<div class="block">
		        		<h4>Address</h4>
		        		<p>At ResearchIntern, all we care care is to provide the best platform for research 
						and innovative projects with the sole motto of enabling research colaborations.
						Spread across the globe, we are set-up and established at Zurich, Switzerland.</p>
		        		
		        		<ul class="address-block">
		        			<li class="address">Hardstrasse - 5, 8004 - Zurich, Switzerland</li>
		        			<li class="phone">+49 17634901051</li>
		        			<li class="mobile">+91 9445891969</li>
		        			<li class="email"><a href="mailto:email@server.com">info@researchintern.net</a></li>
		        		</ul>
		        		
	        		</div>	        	
	        	</aside>
	        	<div class="clearfix"></div>
				<!-- ENDS sidebar -->
				
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<?php 
	include("profile_researcher_footer.php");
?>
		
		<!-- Start google map -->
		<script>initialize();</script>
		
	</body>
	
	
	
</html>
