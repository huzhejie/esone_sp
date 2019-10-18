<?php
/*
 * Template Name: news
 * 作者：WordPress花园
 *
 **/
get_header();

$page_banner = get_field('page_banner', get_queried_object_id()) ? get_field('page_banner', get_queried_object_id()) : get_field('page_banner', 'option');

?>

<section id="content">
    <div class="page-top-banner">
        <div class="page-banner-img"
            style="background: url(<?php echo $page_banner ?>) no-repeat center center; background-size: cover;">
            <div class="page-title-dec">
                <h1 style="text-shadow: 0 0 0.2em black">
                    <?php echo get_the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="content-main">
        <div class="page-news-block">
            <div class="page-news-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <div class="page-news-info">
                                <?php
if (have_posts()): while (have_posts()): the_post();

        get_template_part('template-parts/page/post_news_template', get_post_format());

    endwhile;

    the_posts_pagination( array(
        'prev_text' => "&lt;",
        
        'next_text' => " &gt;",
        'before_page_number' => "",
        'screen_reader_text' => ""
    ) );

    
    endif;
?>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="sidebar clearfix">
                                <?php dynamic_sidebar('sidebar-1');?>
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