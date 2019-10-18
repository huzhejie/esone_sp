<?php
/*
 * Template name: houseList
 **/
get_header();

$abc = new FilterInfo();
$exchangeRate = 16.114;
$page_banner = get_field('page_banner', get_queried_object_id()) ? get_field('page_banner', get_queried_object_id()) : get_field('page_banner', 'option');
?>


<section id="content" class="listing-page-content">
  <div class="page-top-banner">
    <div class="page-banner-img" style="background: url(<?php echo $page_banner ?>) no-repeat center center; background-size: cover;">
      <div class="page-title-dec">
        <h1>
          <?php echo get_the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="content-wrap">
    <div class="container">
      <div class="listing-screening-block">

        <div class="filter-lists-info">
          <ul data-type="house_type" class="ajax-query-field">
            <li class="all_house active" data-vale=" "><?php _e('全部类型', 'esone');?></li><?php echo $abc->get_house_filter_list('house_type') ?>
          </ul>
        </div>

        <div class="filter-lists-info">
          <ul data-type="city" class="ajax-query-field city_list">
            <li class="all_house active"><?php _e('日本', 'esone');?></li><?php echo $abc->get_house_filter_list('city') ?>
          </ul>
        </div>

        <div class="filter-lists-info">
          <ul data-type="cityChildren" class="ajax-query-field city-children">
            <li class="all_house active"><?php _e('所有市区', 'esone');?></li>
          </ul>
        </div>
        <div class="filter-lists-info">
          <ul data-type="house_area" class="ajax-query-field">
            <li class="all_house active"><?php _e('不限面积', 'esone');?></li><?php echo $abc->get_house_config_list('house_area') ?>
          </ul>
        </div>
        <div class="filter-lists-info">
          <ul data-type="total_price" class="ajax-query-field">
            <li class="all_house active"><?php _e('不限价格', 'esone');?></li><?php echo $abc->get_house_config_list('house_price') ?>
          </ul>
        </div>
        <div class="filter-lists-info">
          <ul data-type="room_number" class="ajax-query-field">
            <li class="all_house active"><?php _e('所有房型', 'esone');?></li><?php echo $abc->get_house_filter_list('room_number') ?>
          </ul>
        </div>
        <div class="filter-lists-info">
          <ul data-type="house_state" class="ajax-query-field">
            <li class="all_house active"><?php _e('房源类型', 'esone');?></li><?php echo $abc->get_house_filter_list('house_state') ?>
          </ul>
        </div>
      </div>


      <div class="house-main">
        <div class="house-main-lists">
          <?php
            $postArray = array(
                'post_type' => 'sellhouse',
                'posts_per_page' => 5,
                'paged' => 1,
                'post_status' => 'publish',
                'meta_query' => array(
                    'relation' => 'AND',
                    'total_price' => array(
                        'key' => 'total_price',
                        'type' => 'numeric',
                    ),
                    'house_area' => array(
                        'key' => 'house_area',
                        'type' => 'numeric',
                    ),
                ),
                'orderby' => array(
                    'date' => 'DESC',
                ),

            );

            $tag_query = new WP_Query($postArray);
            $num = 0;
            if ($tag_query->have_posts()) {
            set_query_var('num', $tag_query->found_posts);
          ?>
          <div class="house-main-top">
            <div class="house-top-info">
              <div class="house-order-lists">
                <ul class="house-order-menu">
                  <li class="house-order-title">
                    <span><?php _e('排序方式', 'esone');?> </span>
                  </li>
                  <li class="house-order-info" data-type="total_price">
                    <span><?php _e('价格', 'esone');?></span>
                    <span class="order-icon">
                      <i class="fa fa-angle-up"></i>
                      <i class="fa fa-angle-down"></i>
                    </span>
                  </li>
                  <li class="house-order-info" data-type="house_area">
                    <span><?php _e('面积', 'esone');?></span>
                    <span class="order-icon">
                      <i class="fa fa-angle-up"></i>
                      <i class="fa fa-angle-down"></i>
                    </span>
                  </li>
                  <li class="house-order-info" data-type="annual_return">
                    <span><?php _e('年化收益', 'esone');?></span>
                    <span class="order-icon">
                      <i class="fa fa-angle-up"></i>
                      <i class="fa fa-angle-down"></i>
                    </span>
                  </li>
                </ul>
              </div>
              <div class="house-num">
                <span class="house-num-all">
                  <?php echo $tag_query->found_posts ?></span>
                  <span><?php _e('套', 'esone');?></span>
              </div>
            </div>
          </div>
          <div class="house-lists-block">
            <div class="house-lists-info">
              <?php
                          global $sitepress;
                          $current_lang = $sitepress->get_current_language(); //save current language
                          // $sitepress->switch_lang($new_lang);
                          //...run query here; if you use WP_Query or get_posts make sure you set suppress_filters=0 ... 
                          $sitepress->switch_lang($current_lang); //restore previous language
                while ($tag_query->have_posts()) {
                        $tag_query->the_post();
                        get_template_part('template-parts/house/houseList', get_post_format());
                    }
                }
                ?>
            </div>
          <ul id="pagedHouse" class="post_paged_list pagination" data-num="<?php echo $tag_query->found_posts ?>"></ul>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php
get_footer();
?>