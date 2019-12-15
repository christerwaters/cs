<?php

get_header();

?>

<div class="dir">

<?php

$users = get_users();
foreach($users as $user){
?>
  <div class="dir-item team-item" style="background-image:url(<?php the_field('profilepic', 'user_'. $user->ID); ?>);">
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
