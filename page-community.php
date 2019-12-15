<?php

get_header();


$allUsers = get_users();

$users = array();
// Remove subscribers from the list as they won't write any articles
foreach($allUsers as $currentUser)
{
	if(in_array( 'member', $currentUser->roles ))
	{
		$users[] = $currentUser;
	}
}
?>

<div class="dir">
<?php
  foreach($users as $user)
  {
	?>

  <div class="dir-item portfolio-item" style="background-image:url(<?php the_field('profilepic'); ?>);">
    <div class="info">
      <h3>
        <?php echo $user->display_name; ?>
      </h3>
    </div>
  </div>

  <?php
  }
?>

</div>
<?php
get_sidebar();
get_footer();
