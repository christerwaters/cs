
<!--noindex-->
<!--googleoff: index-->
<script>
var introFruit = '';
for (var i = 1; i <= 100; i ++) {
  var rndm = Math.floor(Math.random()*6+1);
  introFruit += '<div class="intro-fruit intro-fruit-'+rndm+' intro-fruit--nr-'+i+'"></div>';
}
document.querySelector('.intro-wrap').innerHTML += introFruit;
</script>

<div class="intro-wrap unloaded"></div>
<!--googleon: index-->
<!--/noindex-->
