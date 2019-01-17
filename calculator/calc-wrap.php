<?php
	echo "
		<section id='calculator-wrap' class='bg-black py-5'>
			<h3 class='text-warning text-center'>Calculator</h3>
			<div id='calculator-whole' class='bg-dark rounded p-2'>
				<input type='text' id='calc-input' class='form-control d-block w-100 p-4 border border-warning mb-2'/>
				<div id='rad-deg-grid' class='mb-2'>
					<button class='bg-black border border-warning rounded text-warning py-2'>Radians<span class='rad-indicator bg-dark'></span></button>
					<button class='bg-black border border-warning rounded text-warning py-2'>Degrees<span class='deg-indicator bg-dark'></span></button>
				</div>
				<div class='quad-grid mb-2'>
					<button class='bg-black border border-warning rounded text-warning py-2 trig-btn'>sin</button>
					<button class='bg-black border border-warning rounded text-warning py-2 trig-btn'>cos</button>
					<button class='bg-black border border-warning rounded text-warning py-2 trig-btn'>tan</button>
					<button class='bg-black border border-warning rounded text-warning py-2 trig-btn' id='pi-btn'>π</button>
				</div>
				<div class='quad-grid mb-2'>
					<button class='bg-black border border-warning rounded text-warning py-2 trig-btn'>sin<sup>-1</sup></button>
					<button class='bg-black border border-warning rounded text-warning py-2 trig-btn'>cos<sup>-1</sup></button>
					<button class='bg-black border border-warning rounded text-warning py-2 trig-btn'>tan<sup>-1</sup></button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>/</button>
				</div>
				<div class='quad-grid mb-2'>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>7</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>8</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>9</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>*</button>
				</div>
				<div class='quad-grid mb-2'>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>4</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>5</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>6</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>-</button>
				</div>
				<div class='quad-grid mb-2'>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>1</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>2</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>3</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>+</button>
				</div>
				<div class='quad-grid mb-2'>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>0</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>.</button>
					<button id='square-btn' class='bg-black border border-warning rounded text-warning py-2'>x<sup>2</sup></button>
					<button id='nth-square-btn' class='bg-black border border-warning rounded text-warning py-2'>x<sup>n</sup></button>
				</div>
				<div class='quad-grid mb-2'>
					<button id='square-root-btn' class='bg-black border border-warning rounded text-warning py-2'>√</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>(</button>
					<button class='bg-black border border-warning rounded text-warning py-2 reg-btn'>)</button>
					<button id='tenth-power-btn' class='bg-black border border-warning rounded text-warning py-2' id='tenth-power-btn'>EE</button>
				</div>
				<div class='quad-grid'>
					<button id='equals-btn' class='bg-black border border-warning rounded text-warning py-2'>=</button>
					<button id='clear-btn' class='bg-black border border-warning rounded text-warning py-2'>Clear</button>
					<button id='delete-btn' class='bg-black border border-warning rounded text-warning py-2'>Del</button>
					<input id='sig-fig-field' type='text' placeholder='#SD' class='py-2 pl-2 bg-black border border-warning rounded text-warning'/>
				</div>
			</div>
		</section>
	";
?>