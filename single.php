<?php
 get_header();
?>

<div class="header">

<?php
	// Start the Loop.
while ( have_posts() ) :
	the_post();
?>

<?php if ( get_field('hide_title')!='True'){?>
  <h1>
    <?php the_title(); ?>
  </h1>
<?php }; ?>

<?php if ( get_field('hide_excerpt')!='True'){?>
  <p class="excerpt">
    <?php
      the_excerpt();
    ?>
  </p>
<?php }; ?>
<?php if ( get_field('hide_credits')!='True'){?>
<p class="credits">
  <?php if( have_rows('credits') ): ?>

    <?php while( have_rows('credits') ): the_row(); ?>
        <span class="credit">
          <?php if( get_sub_field('c_title') ) { ?>
            <?php the_sub_field('c_title'); ?>:
          <?php }; ?>
          <?php if( get_sub_field('extname') ) { ?>
            <?php the_sub_field('extname')?>.
          <?php }; ?>

          <?php if( get_sub_field('intname') ) { ?>
            <?php $args = array(
              'orderby'       => 'name',
              'order'         => 'ASC',
              'number'        => null,
              'optioncount'   => false,
              'exclude_admin' => false,
              'show_fullname' => false,
              'hide_empty'    => false,
              'echo'          => true,
              'style'         => 'none',
              'html'          => true,
              'include'       =>  ); ?>
            <a href="<?php echo get_author_posts_url();?>">
              <?php wp_list_authors( $args ); ?>
            </a>
          <?php }; ?>
        </span>
    <?php endwhile; ?>
  <?php endif; ?>
</p>
<?php }; ?>
<p class="kunde">
  <?php if( get_field('kunde') ) { ?>
    Kunde: <?php the_field('kunde') ?>.
  <?php }; ?>
</p>
</div>
<?php
  the_content();
	endwhile;
?>
<div class="pager">
  <a href="#">
    <div class="previous"></div>
  </a>
  <div class="back">
    <a href="<?php echo get_site_url();?>/prosjekter">
      Tilbake til prosjekter
    </a>
  </div>
  <a href="#">
    <div class="next"></div>
  </a>
</div>
<?php
  get_footer();
?>
