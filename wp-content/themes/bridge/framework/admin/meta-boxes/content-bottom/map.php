<?php
if(!function_exists('qode_map_content_bottom_meta_fields')) {

	function qode_map_content_bottom_meta_fields() {

		$qode_custom_sidebars = qode_get_custom_sidebars();

		$qodeContentBottom = qode_add_meta_box(
			array(
				'scope' => array('page', 'portfolio_page', 'post'),
				'title' => esc_html__('Qode Content Bottom', 'qode'),
				'name' => 'page_content_bottom'
			)
		);

		$qode_enable_content_bottom_area = new QodeMetaField("selectblank","qode_enable_content_bottom_area","","显示内容底部区域","你想显示内容底部区域吗？", array(
			"no" => "否",
			"yes" => "是"
		),
			array("dependence" => true,
				"hide" => array(
					"no"=>"#qodef_qode_enable_content_bottom_area_container",
					""=>"#qodef_qode_enable_content_bottom_area_container"),
				"show" => array(
					"yes"=>"#qodef_qode_enable_content_bottom_area_container") ));
		$qodeContentBottom->addChild("qode_enable_content_bottom_area",$qode_enable_content_bottom_area);

		$qode_enable_content_bottom_area_container = new QodeContainer("qode_enable_content_bottom_area_container","qode_enable_content_bottom_area","no",array("", "no"));
		$qodeContentBottom->addChild("qode_enable_content_bottom_area_container",$qode_enable_content_bottom_area_container);

		$qode_content_bottom_background_color = new QodeMetaField("color","qode_content_bottom_background_color","","背景颜色","选择内容底部区域颜色");
		$qode_enable_content_bottom_area_container->addChild("qode_content_bottom_background_color",$qode_content_bottom_background_color);

		$qode_choose_content_bottom_sidebar = new QodeMetaField("selectblank","qode_choose_content_bottom_sidebar","","自定义小工具","选择要显示的自定义小工具区域",$qode_custom_sidebars);
		$qode_enable_content_bottom_area_container->addChild("qode_choose_content_bottom_sidebar",$qode_choose_content_bottom_sidebar);

		$qode_content_bottom_sidebar_in_grid = new QodeMetaField("selectblank","qode_content_bottom_sidebar_in_grid","","在网格显示","启用此选项将在网格旋转内容底部",array(
			"no" => "否",
			"yes" => "是"
		));
		$qode_enable_content_bottom_area_container->addChild("qode_content_bottom_sidebar_in_grid",$qode_content_bottom_sidebar_in_grid);

	}

	add_action('qode_meta_boxes_map', 'qode_map_content_bottom_meta_fields');
}