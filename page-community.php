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

$users = get_users();
foreach($users as $user){
?>
  <a href="<?php echo get_author_posts_url($user->ID);?>">
    <div class="dir-item team-item" style="background-image:url(<?php the_field('profilepic', 'user_'. $user->ID); ?>);">
      <div class="info">
        <div class="info-m">
          <h3>
            <?php echo $user->display_name; ?>
          </h3>
          <p class="title">
            <?php the_field('profiletitle', 'user_'. $user->ID); ?>
          </p>
        </div>
      </div>
    </div>
  </a>
<?php
}

?>
</div>
<?php
get_sidebar();
get_footer();
