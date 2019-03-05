<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IP | Displacement</title>
  <link rel="shortcut icon" href="../images/home/ip-logo.ico" type="image/ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link type='text/css' rel='stylesheet' href='./css/index.css'>
  <link type='text/css' rel="stylesheet" href="./css/displacement.css">
  <link type='text/css' rel='stylesheet' href='./css/header-section.css'>
	<link type='text/css' rel='stylesheet' href='../converter/converter-wrap.css'>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php 
    include_once "./php/topic-header.php";
    include_once "../includes/topic-search-list.php";
  ?>
  <section class="container">
    <?php
      include_once "./php/topic-subheader.php";
    ?>
    <div class="row animated fadeInRight" id="main-topic-row">
      <?php
        include_once "./php/topic-solve-wrap.php"; 
        include_once "./php/topic-info.php";
      ?>
    </div>
    <?php
      include_once "./php/calculator-modal.php";
      include_once "./php/triple-image-wrap.php";
      include_once "../includes/practice-btns.php";
      include_once "./php/example-modal-one.php";
      include_once "./php/example-modal-two.php";
      include_once "./php/example-modal-three.php";
      include_once "../includes/topic-converter.php";
    ?>
    <ul class="pager">
      <li>
        <a href="../vector-displacement/vector-displacement.php" class="next-page-btn">
          Next: Vector Displacement<span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </li>
    </ul>
    <div id="go-up-container">
      <button type="button" id="go-up-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
    </div>
  </section>

  <script type='text/javascript' src='./js/header-section.js'></script>
  <script type='text/javascript' src='./js/problem-solve.js'></script>
  <script type='text/javascript' src='./js/equation-slides.js'></script>
  <script type='text/javascript' src='./js/triple-img-section.js'></script>
  <script type='text/javascript' src='./js/practice-section.js'></script>
	<script type='text/javascript' src='../includes/topic-converter.js'></script>
	<script type='text/javascript' src='../includes/topic-calc.js'></script>
	<script type="text/JavaScript" src="./js/displacement.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
