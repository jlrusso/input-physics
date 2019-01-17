$(function(){
  const conversions = {
    mmToCm: "/ 10", 
    cmToMm: "* 10", 
    cmToM: "/ 100", 
    mToCm: "* 100",
    mToKm: "/ 1000",
    kmToM: "* 1000",
    mToMi: "/ 1609.34",
    miToM: "* 1609.34",
    miToKm: "* 1.60934",
    kmToMi: "* 0.621371",
    ftToYd: "/ 3",
    ydToFt: "* 3",
    ftToM: "* 0.3048",
    mToFt: "* 3.28084",
    cmToIn: "* 0.393701",
    inToCm: "* 2.54",
    mgToG: "/ 1000",
    gToMg: "* 1000",
    gToKg: "/ 1000",
    kgToG: "* 1000",
    lbToKg: "/ 2.20462",
    kgToLb: "* 2.20462",
    m2ToKm2: "/ 1000000",
    km2ToM2: "* 1000000"
  };
  const $userInput = $('#input-field');
  const $unitConversion = $('#unit-conversion');
  const $unitOutput = $('#output-field');

  $userInput.on("input propertychange", function(){
    convertValueHandler();
  });
  $unitConversion.on("change", function(){
    convertValueHandler();
  });
  
  const convertValueHandler = () => {
    var inputVal = $userInput.val();
    Object.keys(conversions).forEach(conv => {
      if($(`#${conv}`).is(":selected")){
        console.log(conv);
        var keyVal = conversions[`${conv}`];
        var output = eval(inputVal + keyVal);
        if(output.toString().indexOf(".") > -1) output = output.toFixed(2);
        $unitOutput.val(output)
      }
    });
  }

});