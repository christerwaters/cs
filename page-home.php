<?php
 get_header();
?>

<div class="header">

<?php
	// Start the Loop.
while ( have_posts() ) :
	the_post();
?>
	<?php if ( get_field('hide_title')!='True'){?>
	<h1>
	  <?php the_title(); ?>
	</h1>
	<?php }; ?>

	<?php if (get_field('hide_excerpt')!='True'){?>
	<div class="excerpt">
	  <?php
	    the_excerpt();
	  ?>
	</div>
	<?php };  ?>
</div>

<?php

  $posts = get_posts(array(
  	'posts_per_page'	=> -1,
  	'post_type'			=> 'portfolio',
  	'meta_key'		=> 'show_on_home',
  	'meta_value'	=> true
  ));

  if( $posts ): ?>

  <div class="dir">

  	<?php foreach( $posts as $post ):
  		setup_postdata( $post );
  		?>
      <a href="<?php the_permalink(); ?>">
        <div class="dir-item portfolio-item" style="background-image:url(<?php echo get_the_post_thumbnail_url(null, 'full'); ?>);">
          <div class="info">
            <div class="info-m">
              <h3>
                <?php the_title(); ?>
              </h3>
            </div>
          </div>
        </div>
      </a>
  	<?php endforeach; ?>

    </div>

  	<?php wp_reset_postdata(); ?>

  <?php endif; ?>

<?php
  the_content();
	endwhile;
?>




<?php

get_sidebar();
get_footer();

?>
