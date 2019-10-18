<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

$page_banner = get_field('page_banner', get_queried_object_id()) ? get_field('page_banner', get_queried_object_id()) : get_field('page_banner', 'option');

?>

<section id="content">

	<div class="page-top-banner">
		<div class="page-banner-img"
			style="background: url(<?php echo $page_banner ?>) no-repeat center center; background-size: cover;">
			<div class="page-title-dec">
				<h1 style="text-shadow: 0 0 0.2rem black">
					<?php echo get_the_title(); ?>
				</h1>
			</div>
		</div>
	</div>

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Post Content
		============================================= -->
			<div class="postcontent nobottommargin clearfix">

				<div class="single-post nobottommargin">

					<!-- Single Post
				============================================= -->
					<div class="entry clearfix">

<!--						<div class="entry-image">-->
<!--							<a-->
<!--								href="#">--><?php //echo get_the_post_thumbnail(get_queried_object_id(), 'twentyseventeen-featured-image') ?><!--</a>-->
<!--						</div>-->

						<!-- Entry Content
					============================================= -->
						<div class="entry-content notopmargin">
							<?php
/* Start the Loop */
while (have_posts()): the_post();

    get_template_part('template-parts/post/content', get_post_format());

endwhile; // End of the loop.
?>
						</div>


					</div>
					<!-- Post Navigation
				============================================= -->
					<div class="post-navigation clearfix">

						<?php
	the_post_navigation(array(
			'prev_text' => '<div class="col_half nobottommargin">' . __('Previous Post', 'twentyseventeen') . '<span class="nav-title">&nbsp;&nbsp;%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg(array('icon' => 'arrow-left')) . '</span></span></div> ',
			'next_text' => '<div class="col_half col_last tright nobottommargin">' . __('Next Post', 'twentyseventeen') . '<span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg(array('icon' => 'arrow-right')) . '</span></span></div> ',
	));
	?>


					</div><!-- .post-navigation end -->
				</div>
			</div><!-- .postcontent end -->
			<div class="sidebar nobottommargin col_last clearfix">
				<div class="sidebar-widgets-wrap">
					<?php dynamic_sidebar('sidebar-1');?>
				</div>
			</div>
		</div>

	</div>

</section><!-- #content end -->

<?php get_footer();