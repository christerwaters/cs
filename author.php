<?php


get_header();
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>



<div class="header">
  <h1>
    <span class="fname"><?php echo $curauth->first_name; ?></span> <span class="lname"><?php echo $curauth->last_name; ?></span>
  </h1>
</div>

<?php
get_sidebar();
get_footer();
