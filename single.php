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
<p class="intro">
</p>
</div>
<?php
  get_template_part( 'content', get_post_format() );
	endwhile;
?>
<div class="pager">
<div class="previous">
</div>
<div class="back">
  Tilbake til prosjekter
</div>
<div class="next">
</div>
</div>
<?php
  get_footer();
?>
