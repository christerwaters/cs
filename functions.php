<?php

add_theme_support( 'post-thumbnails' ); // add featured image support
add_theme_support( 'post-formats', array( 'video', 'link', 'image' ) ); // add custom formats


function cs_enqueue_scripts(){
  wp_register_script( 'plyr_js', bloginfo('template_directory') . '/js/plyr.js', null, null, true );
  wp_enqueue_script('plyr_js');
  wp_register_script( 'main_js', bloginfo('template_directory') . '/js/main.js', null, null, true );
  wp_enqueue_script('main_js');
  wp_register_style( 'plyr_css', bloginfo('template_directory') . '/css/plyr.css' );
  wp_enqueue_style('plyr_css');
  wp_register_style( 'single_css', bloginfo('template_directory') . '/css/single.css' );
  wp_enqueue_style('single_css');
}
add_action( 'wp_enqueue_scripts', 'cs_enqueue_scripts' );



?>
