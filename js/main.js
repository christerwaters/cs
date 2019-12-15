const players = Array.from(document.querySelectorAll("video")).map(p => new Plyr(p));


$( ".burger" ).click(function() {
  $( ".menu" ).toggleClass("open");
  $( "body" ).toggleClass("menu-open");
});


$(document).ready(function () {
  $('a').hover(function () {
    var bg = $(this).css('background-image').replace('jpg','gif');
    var bg = $(this).css('background-image', bg);
  }, function () {
    var bg = $(this).css('background-image').replace('gif','jpg');
    var bg = $(this).css('background-image', bg);
  });
});
