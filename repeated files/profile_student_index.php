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
		
		<!-- Featured Flex Slider -->
		<link rel="stylesheet" href="css/feature_flex_style.css" type="text/css" media="screen"/>
		
		
		
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
		
		<!-- RegBtn -->
		<link rel="stylesheet" type="text/css" href="css/reg_btn.css" />
		<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
		
		<!--HomeCircle-->
		<link rel="stylesheet" type="text/css" href="css/home_circle.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
		
		
		
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
					<li><a href="http://www.facebook.com/researchintern"  title="Become a fan"><img src="img/social/facebook_32.png"  alt="Facebook" /></a></li>
					<li><a href="http://www.twitter.com" title="Follow my tweets"><img src="img/social/twitter_32.png"  alt="Facebook" /></a></li>
					<li><a href="https://plus.google.com/118228964534276775425"  title="Add to the circle"><img src="img/social/google_plus_32.png" alt="Facebook" /></a></li>
				</ul>
			</div>
			<!-- ENDS social -->
			
			
			
			<!-- Content -->
			<div id="content">
			
				<!-- slider -->
		         <div class="flexslider home-slider">
				  <ul class="slides">
				    <li>
				      <img src="img/slides/3.png" alt="alt text" />
				      <p class="flex-caption">Internship is a great way to prepare yourself for career ahead.
					  <a href="student_register.php#toregister" class="a-btn">
						<span class="a-btn-text">Register now</span> 
						<span class="a-btn-slide-text">It's free! </span>
						<span class="a-btn-icon-right"><span></span></span>
					  </a>
					  </p>
					  
				    </li>
				    <li>
				      <img src="img/slides/2.png" alt="alt text" />
				      <p class="flex-caption">Welcome to the amazing and esteemed world of Research!
					  <a href="student_login.php" class="a-btn">
						<span class="a-btn-text">Enter</span> 
						<span class="a-btn-slide-text">Sign In </span>
						<span class="a-btn-icon-right"><span></span></span>
					  </a>
					  </p>
				    </li>
				    <li>
				      <img src="img/slides/1.png" alt="alt text" />
					  <p class="flex-caption">Test your understanding with fellow research interns.
					  <a href="student_register.php#toregister" class="a-btn">
						<span class="a-btn-text">Sign Up</span> 
						<span class="a-btn-slide-text">join us </span>
						<span class="a-btn-icon-right"><span></span></span>
					  </a>
					  </p>
				    </li>
					<li>
				      <img src="img/slides/4.png" alt="alt text" />
					  <p class="flex-caption">We believe in team work - a key parameter in your growth.
					  <a href="student_login.php" class="a-btn">
						<span class="a-btn-text">Log In</span> 
						<span class="a-btn-slide-text">Come in </span>
						<span class="a-btn-icon-right"><span></span></span>
					  </a>
					  </p>
				    </li>
				  </ul>
				</div>
				<div class="shadow-slider"></div>
	        	<!-- ENDS slider -->
	        	
	        	
	        	<!-- Headline -->
	        	<div class="headline">
	        		Finding your dream intership is now simple and easy!
	        	</div>
	        	<!-- ENDS Headline -->
	        	
	        	
	        	
	        	<!-- featured -->
	        	<!--h1 class="home-block-heading">Features</h1-->
	        	<div class="featured">
	        		<!--figure>
						<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"></div>
								<div class="ch-info-back">
									<h3>Mouse</h3>
									<p>by Alexander Shumihin <a href="http://drbl.in/eAoj">View on Dribbble</a></p>
								</div>	
							</div>
						</div>
					    </li>	        			
	        			<div>
	        				<a href="single.html" class="heading">Responsive Design</a>
		        			 It will fit your large desktop screen, all the way down to your iPhone and of  any Tablet or iPad. Try resizng your browser window if you don't believe.
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		
	        		
	        		<figure>
	        			<a href="img/dummies/full-2.jpg" data-rel="prettyPhoto" class="thumb"><img src="img/dummies/full-2.jpg" alt="Alt text" /></a>
	        			<div>
	        				<a href="single.html" class="heading">Page layouts</a>
		        			Modus comes with a set of various page layouts to help you build a complete site.
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		<figure>
	        			<a href="img/dummies/full-3.jpg" data-rel="prettyPhoto" class="thumb"><img src="img/dummies/full-3.jpg" alt="Alt text" /></a>
	        			<div>
	        				<a href="single.html" class="heading">Contact Form</a>
		        			Working contact form made in PHP and Ajax, pretty easy to configure. Just enter your subject and email address.
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		<figure>
	        			<a href="img/dummies/full-4.jpg" data-rel="prettyPhoto" class="thumb"><img src="img/dummies/full-4.jpg" alt="Alt text" /></a>
	        			<div>
	        				<a href="single.html" class="heading">Portfolio Pages</a>
		        			Need to showcase your work. No worries use the portfolio template and display your work on a professional way.
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		<figure>
	        			<a href="img/dummies/full-5.jpg" data-rel="prettyPhoto" class="thumb"><img src="img/dummies/full-5.jpg" alt="Alt text" /></a>
	        			<div>
	        				<a href="single.html" class="heading">Blog Templates</a>
		        			Use the blog page templates to create a theme in wordpress, tumblr or a different blog plataform. 
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		
	        		<figure>
	        			<a href="img/dummies/full-6.jpg" data-rel="prettyPhoto" class="thumb"><img src="img/dummies/full-6.jpg" alt="Alt text" /></a>
	        			<div>
	        				<a href="single.html" class="heading">WordPress Version</a>
		        			I'm working with a talented WordPress Developer to bring a theme out of this template  <a href="http://www.luiszuno.com/blog/work" >stay tuned</a>.
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		<div class="clearfix"></div-->
					<ul class="ch-grid">					
						<figure>
						<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"></div>
								<div class="ch-info-back">
									<h3>What?</h3>
									<p><a href="how_it_works.php">Check here</a></p>
								</div>	
							</div>
						</div>
	        			<div><br/>
	        				<a class="heading">Sign Up to be a part of our family.</a>
							
		        			
		        		</div>
						</li>
	        		    </figure>
					<figure>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-2"></div>
								<div class="ch-info-back">
									<h3>HOW?</h3>
									<p><a href="how_it_works.php">Check here</a></p>
								</div>
							</div>
						</div>
						<div><br/>
	        				<a class="heading">Search internships, upload resume and Apply.</a><br/>
							
		        			
		        		</div>
					</li>
					</figure>
					<figure>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-3"></div>
								<div class="ch-info-back">
									<h3>really?</h3>
									<p><a href="how_it_works.php">Check here</a></p>
								</div>
							</div>
						</div>
						<div><br/>
	        				<a class="heading">Get your dream Internship and start working on it!</a><br/>
							
		        			
		        		</div>
					</li>
					</figure>
				</ul>
				
				
				
	        	</div>
				<h1 class="home-block-heading"><br><br><br><br>What makes us Different</h1>
				<div id="page-content-full">
				<!-- 3 cols -->
					<div class="one-third">
						<h2 class="heading1"><span><img src="img/blocks/1.png" style="float: left; padding-left: 10px; background: none;"/></span>Enabling Collaborations</h2>
						We are enabling future research with the help of powerful online collaboration tools and to start with we work using our collaboration tools so that we can feel and live each working aspect. 
					</div>
					
					<div class="one-third">
						<h2 class="heading2"><span><img src="img/blocks/2.png" style="float: left; padding-left: 10px; background: none;"/></span>Enhancing Quality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
						We aren't just a 9-to-5 thing. We believe in the driving force of the researcher and the intern to deliver the result. This way we foster the space for innovation
					</div>
					
					<div class="one-third last">
						<h2 class="heading1"><span><img src="img/blocks/3.png" style="float: left; padding-left: 10px; background: none;"/></span>Enthusiastic Atmosphere</h2>
						We love giving people the freedom to be themselves and express their ideas openly amongst their peers. We get more fun and innovative results that way. 
					</div>
					<div class="clearfix"></div>
					</div>
				
									
	        	<!-- ENDS featured -->
	        	
	            <div>
	        	<!-- text-posts -->
	        	<!--h1 class="home-block-heading"> </h1-->
	        	<!--ul class="text-posts">
	        		<li>
	        			<a href="single.html" class="heading">Get more freebies!</a>
	        			visit <a href="http://www.luiszuno.com" >luiszuno.com</a> and get more free items to help you create awesome sites. 
	        		</li>
	        		
	        		<li>
	        			<a href="single.html" class="heading">Buy Premium themes</a>
	        			Check my portfolio and buy outstanding WordPress Themes. Visit my <a href="http://www.luiszuno.com/blog/work" >Online Portfolio</a> to learn more.
	        		</li>
	        		
	        		<li>
	        			<a href="single.html" class="heading">Themeforest Themes</a>
	        			Visit  <a href="http://themeforest.net/?ref=ansimuz" >themeforest</a> and grab great themes at a great price!
	        		</li>
	        		
	        		<li>
	        			<a href="single.html" class="heading">Get more freebies!</a>
	        			visit <a href="http://www.luiszuno.com" >luiszuno.com</a> and get more free items to help you create awesome sites. 
	        		</li>
	        		
	        		<li>
	        			<a href="single.html" class="heading">Buy Premium themes</a>
	        			Check my portfolio and buy outstanding WordPress Themes. Visit my <a href="http://www.luiszuno.com/blog/work" >Online Portfolio</a> to learn more.
	        		</li>
	        		
	        		<li>
	        			<a href="single.html" class="heading">Themeforest Themes</a>
	        			Visit  <a href="http://themeforest.net/?ref=ansimuz" >themeforest</a> and grab great themes at a great price!
	        		</li>
	        		
	        	</ul-->
	        	<!-- ENDS text-posts -->
				
	        	
	        	
	        	<!-- home-gallery -->
	        	<h1 class="home-block-heading">From our Project Shelf</h1>
	        	<!--ul class="home-gallery">
	        		<li><a href="portfolio.html" class="thumb"><img src="img/projects/1cluster.png" alt="Alt text" /></a></li>
	        		<li><a href="portfolio.html" class="thumb"><img src="img/projects/2gram.png" alt="Alt text" /></a></li>
	        		<li><a href="portfolio.html" class="thumb"><img src="img/projects/3rankmin.png" alt="Alt text" /></a></li>
					<li><a href="portfolio.html" class="thumb"><img src="img/projects/5vector.png" alt="Alt text" /></a></li>
					<li><a href="portfolio.html" class="thumb"><img src="img/projects/4trot.png" alt="Alt text" /></a></li>
					<li><a href="portfolio.html" class="thumb"><img src="img/projects/6cloud.png" alt="Alt text" /></a></li>	        		
	        	</ul-->
				<div class="rotator">
                <ul id="rotmenu">
                    <li>
                        <a href="internships.php">Project 1</a>
                        <div style="display:none;">
                            <div class="info_image">gram.png</div>
                            <div class="info_heading">Calculating Gram Matrix</div>
                            <div class="info_description">
				 Many learning algorithms require calculating the 
				 distances between all data points at least once, 
				 but quite possibly in every iteration. The distances 
				 define a square matrix, which is also known as the 
				 Gram matrix or...
                                <a href="internships.php" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="internships.php">Project 2</a>
                        <div style="display:none;">
                            <div class="info_image">vector.png</div>
                            <div class="info_heading">Scalable S.v.m s</div>
                            <div class="info_description">
				 At vero eos et accusamus et iusto odio
				dignissimos ducimus qui blanditiis praesentium
				voluptatum deleniti atque corrupti quos dolores et
				quas molestias excepturi sint occaecati cupiditate
				non provident...
                                <a href="internships.php" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="internships.php">Project 3</a>
                        <div style="display:none;">
                            <div class="info_image">trot.png</div>
                            <div class="info_heading">Extending T.S.I</div>
                            <div class="info_description">
				 At vero eos et accusamus et iusto odio
				dignissimos ducimus qui blanditiis praesentium
				voluptatum deleniti atque corrupti quos dolores et
				quas molestias excepturi sint occaecati cupiditate
				non provident...
                                <a href="internships.php" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="internships.php">Project 4</a>
                        <div style="display:none;">
                            <div class="info_image">cluster.png</div>
                            <div class="info_heading">Clustering Algorothm</div>
                            <div class="info_description">
				 At vero eos et accusamus et iusto odio
				dignissimos ducimus qui blanditiis praesentium
				voluptatum deleniti atque corrupti quos dolores et
				quas molestias excepturi sint occaecati cupiditate
				non provident...
                                <a href="internships.php" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="internships.php">Project 5</a>
                        <div style="display:none;">
                            <div class="info_image">rankmin.png</div>
                            <div class="info_heading">Rank Minimization</div>
                            <div class="info_description">
                                At vero eos et accusamus et iusto odio
				dignissimos ducimus qui blanditiis praesentium 
				voluptatum deleniti atque corrupti quos dolores et 
				quas molestias excepturi sint occaecati cupiditate 
				non provident... 
                                <a href="internships.php" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div id="rot1">
                    <img src="" width="800" height="300" class="bg" alt=""/>
                    <div class="heading">
                        <h1></h1>
                    </div>
                    <div class="description">
                        <p></p>

                    </div>    
                </div>
				</div>
				<br/><br/><br/>
				<div class="clearfix"></div>
				
				<!-- The JavaScript -->
        <!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script-->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                var current = 1;
                
                var iterate		= function(){
                    var i = parseInt(current+1);
                    var lis = $('#rotmenu').children('li').size();
                    if(i>lis) i = 1;
                    display($('#rotmenu li:nth-child('+i+')'));
                }
                display($('#rotmenu li:first'));
                var slidetime = setInterval(iterate,3000);
				
                $('#rotmenu li').bind('click',function(e){
                    clearTimeout(slidetime);
                    display($(this));
                    e.preventDefault();
                });
				
                function display(elem){
                    var $this 	= elem;
                    var repeat 	= false;
                    if(current == parseInt($this.index() + 1))
                        repeat = true;
					
                    if(!repeat)
                        $this.parent().find('li:nth-child('+current+') a').stop(true,true).animate({'marginRight':'-20px'},300,function(){
                            $(this).animate({'opacity':'0.7'},700);
                        });
					
                    current = parseInt($this.index() + 1);
					
                    var elem = $('a',$this);
                    
                        elem.stop(true,true).animate({'marginRight':'0px','opacity':'1.0'},300);
					
                    var info_elem = elem.next();
                    $('#rot1 .heading').animate({'left':'-420px'}, 500,'easeOutCirc',function(){
                        $('h1',$(this)).html(info_elem.find('.info_heading').html());
                        $(this).animate({'left':'0px'},400,'easeInOutQuad');
                    });
					
                    $('#rot1 .description').animate({'bottom':'-270px'},500,'easeOutCirc',function(){
                        $('p',$(this)).html(info_elem.find('.info_description').html());
                        $(this).animate({'bottom':'0px'},400,'easeInOutQuad');
                    })
                    $('#rot1').prepend(
                    $('<img/>',{
                        style	:	'opacity:0',
                        className : 'bg'
                    }).load(
                    function(){
                        $(this).animate({'opacity':'1'},600);
                        $('#rot1 img:first').next().animate({'opacity':'0'},700,function(){
                            $(this).remove();
                        });
                    }
                ).attr('src','img/featured_flex/'+info_elem.find('.info_image').html()).attr('width','800').attr('height','300')
                );
                }
            });
			</script>
				<!---^^^slider ends here^^^----->
				</div>
	        	<div class="clearfix"></div>	
	        	<!-- ENDS home-gallery -->
				
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<?php include("./Student_PROFILE/student_footer.php"); ?>
		
	</body>
	
</html>