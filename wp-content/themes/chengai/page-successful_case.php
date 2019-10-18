<?php
/*
 * Template Name: successful_case
 * 作者：WordPress花园
 *
 **/
get_header();

$page_banner = get_field('page_banner', get_queried_object_id()) ? get_field('page_banner', get_queried_object_id()) : get_field('page_banner', 'option');

?>

<section id="content">
  <div class="page-top-banner">
    <div class="page-banner-img"
      style="background: url(<?php echo $page_banner?>) no-repeat center center; background-size: cover;">
      <div class="page-title-dec">
        <h1>
          <?php echo get_the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="content-main">
    <div class="successful-case-block">
      <div class="successful-case-content">
        <div class="container">
          <div class="successful-case-info">
            <?php 
            $postArray = array(
              'post_type' => 'business_migrant',
              'posts_per_page' => -1,
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'post_ca',
                  'field'    => 'slug',
                  'terms'    => 'successful-case',
                ),
              ),
            );
            $tag_query = new WP_Query($postArray);
            $caseBool = true;

            if ($tag_query->have_posts()): while ($tag_query->have_posts()): $tag_query->the_post();
            if($caseBool) {
              $caseBool = false;

            
          ?>
          
            <div class="successful-case-dec successful-dec-left">
            <a href="<?php the_permalink();?>">
              <div class="row">
                <div class="col-12 col-md-7 content-dec-img">
                  <div class="successful-case-img">
                    <img
                      src="<?php $img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); echo $img_data[0]?>"
                      alt="successful-case-img">
                  </div>
                </div>
                <div class="col-12 col-md-5 content-dec-block">
                  <div class="content-dec-text">
                    <div class="successful-case-title">
                      <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="successful-case-text">
                      <p class="product-add"><?php _e('申请时间', 'esone'); ?>：<?php the_field('product_add',  get_the_ID()) ?></p>
                      <p class="product-area"><?php _e('取得时间', 'esone'); ?>：<?php the_field('product_area',  get_the_ID()) ?></p>
                      <p class="product-style"><?php _e('审查时间', 'esone'); ?>：<?php the_field('product_style',  get_the_ID()) ?></p>
                      <p class="product-type"><?php _e('公司业务', 'esone'); ?>：<?php the_field('product_type',  get_the_ID()) ?></p>
                    </div>
                    <span class="post-link"><?php _e('View more', 'esone'); ?></span>
                  </div>
                </div>
              </div>
              </a>
            </div>
            
            <?php 
            }else {
              $caseBool = true;

              ?>
              
            <div class="successful-case-dec successful-dec-right">
            <a href="<?php the_permalink();?>">
              <div class="row">
                <div class="col-12 col-md-7 content-dec-img">
                  <div class="successful-case-img">
                    <img
                      src="<?php $img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); echo $img_data[0]?>"
                      alt="successful-case-img">
                  </div>
                </div>
                <div class="col-12 col-md-5 content-dec-block">
                  <div class="content-dec-text">
                    <div class="successful-case-title">
                      <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="successful-case-text">
                      <p class="product-add"><?php _e('申请时间', 'esone'); ?>：<?php the_field('product_add',  get_the_ID()) ?></p>
                      <p class="product-area"><?php _e('取得时间', 'esone'); ?>：<?php the_field('product_area',  get_the_ID()) ?></p>
                      <p class="product-style"><?php _e('审查时间', 'esone'); ?>：<?php the_field('product_style',  get_the_ID()) ?></p>
                      <p class="product-type"><?php _e('公司业务', 'esone'); ?>：<?php the_field('product_type',  get_the_ID()) ?></p>
                    </div>
                    <span class="post-link"><?php _e('View more', 'esone'); ?></span>
                  </div>

                </div>
              </div>
              </a>
            </div>
            
            <?php

            }
          ?>
            <?php 
            endwhile;endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

get_footer();

?>