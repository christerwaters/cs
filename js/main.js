const players = Array.from(document.querySelectorAll("video")).map(p => new Plyr(p));


$( ".burger" ).click(function() {
  $( ".menu" ).toggleClass("open");
  $( "body" ).toggleClass("menu-open");
});

$(".logo").hover(function (){
  $(".dRip").addClass("dRipped");
  setTimeout(
  function()
  {
    $(".dRip").removeClass("dRipped");
  }, 5000);
});
