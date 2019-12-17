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
<body>

	<!-- Start your project here-->  

	<!--Main Navigation-->
	<header>

		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark indigo">

			
			<!-- Additional container -->
			<div class="container">

				<!-- Navbar brand -->
				<a class="navbar-brand" href="#">Navbar</a>

				<!-- Collapse button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
					aria-expanded="false" aria-label="Toggle navigation">
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

			</div>
			<!-- Additional container -->

		</nav>
		<!--/.Navbar-->

	</header>
	<!--Main Navigation-->
