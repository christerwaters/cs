const players = Array.from(document.querySelectorAll("video")).map(p => new Plyr(p));


$( ".burger" ).click(function() {
  $( ".menu" ).toggleClass("open");
  $( "body" ).toggleClass("menu-open");
});


var accordions = document.getElementsByClassName("accordion");

for (var i = 0; i < accordions.length; i++) {
  accordions[i].onclick = function() {
    this.classList.toggle('is-open');

    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      // accordion is currently open, so close it
      content.style.maxHeight = null;
    } else {
      // accordion is currently closed, so open it
      content.style.maxHeight = content.scrollHeight + "px";
    }
  }
}


$(document).ready(function(){
  $("a").hover(function(){
    var classes = ["abg01", "abg02", "abg03"];
    var curclass = classes[~~(Math.random()*classes.length)];
    $(this).addClass(curclass);  //Add the active class to the area is hovered
  }, function () {
      $(this).removeClass("abg01");
      $(this).removeClass("abg02");
      $(this).removeClass("abg03");
  });
});
var randomize = $(".tilfeldig");

for(var i = 0; i < randomize.length; i++){
    var target = Math.floor(Math.random() * randomize.length -1) + 1;
    var target2 = Math.floor(Math.random() * randomize.length -1) +1;
    randomize.eq(target).before(randomize.eq(target2));
}

function setCookie(c_name,value,exdays){var exdate=new Date();exdate.setDate(exdate.getDate() + exdays);var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());document.cookie=c_name + "=" + c_value;}

function getCookie(c_name){var c_value = document.cookie;var c_start = c_value.indexOf(" " + c_name + "=");if (c_start == -1){c_start = c_value.indexOf(c_name + "=");}if (c_start == -1){c_value = null;}else{c_start = c_value.indexOf("=", c_start) + 1;var c_end = c_value.indexOf(";", c_start);if (c_end == -1){c_end = c_value.length;}c_value = unescape(c_value.substring(c_start,c_end));}return c_value;}

checkSession();

function checkSession(){
  var c = getCookie("visited");
  var body = document.body;
  if (c === "yes") {
    body.classList.add("visited");
  } else {
    setCookie("visited", "yes", 10);
    body.classList.add("firsttimer");
  }
}


$(".flipper-wrap").click(function(){
  $("body").removeClass("firsttimer");
  $("body").addClass("visited");
});

var timeoutid = 0;
$(document).on("mousemove", function (e) {
  var xPos = e.pageX;
  var yPos = e.pageY;
  // console.log(xPos, yPos);
  $(".flipper-text").css({
   top: yPos,
   left: xPos
  });
});

var $document = $(document),
    $element = $('#some-element'),
    className = 'hasScrolled';

$document.scroll(function() {
  if ($document.scrollTop() >= 50) {
    // user scrolled 50 pixels or more;
    // do stuff
    $element.addClass(className);
  } else {
    $element.removeClass(className);
  }
});
$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
     $(".footer").addClass("atbottom");
  } else {
     $(".footer").removeClass("atbottom");
   }
});


$(".woocommerce-product-gallery__image a").click(function () {
  var addressValue = $(this).attr("href");
  event.preventDefault();
  $(this).children("img").toggleClass("active");
  $("body").toggleClass("wcimgopen");
});
