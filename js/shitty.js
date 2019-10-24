$.fn.visible = function(partial) {

  var $t = $(this),
    $w = $(window),
    viewTop = $w.scrollTop(),
    viewBottom = viewTop + $w.height(),
    _top = $t.offset().top,
    _bottom = _top + $t.height(),
    compareTop = partial === true ? _bottom : _top,
    compareBottom = partial === true ? _top : _bottom;

  return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
}

$(document).ready(function(e) {
  checkVisible();
});
$(window).scroll(function(e) {
  checkVisible();
});
$(window).resize(function(e) {
  checkVisible();
});


function checkVisible() {
  $('.featured-media').each(function(i, k) {
    if ($(this).visible()) {
      $(k).addClass('visible');
    } else {
      $(k).removeClass('visible');
    }
  });
  $('h1').each(function(i, k) {
    if ($(this).visible()) {
      $(k).addClass('visible');
    } else {
      //$(k).removeClass('visible');
    }
  });
  $('h2').each(function(i, k) {
    if ($(this).visible()) {
      $(k).addClass('visible');
    } else {
      //$(k).removeClass('visible');
    }
  });
}
