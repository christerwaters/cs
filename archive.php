<?php
	get_header();
?>

<div class="dir">
		<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				?>
					<div class="dir-item portfolio-item" style="background-image:url(<?php echo get_the_post_thumbnail_url(null, 'full'); ?>);">
						<div class="info">
							<h3>
								<?php the_title(); ?>
							</h3>
						</div>
					</div>
				<?php
			endwhile;
		endif;
		?>
	</div>

<?php
	get_sidebar();
	get_footer();
