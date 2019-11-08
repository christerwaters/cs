
<!--noindex-->
<!--googleoff: index-->
<script>
var introFruit = '';
for (var i = 1; i <= 100; i ++) {
  html += '<div class="intro-fruit intro-fruit-'+ Math.floor(Math.random()*6+1) +' intro-fruit--nr-'+i+'"></div>';
}
document.querySelector('.intro-wrap').innerHTML += introFruit;
</script>

<div class="intro-wrap unloaded"></div>
<!--googleon: index-->
<!--/noindex-->
