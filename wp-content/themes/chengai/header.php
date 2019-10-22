<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

function get_link_by_slug($slug, $type = 'page')
{

    $post = get_page_by_path($slug, OBJECT, $type);
    return get_permalink($post->ID);
}

?>
    <!DOCTYPE html>
<html <?php language_attributes();?> class="no-js no-svg">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.3,Transition=5)">
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head();?>
    </head>

<body <?php body_class("stretched device-xs device-touch");?>>
    <script>
        var ajaxurl = "<?php echo content_url(); ?>";
        var houselistUrl = "<?php echo get_link_by_slug('houselist') ?>";
        var themeurl = "<?php echo get_stylesheet_directory_uri(); ?>";
        var langs = "<?php global $sitepress; $current_lang = $sitepress->get_current_language(); echo $current_lang ?>";
    </script>
<div id="wrapper" class="clearfix">
    <header id="header" class="transparent-header full-header" role="banner" data-sticky-class="not-dark">
        <!--  data-sticky-class="not-dark" -->

        <div id="header-wrap">
            <div class="container clearfix">

                <div class="header-bottom-info clearfix">
                    <!--                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>-->
                    <!-- <div class="header-bottom-info"> -->

                    <div id="logo">
                        <a href="<?php bloginfo('url');?>" class="standard-logo"
                           data-dark-logo="<?php the_field('bar_logo', 'option')?>"><img
                                    src="<?php the_field('bar_logo', 'option')?>" alt="Canvas Logo"></a>
                        <a href="<?php bloginfo('url');?>" class="retina-logo"
                           data-dark-logo="<?php the_field('bar_logo', 'option')?>"><img
                                    src="<?php the_field('bar_logo', 'option')?>" alt="Canvas Logo"></a>

                    </div>


                    <?php if (has_nav_menu('top')): ?>

                        <?php get_template_part('template-parts/navigation/navigation', 'top');?>

                    <?php endif;?>
                    <div id="login-jp-block">
                        <div class="login">

                            <?php
                            if (is_user_logged_in()) {
                                ?>
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="true" aria-expanded="false"><?php _e('我的账户', 'esone')?></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="<?php echo get_link_by_slug('account', 'page') ?>"><?php _e('账户信息', 'esone');?></a>
                                        <a class="dropdown-item"
                                           href="<?php echo get_bloginfo('url').'/wp-login.php?action=logout' ?>"><?php _e('登出', 'esone');?></a>
                                    </div>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="nav-item">
                                    <a class="" data-toggle="modal" data-target=".myLoginBox"><?php _e('登陆/注册', 'esone');?></a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="nav-translation">
                            <span>JP</span>
                        </div>
                    </div>
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                </div>
                <!-- </div> -->

    </header>
    <div class="modal fade myLoginBox" tabindex="-1" role="dialog" aria-labelledby="myLoginBox" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><?php _e('登录/注册', 'esone');?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="tabs tabs-alt tabs-justify clearfix" id="LoginRegister">

                            <ul class="tab-nav clearfix">
                                <li class="tab-item"><a href="#login"><?php _e('登录', 'esone');?></a></li>
                                <li class="tab-item"><a href="#register"><?php _e('注册', 'esone');?></a></li>
                            </ul>

                            <div class="tab-container">

                                <div class="tab-content clearfix" id="login">
                                    <?php echo do_shortcode('[user_registration_my_account]'); ?>
                                </div>
                                <div class="tab-content clearfix" id="register">
                                    <?php echo do_shortcode(get_field('house_register_form', 'option')); ?>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        function IsNotPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod"];
            var flag = false;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = true;
                    break;
                }
            }
            return flag;
        }
        jQuery(document).ready(function($){
            var els = document.getElementsByClassName('menu-item');
            var el = document.getElementById("wrapper");
            var menu = document.getElementById("primary-menu");
            var login_btn = document.getElementsByClassName("nav-item")[0];
            var icon = document.getElementsByClassName("icon-reorder")[0];
            if(IsNotPC()) {
                icon.addEventListener("click",function () {
                    login_btn.style.transform = "translateY(320px)";
                });
                el.addEventListener("click", function () {
                    var y = menu.clientHeight;
                    if(y>400) {
                        login_btn.style.opacity = 0;
                        setTimeout(function () {
                            login_btn.style.opacity = 1;
                            login_btn.style.display = "block";
                            login_btn.style.transform = "translateY(320px)";
                        }, 400);
                    }
                });
                // console.log(els.length);
                els[0].firstElementChild.addEventListener("click",function (){
                    login_btn.style.opacity = 0;
                    setTimeout(function () {
                        var y = menu.clientHeight+menu.offsetTop;
                        login_btn.style.opacity = 1;
                        login_btn.style.display = "block";
                        login_btn.style.transform = "translateY(calc(" + y + "px - 20px))";
                    }, 100);

                });
                var m = 1;
                for (; m < els.length; m++) {
                    var elq = els[m].firstElementChild;
                    elq.addEventListener("click", function () {
                        login_btn.style.opacity= 0;
                        setTimeout(function() {
                            var y = menu.clientHeight+menu.offsetTop;
                            login_btn.style.opacity = 1;
                            login_btn.style.display = "block";
                            login_btn.style.transform = "translateY(calc(" + y + "px - 20px))";
                        },100);
                    });
                }
            }
        });
    </script>
<?php
?>