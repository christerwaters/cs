<html>
  <head>
    <title> Citrus Studio </title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css"> <!-- stylesheet for this page -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/slick/slick.css"> <!-- stylesheet for this page -->
  </head>


  <body class="<?php global $post;echo $post->post_name;?>">
    <a href="<?php echo get_site_url();?>">
      <div class="logo">
        <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo();}?>
      </div>
    </a>
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
