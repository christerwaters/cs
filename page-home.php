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

<div class="dir">

<?php
$args = array('post_type' => 'portfolio'); //declares that we will only be querying the portfolio post type
$portfolio_items = get_posts( $args );
foreach ($portfolio_items as $page_data) {
    $title = $page_data->post_title;
    $perm = get_permalink($page_data->ID);
    $imageid_full = wp_get_attachment_image_src( get_post_thumbnail_id($page_data->ID), 'full' );
    $image_full = $imageid_full['0'];
?>
        <!-- LAY OUT THE TEMPLATE FOR IMAGES HERE -->

          <a href="<?php the_permalink(); ?>">
            <div class="dir-item portfolio-item" style="background-image:url(<?php echo $image_full; ?>);">
              <div class="info">
                <h3>
                  <?php echo $title; ?>
                </h3>
              </div>
            </div>
          </a>
<?php }; ?>


</div>

<p>lio</p>


<?php
  the_content();
	endwhile;
?>




<?php

get_sidebar();
get_footer();

?>
