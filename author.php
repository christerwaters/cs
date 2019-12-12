<?php


get_header();
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>



<div class="header">
  <h1><?php echo $curauth->display_name; ?></h1>
  <p>ID: <?php echo $curauth->ID;?>
</div>






<?php
// filter
function my_posts_where( $where ) {

	$where = str_replace("meta_key = 'credits_$", "meta_key LIKE 'credits_%", $where);

	return $where;
}

add_filter('posts_where', 'my_posts_where');


// vars
$city = '3';


// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'event',
	'meta_query'	=> array(
		'relation'		=> 'OR',
		array(
			'key'		=> 'credits_$_creditname',
			'compare'	=> '=',
			'value'		=> '3',
		),
		array(
			'key'		=> 'credits_$_creditname',
			'compare'	=> '=',
			'value'		=> '3',
		)
	)
);


// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>
	<ul>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>








<?php
get_sidebar();
get_footer();
