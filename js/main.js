const players = Array.from(document.querySelectorAll("video")).map(p => new Plyr(p));


$( ".burger" ).click(function() {
  $( ".menu" ).toggleClass("open");
  $( "body" ).toggleClass("menu-open");
});



$('.blocks-gallery-grid').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3
});
