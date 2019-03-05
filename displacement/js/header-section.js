$(function(){

  const $htmlBody = $("html, body");
  const $navList = $("header.topic-header > nav > ul");
  const $headerBurger = $("#header-burger");
  const $headerExBtn = $("#header-ex-btn");
  const $headerCalcBtn = $("#header-calc-btn");
  const $headerConvertBtn = $("#header-convert-btn");
  const $headerSearchBtn = $("#header-search-btn");
  const $headerSearchWrap = $("#header-search-wrap");
  const $searchField = $headerSearchWrap.find("input");
  const $closeSearchBtn = $headerSearchWrap.find("> button");
  const $searchListWrap = $("#search-list-wrap");
  const $searchListItems = $("#search-case-list a");
  let searchListDisplayed = false;

  const toggleBurgerAndNav = () => {
    $headerBurger.toggleClass('active');
    $navList.toggleClass('active');
  };

  const toggleSearchWrap = () => {
    $headerSearchWrap.toggleClass('active');
    if(searchListDisplayed){
      $searchListWrap.css("display", "none");
    }
  };

  const displaySearchResults = e => {
    if(!searchListDisplayed){
      searchListDisplayed = true;
      $searchListWrap.css("display", "block");
    }
    const val = e.target.value.toLowerCase();
    $searchListItems.each((index, result) => {
      if($(result).text().indexOf(val) > -1 && val.length > 0){
        $(result).addClass("active");
      } else {
        $(result).removeClass("active");
      }
    });
  };

  const scrollToSection = section => {
    $htmlBody.animate({
      scrollTop: $(section).offset().top
    }, "slow")
  };

  const toggleCalcModal = () => {

  };

  $headerExBtn.click(scrollToSection.bind(null, "#practice-btns-container"));
  $headerConvertBtn.click(scrollToSection.bind(null, "#conversion-container"));
  $headerCalcBtn.click(toggleCalcModal);
  $headerBurger.click(toggleBurgerAndNav);
  $headerSearchBtn.click(toggleSearchWrap);
  $closeSearchBtn.click(toggleSearchWrap);
  $searchField.keyup(displaySearchResults);
});