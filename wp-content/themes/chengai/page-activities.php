<?php 

/* 
 *
 * Template Name: activity
 * 作者：WordPress花园
 * 
 */
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
  <div class="post-activiries-block">
    <div class="post-activiries-content">
      <div class="container">
      <div class="row">
          <?php 
            $postArray = array(
              'post_type' => 'post_activity',
              'posts_per_page' => -1,
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC',
            );
            $tag_query = new WP_Query($postArray);
            if ($tag_query->have_posts()): while ($tag_query->have_posts()): $tag_query->the_post();

            get_template_part('template-parts/page/page-activities-template', get_post_format());
           endwhile;endif;
          ?>
        </div>
      </div>
    </div>
  </div>
  </section>

<?php 
get_footer();
?>