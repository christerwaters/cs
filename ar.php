
<div class="p-wrap" id="ar">
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>
      <!-- create your content here. just a box for now -->
      <a-box position='0 0.5 0' material='opacity: 0.5;'></a-box>
      <!-- define a camera which will move according to the marker position -->
      <a-marker-camera preset='hiro'></a-marker-camera>
    </a-scene>
</div>
