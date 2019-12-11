$( ".burger" ).click(function() {
  $( ".menu" ).toggleClass("open");
  $( "body" ).toggleClass("menu-open");
});
const players = Array.from(document.querySelectorAll(".js-player")).map(p => new Plyr(p));
