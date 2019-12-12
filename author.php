<?php


get_header();
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
$curauthID = $curauth->ID;
?>



<div class="header">
  <h1><?php echo $curauth->display_name; ?></h1>
  <? echo $curauthID;?>
</div>

<?php

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'portfolio',
	'meta_key'		=> 'credits_username',
	'meta_value'	=> $curauthID
));

if( $posts ): ?>

	<ul>

	<?php foreach( $posts as $post ):

		setup_postdata( $post );

		?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>

	<?php endforeach; ?>

	</ul>

	<?php wp_reset_postdata(); ?>

<?php endif; ?>


<?php
get_sidebar();
get_footer();
