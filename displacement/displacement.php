<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IP | Displacement</title>
	<link rel="shortcut icon" href="../images/home/ip-logo.ico" type="image/ico">
	<link rel="shortcut icon" href="/../images/displacement/ip-logo.ico" type="image/ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link type='text/css' rel="stylesheet" href="displacement.css">
	<link type='text/css' rel='stylesheet' href='../converter/converter-wrap.css'>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<?php
		include_once "../includes/nav-template.php";
	?>

	<section id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="animated bounceInDown section-heading">Displacement</h2>
					<div class="pages-nav animated bounceInDown" id="top-next">
						<ul class="pager">
							<li><a href="../vector-displacement/vector-displacement.php" class="next-page-btn">Next: Vector Displacement<span class="glyphicon glyphicon-chevron-right"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row animated fadeInRight">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<div class="solve-selection">
									<form>
										<span><span class="badge">1</span><b> Solve:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btns" name="radio-one" id="solve-displacement-radio-btn">
										    <span class="checkmark">displacement</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btns" name="radio-one" id="solve-final-p-radio-btn">
										    <span class="checkmark">final position</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btns" name="radio-one" id="solve-initial-p-radio-btn">
										    <span class="checkmark">initial position</span>
										</label>
									</form>
								</div>
								<div class="unit-selection">
									<form>
										<span class="badge">2</span>
										<span><b>Unit:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="first-units" name="radio-two" units="m" id="meter-btn"/>
										    <span class="checkmark">meters</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="first-units" name="radio-two" units="mi" id="mile-btn"/>
										    <span class="checkmark">miles</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="first-units" name="radio-two" units="ft" id="feet-btn"/>
										    <span class="checkmark">feet</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="first-units" name="radio-two" units="km" id="kilometer-btn"/>
										    <span class="checkmark">kilometers</span>
										</label>
									</form>
								</div>
							</div>
						</div>
						<div class="panel-body" id="main-panel">
							<div class="row">
								<div class="col-md-4">
									<h4 class="text-center"><span class="badge">3</span>&nbsp;<strong>Values</strong></h4>
									<form class="form-group">
										<input class="form-control num-input-field" type="number" id="displacement-field" placeholder="displacement (&Delta;x)">
										<input class="form-control num-input-field" type="number" id="final-p-field" placeholder="final position (Xf)">
										<input class="form-control num-input-field" type="number" id="initial-p-field" placeholder="initial position (Xi)">
										<input class="form-control num-input-field" type="number" id="sig-figs-field" placeholder="# of sig-figs (optional)">
										<div class="form-divider"></div>
										<div class="calc-and-clear">
											<button type="button" id="calculate-btn">Calculate</button>
											<button type="button" id="clear-btn"><b>Clear</b></button>
										</div>
									</form>
								</div>
								<div class="col-md-8 text-center">
									<h4 id="equation-heading"><strong>Equation</strong></h4>
									<div id="slide-arrow-container">
										<div class="slide-arrow-btn" id="prev-slide-btn"><span class="glyphicon glyphicon-chevron-left"></span></div>
										<div class="slide-arrow-btn" id="next-slide-btn"><span class="glyphicon glyphicon-chevron-right"></span></div>
									</div>
									<div id="outer-image-container">
										<div id="inner-image-container">
											<img src="../images/displacement/basic-displacement.PNG" class="img-responsive slide" alt="Displacement Equation">
											<img src="../images/displacement/basic-final-position.PNG" class="img-responsive slide" alt="Final Position Equation">
											<img src="../images/displacement/basic-initial-position.PNG" class="img-responsive slide" alt="Initial Position Equation">
										</div>
										<div id="slide-bar-indicators">
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
										</div>
									</div>
									<div id="solo-image">
										<img src="../images/displacement/newVelocityFrames.PNG" class="img-responsive" alt="Velocity Frames"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title text-center"><h4 id="background-heading"><b>Background:</b></h4></div>
						</div>
						<div class="panel-body module-section">
							<div class="module-box">
								<div class="module">
									<div class="module-front" id="first-front">Displacement</div>
									<div class="module-back" id="first-back">
										Net distance between final position and initial position
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Positive Motion</div>
									<div class="module-back">
										Conventionally upwards and / or to the right of the origin
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Negative Motion</div>
									<div class="module-back">
										Conventionally downwards and / or to the left of the origin
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module bottom-corners-rounded">
									<div class="module-front" id="last-front">Distance</div>
									<div class="module-back" id="last-back">
										Total distance travelled in any direction for given period of time
									</div>
								</div>
							</div>
							<div class="module-img">
								<img src="../images/displacement/positionVTimeGraph.PNG" class="img-responsive" alt="Position v. Time Graph">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default" id="third-panel">
				<div class="panel-body" id="third-panel-body">
					<div class="row animated fadeInLeft" id="third-pics-row">
						<div class="col-sm-4 third-page-pics">
							<img src="../images/displacement/footballField.jpg" alt="Football Field" class="img-responsive">
							<div class="img-caption">
								<p>NFL player Jim Marshall ran a fumble 66 yards to his own endzone. As in the NFL, direction matters in dislpacement.</p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../images/displacement/curvedRoad.jpg" alt="Track and Field" class="img-responsive">
							<div class="img-caption">
								<p>If the distance from end to end in this loop is 200 meters, the net displacement might only be 30 meters</p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../images/displacement/raceStart.jpg" alt="Race Start" class="img-responsive">
							<div class="img-caption">
								<p>800 meter track runners may start at different points along the track, but the total distance ran is always 800 meters.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="line-divider"></div>

			<?php
				include_once "../includes/practice-btns.php";
			?>

			<div class="modal fade example-modal" id="my-modal-one" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Displacement</h4>
						</div>
						<div class="modal-body">
							<button class="accordion first-accordion"><strong>Problem</strong></button>
							<div class="modal-panel">
								<p>
								James is taking a drive to the supermarket 10 miles east of his home to buy some groceries. On his way back home he will stop at a gas station 2.4 miles west of the supermarket. What will his net displacement be during that time period?
								</p>
							</div>
							<button class="accordion"><strong>Given Variables</strong></button>
							<div class="modal-panel">
								<p>
									<b>Supermarket</b> = 10 miles west<br/>
									<b>Gas station</b> = 2.4 miles east of the supermarket<br/>
									<b>Displacement</b> = net distance traveled<br/>
								</p>
							</div>
							<button class="accordion"><strong>Illustration</strong></button>
							<div class="modal-panel text-center">
								<p>
								<img src="../images/displacement/displacement-accordion-picture-one.PNG" alt="Displacement Illustration" class="img-responsive">
								</p>
							</div>
							<button class="accordion last-accordion"><strong>Solution</strong></button>
							<div class="modal-panel">
								<p>
									<ol>
										<li><b>Positive Displacement</b> = west</li>
										<li><b>Negative Displacement</b> = east</li>
										<li><b>First vector</b> = 10 miles west <b>(positive)</b></li>
										<li><b>Second vector</b> = 2.4 miles east <b>(negative)</b></li>
										<li><b>Net displacement</b> = 10 - 2.4 = 7.6 miles (west) <b>(positive)</b></li>
									</ol>
								</p>
							</div>
						</div>
						<div class="modal-footer text-center">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade example-modal" id="my-modal-two" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Final Position</h4>
						</div>
						<div class="modal-body">
							<button class="accordion first-accordion"><strong>Problem</strong></button>
							<div class="modal-panel">
								<p>
								A golf ball is placed 145 meters south of a tree line and is then hit with enough force to travel 300 meters north. What will be the golf ball’s final position?
								</p>
							</div>
							<button class="accordion"><strong>Given Variables</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Equation</b> = X<sub>f</sub> = &Delta;x + X<sub>i</sub></li>
										<li><b>Initial Position</b> = X<sub>i</sub> is 145 meters south of the treeline</li>
										<li><b>Distance Traveled</b> = 300 meters</li>
									</ul>
								</p>
							</div>
							<button class="accordion"><strong>Illustration</strong></button>
							<div class="modal-panel text-center">
								<img src="../images/displacement/displacement-accordion-picture-two.PNG" alt="Displacement Illustration" class="img-responsive">
							</div>
							<button class="accordion last-accordion"><strong>Solution</strong></button>
							<div class="modal-panel">
								<p>
									<ol>
										<li><b>Equation</b> : X<sub>f</sub> = &Delta;x + X<sub>i</sub></li>
										<li><b>Initial Position</b> : 0 meters (distance from treeline does not matter)</li>
										<li><b>Displacement</b> : 300 meters (only vector of travel)</li>
										<li><b>Final Position</b> : 300 - 0 = 300 meters</li>
									</ol>
								</p>
							</div>
						</div>
						<div class="modal-footer text-center">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade example-modal" id="my-modal-three" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Initial Position</h4>
						</div>
						<div class="modal-body">
							<button class="accordion first-accordion"><strong>Problem</strong></button>
							<div class="modal-panel">
								<p>
									Tom is practicing for his 200 meter race by running up a hill. Suppose he ran 150 meters and stopped to take a break. His displacement was  120 meters. What was in starting position in meters?
								</p>
							</div>
							<button class="accordion"><strong>Given Variables</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Equation</b> : X<sub>i</sub> = X<sub>f</sub> - &Delta;x</li>
										<li><b>Hill Height</b> : 200 meters</li>
										<li><b>Final Position</b> : 150 meters up hill</li>
										<li><b>Displacement</b> : 120 meters up hill</li>
									</ul>
								</p>
							</div>
							<button class="accordion"><strong>Illustration</strong></button>
							<div class="modal-panel text-center">
								<img src="../images/displacement/displacement-accordion-picture-three.PNG" alt="Displacement Illustration" class="img-responsive">
							</div>
							<button class="accordion last-accordion"><strong>Solution</strong></button>
							<div class="modal-panel">
								<p>
									<ol>
										<li><b>Equation</b> : X<sub>i</sub> = X<sub>f</sub> - &Delta;x</li>
										<li><b>Equation With Values</b> : (150 m) - (120 m)</li>
										<li><b>Initial Position</b> : (150 m) - (120 m) = 30 m</li>
									</ol>
								</p>
							</div>
						</div>
						<div class="modal-footer text-center">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			include_once "../includes/topic-converter.php";
	  ?>

		<div class="container">
			<ul class="pager">
  				<li><a href="../vector-displacement/vector-displacement.php" class="next-page-btn">Next: Vector Displacement<span class="glyphicon glyphicon-chevron-right"></span></a></li>
			</ul>
		</div>

	</section>

	<!-- Calculator Modal -->
			<div class="modal fade" id="calculator-modal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Calculator</h4>
						</div>
							<div class="modal-body">

								<?php
									include_once "../includes/topic-calc.php";
								 ?>

									<div id="calculator-tooltip"></div>
							</div>
						<div class="modal-footer text-center"  id="calc-modal-footer">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
				<div class="close-modal-btn">
					<span class="btn glyphicon glyphicon-remove"></span>
				</div>
			</div>

			<!-- Back to Top Btn -->
			<div id="go-up-container">
				<button type="button" id="go-up-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
			</div>

	<script type='text/javascript' src='../includes/topic-converter.js'></script>
	<script type='text/javascript' src='../includes/topic-calc.js'></script>
	<script type="text/JavaScript" src="displacement.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





</body>
</html>
