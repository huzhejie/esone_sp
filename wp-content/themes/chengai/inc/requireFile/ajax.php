<?php
require_once dirname(dirname(__FILE__)) . '../../../../../wp-load.php';
require_once dirname(dirname(__FILE__)) . '/requireFile/house.php';
require_once dirname(dirname(__FILE__)) . '/requireFile/postPaged.php';

$filter_info = new FilterInfo();
$post_pagedF = new PostPaged();


$post_data = $_POST;
$post_data_type = $_POST['type'];
$post_data_datas = $_POST['datas'];
$post_data_order = $_POST['orderDate'];
$paged_house = $_POST['pages'];

$post_paged = $_GET;
$post_paged_type = $_GET['type'];
$post_paged_num = $_GET['pages'];
$post_data_houseKeyword = $_GET['s'];
$post_data_houseKeywordtype = $_GET['type'];

$lang_query_post = $_POST['lang_query'];
$lang_query_get = $_GET['lang_query'];

wp_reset_postdata();

if ($post_data_type === 'citys') {
    $datas = (int) $post_data_datas['abc'];
    if ($filter_info->has_children($zxc) && $datas !== 0) {
        $getdata = $filter_info->get_house_filter_list($post_data_datas['parentID'], $post_data_datas['abc']);
    }
    echo $getdata;
}

if ($post_data_type === 'data_filter') {
    $filter_info->get_house_lists_data($post_data_datas, $post_data_order, (int) $paged_house, $lang_query_post);
}

if ($post_data_type === 'house_order') {

}

if ($post_data_type === 'index_citys') {
    global $sitepress;
    $current_lang = $lang_query_post; //save current language

    // $sitepress->switch_lang($new_lang);
    //...run query here; if you use WP_Query or get_posts make sure you set suppress_filters=0 ... 
    $sitepress->switch_lang($current_lang); //restore previous language

    $postArray = array(
        'post_type' => 'sellhouse',
        'posts_per_page' => 8,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'city',
                'terms' => array((int) $post_data_datas['data']),
            ),
        ),
    );
    $tag_query = new WP_Query($postArray);
    if ($tag_query->have_posts()) {

        while ($tag_query->have_posts()) {
            $tag_query->the_post();
            get_template_part('template-parts/house/homeHouseList', get_post_format());
}
    } else {
        ?>
        <div class="house-list-info col-md-3 col-sm-12 col-12">
            <div class="house-list-dec">
                <?php echo __('请等待更新', 'esone');?>
            </div>
        </div>
        <?php
    }

}

if ($post_data_houseKeywordtype === 'house_keyword') {
    global $sitepress;
    $current_lang = $lang_query_get; //save current language
    // $sitepress->switch_lang($new_lang);
    //...run query here; if you use WP_Query or get_posts make sure you set suppress_filters=0 ... 
    $sitepress->switch_lang($current_lang); //restore previous language
    $postArray = array(
        'post_type' => 'sellhouse',
        'posts_per_page' => 5,
        'paged' => 1,
        's' => $post_data_houseKeyword,
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
            'house_area' => 'DESC',
        ),

    );

    $tag_query = new WP_Query($postArray);
    $num = 0;
    if ($tag_query->have_posts()) {
        set_query_var('num', $tag_query->found_posts);
        while ($tag_query->have_posts()) {
            $tag_query->the_post();
            get_template_part('template-parts/house/houseList', get_post_format());
            ?>

              <?php
}
    } else {
        ?>
        <div class="house-info-block" data-num="<?php echo $num ?>">
            <div class="house-info-dec row">
                <?php echo __('请等待更新', 'esone');?>
            </div>
        </div>
        <?php
    }

}

if ($post_paged_type === 'post_paged') {

    $post_pagedF->page_new_paged((int) $post_paged_num, $_GET['postType'], $lang_query_get);
}
?>