<?php $img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');?>
<div class="col-12 col-sm-6 col-md-4">
  <a href="<?php the_permalink();?>" class="post-activiries-links">
    <div class="post-activiries-dec">

      <div class="post-activiries-img">
          <div class="post-img-info" style='background: #fff url(<?php echo $img_data[0] ?>) no-repeat center center;background-size: cover;'></div>

      </div>

      <div class="post-activiries-info">
        <div class="activiries-title-block">
          <h4 style="font-size:14px"><?php the_title()?></h4>
        </div>
      </div>

    </div>
  </a>
</div>