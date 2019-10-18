<?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);



function disable_emoji9s_tinymce($plugins) {
   if (is_array($plugins)) {
       return array_diff($plugins, array(
           'wpemoji'
       ));
   } else {
       return array();
   }
}

function custom_gitsmilie_src($old, $img) {
   return get_stylesheet_directory_uri() . '/img/smilies/' . $img;
}
function init_gitsmilie() {
   global $wpsmiliestrans;

   $wpsmiliestrans = array(
       ':mrgreen:' => 'icon_mrgreen.gif',
       ':neutral:' => 'icon_neutral.gif',
       ':twisted:' => 'icon_twisted.gif',
       ':arrow:' => 'icon_arrow.gif',
       ':shock:' => 'icon_eek.gif',
       ':smile:' => 'icon_smile.gif',
       ':???:' => 'icon_confused.gif',
       ':cool:' => 'icon_cool.gif',
       ':evil:' => 'icon_evil.gif',
       ':grin:' => 'icon_biggrin.gif',
       ':idea:' => 'icon_idea.gif',
       ':oops:' => 'icon_redface.gif',
       ':razz:' => 'icon_razz.gif',
       ':roll:' => 'icon_rolleyes.gif',
       ':wink:' => 'icon_wink.gif',
       ':cry:' => 'icon_cry.gif',
       ':eek:' => 'icon_surprised.gif',
       ':lol:' => 'icon_lol.gif',
       ':mad:' => 'icon_mad.gif',
       ':sad:' => 'icon_sad.gif',
       '8-)' => 'icon_cool.gif',
       '8-O' => 'icon_eek.gif',
       ':-(' => 'icon_sad.gif',
       ':-)' => 'icon_smile.gif',
       ':-?' => 'icon_confused.gif',
       ':-D' => 'icon_biggrin.gif',
       ':-P' => 'icon_razz.gif',
       ':-o' => 'icon_surprised.gif',
       ':-x' => 'icon_mad.gif',
       ':-|' => 'icon_neutral.gif',
       ';-)' => 'icon_wink.gif',
       '8O' => 'icon_eek.gif',
       ':(' => 'icon_sad.gif',
       ':)' => 'icon_smile.gif',
       ':?' => 'icon_confused.gif',
       ':D' => 'icon_biggrin.gif',
       ':P' => 'icon_razz.gif',
       ':o' => 'icon_surprised.gif',
       ':x' => 'icon_mad.gif',
       ':|' => 'icon_neutral.gif',
       ';)' => 'icon_wink.gif',
       ':!:' => 'icon_exclaim.gif',
       ':?:' => 'icon_question.gif',
   );

   remove_action('wp_head', 'print_emoji_detection_script', 7);
   remove_action('admin_print_scripts', 'print_emoji_detection_script');
   remove_action('wp_print_styles', 'print_emoji_styles');
   remove_action('admin_print_styles', 'print_emoji_styles');
   remove_filter('the_content_feed', 'wp_staticize_emoji');
   remove_filter('comment_text_rss', 'wp_staticize_emoji');
   remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
   add_filter('tiny_mce_plugins', 'disable_emoji9s_tinymce');
   add_filter('smilies_src', 'custom_gitsmilie_src', 10, 2);
}
add_action('init', 'init_gitsmilie', 5);