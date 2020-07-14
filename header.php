<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css"> <!-- stylesheet for this page -->
  <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">



	<?php wp_head(); ?>
</head>
  <body class="<?php global $post;echo $post->post_name;?> firsttimer">
		<?php include 'flipper.php'; ?>
