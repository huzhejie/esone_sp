<?php

$abc = new FilterInfo();
$exchangeRate = get_field('exchange_rate', 'option');
$num = get_query_var('num');
?>

<div class="house-info-block" data-num="<?php echo $num ?>">
    <div class="house-info-dec row">
        <a href="<?php the_permalink();  ?>" class="col-12 col-md-4"><img
                    src="<?php $img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); echo $img_data[0]?>"
                    alt="houseIMG" class="house-info-img"></a>
        <div class="house-dec-block col-12 col-md-8">
            <div class="house-dec-title row">
                <div class="house-title col-12 col-md-8">
                    <div class="house-title-info">
                        <h2>
                            <a href="<?php the_permalink();  ?>"><?php the_title()?></a>
                        </h2>
                        <p>
                            <?php _e('挂牌时间','esone'); ?>
                            <?php the_field('for_time', get_the_ID()) ?>
                        </p>
                    </div>
                    <div class="house-dec-info">
                        <ul class="house-dec-menu row">
                            <li class="col-12 col-md-6">
                                <span><?php _e('居住地','esone'); ?></span>
                                <span>
              <?php get_field('house_address', get_the_ID()) ? the_field('house_address', get_the_ID()) : print_r('---'); ?></span>
                            </li>
                            <li class="col-12 col-md-6">
                                <span><?php _e('登陆日','esone'); ?></span>
                                <span>
            <?php echo get_the_date('Y-m-d'); ?></span>
                            </li>
                            <li class="col-12 col-md-6">
                                <span><?php _e('建筑结构','esone'); ?></span>
                                <span>
              <?php get_field('building_structure', get_the_ID()) ? the_field('building_structure', get_the_ID()) : print_r('---');?>
                            </li>
                            <li class="col-12 col-md-6">
                                <span><?php _e('价格','esone'); ?></span>
                                <span>
              <?php $price_num ? print_r($abc->house_price_num($price_num) . _e('日元','esone') ) : print_r('-');?></span>
                            </li>
                            <li class="col-12 col-md-6">
                                <span><?php _e('建筑年龄','esone'); ?></span>
                                <span>
              <?php get_field('building_age', get_the_ID()) ? the_field('building_age', get_the_ID()) . _e('年','esone') : print_r('---'); ?></span>
                            </li>
                            <li class="col-12 col-md-6">
                                <span><?php _e('房间','esone'); ?></span>
                                <span>
              <?php get_field('door_model', get_the_ID()) ? the_field('door_model', get_the_ID()) : print_r('---'); ?></span>
                            </li>
                            <li class="col-12 col-md-6">
                                <span><?php _e('楼层','esone'); ?></span>
                                <span>
              <?php get_field('house_floor', get_the_ID()) ? the_field('house_floor', get_the_ID())._e('层','esone') : print_r('---'); ?></span>
                            </li>
                            <li class="col-12 col-md-6">
                                <span><?php _e('面积','esone'); ?>(m<sup>2</sup>)</span>
                                <span>
              <?php get_field('house_area', get_the_ID()) ? the_field('house_area', get_the_ID()) . _e('m<sup>2</sup>','esone') : print_r('---'); ?></span>
                            </li>
                            <li class="col-12 col-md-6">
                                <span><?php _e('总楼层','esone'); ?></span>
                                <span>
              <?php get_field('total_floor', get_the_ID()) ? the_field('total_floor', get_the_ID())._e('层','esone') : print_r('---'); ?></span>
                            </li>
                            <li class="col-12 col-md-6">
                                <span><?php _e('现况','esone'); ?></span>
                                <span>
              <?php get_field('house_state', get_the_ID()) ? the_field('house_state', get_the_ID()) : print_r('---'); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="house-price col-12 col-md-4">

                    <div class="house-price-info">
                        <h2>
                            <?php $price_num = (int) get_field('total_price', get_the_ID()); echo $abc->house_price_num($price_num);?><?php _e('日元','esone'); ?>
                        </h2>
                        <p class="house-price-value"><?php _e('约合','esone'); ?>
                            <?php echo $abc->house_price_num($price_num / $exchangeRate); ?><?php _e('人民币','esone'); ?></p>
                        <p class="house-annual"><?php _e('年收益率'); ?><span>
                <?php the_field('annual_return', get_the_ID()) ?>%</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>