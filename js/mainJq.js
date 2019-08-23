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
