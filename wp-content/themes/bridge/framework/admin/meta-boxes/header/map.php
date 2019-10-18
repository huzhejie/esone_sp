<?php
if(!function_exists('qode_map_header_meta_fields')) {

	function qode_map_header_meta_fields() {

		$qodeHeaderScopeArray = apply_filters('qode_header_scope_post_types', array('page', 'post', 'portfolio_page'));
		$qodeHeader = qode_add_meta_box(
			array(
				'scope' => $qodeHeaderScopeArray,
				'title' => esc_html__('Qode Header', 'qode'),
				'name' => 'page_header',
				'hidden_property' => 'vertical_area',
				'hidden_values' => array('yes')
			)
		);

		$qode_header_style = new QodeMetaField("selectblank","qode_header-style","","页眉皮肤","选择一个页眉风格，使该页眉元素（Logo、主菜单、侧菜单按钮）以预定义样式显示", array(
			"light" => "浅色",
			"dark" => "深色"
		));
		$qodeHeader->addChild("qode_header-style",$qode_header_style);

		$qode_header_style_on_scroll = new QodeMetaField("selectblank","qode_header-style-on-scroll","","启用滚动页眉风格","启用此选项，页眉将更改滚动时的风格（取决于行设置），以页眉元素（Logo、主菜单、侧菜单按钮）显示此风格", array(
			"no" => "否",
			"yes" => "是"
		));
		$qodeHeader->addChild("qode_header-style-on-scroll",$qode_header_style_on_scroll);

		$qode_header_color_per_page = new QodeMetaField("color","qode_header_color_per_page","","初始页眉背景颜色","选择页眉区域背景颜色");
		$qodeHeader->addChild("qode_header_color_per_page",$qode_header_color_per_page);

		$qode_header_color_transparency_per_page = new QodeMetaField("text","qode_header_color_transparency_per_page","","初始页眉透明度","为页眉背景颜色选择透明度（0 =完全透明，1 =不透明）", array(), array("col_width" => 3));
		$qodeHeader->addChild("qode_header_color_transparency_per_page",$qode_header_color_transparency_per_page);

		$qode_page_scroll_amount_for_sticky = new QodeMetaField("text","qode_page_scroll_amount_for_sticky","","粘性页眉外观滚动量（px）","定义粘性页眉外观滚动量", array(), array("col_width" => 3),"header_bottom_appearance",array( "regular","fixed","fixed_hiding") );
		$qodeHeader->addChild("qode_page_scroll_amount_for_sticky",$qode_page_scroll_amount_for_sticky);

		$qode_page_hide_initial_sticky = new QodeMetaField("selectblank","qode_page_hide_initial_sticky","","初始隐藏粘性页眉","启用此选项将首先隐藏页眉，只有当用户向下滚动页面时才会显示", array(
			"no" => "否",
			"yes" => "是"
		));
		$qodeHeader->addChild("qode_page_hide_initial_sticky",$qode_page_hide_initial_sticky);


	}

	add_action('qode_meta_boxes_map', 'qode_map_header_meta_fields');
}