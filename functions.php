<?php

add_theme_support( 'post-thumbnails' ); // add featured image support
add_theme_support( 'post-formats', array( 'video', 'link', 'image' ) ); // add custom formats
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'custom-logo' );

$user = wp_get_current_user();
if ( in_array( 'author', (array) $user->roles ) ) {
    add_action('admin_head', 'csboth');
    add_action('admin_head', 'csauthor');
}
$user = wp_get_current_user();
if ( in_array( 'editor', (array) $user->roles ) ) {
    add_action('admin_head', 'csboth');
    add_action('admin_head', 'cseditor');
}
function csboth() {
  echo '<style>
    .menu-top#toplevel_page_jetpack,
    .menu-top#menu-posts,
    .menu-top#toplevel_page_wpcf7,
    .menu-top#menu-comments,
    .menu-top#menu-tools,
    .wp-admin-bar-wp-logo,
    .wp-admin-bar-my-sites,
    .wp-admin-bar-comments,
    .ab-top-secondary.ab-top-menu,
    .user-rich-editing-wrap,
    .user-admin-color-wrap,
    .user-comment-shortcuts-wrap,
    .show-admin-bar.user-admin-bar-front-wrap{
      display:none;
    }
    .disabled{
      opacity:.5;
      pointer-events:none;
      cursor:not-allowed;
    }
  </style>';
}
function csauthor() {
  echo '<style>
    .menu-top#menu-posts{

    }
  </style>';
}
function cseditor() {
  echo '<style>
    .menu-top#menu-posts{

    }
  </style>';
}

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
