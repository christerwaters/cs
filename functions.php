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

//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires

add_action( 'init', 'create_show_on', 0 );

function create_show_on() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Show on', 'taxonomy general name' ),
    'singular_name' => _x( 'Show on', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Show on' ),
    'popular_items' => __( 'Popular Show on' ),
    'all_items' => __( 'All Show on' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Show on' ),
    'update_item' => __( 'Update Show on' ),
    'add_new_item' => __( 'Add New Show on' ),
    'new_item_name' => __( 'New Topic Show on' ),
    'separate_items_with_commas' => __( 'Separate pages with commas' ),
    'add_or_remove_items' => __( 'Add or remove Show on' ),
    'choose_from_most_used' => __( 'Choose from the most used Show on' ),
    'menu_name' => __( 'Show on' )
  );

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('show_on','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'show_on' )
  ));


?>
