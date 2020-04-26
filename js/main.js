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
var arr = ['001.jpg',
           '002.jpg',
           '003.jpg',
           '004.jpg',
           '005.jpg',
           '006.jpg',
           '007.jpg',
           '008.jpg',
           '009.jpg',
           '010.jpg',
           '011.jpg',
           '012.jpg',
           '013.jpg',
           '014.jpg',
           '015.jpg',
           '016.jpg',
           '017.jpg',
           '019.jpg',
           '020.jpg',
           '022.jpg',
           '023.jpg',
           '024.jpg',
           '025.jpg',
           '026.jpg',
           '027.jpg',
           '028.jpg',
           '029.jpg',
           '030.jpg',
           '031.jpg',
           '032.jpg',
           '033.jpg',
           '034.jpg',
           '035.jpg',
           '036.jpg',
           '037.jpg',
           '038.jpg',
           '039.jpg',
           '040.jpg',
           '041.jpg',
           '042.jpg',
           '043.jpg',
           '044.jpg',
           '045.jpg',
           '046.jpg',
           '047.jpg',
           '048.jpg',
           '049.jpg',
           '050.jpg',
           '051.jpg',
           '052.jpg',
           '053.jpg',
           '054.jpg',
           '055.jpg',
           '056.jpg',
           '057.jpg',
           '058.jpg',
           '059.jpg',
           '060.jpg',
           '061.jpg',
           '062.jpg',
           '063.jpg',
           '064.jpg',
           '065.jpg',
           '066.jpg',
           '067.jpg',
           '068.jpg',
           '069.jpg',
           '070.jpg',
           '071.jpg',
           '072.jpg',
           '073.jpg',
           '074.jpg',
           '076.jpg',
           '077.jpg',
           '078.jpg'];
shuffle(arr);
// run through the array forever
(function recurse(counter) {
  // get the colour
  var color = arr[counter];
  // animate it
  $(".flipper").css("background-image", "url(wp-content/themes/cs/media/flipper/" + color + ")");
  delete arr[counter];
  // add the value at the end of the array
  arr.push(color);
  // run it again for the next number
  setTimeout(function () {
    recurse(counter + 1);
  }, 50);
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
