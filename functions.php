<?php

add_theme_support( 'post-thumbnails' ); // add featured image support
add_theme_support( 'post-formats', array( 'video', 'link', 'image' ) ); // add custom formats
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'custom-logo' );

function cs_imp(){
  wp_register_script( 'plyr_js', get_template_directory_uri() .'/js/plyr.js', null, false, true ); // .'/js/plyr.js', null, null, true );
  wp_enqueue_script('plyr_js');
  wp_register_script( 'main_js', get_template_directory_uri() .'/js/main.js', null, false, true );
  wp_enqueue_script('main_js');
  wp_register_style( 'plyr_css', get_template_directory_uri() .'/css/plyr.css' );
  wp_enqueue_style('plyr_css');
  wp_register_style( 'single_css', get_template_directory_uri() .'/css/single.css' );
  wp_enqueue_style('single_css');
}
add_action( 'wp_enqueue_scripts', 'cs_imp' );


?>
