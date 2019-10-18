<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<!-- <h1>
						<?php echo get_the_title(); ?>
					</h1> -->

				<?php if ( have_posts() ) : ?>
				<h1>
					<?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>
				<?php else : ?>
				<h1><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
				<?php endif; ?>
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
							if ( have_posts() ) :
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/**
									* Run the loop for the search to output the results.
									* If you want to overload this in a child theme then include a file
									* called content-search.php and that will be used instead.
									*/
									// get_template_part( 'template-parts/post/content', 'excerpt' );
									// if(get_post()->post_type !== 'post') {
									// 	continue;
									// }

									get_template_part('template-parts/page/post_news_template', get_post_format());


			endwhile; // End of the loop.

			the_posts_pagination( array(
				'prev_text' => "&lt;",
        
				'next_text' => " &gt;",
				'before_page_number' => "",
				'screen_reader_text' => ""
			) );

		else : ?>

								<p>
									<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?>
								</p>
								<?php
				get_search_form();

		endif;
		?> </div>
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

<?php get_footer();