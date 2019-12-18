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
	<link rel="stylesheet" href="<?php echo mdb_url(); ?>css/style.css">
</head>
<body class="fixed-sn">

	<!-- Start your project here-->  

	<!--Main Navigation-->
	<header>

	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark primary-color double-nav">

		<!-- Navbar brand -->
		<a class="navbar-brand" href="#">Navbar</a>

		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Collapsible content -->
		<div class="collapse navbar-collapse" id="basicExampleNav">

			<!-- Links -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home
			  <span class="sr-only">(current)</span>
			</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
				</li>

				<!-- Dropdown -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
					<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>

			</ul>
			<!-- Links -->

			<form class="form-inline">
				<div class="md-form my-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
				</div>
			</form>
		</div>
		<!-- Collapsible content -->

	</nav>
	<!--/.Navbar-->

		<!-- SideNav slide-out button -->
		<!--a href="#" data-activates="slide-out" class="btn btn-primary p-3 button-collapse"><i class="fas fa-bars"></i></a-->

		<!-- Sidebar navigation -->
		<div id="slide-out" class="side-nav fixed">
			<ul class="custom-scrollbar">
				<!-- Logo -->
				<li>
					<div class="logo-wrapper waves-light">
						<a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
					</div>
				</li>
				<!--/. Logo -->
				<!--Social-->
				<li>
					<ul class="social">
						<li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
						<li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
						<li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
						<li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
					</ul>
				</li>
				<!--/Social-->
				<!--Search Form-->
				<li>
					<form class="search-form" role="search">
						<div class="form-group md-form mt-0 pt-1 waves-light">
							<input type="text" class="form-control" placeholder="Search">
						</div>
					</form>
				</li>
				<!--/.Search Form-->
				<!-- Side navigation links -->
				<li>
					<ul class="collapsible collapsible-accordion">
						<li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i>
								Submit blog<i class="fas fa-angle-down rotate-icon"></i></a>
							<div class="collapsible-body">
								<ul>
									<li><a href="#" class="waves-effect">Submit listing</a>
									</li>
									<li><a href="#" class="waves-effect">Registration form</a>
									</li>
								</ul>
							</div>
						</li>
						<li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-hand-pointer"></i>
								Instruction<i class="fas fa-angle-down rotate-icon"></i></a>
							<div class="collapsible-body">
								<ul>
									<li><a href="#" class="waves-effect">For bloggers</a>
									</li>
									<li><a href="#" class="waves-effect">For authors</a>
									</li>
								</ul>
							</div>
						</li>
						<li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-eye"></i> About<i class="fas fa-angle-down rotate-icon"></i></a>
							<div class="collapsible-body">
								<ul>
									<li><a href="#" class="waves-effect">Introduction</a>
									</li>
									<li><a href="#" class="waves-effect">Monthly meetings</a>
									</li>
								</ul>
							</div>
						</li>
						<li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-envelope-o"></i> Contact 
							me<i class="fas fa-angle-down rotate-icon"></i></a>
							<div class="collapsible-body">
								<ul>
									<li><a href="#" class="waves-effect">FAQ</a>
									</li>
									<li><a href="#" class="waves-effect">Write a message</a>
									</li>
									<li><a href="#" class="waves-effect">FAQ</a>
									</li>
									<li><a href="#" class="waves-effect">Write a message</a>
									</li>
									<li><a href="#" class="waves-effect">FAQ</a>
									</li>
									<li><a href="#" class="waves-effect">Write a message</a>
									</li>
									<li><a href="#" class="waves-effect">FAQ</a>
									</li>
									<li><a href="#" class="waves-effect">Write a message</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</li>
				<!--/. Side navigation links -->
			</ul>
			<div class="sidenav-bg rgba-blue-strong"></div>
		</div>
		<!--/. Sidebar navigation -->

	</header>
	<!--Main Navigation-->
