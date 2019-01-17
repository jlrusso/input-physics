$(function(){
  $(window).on('load', degreesModeHandler);
  const $calcInput = $('#calc-input');
  const $radiansBtn = $('#rad-deg-grid > button:first-of-type');
  const $degreesBtn = $('#rad-deg-grid > button:last-of-type');
  const $squareBtn = $('#square-btn');
  const $nthSquareBtn = $('#nth-square-btn');
  const $squareRootBtn = $('#square-root-btn');
  const $tenthPowerBtn = $('#tenth-power-btn');
  const $equalsBtn = $('#equals-btn');
  const $clearBtn = $('#clear-btn');
  const $deleteBtn = $('#delete-btn');
  const $sigFigField = $('#sig-fig-field');
  const $regularBtns = $('.reg-btn');
  const $trigBtns = $('.trig-btn');
  const $piBtn = $('#pi-btn');
  let inDegreesMode = true;
  const trigs = ['sin(', 'cos(', 'tan(', 'sin-1(', 'cos-1(', 'tan-1('];
  const tempTrigs = ['sint(', 'cost(', 'tant(', 'sin-1t', 'cos-1t(', 'tan-1t('];
  const degTrigs = ["Math.sin((Math.PI/180)*", "Math.cos((Math.PI/180)*", "Math.tan((Math.PI/180)*", "(180/Math.PI)*Math.asin(", "(180/Math.PI)*Math.acos(", "(180/Math.PI)*Math.atan("];
  const radTrigs = ["Math.sin(", "Math.cos(", "Math.tan(", "Math.asin(", "Math.acos(", "Math.atan("];

  $calcInput.on('keydown', keyPushHandler);
  $regularBtns.click(addToFieldHandler);
  $trigBtns.click(addTrigHandler);
  $radiansBtn.click(radiansModeHandler);
  $degreesBtn.click(degreesModeHandler);
  $squareRootBtn.click(addSquareRootHandler);
  $squareBtn.click(addSquareHandler);
  $nthSquareBtn.click(addNthSquareHandler);
  $tenthPowerBtn.click(addTenthPowerHandler);
  $clearBtn.click(clearFieldHandler);
  $equalsBtn.click(evaluateFieldHandler);
  $deleteBtn.click(deleteHandler);
  $piBtn.click(addPiHandler);

  function evaluateFieldHandler(){
    checkForSpecialChars();
    checkForTrigsHandler();
    try {
      if($calcInput.val().indexOf('=') === -1){
        applySigFigHandler();
      }
    } catch {
      $calcInput.val('Error');
    }
  }

  function applySigFigHandler(){
    const sigFigVal = ($sigFigField.val().length > 0) ? $sigFigField.val() : 0;
    if(sigFigVal > 0){
      displayResultsWithSigFigs(sigFigVal);
    } else {
      displayResultsWithoutSigFigs();
    }
  }

  function displayResultsWithSigFigs(num){
    const result = eval($calcInput.val()).toPrecision(num);
    $calcInput.val(`= ${result}`);
  }

  function displayResultsWithoutSigFigs(){
    $calcInput.val(`= ${eval($calcInput.val())}`);
  }

  function checkForSpecialChars(){
    if($calcInput.val().indexOf('√(') > -1){
      convertSquareRootHandler();
    }
    if($calcInput.val().indexOf('π') > -1){
      convertPiHandler();
    }
    if($calcInput.val().indexOf('^') > -1){
      convertSquareHandler();
    }
  }

  function checkForTrigsHandler(){
    const trigsPresent = trigs.some((trig) => $calcInput.val().indexOf(`${trig}`) > -1);
    if(trigsPresent){
      convertTrigsToTempTrigs();
    }
  }

  function addTrigHandler(){
    if($calcInput.val().indexOf('=') > -1){
      $calcInput.val($(this).text() + '( )');
    } else {
      $calcInput.val($calcInput.val() + $(this).text() + '( )');
    }
  }

  function convertTrigsToTempTrigs(){
    trigs.forEach((trig, index) => {
      while($calcInput.val().indexOf(`${trig}`) > -1){
        $calcInput.val($calcInput.val().replace(`${trig}`, `${tempTrigs[index]}`));
      }
    });
    inDegreesMode ? tempTrigsToDegreeMathTrigs() : tempTrigsToRadianMathTrigs();
  }

  function tempTrigsToDegreeMathTrigs(){
    tempTrigs.forEach((trig, index) => {
      while($calcInput.val().indexOf(`${trig}`) > -1){
        $calcInput.val($calcInput.val().replace(`${trig}`, `${degTrigs[index]}`));
      }
    });
  }

  function tempTrigsToRadianMathTrigs(){
    tempTrigs.forEach((trig, index) => {
      while($calcInput.val().indexOf(`${trig}`) > -1){
        $calcInput.val($calcInput.val().replace(`${trig}`, `${radTrigs[index]}`));
      }
    });
  }

  function convertPiHandler(){
    while($calcInput.val().indexOf('π') > -1){
      $calcInput.val($calcInput.val().replace('π', Math.PI));
    }
  }

  function addPiHandler(){
    if($calcInput.val().indexOf('=') > -1){
      $calcInput.val('*π');
    } else {
      $calcInput.val($calcInput.val() + '*π');
    }
  }

  function addToFieldHandler(){
    switch(true) {
      case ($calcInput.val().indexOf('=') > -1):
        $calcInput.val('' + $(this).text());
        break;
      default:
        $calcInput.val($calcInput.val() + $(this).text());
        break;
    }
  }

  function convertSquareRootHandler(){
    while($calcInput.val().indexOf('√(') > -1){
      $calcInput.val($calcInput.val().replace('√(', 'Math.sqrt('));
    }
  }

  function clearFieldHandler(){
    $calcInput.val('');
  }

  function degreesModeHandler(){ 
    $calcInput.val('');
    inDegreesMode = true;
    $('.deg-indicator').addClass('active-indicator');
    if($('.rad-indicator').hasClass('active-indicator')){
      $('.rad-indicator').removeClass('active-indicator');
    }
  }

  function radiansModeHandler(){
    $calcInput.val('');
    inDegreesMode = false;
    $('.rad-indicator').addClass('active-indicator');
    if($('.deg-indicator').hasClass('active-indicator')){
      $('.deg-indicator').removeClass('active-indicator');
    }
  }

  function keyPushHandler(event){
    if($calcInput.val().indexOf('=') > -1){
      $calcInput.val('');
    }
    switch(event.keyCode){
      case 13:
        evaluateFieldHandler();
        break;
      case 46:
        deleteInputHandler();
        break;
    }
  }

  function addSquareHandler(){
    if($calcInput.val().indexOf('=') > -1){
      $calcInput.val('^2');
    } else {
      $calcInput.val($calcInput.val() + '^2');
    }
  }

  function addNthSquareHandler(){
    if($calcInput.val().indexOf('=') > -1){
      $calcInput.val('^');
    } else {
      $calcInput.val($calcInput.val() + '^');
    }
  }

  function deleteHandler(){
    $calcInput.val($calcInput.val().slice(0, -1));
  }

  function addSquareRootHandler(){
    if($calcInput.val().indexOf("=") > -1){
      $calcInput.val('√( )');
    } else {
      $calcInput.val($calcInput.val() + '√( )');
    }
  }

  function convertSquareHandler(){
    while($calcInput.val().indexOf('^') > -1){
      $calcInput.val($calcInput.val().replace('^', '**'));
    }
  }

  function addTenthPowerHandler(){
    if($calcInput.val().indexOf('=') > -1){
      $calcInput.val('*10^');
    } else {
      $calcInput.val($calcInput.val() + '*10^');
    }
  }

}());