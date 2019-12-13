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
	<p class="excerpt">
	  <?php
	    the_excerpt();
	  ?>
	</p>
	<?php };  ?>
</div>
<?php
  the_content();
	endwhile;
?>
<?php
  get_footer();
?>
