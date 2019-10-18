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
<!--					<div class="header-top-info">-->
<!--						<div class="header-top-contain">-->
<!--							<div class="top-info-left">-->
<!--								--><?php
//									if (get_field('top_bar', 'option')) {
//										$topBar = get_field('top_bar', 'option');
//										foreach ($topBar as $i) {
//								?>
<!--								<div class="top-info-block">-->
<!--									<img class="top-bloc-img" src=--><?php //echo $i['icon_img'] ?><!-- alt="icon">-->
<!--									<div class="top-block-text">--><?php //echo $i['info_text'] ?><!--</div>-->
<!--								</div>-->
<!--								--><?php
//										}
//									}
//								?>
<!--							</div>-->
<!--							<div class="top-info-right">-->
<!--								<div class="login">-->
<!---->
<!--									--><?php
//										if (is_user_logged_in()) {
//									?>
<!--									<div class="nav-item dropdown">-->
<!--										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"-->
<!--											aria-haspopup="true" aria-expanded="false">--><?php //_e('我的账户', 'esone')?><!--</a>-->
<!--										<div class="dropdown-menu">-->
<!--											<a class="dropdown-item"-->
<!--												href="--><?php //echo get_link_by_slug('account', 'page') ?><!--">--><?php //_e('账户信息', 'esone');?><!--</a>-->
<!--											<a class="dropdown-item"-->
<!--												href="--><?php //echo get_bloginfo('url').'/wp-login.php?action=logout' ?><!--">--><?php //_e('登出', 'esone');?><!--</a>-->
<!--										</div>-->
<!--									</div>-->
<!--									--><?php
//										} else {
//									?>
<!--									<div class="nav-item">-->
<!---->
<!--										<a class="" data-toggle="modal" data-target=".myLoginBox">--><?php //_e('登陆/注册', 'esone');?><!--</a>-->
<!--									</div>-->
<!--									--><?php
//										}
//									?>
<!--								</div>-->
<!--								<div class="nav-translation">-->
<!--									--><?php //do_action('wpml_add_language_selector'); ?>
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
					<div class="header-bottom-info clearfix">
						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
						<!-- <div class="header-bottom-info"> -->

						<div id="logo">
<!--							<a href="--><?php //bloginfo('url');?><!--" class="standard-logo"-->
<!--								data-dark-logo="--><?php //the_field('bar_logo', 'option')?><!--"><img-->
<!--									src="--><?php //the_field('bar_logo', 'option')?><!--" alt="Canvas Logo"></a>-->
                            <a href="<?php bloginfo('url');?>" class="standard-logo"
                               data-dark-logo="./wp-content/uploads/2019/09/logo_1_1.png"><img
                                        src="./wp-content/uploads/2019/09/logo_1_1.png" alt="Canvas Logo"></a>
<!--							<a href="--><?php //bloginfo('url');?><!--" class="retina-logo"-->
<!--								data-dark-logo="--><?php //the_field('bar_logo', 'option')?><!--"><img-->
<!--									src="--><?php //the_field('bar_logo', 'option')?><!--" alt="Canvas Logo"></a>-->
                            <a href="<?php bloginfo('url');?>" class="retina-logo"
                               data-dark-logo="./wp-content/uploads/2019/09/logo_1_1.png"><img
                                        src="./wp-content/uploads/2019/09/logo_1_1.png" alt="Canvas Logo"></a>
						</div>
						<?php if (has_nav_menu('top')): ?>
						
						<?php get_template_part('template-parts/navigation/navigation', 'top');?>

						<?php endif;?>

					</div>
					 </div>

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

		<?php
?>