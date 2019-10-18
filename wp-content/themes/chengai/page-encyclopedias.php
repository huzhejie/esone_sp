<?php
/*
 * Template Name: encyclopedias
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
        <h1 style="text-shadow: 0 0 0.2em black">
          <?php echo get_the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="content-main">
    <div class="page-encyclopedias-block">
      <div class="page-encyclopedias-content">
        <div class="container">
          <div class="tabs tabs-bb clearfix" id="encyclopedias-tabs">

            <ul class="tab-nav clearfix">
              <?php 
              
              
                // $taxonomies=get_taxonomies('','names');
                // $data = wp_get_post_terms(get_the_ID(), $taxonomies,  array("fields" => "all"));
                // var_dump($data);
                $encyclopedia_arr = get_terms('encyclopedia_house_ca', array('hide_empty' => false));

                foreach($encyclopedia_arr as $i) {
                
              ?>
              <li class="tab-nav-items" data-id="<?php echo $i->term_id ?>">
                <a href="#<?php echo $i->slug ?>"><?php echo $i->name ?></a>
              </li>
              
              <?php 
                }
              ?>
            </ul>

            <div class="tab-container">

              <div class="tab-content clearfix" id="basic-knowledge">
                <?php 
                  $postArray = array(
                    'post_type' => 'encyclopedia_house',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'encyclopedia_house_ca',
                        'field' => 'term_id',
                        'terms' => array(18),
                      ),
                    ),

                  );
                  $tag_query = new WP_Query($postArray);
                  if ($tag_query->have_posts()): while ($tag_query->have_posts()): $tag_query->the_post();
                  get_template_part('template-parts/page/page-encyclopedias-template', get_post_format());

                endwhile;endif;
                ?>
              </div>

              <div class="tab-content clearfix" id="investment-tips">
                <?php 
                  $postArraya = array(
                    'post_type' => 'encyclopedia_house',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'encyclopedia_house_ca',
                        'field' => 'term_id',
                        'terms' => array(19),
                      ),
                    ),

                  );
                  $tag_querya = new WP_Query($postArraya);
                  if ($tag_querya->have_posts()): while ($tag_querya->have_posts()): $tag_querya->the_post();
                  get_template_part('template-parts/page/page-encyclopedias-template', get_post_format());

                endwhile;endif;
                ?>
              </div>
              <div class="tab-content clearfix" id="purchase-related">
                <?php 
                  $postArrayb = array(
                    'post_type' => 'encyclopedia_house',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'encyclopedia_house_ca',
                        'field' => 'term_id',
                        'terms' => array(20),
                      ),
                    ),

                  );
                  $tag_queryb = new WP_Query($postArrayb);
                  if ($tag_queryb->have_posts()): while ($tag_queryb->have_posts()): $tag_queryb->the_post();
                  get_template_part('template-parts/page/page-encyclopedias-template', get_post_format());

                endwhile;endif;
                ?>
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