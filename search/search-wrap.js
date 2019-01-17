(function(){
  const $searchBar = $('#search-wrap input');
  const $caseList = $('#search-case-list');
  const $anchors = $caseList.find('a');
  const $closeSearchBtn = $('#close-search-btn');
  
  $closeSearchBtn.click(function(){
    $searchBar.val('');
    $searchBar.blur();
    $caseList.removeClass('toggle-results-list');
  });
  $searchBar.on('input propertychange', showAnchorsWrap);

  function showAnchorsWrap(){
    if ($searchBar.val().length > 0){
      $caseList.addClass('toggle-results-list');
      showSearchResults();
    } else {
      $caseList.removeClass('toggle-results-list');
    }
  }

  function showSearchResults(){
    const $searchVal = $searchBar.val().toUpperCase();
    $anchors.each((index, element) => {
      const $anchorText = $(element).text();
      if($anchorText.toUpperCase().indexOf($searchVal) > -1){
        $(element).addClass('toggle-search-result');
      } else {
        $(element).removeClass('toggle-search-result');
      }
    });
  }
}());