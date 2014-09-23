visibleBool = false

jQuery(document).ready(function($) {

  $("#search-box").hide();
  $("#search-button").click(function(){
    if(visibleBool) {
      $("#search-box").slideUp();
      visibleBool = false;
    } else {
      $("#search-box").slideDown();
      visibleBool = true;
    }
  });
});
