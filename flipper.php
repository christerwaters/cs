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
    $array = array(
      "p_001" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/001.jpg",
      "p_002" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/002.jpg",
      "p_003" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/003.jpg",
      "p_004" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/004.jpg",
      "p_005" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/005.jpg",
      "p_006" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/006.jpg",
      "p_007" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/007.jpg",
      "p_008" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/008.jpg",
      "p_009" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/009.jpg",
      "p_010" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/010.jpg",
      "p_011" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/011.jpg",
      "p_012" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/012.jpg",
      "p_013" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/013.jpg",
      "p_014" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/014.jpg",
      "p_015" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/015.jpg",
      "p_016" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/016.jpg",
      "p_017" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/017.jpg",
      "p_018" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/018.jpg",
      "p_019" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/019.jpg",
      "p_020" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/020.jpg",
      "p_021" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/021.jpg",
      "p_022" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/022.jpg",
      "p_023" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/023.jpg",
      "p_024" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/024.jpg",
      "p_025" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/025.jpg",
      "p_026" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/026.jpg",
      "p_027" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/027.jpg",
      "p_028" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/028.jpg",
      "p_029" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/029.jpg",
      "p_030" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/030.jpg",
      "p_031" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/031.jpg",
      "p_032" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/032.jpg",
      "p_033" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/033.jpg",
      "p_034" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/034.jpg",
      "p_035" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/035.jpg",
      "p_036" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/036.jpg",
      "p_037" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/037.jpg",
      "p_038" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/038.jpg",
      "p_039" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/039.jpg",
      "p_040" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/040.jpg",
      "p_041" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/041.jpg",
      "p_042" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/042.jpg",
      "p_043" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/043.jpg",
      "p_044" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/044.jpg",
      "p_045" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/045.jpg",
      "p_046" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/046.jpg",
      "p_047" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/047.jpg",
      "p_048" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/048.jpg",
      "p_049" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/049.jpg",
      "p_050" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/050.jpg",
      "p_051" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/051.jpg",
      "p_052" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/052.jpg",
      "p_053" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/053.jpg",
      "p_054" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/054.jpg",
      "p_055" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/055.jpg",
      "p_056" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/056.jpg",
      "p_057" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/057.jpg",
      "p_058" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/058.jpg",
      "p_059" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/059.jpg",
      "p_060" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/060.jpg",
      "p_061" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/061.jpg",
      "p_062" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/062.jpg",
      "p_063" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/063.jpg",
      "p_064" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/064.jpg",
      "p_065" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/065.jpg",
      "p_066" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/066.jpg",
      "p_067" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/067.jpg",
      "p_068" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/068.jpg",
      "p_069" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/069.jpg",
      "p_070" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/070.jpg",
      "p_071" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/071.jpg",
      "p_072" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/072.jpg",
      "p_073" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/073.jpg",
      "p_074" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/074.jpg",
      "p_075" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/075.jpg",
      "p_076" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/076.jpg",
      "p_077" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/077.jpg",
      "p_078" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/078.jpg",
      "p_079" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/079.jpg",
      "p_080" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/080.jpg",
      "p_081" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/081.jpg",
      "p_082" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/082.jpg",
      "p_083" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/083.jpg",
      "p_084" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/084.jpg",
      "p_085" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/085.jpg",
      "p_086" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/086.jpg",
      "p_087" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/087.jpg",
      "p_088" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/088.jpg",
      "p_089" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/089.jpg",
      "p_090" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/090.jpg",
      "p_091" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/091.jpg",
      "p_092" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/092.jpg",
      "p_093" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/093.jpg",
      "p_094" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/094.jpg",
      "p_095" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/095.jpg",
      "p_096" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/096.jpg",
      "p_097" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/097.jpg",
      "p_098" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/098.jpg",
      "p_099" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/099.jpg",
      "p_100" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/100.jpg",
      "p_101" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/101.jpg",
      "p_102" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/102.jpg",
      "p_103" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/103.jpg",
      "p_104" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/104.jpg",
      "p_105" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/105.jpg",
      "p_106" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/106.jpg",
      "p_107" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/107.jpg",
      "p_108" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/108.jpg",
      "p_109" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/109.jpg",
      "p_110" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/110.jpg",
      "p_111" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/111.jpg",
      "p_112" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/112.jpg",
      "p_113" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/113.jpg",
      "p_114" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/114.jpg",
      "p_115" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/115.jpg",
      "p_116" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/116.jpg",
      "p_117" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/117.jpg",
      "p_118" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/118.jpg",
      "p_119" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/119.jpg",
      "p_120" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/120.jpg",
      "p_121" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/121.jpg",
      "p_122" => "https://citrusstudio.no/wp-content/themes/cs/media/flipper/122.jpg"
      );
    $array=array_rand($array,41);
   ?>
    0%{background-image:url(<?php echo $array[1]?>);}
    2.5%{background-image:url(<?php echo $array[2]?>);}
    5%{background-image:url(<?php echo $array[3]?>);}
    7.5%{background-image:url(<?php echo $array[4]?>);}
    10%{background-image:url(<?php echo $array[5]?>);}
    12.5%{background-image:url(<?php echo $array[6]?>);}
    15%{background-image:url(<?php echo $array[7]?>);}
    17.5%{background-image:url(<?php echo $array[8]?>);}
    20%{background-image:url(<?php echo $array[9]?>);}
    22.5%{background-image:url(<?php echo $array[10]?>);}
    25%{background-image:url(<?php echo $array[11]?>);}
    27.5%{background-image:url(<?php echo $array[12]?>);}
    30%{background-image:url(<?php echo $array[13]?>);}
    32.5%{background-image:url(<?php echo $array[14]?>);}
    35%{background-image:url(<?php echo $array[15]?>);}
    37.5%{background-image:url(<?php echo $array[16]?>);}
    40%{background-image:url(<?php echo $array[17]?>);}
    42.5%{background-image:url(<?php echo $array[18]?>);}
    45%{background-image:url(<?php echo $array[19]?>);}
    47.5%{background-image:url(<?php echo $array[20]?>);}
    50%{background-image:url(<?php echo $array[21]?>);}
    52.5%{background-image:url(<?php echo $array[22]?>);}
    55%{background-image:url(<?php echo $array[23]?>);}
    57.5%{background-image:url(<?php echo $array[24]?>);}
    60%{background-image:url(<?php echo $array[25]?>);}
    62.5%{background-image:url(<?php echo $array[26]?>);}
    65%{background-image:url(<?php echo $array[27]?>);}
    67.5%{background-image:url(<?php echo $array[28]?>);}
    70%{background-image:url(<?php echo $array[29]?>);}
    72.5%{background-image:url(<?php echo $array[30]?>);}
    75%{background-image:url(<?php echo $array[31]?>);}
    77.5%{background-image:url(<?php echo $array[32]?>);}
    80%{background-image:url(<?php echo $array[33]?>);}
    82.5%{background-image:url(<?php echo $array[34]?>);}
    85%{background-image:url(<?php echo $array[35]?>);}
    87.5%{background-image:url(<?php echo $array[36]?>);}
    90%{background-image:url(<?php echo $array[37]?>);}
    92.5%{background-image:url(<?php echo $array[38]?>);}
    95%{background-image:url(<?php echo $array[39]?>);}
    97.5%{background-image:url(<?php echo $array[40]?>);}
    100%{background-image:url(<?php echo $array[41]?>);}
  );}
</style>
