$(function(){
	const $htmlBody = $("html, body");
	const $header = $("header");
	const $searchWrap = $("#search-wrap");
	const $searchBtn = $("#search-btn");
	const $searchInput = $("#search-wrap input");
	const $closeSearchBtn = $("#close-search-btn");
	const $getStartedBtn = $("#get-started-btn");
	const $topicsWrap = $("#topics-wrap");
	const $conversionsBtn = $('#conversions-btn');
	const $conversionWrap = $('#conversion-wrap');
	const $calcBtn = $('#calculator-btn');
	const $calcWrap = $('#calculator-wrap');
	const $suggestBtn = $('#suggest-btn');
	const $suggestWrap = $('#suggest-wrap');
	const $topicsBtn = $("#topics-btn");
	const $goUpBtn = $('#go-up-btn');
	let headerBg = 'transparent';
	let $showGoUpBtn = false;

	$(window).on("beforeunload", () => window.scrollTo(0,0));
	$(window).on("scroll", toggleHeaderHandler);
	$(window).on('scroll', toggleUpBtnHandler);

	function toggleHeaderHandler(){
		const $windowScrollTop = $(window).scrollTop();
		if(headerBg === 'transparent' && $windowScrollTop > 0){
			$header.removeClass("bg-transparent").addClass("bg-black");
			headerBg = 'black';
		} else if (headerBg === 'black' && $windowScrollTop === 0){
			$header.removeClass("bg-black").addClass("bg-transparent");
			headerBg = 'transparent';
		}
	}

	$searchBtn.click(function(){
		$searchWrap.css("top", "0px");
		$searchInput.focus();
	});
	$closeSearchBtn.click(function(){
		$searchWrap.css("top", "-56px");
		$searchInput.blur();
	});
	$goUpBtn.click(function(){
		window.scroll({
      top: 0,
      left: 0,
      behavior: 'smooth'
		});
		
	});
	$getStartedBtn.click(scrollHtmlBodyHandler.bind(null, $topicsWrap));
	$topicsBtn.click(scrollHtmlBodyHandler.bind(null, $topicsWrap));
	$conversionsBtn.click(scrollHtmlBodyHandler.bind(null, $conversionWrap));
	$calcBtn.click(scrollHtmlBodyHandler.bind(null, $calcWrap));
	$suggestBtn.click(scrollHtmlBodyHandler.bind(null, $suggestWrap));

	function scrollHtmlBodyHandler(section){
		$htmlBody.animate({
			scrollTop: section.offset().top - 40
		}, "slow");
	}
	
	function toggleUpBtnHandler(){
		const $windowScrollTop = $(window).scrollTop();
		if($windowScrollTop > 700 && $showGoUpBtn === false){
			$goUpBtn.addClass("toggle-results-list");
			$showGoUpBtn = true;
		} else if($showGoUpBtn && $windowScrollTop < 700) {
			$goUpBtn.removeClass("toggle-results-list");
			$showGoUpBtn = false;
		}
	}

});