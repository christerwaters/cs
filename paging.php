<style>
<?php
$args = array('post_type' => 'portfolio');
$portfolio_items = get_posts( $args );
foreach ($portfolio_items as $page_data) {
    $post_slug = $page_data->post_name;

?>
.p-open.p-work-<?php echo $post_slug;?> .h-p-header{ display:none;}
.p-open.p-work-<?php echo $post_slug;?> .content.p-wrap.posts#home{
  display:block;
  height:auto;
  opacity:1;
  padding-top:0;
  margin:auto;
  width:100%;
  max-width:1100px;
}
.p-open.p-work-<?php echo $post_slug;?> .post-wrap#<?php echo $post_slug;?>{
  display:block;
}
.p-open.p-<?php echo $post_slug;?> .p-wrap#<?php echo $post_slug;?>{
  display:block;
  height:auto;
  margin: auto;
  overflow:auto;
  opacity:1;
}
<?php }; ?>
</style>
