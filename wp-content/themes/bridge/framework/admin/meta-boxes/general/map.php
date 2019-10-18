<?php
if(!function_exists('qode_map_general_meta_fields')) {

	function qode_map_general_meta_fields() {

		$qodeGeneralScopeArray = apply_filters('qode_general_scope_post_types', array('page', 'post', 'portfolio_page'));
		$qodeGeneral = qode_add_meta_box(
			array(
				'scope' => $qodeGeneralScopeArray,
				'title' => esc_html__('Qode General', 'qode'),
				'name' => 'page_general'
			)
		);

		$qode_page_background_color = new QodeMetaField("color","qode_page_background_color","","页面背景颜色","选择页面背景（主体）颜色");
		$qodeGeneral->addChild("qode_page_background_color",$qode_page_background_color);

		$qode_show_animation = new QodeMetaField("selectblank", "qode_show-animation", "", "页面过渡", '选择加载页面之间过渡类型.', array(
			"no_animation" => "无动画",
			"updown" => "上/下",
			"fade" => "淡入",
			"updown_fade" => "上/下（入）/淡入（出）",
			"leftright" => "左/右"
		), array(), "enable_grid_elements", array("yes"));
		$qodeGeneral->addChild("qode_show-animation", $qode_show_animation);

		$page_transitions_notice = new QodeNotice("页面过渡",'在加载页面之间选择一种过渡类型。为了使动画正常工作，您必须在固定链接设置中选择“文章名”', "由于VC网格元素，AJAX页面转换被禁用", "enable_grid_elements","no");
		$qodeGeneral->addChild("page_transitions_notice",$page_transitions_notice);

		$qode_revolution_slider = new QodeMetaField("text","qode_revolution-slider","","Layer Slider或幻灯片简码","复制并粘贴位于幻灯片 - > 幻灯片 的简码");
		$qodeGeneral->addChild("qode_revolution-slider",$qode_revolution_slider);

		$qode_enable_content_top_margin = new QodeMetaField("selectblank","qode_enable_content_top_margin","","总是把内容放在页眉下","启用此选项将始终将内容放在页眉下", array(
			"no" => "否",
			"yes" => "是",
		));
		$qodeGeneral->addChild("qode_enable_content_top_margin",$qode_enable_content_top_margin);


	}

	add_action('qode_meta_boxes_map', 'qode_map_general_meta_fields');
}