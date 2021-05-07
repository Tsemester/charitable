<?php


include('config.php');

?>
<!DOCTYPE html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Donation Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<body>

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="<?php echo SITEURL .'index.php' ?>" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="<?php echo SITEURL .'index.php' ?>">Donation Management</a></h1>
					
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="<?php echo SITEURL .'index.php' ?>">Home</a>
							</li>
							<li><a href=" <?php  echo SITEURL .'about.php' ?>">About</a></li>
							<li><a href="<?php echo SITEURL .'donor-login.php' ?>">Donor</a></li>
							<li><a href="<?php echo SITEURL .'organization-login.php' ?>">Charitable Organization</a></li>
							<li><a href="<?php echo SITEURL .'contact.php' ?>">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/back.jpg);">
				<div class="desc animate-box">
					<h2><strong>Donate</strong> for the <strong>Needy</strong></h2>
					
					
					<span>
						<a class="btn btn-primary btn-lg" href="<?php echo SITEURL .'donor-signup.php' ?>">Donate Now</a>

					</span>  
				</div>
			</div>

		</div>
		<!-- end:header-top -->
		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<div class="feature-left">
							<span class=" ">
								<i > <img src="images/mother.jpg" alt="" class="mr-3 mt-3 rounded-circle" style="width:60px;"> </i>
							</span>
							<div class="feature-copy">
								<h3>Be Kind</h3>
								<p>“It's not how much we give but how much love we put into giving.” </p>
								
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i > <img src="images/tutu.jpg" alt="" class="mr-3 mt-3 rounded-circle" style="width:60px;"> </i>
							</span>
							<div class="feature-copy">
								<h3>Happy Giving</h3>
								<p>“Do your little bit of good where you are; it's those little bits of good put together that overwhelm the world.”</p>
								
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i > <img src="images/masire.jpg" alt="" class="mr-3 mt-3 rounded-circle" style="width:60px;"> </i>
							</span>
							<div class="feature-copy">
								<h3>Donation</h3>
								<p>"I was hungry, and you gave me something to eat, I was naked and you clothed me."</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--Footer -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								
							</p>
							<p>Copyright 2021 Donation Management  <a href="<?php echo SITEURL . "index.php" ?>">Donation</a>. All Rights Reserved. </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>


	</div>





	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

