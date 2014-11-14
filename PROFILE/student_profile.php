<?php 
	session_start();
	$con=mysqli_connect("localhost", "root", "","StegLSB");
	$uname=$_SESSION["username"];
	$uname=md5($uname);
	$q="select * from users_entity where Username='$uname'";
	$result=mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
		$avatar_name=$row["AvatarName"];
		//echo $avatar_name;
	}
?>
<!doctype html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml">

	<head>
            <style>
                .pop
                {
                    text-align: right;
                    color: red;
                }
                </style>
		<meta charset="utf-8"/>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Profile - StegTool</title>
		<!--[if lt IE 9]>
			<script src="js/css3-mediaqueries.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		
		
		<!-- JS -->
		<script src="js/jquery-1.6.4.min.js"></script>
		
                <!--POP UP-->
                <link rel="stylesheet" type="text/css" href="style.css"/>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
                <script type="text/javascript" src="custom.js"></script>


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
		
		<!-- profile -->
		<link rel="stylesheet" href="global.css"/>
		
		<!-- modernizr -->
		<script src="js/modernizr.js"></script>
		
		<style type="text/css">
			#skill_graph { 
					list-style:none; 
					padding-top:30px;
				   }

			#skill_graph li { 
					margin-bottom:70px; 
					background:#1B3647; 
					height:5px; 
					border-radius:3px; 
					border-left:1px solid #111; 
					border-top:1px solid #111; 
					border-right:1px solid #333; 
					border-bottom:1px solid #333;  
					  }

			#skill_graph li em { 
					position:relative; 
					top:-30px;
						}
			#skill_graph li strong { 
					position:relative; 
					top:-30px;
						}

			.expand_graph { 
					height:1px; 
					margin:2px 0; 
					background:#F8F03D; 
					position:absolute;
					box-shadow:0px 0px 10px 1px #F8F03D;
					}

			.size1 { width:10%; -moz-animation:size10 2s ease-out; -webkit-animation:size10 2s ease-out; }
			.size2 { width:20%; -moz-animation:size20 2s ease-out; -webkit-animation:size20 2s ease-out; }
			.size3 { width:30%; -moz-animation:size30 2s ease-out; -webkit-animation:size30 2s ease-out; }
			.size4 { width:40%; -moz-animation:size40 2s ease-out; -webkit-animation:size40 2s ease-out; }
			.size5 { width:50%; -moz-animation:size50 2s ease-out; -webkit-animation:size50 2s ease-out; }
			.size6 { width:60%; -moz-animation:size60 2s ease-out; -webkit-animation:size60 2s ease-out; }
			.size7 { width:70%; -moz-animation:size70 2s ease-out; -webkit-animation:size70 2s ease-out; }
			.size8 { width:80%; -moz-animation:size80 2s ease-out; -webkit-animation:size80 2s ease-out; }
			.size9 { width:90%; -moz-animation:size90 2s ease-out; -webkit-animation:size90 2s ease-out; }
			.size10 { width:100%; -moz-animation:size100 2s ease-out; -webkit-animation:size100 2s ease-out; }

			@-moz-keyframes size10 { 0%  { width:0px;} 100%{ width:10%;} }
			@-moz-keyframes size20 { 0%  { width:0px;} 100%{ width:20%;} }
			@-moz-keyframes size30 { 0%  { width:0px;} 100%{ width:30%;} }
			@-moz-keyframes size40 { 0%  { width:0px;} 100%{ width:40%;} }
			@-moz-keyframes size50 { 0%  { width:0px;} 100%{ width:50%;} }
			@-moz-keyframes size60 { 0%  { width:0px;} 100%{ width:60%;} }
			@-moz-keyframes size70 { 0%  { width:0px;} 100%{ width:70%;} }
			@-moz-keyframes size80 { 0%  { width:0px;} 100%{ width:80%;} }
			@-moz-keyframes size90 { 0%  { width:0px;} 100%{ width:90%;} }
			@-moz-keyframes size100 { 0%  { width:0px;} 100%{ width:100%;} }
			

			@-webkit-keyframes size10 { 0%  { width:0px;} 100%{ width:10%;} }
			@-webkit-keyframes size20 { 0%  { width:0px;} 100%{ width:20%;} }
			@-webkit-keyframes size30 { 0%  { width:0px;} 100%{ width:30%;} }
			@-webkit-keyframes size40 { 0%  { width:0px;} 100%{ width:40%;} }
			@-webkit-keyframes size50 { 0%  { width:0px;} 100%{ width:50%;} }
			@-webkit-keyframes size60 { 0%  { width:0px;} 100%{ width:60%;} }
			@-webkit-keyframes size70 { 0%  { width:0px;} 100%{ width:70%;} }
			@-webkit-keyframes size80 { 0%  { width:0px;} 100%{ width:80%;} }
			@-webkit-keyframes size90 { 0%  { width:0px;} 100%{ width:90%;} }
			@-webkit-keyframes size100 { 0%  { width:0px;} 100%{ width:100%;} }
			

		</style>
		

	</head>
	
	<body lang="en">
	

		<!-- mobile-nav -->
		<div id="mobile-nav-holder">
			<div class="wrapper">
				<ul id="mobile-nav">
					<li  class="current-menu-item"><a href="../profile_student_index.php">HOME</a></li>
					<li><a href="../profile_student_internships.php">INTERNSHIPS</a></li>
					<li><a href="http://www.researchintern.wordpress.com">BLOG</a></li>
					<li><a href="../profile_student_how_it_works.php">HOW IT WORKS</a></li>
					<li><a href="../profile_student_contact.php">CONTACT US</a></li>
					<li><a href="../logout.php">LOGOUT</a></li>
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
						<li class="current-menu-item"><a href="student_profile.php"><span><img src="../avatars/<?php echo $avatar_name; ?>" width="30" height="30" style="float: left; padding: 3px; background: #fff; border: 1px solid #ccc;"/></span><b> &nbsp;<?php echo $_SESSION['firstname'] ?></b><span class="subheader"> my profile</span></a></li>
						<li><a><b>Projects</b><span class="subheader">oppurtunities</span></a>
						<ul>
								<li><a href="../PROFILE/add_projects.php">Add Projects</a></li>
                                <li><a href="../PROFILE/view_projects.php">View Projects</a></li>
                            </ul>
						</li>
						<li ><a> <b>Settings</b><span class="subheader">keep updates</span></a>
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
					<span class="head"><?php echo $_SESSION['firstname']," ", $_SESSION['lastname'] ?>'s Profile</span><span class="subhead"></span>
					<ul class="breadcrumbs">
						<li><a href="profile_student_index.php">home</a></li>
						<li>/ <?php echo $_SESSION['firstname']," ", $_SESSION['lastname'] ?></li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	
	        	<!-- page content -->
	        	<div id="page-content">
	        	
	        	
				<div id="userStats" class="clearfix1">
				<div class="pic">
					<a href="#"><img src="../avatars/<?php echo $avatar_name; ?>" width="150" height="150" /></a>
				</div>
				
					<div class="data">
					<br>
					<h1><?php echo $_SESSION['firstname']; echo " "; echo $_SESSION['lastname']; ?></h1>
					<br><br>
					<h3>Studies at <?php echo $_SESSION['univ'] ?> </h3>
					<h4>Lives in <?php echo $_SESSION['city'] ?></a></h4>
					
					<!--<div class="sep"></div>
					<ul class="numbers clearfix">
						<li>Reputation<strong>185</strong></li>
						<li>Checkins<strong>344</strong></li>
						<li class="nobrdr">Days Out<strong>127</strong></li>
					</ul>-->
					</div>
				</div>	
					<div class="clearfix"></div>
					
					</br></br>
	        		<h2 class="heading">About Me</h2>
	        		
					<p style="padding:8px; background: #fff; border-radius: 5px 5px 0px 0px; -o-border-radius: 5px 5px 0px 0px; -webkit-border-radius: 5px 5px 0px 0px; -moz-border-radius: 5px 5px 0px 0px;">
						<?php echo  $_SESSION['aboutme'] ?>
					</p>
					
					<h2 class="heading">Educational Details</h2>
					<p style="padding:8px; background: #fff; border-radius: 5px 5px 0px 0px; -o-border-radius: 5px 5px 0px 0px; -webkit-border-radius: 5px 5px 0px 0px; -moz-border-radius: 5px 5px 0px 0px;">
						<strong>Stream of Study :</strong> <?php echo $_SESSION['sos'] ?></br>
						<strong>University:</strong> <?php echo $_SESSION['univ'], ", ",$_SESSION['country'] ?></br>
						<strong>Expected year of Passing:</strong> <?php echo $_SESSION['eyp'] ?></br>
						<!--strong>Courses Covered:</strong> Data Structures and Algorithms, OOP with C++, Core Java, Operating Systems, Computer Networks, Web Programming</br-->
						<strong>CGPA *:</strong> <?php echo $_SESSION['cgpa'] ?>/10</br>
					</p>
                                        
					<?php
                                                        include("connection.php");
                                                        $name1 = $_SESSION['uname'];
                                                        $sql1="Select * from skills where Name='$name1'";
                                                        $data1 = mysql_query($sql1);
                                                        $result1 = mysql_fetch_array($data1);
                                    if(($result1['Skill_1']=="NONE") && ($result1['Skill_2']=="NONE") && ($result1['Skill_3']=="NONE") && ($result1['Skill_4']=="NONE")  && ($result1['Skill_5']=="NONE") )
                                                 {
                                         ?>
					<h2 class="heading"><a href="profile_student_skills.php" style="text-decoration:none">Skills and Expertise</a></h2>
						<div style="padding:8px; background: #fff; border-radius: 5px 5px 0px 0px; -o-border-radius: 5px 5px 0px 0px; -webkit-border-radius: 5px 5px 0px 0px; -moz-border-radius: 5px 5px 0px 0px; margin: 0 auto; overflow: hidden;">
							<div style="width:278px;	margin:0;	position:relative;	float:left;	font-size:12px;	line-height:2em;	padding:30px 0 30px;">
								<div style="width:280px;">
                                                                </div>
                                                        </div>
                                                </div>
                                                 <?php
                                                 }
                                                 if(($result1['Skill_1']!="NONE") && ($result1['Skill_2']=="NONE") && ($result1['Skill_3']=="NONE") && ($result1['Skill_4']=="NONE")  && ($result1['Skill_5']=="NONE") )
                                                 {
                                                 ?>
                                                <h2 class="heading"><a href="profile_student_skills.php" style="text-decoration:none">Skills and Expertise</a></h2>
						<div style="padding:8px; background: #fff; border-radius: 5px 5px 0px 0px; -o-border-radius: 5px 5px 0px 0px; -webkit-border-radius: 5px 5px 0px 0px; -moz-border-radius: 5px 5px 0px 0px; margin: 0 auto; overflow: hidden;">
							<div style="width:278px;	margin:0;	position:relative;	float:left;	font-size:12px;	line-height:2em;	padding:30px 0 30px;">
								<div style="width:280px;">
								<ul id="skill_graph">
                                                                    <li><span class="expand_graph size<?php $val1 = $result1['Rate_1']; echo ''.$val1.''; ?>"></span><strong><?php $sk1=$result1['Skill_1']; echo ''.$sk1.''; ?></strong></li>
                                                                </div>
                                                        </div>
                                                </div>
                                                 <?php
                                                 }
                                                  if(($result1['Skill_1']!="NONE") && ($result1['Skill_2']!="NONE") && ($result1['Skill_3']=="NONE") && ($result1['Skill_4']=="NONE")  && ($result1['Skill_5']=="NONE") )
                                                 {
                                                 ?>
                                                <h2 class="heading"><a href="profile_student_skills.php" style="text-decoration:none">Skills and Expertise</a></h2>
                                                <div style="padding:8px; background: #fff; border-radius: 5px 5px 0px 0px; -o-border-radius: 5px 5px 0px 0px; -webkit-border-radius: 5px 5px 0px 0px; -moz-border-radius: 5px 5px 0px 0px; margin: 0 auto; overflow: hidden;">
							<div style="width:278px;	margin:0;	position:relative;	float:left;	font-size:12px;	line-height:2em;	padding:30px 0 30px;">
								<div style="width:280px;">
								<ul id="skill_graph">
                                                                    <li><span class="expand_graph size<?php $val1 = $result1['Rate_1']; echo ''.$val1.''; ?>"></span><strong><?php $sk1=$result1['Skill_1']; echo ''.$sk1.''; ?></strong></li>
								    <li><span class="expand_graph size<?php $val2 = $result1['Rate_2']; echo ''.$val2.''; ?>"></span><strong><?php $sk2=$result1['Skill_2']; echo ''.$sk2.''; ?></strong></li>
                                                                </div>
                                                        </div>
                                                </div>
                                                 <?php
                                                 }
                                                 if(($result1['Skill_1']!="NONE") && ($result1['Skill_2']!="NONE") && ($result1['Skill_3']!="NONE") && ($result1['Skill_4']=="NONE")  && ($result1['Skill_5']=="NONE") )
                                                 {
                                                 ?>
                                                
                                                <h2 class="heading"><a href="profile_student_skills.php" style="text-decoration:none">Skills and Expertise</a></h2>
                                                <div style="padding:8px; background: #fff; border-radius: 5px 5px 0px 0px; -o-border-radius: 5px 5px 0px 0px; -webkit-border-radius: 5px 5px 0px 0px; -moz-border-radius: 5px 5px 0px 0px; margin: 0 auto; overflow: hidden;">
							<div style="width:278px;	margin:0;	position:relative;	float:left;	font-size:12px;	line-height:2em;	padding:30px 0 30px;">
								<div style="width:280px;">
								<ul id="skill_graph">
                                                                    <li><span class="expand_graph size<?php $val1 = $result1['Rate_1']; echo ''.$val1.''; ?>"></span><strong><?php $sk1=$result1['Skill_1']; echo ''.$sk1.''; ?></strong></li>
								    <li><span class="expand_graph size<?php $val2 = $result1['Rate_2']; echo ''.$val2.''; ?>"></span><strong><?php $sk2=$result1['Skill_2']; echo ''.$sk2.''; ?></strong></li>
                                                                    <li><span class="expand_graph size<?php $val3 = $result1['Rate_3']; echo ''.$val3.''; ?>"></span><strong><?php $sk3=$result1['Skill_3']; echo ''.$sk3.''; ?></strong></li>
                                                                </div>
                                                        </div>
                                                </div>
                                                 <?php
                                                 }
                                                 if(($result1['Skill_1']!="NONE") && ($result1['Skill_2']!="NONE") && ($result1['Skill_3']!="NONE") && ($result1['Skill_4']!="NONE")  && ($result1['Skill_5']=="NONE") )
                                                 {
                                                 ?>
                                                <h2 class="heading"><a href="profile_student_skills.php" style="text-decoration:none">Skills and Expertise</a></h2>
                                                <div style="padding:8px; background: #fff; border-radius: 5px 5px 0px 0px; -o-border-radius: 5px 5px 0px 0px; -webkit-border-radius: 5px 5px 0px 0px; -moz-border-radius: 5px 5px 0px 0px; margin: 0 auto; overflow: hidden;">
							<div style="width:278px;	margin:0;	position:relative;	float:left;	font-size:12px;	line-height:2em;	padding:30px 0 30px;">
								<div style="width:280px;">
								<ul id="skill_graph">
                                                                    <li><span class="expand_graph size<?php $val1 = $result1['Rate_1']; echo ''.$val1.''; ?>"></span><strong><?php $sk1=$result1['Skill_1']; echo ''.$sk1.''; ?></strong></li>
								    <li><span class="expand_graph size<?php $val2 = $result1['Rate_2']; echo ''.$val2.''; ?>"></span><strong><?php $sk2=$result1['Skill_2']; echo ''.$sk2.''; ?></strong></li>
                                                                    <li><span class="expand_graph size<?php $val3 = $result1['Rate_3']; echo ''.$val3.''; ?>"></span><strong><?php $sk3=$result1['Skill_3']; echo ''.$sk3.''; ?></strong></li>
                                                                    <li><span class="expand_graph size<?php $val4 = $result1['Rate_4']; echo ''.$val4.''; ?>"></span><strong><?php $sk4=$result1['Skill_4']; echo ''.$sk4.''; ?></strong></li>
                                                                </div>
                                                        </div>
                                                </div>
                                                 <?php
                                                 }
                                                 if(($result1['Skill_1']!="NONE") && ($result1['Skill_2']!="NONE") && ($result1['Skill_3']!="NONE") && ($result1['Skill_4']!="NONE")  && ($result1['Skill_5']!="NONE") )
                                                 {
                                                 ?>
                                                <h2 class="heading"><a href="profile_student_skills.php" style="text-decoration:none">Skills and Expertise</a></h2>
                                                <div style="padding:8px; background: #fff; border-radius: 5px 5px 0px 0px; -o-border-radius: 5px 5px 0px 0px; -webkit-border-radius: 5px 5px 0px 0px; -moz-border-radius: 5px 5px 0px 0px; margin: 0 auto; overflow: hidden;">
							<div style="width:278px;	margin:0;	position:relative;	float:left;	font-size:12px;	line-height:2em;	padding:30px 0 30px;">
								<div style="width:280px;">
								<ul id="skill_graph">
                                                                    <li><span class="expand_graph size<?php $val1 = $result1['Rate_1']; echo ''.$val1.''; ?>"></span><strong><?php $sk1=$result1['Skill_1']; echo ''.$sk1.''; ?></strong></li>
								    <li><span class="expand_graph size<?php $val2 = $result1['Rate_2']; echo ''.$val2.''; ?>"></span><strong><?php $sk2=$result1['Skill_2']; echo ''.$sk2.''; ?></strong></li>
                                                                    <li><span class="expand_graph size<?php $val3 = $result1['Rate_3']; echo ''.$val3.''; ?>"></span><strong><?php $sk3=$result1['Skill_3']; echo ''.$sk3.''; ?></strong></li>
                                                                    <li><span class="expand_graph size<?php $val4 = $result1['Rate_4']; echo ''.$val4.''; ?>"></span><strong><?php $sk4=$result1['Skill_4']; echo ''.$sk4.''; ?></strong></li>
                                                                    <li><span class="expand_graph size<?php $val5 = $result1['Rate_5']; echo ''.$val5.''; ?>"></span><strong><?php $sk5=$result1['Skill_5']; echo ''.$sk5.''; ?></strong></li>
								</ul>
								</div>
							</div>
						</div>
                                                <?php
                                                 }
                                                 ?>
                                                
                                                
						<!--end of skills-->
						</br>
						 <?php
								$con = mysqli_connect("localhost","root","","StegLSB");
								$name3 = $_SESSION['uname'];
								$sql2="Select * from interest where Name='$name3'";
								$data2 = mysqli_query($con, $sql2);
								$result2 = mysqli_fetch_array($data2);
						?>
													   
						<!--end of skills-->
						</br>
						<h2 class="heading"><a href="profile_student_area.php">Areas of Interest</a></h2>
						  <div style="padding:8px; background: #fff; border-radius: 5px 5px 0px 0px; -o-border-radius: 5px 5px 0px 0px; -webkit-border-radius: 5px 5px 0px 0px; -moz-border-radius: 5px 5px 0px 0px; margin: 0 auto; overflow: hidden;">
						<p style="padding:8px; background: #fff; border-radius: 5px 5px 0px 0px; -o-border-radius: 5px 5px 0px 0px; -webkit-border-radius: 5px 5px 0px 0px; -moz-border-radius: 5px 5px 0px 0px;">
							
							
							<?php $vtb1 = $result2['interest1']; echo ''.$vtb1.''; ?></br>
							<?php $vtb2 = $result2['interest2']; echo ''.$vtb2.''; ?></br>
							<?php $vtb3 = $result2['interest3']; echo ''.$vtb3.''; ?></br>
							<?php $vtb4 = $result2['interest4']; echo ''.$vtb4.''; ?></br>
							<?php $vtb5 = $result2['interest5']; echo ''.$vtb5.''; ?></br>
										</p>
                   </div>
					
					<!--2 cols -->
					<!--div class="one-half">
						<h2 class="heading">One half columns</h2>
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
					</div>
					
					<div class="one-half last">
						<h2 class="heading">One half columns</h2>
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
					</div>
					<div class="clearfix"></div-->
					<!-- ENDS 2 cols -->
					
					
					<!-- 3 cols -->
					<!--div class="one-third">
						<h2 class="heading">One third columns</h2>
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
					</div>
					
					<div class="one-third">
						<h2 class="heading">One third columns</h2>
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
					</div>
					
					<div class="one-third last">
						<h2 class="heading">One third columns</h2>
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
					</div>
					<div class="clearfix"></div-->
					<!-- ENDS 3 cols -->
					
					
	        		
	        	</div>
	        	<!-- ENDS page content -->
	        	
	        	<!-- sidebar -->
	        	<aside id="sidebar">
	        		<div class="block">
		        		<!--h4>Sidebar</h4-->
		        		<a href="../rilive popup/popup.html" target="_blank" style="margin-left:auto; margin-right:auto; width:91%; border: 2px solid #1B3647;"class="link-button blue"><img src="img/rilive.png"></a><br><br>
		        		<div class="gcontent">
				<div class="head"><h4 style="font-family: Allan, helvetica, arial, sans-serif;	color: #eaeaea; font-size: 18px;">Badges(3)</h4></div>
				<div style="border-radius: 0px 0px 5px 5px; border: 1px solid #1B3647; border-top: 0px; padding: 10px 8px; background: #F5F5F5;">
					<p>Keep working to unlock badges!</p>
					
					<div style="margin-bottom: 30px;">
						<a href="#"><img src="img/foursquare-badge.png" /></a>
						<a href="#"><img src="img/foursquare-badge.png" /></a>
						<a href="#"><img src="img/foursquare-badge.png" /></a>
					</div>
					
					<span><a href="#">See all..</a></span>
				</div>
			</div>
                                        
                                       
                                        
			<?php
                                                        include("connection.php");
                                                        $name = $_SESSION['uname'];
                                                        $sql="Select * from project where Name='$name'";
                                                        $data = mysql_query($sql);
                                                 
                                                        $info = mysql_fetch_array($data);
