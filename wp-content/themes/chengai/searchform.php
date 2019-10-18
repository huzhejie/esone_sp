<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form id="widget-subscribe-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="form" method="get" class="nobottommargin search-form">
	<div class="input-group divcenter">
		<!-- <div class="input-group-prepend">
			<div class="input-group-text"><i class="icon-email2"></i></div>
		</div> -->
		<input type="search" id="<?php echo $unique_id; ?>" name="s" class="form-control required email search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" />
		<div class="input-group-append">
			<button class="btn btn-info search-submit" type="submit"><span class="ex-search"></span></button>
		</div>
	</div>
</form>
