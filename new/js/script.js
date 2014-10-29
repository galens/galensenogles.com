$(function() {
  /* set initial handlers */
  $("#window_about_this")
  .draggable({ /*containment:"#wrapper", scroll:false*/ })
  .resizable();

  $("#window_system_folder")
  .draggable({ /*containment:"#wrapper", scroll:false*/ })
  .resizable();

  /* set click handlers */
  $('#window_about_this').mousedown(function() {
    $('#window_system_folder').css('z-index', 10);
    $(this).css('z-index', 11);
  });

  $('#window_system_folder').mousedown(function() {
    $('#window_about_this').css('z-index', 10);
    $(this).css('z-index', 11);
  });

  // prevent menu from flying off the screen
  $('.right li').mouseenter(function() {
    if ($(this).children('ul').offset().left + 70 > $(window).width()) {
      $(this).children('ul').css('right', 21);
    } else if($(this).children('ul').offset().left + 100 > $(window).width()) {
      $(this).children('ul').css('right', 61);
    }
  });
});