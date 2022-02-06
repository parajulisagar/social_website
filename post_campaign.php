<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Post Campaign</title>
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
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (isset($_POST['title']) && $_POST['title'] != "" && isset($_POST['post_content']) && $_POST['post_content'] != "") {
            // echo "Good to go.";
            $email = $_SESSION['user'];
            $post_head = $_POST["title"];
            $post_body = $_POST["post_content"];
            $post_date = date("Y-m-d");
            $approved = 0;

            $sql = 'INSERT INTO campaign(user_email, post_head, post_body, post_date, approved) VALUES(:user, :title, :content, :dated, :approved)';
            $stmt = $conn->prepare($sql);
            $stmt->execute(['user'=>$email, 'title'=>$post_head, 'content'=>$post_body, 'dated'=>$post_date, 'approved'=>$approved]);
            echo "Your campaign proposal is with us. Approval process begins now.";
          } else {
            header("location: post_campaign.php");
          }

        }
        else {
         ?>
				<div class="fullwidth-block inner-content">
					<div class="container">
						<h2 class="page-title">Post Campaign</h2>
						<div class="row">
							<div class="col-md-6">
								<form action="post_campaign.php" method="post" class="contact-form">
									<input type="text" placeholder="Post Title" name="title">
									<textarea name="post_content" placeholder="The campaign is about..."></textarea>
									<input type="submit" value="Send campaign for approval">
								</form>
							</div>
						</div>
					</div>
				</div>
        <?php
      } ?>


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
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>