?>
			<div class="gcontent">
				<div class="head"><h4 style="font-family: Allan, helvetica, arial, sans-serif;	color: #eaeaea; font-size: 18px;">Projects List</h4></div>
				<div style="border-radius: 0px 0px 5px 5px; border: 1px solid #1B3647; border-top: 0px; padding: 10px 8px; background: #F5F5F5;">
					<p><a href="profile_student_project.php">Add Project Here.....<a></p>
					
					<div class="friendslist clearfix1">
                                            <?php
                                            
                                             for($i = 1; $i<20 ; $i++)
                                                        {
                                                            
                                                          if($info['Project_'+$i]!="NONE")
                                                           {
                                                         ?>
                                                            <div>
                                                                        <a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popupre<?php echo "".$i."" ?>" class="popup"><span style="position: relative; top: -14px; "><?php print "".$info['Project_'+$i].""; ?> </span></a>
                                                             </div>
                                                        <?php
                                                        $i++;
                                                            }
                                                             else
                                                            {
                                                                break;
                                                            }
                                                           
                                               } 
                                                
                                            
                                            ?>
                                </div>
			</div>	        	
                                
					</div>	        	
	        	</aside>
	        	<div class="clearfix"></div>
				<!-- ENDS sidebar -->
	        	
	        	<!--POP UP -->
                        <div class="popupbox3" id="popupre1">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$info['Description_1']."";
                                  ?>
                                     </div>
                                 </div>
                        
                                <div class="popupbox3" id="popupre2">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$info['Description_2']."";
                                  ?>
                                     </div>
                                 </div>
                        
                        <div class="popupbox3" id="popupre3">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$info['Description_3']."";
                                  ?>
                                     </div>
                                 </div>
                        
                        <div class="popupbox3" id="popupre4">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$info['Description_4']."";
                                  ?>
                                     </div>
                                 </div>
                        
                        <div class="popupbox3" id="popupre5">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$info['Description_5']."";
                                  ?>
                                     </div>
                                 </div>
                                
                                <div class="popupbox3" id="popupre6">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$info['Description_6']."";
                                  ?>
                                     </div>
                                 </div>
                                
                                <div class="popupbox3" id="popupre7">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$info['Description_7']."";
                                  ?>
                                     </div>
                                 </div>
                                
                                <div class="popupbox3" id="popupre8">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$info['Description_8']."";
                                  ?>
                                     </div>
                                 </div>
                                
                                <div class="popupbox3" id="popupre9">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$info['Description_9']."";
                                  ?>
                                     </div>
                                 </div>
                                
                                <div class="popupbox3" id="popupre10">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$info['Description_10']."";
                                  ?>
                                     </div>
                                 </div>
                        <!-- END POP UP -->
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<?php include("student_footer.php"); ?>
		
	</body>
	
</html>
