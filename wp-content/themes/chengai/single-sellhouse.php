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
		<div class="page-banner-img" style="background: url(<?php echo $page_banner ?>) no-repeat center center; background-size: cover;">
			<div class="page-title-dec">
				<h1 style="text-shadow: 0 0 0.2rem black">
					<?php echo get_the_title(); ?>
				</h1>
			</div>
		</div>
	</div>

	<div class="content-wrap">
			<div class="single-sellhouse">
				<div class="container clearfix">

						<div class="single-post nobottommargin">
									<?php

										while (have_posts()): the_post();
												get_template_part('template-parts/post/content-single-sellhouse', get_post_format());
										endwhile;
									?>
								</div>

			</div>

		</div>

</section>

<?php get_footer();