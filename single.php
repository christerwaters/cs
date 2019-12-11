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

    <ul>

    <?php while( have_rows('credits') ): the_row(); ?>

        <li>sub_field_1 = <?php the_sub_field('credits_title'); ?>, sub_field_2 = <?php the_sub_field('credits_username'); ?>, etc</li>

        <?php
        if (get_sub_field('is_citrus')==('No')){
          $user_url == the_sub_field('credits_url');
        } else {
          $user_url == ('');
        }

        ?>

    <?php endwhile; ?>

    </ul>

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
