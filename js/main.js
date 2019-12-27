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

$(document).on('click', '.s-previous', function() {

  $([document.documentElement, document.body]).animate({
      scrollTop: $(this).closest('.slid').prev().offset().top
  }, 200);

});
$(document).on('click', '.s-next', function() {

  $([document.documentElement, document.body]).animate({
      scrollTop: $(this).closest('.slid').next().offset().top
  }, 200);

});

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
  $(".wp-block-video").addClass("slid");
  $(".wp-block-image").addClass("slid");
  $(".slid").append("<div class='s-next'></div>");
  $(".slid").prepend("<div class='s-previous'></div>");
});
var randomize = $(".tilfeldig");

for(var i = 0; i < randomize.length; i++){
    var target = Math.floor(Math.random() * randomize.length -1) + 1;
    var target2 = Math.floor(Math.random() * randomize.length -1) +1;
    randomize.eq(target).before(randomize.eq(target2));
}
