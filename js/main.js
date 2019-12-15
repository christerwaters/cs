const players = Array.from(document.querySelectorAll("video")).map(p => new Plyr(p));


$( ".burger" ).click(function() {
  $( ".menu" ).toggleClass("open");
  $( "body" ).toggleClass("menu-open");
});

$("a").hover(function() {
  var bg = $(this).css('background-image');
  var bg = $(this).css('background-image',bg.replace(".jpg","gif");
});
