<div class="flipper-wrap">
  <p class="flipper-text">UNDER UTVIKLING</p>
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
body.firsttimer *{
  opacity:0;
  overflow: hidden;
  left: 0;
  top: 0;
}
.firsttimer .flipper-wrap {
  top:0;
  left:0;
  width: 100vw;
  display:block;
  height: 100vh;
  position: fixed;
  z-index: 2000;
  background: #fff;
  overflow: hidden;
}
.flipper {
  display: block;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 50vw;
  margin-left: 25vw;
  max-height: 80vh;
  background-image:url(https://citrusstudio.no/wp-content/themes/cs/media/flipper/016.jpg);
  height: 50vw;
  background-size: contain;
  background-repeat: no-repeat;
  animation: flipp 2s infinite step-end;
  background-position: center center;
}

.flipper-text {
  z-index: -1;
  transform: translate(-50%, -50%);
  font-size: 2.4vw;
  line-height: 2.4vw;
  width: 15.5vw;
  text-align: center;
  font-weight: bold;
  text-transform: uppercase;
  position: absolute;
  display: block;
  color: black;
  left: 40vw;
  top: 42%;
}

  @keyframes flipp {
    <?php
    $imgarray = array(
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/001-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/002-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/003-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/004-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/005-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/006-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/007-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/008-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/009-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/010-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/011-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/012-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/013-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/014-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/015-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/016-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/017-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/018-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/019-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/020-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/021-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/022-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/023-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/024-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/025-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/026-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/027-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/028-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/029-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/030-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/031-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/032-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/033-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/034-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/035-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/036-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/037-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/038-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/039-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/040-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/041-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/042-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/043-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/044-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/045-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/046-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/047-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/048-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/049-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/050-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/051-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/052-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/053-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/054-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/055-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/056-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/057-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/058-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/059-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/060-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/061-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/062-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/063-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/064-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/065-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/066-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/067-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/068-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/069-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/070-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/071-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/072-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/073-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/074-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/075-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/076-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/077-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/078-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/079-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/080-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/081-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/082-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/083-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/084-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/085-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/086-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/087-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/088-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/089-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/090-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/091-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/092-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/093-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/094-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/095-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/096-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/097-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/098-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/099-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/100-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/101-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/102-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/103-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/104-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/105-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/106-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/107-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/108-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/109-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/110-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/111-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/112-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/113-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/114-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/115-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/116-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/117-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/118-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/119-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/120-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/121-min.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/122-min.jpg"
      );
    $array=array_rand($imgarray,21);

   ?>
    0%{background-image:url(<?php echo $imgarray[$array[1]];?>);}
    5%{background-image:url(<?php echo $imgarray[$array[2]];?>);}
    10%{background-image:url(<?php echo $imgarray[$array[3]];?>);}
    15%{background-image:url(<?php echo $imgarray[$array[4]];?>);}
    20%{background-image:url(<?php echo $imgarray[$array[5]];?>);}
    25%{background-image:url(<?php echo $imgarray[$array[6]];?>);}
    30%{background-image:url(<?php echo $imgarray[$array[7]];?>);}
    35%{background-image:url(<?php echo $imgarray[$array[8]];?>);}
    40%{background-image:url(<?php echo $imgarray[$array[9]];?>);}
    45%{background-image:url(<?php echo $imgarray[$array[10]];?>);}
    50%{background-image:url(<?php echo $imgarray[$array[11]];?>);}
    55%{background-image:url(<?php echo $imgarray[$array[12]];?>);}
    60%{background-image:url(<?php echo $imgarray[$array[13]];?>);}
    65%{background-image:url(<?php echo $imgarray[$array[14]];?>);}
    70%{background-image:url(<?php echo $imgarray[$array[15]];?>);}
    75%{background-image:url(<?php echo $imgarray[$array[16]];?>);}
    80%{background-image:url(<?php echo $imgarray[$array[17]];?>);}
    85%{background-image:url(<?php echo $imgarray[$array[18]];?>);}
    90%{background-image:url(<?php echo $imgarray[$array[19]];?>);}
    95%{background-image:url(<?php echo $imgarray[$array[20]];?>);}
    100%{background-image:url(<?php echo $imgarray[$array[21]];?>);}
  );}
</style>
