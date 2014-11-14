<?php session_start(); ?>
<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>ResearchIntern - Terms and Conditions</title>
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
				    <li><a href="Student_PROFILE/student_profile.php"><?php echo $_SESSION['firstname'] ?></a></li>
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
					
				<a href="index.html" id="logo"><img  src="img/logo.png" alt="Tandem"></a>
				
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
					<span class="head">Terms of Service</span>
					<ul class="breadcrumbs">
						<li><a href="index.php">home</a></li>
						<li>/ terms of service</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	
	        	
	        	<!-- page content -->
	        	<div id="page-content-full">
	        	
			<h2 class="heading">1. Acceptance of Terms of Service</h2>
	        <p>ResearchIntern owns and operates this web, located at http://www.researchintern.net. This Terms of Service 
			Agreement (this Agreement) states the terms and conditions under which you may access and use the Web site.
			By accessing and using the Web site you are indicating your acceptance to be bound by the terms and conditions 
			of this Agreement. If you do not accept these terms and conditions, you must not access or use the Web site. 
			IF YOU ARE DISSATISFIED WITH THE TERMS, CONDITIONS, RULES, POLICIES, GUIDELINES OR PRACTICES OF THE ResearchIntern, 
			YOUR SOLE AND EXCLUSIVE REMEDY IS TO DISCONTINUE USING IT. ResearchIntern may revise this Agreement at any time 
			by updating this posting. Use of the Web site after such changes are posted will signify your agreement to these 
			revised terms. You should visit this page periodically to review this Agreement.</p>

          <h2 class="heading">2. Our Service</h2>
          <p>Our website and services provided to you on and through our web site on an "AS IS" basis. 
		  You agree that the owners of this web site exclusively reserve the right and may, at any time and without 
		  notice and any liability to you, modify or discontinue this website and its services or delete the data you provide, 
		  whether temporarily or permanently. We shall have no responsibility or liability for the timeliness, deletion, failure
		  to store, inaccuracy, or improper delivery of any data or information.</p>

         <h2 class="heading">3. Your Responsibilities and Registration Obligations</h2>
         <p>In order to use this website, you must register on our site, agree to provide truthful information when requested, 
		 and be at least the age of thirteen (13) or older. When registering, you explicitly agree to our Terms of Service 
		 and as may be modified by us from time to time and available here.</p>

         <h2 class="heading">4. Privacy Policy</h2>
         <p>Registration data and other personally identifiable information that we may collect is subject to the terms 
		 of our Privacy Policy.</p>

         <h2 class="heading">5. User Conduct</h2>
         <p>You agree that all information or data of any kind, whether text, software, code, music or sound, 
		 photographs or graphics, video or other materials ("Content"), publicly or privately provided, shall 
		 be the sole responsibility of the person providing the Content or the person whose user account is used.
		 You agree that our website may expose you to content that may be objectionable or offensive. We shall not
		 be responsible to you in any way for the content that appears on this website nor for any error or omission.<br><br>

         You explicitly agree, in using this website or any service provided, that you shall not:<br><br>

         provide any content or perform any conduct that may be unlawful, illegal, threatening, harmful, abusive, harassing,
		 stalking, tortuous, defamatory, libelous, vulgar, obscene, offensive, objectionable, pornographic, designed to or 
		 does interfere or interrupt this website or any service provided, infected with a virus or other destructive or 
		 deleterious programming routine, give rise to civil or criminal liability, or which may violate an applicable local,
		 national or international law;<br>
		 
        impersonate or misrepresent your association with any person or entity, or forge or otherwise seek to conceal or 
		misrepresent the origin of any Content provided by you;<br>
		
         collect or harvest any data about other users;<br>
		 
         provide or use this website and any Content or service in any commercial manner or in any manner that would 
		 involve junk mail, spam, chain letters, pyramid schemes, or any other form of unauthorized advertising without 
		 our prior written consent;<br>
		 
         provide any content that may give rise to our civil or criminal liability or which may constitute or be considered
		 a violation of any local, national or international law, including but not limited to laws relating to copyright, 
		 trademark, patent, or trade secrets.</p>

         <h2 class="heading">6. Submission of Content on this Website</h2>

         <p>By providing any Content to our website:<br><br>

         You agree to grant to us a worldwide, royalty-free, perpetual, non-exclusive right and license (including any moral 
		 rights or other necessary rights) to use, display, reproduce, modify, adapt, publish, distribute, perform, promote, 
		 archive, translate, and to create derivative works and compilations, in whole or in part. Such license will apply with 
		 respect to any form, media, technology known or later developed;<br>
        you warrant and represent that you have all legal, moral, and other rights that may be necessary to grant us with 
		the license set forth in this Section 7;<br>
        you acknowledge and agree that we shall have the right (but not obligation), in our sole discretion, to refuse to publish 
        or to remove or block access to any content you provide at any time and for any reason, with or without notice.</p>

        <h2 class="heading">7. Third Party Services</h2>
        <p>Goods and services of third parties may be advertised and/or made available on or through this website. 
		Representations made regarding products and services provided by third parties are governed by the policies 
		and representations made by these third parties. We shall not be liable for or responsible in any manner for 
		any of your dealings or interaction with third parties.</p>

       <h2 class="heading">8. Indemnification</h2>
       <p>You agree to indemnify and hold us harmless, our subsidiaries, affiliates, related parties, officers, 
	   directors, employees, agents, independent contractors, advertisers, partners, and co-branders from any claim or demand, 
	   including reasonable attorney's fees, that may be made by any third party, that is due to or arising out of your conduct 
	   or connection with this website or service, your provision of content, your violation of this Terms of Use or any other 
	   violation of the rights of another person or party.</p>

       <h2 class="heading">9. Disclaimer of warranties</h2>
       <p>Your understand and agree that your use of this website and any services or content provided (the "service") 
	   is made available and provided to you at your own risk. It is provided to you "as is" and we expressly disclaim 
	   all warranties of any kind, implied or express, including but not limited to the warranties of merchantability, 
	   fitness for a particular purpose, and non-infringement.</p>
					
					
					
		</div>
	    <!-- ENDS page content -->
	        	
	        	
				
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<?php include("student_footer.php"); ?>
	</body>
	
</html>
