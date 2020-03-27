
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
  the_content();
	endwhile;
?>




<div class="dir">

<?php

$users = get_users();
foreach($users as $user){
?>

<?php if ( get_field('profilepic', 'user_'. $user->ID)){?>
<span class="tilfeldig">
  <a href="<?php echo get_the_author_link($user->ID);?>" class="loader-bg">
    <div class="dir-item team-item" style="background-image:url(<?php the_field('profilepic', 'user_'. $user->ID); ?>);">
      <div class="info">
        <div class="info-m">
          <h5>
            <?php echo $user->display_name; ?>
          </h5>
          <p class="title">
            <?php the_field('profiletitle', 'user_'. $user->ID); ?>
          </p>
        </div>
      </div>
    </div>
  </a>
</span>
<?php }; ?>
<?php
}

?>
</div>
<?php
  get_sidebar();
  get_footer();
?>
