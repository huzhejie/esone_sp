<?php
if(!function_exists('qode_map_sidebar_meta_fields')) {

	function qode_map_sidebar_meta_fields() {

		$qode_custom_sidebars = qode_get_custom_sidebars();

		$qodeSideBarScopeArray = apply_filters('qode_sidebar_scope_post_types', array('page', 'post', 'portfolio_page'));

		$qodeSideBar = qode_add_meta_box(
			array(
				'scope' => $qodeSideBarScopeArray,
				'title' => esc_html__('Qode Sidebar', 'qode'),
				'name' => 'page_side_bar'
			)
		);

			$qode_show_sidebar = new QodeMetaField("select","qode_show-sidebar","default","布局","选择侧边栏布局",array( "default" => "默认",
			"1" => "右侧边栏 1/3",
			"2" => "右侧边栏 1/4",
			"3" => "左侧边栏 1/3",
			"4" => "左侧边栏 1/4",
		));
		$qodeSideBar->addChild("qode_show-sidebar",$qode_show_sidebar);

		$qode_choose_sidebar = new QodeMetaField("selectblank","qode_choose-sidebar","default","选择侧边栏小工具区域","选择在侧边栏显示的自定义小工具区域", $qode_custom_sidebars);
		$qodeSideBar->addChild("qode_choose-sidebar",$qode_choose_sidebar);

	}

	add_action('qode_meta_boxes_map', 'qode_map_sidebar_meta_fields');
}