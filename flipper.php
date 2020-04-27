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
#flipper{display:none;}
#flipper.flipper {
  display: block;
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
  font-weight: bold;
  text-transform: uppercase;
  position: absolute;
  display: block;
  color: black;
  left: 40vw;
  top: 42%;
}

  .flipper {
    animation: flipp 1s infinite;
  }
  @keyframes flipp {
    <?php
    $imgarray = array(
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/001.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/002.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/003.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/004.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/005.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/006.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/007.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/008.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/009.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/010.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/011.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/012.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/013.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/014.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/015.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/016.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/017.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/018.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/019.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/020.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/021.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/022.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/023.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/024.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/025.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/026.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/027.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/028.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/029.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/030.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/031.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/032.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/033.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/034.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/035.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/036.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/037.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/038.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/039.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/040.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/041.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/042.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/043.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/044.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/045.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/046.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/047.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/048.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/049.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/050.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/051.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/052.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/053.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/054.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/055.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/056.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/057.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/058.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/059.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/060.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/061.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/062.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/063.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/064.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/065.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/066.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/067.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/068.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/069.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/070.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/071.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/072.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/073.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/074.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/075.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/076.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/077.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/078.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/079.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/080.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/081.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/082.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/083.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/084.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/085.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/086.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/087.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/088.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/089.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/090.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/091.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/092.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/093.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/094.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/095.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/096.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/097.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/098.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/099.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/100.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/101.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/102.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/103.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/104.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/105.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/106.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/107.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/108.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/109.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/110.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/111.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/112.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/113.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/114.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/115.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/116.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/117.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/118.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/119.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/120.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/121.jpg",
      "https://citrusstudio.no/wp-content/themes/cs/media/flipper/122.jpg"
      );
    $array=array_rand($array,41);
   ?>
    0%{background-image:url(<?php $arr = $array[1]; echo $imgarray($arr);?>);}
    2.5%{background-image:url(<?php $arr = $array[2]; echo $imgarray($arr);?>);}
    5%{background-image:url(<?php $arr = $array[3]; echo $imgarray($arr);?>);}
    7.5%{background-image:url(<?php $arr = $array[4]; echo $imgarray($arr);?>);}
    10%{background-image:url(<?php $arr = $array[5]; echo $imgarray($arr);?>);}
    12.5%{background-image:url(<?php $arr = $array[6]; echo $imgarray($arr);?>);}
    15%{background-image:url(<?php $arr = $array[7]; echo $imgarray($arr);?>);}
    17.5%{background-image:url(<?php $arr = $array[8]; echo $imgarray($arr);?>);}
    20%{background-image:url(<?php $arr = $array[9]; echo $imgarray($arr);?>);}
    22.5%{background-image:url(<?php $arr = $array[10]; echo $imgarray($arr);?>);}
    25%{background-image:url(<?php $arr = $array[11]; echo $imgarray($arr);?>);}
    27.5%{background-image:url(<?php $arr = $array[12]; echo $imgarray($arr);?>);}
    30%{background-image:url(<?php $arr = $array[13]; echo $imgarray($arr);?>);}
    32.5%{background-image:url(<?php $arr = $array[14]; echo $imgarray($arr);?>);}
    35%{background-image:url(<?php $arr = $array[15]; echo $imgarray($arr);?>);}
    37.5%{background-image:url(<?php $arr = $array[16]; echo $imgarray($arr);?>);}
    40%{background-image:url(<?php $arr = $array[17]; echo $imgarray($arr);?>);}
    42.5%{background-image:url(<?php $arr = $array[18]; echo $imgarray($arr);?>);}
    45%{background-image:url(<?php $arr = $array[19]; echo $imgarray($arr);?>);}
    47.5%{background-image:url(<?php $arr = $array[20]; echo $imgarray($arr);?>);}
    50%{background-image:url(<?php $arr = $array[21]; echo $imgarray($arr);?>);}
    52.5%{background-image:url(<?php $arr = $array[22]; echo $imgarray($arr);?>);}
    55%{background-image:url(<?php $arr = $array[23]; echo $imgarray($arr);?>);}
    57.5%{background-image:url(<?php $arr = $array[24]; echo $imgarray($arr);?>);}
    60%{background-image:url(<?php $arr = $array[25]; echo $imgarray($arr);?>);}
    62.5%{background-image:url(<?php $arr = $array[26]; echo $imgarray($arr);?>);}
    65%{background-image:url(<?php $arr = $array[27]; echo $imgarray($arr);?>);}
    67.5%{background-image:url(<?php $arr = $array[28]; echo $imgarray($arr);?>);}
    70%{background-image:url(<?php $arr = $array[29]; echo $imgarray($arr);?>);}
    72.5%{background-image:url(<?php $arr = $array[30]; echo $imgarray($arr);?>);}
    75%{background-image:url(<?php $arr = $array[31]; echo $imgarray($arr);?>);}
    77.5%{background-image:url(<?php $arr = $array[32]; echo $imgarray($arr);?>);}
    80%{background-image:url(<?php $arr = $array[33]; echo $imgarray($arr);?>);}
    82.5%{background-image:url(<?php $arr = $array[34]; echo $imgarray($arr);?>);}
    85%{background-image:url(<?php $arr = $array[35]; echo $imgarray($arr);?>);}
    87.5%{background-image:url(<?php $arr = $array[36]; echo $imgarray($arr);?>);}
    90%{background-image:url(<?php $arr = $array[37]; echo $imgarray($arr);?>);}
    92.5%{background-image:url(<?php $arr = $array[38]; echo $imgarray($arr);?>);}
    95%{background-image:url(<?php $arr = $array[39]; echo $imgarray($arr);?>);}
    97.5%{background-image:url(<?php $arr = $array[40]; echo $imgarray($arr);?>);}
    100%{background-image:url(<?php $arr = $array[41]; echo $imgarray($arr);?>);}
  );}
</style>
