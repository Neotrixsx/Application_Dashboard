<?php
include 'session.php';
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="images/favicon.ico">
		<title>Applications Dashboard</title>
		<!-- Bootstrap core CSS -->
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
		<!--Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		<!-- Icons -->
		<link href="css/font-awesome.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>
		<div class="container-fluid" id="wrapper">
			<div class="row">
				<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">
					<h1 class="site-title">
						<a href="dashboard.php">
							<em class="fa fa-rocket"></em> Dashboard</a>
					</h1>

					<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">
						<em class="fa fa-bars"></em>
					</a>

					<ul class="nav nav-pills flex-column sidebar-nav">
						<li class="nav-item">
							<a class="nav-link active" href="dashboard.php">
								<em class="fa fa-people"></em> Profile
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="dashboard.php">
								<em class="fa fa-people"></em> Add Application
								<span class="sr-only">(current)</span>
							</a>
						</li>
					</ul>

					<a href="includephp/logout.php" class="logout-button">
						<em class="fa fa-power-off"></em> Signout</a>
				</nav>

				<main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
					<header class="page-header row justify-center">
						<div class="col-md-6 col-lg-8">
							<h1 class="float-left text-center text-md-left">Applications</h1>
						</div>
						<!-- <button type="button" class="btn btn-primary">Primary</button> -->
						<div class="col-md-6 col-lg-4 text-center text-md-right">
						<button type="button" class="btn btn-primary">Welcome User Name</button>

						</div>

						<div class="clear"></div>
					</header>

					<section class="row">
						<div class="col-sm-12">
							<section class="row">
								<div class="col-md-12 col-lg-4">
									<div class="jumbotron">
										<h1 class="mb-4">Application Name</h1>
										<p class="lead">Application Description: This is a simple hero unit, a simple jumbotron-style component for calling extra attention
											to featured content or information.</p>
										<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
										<p class="lead">
											<a class="btn btn-primary btn-lg mt-2" href="dashboard.php" role="button">Let me in..</a>
										</p>
									</div>
								</div>
								<div class="col-md-12 col-lg-4">
									<div class="jumbotron">
										<h1 class="mb-4">Application Name</h1>
										<p class="lead">Application Description: This is a simple hero unit, a simple jumbotron-style component for calling extra attention
											to featured content or information.</p>
										<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
										<p class="lead">
											<a class="btn btn-primary btn-lg mt-2" href="#" role="button">Let me in..</a>
										</p>
									</div>
								</div>
								<div class="col-md-12 col-lg-4">
									<div class="jumbotron">
										<h1 class="mb-4">Application Name</h1>
										<p class="lead">Application Description: This is a simple hero unit, a simple jumbotron-style component for calling extra attention
											to featured content or information.</p>
										<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
										<p class="lead">
											<a class="btn btn-primary btn-lg mt-2" href="#" role="button">Let me in..</a>
										</p>
									</div>
								</div>
								<div class="col-md-12 col-lg-4">
									<div class="jumbotron">
										<h1 class="mb-4">Application Name</h1>
										<p class="lead">Application Description: This is a simple hero unit, a simple jumbotron-style component for calling extra attention
											to featured content or information.</p>
										<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
										<p class="lead">
											<a class="btn btn-primary btn-lg mt-2" href="#" role="button">Let me in..</a>
										</p>
									</div>
								</div>
							</section>

						</div>
					</section>
				</main>
			</div>
		</div>

		<!-- Bootstrap core JavaScript
    ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
		<script>
		function jumppage(link){
			console.log(link);
			windows.location.href="dashboard.php";
		}
		</script>
	</body>

	</html>
