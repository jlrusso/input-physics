$(function(){
  
  const $accordions = $(".accordion");
  const $closeExBtns = $(".close-ex-btn");

  $accordions.each((index, acc) => {
    $(acc).click(() => {
      const $panel = $(acc).next();
      if($panel.css("max-height") !== "0px"){
        $panel.css("max-height", 0);
      } else {
        $panel.css("max-height", $panel.prop('scrollHeight') + "px");
      }
    });
  });

  $closeExBtns.each((index, btn) => {
    $(btn).click(() => {
      $(btn).parents(".modal-content").find('.modal-panel').each((index, panel) => {
        $(panel).css('max-height', 0);
      });
    });
  });
  
});