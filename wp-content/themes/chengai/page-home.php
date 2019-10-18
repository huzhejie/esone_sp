<?php

/**
 * Template name: Home
 * 作者：WordPress花园
 */

get_header();

$house = new FilterInfo();
?>
    <script type="text/javascript">
        var bgimg = document.getElementsByClassName("slotholder");
        function setInnerTitle(){
            for(var i = 0;i<bgimg.length;i++){
                var img = bgimg[i];
                img.innerHTML = "<div class='home-title'><span>ESTATE ONE</span></div><div class='home-title-small'><span>不動産を通じて日本から世界へ</span></div>"
            }
        }
    </script>
    <section id="slider" class="slider-element revslider-wrap clearfix" xmlns:http="http://www.w3.org/1999/xhtml"
             xmlns:http="http://www.w3.org/1999/xhtml" xmlns:http="http://www.w3.org/1999/xhtml">
        <div class="slider-parallax-inner">
            <?php echo do_shortcode("[rev_slider alias='".get_field("home_slider", "option")."']"); ?>
        </div>

    </section>

<?php
global $sitepress; $current_lang = $sitepress->get_current_language();
if($current_lang !== "ja") {
    ?>
    <div class="city-info-block"
         style="background-color:#d8d8d8; no-repeat center center; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="city-info-lists" data-type="city">
                <div id="city-info" class="owl-carousel portfolio-carousel portfolio-nomargin carousel-widget" data-margin="1"
                     data-nav="false" data-pagi="false" data-autoplay="None" data-items-xs="1" data-items-sm="3" data-items-md="4"
                     data-items-xl="7">
                    <?php
                    $postArray = array(
                        'post_type' => 'city',
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                        'post_parent' => 0,
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    );

                    $tag_query = new WP_Query($postArray);
                    if ($tag_query->have_posts()) {
                        while ($tag_query->have_posts()) {
                            $tag_query->the_post();
                            $alt = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);

                            ?>
                            <div class="oc-item city-info-target" data-target="<?php $alt ? print_r('city-name-' . $alt) : '';?>">
                                <div class="city-info-lists" data-value="<?php echo get_the_ID() ?>"
                                     data-type="<?php echo get_post_type(); ?>">
                                    <a href="javascript:;" target="_blank" class="city-lists-js" data-value="<?php echo get_the_ID() ?>">
                                        <div class="city-info-text">
                                            <img src="<?php the_field('city_icon', get_the_ID())?>" alt="icon">
                                            <div class="city-info-background"></div>
                                            <p class="city-title">
                                                <?php echo get_the_title() ?>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                    }

                    ?>
                </div>

                <div class="city-dec-block">
                    <?php
                    $postArray = array(
                        'post_type' => 'city',
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                        'post_parent' => 0,
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    );

                    $tag_query = new WP_Query($postArray);
                    if ($tag_query->have_posts()) {
                        while ($tag_query->have_posts()) {
                            $tag_query->the_post();
                            $img_data = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $alt = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);
                            ?>
                            <div class="city-dec-info <?php $alt ? print_r('city-name-' . $alt) : '';?>">
                                <div class="city-dec-content">
                                    <div class="city-dec-img">
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full') ?>
                                    </div>
                                    <div class="city-dec-text">
                                        <?php the_content();?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
}
?>
    <section id="content">
        <?php
        global $sitepress; $current_lang = $sitepress->get_current_language();
        ?>

        <div id="home_page_content" class="content-wrap" <?php if($current_lang === "ja") { echo 'style="padding: 0;"'; }?>>

            <?php global $sitepress; $current_lang = $sitepress->get_current_language();
            if($current_lang === "zh-hans") {
                ?>
                <div class="select-pro-block">
                    <div class="container">
                        <div class="pro-block-info">
                            <div class="pro-block-title page-title">
                                <h1 class="pro-title-info page-title-info"><?php _e('精选房源', 'esone');?></h1>
                                <p class="pro-title-dec page-title-dec"><?php _e('即时更新房源', 'esone');?></p>
                            </div>
                        </div>

                        <div class="house-info-list">
                            <ul class="house-ca-lists col-sm">
                                <li class="active"><?php _e('最新房源', 'esone');?></li>
                                <?php echo $house->get_house_filter_list('house_type') ?>
                            </ul>

                            <div class="house-info-block">
                                <div class="house-block-list">
                                    <?php
                                    global $sitepress;
                                    $current_lang = $sitepress->get_current_language(); //save current language
                                    // $sitepress->switch_lang($new_lang);
                                    //...run query here; if you use WP_Query or get_posts make sure you set suppress_filters=0 ...
                                    $sitepress->switch_lang($current_lang); //restore previous language
                                    $postArray = array(
                                        'post_type' => 'sellhouse',
                                        'posts_per_page' => 8,
                                        'post_status' => 'publish',
                                        'orderby' => 'date',
                                        'order' => 'ASC',
                                    );
                                    $tag_query = new WP_Query($postArray);
                                    if ($tag_query->have_posts()): while ($tag_query->have_posts()): $tag_query->the_post();
                                        ?>

                                        <div class="house-list-info col-md-3 col-sm-12 col-12">
                                            <a href="<?php the_permalink();?>">
                                                <div class="house-list-dec">
                                                    <img src="<?php $img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                                                    echo $img_data[0]?>" alt="house_img">

                                                    <div class="house-dec-block">
                                                        <p class="house-dec-mon">
                        <span class="dec-mon-info">￥
                          <?php $price_num = (int) get_field('total_price', get_the_ID()); echo $house->house_price_num($price_num)._e('日元', 'esone');?>
                        </span>
<!--                                                            <span class="dec-year-info">-->
<!--                          --><?php //echo get_the_date('Y-m-d'); ?><!--</span>-->
                                                        </p><hr class="house-info-hr">
                                                        <div class="house-info-dec">
                        <span>
                          <?php get_field('door_model', get_the_ID()) ? the_field('door_model', get_the_ID()) : print_r('-')?></span>|
                                                            <span>
                          <?php get_field('house_area', get_the_ID()) ? print_r(get_field('house_area', get_the_ID()) . 'm<sup>2</sup>') : '-'?></span>|
                                                            <span>
                          <?php get_field('building_age', get_the_ID()) ? the_field('building_age', get_the_ID()) : print_r('-')?></span>|
                                                            <span>
                          <?php get_field('house_floor', get_the_ID()) ? print_r(the_field('house_floor', get_the_ID()) . _e('层', 'esone')) : print_r('-')?></span>|
                                                            <span><?php _e('年收益率', 'esone');?>
                          <i><?php get_field('annual_return', get_the_ID()) ? the_field('annual_return', get_the_ID()) : print_r('-')?>%</i></span>
                                                        </div>
                                                        <p class="house-info-link">
                                                            <?php _e('View more', 'esone');?>>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                    endwhile;endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php     }?>

            <?php
            global $sitepress; $current_lang = $sitepress->get_current_language();
            if($current_lang !== "ja") {
                ?>
                <div class="news-info-block">
                    <div class="container">
                        <div class="news-block-info">
                            <div class="news-block-title page-title">
                                <h1 class="news-title-info page-title-info"><?php _e('新闻资讯', 'esone');?></h1>
                                <p class="news-title-dec page-title-dec"><?php _e('了解最新的日本购房资讯', 'esone');?></p>
                            </div>
                        </div>
                        <div class="news-block-contain">
                            <div class="news-contain-top">
                                <div class="news-ca-touzi col col-md-7 col-sm-12 col-12">
                                    <?php
                                    $category_id = get_category_by_slug('investment-briefing')->cat_ID;
                                    $category_link = get_category_link($category_id);
                                    $postArray = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 2,
                                        'cat' => array(5),
                                        'orderby' => 'date',
                                        'order' => 'ASC',
                                    );
                                    $tag_query = new WP_Query($postArray);

                                    if ($tag_query->have_posts()) {
                                    ?>
                                    <div class="ca-touzi-title">
                <span>
                  <?php $thiscat = get_category($postArray['cat'][0]); echo $thiscat->name;?>
                </span>
                                        <a href="<?php echo $category_link ?>"><?php _e('View more', 'esone');?>></a>
                                    </div>
                                    <div class="ca-touzi-info">
                                        <?php
                                        while ($tag_query->have_posts()) {
                                            $tag_query->the_post();
                                            ?>
                                            <div class="ca-touzi-block col-sm-6 col-12" data-value="<?php echo the_ID() ?>">
                                                <a href="<?php the_permalink();?>" target="_blank">
                                                    <img
                                                            src="<?php $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); echo $full_image_url[0]?>"
                                                            alt="">
                                                    <p>
                                                        <?php the_title()?>
                                                    </p>
                                                </a>
                                            </div>
                                            <?php
                                        }
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="news-ca-goufang col-md-5 col-sm-12">
                                    <?php
                                    $category_id = get_category_by_slug('purchase-information')->cat_ID;
                                    $category_link = get_category_link($category_id);
                                    $postArray = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 2,
                                        'cat' => array(1),
                                        'orderby' => 'date',
                                        'order' => 'ASC',
                                    );
                                    $tag_query = new WP_Query($postArray);

                                    if ($tag_query->have_posts()) {
                                    ?>
                                    <div class="ca-goufang-title">
                                        <span><?php $thiscat = get_category($postArray['cat'][0]); echo $thiscat->name;?></span>
                                        <a href="<?php echo $category_link ?>"><?php _e('View more', 'esone');?>></a>
                                    </div>
                                    <div class="ca-goufang-info">
                                        <?php
                                        while ($tag_query->have_posts()) {
                                            $tag_query->the_post();
                                            ?>
                                            <div class="ca-goufang-block col-sm-6 col-12" data-value="<?php echo the_ID() ?>">
                                                <a href="<?php the_permalink();?>" target="_blank">
                                                    <img
                                                            src="<?php $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); echo $full_image_url[0]?>"
                                                            alt="">
                                                    <p>
                                                        <?php the_title()?>
                                                    </p>
                                                </a>
                                            </div>
                                            <?php
                                        }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="news-contain-bottom">
                                <div class="news-ca-riben">
                                    <?php
                                    $category_id = get_category_by_slug('into-japanese')->cat_ID;
                                    $category_link = get_category_link($category_id);
                                    $postArray = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 3,
                                        'cat' => array(7),
                                        'orderby' => 'date',
                                        'order' => 'ASC',
                                    );
                                    $tag_query = new WP_Query($postArray);

                                    if ($tag_query->have_posts()) {
                                    ?>
                                    <div class="ca-riben-title col-sm">
                                        <?php $thiscat = get_category($postArray['cat'][0]);
                                        echo $thiscat->name;?>
                                    </div>
                                    <div class="ca-riben-info">
                                        <?php
                                        while ($tag_query->have_posts()) {
                                            $tag_query->the_post();
                                            ?>
                                            <div class="ca-riben-block col col-md-4 col-sm-12 col-12" data-value="<?php echo the_ID() ?>">
                                                <a href="<?php the_permalink();?>" target="_blank">
                                                    <img src="<?php $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                                    echo $full_image_url[0]?>" alt="">
                                                    <p>
                                                        <span><?php the_title()?></span>
                                                    </p>
                                                </a>
                                            </div>
                                            <?php
                                        }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <?php
            global $sitepress; $current_lang = $sitepress->get_current_language();
            if($current_lang !== "ja") {
                ?>
                <div class="kk-info-block">
                    <div class="container">
                        <div class="kk-block-info">
                            <div class="kk-block-title page-title">
                                <h1 class="kk-title-info page-title-info"><?php _e('株式会社エステート・ワン', 'esone');?></h1>
                                <p class="kk-title-dec page-title-dec"><?php _e('为客户提供最优质的投资置业服务', 'esone');?></p>
                            </div>
                        </div>

                        <div class="kk-block-contain">
                            <div class="row">
                                <?php
                                $kkLogos = get_field('kk_logo', get_queried_object_id());
                                if ($kkLogos) {
                                    foreach ($kkLogos as $i) {
                                        ?>
                                        <div class="kk-logo-lists col-6 col-md-3 col-sm-6">
                                            <img src="<?php echo $i['kk_icon'] ?>" alt="kklogo">
                                            <p>
                                                <?php echo $i['kk_title'] ?>
                                            </p>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php
            global $sitepress; $current_lang = $sitepress->get_current_language();

            ?>
            <div class="contact-info-block"
                 style="background: url(<?php the_field('contact_us_banner', get_queried_object_id())?>) no-repeat center center; background-size: cover;">
                <div class="container">
                    <div class="contact-block-info">
                        <div class="contact-block-title page-title">
                            <h1 class="contact-title-info page-title-info"><?php _e('联系我们', 'esone');?></h1>
                            <p class="contact-title-dec page-title-dec"><?php _e('为客户提供最优质的投资置业服务', 'esone');?></p>
                        </div>
                    </div>

                    <div class="contact-block-contain">
                        <div class="row">
                            <div class="home-contact-form">
                                <div class="home-contact-form-content">
                                    <?php echo do_shortcode("[gravityform id='". get_field("home_contact_form", "option") ."' title='false' description='false' ajax='true']"); ?>
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