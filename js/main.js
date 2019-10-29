$(document).ready(function(){
    $(".entry-wrap").each(function(){
      var classes = ["sm","md"];
      $(this).addClass(classes[~~(Math.random()*classes.length)]);
      var classes = ["pull-sm","push-sm","pull-md","push-md","pull-lg","push-lg"];
      $(this).addClass(classes[~~(Math.random()*classes.length)]);
    });
});


$('.entry').tilt({
  perspective: 1500,
  scale: 1.05,
});

$(document).ready(function() {
  setTimeout(function(){
    $(".wrap-loader").removeClass( "unloaded" );
  }, 500);
});


$('.menu-hover-trigger').hover(
       function(){ $('.menu-overlay').addClass('menu-hover') },
       function(){ $('.menu-overlay').removeClass('menu-hover') }
);


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



var words = $(".line01").text().split(" ");
$(".line01").empty();
$.each(words, function(i, v) {
    $(".line01").append($("<span class='word'>").text(v));
});
var words = $(".line02").text().split(" ");
$(".line02").empty();
$.each(words, function(i, v) {
    $(".line02").append($("<span class='word'>").text(v));
});
var words = $(".line03").text().split(" ");
$(".line03").empty();
$.each(words, function(i, v) {
    $(".line03").append($("<span class='word'>").text(v));
});
var words = $(".line04").text().split(" ");
$(".line04").empty();
$.each(words, function(i, v) {
    $(".line04").append($("<span class='word'>").text(v));
});
var words = $(".line05").text().split(" ");
$(".line05").empty();
$.each(words, function(i, v) {
    $(".line05").append($("<span class='word'>").text(v));
});

$('.word').each(function (index) {
    var characters = $(this).text().split("");

    $this = $(this);
    $this.empty();
    $.each(characters, function (i, el) {
      $this.append("<span id='" + el + "'>" + el + "</span>");
    });

});
