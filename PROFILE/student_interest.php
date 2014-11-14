<?php session_start(); ?>

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
		<title>Profile - ResearchIntern</title>
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
			
	 .pro_button
				{
				background: #1B3647;
				color: #fff;
				padding-left:20px;
				padding-right:20px;
				padding-top:10px;
				padding-bottom:10px;
				border-radius:5px 5px 5px 5px;
				-moz-border-radius:5px 5px 5px 5px;
				-webkit-border-radius:5px 5px 5px 5px;
				-o-border-radius:5px 5px 5px 5px;
				border: #1B3647 1px solid;
				font-size:18px;
				margin-left:35px;
				margin-right:35px;
				}
				
				.pro_button:hover
				{
				background: #1B3647;
				color: #ffe300;
				padding-left:20px;
				padding-right:20px;
				padding-top:10px;
				padding-bottom:10px;
				border-radius:5px 5px 5px 5px;
				-moz-border-radius:5px 5px 5px 5px;
				-webkit-border-radius:5px 5px 5px 5px;
				-o-border-radius:5px 5px 5px 5px;
				border: #ffe300 1px solid;
				font-size:18px;
				margin-left:35px;
				margin-right:35px;
				}
			
			
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
						<li class="current-menu-item"><a href="student_profile.php"><span><img src="img/user_avatar_s.jpg" style="float: left; padding: 3px; background: #fff; border: 1px solid #ccc;"/></span><b> &nbsp;<?php echo $_SESSION['firstname'] ?></b><span class="subheader"> my profile</span></a></li>
						<li><a href="../profile_student_index.php"><b>Home</b><span class="subheader">welcome</span></a></li>
						<li><a href="../profile_student_internships.php"><b>Internships</b><span class="subheader">oppurtunities</span></a></li>
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
					<a href="#"><img src="img/user_avatar.jpg" width="150" height="150" /></a>
				</div>
				
					<div class="data">
					<h1><?php echo $_SESSION['firstname']," ", $_SESSION['lastname'] ?></h1>
					<h3>Studies at <?php echo $_SESSION['univ'] ?> </h3>
					<h4>Lives in <?php echo $_SESSION['city'],", ",$_SESSION['country'] ?></a></h4>
					
					<div class="sep"></div>
					<ul class="numbers clearfix">
						<li>Reputation<strong>185</strong></li>
						<li>Checkins<strong>344</strong></li>
						<li class="nobrdr">Days Out<strong>127</strong></li>
					</ul>
					</div>
				</div>	
					<div class="clearfix"></div>
					
					
						<div class="wrapper">
				
						                                       <?php
    include("connection.php");
    $name3 = $_SESSION['name'];
    $sql2="Select * from interest where Name='$name3'";
    $data2 = mysql_query($sql2);
    
    $result2 = mysql_fetch_array($data2);
    ?>							
										
					
                                                 <form action="interest_db.php" method="POST">
												 <fieldset style="border:1px;color:black;" >
												<h1><legend>My Interests</legend></h1>
                               <textarea rows="2" cols="50" type="text"  name="interest" ><?php $vtb1 = $result2['interest1']; echo ''.$vtb1.''; ?></textarea>  
							    <textarea rows="2" cols="50" type="text"  name="interes1" ><?php $vtb2 = $result2['interest2']; echo ''.$vtb2.''; ?></textarea>  
								 <textarea rows="2" cols="50" type="text"  name="interest2" ><?php $vtb3 = $result2['interest3']; echo ''.$vtb3.''; ?> </textarea>  
								  <textarea rows="2" cols="50" type="text"  name="interest3"><?php $vtb4 = $result2['interest4']; echo ''.$vtb4.''; ?> </textarea>  
								   <textarea rows="2" cols="50" type="text"  name="interest4" > <?php $vtb5 = $result2['interest5']; echo ''.$vtb5.''; ?></textarea></br>  
                               <input type="Submit" class="pro_button" value="Submit">	 </br>						   
							   
							   </fieldset>
                                                </form>
												</div>
												
					
					</br></br>
	        		
                                                
						<!--end of skills-->
						</br>
						
					
					
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
                                                        $name = $_SESSION['name'];
                                                        $sql="Select * from project where Name='$name'";
                                                        $data = mysql_query($sql);
                                                        $result = mysql_fetch_array($data);
                                                 if(($result['Project_1']=="NONE") && ($result['Project_2']=="NONE") && ($result['Project_3']=="NONE") && ($result['Project_4']=="NONE")  && ($result['Project_5']=="NONE") )
                                                 {
                                                     ?>
                                                     <div class="gcontent">
				<div class="head"><h4 style="font-family: Allan, helvetica, arial, sans-serif;	color: #eaeaea; font-size: 18px;"><a href="profile_student_project.php" style="text-decoration:none">Projects List</a></h4></div>
				<div style="border-radius: 0px 0px 5px 5px; border: 1px solid #1B3647; border-top: 0px; padding: 10px 8px; background: #F5F5F5;">
					<p>Number of projects - 10 total</p>
					
                                </div>
                                                     </div>
                                            <?php
                                                 }
                                                 
                                                 if( ($result['Project_1']!="NONE") && ($result['Project_2']=="NONE") && ($result['Project_3']=="NONE") && ($result['Project_4']=="NONE")  && ($result['Project_5']=="NONE") )
                                                 {
                                                     ?>
                                                     <div class="gcontent">
				<div class="head"><h4 style="font-family: Allan, helvetica, arial, sans-serif;	color: #eaeaea; font-size: 18px;"><a href="profile_student_project.php" style="text-decoration:none">Projects List</a></h4></div>
				<div style="border-radius: 0px 0px 5px 5px; border: 1px solid #1B3647; border-top: 0px; padding: 10px 8px; background: #F5F5F5;">
					<p>Number of projects - 10 total</p>
					
					<div class="friendslist clearfix1">
						<div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popuprel" class="popup"><span style="position: relative; top: -14px; "><?php print "".$result['Project_1'].""; ?> </span></a>
						</div>
                                        </div>
                                </div>
                            <?php
                             }
                            if( ( $result['Project_1']!="NONE") &&($result['Project_2']!="NONE") && ($result['Project_3']=="NONE") && ($result['Project_4']=="NONE")  && ($result['Project_5']=="NONE"))
                                                 {
                                                     ?>
                                                     <div class="gcontent">
				<div class="head"><h4 style="font-family: Allan, helvetica, arial, sans-serif;	color: #eaeaea; font-size: 18px;"><a href="profile_student_project.php" style="text-decoration:none">Projects List</a></h4></div>
				<div style="border-radius: 0px 0px 5px 5px; border: 1px solid #1B3647; border-top: 0px; padding: 10px 8px; background: #F5F5F5;">
					<p>Number of projects - 10 total</p>
					
					<div class="friendslist clearfix1">
						<div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popuprel" class="popup"><span style="position: relative; top: -14px; "><?php print "".$result['Project_1'].""; ?> </span></a>
						</div>
                                            
                                                <div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popupre2" class="popup"><span style="position: relative; top: -14px; "> <?php print "".$result['Project_2'].""; ?></span></a>
						</div>
                                        </div>
                                </div>
                            <?php
                            }
                             if( ( $result['Project_1']!="NONE") &&($result['Project_2']!="NONE") && ($result['Project_3']!="NONE") && ($result['Project_4']=="NONE")  && ($result['Project_5']=="NONE"))
                                                 {
                                                     ?>
                                                     <div class="gcontent">
				<div class="head"><h4 style="font-family: Allan, helvetica, arial, sans-serif;	color: #eaeaea; font-size: 18px;"><a href="profile_student_project.php" style="text-decoration:none">Projects List</a></h4></div>
				<div style="border-radius: 0px 0px 5px 5px; border: 1px solid #1B3647; border-top: 0px; padding: 10px 8px; background: #F5F5F5;">
					<p>Number of projects - 10 total</p>
					
					<div class="friendslist clearfix1">
						<div id="trigger">
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popuprel" class="popup"><span style="position: relative; top: -14px; "><?php print "".$result['Project_1'].""; ?> </span></a>
						</div>
                                            
                                                <div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popupre2" class="popup"><span style="position: relative; top: -14px; "> <?php print "".$result['Project_2'].""; ?></span></a>
						</div>
                                                <div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popupre3" class="popup"><span style="position: relative; top: -14px; "> <?php print "".$result['Project_3'].""; ?></span></a>
						</div>
                                        </div>
                                </div>
                            <?php
                            }
                            if( ( $result['Project_1']!="NONE") &&($result['Project_2']!="NONE") && ($result['Project_3']!="NONE") && ($result['Project_4']!="NONE")  && ($result['Project_5']=="NONE"))
                                                 {
                                                     ?>
                                                     <div class="gcontent">
				<div class="head"><h4 style="font-family: Allan, helvetica, arial, sans-serif;	color: #eaeaea; font-size: 18px;"><a href="profile_student_project.php" style="text-decoration:none">Projects List</a></h4></div>
				<div style="border-radius: 0px 0px 5px 5px; border: 1px solid #1B3647; border-top: 0px; padding: 10px 8px; background: #F5F5F5;">
					<p>Number of projects - 10 total</p>
					
					<div class="friendslist clearfix1">
						<div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popuprel" class="popup"><span style="position: relative; top: -14px; "><?php print "".$result['Project_1'].""; ?> </span></a>
						</div>
                                            
                                                <div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popupre2" class="popup"><span style="position: relative; top: -14px; "> <?php print "".$result['Project_2'].""; ?></span></a>
						</div>
                                                <div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popupre3" class="popup"><span style="position: relative; top: -14px; "> <?php print "".$result['Project_3'].""; ?></span></a>
						</div>
                                                <div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popupre4" class="popup"><span style="position: relative; top: -14px; "> <?php print "".$result['Project_4'].""; ?></span></a>
						</div>
                                        </div>
                                </div>
                            <?php
                            }
                            if( ( $result['Project_1']!="NONE") &&($result['Project_2']!="NONE") && ($result['Project_3']!="NONE") && ($result['Project_4']!="NONE")  && ($result['Project_5']!="NONE"))
                                                 {
                                ?>
                           

			<div class="gcontent">
				<div class="head"><h4 style="font-family: Allan, helvetica, arial, sans-serif;	color: #eaeaea; font-size: 18px;"><a href="profile_student_project.php" style="text-decoration:none">Projects List</a></h4></div>
				<div style="border-radius: 0px 0px 5px 5px; border: 1px solid #1B3647; border-top: 0px; padding: 10px 8px; background: #F5F5F5;">
					<p>Number of projects - 10 total</p>
					
					<div class="friendslist clearfix1">
						<div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popuprel" class="popup"><span style="position: relative; top: -14px; "><?php print "".$result['Project_1'].""; ?> </span></a>
						</div>
						
						<div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popupre2" class="popup"><span style="position: relative; top: -14px; "> <?php print "".$result['Project_2'].""; ?></span></a>
						</div>
						
						<div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popupre3" class="popup"><span style="position: relative; top: -14px; "> <?php print "".$result['Project_3'].""; ?></span></a>
						</div>
						
						<div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popupre4" class="popup"><span style="position: relative; top: -14px; "> <?php print "".$result['Project_4'].""; ?></span></a>
						</div>
						
						<div>
							<a href="#" ><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." style="padding: 3px; background: #fff; border: 1px solid #ccc;"/> </a><a href="#" rel="popupre5" class="popup"><span style="position: relative; top: -14px; "> <?php print "".$result['Project_5'].""; ?></span></a>
						</div>
					
					</div>
					
					<span><a href="#">See all...</a></span>
				</div>
                                <?php
                                }
                             ?>
                                </div>
			</div>	        	
                                
					</div>	        	
	        	</aside>
	        	<div class="clearfix"></div>
				<!-- ENDS sidebar -->
	        	
	        	<!--POP UP -->
                        
				<div class="popupbox3" id="popuprel">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$result['Description_1']."";
                                  ?>
                                     </div>
                                 </div>
                        
                                <div class="popupbox3" id="popupre2">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$result['Description_2']."";
                                  ?>
                                     </div>
                                 </div>
                        
                        <div class="popupbox3" id="popupre3">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$result['Description_3']."";
                                  ?>
                                     </div>
                                 </div>
                        
                        <div class="popupbox3" id="popupre4">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$result['Description_4']."";
                                  ?>
                                     </div>
                                 </div>
                        
                        <div class="popupbox3" id="popupre5">
                                    <div id="intabdiv3">
                                        <a href="student_profile.php" class="pop">Close X</a>
                                  <?php
                                  echo "<br>".$result['Description_5']."";
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
		
		<?php include("../student_footer.php"); ?>
		
	</body>
	
</html>
