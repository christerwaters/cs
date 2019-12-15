<?php

get_header();

?>

<div class="dir">

<?php

$users = get_users();
foreach($users as $user){
?>
<a href="<?php the_author_posts_url($user->ID);?>">
  <div class="dir-item team-item" style="background-image:url(<?php the_field('profilepic', 'user_'. $user->ID); ?>);">
    <div class="info">
      <div class="info-c">
        <h3>
          <?php echo $user->display_name; ?>
        </h3>
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
