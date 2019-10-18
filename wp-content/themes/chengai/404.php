<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section id="content" class="page-contact-block" style="height: 100vh;">
	<div class="content-main">

        				<div class="container-fluid vertical-middle center clearfix">

					<div class="error404_page">404<?php _e('页面', 'esone') ?></div>

					<div class="heading-block nobottomborder">
						<h4><?php _e('您查看的页面不存在','esone')?></h4>
	                    <span><?php _e('请打开网站的其他页面继续浏览','esone')?></span>
					</div>

				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<?php get_footer();
