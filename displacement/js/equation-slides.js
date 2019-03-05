$(function(){
  const $imagesContainer = $('#inner-image-container');
  const $slides = $imagesContainer.find('.slide');
  const $prevBtn = $('#prev-slide-btn');
  const $nextBtn = $('#next-slide-btn');
  const $slideBars = $('.slide-bar');
  let currentSlideIndex = 0;
  const slideAmount = 100;

  const switchToSlide = () => {
    $slideBars.each((index, btn) => {
      if($(btn).hasClass('active-indicator')){
        $(btn).removeClass('active-indicator');
      }
    });
    $imagesContainer.css('left', `${-slideAmount * currentSlideIndex}%`);
    $slideBars.eq(currentSlideIndex).addClass('active-indicator');
  };
  switchToSlide();

  const goToPrevSlide = () => {
    currentSlideIndex--;
    if(currentSlideIndex < 0){
      currentSlideIndex = $slides.length - 1;
    }
    switchToSlide();
  };

  const goToNextSlide = () => {
    currentSlideIndex++;
    if(currentSlideIndex >= $slides.length){
      currentSlideIndex = 0;
    }
    switchToSlide();
  }

  $slideBars.each((index, btn) => {
    $(btn).click(function(){
      currentSlideIndex = index;
      switchToSlide(index);
    });
  });
  $prevBtn.click(goToPrevSlide);
  $nextBtn.click(goToNextSlide);

});