<?php
if(!function_exists('qode_map_left_menu_meta_fields')) {

	function qode_map_left_menu_meta_fields() {
		$qodeLeftMenuArea = qode_add_meta_box(
			array(
				'scope' => array('page', 'portfolio_page', 'post'),
				'title' => esc_html__('Qode Left Menu Area', 'qode'),
				'name' => 'page_left_menu',
				'hidden_property' => 'vertical_area',
				'hidden_values' => array('no')
			)
		);


		$qode_page_vertical_area_transparency = new QodeMetaField("selectblank","qode_page_vertical_area_transparency","","启用透明左侧菜单区域","启用此选项将使左侧菜单背景变得透明 ", array(
			"no" => "否",
			"yes" => "是"
		));
		$qodeLeftMenuArea->addChild("qode_page_vertical_area_transparency",$qode_page_vertical_area_transparency);

		$qode_page_vertical_area_background = new QodeMetaField("color","qode_page_vertical_area_background","","左侧菜单区域背景颜色","选择左侧菜单背景颜色");
		$qodeLeftMenuArea->addChild("qode_page_vertical_area_background",$qode_page_vertical_area_background);

		$qode_page_vertical_area_background_image = new QodeMetaField("image","qode_page_vertical_area_background_image","","左侧菜单区域背景图片","选择左侧菜单背景图片");
		$qodeLeftMenuArea->addChild("qode_page_vertical_area_background_image",$qode_page_vertical_area_background_image);


	}

	add_action('qode_meta_boxes_map', 'qode_map_left_menu_meta_fields');
}