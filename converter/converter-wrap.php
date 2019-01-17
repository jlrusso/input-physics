<?php
  echo "
  <section id='conversion-wrap' class='text-center py-5 bg-black'>
			<h3 class='text-warning pb-2'>Unit Conversions</h3>
			<form class='p-2 bg-dark mx-auto rounded'>
				<input type='number' id='input-field' class='form-control border border-warning' max='999' placeholder='(input)'/>
				<select id='unit-conversion' class='form-control border border-warning'>
					<option id='mmToCm' selected>mm to cm</option>
          <option id='cmToMm'>cm to mm</option>
          <option id='cmToM'>cm to m</option>
          <option id='mToCm'>m to cm</option>
          <option id='mToKm'>m to km</option>
          <option id='kmToM'>km to m</option>
          <option id='mToMi'>m to mi</option>
          <option id='miToM'>mi to m</option>
          <option id='kmToMi'>km to mi</option>
          <option id='miToKm'>mi to km</option>
          <option id='ftToYd'>ft to yds</option>
          <option id='ydToFt'>yds to ft</option>
          <option id='ftToM'>ft to m</option>
          <option id='mToFt'>m to ft</option>
          <option id='inToCm'>in to cm</option>
          <option id='cmToIn'>cm to in</option>
          <option id='mgToG'>mg to g</option>
          <option id='gToMg'>g to mg</option>
          <option id='gToKg'>g to kg</option>
          <option id='kgToG'>Kg to g</option>
          <option id='lbToKg'>lbs to kg</option>
          <option id='kgToLb'>kg to lbs</option>
          <option id='km2ToM2'>km² to m²</option>
          <option id='m2ToKm2'>m² to km²</option>
				</select>
				<input type='text' id='output-field' class='form-control border border-warning' placeholder='(output)' disabled>
			</form>
		</section>
  ";
?>
