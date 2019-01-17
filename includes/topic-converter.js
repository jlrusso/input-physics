var unitInput = document.getElementById('unit-input-field');
var unitOutput = document.getElementById('unit-output-field');
var unitConverter = document.getElementById('unit-converter');
unitInput.addEventListener('input', convertUnit);
unitInput.addEventListener('change', convertUnit);
unitConverter.addEventListener('change', convertUnit);

function convertUnit() {
  if (unitInput.value < 0){
    alert("Please enter a value greater or equal to zero");
    unitInput.value = "";
  } else {
    switch(true)
    {
      case document.getElementById('millimetersToCentimeters').selected:
        unitOutput.value = (unitInput.value / 10) + " cm";
        break;
      case document.getElementById('centimetersToMillimeters').selected:
        unitOutput.value = (unitInput.value * 10) + " mm";
        break;
      case document.getElementById('centimetersToMeters').selected:
        unitOutput.value = (unitInput.value / 100) + " m";
        break;
      case document.getElementById('metersToCentimeters').selected:
        unitOutput.value = (unitInput.value * 100) + " cm";
        break;
      case document.getElementById('metersTokilometers').selected:
        unitOutput.value = (unitInput.value / 1000) + " km";
        break;
      case document.getElementById('kilometersToMeters').selected:
        unitOutput.value = (unitInput.value * 1000) + " m";
        break;
      case document.getElementById('metersToMiles').selected:
        unitOutput.value = (unitInput.value / 1609.34) + " mi";
        break;
      case document.getElementById('milesToMeters').selected:
        unitOutput.value = (unitInput.value * 1609.34) + " m";
        break;
      case document.getElementById('milesToKilometers').selected:
        unitOutput.value = (unitInput.value * 1.60934) + " km";
        break;
      case document.getElementById('kilometersToMiles').selected:
        unitOutput.value = (unitInput.value * 0.621371) + " mi";
        break;
      case document.getElementById('feetToYards').selected:
        unitOutput.value = (unitInput.value / 3) + " yds";
        break;
      case document.getElementById('yardsToFeet').selected:
        unitOutput.value = (unitInput.value * 3) + " ft";
        break;
      case document.getElementById('feetToMeters').selected:
        unitOutput.value = (unitInput.value * 0.3048) + " m";
        break;
      case document.getElementById('metersToFeet').selected:
        unitOutput.value = (unitInput.value * 3.28084) + " ft";
        break;
      case document.getElementById('centimetersToInches').selected:
        unitOutput.value = (unitInput.value * 0.393701) + " in";
        break;
      case document.getElementById('inchesToCentimeters').selected:
        unitOutput.value = (unitInput.value * 2.54) + " cm";
        break;
      case document.getElementById('milligramsToGrams').selected:
        unitOutput.value = (unitInput.value / 1000) + " g";
        break;
      case document.getElementById('gramsToMilligrams').selected:
        unitOutput.value = (unitInput.value * 1000) + " mg";
        break;
      case document.getElementById('gramsToKilograms').selected:
        unitOutput.value = (unitInput.value / 1000) + " kg";
        break;
      case document.getElementById('kilogramsToGrams').selected:
        unitOutput.value = (unitInput.value * 1000) + " g";
        break;
      case document.getElementById('poundsToKilograms').selected:
        unitOutput.value = (unitInput.value / 2.20462) + " kg";
        break;
      case document.getElementById('kilogramsToPounds').selected:
        unitOutput.value = (unitInput.value * 2.20462) + " lbs";
        break;
      case document.getElementById('squareMetersToKilometersSquared').selected:
        unitOutput.value = (unitInput.value / 1000000).toExponential(2) + " km²";
        break;
      case document.getElementById('kilometerSquaredToSquareMeters').selected:
        unitOutput.value = (unitInput.value * 1000000).toExponential(2) + " m²";
        break;
    }
  }
}
