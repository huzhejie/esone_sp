<?php

$post_excerpt = '';
if (get_post()->post_excerpt) {
    $post_excerpt = get_post()->post_excerpt;
} else {
    $post_excerpt = substr(get_post()->post_content, 0, 241) . '......';
}
$term_list = wp_get_post_terms(get_the_ID(), 'encyclopedia_house_ca', array("fields" => "all"));

$img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
?>
<a href="<?php the_permalink();?>">
<div class="page-encyclopedias-dec" data-posttype="<?php echo $term_list[0]->term_taxonomy_id; ?>">
  <div class="row">
    <div class="col-12 col-md-3">
      <div class="page-encyclopedias-img">
        <div class="post-img-info" style='background: #fff url(<?php echo $img_data[0] ?>) no-repeat center center;background-size: cover;'></div>
      </div>
    </div>
    <div class="col-12 col-md-9">
      <div class="page-encyclopedias-info">
        <div class="encyclopedias-title-block">
          <h3><?php the_title()?></h3>
          <p><?php echo get_the_date('Y-m-d l'); ?></p>
        </div>
        <div class="encyclopedias-info-block">
          <p><?php echo $post_excerpt ?><span class="post-link"><?php _e('View more', 'esone'); ?></span></p>
        </div>
      </div>
    </div>
  </div>
</div>
</a>