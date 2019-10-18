<?php
/*
 * Template Name: Immigration_plan
 * 作者：WordPress花园
 *
 **/
get_header();

$page_banner = get_field('page_banner', get_queried_object_id()) ? get_field('page_banner', get_queried_object_id()) : get_field('page_banner', 'option');

?>

<section id="content">
  <div class="page-top-banner">
    <div class="page-banner-img" style="background: url(<?php echo $page_banner?>) no-repeat center center; background-size: cover;">
      <div class="page-title-dec">
        <h1 style="text-shadow: 0 0 0.2rem black">
          <?php echo get_the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="content-main">
  <div class="Immigration-plan-block">
      <div class="Immigration-plan-content">
      <div class="container">
          <div class="Immigration-plan-info">
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
                  'terms'    => 'Immigration-plan',
                ),
              ),
            );
            $tag_query = new WP_Query($postArray);
            $caseBool = true;

            if ($tag_query->have_posts()): while ($tag_query->have_posts()): $tag_query->the_post();
            if($caseBool) {
              $caseBool = false;

            
          ?>
          
                      <div class="Immigration-plan-dec Immigrationl-dec-left">
                      <a href="<?php the_permalink();?>">
              <div class="row">
              <div class="col-12 col-md-7 content-dec-img">
                  <div class="Immigration-plan-img">
                    <img src="<?php $img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); echo $img_data[0]?>" alt="Immigration-plan-img">
                  </div>
                </div>
                <div class="col-12 col-md-5 content-dec-block">
                  <div class="content-dec-text">
                    <div class="Immigration-plan-title">
                      <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="Immigration-plan-text">
                    <?php the_excerpt() ?>
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
              
                          <div class="Immigration-plan-dec Immigrationl-dec-right">
                          <a href="<?php the_permalink();?>">
              <div class="row">
              <div class="col-12 col-md-7 content-dec-img">
                  <div class="Immigration-plan-img">
                    <img src="<?php $img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); echo $img_data[0]?>" alt="Immigration-plan-img">
                  </div>
                </div>
                <div class="col-12 col-md-5 content-dec-block">
                  <div class="content-dec-text">
                    <div class="Immigration-plan-title">
                      <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="Immigration-plan-text">
                    <?php the_excerpt() ?>
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