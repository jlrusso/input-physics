<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta property="description" content="Here, we cover the aspects of G-Forces, including Newton's laws, acceleration, action-reaction pairs, and enable you to solve your own practice problems">
	<title>IP | G-Forces</title>
	<link rel="shortcut icon" href="../images/home/ip-logo.ico" type="image/ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link type='text/css' rel='stylesheet' href='../includes/styles.css'>
	<link type='text/css' rel="stylesheet" href="g-forces.css">
</head>
<body>

	<?php
		include_once "../includes/nav-template.php";
	?>

	<section id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="animated bounceInDown section-heading">Gravitational Forces</h2>
					<div class="pages-nav animated bounceInDown">
						<ul class="pager">
							<li><a href="../forces/forces.php" class="prev-page-btn"><span class="glyphicon glyphicon-chevron-left"></span>Previous: Forces</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row animated fadeInRight">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<div class="object-selection">
									<form>
										<span class="badge">1</span>
										<span><b># of Objects:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="object-btn" name="radio" id="one-object-radio-btn">
										    <span class="checkmark">one</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="object-btn" name="radio" id="two-objects-radio-btn">
										    <span class="checkmark">two</span>
										</label>
									</form>
								</div>
								<div class="solve-selection">
									<form>
										<span class="badge">2</span>
										<span><b>Solve:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btn" name="radio-one" id="solve-force-btn">
										    <span class="checkmark">force</span> |
										</label>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btn" name="radio-one" id="solve-gravity-btn">
										    <span class="checkmark">g</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btn" name="radio-one" id="solve-small-mass-btn">
										    <span class="checkmark">mass</span>
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btn" name="radio-one" id="solve-big-mass-btn">
										    <span class="checkmark">Mass</span>
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btn" name="radio-one" id="solve-radius-btn">
										    <span class="checkmark">radius</span>
										</label>
									</form>
								</div>
								<div class="unit-selection">
									<form>
										<span class="badge">2</span>
										<span><b>Units:&nbsp;</b></span>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="N" name="radio-two" id="newtons-radio-btn">
										    <span class="checkmark">newtons</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="kg" name="radio-two" id="kilograms-radio-btn">
										    <span class="checkmark">kilograms</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="m" name="radio-two" id="meters-radio-btn">
										    <span class="checkmark">meters</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="m" name="radio-two" id="accl-units-radio-btn">
										    <span class="checkmark">m/s<sup>2</sup></span>
										</label>
									</form>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<h4 class="text-center"><span class="badge">4</span>&nbsp;<strong>Values</strong></h4>
									<form id="values-form">
									<span id="omega-symbol">&omega;</span>
									<input class="form-control input-field" type="number" id="gravitational-force-field" placeholder="force (F)">
									<input class="form-control input-field" type="number" id="gravity-field" placeholder="gravity (g)">
									<input class="form-control input-field" type="number" id="small-mass-field" placeholder="mass (m)">
									<input class="form-control input-field" type="number" id="big-mass-field" placeholder="Mass (M)">
									<input class="form-control input-field" type="number" id="radius-field" placeholder="radius (r)">
									<input class="form-control input-field" type="number" id="sig-figs-field" placeholder="# of sigfigs (optional)">
									<div class="form-divider"></div>
									<div class="calc-and-clear">
										<button type="button" class="btn" id="calculate-btn"><b>Calculate</b></button>
										<button type="button" class="btn" id="clear-btn"><b>Clear</b></button>
									</div>
									</form>
								</div>
								<div class="col-md-8 text-center">
									<h4 id="equation-heading"><strong>Equation</strong></h4>
									<div id="slide-arrows-container">
										<div class="slide-arrow-btn" id="prev-slide-btn"><span class="glyphicon glyphicon-chevron-left"></span></div>
										<div class="slide-arrow-btn" id="next-slide-btn"><span class="glyphicon glyphicon-chevron-right"></span></div>
									</div>
									<div id="outer-image-container">
										<div id="inner-image-container">
											<img src="../images/g-forces/gravitational-forces-one.PNG" class="img-responsive slide" alt="Gravitational Force Equation 2"/>
											<img src="../images/g-forces/gravitational-forces-two.PNG" class="img-responsive slide" alt="Gravitational Force Equation 3"/>
											<img src="../images/g-forces/gravitational-forces-three.PNG" class="img-responsive slide" alt="Gravitational Force Equation 3"/>
											<img src="../images/g-forces/gravitational-forces-four.PNG" class="img-responsive slide" alt="Gravitational Force Equation 3"/>
											<img src="../images/g-forces/gravitational-forces-five.PNG" class="img-responsive slide" alt="Gravitational Force Equation 3"/>
											<img src="../images/g-forces/gravitational-forces-six.PNG" class="img-responsive slide" alt="Gravitational Force Equation 3"/>
											<img src="../images/g-forces/gravitational-forces-seven.PNG" class="img-responsive slide" alt="Gravitational Force Equation 3"/>
										</div>
										<div id="slide-bar-indicators">
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
										</div>
									</div>
									<div id="solo-image">
										<img src="../images/g-forces/gravitational-forces-solo-image.PNG" class="img-responsive" alt="Gravitational Forces"/>
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
								<div class="module top-corners-rounded">
									<div class="module-front first-front">Newton's Law of Gravitation</div>
									<div class="module-back first-back">
										The gravitational pull is proportional to the products of the object masses
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Inverse Square Law</div>
									<div class="module-back">
										Force(grav) is inversely proportional to the distance between two objects squared
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Action-reaction Pair</div>
									<div class="module-back">
										Force(grav) magnitude of M is equal to m, but the directions are different
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front last-front">Acceleration Due to Gravity</div>
									<div class="module-back last-back">
										Use arrows below to see gravity of different planets
									</div>
								</div>
							</div>
							<div id="module-img-outer">
								<div id="module-img-inner">
									<div class="img-and-caption">
										<img src="../images/g-forces/sun.svg" class="img-responsive" alt="Earth Gravitational Acceleration">
										<span class="caption"><b>Sun - (g = 274.13 m / s<sup>2</sup>)</b></span>
									</div>
									<div class="img-and-caption">
										<img src="../images/g-forces/mercury.svg" class="img-responsive" alt="Mercury Gravitational Acceleration">
										<span class="caption"><b>Mercury - (g = 3.59 m / s<sup>2</sup>)</b></span>
									</div>
									<div class="img-and-caption">
										<img src="../images/g-forces/venus.svg" class="img-responsive" alt="Venus Gravitational Acceleration">
										<span class="caption"><b>Venus - (g = 8.87 m / s<sup>2</sup>)</b></span>
									</div>
									<div class="img-and-caption">
										<img src="../images/g-forces/planet-earth.svg" class="img-responsive" alt="Earth Gravitational Acceleration">
										<span class="caption"><b>Earth - (g = 9.81 m / s<sup>2</sup>)</b></span>
									</div>
									<div class="img-and-caption">
										<img src="../images/g-forces/moon.svg" class="img-responsive" alt="Moon Gravitational Acceleration">
										<span class="caption"><b>Moon - (g = 1.62 m / s<sup>2</sup>)</b></span>
									</div>
									<div class="img-and-caption">
										<img src="../images/g-forces/mars.svg" class="img-responsive" alt="Mars Gravitational Acceleration">
										<span class="caption"><b>Mars - (g = 3.77 m / s<sup>2</sup>)</b></span>
									</div>
									<div class="img-and-caption">
										<img src="../images/g-forces/jupiter.svg" class="img-responsive" alt="Jupiter Gravitational Acceleration">
										<span class="caption"><b>Jupiter - (g = 25.95 m / s<sup>2</sup>)</b></span>
									</div>
									<div class="img-and-caption">
										<img src="../images/g-forces/saturn.svg" class="img-responsive" alt="Saturn Gravitational Acceleration">
										<span class="caption"><b>Saturn - (g = 11.08 m / s<sup>2</sup>)</b></span>
									</div>
									<div class="img-and-caption">
										<img src="../images/g-forces/uranus.svg" class="img-responsive" alt="Uranus Gravitational Acceleration">
										<span class="caption"><b>Uranus - (g = 10.67 m / s<sup>2</sup>)</b></span>
									</div>
									<div class="img-and-caption">
										<img src="../images/g-forces/neptune.svg" class="img-responsive" alt="Neptune Gravitational Acceleration">
										<span class="caption"><b>Neptune - (g = 14.07 m / s<sup>2</sup>)</b></span>
									</div>
									<div class="img-and-caption">
										<img src="../images/g-forces/pluto.svg" class="img-responsive" alt="Pluto Gravitational Acceleration">
										<span class="caption"><b>Pluto - (g = 0.42 m / s<sup>2</sup>)</b></span>
									</div>
								</div>
								<div class="module-arrows-container">
									<span class="module-arrow" id="module-left-arrow">&#10094;</span>
									<span class="module-arrow" id="module-right-arrow">&#10095;</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-body" id="third-pics-panel">
					<div class="row animated fadeInLeft">
						<div class="col-sm-4 third-page-pics">
							<img src="../images/g-forces/shuttle.jpg" alt="Shuttle" class="img-responsive"/>
							<div class="img-caption">
								<p>As a space shuttle gets farther away from earth, the Force(grav) from earth on the shuttle gets weaker<a href="https://www.nasa.gov/audience/forstudents/5-8/features/nasa-knows/what-is-microgravity-58.html" target="_blank"/> (Source)</a></p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../images/g-forces/space-station.jpg" alt="Space Station" class="img-responsive"/>
							<div class="img-caption">
								<p>Since the ISS orbits 200 - 250 mi above earth, the Force(grav) on it is around 90% of that on earth<a href="https://www.nasa.gov/audience/forstudents/5-8/features/nasa-knows/what-is-microgravity-58.html" target="_blank"/> (Source)</a></p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../images/g-forces/raptor.jpeg" alt="F-22 Raptor" class="img-responsive"/>
							<div class="img-caption">
								<p>The F-22 raptor can reach up to 9 Gs (1G = 9.81 m/s2) which can cause an inexperienced pilot to pass out<a href="https://en.wikipedia.org/wiki/Mazda_RX-8" target="_blank"/> (Source)</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="line-divider"></div>

			<?php
				include_once "../includes/practice-btns.php";
				include_once "../includes/topic-converter.php";
			?>

			<div class="modal fade example-modal" id="my-modal-one" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center"><b>Gravitational Force</b></h4>
						</div>
						<div class="modal-body">
							<button class="accordion first-accordion"><strong>Problem</strong></button>
							<div class="modal-panel">
								<div class="modal-text">
									<p>
									The mass of the moon is roughly 7.35 x 1022  kg and the mass of the earth is roughly 5.97 x 1024 kg. If the distance between them is about 3.9 x 108 meters, what is the gravitational force experienced between them?
									</p>
								</div>
							</div>
							<button class="accordion"><strong>Given Variables</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Equation :</b>F<sub>(grav)</sub> = (G)(M)(m) / (r<sup>2</sup>)</li>
										<li><b>Earth Mass (M) :</b> 5.97 x 10<sup>24</sup> kg</li>
										<li><b>Moon Mass (m) :</b> 7.35 x 10<sup>22</sup> kg</li>
										<li><b>Gravitational Constant :</b> 6.7 x 10<sup>-11</sup> N m<sup>2</sup> / kg<sup>2</sup></li>
										<li><b>Distance B/w Centers :</b> 3.9 x 10<sup>8</sup> meters</li>
									</ul>
								</p>
							</div>
							<button class="accordion"><strong>Illustration</strong></button>
							<div class="modal-panel">
								<img src="../images/g-forces/gravitationalForcesAccordionImg1.PNG" class="img-responsive"/>
							</div>
							<button class="accordion last-accordion"><strong>Solution:</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Gravitational Force Equation :</b> F<sub>(grav)</sub> = (6.7 x 10<sup>-11</sup> N * m<sup>2</sup> / kg<sup>2</sup></li>
										<li><b>F<sub>(grav)</sub> :</b> ((6.7e-11)(5.97e24)(7.35e22) / (3.9e8)<sup>2</sup></li>
										<li><b>Answer :</b> 1.93 x 10<sup>20</sup> N</li>
									</ul>
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
								<h4 class="text-center"><b>Gravitational Acceleration</b></h4>
							</div>
							<div class="modal-body">
								<button class="accordion first-accordion"><strong>Problem</strong></button>
								<div class="modal-panel">
									<p>
									The diameter of Jupiter is roughly 1.4 x 10^8 meters and the mass is 1.9 x 10^26 kg. Given that the universal gravitational constant is 6.7 x 10-11 N * m2 / kg2, what is the gravitational acceleration on Jupiter?
									</p>
								</div>
								<button class="accordion"><strong>Given Variables</strong></button>
								<div class="modal-panel">
									<p>
										<ul>
											<li><b>Equation :</b> g = (G)(M) / (r)<sup>2</sup></li>
											<li><b>Jupiter Diameter :</b> 1.4 x 10<sup>8</sup> meters</li>
											<li><b>Jupiter Mass :</b> 1.9 x 10<sup>26</sup> kg</li>
											<li><b>Gravitational Constant (G) :</b> 6.7 x 10<sup>-11</sup>N*m<sup>2</sup> / kg<sup>2</sup></li>
										</ul>
									</p>
								</div>
								<button class="accordion"><strong>Illustration</strong></button>
								<div class="modal-panel">
									<img src="../images/g-forces/gravitationalForcesAccordionImg2.PNG" class="img-responsive"/>
								</div>
								<button class="accordion last-accordion"><strong>Solution</strong></button>
								<div class="modal-panel">
									<p>
										<ol>
											<li><b>Jupiter Radius :</b>(1.39e8) / 2 = 6.95e7 meters</li>
											<li><b>Gravitational Acceleration :</b> (6.7e-11)(1.89e27) / (6.95e7)<sup>2</sup></li>
											<li><b>Answer :</b> 26.22 Newtons</li>
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
								<h4 class="text-center"><b>Big Mass (M)</b></h4>
							</div>
							<div class="modal-body">
								<button class="accordion first-accordion"><strong>Problem</strong></button>
								<div class="modal-panel">
									<p>
										When earth and saturn are at their closest distance, the distance between their centers is approximately 6.1 x 10<sup>11</sup> meters. The gravitational constant is 6.7 x 10<sup>-11</sup>. If the mass of earth is 5.98 x 10<sup>24</sup> kg and gravitational force between them is 6.1 x 10<sup>17</sup>, then what is the mass of Saturn?
									</p>
								</div>
								<button class="accordion"><strong>Given Variables</strong></button>
								<div class="modal-panel">
									<p>
										<ul>
											<li><b>Gravitational Force Equation :</b>F<sub>(grav)</sub> = (G)(M)(m) / (r)<sup>2</sup></li>
											<li><b>Gravitational Constant :</b> 6.7 x 10<sup>-11</sup>N*m<sup>2</sup> / kg<sup>2</sup></li>
											<li><b>Earth's Mass :</b> 5.98 x 10<sup>24</sup></li>
											<li><b>Gravitation Force :</b>6.1 x 10<sup>17</sup></li>
											<li><b>Distance b/w centers :</b>6.1 x 10<sup>11</sup></li>
										</ul>
									</p>
								</div>
								<button class="accordion"><strong>Illustration</strong></button>
								<div class="modal-panel">
									<img src="../images/g-forces/gravitationalForcesAccordionImg3.PNG" class="img-responsive"/>
								</div>
								<button class="accordion last-accordion"><strong>Solution</strong></button>
								<div class="modal-panel">
									<p>
										<ol>
											<li><b>Solve For (M) Equation :</b>M = (F<sub>(grav)</sub>)(r<sup>2</sup>) / (G)(m)</li>
											<li><b>Solve For (M) :</b>(6.1 x 10<sup>17</sup>)(6.1 x 10<sup>11</sup>)(2) / (6.7 x 10<sup>-11</sup>p>)(5.98 x 10<sup>24</sup>)</li>
											<li><b>Answer :</b>5.68 x 10<sup>26</sup> kg</li>
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
									<div class="modal-footer text-center" id="calc-modal-footer">
										<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
									</div>
								</div>
							</div>
							<div class="close-modal-btn">
								<span class="btn glyphicon glyphicon-remove"></span>
							</div>
						</div>
						<!-- End of Calculator Modal -->

						<!-- Go back to top -->
						<div id="go-up-container">
							<button type="button" id="go-up-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
						</div>



		<div class="row">
			<div class="col-md-12">
				<ul class="pager">
					<li><a href="../forces/forces.php" class="prev-page-btn"><span class="glyphicon glyphicon-chevron-left"></span>Previous: Forces</a></li>
				</ul>
			</div>
		</div>

		<div id="credits-section">
			<div class="credits-inner text-center">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
		</div>
		
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="g-forces.js"></script>
	<script type="text/javascript" src="../includes/topic-calc.js"></script>
	
</body>
</html>
