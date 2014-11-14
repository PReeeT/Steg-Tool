<?php
	session_start();
?>
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
		
		<!---Nish Diagram----->
		<link href="css/diagram_default.css" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Cabin+Sketch:bold" rel="stylesheet" type="text/css" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/raphael.js" type="text/javascript"></script>
		<script src="js/init.js" type="text/javascript"></script>
		
		
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
					
				<a href="researcher.php" id="logo"><img  src="img/logo.png" alt="Tandem"></a>
				
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
					<li><a href="https://plus.google.com/118228964534276775425"  title="Add to the circle"><img src="img/social/google_plus_32.png" alt="Facebook" /></a></li>
				</ul>
			</div>
			<!-- ENDS social -->
			
			
			
			<!-- Content -->
			<div id="content">
			
			<!-- masthead -->
		        <div id="masthead">
					
				</div>
	        	<!-- ENDS masthead -->
				
				
				<!--Diagram----->
				<div id="diagram_content">
				<div class="legend">
					<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Researcher's Ratings:</h2><br>
					<div class="skills">
					<ul>
						<li class="jq">Introverted</li>
						<li class="css">Synergy</li>
						<li class="html">Conducive</li>
						<li class="php">Preceptor</li>
						<li class="sql">Sentient</li>
					</ul>
					</div>	
				</div>
				<div id="diagram"></div>
				</div>
				<div class="get">
			<div class="arc">
				<span class="text">Introverted</span>
				<input type="hidden" class="percent" value="97" />
				<input type="hidden" class="color" value="#97BE0D" />
			</div>
			<div class="arc">
				<span class="text">Synergy</span>
				<input type="hidden" class="percent" value="86" />
				<input type="hidden" class="color" value="#D84F5F" />
			</div>
			<div class="arc">
				<span class="text">Conducive</span>
				<input type="hidden" class="percent" value="88" />
				<input type="hidden" class="color" value="#88B8E6" />
			</div>
			<div class="arc">
				<span class="text">Preceptor</span>
				<input type="hidden" class="percent" value="75" />
				<input type="hidden" class="color" value="#BEDBE9" />
			</div>
			<div class="arc">
				<span class="text">Sentient</span>
				<input type="hidden" class="percent" value="60" />
				<input type="hidden" class="color" value="#F2D22C" />
			</div>
		</div>
				
	        	
	        	
	        	<!-- Headline -->
	        	<div class="headline">
	        		Finding the suitable intern to assist you is now hassle free!
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
									<p><a href="how_it_works.html">Check here</a></p>
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
									<p><a href="how_it_works.html">Check here</a></p>
								</div>
							</div>
						</div>
						<div><br/>
	        				<a class="heading">Tell us what your research is all about</a><br/>
							
		        			
		        		</div>
					</li>
					</figure>
					<figure>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-4"></div>
								<div class="ch-info-back">
									<h3>really?</h3>
									<p><a href="how_it_works.html">Check here</a></p>
								</div>
							</div>
						</div>
						<div><br/>
	        				<a class="heading">Get best suited interns to assist you</a><br/>
							
		        			
		        		</div>
					</li>
					</figure>
				</ul>
				
	        	</div>
				<h1 class="home-block-heading"><br><br><br><br>What makes us Different </h1>
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
				
	        	
	        	
	        	<!-- home-gallery -->
	        	<h1 class="home-block-heading">Featured Internships</h1>
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
                        <a href="">Project 1</a>
                        <div style="display:none;">
                            <div class="info_image">gram.png</div>
                            <div class="info_heading">Calculating Gram Matrix</div>
                            <div class="info_description">
									An open source distributed GPU calculator for different distance functions would be an essential component
									for many high-performance learning algorithms...
                                <a href="internships.php" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
					<li>
                        <a href="">Project 2</a>
                        <div style="display:none;">
                            <div class="info_image">rankmin.png</div>
                            <div class="info_heading">Rank Minimization</div>
                            <div class="info_description">
                                This opens the way to a more scalable solution in distributed nodes. As SVMs are top-performing classiers
								that are widely deployed...
                                <a href="internships.php" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
					<li>
                        <a href="">Project 3</a>
                        <div style="display:none;">
                            <div class="info_image">cluster.png</div>
                            <div class="info_heading">Clustering Algorothm</div>
                            <div class="info_description">
				 A core step in the algorithm includes calculating a Gram matrix. The students could pick one, implement it to run it on a GPU cluster...
                                <a href="internships.php" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="">Project 4</a>
                        <div style="display:none;">
                            <div class="info_image">vector.png</div>
                            <div class="info_heading">Support S.V.Ms</div>
                            <div class="info_description">
				The number of clustering algorithms on the GPU is dizzying.The students could pick one, implement it to run it on a GPU cluster...
                                <a href="internships.php" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="">Project 5</a>
                        <div style="display:none;">
                            <div class="info_image">trot.png</div>
                            <div class="info_heading">Extending T.S.I</div>
                            <div class="info_description">
				The solver shows clear linear scalability across multiple nodes, making it extremely attractive for quantum simulations...
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
		
		<?php include("profile_researcher_footer.php")?>
		
	</body>
	
</html>
