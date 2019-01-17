$(function(){

  const $preLoader = $('#pre-loader');
  const $imageOne = $('.load-image').eq(3);
  const $imageTwo = $('.load-image').eq(2);
  const $imageThree = $('.load-image').eq(1);
  const $imageFour = $('.load-image').eq(0);
	setTimeout(() =>{
		$imageOne.addClass('rotate-y');
	}, 400);
	setTimeout(() =>{
		$imageTwo.addClass('rotate-x');
	}, 800);
	setTimeout(() =>{
		$imageThree.addClass('rotate-y');
	}, 1200);
	setTimeout(() =>{
		$imageFour.addClass('rotate-x');
	}, 1600);
	setTimeout(() => {
		$preLoader.css('top', '-100vh');
	}, 2000);
	setTimeout(() => {
		$preLoader.css('display', 'none');
	}, 2500);
	
}());