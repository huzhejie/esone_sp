<?php 
/* 
 * Template Name: flows
 * 作者：WordPress花园
 * 
**/
get_header();
$page_banner = get_field('page_banner', get_queried_object_id()) ? get_field('page_banner', get_queried_object_id()) : get_field('page_banner', 'option');
?>

<section id="content">
<div class="page-top-banner">
    <div class="page-banner-img" style="background: url(<?php echo $page_banner;?>) no-repeat center center; background-size: cover;">
      <div class="page-title-dec">
        <h1 style="text-shadow: 0 0 0.2em black"><?php echo get_the_title();?></h1>
      </div>
    </div>
  </div>
<div class="content-main">
  <div class="flows-lists-block">
    <div class="flows-lists-content">
      <div class="container">
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="flows-lists-title">
            <?php the_field('flows_title', get_queried_object_id())?>
          </div>
          <div class="flows-lists-info">
            <p class="lists-ol-title">
            <?php _e('具体流程如下', 'esone') ?>：
            </p>
            <ol class="flows-list-ol">
              <?php 
                $flow_data =  get_field('flows_lists', get_queried_object_id());
                $flow_order = 0;
                foreach($flow_data as $data_list) {
                  $flow_order += 1;
              ?>
              <li class="flows-list-dedc" data-order="<?php echo $flow_order ?>">
                <h4><?php echo $data_list['title'] ?></h4>
                <?php echo $data_list['info'] ?>
              </li>
              <?php } ?>
            </ol>
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