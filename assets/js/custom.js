
$(window).on('resize load', function() {
  if ($(window).width() <= 991.98) {
    $("#menu-sub-nav").removeClass("justify-content-end");
  }
  else {
    $("#menu-sub-nav").addClass("justify-content-end");
  }
});
