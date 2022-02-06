<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Advanced Consulting Services</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body class="header-collapse">

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<!--<img src="dummy/logo.png" alt="Site Title">-->
						<small class="site-description">Advanced Consulting Services Social Awareness Web Application</small>
					</a> <!-- #branding -->

					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<?php
							require 'sys/config.php';
							require 'sys/dbConn.php';
							require 'sys/nav_display.php';
							 ?>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->

			<div class="hero">
				<div class="slider">
					<ul class="slides">
						<li class="lazy-bg" data-background="dummy/slide-1.jpg">
							<div class="container">
								<h2 class="slide-title">Advanced Consulting Services</h2>
								<h3 class="slide-subtitle">Social Change For The Today of Tomorrow</h3>
								<p class="slide-desc">This application aimes at raising awareness for social causes and bring change in the world we wish to see.</p>

								<a href="#" class="button cut-corner">Read More</a>
							</div>
						</li>
						<li class="lazy-bg" data-background="dummy/slide-2.jpg">
							<div class="container">
									<h2 class="slide-title">Advanced Consulting Services</h2>
									<h3 class="slide-subtitle">Where the Voice Matters, No Matter How Loud</h3>
									<p class="slide-desc">With the small business owner in mind, we welcome partneships and advertisement opportunities for small business owners to allow growth.</p>

									<a href="#" class="button cut-corner">Read More</a>
							</div>
						</li>
						<li class="lazy-bg" data-background="dummy/slide-3.jpg">
							<div class="container">
									<h2 class="slide-title">Advanced Consulting Services</h2>
									<h3 class="slide-subtitle">Join Us Today,So We Can Grow What You Love Now</h3>
									<p class="slide-desc">Get in touch with us and allow us to be part of your journey, regardless of where you are.</p>

									<a href="#" class="button cut-corner">Read More</a>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<main class="main-content">

				<div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
					<div class="container">
						<header class="section-header">
							<h2 class="section-title">Upcoming events</h2>

							<div class="event-nav">
								<a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
	    						<a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
							</div> <!-- .event-nav -->

						</header> <!-- .section-header -->
						<div class="event-carousel">

							<div class="event">
								<div class="entry-date">
									<div class="date">23</div>
									<span class="month">Dec</span>
								</div>
								<h2 class="entry-title"><a href="#">Launching of the online platform with full integration of beta and other users.</a></h2>
								<p>The platform takes of and a first prototype is handed in for review by stakeholders including Advanced Consulting Services officials and live users.</p>
							</div> <!-- .event -->


							<div class="event">
								<div class="entry-date">
									<div class="date">28</div>
									<span class="month">Dec</span>
								</div>
								<h2 class="entry-title"><a href="#">Developer Review</a></h2>
								<p>Following initial prototype review, the developers will reconvene and analyse feedback from various sources to plot further steps for development.</p>
							</div> <!-- .event -->


							<div class="event">
								<div class="entry-date">
									<div class="date">07</div>
									<span class="month">Jan</span>
								</div>
								<h2 class="entry-title"><a href="#">Version 1.10 Release</a></h2>
								<p>Following considerations by the development team, version 1.1 will complete implementation and begin testing before preparation for release.</p>
							</div> <!-- .event -->


							<div class="event">
								<div class="entry-date">
									<div class="date">12</div>
									<span class="month">Jan</span>
								</div>
								<h2 class="entry-title"><a href="#">Version 1.11 Release</a></h2>
								<p>Version 1.11 will be live for beta testing allowing initial users to create permanent profiles that can interact with data and events on the system.</p>
							</div> <!-- .event -->

						</div> <!-- .event-carousel -->
					</div> <!-- .container -->
				</div> <!-- .upcoming-event-section -->

				<div class="fullwidth-block why-chooseus-section">
					<div class="container">
						<h2 class="section-title">Why choose us?</h2>

						<div class="row">
							<div class="col-md-4">
								<div class="feature">
									<h3 class="feature-title">You are our priority</h3>
									<p>At Advanced Consulting Services, not only do we make your dream our own, but we dedicate our effort towards making it the best reality it can be.</p>
								</div> <!-- .feature -->
							</div>
							<div class="col-md-4">
								<div class="feature">
									<h3 class="feature-title">We care for prosperity</h3>
									<p>We at Advanced Consulting Services hope to bring you the best possible services while preventing harm from befalling others in our efforts.</p>
								</div> <!-- .feature -->
							</div>
							<div class="col-md-4">
								<div class="feature">
									<h3 class="feature-title">We aim to be the change we want to see</h3>
									<p>Not only we we seek to "do no harm" but our programs are designed to bring as much social welfare as possible.</p>
								</div> <!-- .feature -->
							</div>
						</div>
					</div> <!-- .container -->
				</div> <!-- .why-chooseus-section -->
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">

					<address>
						<p>50, That Street, Thisplace. <br><a href="tel:9488487853">+91 94884 87853</a> <br> <a href="mailto:mail@gmail.com">mail@gmail.com</a></p>
					</address>

					<form action="#" class="newsletter-form">
						<input type="email" placeholder="Enter your email to join newsletter...">
						<input type="submit" class="button cut-corner" value="Subscribe">
					</form> <!-- .newsletter-form -->

					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div> <!-- .social-links -->

					<p class="copy">Advanced Consulting Services @ Copyright 2021. All right reserved. Designed by <a href="#">ACS</a></p>
			  </div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>
