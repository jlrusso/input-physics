		$(window).on('beforeunload', function() {
			 $(window).scrollTop(0);
		});


		var calculatorBtn = document.getElementById("calculator-btn");
		calculatorBtn.setAttribute("data-toggle", "modal");
		calculatorBtn.setAttribute("data-target", "#calculator-modal");

		$(document).ready(function(){
			$("#contact-btn").add("#vert-contact-btn").remove();
			var $calcParentLi = $("#calculator-btn").parent("li");
			$calcParentLi.before("<li><a href='#' id='examples-btn'>Examples</a></li>");
			var $vertCalcParentLi = $("#vert-calculator-btn").parent("li");
			$vertCalcParentLi.before("<li><a href='#' id='vert-examples-btn'>Examples</a></li>");

			$("#conversion-btn").click(function(){
				$("html, body").animate({
					scrollTop: $("#conversion-container").offset().top
				}, "slow")
			});

			$("#vert-conversion-btn").click(function(){
				$("html, body").animate({
					scrollTop: $("#conversion-container").offset().top
				}, "slow")
			});

			$("#examples-btn").click(function(){
				$("html, body").animate({
					scrollTop: $("#practice-btns-container").offset().top
				}, "slow")
			});

			$("#vert-examples-btn").click(function(){
				$("html, body").animate({
					scrollTop: $("#practice-btns-container").offset().top
				}, "slow")
			});

			$("#go-up-btn").click(function(){
				$("html, body").animate({
					scrollTop: 0
				}, "slow")
			});

		})


		var horizontalSearchBtn = document.getElementById("horizontal-search-btn"),
				verticalSearchBtn = document.getElementById("vertical-search-btn"),
				searchSection = document.getElementById("search-section"),
				searchBar = document.getElementById("search-bar"),
				closeSearchBtn = document.getElementById("close-search-btn"),
				caseList = document.getElementById("search-case-list"),
				mainContent = document.getElementById("main-content");

		horizontalSearchBtn.addEventListener("click", openSearchContainer);
		verticalSearchBtn.addEventListener("click", openSearchContainer);
		searchBar.addEventListener("input", showList);
		closeSearchBtn.addEventListener("click", closeSearchContainer);

		function openSearchContainer(){
			if(!searchSection.classList.contains("active-search")){
				searchSection.classList.toggle("active-search");
				mainContent.style.marginTop = "40px";
				searchBar.focus();
			} else {
				searchSection.classList.remove("active-search");
				caseList.classList.remove("show");
				searchBar.value = "";
				mainContent.style.marginTop = "0";
			}
		}

		function closeSearchContainer(){
			if(searchSection.classList.contains("active-search")){
				searchSection.classList.remove("active-search");
				caseList.classList.remove("show");
				searchBar.value  = "";
				mainContent.style.marginTop = "0";
			}
		}

		var searchClosers = [searchSection, mainContent];
		for(let i = 0; i < searchClosers.length; i++){
			searchClosers[i].addEventListener("click", function(e){
				if(!e.target.matches("#search-bar")){
					closeSearchContainer();
				}
			})
		}

		function showList() {
			if (searchBar.value.length > 0){
				caseList.classList.add('show');
				showAnchors();
			} else {
				caseList.classList.remove('show');
			}
		}

		function showAnchors(){
			let inputValue = searchBar.value.toUpperCase();
			let anchors = caseList.getElementsByTagName('a');
			let newAnchors = document.createElement("a");
			for (var i = 0; i < anchors.length; i++){
				let a = anchors[i];
				if (a.textContent.toUpperCase().indexOf(inputValue) > -1){
					anchors[i].style.display = "";
				} else {
					anchors[i].style.display = "none";
				}
			}
		}
		/*--- Toggle Hamburger Menu ---*/
    var clickBox = document.getElementById("click-box"),
				burgerIcon = document.getElementById("icon"),
				verticalNav = document.getElementById("vertical-nav");
		clickBox.addEventListener("click", function(e){
			if(e.target == clickBox){
				verticalNav.classList.toggle("show-vertical-nav");
				burgerIcon.classList.toggle("active");
			}
		});

		window.onclick = function(e){
			if(!e.target.matches("#click-box")){
				if(icon.classList.contains("active")){
					icon.classList.remove("active");
					verticalNav.classList.remove("show-vertical-nav");
				}
			}
		}

		/*--- End of Hamburger Menu ---*/
		/*--- Close Modals ---*/
		var closeModalBtns = document.querySelectorAll(".close-modal-btn");
		closeModalBtns.forEach(function(btn){
		  btn.addEventListener("click", function(){
		    var $modalParent = $(this).parents(".modal");
		    $modalParent.click();
		  })
		})

		/*--- Toggle Img Caption Show/Hide ---*/
		var imgCaptions = document.getElementsByClassName("img-caption");
		var thirdPageImgs = document.querySelectorAll(".third-page-pics > img");
		thirdPageImgs.forEach(function(image){
		  image.addEventListener("click", function(e){
		    var imgCaption = this.nextElementSibling;
		    if(!e.target.matches(".img-caption")){
		      imgCaption.classList.toggle("hide-caption");
		    }
		  })
		})

		/*--- Open and Close Accordion Panels ---*/
		var accordions = document.getElementsByClassName("accordion");
		var innerPanel;
		var i;
		for (i = 0; i < accordions.length; i++) {
		  	accordions[i].onclick = function(e) {
		    	this.classList.toggle("active");
		    	innerPanel = this.nextElementSibling;
		        if (innerPanel.style.maxHeight){
		            innerPanel.style.maxHeight = null;
		        } else {
		            innerPanel.style.maxHeight = innerPanel.scrollHeight + "px";
		        }
		    }
		}

		/*--- Close all accordion panels on "X" btn click or Modal Window click ---*/
		var modalCloseBtns = document.getElementsByClassName("glyphicon-remove");
		var modalPanels = document.getElementsByClassName("modal-panel");
		for(let i = 0; i < modalCloseBtns.length; i++){
			modalCloseBtns[i].addEventListener("click", function(){
				for(let i = 0; i < modalPanels.length; i++){
					if(modalPanels[i].style.maxHeight != null){
						modalPanels[i].style.maxHeight = null;
					}
				}
				var $modalContent = $(this).parents(".modal-content");
				var $accordions = $modalContent.find(".accordion");
				$accordions.removeClass("active");
			})
		}
		$(".example-modal").click(function(e){
		  var $closeBtn = $(this).find(".glyphicon-remove");
		  if(e.target.matches(".example-modal")){
		    $closeBtn.click();
		  }
		})
    /*--- End of Closing all Accordion and Panels ---*/

		/*--- Calculating Displacement, Final P, and Initial P ---*/
		var solveForBtns = document.getElementsByClassName("solve-btns"),
			solveForDisplacement = document.getElementById("solve-displacement-radio-btn"),
			solveForFinalPosition = document.getElementById("solve-final-p-radio-btn"),
			solveForInitialPosition = document.getElementById("solve-initial-p-radio-btn");

		var firstUnits = document.getElementsByClassName("first-units"),
			meterBtn = document.getElementById("meter-btn"),
			mileBtn = document.getElementById("mile-btn"),
			feetBtn = document.getElementById("feet-btn"),
			kilometerBtn = document.getElementById("kilometer-btn"),
			chosenUnit;

		var numInputFields = document.getElementsByClassName("num-input-field"),
			displacementField = document.getElementById("displacement-field"),
			finalPositionField = document.getElementById("final-p-field"),
			initialPositionField = document.getElementById("initial-p-field"),
			sigFigsField = document.getElementById("sig-figs-field"),
			calculateBtn = document.getElementById("calculate-btn"),
			clearBtn = document.getElementById("clear-btn");

			/*--- Bind Solve Selector Options with Solve For Radio Btns ---*/
			function resetTrigAndUnitSelectors(){
				currentSlideIndex = 0;
				switchToSlide();
			}

		calculateBtn.addEventListener("click", calculateFunction);
		clearBtn.addEventListener("click", clearFunction);

		for(let i = 0; i < solveForBtns.length; i++){
			solveForBtns[i].addEventListener("click", function(){
				currentSlideIndex = i;
				switchToSlide();
			});
			solveForBtns[i].addEventListener("click", solveForFunction);
		}

		for(let i = 0; i < firstUnits.length; i++){
			firstUnits[i].addEventListener("click", function(){
				chosenUnit = firstUnits[i].getAttribute("units");
			});
		}

		function solveForFunction(){

			function resetInputFields(){
				for(let i = 0; i < numInputFields.length; i++){
					numInputFields[i].value = "";
					if(numInputFields[i].disabled){
						numInputFields[i].disabled = false;
					}
					if(numInputFields[i].type = "text"){
						numInputFields[i].type = "number";
					}
					if(numInputFields[i].classList.contains("yellow-outline")){
						numInputFields[i].classList.remove("yellow-outline");
					}
				}
			}
			resetInputFields();

			//resets input field placeholders every time a solve btn is clicked
			function resetPlaceholders(){
				displacementField.placeholder = "Displacement";
				finalPositionField.placeholder = "Final Position";
				initialPositionField.placeholder = "Initial Position";
			}
			resetPlaceholders();

			switch(true){
				case (solveForDisplacement.checked):
					meterBtn.checked = true;
					displacementField.placeholder = "Calculating Disp..";
					displacementField.disabled = true;
					displacementField.classList.add("yellow-outline");
				break;
				case (solveForFinalPosition.checked):
					meterBtn.checked = true;
					finalPositionField.placeholder = "Calculating Final P..";
					finalPositionField.disabled = true;
					finalPositionField.classList.add("yellow-outline");
				break;
				case (solveForInitialPosition.checked):
					meterBtn.checked = true;
					initialPositionField.placeholder = "Calculating Initial P..";
					initialPositionField.disabled = true;
					initialPositionField.classList.add("yellow-outline");
				break;
			}
		}

		function calculateFunction(){
			switch(true){
				case (solveForDisplacement.checked):
					function setTempDispValue(){
						var tempDispValue = finalPositionField.value - initialPositionField.value;
						function setFinalDispValue(){
							displacementField.type = "text";
							if(tempDispValue.toString().length > 9){
								displacementField.value = tempDispValue.toPrecision(sigFigsField.value || 7) + " " + (chosenUnit || "m");
							} else {
								displacementField.value = tempDispValue.toPrecision(sigFigsField.value || tempDispValue.toString().length) + " " + (chosenUnit || "m");
							}
						}
						return setFinalDispValue();
					}
					setTempDispValue();
				break;
				case (solveForFinalPosition.checked):
					function setTempFinalPositionValue(){
						var tempFinalValue = parseFloat(displacementField.value) + parseFloat(initialPositionField.value);
						function setFinalFinalPositionValue(){
							finalPositionField.type = "text";
							if(tempFinalValue.toString().length > 9){
								finalPositionField.value = tempFinalValue.toPrecision(sigFigsField.value || 7) + " " + (chosenUnit || "m");
							} else {
								finalPositionField.value = tempFinalValue.toPrecision(sigFigsField.value || tempFinalValue.toString().length) + " " + (chosenUnit || "m");
							}
						}
						return setFinalFinalPositionValue();
					}
					setTempFinalPositionValue();
				break;
				case (solveForInitialPosition.checked):
					function setTempInitialPositionValue(){
						var tempInitialValue = finalPositionField.value - displacementField.value;
						function setFinalInitialPositionValue(){
							initialPositionField.type = "text";
							if(tempInitialValue.toString().length > 9){
								initialPositionField.value = tempInitialValue.toPrecision(sigFigsField.value || 7) + " " + (chosenUnit || "m");
							} else {
								initialPositionField.value = tempInitialValue.toPrecision(sigFigsField.value || tempInitialValue.toString().length) + " " + (chosenUnit || "m");
							}
						}
						return setFinalInitialPositionValue();

					}
					setTempInitialPositionValue();
				break;
				default:
					alert("Choose a variable to solve for");
			}
		}

		function clearFunction(){
			resetTrigAndUnitSelectors();
			resetPlaceholders();
			uncheckRadioBTns();
			resetInputFields();
			resetSlide();
			function resetPlaceholders(){
				displacementField.placeholder = "Displacement";
				finalPositionField.placeholder = "Final Position";
				initialPositionField.placeholder = "Initial Position";
			}
			function uncheckRadioBTns(){
				for(let i = 0; i < solveForBtns.length; i++){
					if(solveForBtns[i].checked){
						solveForBtns[i].checked = false;
					}
				}
				for(let i = 0; i < firstUnits.length; i++){
					if(firstUnits[i].checked){
						firstUnits[i].checked = false;
					}
				}
			}
			function resetInputFields(){
				for(let i = 0; i < numInputFields.length; i++){
					numInputFields[i].value = ""
					if(numInputFields[i].disabled){
						numInputFields[i].disabled = false;
					}
					if(numInputFields[i].type = "text"){
						numInputFields[i].type = "number";
					}
					if(numInputFields[i].classList.contains("yellow-outline")){
						numInputFields[i].classList.remove("yellow-outline");
					}
				}
			}
			function resetSlide(){
				currentSlideIndex = 0;
				switchToSlide();
			}
		}
		/*--- End of Calculations ---*/


		/*--- Move Equation Slides ---*/
		var innerImageContainer = document.getElementById("inner-image-container"),
			slides = document.getElementsByClassName("slide"),
			currentSlideIndex = 0,
			width = 100,
			prevBtn = document.getElementById("prev-slide-btn"),
			nextBtn = document.getElementById("next-slide-btn"),
			slideBars = document.getElementsByClassName("slide-bar");

		prevBtn.addEventListener("click", goToPrevSlide);
		nextBtn.addEventListener("click", goToNextSlide);

		for(let i = 0; i < slideBars.length; i++){
			slideBars[i].addEventListener("click", function(){
				currentSlideIndex = i;
				switchToSlide();
			});
		}

		function switchToSlide(){
			for(let i = 0; i < slideBars.length; i++){
				if(slideBars[i].classList.contains("active-indicator")){
					slideBars[i].classList.remove("active-indicator");
				}
			}
			innerImageContainer.style.left = -width * currentSlideIndex + "%";
			slideBars[currentSlideIndex].classList.add("active-indicator");
		}
		switchToSlide();

		function goToPrevSlide(){
			currentSlideIndex--;
			if(currentSlideIndex < 0){
				currentSlideIndex = slides.length - 1;
			}
			switchToSlide();
		}

		function goToNextSlide(){
			currentSlideIndex++;
			if(currentSlideIndex >= slides.length){
				currentSlideIndex = 0;
			}
			switchToSlide();
		}

		/*--- Conversion Table JS ---*/





		window.addEventListener("resize", function(){
			if(window.innerWidth < 992){
				$(window).scroll(function(){
					if($(window).scrollTop() > 600){
						$("#go-up-container").css("opacity", "1");
					} else {
						$("#go-up-container").css("opacity", "0");
					}
				})
			}
		})

		function checkWindowWidth(){
			var windowWidth = window.innerWidth
				|| document.documentElement.clientWidth
				|| document.body.clientWidth;
			
		}

		window.addEventListener("load", function(){
			if(window.innerWidth < 992){
				$(window).scroll(function(){
					if($(window).scrollTop() > 600){
						$("#go-up-container").css("opacity", "1");
					} else {
						$("#go-up-container").css("opacity", "0");
					}
				})
			}
		})
