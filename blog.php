<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Our Blog</title>
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

	<body>

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<small class="site-description">Advanced Consulting Services</small>
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

			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="content">
									<h2 class="entry-title">Blog</h2>

									<div class="post">
										<div class="entry-date">
											<div class="date">23</div>
											<span class="month">Jun</span>
										</div>
										<div class="featured-image">
											<img src="dummy/Band Name/0e51a0e0-10e8-463a-8985-cf295b716375.jpg" alt="">
										</div>
										<h2 class="entry-title"><a href="#">Osiris Ivestments joins 20 other businesses to build a community center</a></h2>
										<p>The Davidson Community Center has seen the additional support from Osiris Investments as it joins the Advanced Consulting Social Awareness family.</p>
										<a href="#">Read more</a>
									</div>

									<div class="post">
										<div class="entry-date">
											<div class="date">24</div>
											<span class="month">Jun</span>
										</div>

										<h2 class="entry-title"><a href="#">Too much school...?</a></h2>
										<p>Teachers in the Davidson area claim too much school work is making their students unmotivated and learn less. "More play" the solution.</p>
										<a href="#">Read more</a>
									</div>

									<div class="post">
										<div class="entry-date">
											<div class="date">25</div>
											<span class="month">Jun</span>
										</div>
										<div class="featured-image">
											<img src="dummy/Band Name/635999184041758451-974082916_Live-music-bg.jpg" alt="">
										</div>
										<h2 class="entry-title"><a href="#">Auditions for 2021 talent show</a></h2>
										<p>The annual talent show calls for talented artisans from all walks of life to audition in support of the local district talent show in support for the children's home.</p>
										<a href="#">Read more</a>
									</div>

									<div class="post">
										<div class="entry-date">
											<div class="date">25</div>
											<span class="month">Jun</span>
										</div>
										<div class="featured-image">
											<img src="dummy/Band Name/Live-music-taskforce.jpg" alt="">
										</div>
										<h2 class="entry-title"><a href="#">Ready to rumble</a></h2>
										<p>Town mayor confirms venue for local talent show "booked and ready for the show".</p>
										<a href="#">Read more</a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->


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
