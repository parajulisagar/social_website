<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>About Us</title>
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
									<h2 class="entry-title">Our History</h2>
									<p class="leading">We have been in the consulting industry for many decades and finally come to the realization that corporate efforts must include sustainable social efforts in order to allow wholesome economic growth.</p>
									<p>With this in mind, we have sought to create a platform that enable small business owners to create awareness of their enterprises and the causes that drive them. This effort seeks to create better business environements that are aware and concerned
									about the social issues that drive society as a whole.</p>

									<p>With our multiple branches stationing teams of experts, Advanced Consulting Services offers solutions to the modern enterpreneur that seek to grow businesses as much as they sustain the underlying social structures. It is critical for businesses
										to be able to operate optimally while remaining in harmony with the world around them: that is where we come in.</p>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->


			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">

					<address>
						<p>50, This Street, Thatplace. <br><a href="tel:9488487853">+91 94884 87853</a> <br> <a href="mailto:mail@gmail.com">mail@gmail.com</a></p>
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
