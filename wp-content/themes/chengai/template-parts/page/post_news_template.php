<?php 
$post_excerpt = '';
if (get_post()->post_excerpt) {
    $post_excerpt = substr(get_post()->post_excerpt, 0, 241) . '......';
}

$img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
<a href="<?php echo get_the_permalink();?>" class="post-target-link">
<div class="post-activiries-dec" data-value="<?php echo get_the_ID() ?>" data-posttype="<?php echo get_post_type() ?>">
  <div class="row">
    <div class="col-12 col-md-5">
      <div class="post-activiries-img" >
        <div class="post-img-info" style='background: #fff url(<?php echo $img_data[0] ?>) no-repeat center center;background-size: cover;'></div>
      </div>
    </div>
    <div class="col-12 col-md-7">
      <div class="post-activiries-info">
        <div class="activiries-title-block">
          <h3><?php the_title() ?></h3>
          <p><?php echo get_the_date('Y-m-d l'); ?></p>
        </div>
        <div class="activiries-info-block">
          <?php echo $post_excerpt; ?>
        </div>
        <span class="post-link"><?php _e('View more', 'esone'); ?></span>
      </div>
    </div>
  </div>
</div>
</a>
