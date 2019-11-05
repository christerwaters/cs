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
    <div class="fruits" data-wtrs-show-on="home">
      <div class="fruit fruit-left" id="one">
        <img src="<?php bloginfo('template_directory'); ?>/media/citrus-fruit-01.png" >
      </div>
      <div class="fruit fruit-left" id="two">
        <img src="<?php bloginfo('template_directory'); ?>/media/citrus-fruit-02.png" >
      </div>
      <div class="fruit fruit-left" id="three">
        <img src="<?php bloginfo('template_directory'); ?>/media/citrus-fruit-01.png" >
      </div>
      <div class="fruit fruit-left" id="four">
        <img src="<?php bloginfo('template_directory'); ?>/media/citrus-fruit-03.png" >
      </div>
      <div class="fruit fruit-right" id="one">
        <img src="<?php bloginfo('template_directory'); ?>/media/citrus-fruit-02.png" >
      </div>
      <div class="fruit fruit-right" id="two">
        <img src="<?php bloginfo('template_directory'); ?>/media/citrus-fruit-01.png" >
      </div>
      <div class="fruit fruit-right" id="three">
        <img src="<?php bloginfo('template_directory'); ?>/media/citrus-fruit-03.png" >
      </div>
      <div class="fruit fruit-right" id="four">
        <img src="<?php bloginfo('template_directory'); ?>/media/citrus-fruit-01.png" >
      </div>
      <div class="fruit fruit-right" id="five">
        <img src="<?php bloginfo('template_directory'); ?>/media/citrus-fruit-02.png" >
      </div>
    </div>
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

<div class="h-p-header" id="home" data-wtrs-show-on="home">
  <div class="text">
    <p class="header-text">
      VI SKAL FORANDRE HVORDAN
    </p>
  </div>
  <video autoplay muted loop>
    <source src="https://cs.wtrs.dev/wp-content/uploads/sites/2/2019/09/Citrus-Studio-Event-001.mp4" type="video/mp4">
  </video>
</div>
<section item-title="" class="p-wrap" data-wtrs-show-on="om-oss">
    <div class="inner">
      <div class="featured-media">
        <video poster="https://cs.wtrs.dev/wp-content/uploads/sites/2/2019/08/Citrus_051.jpg" class="js-player" playsinline controls>
          <source src="https://cs.wtrs.dev/wp-content/uploads/sites/2/2019/08/citrus.mp4" type="video/mp4" />
        </video>
      </div>
      <h1>Om Citrus Studio</h1>
    </div>
  </section>
<div class="entries">
    <?php
    $args = array('post_type' => 'Entries'); //declares that we will only be querying the portfolio post type
    $entries = get_posts( $args );
    foreach ($entries as $entry) {
        $content = apply_filters('the_content', $entry->post_content);
        $title = $entry->post_title;
        $post_slug = $entry->post_name;
        $imageid_full = wp_get_attachment_image_src( get_post_thumbnail_id($entry->ID), 'full' );
        $image_full = $imageid_full['0'];
        $imageid_thumb = wp_get_attachment_image_src( get_post_thumbnail_id($entry->ID), 'thumbnail' );
        $image_thumb = $imageid_thumb['0'];
        $wtrs_entry_type = get_field('wtrs_entry_type',$entry->ID);
        $wtrs_entry_type_video_file_mp4 = get_field('wtrs_entry_type_video_file_mp4',$entry->ID);
        $website_url = get_field('website_url',$entry->ID);
        $wtrs_entry_client = get_field('wtrs_entry_client',$entry->ID);
        $wtrs_tilted = get_field('wtrs_tilted',$entry->ID);
        $wtrs_entry_show_on = strtolower(get_field('wtrs_entry_show_on',$entry->ID));
        $category_detail=get_the_category($entry->ID);
        $post_url = esc_url( get_permalink($entry->ID) );

    ?><div class="entry-wrap <?php echo $wtrs_entry_type; foreach($category_detail as $cd){ echo " ";  echo $cd->slug; echo " ";} ?>"
            id="<?php echo $post_slug;?>"
            data-wtrs-title="<?php echo $post_slug;?>"
            data-wtrs-categories="<?php foreach($category_detail as $cd){ echo " ";  echo $cd->slug; echo " ";} ?>"
            data-wtrs-show-on="<?php echo $wtrs_entry_show_on;?>">
        <div class="entry">
          <a href="<?php echo $post_url;?>" title="<?php echo $title;?>" class="page-anchor">
            <div class="featured-media <?php if ($wtrs_tilted){ echo "tilted";}; ?>" <?php if ($wtrs_tilted){ echo "data-tilt";}; ?>>
              <?php if ($wtrs_entry_type == ('wtrs_entry_type_video')){?>
                <video poster="<?php echo $image_full;?>" class="js-player" loop>
                  <source src="<?php echo $wtrs_entry_type_video_file_mp4;?>" type="video/mp4" />
                </video>
              <?php }; if ($wtrs_entry_type == ('wtrs_entry_type_image')){ ?>
                <img src="<?php echo $image_thumb;?>" data-image-high="<?php echo $image_full;?>">
              <?php }; ?>
            </div>
          </a>
          <a href="<?php echo $post_url;?>" title="<?php echo $title;?>" class="page-anchor">
            <h2 class="entry-title">
              <span class="client"><?php echo $wtrs_entry_client; ?></span>
              <span class="title"><?php echo $title; ?></span>
            </h2>
          </a>
          <div class="entry-content"><?php echo $content; ?></div>
        </div>
    </div><?php }; ?>
    <div class="entry-wrap" data-wtrs-title="team" data-wtrs-categories="" data-wtrs-show-on="team">
    <div class="entry">
        <div class="core">
          <h2> Ledelsen </h2>
          <img src="<?php bloginfo('template_directory'); ?>/media/ledelsen.jpg">
        </div>
        <div class="p-inner crew">
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
                --><div class="team-member p-item">
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
</div>

</div>
<div class="flipper" id="home" data-wtrs-show-on="home">
  <div class="text">
    <div class="line01">vi ønsker å redefinere</div>
    <div class="line02">forholdet mellom kreative</div>
    <div class="line03">aktører. vi ønsker ikke </div>
    <div class="line04">å konkurrere, men </div>
    <div class="line05">å samarbeide.</div>
  </div>
</div>
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
<script src="<?php bloginfo('template_directory'); ?>/core/js/tilt.js"></script>
<script>
  const players = Array.from(document.querySelectorAll('.js-player')).map(p => new Plyr(p));
</script>
<script>var randomize = $(".crew .team-member");</script>
<script src="<?php bloginfo('template_directory'); ?>/core/js/rndm.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/core/js/paging.js"></script>
</body>
</html>
