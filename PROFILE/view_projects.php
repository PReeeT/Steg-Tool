<?php session_start(); ?>
<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>ResearchIntern - Enabling Research Collaborations</title>
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
		
		<!-- login -->
		<link rel="stylesheet" type="text/css" href="css/login-style.css" />
		<link rel="stylesheet" type="text/css" href="css/login-animate-custom.css" />
		
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
		
		.edit-but
		{
			padding:10px;
			background:rgba(0,0,0,0.6);
			color:yellow;
		}
		

	</head>
	
	<body lang="en">
	

		<!-- mobile-nav -->
		
		<!-- ENDS mobile-nav -->
			
		<header>
			
				
			<div class="wrapper">
					
								
				<nav >
					<ul id="nav" class="sf-menu" >
						<li class="current-menu-item"><a href="student_profile.php"><span><img src="img/user_avatar_s.jpg" style="float: left; padding: 3px; background: #fff; border: 1px solid #ccc;"/></span><b> &nbsp;<?php echo $_SESSION['username'] ?></b><span class="subheader"> my profile</span></a></li>
						<li><a><b>Projects</b><span class="subheader">oppurtunities</span></a>
						<ul>
								<li><a href="../PROFILE/add_projects.php">Add Projects</a></li>
                                <li><a href="../PROFILE/view_projects.php">View Projects</a></li>
                            </ul>
						</li>
						<li ><a> <b>Settings</b><span class="subheader">feel at home</span></a>
							<ul>
								<li><a href="../profile_student_edit.php">Edit Profile</a></li>
                                <li><a href="profile_student_skills.php">Edit Skills</a></li>
                                <li><a href="profile_student_project.php">Edit Projects</a></li>
								<li><a href="profile_student_area.php">Edit Area of Interest</a></li>
                                <li><a href="../profile_student_changepassword.php">Change Password</a></li>
					
							</ul>
						</li>
						<li><a href="../logout.php"><b>Logout</b><span class="subheader">sign out</span></a></li>						
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
					<span class="head">See your project(s)  here</span><span class="subhead"></span>
					<ul class="breadcrumbs">
						<li><a href="index.php">home</a></li>
						<li>/ apply</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	
	        	
	        	<!-- page content -->
	        	<div id="page-content-full">
	        	<?php
	        	$uname=$_SESSION["username"];
	        	$con=mysqli_connect("localhost","root","","steglsb");
	        	$query="SELECT * FROM projects WHERE Username='$uname'";
	        	$result=mysqli_query($con,$query);
	        	while($row=mysqli_fetch_array($result))
	        	{	
					echo "<table>";
	        		$tmp_id=$row['Project_id'];
					echo "<tr>";
					echo "<td><strong>Project Name</strong></td><td>".$row['Project_name']."</td>";	
					echo "</tr><tr>";
					echo "<td><strong>Project Description&nbsp;&nbsp;&nbsp;</strong></td><td>".$row['Project_description']."</td>";
					echo "</tr><tr>";
					echo "<td><strong>Project Due</strong></td><td>".$row['Due']."</t&d>";	
					echo "</tr></table><br><br>";
					echo "<a style='background:rgba(0,0,0,0.6);color:yellow;padding:10px;' href='edit_projects.php?id=$tmp_id'>Edit</a>";
					echo "<br>";
					echo "<br>";
				}
	        	?>
	        	</div>
	        	<!-- ENDS page content -->
	        	
	        	
				
				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<?php include("student_footer.php"); ?>
		
	</body>
	
</html>
