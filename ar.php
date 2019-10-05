
<script src="https://aframe.io/releases/0.9.1/aframe.min.js"></script>
<script src="https://rawgit.com/jeromeetienne/AR.js/master/aframe/build/aframe-ar.min.js"></script>

<!-- add this script in order to load a large set of 3D model extensions-->
<script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>

<div class="p-wrap" id="ar">
  <!-- include A-Frame obviously -->
  <script src="https://aframe.io/releases/0.6.0/aframe.min.js"></script>
  <!-- include ar.js for A-Frame -->
  <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>
      <!-- create your content here. just a box for now -->
      <a-box position='0 0.5 0' material='opacity: 0.5;'></a-box>
      <!-- define a camera which will move according to the marker position -->
      <a-marker-camera preset='hiro'></a-marker-camera>
    </a-scene>
</div>
