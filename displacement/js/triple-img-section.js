$(function(){

  const $tripleImgCaption = $(".img-caption");
  const $tripleImg = $(".triple-image img");

  $tripleImg.each((index, img) => {
    $(img).click(function(){
      $tripleImgCaption.eq(index).toggleClass('hide-caption');
    });
  });

});