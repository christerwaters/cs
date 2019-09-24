<!DOCTYPE html>
<html>
  <head>
    <title> VI VIL SAMARBEIDE! - Citrus Studio</title> <!-- Set the title of the page, this shows up in google etc. as well -->


    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/media/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/media/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/media/favicon/safari-pinned-tab.svg" color="#0000ff">
    <link rel="shortcut icon" href="/media/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="<?php bloginfo('template_directory'); ?>/media/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


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

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">

  </head>
  <body class="p-open p-home">
    <div class="menu">
  <div class="menu-overlay"></div>
  <div class="logotype">
    <a href="<?php echo get_site_url();?>">
      <span>Citrus Studio</span>
    </a>
  </div>
  <div class="container">
    <nav>
      <ul>
        <li><a href="<?php echo get_site_url();?>/kontakt" class="underline"><span>Kontakt</span></a></li>
        <li><a href="<?php echo get_site_url();?>/team" class="underline"><span>Team</span></a></li>
        <li><a href="<?php echo get_site_url();?>/om-oss" class="underline"><span>Om oss</span></a></li>
        <li><a href="<?php echo get_site_url();?>/events" class="underline"><span>Events</span></a></li>
      </ul>
    </nav>
  </div>
</div>






<div class="h-p-header" id="home">
  <div class="text">
    <div class="line01">vi ønsker å redefinere</div>
    <div class="line02">forholdet mellom kreative</div>
    <div class="line03">aktører. vi ønsker ikke </div>
    <div class="line04">å konkurrere, men </div>
    <div class="line05">å samarbeide.</div>
  </div>
</div>

<div class="content p-wrap" id="home">
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
  <section class="portfolio-item <?php echo $select_format_type;?>" id="<?php echo $post_slug;?>">
    <div class="inner">
      <div class="featured-media tilt">
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

  <?php }; ?>
</div>
<div class="p-wrap" id="team">

  <div class="core">
    <h2> Ledelsen </h2><!--
  <?php
  $users = get_users( array( 'fields' => array( 'ID' ) ) );
  foreach($users as $user){
          $acfI = $user->ID;
          $acfId= 'user_' . $acfI;
          //print_r(get_user_meta ( $user->ID));
          $firstname = get_user_meta ($user->ID, 'first_name', true);
          $lastname = get_user_meta ($user->ID, 'last_name', true);
          $title = get_field('hr_title', $acfId, true);
          $status = get_field('hr_employment_status', $acfId, true);
          $pic = get_field('hr_profile_picture', $acfId, true);
          $bio = get_field('hr_bio', $acfId, true);
          $email = get_field('hr_email', $acfId, true);
          ?>
          <?php if ($status == ('Full-time')){?>



          --><div class="team-member">
                <div class="featured-image">
                  <span class="bio">
                    <p><?php echo $bio ?></p>
                  </span>
                  <span class="more">les mer</span>
                  <img src="<?php echo $pic ?>">
                </div>
                <span class="about">
                  <span class="title"><?php echo $title ?></span>
                  <span class="name"><span class="firstname"><?php echo $firstname ?></span> <span class="lastname"><?php echo $lastname ?></span></span>
                  <a href="mailto:<?php echo $email ?>" id="mail"><?php echo $email ?></a>
                </span>
              </div><!--
        <?php };?>
          <?php
      }
      ?>
    <!-- -->
    </div>
    <div class="crew">
      <h2> Crew </h2>

      <?php
      $users = get_users( array( 'fields' => array( 'ID' ) ) );
      foreach($users as $user){
            $acfI = $user->ID;
            $acfId= 'user_' . $acfI;
            //print_r(get_user_meta ( $user->ID));
            $firstname = get_user_meta ($user->ID, 'first_name', true);
            $lastname = get_user_meta ($user->ID, 'last_name', true);
            $title = get_field('hr_title', $acfId, true);
            $status = get_field('hr_employment_status', $acfId, true);
            $pic = get_field('hr_profile_picture', $acfId, true);
            $bio = get_field('hr_bio', $acfId, true);
            $email = get_field('hr_email', $acfId, true);
            ?>
            <?php if ($status == ('Freelancer')){?>
                <div class="team-member">
                  <div class="featured-image">
                    <span class="bio">
                      <p><?php echo $bio ?></p>
                    </span>
                    <span class="more">les mer</span>
                    <img src="<?php echo $pic ?>">
                  </div>
                  <span class="about">
                    <span class="title"><?php echo $title ?></span>
                    <span class="name"><span class="firstname"><?php echo $firstname ?></span> <span class="lastname"><?php echo $lastname ?></span></span>
                    <a href="mailto:<?php echo $email ?>" id="mail"><?php echo $email ?></a>
                  </span>
                </div>
          <?php };?>
            <?php
        }
        ?>
    </div>
</div>

<!--  GET ALL THE PAGES -->



  <?php
  $args = array('post_type' => 'page'); //declares that we will only be querying the portfolio post type
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
      $category_detail=get_the_category($page_data->ID);
  ?>
  <section class="p-wrap <?php echo $select_format_type?> <?php foreach($category_detail as $cd){ echo $cd->cat_name; echo ' ';}?>" id="<?php echo $post_slug;?>">
    <div class="inner">
      <h1><?php echo $title; ?></h1>
      <!--noindex-->
        <!--googleoff: index-->
          <h2 class="text-fill center robots-nocontent"><?php echo $title; ?></h2>
        <!--googleon: index-->
      <!--/noindex-->
      <div class="text">
        <?php echo $content;?>
      </div>
    </div>
  </section>

  <?php }; ?>




<div class="contact-form">

</div>
<!--<div class="grain"></div>
-->
<script src="<?php bloginfo('template_directory'); ?>/core/js/jq.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/core/js/plyr.js"></script>
<script>
  const players = Array.from(document.querySelectorAll('.js-player')).map(p => new Plyr(p));
</script>
<script src="<?php bloginfo('template_directory'); ?>/core/js/url_handler.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/core/js/scrolled.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/core/js/tilt.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mainJq.js"></script>

<?php $pages = get_pages();foreach ($pages as $page_data) {$post_slug = $page_data->post_name; echo '<style>.p-open.p-'.  $post_slug . ' .p-wrap#' . $post_slug . '{opacity:1;display:block;}</style>' ;}?>

</body>
</html>
