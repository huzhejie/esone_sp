<?php 
    $filter_info = new FilterInfo();
    $post_pagedF = new PostPaged();
?>

<div class="house-list-info col-md-3 col-sm-12 col-12">
            <a href="<?php the_permalink();?>">
                <div class="house-list-dec">
                <img src="<?php $img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); echo $img_data[0]?>" alt="house_img">

                    <div class="house-dec-block">
                    <p class="house-dec-mon">
                        <span class="dec-mon-info">
                            ￥<?php $price_num = (int) get_field('total_price', get_the_ID()); echo $filter_info->house_price_num($price_num) . _e('日元', 'esone');?>
                        </span>
                        <span class="dec-year-info">
                        <?php echo get_the_date('Y-m-d'); ?></span>
                    </p>
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