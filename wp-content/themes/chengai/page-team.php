<?php
/*
 * Template Name: team
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
    <div class="page-team-block">
      <div class="page-team-content">
        <div class="container"> 
          <div class="row">
            
              <?php 
                $team_data = get_field('team_block',  get_queried_object_id());
                foreach($team_data as $data_list) {
              ?>
              <div class="col-12 col-md-4">
              <div class="team team-content">
                <div class="team-image">
                  <img src="<?php echo $data_list['tema_img'] ?>" alt="<?php echo $data_list['tema_name'] ?>">
                </div>
                <div class="team-desc">
                  <div class="team-title">
                      <span><?php echo $data_list['team_position'] ?></span>
                      <h4><?php echo $data_list['tema_name'] ?></h4>
                  </div>
                </div>
              </div>
              </div>
              <?php 
                }
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