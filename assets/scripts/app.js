// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(function() {
  var $sidebar   = $("#sidebar"),
      $window    = $(window),
      offset     = $sidebar.offset(),
      topPadding = 34;

  $window.scroll(function() {
    $sidebar.css({
        marginTop: $window.scrollTop() - offset.top + topPadding
    });
  });
});
