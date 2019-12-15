<?php
 get_header();
?>

<div class="header">

<?php
	// Start the Loop.
while ( have_posts() ) :
	the_post();
?>
<h1>
  <?php the_title(); ?>
</h1>
<p class="credits">
  <?php if( have_rows('credits') ): ?>

    <?php while( have_rows('credits') ): the_row(); ?>
        <span class="credit">
          <?php the_sub_field('c_title'); ?>:
          <?php if( get_sub_field('extname') ) { ?>
            <?php the_sub_field('extname')?>.</a>
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
