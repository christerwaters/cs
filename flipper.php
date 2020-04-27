<div class="flipper-wrap">
  <p class="flipper-text">Citrus Studio</p>
  <div class="flipper"></div>
</div>


<style>
.firsttimer .menu,
.firsttimer .logo,
.firsttimer .header,
.firsttimer .dir,
.firsttimer .wp-block-columns{
  display:none;
}
.firsttimer * {
  cursor: none;
}

.visited .flipper-wrap,
.visited .flipper-wrap * {
  display: none;
}

.firsttimer .flipper-wrap {
  top:0;
  left:0;
  width: 100%;
  height: 100%;
  position: fixed;
  z-index: 2000;
  background: #fff;
  overflow: hidden;
}

.flipper {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 50vw;
  margin-left: 25vw;
  max-height: 80vh;
  height: 50vw;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
}

.flipper-text {
  z-index: -1;
  transform: translate(-50%, -50%);
  font-size: 2.4vw;
  line-height: 2.4vw;
  width: 15.5vw;
  text-align: center;
  position: absolute;
  display: block;
  color: black;
  left: 40vw;
  top: 42%;
}
</style>
<?php include("flipper_b64.php");?>
<script>
var arr = [b64_001, b64_002, b64_003, b64_004, b64_005, b64_006, b64_007, b64_008, b64_009, b64_010];

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
           shuffle(arr);
           // run through the array forever
           (function recurse(counter) {
             // get the colour
             var color = arr[counter];
             // animate it
             $(".flipper").css("background-image", color);
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

</script>
