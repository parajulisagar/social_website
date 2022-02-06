<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>

    <?php
    if (isset($_POST['campaign'])) {
      $approved = $_POST['campaign'];

      require 'sys/config.php';
      require 'sys/dbConn.php';

      $sql = "UPDATE campaign SET approved=1 WHERE id=:approved";
      $stmt = $conn->prepare($sql);
      $stmt->execute(['approved'=>$approved]);

      header('location: admin_dash.php');
    }
     ?>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>My Campaigns</title>
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
						<h2 class="page-title">Campaign List</h2>
            <h3 class="page-title">Approved</h3>
						<div class="row">
							<div class="col-md-6">
								<?php

                echo '
                <style>
                  td, th {
                    padding: 5px;
                    text-align: left;
                  }
                  .mod_button {
                    background-color: gray;
                  }
                </style>';

                $sql = "SELECT * FROM campaign WHERE approved=1";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $approvedOutput = '<table>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Campaign Title</th>
                    <th>Submission Date</th>
                    <th>User</th>
                    <th colspan=4>Details</th>
                  </tr>
                </thead>
                <tbody>
                ';

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  $approvedOutput .= '<tr>
                  <td>' . $row['id'] . '</td>
                  <td>' . $row['post_head']. '</td>
                  <td>' . $row['post_date']. '</td>
                  <td>' . $row['user_email'] . '</td>
                  <td colspan=4>' . $row['post_body']. '</td>
                  </tr>';
                }

                $approvedOutput .= '</tbody>
                </table>';
                echo $approvedOutput;
                 ?>
							</div>
						</div>

            <h3 class="page-title">Waiting Approval</h3>
						<div class="row">
							<div class="col-md-6">
								<?php
                // require 'sys/config.php';
                // require 'sys/dbConn.php';

                $sql = "SELECT * FROM campaign WHERE approved=0";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $waitingApprovalOutput = '<table>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Campaign Title</th>
                    <th>Submission Date</th>
                    <th>User</th>
                    <th colspan=4>Details</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                ';

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  $waitingApprovalOutput .= '<form action="admin_dash.php" method="post">
                  <tr>
                  <td><input type="text" hidden=True name="campaign" value="'. $row['id'] . '">' . $row['id'] . '</td>
                  <td>' . $row['post_head'] . '</td>
                  <td>' . $row['post_date'] . '</td>
                  <td>' . $row['user_email'] . '</td>
                  <td colspan=4>' . $row['post_body'] . '</td>
                  <td><input class="mod_button" type="submit" value="Approve"></td>
                  </tr>
                  ';
                }

                $waitingApprovalOutput .= '</tbody>
                </table>';
                echo $waitingApprovalOutput;
                 ?>
							</div>
						</div>
					</div>
				</div>


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
