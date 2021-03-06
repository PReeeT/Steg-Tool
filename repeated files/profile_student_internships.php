<?php session_start(); ?>

<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>Internships - ResearchIntern</title>
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
						<li><a href="logout.php"><b>Logout</b><span class="subheader">sign out</span></a></li>						
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
					<span class="head">Project Shelf</span><span class="subhead">the cutting edge research origin</span>
					<ul class="breadcrumbs">
						<li><a href="index.php">home</a></li>
						<li>/ project-shelf</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	
	        	
	        	<!-- portfolio list -->
	        	<div class="featured portfolio-list">
	        		<figure>
	        			<img src="img/projects/2gram.png" alt="Alt text" />
	        			<div>
	        				<a href="calculategrammatrix.php" class="heading">Calculating Gram Matrix</a>
		        			An open source distributed GPU calculator for different distance functions would be an essential component for many high-performance learning algorithms
		        		</div>
		        		<a class="link" href="#"></a>
	        		</figure>
	        		
	        		<figure>
	        			<img src="img/projects/3rankmin.png" alt="Alt text" />
	        			<div>
	        				<a href="rankminimization.php" class="heading">Rank Minimization</a>
		        			This opens the way to a more scalable solution in distributed nodes. As SVMs are top-performing classiers that are widely deployed. 
		        		</div>
		        		<a class="link" href="#"></a>
	        		</figure>
	        		
	        		<figure>
	        			<img src="img/projects/1cluster.png" alt="Alt text" />
	        			<div>
	        				<a href="clusteringalgorithm.php" class="heading">Clustering Algorithm</a>
		        			A core step in the algorithm includes calculating a Gram matrix. The students could pick one, implement it to run it on a GPU cluster,<br>
		        		</div>
		        		<a class="link" href="#"></a>
	        		</figure>
	        		
	        		
	        		
	        		<figure>
	        			<img src="img/projects/4trot.png" alt="Alt text" />
	        			<div>
	        				<a href="suzuki.php" class="heading">Extending the Trotter-Suzuki implementation</a>
		        			The solver shows clear linear scalability across multiple nodes, making it extremely attractive for quantum simulations. 
		        		</div>
		        		<a class="link" href="#"></a>
	        		</figure>
	        		
	        		
					<figure>
	        			<img src="img/projects/5vector.png" alt="Alt text" />
	        			<div>
	        				<a href="scalablevector.php" class="heading">Scalable support vector machines</a>
		        			The number of clustering algorithms on the GPU is dizzying.The students could pick one, implement it to run it on a GPU cluster.
		        		</div>
		        		<a class="link" href="#"></a>
	        		</figure>
					
					<figure>
	        			<img src="img/projects/6greenvlc.png" alt="Alt text" />
	        			<div>
	        				<a href="greenvlc.php" class="heading">Green VLC</a>
		        			The main aim of the project is to create a 3D animation video about indoor communication using Light Emitting Diodes (LEDs) commonly known as Visible Light communication (VLC) 
		        		</div>
		        		<a class="link" href="#"></a>
	        		</figure>
	        		<div class="clearfix"></div>
					        		
	        	</div>
	        	<!-- ENDS featured -->
	        	
	        	
	        	        	
	        	
	        	<aside class="retractil">
	        		<div id="sidebar-opener">categories</div>
	        		<div id="sidebar-closer"><img src="img/close.png" alt="close"></div>
	        		<div id="sidebar-content">
						<ul>
							<li class="cat-item"><a href="#" title="View all posts">Computer Science</a></li>
							<li class="cat-item"><a href="#" title="View all posts">Electronics</a></li>
							<li class="cat-item"><a href="#" title="View all posts">Electricals</a></li>
							<li class="cat-item"><a href="#" title="View all posts">Communication</a></li>
							<li class="cat-item"><a href="#" title="View all posts">Instrumentation</a></li>
						</ul>
	        		</div>
	        	</aside>
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<?php 
	include("./Student_PROFILE/student_footer.php");
?>
		
	</body>
	
</html>
