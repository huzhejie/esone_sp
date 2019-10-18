<?php

class PostPaged
{
    public function page_new_paged($num = 1, $type = 'post', $lang_query_get)
    { 
      global $sitepress;
      $current_lang = $lang_query_get; //save current language
      $sitepress->switch_lang($current_lang); //restore previous language
        $postArray = array(
            'post_type' => $type,
            'posts_per_page' => 10,
            'paged' => $num,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $tag_query = new WP_Query($postArray);
        $caseBool = true;

        if ($tag_query->have_posts()) {while ($tag_query->have_posts()) {$tag_query->the_post();
          get_template_part('template-parts/page/post_news_template', get_post_format());

          }
        } else {
            ?>
          <div><?php _e('新闻还未更新，请等待', 'esone');?></div>
            <?php
          }
        wp_reset_postdata();
        die();
    }
}

?>