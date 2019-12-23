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

<?php if ( get_field('hide_excerpt')!='True'){?>
  <p class="excerpt">
    <?php
      the_excerpt();
    ?>
  </p>
<?php }; ?>
<?php if ( get_field('hide_credits')!='True'){?>
  <p class="credits">
    <?php if( have_rows('credits') ): ?>

      <?php while( have_rows('credits') ): the_row(); ?>
          <span class="credit">
            <?php if( get_sub_field('c_title') ) { ?>
              <?php the_sub_field('c_title'); ?>:
            <?php }; ?>
            <?php if( get_sub_field('extname') ) { ?>
              <?php the_sub_field('extname')?>.
            <?php }; ?>
            <?php if( get_sub_field('intname') ) { ?>
              <?php $user = get_user_by( 'id', get_sub_field('intname'))?>
              <a href="<?php echo get_author_posts_url(get_sub_field('intname'));?>">
                <?php echo $user->display_name; ?>.
              </a>
            <?php }; ?>
          </span>
      <?php endwhile; ?>
    <?php endif; ?>
  </p>
<?php }; ?>
<p class="kunde">
  <?php if( get_field('kunde') ) { ?>
    Kunde: <?php the_field('kunde') ?>.
  <?php }; ?>
</p>
</div>
<?php
  the_content();
	endwhile;
?>
<div class="pagination">
  <div class="counter">
    <?php global $post;
          $current = $post->ID;
          ?>
    <?php
    $query = new WP_Query( array(
              'post_type' => 'portfolio',
              'post_status' => 'publish',
              'posts_per_page' => '-1',
              'tax_query' => array(
                array (
                  'taxonomy' => 'show_on',
                  'field' => 'slug',
                  'terms' => 'portfolio',
                )
              ),
              'order' => 'ASC'
          ) );
          $all = $query->post_count;
          foreach( $query->posts as $key => $p )
              if( $post->ID == $p->ID ) $current = $key + 1;
          ?>

          <div class="page-count">
            <?php echo $all-$current ?>
          </div>
          <div class="divi-count"></div>
          <div class="tot-count">
            <?php echo $all ?>
          </div>
  </div>
</div>






<?php
  get_footer();
?>
