<?php function wtrs_gutenberg_blocks(){
  wp_register_script( 'wtrs-featured-video', get_template_directory_uri() . '/core/js/blocks/wtrs-featured-video.js', array('wp-blocks'));
  register_block_type('wtrs/wtrs-featured-video', array(
    'editor_script' => 'wtrs-featured-video';
  ))
}
add_action('init', 'wtrs_gutenberg_blocks')
?>
