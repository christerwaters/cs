$(document).ready(function(){
    $(".entry-wrap").each(function(){
      var classes = ["sm","lg"];
      $(this).addClass(classes[~~(Math.random()*classes.length)]);
      var classes = ["pull-sm","push-sm","pull-md","push-md","pull-lg","push-lg","push-right","centered"];
      $(this).addClass(classes[~~(Math.random()*classes.length)]);
    });
});

$(window).scroll(function() {
  var scroller = $(window).scrollTop();
  var vhscroller = scroller*2;
  var rotscroller = scroller*.4;
  $('.fruits').css({ transform: 'translate(0, -' + vhscroller + 'px)'});
  $('.fruit-left img').css({ transform: 'rotate(' + rotscroller + 'deg)'});
  $('.fruit-right img').css({ transform: 'rotate(-' + rotscroller + 'deg)'});
  $('#kontakt').css({ transform: 'translate(-' + vhscroller + 'px, 0)'});
});

$(window).bind('scroll', function(){
    var offset = $(document).scrollTop();
    if( offset<=50 ){
    } else {
      $(".featured-media").addClass('scrolled50');
    }
    if(offset === 0) {
      setTimeout(function(){
        $(".featured-media").removeClass('scrolled50');
      }, 100);
    }
});


$('.tilted').tilt({
  perspective: 1500,
  maxTilt: 10
});

$(document).ready(function() {
  setTimeout(function(){
    $(".wrap-loader").removeClass( "unloaded" );
  }, 500);
  $('img').each(function() {
    $(this).attr("src", $(this).attr("data-image-full"));
  });

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


$('.current a.page-anchor').click(function(){
  event.preventDefault(); // make it not reload the page
});
