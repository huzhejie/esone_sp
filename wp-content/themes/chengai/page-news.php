<?php
/*
 * Template Name: news
 * 作者：WordPress花园
 *
 **/
get_header();

$page_banner = get_field('page_banner', get_queried_object_id()) ? get_field('page_banner', get_queried_object_id()) : get_field('page_banner', 'option');

?>

<section id="content">
  <div class="page-top-banner">
    <div class="page-banner-img"
      style="background: url(<?php echo $page_banner ?>) no-repeat center center; background-size: cover;">
      <div class="page-title-dec">
        <h1 style="text-shadow: 0 0 0.2em black">
          <?php echo get_the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="content-main">
    <div class="page-news-block">
      <div class="page-news-content">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-9">
              <div class="page-news-info">
              
                <?php
                  $postArray = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                    'paged' => 1,
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                  );
                  $tag_query = new WP_Query($postArray);
      
                  $caseBool = true;
      
      
                  if ($tag_query->have_posts()): while ($tag_query->have_posts()): $tag_query->the_post();
                  get_template_part('template-parts/page/post_news_template', get_post_format());
                  endwhile;
                  endif;
                ?>
              </div>
              <ul id="pagedNews" class="post_paged_list pagination" data-num="<?php echo $tag_query->found_posts ?>">
              </ul>
            </div>
            <div class="col-12 col-md-3">
              <div class="sidebar clearfix">
                <?php dynamic_sidebar('sidebar-1');?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

get_footer();

?>