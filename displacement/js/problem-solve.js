$(function(){
  
  const $solveBtns = $(".solve-btn");
  const $units = $(".units");
  const $numInputFields = $(".num-input-field");
  const $dispField = $("#displacement-field");
  const $finalPField = $("#final-p-field");
  const $initialPField = $("#initial-p-field");
  const $sigFigsField = $("#sig-figs-field");
  const $calculateBtn = $("#calculate-btn");
  const $clearBtn = $("#clear-btn");
  const $imagesContainer = $("#inner-image-container");
  let chosenUnit, currentSlideIndex = 0, slideAmount = 100;

  const resetSolveBtns = () => {
    $solveBtns.each((index, btn) => $(btn).prop('checked', false));
  };

  const resetUnitBtns = () => {
    $units.each((index, btn) => $(btn).prop('checked', false));
  };

  const resetEquationSlides = () => {
    $imagesContainer.css('left', 0);
  };

  const resetInputFields = () => {
    $dispField.prop('placeholder', 'Displacement');
    $finalPField.prop('placeholder', 'Final Position');
    $initialPField.prop('placeholder', 'Initial Position');
    $numInputFields.each((index, field) => {
      $(field).val('');
      $(field).prop('disabled', false);
      $(field).prop('type', 'number');
      $(field).removeClass('yellow-outline');
    });
  };

  const solveDisplacementPrep = () => {
    $units.eq(0).prop('checked', true);
    $dispField.prop('placeholder', 'Calculating Disp..');
    $dispField.prop('disabled', true);
    $dispField.addClass('yellow-outline');
  };

  const solveInitialPositionPrep = () => {
    $units.eq(0).prop('checked', true);
    $initialPField.prop('placeholder', 'Calculating Initial P..');
    $initialPField.prop('disabled', true);
    $initialPField.addClass('yellow-outline');
  };

  const solveFinalPositionPrep = () => {
    $units.eq(0).prop('checked', true);
    $finalPField.prop('placeholder', 'Calculating Final P..');
    $finalPField.prop('disabled', true);
    $finalPField.addClass('yellow-outline');
  };

  const decideWhatToSolveFor = () => {
    switch(true){
      case ($solveBtns.eq(0).prop('checked')):
        solveDisplacementPrep();
        break;
      case ($solveBtns.eq(1).prop('checked')):
        solveFinalPositionPrep();
        break;
      case ($solveBtns.eq(2).prop('checked')):
        solveInitialPositionPrep();
        break;
    }
  };

  const switchToSlide = () => {
    $imagesContainer.css('left', `${-slideAmount * currentSlideIndex}%`);
  };

  const solveBtnClickHandler = index => {
    currentSlideIndex = index;
    resetInputFields();
    switchToSlide();
    decideWhatToSolveFor();
  };

  const calculateDisplacement = () => {
    const tempNumDispVal = $finalPField.val() - $initialPField.val()
    const tempStringDispVal = tempNumDispVal.toString();
    $dispField.prop('type', 'text');
    if(tempStringDispVal.length > 9){      
      const finalDispVal = tempNumDispVal.toPrecision($sigFigsField.val() || 7) + " " + (chosenUnit || "m");
      $dispField.val(finalDispVal);
    } else {
      const finalDispVal = tempNumDispVal.toPrecision($sigFigsField.val() || tempStringDispVal.length) + " " + (chosenUnit || "m");
      $dispField.val(finalDispVal);
    }
  }

  const calculateInitialPosition = () => {
    const tempNumInitVal = $finalPField.val() - $dispField.val();
    const tempStringInitVal = tempNumInitVal.toString();
    $initialPField.prop('type', 'text');
    if(tempStringInitVal.length > 9){
      const initPVal = tempNumInitVal.toPrecision($sigFigsField.val() || 7) + " " + (chosenUnit || "m");
      $initialPField.val(initPVal)
    } else {
      const initPVal = tempNumInitVal.toPrecision($sigFigsField.val() || tempStringInitVal.length) + " " + (chosenUnit || "m");
      $initialPField.val(initPVal);
    }
  };

  const calculateFinalPosition = () => {
    const tempNumFinalPVal = parseFloat($dispField.val()) + parseFloat($initialPField.val());
    const tempStringFinalPVal = tempNumFinalPVal.toString();
    $finalPField.prop('type', 'text');
    if(tempStringFinalPVal.length > 9){
      const finalPVal = tempNumFinalPVal.toPrecision($sigFigsField.val() || 7) + " " + (chosenUnit || "m");
      $finalPField.val(finalPVal);
    } else {
      const finalPVal = tempNumFinalPVal.toPrecision($sigFigsField.val() || tempStringFinalPVal.length) + " " + (chosenUnit || "m");
      $finalPField.val(finalPVal);
    }
  };

  const calculateSolution = () => {
    switch(true){
      case ($solveBtns.eq(0).prop('checked')):
        calculateDisplacement();
        break;
      case ($solveBtns.eq(1).prop('checked')):
        calculateFinalPosition();
        break;
      case ($solveBtns.eq(2).prop('checked')):
        calculateInitialPosition();
        break;
      default:
        alert("Must choose what to solve for");
    }
  };

  const resetEverything = () => {
    resetSolveBtns();
    resetUnitBtns();
    resetInputFields();
    resetEquationSlides();
  };

  $solveBtns.each((index, btn) => {
    $(btn).click(solveBtnClickHandler.bind(null, index));
  });

  $units.each((index, btn) => {
    $(btn).click(() => {
      chosenUnit = $(btn).attr('units');
    });
  });

  $calculateBtn.click(calculateSolution);
  $clearBtn.click(resetEverything);

});