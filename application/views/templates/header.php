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
<body class="fixed-sn light-blue-skin">

	<!-- Start your project here-->  

	<!--Main Navigation-->
	<header>

		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar double-nav">

			<!-- SideNav slide-out button -->
			<div class="float-left">
				<a href="#" data-activates="slide-out" class="button-collapse">
					<i class="fas fa-bars"></i>
				</a>
			</div>

			<!-- Breadcrumb-->
			<div class="breadcrumb-dn mr-auto white-text">
				<p>Material Design for Bootstrap</p>
			</div>

			<!-- Links -->
			<ul class="nav navbar-nav nav-flex-icons ml-auto">
				<li class="nav-item">
					<a class="nav-link">
						<i class="fas fa-envelope"></i>
						<span class="clearfix d-none d-sm-inline-block">Contact</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link">
						<i class="fas fa-cog"></i>
						<span class="clearfix d-none d-sm-inline-block">Settings</span>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user"></i>
						<span class="clearfix d-none d-sm-inline-block">Account</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
			</ul>

		</nav>
		<!--/.Navbar-->

		<!-- SideNav slide-out button -->
		<!--a href="#" data-activates="slide-out" class="btn btn-primary p-3 button-collapse"><i class="fas fa-bars"></i></a-->

		<!-- Sidebar navigation -->
		<div id="slide-out" class="side-nav fixed sn-bg-2">
			<ul class="custom-scrollbar">
				<!-- Logo -->
				<li class="logo-sn waves-effect">
					<div class=" text-center">
						<a href="#" class="pl-0">
							<img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="">
						</a>
					</div>
				</li>
				<!--/. Logo -->
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
