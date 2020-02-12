<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css"> <!-- stylesheet for this page -->
  <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">

  <?php

  ?>

	<?php wp_head(); ?>
</head>
  <body class="<?php global $post;echo $post->post_name;?>">
		<a href="<?php __previous_url(); ?>"><div class="back-button"></div></a>
    <div class="logo">
      <?php the_custom_logo();?>
    </div>
    <div class="menu">
      <div class="duvet"></div>
      <a class="burger">
        <span class="one"></span>
        <span class="two"></span>
        <span class="tre"></span>
      </a>
      <nav>
        <ul>
          <li>
            <a href="<?php echo get_site_url();?>/om-oss">HÆ?</a>
          </li>
          <li>
            <a href="<?php echo get_site_url();?>/prosjekter">PROSJEKTER</a>
          </li>
          <li>
            <a href="<?php echo get_site_url();?>/community">COMMUNITY</a>
          </li>
          <li>
            <a href="<?php echo get_site_url();?>/tjenester">TJENESTER</a>
          </li>
        </ul>
      </nav>
    </div>
