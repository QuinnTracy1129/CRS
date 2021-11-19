<?php
session_start();

 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

    <head>

    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CRS</title>

		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS
		================================================== -->

		<link href='css/googleapis.css' rel='stylesheet' type='text/css'>

		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="body">


		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->

					<!-- logo -->
					<h1 class="navbar-brand">
						<b style="color:white;">CRS</b>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Home</a></li>
                        <li><a href="#login">Log in</a></li>
                        <li><a href="#signup">Sign up</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#portfolio">Travel Guides</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <!-- <li><a href="#testimonials">Testimonial</a></li> -->
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->

		<main class="site-content" role="main">

        <!--
        Home Slider
        ==================================== -->

		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>
					</div>

					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

						<div class="bg-img bg-img-2"></div>
					</div>

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">

						<div class="bg-img bg-img-3"></div>
					</div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-4"></div>

					</div>

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-5"></div>
					</div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-6"></div>
					</div>

				</div><!-- /sl-slider -->

                <!--
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->

                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>


				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>

<?php if(!isset($_SESSION['email'])){ ?>
    <!-- Log in section -->
    <section id="login" style="text-align:center;">
      <div class="container">
        <div class="row">

          <div class="sec-title text-center wow animated fadeInDown">
            <h2>Log in</h2>
          </div>
          <div style="position: relative; left: 29%;">
          <form action="connectors/home.php?cn=1" method="POST">
          <div class="col-md-5 contact-form wow animated fadeInLeft">
              <div class="input-field">
                <label>Email
                <span class="color-red">*</span>
                </label>
                <input type="email" name="email" class="form-control" placeholder="Email address" required style="text-align:center;">
              </div>
              <div class="input-field">
                <label>Password
                <span class="color-red">*</span>
                </label>
                <input type="password" name="password" class="form-control" placeholder="Password" min="5" required style="text-align:center;">
                <a href="connectors/forgot.php"><small style="position: absolute; left: 5%;"><u>Forgot password</u></small></a>
              </div>
              <button type="submit" class="btn btn-blue btn-effect">Login</button>
          </div>
        </form>
      </div>
        </div>
      </div>
    </section>
    <!-- end Log in section -->
<?php }else{ ?>
  <section id="login" style="text-align:center;">
    <div class="container">
      <div class="row">

        <div class="sec-title text-center wow animated fadeInDown">
          <h2>Log in</h2>
        </div>
        <div style="position: relative; left: 29%;">
        <div class="col-md-5 contact-form wow animated fadeInLeft">
            <a href="CRS/data/view.php"><button class="btn btn-blue btn-effect">Dashboard</button></a>
        </div>
    </div>
      </div>
    </div>
  </section>
<?php } ?>

    <!-- Sign up section -->
    <section id="signup" >
      <div class="container">
        <div class="row">

          <div class="sec-title text-center wow animated fadeInDown">
            <h2>Sign up</h2>
            <p>We would love to work with you</p>
          </div>

          <form action="connectors/home.php?cn=2" method="POST">
          <div class="col-md-6 contact-form wow animated fadeInLeft">
              <div class="input-field">
                <label>Username
                <span class="color-red">*</span>
                </label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="input-field">
                <label>First name
                <span class="color-red">*</span>
                </label>
                <input type="text" name="fname" class="form-control" placeholder="First name" required>
              </div>
              <div class="input-field">
                <label>Last name
                <span class="color-red">*</span>
                </label>
                <input type="text" name="lname" class="form-control" placeholder="Last name" required>
              </div>
              <div class="input-field">
                <label>Contact number
                <span class="color-red">*</span>
                </label>
                <input minlength="11" type="number" name="contact" class="form-control" placeholder="Contact number" required>
              </div>
              <div class="input-field">
                <label>Birthday
                <span class="color-red">*</span>
                </label>
                <input type="date" name="DoB" class="form-control" required>
              </div>
                  <button type="submit" class="btn btn-blue btn-effect">Submit</button>
          </div>
          <div class="col-md-6 wow animated fadeInRight">
            <div class="input-field">
              <label>Password
              <span class="color-red">*</span>
              </label>
              <input type="password" name="password" class="form-control" placeholder="Password" min="5" required>
            </div>
            <div class="input-field">
              <label>Middle name
              <span class="color-red">*</span>
              </label>
              <input type="text" name="mname" class="form-control" placeholder="Middle name">
            </div>
            <div class="input-field">
              <label>Email
              <span class="color-red">*</span>
              </label>
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="input-field">
              <label>Address
              <span class="color-red">*</span>
              </label>
              <input type="text" name="address" class="form-control" placeholder="Address" required>
            </div>
            <div class="input-field">
              <label>Account type
              <span class="color-red">*</span>
              </label>
              <select  class="form-control selcls"  name="type" style="width:100%;font-size:18px;height:32;padding:3;">
                  <option value=""> --Select Type--  </option>
                  <option value="0"> User </option>
                  <option value="1"> Middle man </option>
                  <option value="2"> Admin </option>
                  <option value="3"> Driver </option>
              </select>
            </div>
          </div>
        </form>
        </div>
      </div>
    </section>
    <!-- end Sign up section -->

        <!--
        End Home SliderEnd
        ==================================== -->

			<!-- about section -->
