<!DOCTYPE html>
<html>
  <head>
    <title> <?php $site_title = get_bloginfo('description'); echo $site_title; ?> - <?php $site_name = get_bloginfo( 'name' ); echo $site_name; ?></title> <!-- Set the title of the page, this shows up in google etc. as well -->


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
    <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">



    <?php //include 'ar-head.php'?>

  </head>

  <body class="p-open p-home">
    <div class="loader-left">
      <?php include 'loader.php'?>
    </div>


    <?php //include 'ar.php'?>

    <div class="menu">
      <div class="menu-overlay"></div>
      <div class="logotype menu-hover-trigger">
        <a href="<?php echo get_site_url();?>">
          <span>Citrus Studio</span>
        </a>
      </div>
      <div class="container">
        <nav>
          <ul class="menu-hover-trigger">
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
  <video autoplay muted loop>
    <source src="http://cs.wtrs.dev/wp-content/uploads/sites/2/2019/09/Citrus-Studio-Event-001.mp4" type="video/mp4">
</video>
</div>
<div class="p-wrap" id="events">
  <h2>Vi driver også med eventer</h2>
  <p>Vi gjør mer en å bare lage kuuule musikkvideoer, vi hjelper deg også med å </p>
</div>
<div class="content p-wrap posts" id="home">
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
      $client = get_field('client',$page_data->ID);
      $cat = get_the_category($page_data->ID);
      $category_detail=get_the_category($page_data->ID);
      $post_url = esc_url( get_permalink($page_data->ID) );

  ?><div class="post-wrap <?php foreach($category_detail as $cd){  echo $cd->cat_name; echo " ";} ?>">
    <a href="<?php echo $post_url;?>" title="<?php echo $title;?>">
      <div class="post <?php echo $select_format_type; echo " "; foreach($category_detail as $cd){echo $cd->cat_name; echo " ";} ?> " id="<?php echo $post_slug;?>" data-tilt>
      <div class="featured">
        <?php if ($select_format_type == ('Video')){?>
          <video poster="<?php echo $image_full;?>" class="js-player" loop>
            <source src="<?php echo $video_mp4;?>" type="video/mp4" />
          </video>
        <?php }; if ($select_format_type == ('Image')){ ?>
          <img src="<?php echo $image_full;?>">
        <?php }; ?>
      </div>
      <h2><span class="client"><?php echo $client; ?></span> <span class="title"><?php echo $title; ?></span></h2>
    </div>
  </a>
  </div><?php }; ?>
</div>
<div class="p-wrap" id="team">
  <div class="core">
    <h2> Ledelsen </h2>
    <img src="<?php bloginfo('template_directory'); ?>/media/ledelsen.jpg">
  </div>
  <div class="crew">
    <h2> Crew </h2><!--

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
          ?>
          <?php if ($status == ('Freelancer')){?>
          --><div class="team-member">
                <div class="featured-image">
                  <img src="<?php echo $pic ?>">
                </div>
                <span class="about">
                  <span class="title"><?php echo $title ?></span>
                  <span class="name"><span class="firstname"><?php echo $firstname ?></span> <span class="lastname"><?php echo $lastname ?></span></span>
                </span>
              </div><!--
        <?php };?>
          <?php
      }
      ?>
      <!-- -->
      <div class="join-us">
        <div class="featured-image">
          <img src="<?php bloginfo('template_directory'); ?>/media/join.jpg">
        </div>
        <span class="about">
          <span class="title">Det du liker</span>
          <span class="name">Ditt navn</span>
        </span>
      </div>
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


  ?>
  <section class="p-wrap <?php echo $select_format_type?>" id="<?php echo $post_slug;?>">
    <?php if ($select_format_type == ('Video')){?>
      <div class="inner">
        <div class="featured-media">
          <video poster="<?php echo $image_full;?>" class="js-player" playsinline controls tilt>
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
    <?php } else {?>
      <h1><?php echo $title; ?></h1>
    <?php };?>
      <div class="text">
        <?php echo $content;?>
      </div>
  </section>

  <?php }; ?>

  <div class="foot">
    <div class="foot-inner">
      <div class="foot-left">
        © Citrus Studio
      </div>
      <div class="foot-right">
        <span class="contact-btn">
          <a href="<?php echo get_site_url();?>/om-oss#kontakt"> Kontakt Oss</a>
        </span>
      </div>
    </div>
  </div>
<script>
  var siteTitle = "<?php echo $site_title;?>";
  var siteName = "<?php echo $site_name;?>";

</script>
<script src="<?php bloginfo('template_directory'); ?>/core/js/jq.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/core/js/plyr.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/core/js/tilt.jq.js"></script>
<script>
  const players = Array.from(document.querySelectorAll('.js-player')).map(p => new Plyr(p));
</script>
<script>var randomize = $(".crew .team-member");</script>
<script src="<?php bloginfo('template_directory'); ?>/core/js/rndm.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mainJq.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/core/js/url_handler.js"></script>

<?php $pages = get_pages();foreach ($pages as $page_data) {$post_slug = $page_data->post_name; echo '<style>.p-open.p-'.  $post_slug . ' .p-wrap#' . $post_slug . '{opacity:1;display:block;}</style>' ;}?>


</body>
</html>
