<?php

// $parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );

$GLOBALS['house_price'] = array(
    array(
        'label' => '500' . __('万以下', 'esone'),
        'value' => '5000000',
    ),
    array(
        'label' => '500' . __('万至', 'esone') . '1000' . __('万', 'esone'),
        'value' => '5000000, 10000000',
    ),
    array(
        'label' => '1000' . __('万至', 'esone') . '2000' . __('万', 'esone'),
        'value' => '10000000, 20000000',
    ),
    array(
        'label' => '2000' . __('万至', 'esone') . '5000' . __('万', 'esone'),
        'value' => '20000000, 50000000',
    ),
    array(
        'label' => '5000' . __('万以上', 'esone'),
        'value' => '50000000',
    ),
);

$GLOBALS['house_area']  = array(
    array(
        'label' => '30' . 'm<sup>2</sup>' . __('以下', 'esone'),
        'value' => '30',
    ),
    array(
        'label' => '30' . 'm<sup>2</sup>' . '~' . '80' . 'm<sup>2</sup>',
        'value' => '30, 80',
    ),
    array(
        'label' => '80' . 'm<sup>2</sup>' . __('以上', 'esone'),
        'value' => '80',
    ),
);

class FilterInfo
{
    function __construct(){
        global $GLOBALS;
    }
    
    public function house_price_num($num = 1)
    {
       
        switch ($num) {
            case $num > pow(10, 8):
                echo round($num / pow(10, 8)) . __("亿", "esone");
                break;
            case $num > pow(10, 4):
                echo round($num / pow(10, 4)) . __("万", "esone");
                break;
            default:
                echo $num;
        }
    }

    /* 判读是否含有子级目录 */

    public function has_children($post_ID = null)
    {
        if ($post_ID === null) {
            global $post;
            $post_ID = $post->ID;
        }

        $query = new WP_Query(array('post_parent' => $post_ID, 'post_type' => 'city'));
        return $query->have_posts();
    }

    // 获取 分类
    public function get_house_filter_list($post_type, $post_parent = 0)
    {
        $tag_html = '';
        $postArray = array(
            'post_type' => $post_type,
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'post_parent' => $post_parent,
        );
        // $arrays = $arrays ? array_merge($postArray, $arrays) : $postArray;

        $tag_query = new WP_Query($postArray);
        
        if ($tag_query->have_posts()) {
            while ($tag_query->have_posts()) {
                $tag_query->the_post();
                $tag_html .= '<li data-value="' . get_the_ID() . '" >' . get_the_title() . '</li>';
            }
        }
        wp_reset_postdata();

        return $tag_html;
    }

    public function get_house_config_list($type)
    {
        $list_html = '';
        foreach ($GLOBALS[$type] as $key => $value) {
            $list_html .= '<li data-value="' . $value['value'] . '" >' . $value['label'] . '</li>';
        }
        return $list_html;
    }

    public function get_house_lists_data($arrays = [], $orderdata = [], $pages = 1, $lang_query_post)
    {
        $name_arr = [];
        $filterInterval = [];
        $filterData = [];
        // 数据整理
        if ($arrays) {
            foreach ($arrays as $i) {
                if ($i["taxonomy"] === 'city' && count($i["terms"]) > 1) {
                    $i["terms"] = $i["terms"][1];
                }
                if (is_array($i['terms'])) {
                    $efg = [];
                    foreach ($i['terms'] as $j) {
                        $j = (int) $j;
                        array_push($efg, $j);

                    }
                    $i['terms'] = $efg;

                    array_push($name_arr, $i);
                } else if ((int) $i['terms'] !== 0) {
                    $i['terms'] = (int) $i['terms'];
                    array_push($name_arr, $i);
                }
            }
        }

        function filterDataArray($item)
        {
            return $item["taxonomy"] !== "house_area" && $item["taxonomy"] !== "total_price";
        }
        function filterIntervalArray($item)
        {
            return $item["taxonomy"] == "house_area" || $item["taxonomy"] == "total_price";
        }

        $filterData = array_filter($name_arr, "filterDataArray");
        $filterInterval = array_filter($name_arr, "filterIntervalArray");
        $zxc = [];
        global $sitepress;
        $current_lang = $lang_query_post; //save current language
        $sitepress->switch_lang($current_lang); //restore previous language

        foreach ($filterInterval as $i) {
            if (count($i["terms"]) > 1) {
                array_push($zxc, array(
                    array(
                        'key' => $i["taxonomy"],
                        'value' => $i["terms"][0],
                        'type' => 'numeric',
                        'compare' => '>=',
                    ),
                    array(
                        'key' => $i["taxonomy"],
                        'value' => $i["terms"][1],
                        'type' => 'numeric',
                        'compare' => '<=',
                    ))

                );
            } else {
                if ( $GLOBALS['house_price'][0]['value'] == $i["terms"][0] || $GLOBALS['house_area'][0]['value'] == $i["terms"][0]) {

                    array_push($zxc, array(
                        array(
                            'key' => $i["taxonomy"],
                            'value' => $i["terms"][0],
                            'type' => 'numeric',
                            'compare' => '<=',
                        ),
                    )
                    );
                } else if ($GLOBALS['house_price'][count($GLOBALS['house_price']) - 1]['value'] == $i["terms"][0] || $GLOBALS['house_area'][count($GLOBALS['house_area']) - 1]['value'] == $i["terms"][0]) {
                    // echo 'nihao';
                    array_push($zxc, array(
                        array(
                            'key' => $i["taxonomy"],
                            'value' => $i["terms"][0],
                            'type' => 'numeric',
                            'compare' => '>=',
                        ),
                    )
                    );
                }
            }
        }
        $orderby_name = [];
        $order_max = [];
        if ($orderdata) {
            foreach ($orderdata as $i) {
                $orderby_name[$i['name']] = $i['orders'];

                array_push($zxc, array(
                    $i['name'] => array(
                        'key' => $i['name'],
                        'type' => 'numeric',
                    ),
                )
                );
            }
        }
        $postArray = array(
            'post_type' => 'sellhouse',
            'posts_per_page' => 5,
            'paged' => $pages,
            'post_status' => 'publish',
            'orderby' => $orderby_name,
            'order' => 'ASC',
            'tax_query' => $filterData,
            'meta_query' => $zxc,
        );

        $tag_query = new WP_Query($postArray);
        // $arrays = $arrays ? array_merge($postArray, $arrays) : $postArray;

        if ($tag_query->have_posts()) {
            set_query_var('num', $tag_query->found_posts);
            while ($tag_query->have_posts()) {
                $tag_query->the_post();
                get_template_part('template-parts/house/houseList', get_post_format());
            }
        } else {
            ?>
        <div class="house-info-block"> <div class="house-info-dec">
            <?php echo __('房源信息还未更新，请等待'); ?>
        </div></div>
        <?php
}
        $data = 1;
        wp_reset_postdata();
        die();
    }

    public function filter_interval_func($arr)
    {

    }
}
