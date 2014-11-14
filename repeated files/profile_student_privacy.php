<?php session_start(); ?>

<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>ResearchIntern - Privacy Policy</title>
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
				    <li><a href="Student_PROFILE/student_profile.php">FIRST NAME</a></li>
					<li  class="current-menu-item"><a href="profile_student_index.php">HOME</a></li>
					<li><a href="profile_student_internships.php">INTERNSHIPS</a></li>
					<li><a href="http://researchintern.net/blog/">BLOG</a></li>
					<li><a href="profile_student_how_it_works.php">HOW IT WORKS</a></li>
					<li><a href="profile_student_contact.php">CONTACT US</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
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
						<li><a href="Student_PROFILE/student_profile.php"><span><img src="img/user_avatar_s.jpg" style="float: left; padding: 3px; background: #fff; border: 1px solid #ccc;"/></span><b>&nbsp;<?php echo $_SESSION['firstname'] ?></b><span class="subheader"> </span></a></li>
						<li><a href="./profile_student_index.php"><b>Home</b><span class="subheader">welcome</span></a></li>
						<li><a href="./profile_student_internships.php"><b>Internships</b><span class="subheader">oppurtunities</span></a></li>
						<li ><a> <b>Settings</b><span class="subheader">feel at home</span></a>
							<ul>
								<li><a href="profile_student_edit.php">Edit Profile</a></li>
								<li><a href="Student_PROFILE/profile_student_skills.php">Edit Skills </a></li>
								<li><a href="Student_PROFILE/profile_student_project.php">Edit Projects</a></li>								<li><a href="profile_student_area.php">Edit Area of Interest</a></li>
								<li><a href="profile_student_changepassword.php">Change Password</a></li>
							</ul>
						</li>
						<li><a href="./logout.php"><b>Logout</b><span class="subheader">sign out</span></a></li>						
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
					<span class="head">Privacy Policy</span>
					<ul class="breadcrumbs">
						<li><a href="index.php">home</a></li>
						<li>/ privacy policy</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	
	        	
	        	<!-- page content -->
	        	<div id="page-content-full">
	        	
						
					
	        		<h2 class="heading">Overview</h2>
					<p>
						We strongly respect your privacy and strive to provide a safe, secure user experience. 
						This Privacy Statement sets forth our online data collection and usage policies and practices. 
						By using our services, you consent to the policies and practices described in this Statement.<br><br>
						
						Your data will be stored and processed in or outside and your usage of the site constitutes consent 
						to the transfer of your data out of India. Our site may contain links to other website over which 
						we have no control and we are not responsible for the privacy policies or practices of other websites 
						to which you choose to link from the website. We encourage you to review the privacy policies of 
						those other websites so you can understand how they collect, use and share your information. 
						This Privacy Statement applies solely to the information we collect on researchintern.net and 
						not to information collected otherwise.
					</p>
					
					<h2 class="heading">Collection and Retention of Information</h2>
					<p>In some areas of our website, we request you to provide or submit personal information including your name,
					address, e-mail address, telephone number, contact information, and any other information from which your 
					identity is discernible. ResearchIntern also collects or may collect demographic information that is not
					unique to you such as your ZIP code, age, preferences and gender. Example of such a situation could be when
					you sign up to use our service, post a resume or enter a contest or survey. In addition we may indirectly 
					collect information about you when you use certain third party services on our website; such information 
					will be subject to, and treated in accordance with, the policies and practices described in this Statement.<br><br>
					
					We also gather or may gather certain information about your use of our site, such as what areas you visit 
					and what services you access. Moreover, there is information about your computer hardware and software that 
					is or may be collected by us. This information can include without limitation your IP address, browser type,
					domain names, access times and referring website addresses.<br><br>
					
					ResearchIntern may sometimes afford you the opportunity to provide descriptive, cultural, behavioral
					and preferential and/or life style information about yourself, but it is solely up to you whether you 
					furnish such information. If you do provide such information, you are thereby consenting to the use of 
					that information in accordance with the policies and practices described in this Statement. For example,
					such information may be used for the purpose of determining your potential interest in receiving email or
					other communications about particular products or services.<br><br>
					
					Please remember that if you post any of your personal information in public areas of ResearchIntern, 
					such as in online forums or chat rooms, such information may be collected and used by others over whom
					ResearchIntern has no control. We are not responsible for the use made by third parties of information 
					you post or otherwise make available in public areas of this website.<br><br>
					
					Since we believe that managing your career is a life-long process, we retain indefinitely all the 
					information we gather about you in an effort to make your repeat use with us more efficient, practical,
					and relevant. Of course, you can correct or update your account profile and resume at any time. Moreover,
					you can delete your resume from our online database or close your account at any time, in which event we 
					will remove all our copies of your resume and your account profile information except for an archival copy 
					which is not accessible on the internet.
                   </p>
				   
				   <h2 class="heading">Children</h2>
				   <p>ResearchIntern is not intended for children under 13 years of age. We do not knowingly collect personal 
				   information from children under 13.
				   </p>
				   
				   <h2 class="heading">Cookies</h2>
				   <p>Like many web sites, we set and use cookies to enhance your user experience, such as retaining your 
				   personal settings. Advertisements may appear on our web site and, if so, may set and access cookies on 
				   your computer and is subject to the privacy policy of those parties providing the advertisement. However, 
				   the companies serving the advertising do not have access to our cookies. These companies usually use 
				   non-personally identifiable or anonymous codes to obtain information about your visits to our site.
				   </p>
				   
				   <h2 class="heading">Changes to this Privacy Policy</h2>
				   <p>We may make changes to this Policy from time to time. We will notify you of substantial changes 
				   to this Policy either by posting a prominent announcement on our site and/or by sending a message 
				   to the e-mail address you have provided to us.
				   </p>
				   
				   <h2 class="heading">No Guarantees</h2>
				   <p>While this Privacy Policy states our standards for maintenance of data and we will make efforts 
				   to meet them, we are not in a position to guarantee these standards. There may be factors beyond 
				   our control that may result in disclosure of data. As a consequence, we disclaim any warranties 
				   or representations relating to maintenance or nondisclosure of data.
				   </p>
				   
				   <h2 class="heading">Contact Information</h2>
                   <p>If you have any questions about this Policy or our web site, please feel free to contact us at info@researchintern.net
				   </P>
				   
					
					
										
	        	</div>
	        	<!-- ENDS page content -->
	        	
	        	
				
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<?php include("./Student_PROFILE/student_footer.php"); ?>
		
	</body>
	
</html>
