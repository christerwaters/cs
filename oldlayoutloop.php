
<section class="portfolio-item <?php echo $select_format_type;?> <?php echo $category[0]->cat_name;?>" id="<?php echo $post_slug;?>">
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
