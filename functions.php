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







add_action('admin_init', 'user_profile_fields_disable');

function user_profile_fields_disable() {

global $pagenow;

// apply only to user profile or user edit pages
if ($pagenow!=='profile.php' && $pagenow!=='user-edit.php') {
return;
}

// do not change anything for the administrator
if (current_user_can('Author')) {
return;
}

add_action( 'admin_footer', 'user_profile_fields_disable_js' );

}

/**
* Disables selected fields in WP Admin user profile (profile.php, user-edit.php)
*/
function user_profile_fields_disable_js() {
?>
<script>
jQuery(document).ready( function($) {
var fields_to_disable = ['email', 'role'];
for(i=0; i<fields_to_disable.length; i++) {
if ( $('#'+ fields_to_disable[i]).length ) {
$('#'+ fields_to_disable[i]).attr("disabled", "disabled");
}
}
});
</script>
<?php
}









?>
