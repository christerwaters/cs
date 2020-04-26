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
    setCookie("visited", "yes", 365);
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
var arr = ['Apple', 'Banana'];


shuffle(arr);
// run through the array forever
(function recurse(counter) {
  // get the colour
  var color = arr[counter];
  // animate it
  $(".flipper").css("background-image", "url(/" + color + ")");
  delete arr[counter];
  // add the value at the end of the array
  arr.push(color);
  // run it again for the next number
  setTimeout(function () {
    recurse(counter + 1);
  }, 200);
  // start it for the first number.
})(0);

function shuffle(array) {
  var currentIndex = array.length,
    temporaryValue,
    randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {
    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}
