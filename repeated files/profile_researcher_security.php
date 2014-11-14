<?php session_start(); ?>
<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>ResearchIntern - Security Advice</title>
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
					<li ><a href="profile_researcher_aboutus.php">About us</a></li>
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
					<span class="head">Security Advice</span>
					<ul class="breadcrumbs">
						<li><a href="index.php">home</a></li>
						<li>/ security advice</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	
	        	
	        	<!-- page content -->
	        	<div id="page-content-full">
	        	
						
					
	        		<p class="heading">We at researchintern.net are committed to ensure the safety of our users. We know that there are several SMS, Email and Telephone scams running across the country. We would like you to be aware of these fraudulent SMS, Email and Telephone calls. These activities are in violation of our website terms and criminal violation of the state law.</p>
					
					
					<h2 class="heading">Phishing Emails</h2>
					<p>These Emails / SMSes will generally ask you input your personal information or login details. 
					Generally an email will be addressed to the user, on behalf of the company. If you actually verify
					the email address, it will be totally different from the website domain name.
					</p>
					
					<h2 class="heading">Spoofing</h2>
					<p>These Emails / SMSes generally come with subject like "You won 1 Million pounds" or "MNC company 
					has shortlisted you". They will ask you enter personal information, address, telephone / mobile number, 
					bank account details etc..
					</p>
					
					<h2 class="heading">Spamming</h2>
					<p>These Emails are generally sent to large database of emails. It is usually intended for promotional
					activities / cheating general public.</p>
					
					<h2 class="heading">Virus Spreading</h2>
					<p>These Emails are generally sent with latest viruses, if you open these attachments your computer will be at risk.</p>
					
					<h2 class="heading">Fake Employer / Agencies</h2>
					<p>These Emails / SMSes generally come with a subject / received from "Some Big Organization". 
					These organizations are no where related to these agencies, to collect your personal information 
					and cheat general public making them about job offers.<br><br>
					
                     We generally warn you to not to respond to these emails. If you respond to them and undergo loss 
					/ injury (personal / commercial), our website researchintern.net will not be held liable under any circumstances.
					</p>
					
					<h2 class="heading">Login Details</h2>
					<p>It is highly recommended that you to keep your login and account details private and confidential. 
					If you share these details with anybody, your personal information / account details will be at huge 
					risk and chances of being misused. Our website researchintern.net will not be held liable under any circumstances.
					</p>
					
					
				</div>
	        	<!-- ENDS page content -->
	        	
	        	
				
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<?php include("profile_researcher_footer.php"); ?>
		
	</body>
	
</html>
