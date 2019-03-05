$(window).on('beforeunload', function() {
    $(window).scrollTop(0);
});

$(function(){
  const $window = $(window);
  const $htmlBody = $("html, body");
  const $goUpContainer = $("#go-up-container");

  $goUpContainer.click(function(){
    $htmlBody.animate({
      scrollTop: 0
    }, "slow")
  });

  $window.on('resize', function(){
    if($window.innerWidth() < 992){
      $window.scroll(function(){
        if($window.scrollTop() > 600){
          $goUpContainer.css("opacity", "1");
        } else {
          $goUpContainer.css("opacity", "0");
        }
      });
    }
  });

  $window.on('load', function(){
    if($window.innerWidth() < 992){
      $window.scroll(function(){
        if($window.scrollTop() > 600){
          $goUpContainer.css("opacity", "1");
        } else {
          $goUpContainer.css("opacity", "0");
        }
      });
    }
  });
});