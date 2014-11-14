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
		<script type="text/javascript">
			function validateform(){
				var username = document.firstform.username.value;
				var pass = document.firstform.password.value;
				//alert(username);
				var UsernameRegex = /^[a-zA-Z\-.0-9]+$/;
				var minNumberofChars = 6;
				var maxNumberofChars = 16;
				var passreqex  = /^(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
				var checkbox = document.getElementById("loginkeeping");
				var msg = "";
				if(username.match(UsernameRegex)){
					//alert("correct");
							if(pass.length < minNumberofChars || pass.length > maxNumberofChars){
								alert("Password should be of min. 6 character and maximum of 16");
								return false;
							}
							if(!passreqex.test(pass)) {
								alert("password should contain atleast one special character");
								return false;
							}
									return true;
							
					else{
						alert("Password do not match");
						return false;
					}
					
				}
				else{
					msg="Username should only contain alphabets, number, . , -"
					alert(msg);
				}
				return false;
			}
		</script>
		

	</head>
	
	<body lang="en">
	

		<!-- mobile-nav -->
		<div id="mobile-nav-holder">
			<div class="wrapper">
				<ul id="mobile-nav">
					<li  class="current-menu-item"><a href="index.php">HOME</a></li>
					<li><a href="internships.php">INTERNSHIPS</a></li>
					<li><a href="http://researchintern.net/blog/">BLOG</a></li>
					<li><a href="how_it_works.php">HOW IT WORKS</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
					<li><a href="researcher.php">RESEARCHER</a></li>
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
						<li class="current-menu-item"><a href="index.php"><b>Home</b><span class="subheader">welcome</span></a></li>
						<li><a href="internships.php"><b>Internships</b><span class="subheader">oppurtunities</span></a></li>
						<li><a href="http://researchintern.net/blog/"><b>Blog</b><span class="subheader">read me</span></a></li>
						<li><a href="how_it_works.php"><b>How it works</b><span class="subheader">know us better</span></a></li>
						<li><a href="researcher.php"><b>Researcher&nbsp;&raquo;&raquo;</b><span class="subheader">the mentors</span></a></li>
						
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
					<span class="head"></span><span class="subhead"></span>
					<ul class="breadcrumbs">
						<li><a href="index.php">home</a></li>
						<li>/ login-register</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	
	        	
	        	<!-- page content -->
	        	<div id="page-content-full">
	        	
					<br/>	
					<div id="container_demo" >
						<?php
							if(isset($_GET['msg'])){
							$message= $_GET['msg'];
							if($message==1){
							echo "<span style='color:red' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<b>Invalid username or password</b></span>";
							}
							else if($message==5){
							echo "<span style='color:red' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<b>Please Login to View and Apply</b></span>";
							}
							else if($message==3){
							echo "<span style='color:red' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<b>Password couldn't be updated. Please try again with valid username</b></span>";
							}
							
						}
						?><br><br>
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">




						<?php
							if(isset($_GET['id']))
							{
								$an=$_GET['id'];
								//$_SESSION['id'];
						?>
  
                        
                            <form  action="login.php?id=<?= $an ?>" autocomplete="on" method="post">
                            <?php 
                            }
                        else {
                        						
					?>                        
                      <form  action="student_recover_password_db.php" autocomplete="on" method="post" name="firstform" >
                      <?php  } ?>
                                <h1>Recover Password</h1>
                        
								<br/><br/>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Enter your new password</label>
                                    <input id="username" name="newpass" required="required" type="text" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Confirm Your password </label>
                                    <input id="password" name="confirmpass" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                								
                                <p class="login button"> 
                                    <input type="submit" value="Update"/> 
								</p>
                                
                            </form>
                        </div>

                        
                        </div>
						<br/> <br/><br/><br/>
                    </div>
                </div> 
					<br/> <br/><br/><br/><br/> <br/><br/>
	        	</div>
	        	<!-- ENDS page content -->
	        	
	        	
				
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<?php 
	include("footer.php");
?>
		
	</body>
	
</html>