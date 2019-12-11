<?php
 get_header();
?>

<div class="header">

<?php
	// Start the Loop.
while ( have_posts() ) :
	the_post();
	/*
	 * Include the post format-specific template for the content. If you want to
	 * use this in a child theme, then include a file called content-___.php
	 * (where ___ is the post format) and that will be used instead.
	 */
?>
<h1>
  <?php the_title(); ?>
</h1>
<p class="credits">
  <?php if( have_rows('credits') ): ?>

    <?php while( have_rows('credits') ): the_row(); ?>
    <?php $user = get_user_by( 'id', the_sub_field('credits_username') ); ?>
        <span class="credit"><?php the_sub_field('credits_title'); ?>: <a href=""><?php echo 'User is ' . $user->first_name . ' ' . $user->last_name; ?>.</a></span>
    <?php endwhile; ?>
  <?php endif; ?>
</p>
<p class="excerpt">
  <?php
    the_excerpt();
  ?>
</p>
</div>
<?php
  the_content();
	endwhile;
?>
<div class="pager">
  <div class="previous"></div>
  <div class="back">
    Tilbake til prosjekter
  </div>
  <div class="next"></div>
</div>
<?php
  get_footer();
?>
