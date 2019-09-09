<!DOCTYPE html>
<html>
  <head>
    <title> VI VIL SAMARBEIDE! - Citrus Studio</title> <!-- Set the title of the page, this shows up in google etc. as well -->



    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/media/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/media/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/media/favicon/safari-pinned-tab.svg" color="#0000ff">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/media/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="<?php bloginfo('template_directory'); ?>/media/favicon/browserconfig.xml">
    <meta name="theme-color" content="#0000ff">


    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css"> <!-- stylesheet for this page -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="msapplication-TileColor" content="#00f">
    <meta name="theme-color" content="#00f">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@christerwaters" />
    <meta name="twitter:creator" content="@christerwaters" />
    <meta property="og:url" content="https://wtrs.dev" />
    <meta property="og:title" content="Christer Waters - WTRS.dev - Freelance Designer & Developer" />
    <meta property="og:description" content="I build human-friendly websites, always optimized for search-engines and any device. I also create artworks in the form of still and moving imagry (video and photo)." />


  </head>
  <body>
    <div class="menu">
  <div class="menu-overlay"></div>
  <div class="logotype">
    <span>Citrus Studio</span>
  </div>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="underline"><span>Kontakt</span></a></li>
        <li><a href="#" class="underline"><span>Team</span></a></li>
        <li><a href="#" class="underline"><span>Om oss</span></a></li>
        <li><a href="#" class="underline"><span>Events</span></a></li>
      </ul>
    </nav>
  </div>
</div>




<div class="content">






  <?php
  $args = array('post_type' => 'portfolio'); //declares that we will only be querying the portfolio post type
  $portfolio_items = get_posts( $args );
  foreach ($portfolio_items as $page_data) {
      $content = apply_filters('the_content', $page_data->post_content);
      $title = $page_data->post_title;
      $post_slug = $page_data->post_name;
      $imageid_full = wp_get_attachment_image_src( get_post_thumbnail_id($page_data->ID), 'full' );
      $image_full = $imageid_full['0'];
      $select_format_type = get_field('format_type',$page_data->ID);
      $video_mp4 = get_field('video_file_mp4',$page_data->ID);
      $website_url = get_field('website_url',$page_data->ID);
  ?>
  <a href="#<?php echo $post_slug;?>">
    <section class="portfolio-item <?php echo $select_format_type;?>" id="<?php echo $post_slug;?>">
      <div class="inner">
        <div class="featured-media">
          <video poster="<?php echo $image_full;?>" class="js-player" playsinline controls>
            <source src="<?php echo $video_mp4;?>" type="video/mp4" />
          </video>
        </div>
        <h1><?php echo $title; ?></h1>
        <!--noindex-->
          <!--googleoff: index-->
            <h2 class="text-fill center robots-nocontent"><?php echo $title; ?></h2>
          <!--googleon: index-->
        <!--/noindex-->
      </div>
    </section>
  </a>

<?php }; ?>
</div>
<div class="contact-form">

</div>
<div class="grain"></div>
<div class="footer">
  <div class="col">
    Privacy
  </div>
  <div class="col">
    Cookies
  </div>
  <div class="col">
    This is a test
  </div>
  <div class="col">
    This is a test
  </div>
  <div class="col">
    This is a test
  </div>
  <div class="dev-by-wtrs">
    <a href="wtrs.dev">WTRS</a>
  </div>
</div>
</body>
</html>
