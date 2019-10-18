<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

require get_stylesheet_directory() . '/inc/requireFile/house.php';

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

/*

 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twentyseventeen_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
     * If you're building a theme based on Twenty Seventeen, use a find and replace
     * to change 'twentyseventeen' to the name of your theme in all the template files.
     */
    load_theme_textdomain('twentyseventeen');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    add_image_size('twentyseventeen-featured-image', 2000, 1200, true);

    add_image_size('twentyseventeen-thumbnail-avatar', 100, 100, true);

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'top' => __('Top Menu', 'twentyseventeen'),
        'social' => __('Social Links Menu', 'twentyseventeen'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Define and register starter content to showcase the theme on new sites.
    $starter_content = array(
        'widgets' => array(
            // Place three core-defined widgets in the sidebar area.
            'sidebar-1' => array(
                'text_business_info',
                'search',
                'text_about',
            ),

            // Add the core-defined business info widget to the footer 1 area.
            'sidebar-2' => array(
                'text_business_info',
            ),

            // Put two core-defined widgets in the footer 2 area.
            'sidebar-3' => array(
                'text_about',
                'search',
            ),
        ),

        // Specify the core-defined pages to create and add custom thumbnails to some of them.
        'posts' => array(
            'home',
            'about' => array(
                'thumbnail' => '{{image-sandwich}}',
            ),
            'contact' => array(
                'thumbnail' => '{{image-espresso}}',
            ),
            'blog' => array(
                'thumbnail' => '{{image-coffee}}',
            ),
            'homepage-section' => array(
                'thumbnail' => '{{image-espresso}}',
            ),
        ),

        // Create the custom image attachments used as post thumbnails for pages.
        'attachments' => array(
            'image-espresso' => array(
                'post_title' => _x('Espresso', 'Theme starter content', 'twentyseventeen'),
                'file' => 'assets/images/espresso.jpg', // URL relative to the template directory.
            ),
            'image-sandwich' => array(
                'post_title' => _x('Sandwich', 'Theme starter content', 'twentyseventeen'),
                'file' => 'assets/images/sandwich.jpg',
            ),
            'image-coffee' => array(
                'post_title' => _x('Coffee', 'Theme starter content', 'twentyseventeen'),
                'file' => 'assets/images/coffee.jpg',
            ),
        ),

        // Default to a static front page and assign the front and posts pages.
        'options' => array(
            'show_on_front' => 'page',
            'page_on_front' => '{{home}}',
            'page_for_posts' => '{{blog}}',
        ),

        // Set the front page section theme mods to the IDs of the core-registered pages.
        'theme_mods' => array(
            'panel_1' => '{{homepage-section}}',
            'panel_2' => '{{about}}',
            'panel_3' => '{{blog}}',
            'panel_4' => '{{contact}}',
        ),

        // Set up nav menus for each of the two areas registered in the theme.
        'nav_menus' => array(
            // Assign a menu to the "top" location.
            'top' => array(
                'name' => __('Top Menu', 'twentyseventeen'),
                'items' => array(
                    'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),

            // Assign a menu to the "social" location.
            'social' => array(
                'name' => __('Social Links Menu', 'twentyseventeen'),
                'items' => array(
                    'link_yelp',
                    'link_facebook',
                    'link_twitter',
                    'link_instagram',
                    'link_email',
                ),
            ),
        ),
    );

    /**
     * Filters Twenty Seventeen array of starter content.
     *
     * @since Twenty Seventeen 1.1
     *
     * @param array $starter_content Array of starter content.
     */
    $starter_content = apply_filters('twentyseventeen_starter_content', $starter_content);

    add_theme_support('starter-content', $starter_content);
}



 /* 
 remove_pages_from_search
 */

function remove_pages_from_search() {
    // global $wp_post_types;

    // $wp_post_types['page']->exclude_from_search = true;

}
add_action('init', 'remove_pages_from_search');

add_action( 'init', 'my_cpt_init' );
function my_cpt_init() {
    // global $wp_post_types;
    // var_dump($wp_post_types['city']);
    // var_dump(post_type_exists());
    // register_post_type();
}


// plugin test content

// plugin admin menu

add_action('admin_menu', 'my_admin_menu');

function my_admin_menu()
{
    add_menu_page('侧边栏', '侧边栏', 'administrator', __FILE__, 'my_function_menu', false, 100);
}

function my_function_menu()
{
    echo '<div class="Side_content">';
    echo '<h1>侧边栏相关数据设置</h1>';

    ?>
<?php
?>
    <!--
      1、电话
      2、邮箱
      3、座机
      4、QQ号码
      5、微信二维码
     -->
     <!-- zxkf  在线客服 -->
    <div class="side_form_content">
      <form method="POST" class="form_content_list" id="side_form_data">
        <div class="phone_info_text input_style">
          <label for="zxkf_side_name">称呼：</label>
          <input type="text" name="zxkf_side_name" id="zxkf_side_name">
        </div>
        <div class="phone_info_text input_style">
          <label for="zxkf_side_phone">电话：</label>
          <input type="text" name="zxkf_side_phone" required id="zxkf_side_phone">(必填项)
        </div>
        <div class="landline_info_text input_style">
          <label for="landline_num">座机：</label>
          <input type="text" name="zxkf_side_landline" required id="zxkf_side_landline">(必填项)
        </div>
        <div class="email_info_text input_style">
          <label for="zxkf_side_email">邮箱：</label>
          <input type="email" name="zxkf_side_email" required  id="zxkf_side_email">(必填项)
        </div>
        <div class="qq_info_text input_style">
          <label for="zxkf_side_qq">QQ号码：</label>
          <input type="text" name="zxkf_side_qq" required id="zxkf_side_qq">(必填项)
        </div>
        <button type="submit" class="sub_btn_form">提交</button>
      </form>
    </div>
  </div>
<?php
foreach ($_POST as $key => $value) {
        if ($value === '') {
            echo '<p>请将' . $key . '数据填写完全</p>';
            return;
        } else {
            update_option($key, $value, true);
        }
    }
}

add_action('after_setup_theme', 'twentyseventeen_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function twentyseventeen_content_width()
{

    $content_width = $GLOBALS['content_width'];

    // Get layout.
    $page_layout = get_theme_mod('page_layout');

    // Check if layout is one column.
    if ('one-column' === $page_layout) {
        if (twentyseventeen_is_frontpage()) {
            $content_width = 644;
        } elseif (is_page()) {
            $content_width = 740;
        }
    }

    // Check if is single post and there is no sidebar.
    if (is_single() && !is_active_sidebar('sidebar-1')) {
        $content_width = 740;
    }

    /**
     * Filter Twenty Seventeen content width of the theme.
     *
     * @since Twenty Seventeen 1.0
     *
     * @param int $content_width Content width in pixels.
     */
    $GLOBALS['content_width'] = apply_filters('twentyseventeen_content_width', $content_width);
}
add_action('template_redirect', 'twentyseventeen_content_width', 0);

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function twentyseventeen_resource_hints($urls, $relation_type)
{
    if (wp_style_is('twentyseventeen-fonts', 'queue') && 'preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}
add_filter('wp_resource_hints', 'twentyseventeen_resource_hints', 10, 2);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentyseventeen_widgets_init()
{
    register_sidebar(array(
        'name' => __('Blog Sidebar', 'twentyseventeen'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 1', 'twentyseventeen'),
        'id' => 'sidebar-2',
        'description' => __('Add widgets here to appear in your footer.', 'twentyseventeen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'twentyseventeen'),
        'id' => 'sidebar-3',
        'description' => __('Add widgets here to appear in your footer.', 'twentyseventeen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'twentyseventeen_widgets_init');

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function twentyseventeen_excerpt_more($link)
{
    if (is_admin()) {
        return $link;
    }

    $link = sprintf('<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
        esc_url(get_permalink(get_the_ID())),
        /* translators: %s: Name of current post */
        sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen'), get_the_title(get_the_ID()))
    );
    return ' &hellip; ' . $link;
}
add_filter('excerpt_more', 'twentyseventeen_excerpt_more');

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Seventeen 1.0
 */
function twentyseventeen_javascript_detection()
{
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action('wp_head', 'twentyseventeen_javascript_detection', 0);

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function twentyseventeen_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", get_bloginfo('pingback_url'));
    }
}
add_action('wp_head', 'twentyseventeen_pingback_header');

/**
 * Display custom color CSS.
 */
function twentyseventeen_colors_css_wrap()
{
    if ('custom' !== get_theme_mod('colorscheme') && !is_customize_preview()) {
        return;
    }

    require_once get_parent_theme_file_path('/inc/color-patterns.php');
    $hue = absint(get_theme_mod('colorscheme_hue', 250));
    ?>
	<style type="text/css" id="custom-theme-colors" <?php if (is_customize_preview()) {echo 'data-hue="' . $hue . '"';}?>>
		<?php echo twentyseventeen_custom_colors_css(); ?>
	</style>
<?php }
add_action('wp_head', 'twentyseventeen_colors_css_wrap');

/**
 * Enqueue scripts and styles.
 */
function twentyseventeen_scripts()
{
    wp_enqueue_script('jquery');
    // Add custom fonts, used in the main stylesheet.
    // wp_enqueue_style('twentyseventeen-fonts', twentyseventeen_fonts_url(), array(), null);

    wp_enqueue_style('boostrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('fontIconAll', get_stylesheet_directory_uri() . '/assets/css/all.css');
    wp_enqueue_style('wphy-style', get_stylesheet_uri());
    wp_enqueue_style('swiperstyle', get_stylesheet_directory_uri() . '/assets/css/swiper.css');
    wp_enqueue_style('darkstyle', get_stylesheet_directory_uri() . '/assets/css/dark.css');
    wp_enqueue_style('font-iconsstyle', get_stylesheet_directory_uri() . '/assets/css/font-icons.css');
    wp_enqueue_style('animatestyle', get_stylesheet_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('magnific-popupstyle', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css');
    if (is_single()) {
        wp_enqueue_style('rangesliderstyle', get_stylesheet_directory_uri() . '/assets/css/ion.rangeslider.css');

    }
    wp_enqueue_style('responsivestyle', get_stylesheet_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('housestyle', get_stylesheet_directory_uri() . '/assets/css/style.css');

    // 引入js

    // wp_enqueue_script('boostrapjs', get_stylesheet_directory_uri() . '/assets/js/plugin/bootstrap.min.js', array('jquery'), '1.0.0', true);

    // Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.

    // Load the Internet Explorer 8 specific stylesheet.

    // Load the html5 shiv.
    wp_enqueue_script('html5', get_theme_file_uri('/assets/js/html5.js'), array(), '3.7.3');
    wp_script_add_data('html5', 'conditional', 'lt IE 9');
    $js_data = array(
        'site_url' => get_home_url(),
        'site_path' => WP_CONTENT_DIR,
    );

    wp_localize_script('ajax-js', 'wordpress_value', $js_data);

    wp_enqueue_script('pluginJS', get_theme_file_uri('/assets/js/plugins.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('functionJS', get_theme_file_uri('/assets/js/functions.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('bpaginatorjs', get_stylesheet_directory_uri() . '/assets/js/plugin/jq-paginator.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('AjaxJS', get_theme_file_uri('/assets/js/ajax.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('houseIndexJS', get_theme_file_uri('/assets/js/index.js'), array('jquery'), '1.0', true);

    if (is_single()) {
        wp_enqueue_script('rangesliderJS', get_theme_file_uri('/assets/js/plugin/rangeslider.min.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('houseJS', get_theme_file_uri('/assets/js/house.js'), array('jquery'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'twentyseventeen_scripts');

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentyseventeen_content_image_sizes_attr($sizes, $size)
{
    $width = $size[0];

    if (740 <= $width) {
        $sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
    }

    if (is_active_sidebar('sidebar-1') || is_archive() || is_search() || is_home() || is_page()) {
        if (!(is_page() && 'one-column' === get_theme_mod('page_options')) && 767 <= $width) {
            $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
        }
    }

    return $sizes;
}
add_filter('wp_calculate_image_sizes', 'twentyseventeen_content_image_sizes_attr', 10, 2);

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function twentyseventeen_header_image_tag($html, $header, $attr)
{
    if (isset($attr['sizes'])) {
        $html = str_replace($attr['sizes'], '100vw', $html);
    }
    return $html;
}
add_filter('get_header_image_tag', 'twentyseventeen_header_image_tag', 10, 3);

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function twentyseventeen_post_thumbnail_sizes_attr($attr, $attachment, $size)
{
    if (is_archive() || is_search() || is_home()) {
        $attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
    } else {
        $attr['sizes'] = '100vw';
    }

    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'twentyseventeen_post_thumbnail_sizes_attr', 10, 3);

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function twentyseventeen_front_page_template($template)
{
    return is_home() ? '' : $template;
}
add_filter('frontpage_template', 'twentyseventeen_front_page_template');

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Seventeen 1.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentyseventeen_widget_tag_cloud_args($args)
{
    $args['largest'] = 1;
    $args['smallest'] = 1;
    $args['unit'] = 'em';
    $args['format'] = 'list';

    return $args;
}
add_filter('widget_tag_cloud_args', 'twentyseventeen_widget_tag_cloud_args');

/* Add ACF */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'General Setting',
        'menu_title' => 'General Setting',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ));
    acf_add_options_page(array(
        'page_title' => 'Footer Setting',
        'menu_title' => 'Footer Setting',
        'menu_slug' => 'parts-settings',
        'parent_slug' => 'theme-general-settings',
    ));
}

add_action('widgets_init', 'news_posts_widget');

function news_posts_widget()
{

    register_widget('News_Post_Widget');
}

/**
 * Recent_Posts widget class
 *
 * @since 2.8.0
 */
class News_Post_Widget extends WP_Widget
{

    public function __construct()
    {
        $widget_ops = array('classname' => 'news_posts', 'description' => __('A widget that displays recent posts '), 'customize_selective_refresh' => true);

        $control_ops = array('id_base' => 'news_posts');

        parent::__construct('news_posts', __('News Posts'), $widget_ops, $control_ops);
    }

    public function widget($args, $instance)
    {

        $terms = get_the_terms(get_the_ID(), 'on-draught');

        if ($terms && !is_wp_error($terms)) {

            $draught_links = array();

            foreach ($terms as $term) {
                $draught_links[] = $term->name;
            }

            $on_draught = join(", ", $draught_links);

            var_dump($on_draught);

            $cache = wp_cache_get('widget_news_posts', 'widget');
        }

        if (!is_array($cache)) {
            $cache = array();
        }

        if (!isset($args['widget_id'])) {
            $args['widget_id'] = $this->id;
        }

        if (isset($cache[$args['widget_id']])) {
            echo $cache[$args['widget_id']];
            return;
        }

        ob_start();
        extract($args);

        // if (empty($instance['image'])) {
        //     $instance['image'] = false;
        // }

        $is_image = 'true';

        $title = apply_filters('widget_title', empty($instance['title']) ? __('News Posts') : $instance['title'], $instance, $this->id_base);
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 10;
        }
        $postTypeStr = get_post()->post_type;
        $postTypeStr === 'page' ? $postTypeStr = 'post' : $postTypeStr;
        $r = new WP_Query(apply_filters('widget_posts_args', array('post_type' => $postTypeStr, 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true)));

        if ($r->have_posts()):
        ?>
		<?php echo $before_widget; ?>
		<?php if ($title) {
            echo $before_title . $title . $after_title;
        }
        ?>
		<?php echo '<div class="news-posts">'; ?>
		<?php while ($r->have_posts()): $r->the_post();?>

				<?php $image_style = '';if ($is_image == 'true' && has_post_thumbnail()) {$image_style = 'style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2) ), url(' . wp_get_attachment_thumb_url(get_post_thumbnail_id(get_the_ID())) . '); color:#fff; text-shadow:1px 1px 0px rgba(0,0,0,.5); border:0;';}?>

	            <div class="spost clearfix">
	            <div class="entry-image">
                    <a href="<?php the_permalink()?>" class="nobg">
                        <div class="rounded-circle slibar-news-img" style="background: url(<?php $img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); echo $img_data[0]?>) no-repeat center center; background-size: cover;"></div>
            </a>
	            </div>
	            <div class="entry-c">
	                <div class="entry-title">
	                    <h4><a href="<?php the_permalink()?>"><?php the_title();?></a></h4>
	                </div>
	                <ul class="entry-meta">
	                    <li><?php echo get_the_date('Y-m-d l'); ?></li>
	                </ul>
	            </div>
	    </div>
				<?php endwhile;?>
		<?php echo '</div>'; ?>
		<?php echo $after_widget; ?>
<?php
// Reset the global $the_post as this query will have stomped on it
        wp_reset_postdata();

        endif;

        $cache[$args['widget_id']] = ob_get_flush();
        wp_cache_set('widget_recent_posts', $cache, 'widget');
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = (int) $new_instance['number'];
        // $instance['image'] = $new_instance['image'];
        $this->flush_widget_cache();

        $alloptions = wp_cache_get('alloptions', 'options');
        if (isset($alloptions['widget_recent_entries'])) {
            delete_option('widget_recent_entries');
        }

        return $instance;
    }

    public function flush_widget_cache()
    {
        wp_cache_delete('widget_recent_posts', 'widget');
    }

    public function form($instance)
    {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $number = isset($instance['number']) ? absint($instance['number']) : 5;
        // $instance['image'] = isset($instance['image']) ? $instance['image'] : false;

        ?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'flatsome');?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts to show:', 'flatsome');?></label>
		<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

<?php
}
}

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path('/inc/custom-header.php');

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path('/inc/template-tags.php');

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path('/inc/template-functions.php');

/**
 * Customizer additions.
 */
require get_parent_theme_file_path('/inc/customizer.php');

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path('/inc/icon-functions.php');
