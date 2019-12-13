<?php


get_header();
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>



<div class="header">
  <h1><?php echo $curauth->display_name; ?></h1>
  <p>ID: <?php echo $curauth->ID;$ciddy = $curauth->ID; ?>
</div>






<?php
// filter
function my_posts_where( $where ) {

	$where = str_replace("meta_key = 'credits_$", "meta_key LIKE 'credits_%", $where);

	return $where;
}

add_filter('posts_where', 'my_posts_where');


// vars
$city = $ciddy;


// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'portfolio',
	'meta_query'	=> array(
		'relation'		=> 'OR',
		array(
			'key'		=> 'credits_$_creditname',
			'compare'	=> '=',
			'value'		=> $ciddy,
		),
		array(
			'key'		=> 'credits_$_creditname',
			'compare'	=> '=',
			'value'		=> $ciddy,
		)
	)
);


// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>
  <div class="dir">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php

    /**  Setting up some vars  **/

    $image_full = get_the_post_thumbnail_url(null, full);

     ?>
    <a href="<?php the_permalink(); ?>">
      <div class="dir-item portfolio-item" style="background-image:url(<?php echo $image_full; ?>);">
        <div class="info">
          <h3>
            <?php the_title(); ?>
          </h3>
        </div>
      </div>
    </a>
	<?php endwhile; ?>
  </div>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>








<?php
get_sidebar();
get_footer();
