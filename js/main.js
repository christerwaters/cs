const players = Array.from(document.querySelectorAll("video")).map(p => new Plyr(p));


$( ".burger" ).click(function() {
  $( ".menu" ).toggleClass("open");
  $( "body" ).toggleClass("menu-open");
});

$("a").hover(function() {
  $("this:after").css("background-image",$("this:after").css("background-image").replace(".jpg","jpg"));
});
