<?php 
  echo "
    <section id='suggest-wrap' class='bg-black p-4'>
			<h3 class='text-center text-warning'>Suggest a Topic</h3>
			<form action='includes/suggest-content.php' method='POST' class='mx-auto p-2 bg-dark rounded'>
				<select name='topic' class='form-control bg-black text-warning border border-warning'>
					<option selected>&nbsp; Momentum</option>
					<option>&nbsp; Energy and Work</option>
					<option>&nbsp; Properties of Matter</option>
					<option>&nbsp; Fluids</option>
					<option>&nbsp; Oscillations</option>
					<option>&nbsp; Waves and Sounds</option>
					<option>&nbsp; Wave Optics</option>
					<option>&nbsp; Ray Optics</option>
					<option>&nbsp; Electric Fields and Forces</option>
					<option>&nbsp; Electric Potential</option>
					<option>&nbsp; Current</option>
					<option>&nbsp; Resistance</option>
					<option>&nbsp; Circuits</option>
					<option>&nbsp; Magnetic Fields and Forces</option>
					<option>&nbsp; Electromagnetic Induction and Waves</option>
				</select>
				<input type='submit' name='submit' value='Submit' class='form-control d-block bg-black text-warning border border-warning'/>
			</form>
		</section>
  ";
?>