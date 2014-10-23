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
});