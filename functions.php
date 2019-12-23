<?php

add_theme_support( 'post-thumbnails' ); // add featured image support
add_theme_support( 'post-formats', array( 'video', 'link', 'image' ) ); // add custom formats
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );

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
    #wp-admin-bar-wp-logo,
    #wp-admin-bar-my-sites,
    #wp-admin-bar-comments,
    #wp-admin-bar-new-post,
    #screen-meta-links,
    .ab-top-secondary.ab-top-menu,
    .user-rich-editing-wrap,
    .user-admin-color-wrap,
    .user-comment-shortcuts-wrap,
    .show-admin-bar.user-admin-bar-front-wrap,
    .user-url-wrap,
    .user-profile-picture,
    .profile-php #wpcontent #wpbody-content h2,
    .acf-editor-wrap .wp-editor-tools,
    .user-description-wrap,
    #your-profile #mceu_64,
    #your-profile #mceu_65,
    #your-profile #mceu_66,
    #your-profile #mceu_67,
    #your-profile #mceu_68,
    #your-profile #mceu_69,
    #your-profile #mceu_70,
    #your-profile #mceu_74k,
    #wpfooter{
      display:none !important;
    }
    .user-nickname-wrap{
      opacity:.5 !important;
      pointer-events:none !important;
      cursor:not-allowed !important;
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
  wp_register_script( 'jq', get_template_directory_uri() .'/js/jq.js', null, false, true );
  wp_enqueue_script('main_js');
  wp_register_script( 'main_js', get_template_directory_uri() .'/js/main.js', null, false, true );
  wp_enqueue_script('main_js');
  wp_register_style( 'plyr_css', get_template_directory_uri() .'/css/style.css' );
  wp_enqueue_style('plyr_css');
}
add_action( 'wp_enqueue_scripts', 'cs_imp' );


function na_remove_slug( $post_link, $post, $leavename ) {

    if ( 'portfolio' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
/*
  In the future we should add this to the settings page
*/
    return $post_link;
}
add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );


function na_parse_request( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'portfolio', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'na_parse_request' );

// Register Custom Taxonomy
function show_on() {

	$labels = array(
		'name'                       => _x( 'Show on pages', 'Taxonomy General Name', 'show_on' ),
		'singular_name'              => _x( 'Show on page', 'Taxonomy Singular Name', 'show_on' ),
		'menu_name'                  => __( 'Show on', 'show_on' ),
		'all_items'                  => __( 'Show on', 'show_on' ),
		'parent_item'                => __( 'Show on', 'show_on' ),
		'parent_item_colon'          => __( 'Show on', 'show_on' ),
		'new_item_name'              => __( 'Show on', 'show_on' ),
		'add_new_item'               => __( 'Show on', 'show_on' ),
		'edit_item'                  => __( 'Show on', 'show_on' ),
		'update_item'                => __( 'Show on', 'show_on' ),
		'view_item'                  => __( 'Show on', 'show_on' ),
		'separate_items_with_commas' => __( 'Show on', 'show_on' ),
		'add_or_remove_items'        => __( 'Show on', 'show_on' ),
		'choose_from_most_used'      => __( 'Show on', 'show_on' ),
		'popular_items'              => __( 'Show on', 'show_on' ),
		'search_items'               => __( 'Show on', 'show_on' ),
		'not_found'                  => __( 'Show on', 'show_on' ),
		'no_terms'                   => __( 'Show on', 'show_on' ),
		'items_list'                 => __( 'Show on', 'show_on' ),
		'items_list_navigation'      => __( 'Show on', 'show_on' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => false,
		'show_ui'                    => false,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'show_on', array( 'portfolio' ), $args );

}
add_action( 'init', 'show_on', 0 );

?>
