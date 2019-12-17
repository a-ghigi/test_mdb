<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Material Design for Bootstrap</title>
	<!-- MDB icon -->
	<link rel="icon" href="<?php echo mdb_url(); ?>img/mdb-favicon.ico" type="image/x-icon">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo mdb_url(); ?>css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="<?php echo mdb_url(); ?>css/mdb.min.css">
	<!-- Your custom styles (optional) -->
	<link rel="stylesheet" href="<?php echo public_url(); ?>css/style.css">
</head>
<body>

	<!-- Start your project here-->  

	<!--Main Navigation-->
	<header>

		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

			<div class="container">

				<!-- Navbar brand -->
				<a class="navbar-brand" href="#">Navbar</a>

				<!-- Collapse button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
					aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Collapsible content -->
				<div class="collapse navbar-collapse" id="basicExampleNav">

					<!-- Links -->
					<ul class="navbar-nav mr-auto smooth-scroll">
						<li class="nav-item">
							<a class="nav-link" href="#intro">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#best-features">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#examples">Examples</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#gallery">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
					</ul>
					<!-- Links -->

					<!-- Social Icon  -->
					<ul class="navbar-nav nav-flex-icons">
						<li class="nav-item">
							<a class="nav-link"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link"><i class="fab fa-instagram"></i></a>
						</li>
					</ul>
				</div>
				<!-- Collapsible content -->

			</div>

		</nav>
		<!--/.Navbar-->

		<!--Mask-->
		<div id="intro" class="view">

			<div class="mask rgba-black-strong">

				<div class="container-fluid d-flex align-items-center justify-content-center h-100">

					<div class="row d-flex justify-content-center text-center">

						<div class="col-md-10">

							<!-- Heading -->
							<h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Travel</h2>

							<!-- Divider -->
							<hr class="hr-light">

							<!-- Description -->
							<h4 class="white-text my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti consequuntur.</h4>
							<button type="button" class="btn btn-outline-white">Read more<i class="fas fa-book ml-2"></i></button>

						</div>

					</div>

				</div>

			</div>

		</div>
		<!--/.Mask-->

	</header>
	<!--Main Navigation-->