<!--
			<section id="about" >
				<div class="container">
					<div class="row">
						<div class="col-md-4 wow animated fadeInLeft">
							<div class="recent-works">
								<h3>Recent Works</h3>
								<div id="works">
									<div class="work-item">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> <br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									</div>
									<div class="work-item">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									</div>
									<div class="work-item">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h3>Welcome To Our Site</h3>
						     	 <div class="message-body">
									<img src="img/member-1.jpg" class="pull-left" alt="member">
						       		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
						     	 </div>
						       	<a href="#" class="btn btn-border btn-effect pull-right">Read More</a>
						    </div>
						</div>
					</div>
				</div>
			</section>
-->
			<!-- end about section -->


			<!-- Service section -->
			<section id="service">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Service</h2>
							<p class="wow animated bounceInRight">The Key Features of our Job</p>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>
								<h3>Friendly Environment</h3>
								<p>We ensure that everyone here is trustworthy.</p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>
								<h3>Well Documented</h3>
								<p>Organized data about every transaction.</p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>
								<h3>On Time</h3>
								<p>We provide real time tracking for rented vehicles.</p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-lock fa-3x"></i>
								</div>

								<h3>Web Security</h3>
								<p>We make sure that every transaction made in our system is secured and planned.</p>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- end Service section -->

			<!-- portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center wow animated fadeInDown">
							<h2>FEATURED LOCATIONS</h2>
						</div>


						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/coronpalawan.jpg" class="img-responsive" alt="The islands commonly know as Coron are some of our favorite places in the whole world. The more we travel the more we look back at the time we spent here and realize how special this place is. Coron, Palawan is home to a number of unique and breathtaking sights. What this cluster of islands has become most well known for is the handful of WWII shipwrecks that are permanently entombed off the shores of Coron.">
								<figcaption class="mask">
									<h3>Coron Palawan</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Coron Palawan" data-fancybox-group="works" href="img/portfolio/coronpalawan.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/elnido.jpg" class="img-responsive" alt="El Nido Resorts’ Eco-Adventure island resort, Apulit, set in Taytay Bay in North-eastern Palawan, offers exciting and exhilarating activities for the thrill-seeker. Guests may climb and rappel down the 60-meter limestone cliff, with birds’ eye-view of the whole island. Dive and discover sunken treasures just off the beach, with a Japanese ship wreck and a plethora of marine species to greet guests. Put on headlights and go spelunking in the different caves of Apulit, or hop on the banca as one go island hopping and snorkelling with the resort’s marine sports guides to identify and explain the different species around the area. The resort’s guest activities coordinators will help plan your adventure-filled holiday at Apulit Island.">
								<figcaption class="mask">
									<h3>Apulit Island</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Apulit Island" href="img/portfolio/elnido.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/mayon.jpg" class="img-responsive" alt="Mayon volcano is a beautifully symmetrical volcano with a steep upper slope of 35-40° and is capped by a small summit crater 200 m in diameter. Mayon eruptions produce lava flows, pyroclastic flows and mud flows which threaten populations at the base of the volcano.">
								<figcaption class="mask">
									<h3>Mayon Volcano</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Mayon Volcano" data-fancybox-group="works" href="img/portfolio/mayon.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/mountpulag.jpg" class="img-responsive" alt="Mount Pulag is one of the most incredible tourist attractions which has engrossingly captivated millions because of its striking and awesome features that are genuinely incomparable from its external facade.">
								<figcaption class="mask">
									<h3>Mount Pulag</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Mount Pulag" data-fancybox-group="works" href="img/portfolio/mountpulag.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/bohol.jpg" class="img-responsive" alt="The island province of Bohol has much to offer in terms of history and natural attractions. One of the loveliest islands in the Visayas, Bohol's coastline is skimmed by gentle coves and white sand beaches Many highways snake along pristine beaches and rustic rivers where the tourist can stop at any point and jump in. The province’s dive spots, of which there are about a dozen, are said to be among the world's best.">
								<figcaption class="mask">
									<h3>Bohol</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Bohol" data-fancybox-group="works" href="img/portfolio/bohol.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/banaue.jpg" class="img-responsive" alt="Banaue rice terraces has been described as the eighth wonder of the world. Carved out of the hillside by Ifugao tribes people 2000 to 3000 years ago without the aid of machinery to provide level steps where the natives plant rice. And they are still in use today.">
								<figcaption class="mask">
									<h3>Banaue Rice Terraces</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Banaue Rice Terraces" data-fancybox-group="works" href="img/portfolio/banaue.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
						</ul>

					</div>
				</div>
			</section>
			<!-- end portfolio section -->

			<!-- Testimonial section -->

			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">

							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Testimonials</h2>
							</div>

							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<img src="img/mission.png" alt="Our Clients">
									<div class="clearfix">
										<span>Mission</span>
										<p>To facilitate and transform our system to make people’s lives into better through riding a automotive is the best part of great life.</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="img/vision.png" alt="Our Clients">
									<div class="clearfix">
										<span>Vision</span>
										<p>to create a better transportation and satisfy the experiences of our client on everyday life.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- end Testimonial section -->

			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">

						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Contact</h2>
							<p>Leave a Message</p>
						</div>


						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="#" method="POST">
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Your Name... (Optional)">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Your Email..." required>
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Subject..." required>
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Messages..." required></textarea>
								</div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
							</form>
						</div>

						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Contact Us</h3>
								<p><i class="fa fa-pencil"></i>Phoenix Inc.<span>Poblacion</span> <span>Talavera</span><span>Nueva Ecija</span></p><br>
								<p><i class="fa fa-phone"></i>Phone: (0906) 446 - 9617 </p>
								<p><i class="fa fa-envelope"></i><b id="crs"></b></p>
							</address>
						</div>
            <script>
                                  document.getElementById("crs").innerHTML=window.location.host;
                              </script>

					</div>
				</div>
			</section>
			<!-- end Contact section -->

      <!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">

							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>FOLLOW US</h2>
								<p>We would love to show you our other works</p>
							</div>

							<ul class="social-button">
								<li class="wow animated zoomIn"><a href=""><i class="fa fa-thumbs-up fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href=""><i class="fa fa-dribbble fa-2x"></i></a></li>
							</ul>

						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->

			<section id="google-map">
				<div id="map-canvas" class="wow animated fadeInUp"></div>
			</section>

		</main>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>
