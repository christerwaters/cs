<?php

add_theme_support( 'post-thumbnails' ); // add featured image support
add_theme_support( 'post-formats', array( 'video', 'link', 'image' ) ); // add custom formats
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );

function __previous_url(){
	if($_SERVER['REQUEST_URI']!==wp_get_raw_referer()){
		echo wp_get_raw_referer();
	} else {
		echo wp_get_canonical_url();
	}
};
function _previous_url(){
	if($_SERVER['REQUEST_URI']!==wp_get_raw_referer()){
		return wp_get_raw_referer();
	} else {
		return wp_get_canonical_url();
	}
};
function __back_btn(){
  global $post;
  if (get_post_type()=='page' ){
    if (get_the_ID()=='4684'){
      echo '<a href="/">" id="last-page"><div class="back-button"></div><div class="label">TILBAKE</div></a>';
    } else if (get_the_ID()=='5285'){
      echo '<a href="/om-oss">" id="last-page"><div class="back-button"></div><div class="label">TILBAKE</div></a>';
    }
  } else if (get_post_type()=='portfolio_item' ){
    echo '<a href="/prosjekter">" id="last-page"><div class="back-button"></div><div class="label">TILBAKE</div></a>';
  }
}
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

add_filter( 'author_rewrite_rules', 'no_author_base_rewrite_rules' );
function no_author_base_rewrite_rules($author_rewrite) {
    global $wpdb;
    $author_rewrite = array();
    $authors = $wpdb->get_results("SELECT user_nicename AS nicename from $wpdb->users");
    foreach($authors as $author) {
        $author_rewrite["({$author->nicename})/page/?([0-9]+)/?$"] = 'index.php?author_name=$matches[1]&paged=$matches[2]';
        $author_rewrite["({$author->nicename})/?$"] = 'index.php?author_name=$matches[1]';
    }
    return $author_rewrite;
}
// The second part //
add_filter( 'author_link', 'no_author_base', 1000, 2);
function no_author_base($link, $author_id) {
    $link_base = trailingslashit(get_option( 'home' ) );
    $link = preg_replace("|^{$link_base}author/|", '', $link);
    return $link_base . $link;
};

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
    a.screen-reader-shortcut{
      display: block;
      right: 10px;
      color: #fff;
      top: 0;
    }
  </style>';
}
function csauthor() {
  echo '<style>
    #acf-group_5df9197159559{
      display:none;
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
// found on: https://wpquestions.com/RESOLVED_by_me_adjacent_post_with_same_meta_key_and_same_meta_value/7147
function the_adjacent_post_url($meta_key, $meta_value , $nextprev = 'next' ){

  global $post;
  $date = $post->post_date;

  global $wpdb;

  if($nextprev == 'prev' ) {
    $sign = '>';
    $order= 'ASC';
  }
  elseif($nextprev == 'next' ) {
    $sign = '<';
    $order= 'DESC';
  }

  $querystr = "
  SELECT $wpdb->posts.*
  FROM $wpdb->posts, $wpdb->postmeta
  WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id
  AND $wpdb->postmeta.meta_key = '".$meta_key."'
  AND $wpdb->postmeta.meta_value = '".$meta_value."'
  AND $wpdb->posts.post_status = 'publish'
  AND $wpdb->posts.post_date ".$sign." '".$date."'
  ORDER BY $wpdb->posts.post_date ".$order."
  LIMIT 1";

  $postData = $wpdb->get_results($querystr, OBJECT);
  //print_r($postData);

  if(empty($postData)) {
  } else {
    foreach($postData as $article) {
      echo get_permalink($article->ID);
    }
  }
}


?>
