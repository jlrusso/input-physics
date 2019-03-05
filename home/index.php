<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../images/home/ip-logo.ico" type="image/ico">
	<title>Input Physics</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../includes/styles.css">
	<link type="text/css" rel="stylesheet" href="css/loader-wrap.css">
	<link type="text/css" rel="stylesheet" href="css/header-section.css">
	<link type="text/css" rel="stylesheet" href="css/banner-section.css">
	<link type="text/css" rel="stylesheet" href="css/how-section.css">
	<link type="text/css" rel="stylesheet" href="css/topics-wrap.css">
	<link type="text/css" rel="stylesheet" href="css/suggest-wrap.css">
	<link type="text/css" rel="stylesheet" href="../converter/converter-wrap.css">	
	<link type="text/css" rel="stylesheet" href="../calculator/calc-wrap.css">
	<link type="text/css" rel="stylesheet" href="../search/search-wrap.css">
</head>
<body>
	<div id="pre-loader">
		<h3>Input Physics</h3>
		<div id="load-spinner"></div>
		<div id="icon-wrapper">
			<img src="../images/home/divide-loader.PNG" alt="Divide-icon" class="load-image"/>
			<img src="../images/home/times-loader.PNG" alt="Times-icon" class="load-image"/>
			<img src="../images/home/minus-loader.PNG" alt="Minus-icon" class="load-image"/>
			<img src="../images/home/add-loader.PNG" alt="Add-icon" class="load-image"/>
		</div>
	</div>

		<header class="position-fixed bg-transparent">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<a class="navbar-brand text-warning font-weight-bold" href="/input-physics/home/index.php">Input Physics</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navigation">
					<ul class="navbar-nav">
						<li class="nav-item ml-2">
							<a class="nav-link text-light" href="/input-physics/home/index.php">Home</a>
						</li>
						<li class="nav-item ml-2">
							<a class="nav-link text-light" id="topics-btn">Topics</a>
						</li>
						<li class="nav-item ml-2">
							<a class="nav-link text-light" id="conversions-btn">Conversions</a>
						</li>
						<li class="nav-item ml-2">
							<a class="nav-link text-light" id="calculator-btn">Calculator</a>
						</li>
						<li class="nav-item ml-2">
							<a class="nav-link text-light" id="suggest-btn">Suggest</a>
						</li>
						<li class="nav-item ml-2" id="search-btn">
							<a class="nav-link text-light"><i class="fa fa-search"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<?php
			include_once '../search/search-wrap.php';
			include_once '../search/search-cases.php';
		?>

		<section class="container-fluid" id="banner-section">
			<div class="banner-overlay"></div>
			<div class="text-center" id="banner-content">
				<h1 class="display-5 text-warning">Find Physics Solutions</h1>
				<div class="top-bar bg-warning rounded my-4 divider"></div>
				<p class="text-light text-center mx-auto lh-30">
					With Input Physics you can find examples for various types of physics problems, tailored calculators to solve them, and step by step solutions.
				</p>
				<div class="text-center my-5 banner-btn-wrap">
					<button type="button" class="btn btn-warning px-5" id="get-started-btn">Get Started</button>
				</div>
			</div>
		</section>

		<section class="container-fluid bg-black" id="how-section">
			<div class="container">
				<div class="row py-5">
					<div class="col-lg-4 p-3">
						<div class="content-box text-center">
							<img src="../images/home/search-icon.png" alt="Search Icon"/>
							<div class="top-bar bg-warning rounded my-4"></div>
							<p class="text-light mt-3 lh-30">
								Search our database by topic or topic-related terms for relevant information, useful equations, and illustrations.
							</p>
						</div>
					</div>
					<div class="col-lg-4 p-3">
						<div class="content-box text-center">
							<img src="../images/home/review-icon.png" alt="Review Icon"/>
							<div class="top-bar bg-warning rounded my-4"></div>
							<p class="text-light mt-3 lh-30">
								Each page covers practice problems for a given topic and includes detailed, step by step solutions for each one.
							</p>
						</div>
					</div>
					<div class="col-lg-4 p-3">
						<div class="content-box text-center">
							<img src="../images/home/solution-icon.png" alt="Solution Icon"/>
							<div class="top-bar bg-warning rounded my-4"></div>
							<p class="text-light mt-3 lh-30">
								Solve your homework problems by going to the relevant topic page and inputing any values that are available.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php 
			include_once '../includes/topics-wrap.php';
			include_once '../converter/converter-wrap.php';
			include_once '../calculator/calc-wrap.php';
			include_once '../includes/suggest-wrap.php';
		?>

		<footer class="bg-black">
			<p class="text-warning text-center m-0 p-4"><b>&copy; Input Physics 2018</b></p>
		</footer>

		<a id='go-up-btn' class='text-warning bg-black rounded px-3 py-2 border border-warning'>
			<i class='fa fa-angle-up font-weight-bold'></i>
		</a>

		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type='text/javascript' src='js/loader.js'></script>
		<script type="text/javascript" src="../converter/converter-wrap.js"></script>
		<script type="text/javascript" src="../search/search-wrap.js"></script>
		<script type="text/javascript" src="../calculator/calc-wrap.js"></script>
	
	</body>
</html>