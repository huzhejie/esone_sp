<?php
if(!function_exists('qode_map_title_meta_fields')) {

	function qode_map_title_meta_fields() {

		$qodeTitleScopeArray = apply_filters('qode_title_scope_post_types', array('page', 'post', 'portfolio_page'));
		$qodeTitle = qode_add_meta_box(
			array(
				'scope' => $qodeTitleScopeArray,
				'title' => esc_html__('Qode Title', 'qode'),
				'name' => 'page_title'
			)
		);

		// Title

		$qode_show_page_title = new QodeMetaField("select","qode_show-page-title","","不显示标题区域","启用此选项将关闭页面标题区域", array(
			"" => "默认",
			"no" => "否",
			"yes" => "是"),
			array("dependence" => true,
				"hide" => array(
					"yes"=>"#qodef_qode_page_title_area_container, #qodef-meta-box-page_title_animations"),
				"show" => array(
					""=>"#qodef_qode_page_title_area_container, #qodef-meta-box-page_title_animations",
					"no"=>"#qodef_qode_page_title_area_container, #qodef-meta-box-page_title_animations") ));
		$qodeTitle->addChild("qode_show-page-title",$qode_show_page_title);

		$qode_page_title_area_container = new QodeContainer("qode_page_title_area_container","qode_show-page-title","yes");
		$qodeTitle->addChild("qode_page_title_area_container",$qode_page_title_area_container);

		$qode_animate_page_title = new QodeMetaField("selectblank","qode_animate-page-title","","动画","为标题区域选择动画",array(
			"no" => "无动画",
			"text_right_left" => "文字从右到左",
			"area_top_bottom" => "标题区域从上到下"
		));
		$qode_page_title_area_container->addChild("qode_animate_page_title",$qode_animate_page_title);

		$qode_show_page_title_text = new QodeMetaField("select","qode_show-page-title-text","","不显示标题文字","启用此选项将隐藏标题文字", array(
			"" => "默认",
			"no" => "否",
			"yes" => "是"),
			array("dependence" => true,
				"hide" => array(
					"yes"=>"#qodef_qode_title_text_container"),
				"show" => array(
					""=>"#qodef_qode_title_text_container",
					"no"=>"#qodef_qode_title_text_container") ));
		$qode_page_title_area_container->addChild("qode_show-page-title-text",$qode_show_page_title_text);

		$qode_title_text_container = new QodeContainer("qode_title_text_container","qode_show-page-title-text","yes");
		$qode_page_title_area_container->addChild("qode_title_text_container",$qode_title_text_container);

		$qode_page_title_position = new QodeMetaField("selectblank","qode_page_title_position","","标题文字对齐方式","指定标题文本对齐方式",array(
			"left" => "左",
			"center" => "中",
			"right" => "右"
		));
		$qode_title_text_container->addChild("qode_page_title_position",$qode_page_title_position);

		$group1 = new QodeGroup("标题文字风格","定义标题区域文字风格");
		$qode_title_text_container->addChild("group1",$group1);

		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);

		$qode_page_title_color = new QodeMetaField("colorsimple","qode_page-title-color","","文字颜色","ThisIsDescription");
		$row1->addChild("qode_page-title-color",$qode_page_title_color);

		$qode_page_title_font_size = new QodeMetaField("selectblanksimple","qode_page_title_font_size","","文字大小","ThisIsDescription",array(
			"small" => "小",
			"medium" => "中",
			"large" => "大"
		));
		$row1->addChild("qode_page_title_font_size",$qode_page_title_font_size);

		$qode_title_text_shadow = new QodeMetaField("selectblanksimple","qode_title_text_shadow","","文字阴影","ThisIsDescription",array(
			"no" => "否",
			"yes" => "是"
		));
		$row1->addChild("qode_title_text_shadow",$qode_title_text_shadow);

		$qode_page_title_background_color = new QodeMetaField("color","qode_page-title-background-color","","背景颜色","选择标题区域背景颜色");
		$qode_page_title_area_container->addChild("qode_page-title-background-color",$qode_page_title_background_color);

		$qode_show_page_title_image = new QodeMetaField("yesempty","qode_show-page-title-image","","不显示背景图片","启用此选项以在标题区域隐藏背景图片", array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef_qode_background_image_container", "dependence_show_on_yes" => "#qodef_qode_title-height"));
		$qode_page_title_area_container->addChild("qode_show-page-title-image",$qode_show_page_title_image);

		$qode_background_image_container = new QodeContainer("qode_background_image_container","qode_show-page-title-image","yes");
		$qode_page_title_area_container->addChild("qode_background_image_container",$qode_background_image_container);

		$qode_title_image = new QodeMetaField("image","qode_title-image","","背景图片","选择标题区域背景图片");
		$qode_background_image_container->addChild("qode_title-image",$qode_title_image);

		$qode_title_overlay_image = new QodeMetaField("image","qode_title-overlay-image","","图案叠加图片","选择要用作标题区域图案的图像");
		$qode_background_image_container->addChild("qode_title-overlay-image",$qode_title_overlay_image);

		$qode_responsive_title_image = new QodeMetaField("selectblank","qode_responsive-title-image","","自适应背景图片","你想使标题背景图片自适应吗？", array(
			"no" => "否",
			"yes" => "是"),
			array("dependence" => true,
				"hide" => array(
					"yes"=>"#qodef_qode_responsive_title_image_container, #qodef_qode_title-height"),
				"show" => array(
					""=>"#qodef_qode_responsive_title_image_container, #qodef_qode_title-height",
					"no"=>"#qodef_qode_responsive_title_image_container, #qodef_qode_title-height") ));
		$qode_background_image_container->addChild("qode_responsive-title-image",$qode_responsive_title_image);


		$qode_responsive_title_image_container = new QodeContainer("qode_responsive_title_image_container","qode_responsive-title-image","yes");
		$qode_background_image_container->addChild("qode_responsive_title_image_container",$qode_responsive_title_image_container);

		$qode_fixed_title_image = new QodeMetaField("selectblank","qode_fixed-title-image","","视差背景图片","你想背景图片有视差效果吗？", array(
			"no" => "否",
			"yes" => "是",
			"yes_zoom" => "是，带缩小"
		));
		$qode_responsive_title_image_container->addChild("qode_fixed-title-image",$qode_fixed_title_image);

		$qode_title_height = new QodeMetaField("text","qode_title-height","","标题高度（px）","设置标题区域高度，以像素为单位", array(), array("col_width" => 3));
		$qode_page_title_area_container->addChild("qode_title-height",$qode_title_height);

		$qode_separator_bellow_title = new QodeMetaField("select","qode_separator_bellow_title","","标题下的分隔符","你想在标题文本下有分隔符吗？",
			array(
				"" => "",
				"no" => "否",
				"yes" => "是"
			),
			array(
				'dependence' => true,
				'hide' => array(
					'no' => '#qodef_animation_page_page_separator_container'
				),
				'show' => array(
					'' => '#qodef_animation_page_page_separator_container',
					'yes' => '#qodef_animation_page_page_separator_container'
				)
			)
		);
		$qode_page_title_area_container->addChild("qode_separator_bellow_title",$qode_separator_bellow_title);

		$qode_title_separator_color = new QodeMetaField("color","qode_title_separator_color","","分隔符颜色","选择分隔符颜色");
		$qode_page_title_area_container->addChild("qode_title_separator_color",$qode_title_separator_color);

		$qode_title_gradient_separator = new QodeMetaField("select", "qode_title_gradient_separator_meta", "", "启用分隔符渐变颜色", "", array(
			""		=> "默认",
			"no"	=> "否",
			"yes"	=> "是"
		));
		$qode_page_title_area_container->addChild("qode_title_gradient_separator_meta", $qode_title_gradient_separator);

		$qode_enable_page_title_angled = new QodeMetaField("selectblank","qode_enable_page_title_angled","","启用角度标题","启用此选项将显示标题角度", array(
			"no" => "否",
			"yes" => "是"),
			array("dependence" => true,
				"hide" => array(
					"no"=>"#qodef_qode_title_angled_container",
					""=>"#qodef_qode_title_angled_container"),
				"show" => array(
					"yes"=>"#qodef_qode_title_angled_container") ));
		$qode_page_title_area_container->addChild("qode_enable_page_title_angled",$qode_enable_page_title_angled);

		$qode_title_angled_container = new QodeContainer("qode_title_angled_container","qode_enable_page_title_angled","");
		$qode_page_title_area_container->addChild("qode_title_angled_container",$qode_title_angled_container);

		$qode_title_angled_section_direction = new QodeMetaField("selectblank","qode_title_angled_section_direction","","角度方向","选择标题角度方向", array(
			"from_left_to_right" => "从左到右",
			"from_right_to_left" => "从右到左"
		));
		$qode_title_angled_container->addChild("qode_title_angled_section_direction",$qode_title_angled_section_direction);

		$qode_title_angled_section_color = new QodeMetaField("color","qode_title_angled_section_color","","背景颜色","选择标题角度背景颜色");
		$qode_title_angled_container->addChild("qode_title_angled_section_color",$qode_title_angled_section_color);


		$qode_enable_breadcrumbs = new QodeMetaField("selectblank","qode_enable_breadcrumbs","","启用面包屑导航","你想在标题区域显示面包屑导航吗？",
			array(
				"no" => "否",
				"yes" => "是"
			),
			array(
				'dependence' => true,
				'hide' => array(
					'no' => '#qodef_animation_page_page_breadcrumbs_container'
				),
				'show' => array(
					'yes' => '#qodef_animation_page_page_breadcrumbs_container',
					'' => '#qodef_animation_page_page_breadcrumbs_container'
				)
			)
		);
		$qode_page_title_area_container->addChild("qode_enable_breadcrumbs",$qode_enable_breadcrumbs);

		$qode_page_breadcrumbs_color = new QodeMetaField("color","qode_page_breadcrumbs_color","","面包屑导航颜色","选择面包屑导航文字颜色 ");
		$qode_page_title_area_container->addChild("qode_page_breadcrumbs_color",$qode_page_breadcrumbs_color);

		$qode_page_subtitle = new QodeMetaField("text","qode_page_subtitle","","子标题文字","输入子标题文字");
		$qode_page_title_area_container->addChild("qode_page_subtitle",$qode_page_subtitle);

		$qode_page_subtitle_color = new QodeMetaField("color","qode_page_subtitle_color","","子标题文字颜色","选择子标题文字颜色");
		$qode_page_title_area_container->addChild("qode_page_subtitle_color",$qode_page_subtitle_color);

		$qode_page_text_above_title = new QodeMetaField("text","qode_page_text_above_title","","标题之上文字","输入标题之上文字");
		$qode_page_title_area_container->addChild("qode_page_text_above_title",$qode_page_text_above_title);

		$qode_page_text_above_title_color = new QodeMetaField("color","qode_page_text_above_title_color","","标题之上文字颜色","选择标题之上文字颜色");
		$qode_page_title_area_container->addChild("qode_page_text_above_title_color",$qode_page_text_above_title_color);

		$group_margin_after_title = new QodeGroup("标题后的间距","定义标题之后间距。如果禁用标题，此选项也将生效，并将内容向下移动设定值。");
		$qodeTitle->addChild("group_margin_after_title",$group_margin_after_title);

		$row1 = new QodeRow();
		$group_margin_after_title->addChild("row1",$row1);

		$qode_margin_after_title = new QodeMetaField("textsimple","qode_margin_after_title","","标题后边距 (px)","设置标题区域下边距");
		$row1->addChild("qode_margin_after_title",$qode_margin_after_title);

		$qode_margin_after_title_mobile = new QodeMetaField("selectblanksimple","qode_margin_after_title_mobile","","设置手机页眉的这个下边距","", array(
			"no" => "否",
			"yes" => "是"
		));
		$row1->addChild("qode_margin_after_title_mobile",$qode_margin_after_title_mobile);


	}

	add_action('qode_meta_boxes_map', 'qode_map_title_meta_fields');
}

if(!function_exists('qode_map_title_animations_meta_fields')) {

	// Title Animations

	function qode_map_title_animations_meta_fields() {
		$qodeTitleAnimations = qode_add_meta_box(
			array(
				'scope' => array('page', 'portfolio_page', 'post'),
				'title' => esc_html__('Qode Scroll Title Animations', 'qode'),
				'name' => 'page_title_animations',
				'hidden_property' => 'qode_show-page-title',
				'hidden_values' => array('yes')
			)
		);

		//Whole title content animation
		$page_page_title_whole_content_animations = new QodeMetaField('selectblank', 'page_page_title_whole_content_animations', '', '启用整个标题内容动画', '此选项将启用整个标题内容动画', array(
			'no' => '否',
			'yes' => '是'
		),
			array(
				'dependence' => true,
				'hide' => array(
					'' => '#qodef_page_page_title_whole_content_animations_container',
					'no' => '#qodef_page_page_title_whole_content_animations_container'
				),
				'show' => array(
					'yes' => '#qodef_page_page_title_whole_content_animations_container'
				)
			));
		$qodeTitleAnimations->addChild('page_page_title_whole_content_animations', $page_page_title_whole_content_animations);

		$page_page_title_whole_content_animations_container = new QodeContainer('page_page_title_whole_content_animations_container', 'page_page_title_whole_content_animations', '', array('', 'no'));
		$qodeTitleAnimations->addChild('page_page_title_whole_content_animations_container', $page_page_title_whole_content_animations_container);

		$page_page_title_whole_content_animations_data_start = new QodeGroup('滚动动画开始点', '这些是滚动动画中第一个关键帧的属性');
		$page_page_title_whole_content_animations_container->addChild('page_page_title_whole_content_animations_data_start', $page_page_title_whole_content_animations_data_start);

		$row1 = new QodeRow();
		$page_page_title_whole_content_animations_data_start->addChild('row1', $row1);

		$page_page_title_whole_content_data_start = new QodeMetaField('textsimple', 'page_page_title_whole_content_data_start', '', '滚动条顶部距离（px）');
		$row1->addChild('page_page_title_whole_content_data_start', $page_page_title_whole_content_data_start);

		$page_page_title_whole_content_start_custom_style = new QodeMetaField('textareasimple', 'page_page_title_whole_content_start_custom_style', '', '输入用分号分隔的CSS声明');
		$row1->addChild('page_page_title_whole_content_start_custom_style', $page_page_title_whole_content_start_custom_style);

		$page_page_title_whole_content_animations_data_end = new QodeGroup('滚动动画终点', '这些是滚动动画中最后一个关键帧的属性');
		$page_page_title_whole_content_animations_container->addChild('page_page_title_whole_content_animations_data_end', $page_page_title_whole_content_animations_data_end);

		$row2 = new QodeRow();
		$page_page_title_whole_content_animations_data_end->addChild('row2', $row2);

		$page_page_title_whole_content_data_end = new QodeMetaField('textsimple', 'page_page_title_whole_content_data_end', '', '滚动条顶部距离（px）');
		$row2->addChild('page_page_title_whole_content_data_end', $page_page_title_whole_content_data_end);

		$page_page_title_whole_content_end_custom_style = new QodeMetaField('textareasimple', 'page_page_title_whole_content_end_custom_style', '', '输入用分号分隔的CSS声明');
		$row2->addChild('page_page_title_whole_content_end_custom_style', $page_page_title_whole_content_end_custom_style);


		//Title Animations
		$animation_page_page_title_container = new QodeContainerNoStyle('animation_page_page_title_container', 'qode_show-page-title-text', 'yes');
		$qodeTitleAnimations->addChild('animation_page_page_title_container', $animation_page_page_title_container);

		$page_page_title_animations = new QodeMetaField('selectblank', 'page_page_title_animations', '', '启用页面标题动画', '此选项将启用页面标题滚动动画',
			array(
				'no' => '否',
				'yes' => '是'
			),
			array(
				'dependence' => true,
				'hide' => array(
					'' => '#qodef_page_page_title_animations_container',
					'no' => '#qodef_page_page_title_animations_container'
				),
				'show' => array(
					'yes' => '#qodef_page_page_title_animations_container'
				) ));

		$animation_page_page_title_container->addChild('page_page_title_animations', $page_page_title_animations);

		$page_page_title_animations_container = new QodeContainer('page_page_title_animations_container', 'page_page_title_animations', '', array('', 'no'));
		$animation_page_page_title_container->addChild('page_page_title_animations_container', $page_page_title_animations_container);

		$page_page_title_animations_data_start = new QodeGroup('滚动动画开始点', '这些是滚动动画中第一个关键帧的属性');
		$page_page_title_animations_container->addChild('page_page_title_animations_data_start', $page_page_title_animations_data_start);

		$row1 = new QodeRow();
		$page_page_title_animations_data_start->addChild('row1', $row1);

		$page_page_title_data_start = new QodeMetaField('textsimple', 'page_page_title_data_start', '', '滚动条顶部距离（px）');
		$row1->addChild('page_page_title_data_start', $page_page_title_data_start);

		$page_page_title_start_custom_style = new QodeMetaField('textareasimple', 'page_page_title_start_custom_style', '', '输入用分号分隔的CSS声明');
		$row1->addChild('page_page_title_start_custom_style', $page_page_title_start_custom_style);

		$page_page_title_animations_data_end = new QodeGroup('滚动动画终点', '这些是滚动动画中最后一个关键帧的属性');
		$page_page_title_animations_container->addChild('page_page_title_animations_data_end', $page_page_title_animations_data_end);

		$row2 = new QodeRow();
		$page_page_title_animations_data_end->addChild('row2', $row2);

		$page_page_title_data_end = new QodeMetaField('textsimple', 'page_page_title_data_end', '', '滚动条顶部距离（px）');
		$row2->addChild('page_page_title_data_end', $page_page_title_data_end);

		$page_page_title_end_custom_style = new QodeMetaField('textareasimple', 'page_page_title_end_custom_style', '', '输入用分号分隔的CSS声明');
		$row2->addChild('page_page_title_end_custom_style', $page_page_title_end_custom_style);

		//Title Separator Animations
		$animation_page_page_separator_container = new QodeContainerNoStyle('animation_page_page_separator_container', 'qode_separator_bellow_title', 'no');
		$qodeTitleAnimations->addChild('animation_page_page_separator_container', $animation_page_page_separator_container);

		$page_page_title_separator_animations = new QodeMetaField('selectblank', 'page_page_title_separator_animations', '', '启用页面分隔符标题动画', '此选项将启用页面标题分隔符滚动动画',
			array(
				'no' => '否',
				'yes' => '是'
			),
			array(
				'dependence' => true,
				'hide' => array(
					'' => '#qodef_page_page_title_separator_animations_container',
					'no' => '#qodef_page_page_title_separator_animations_container'
				),
				'show' => array(
					'yes' => '#qodef_page_page_title_separator_animations_container'
				)
			));
		$animation_page_page_separator_container->addChild('page_page_title_separator_animations', $page_page_title_separator_animations);

		$page_page_title_separator_animations_container = new QodeContainer('page_page_title_separator_animations_container', 'page_page_title_separator_animations', '', array('no', ''));
		$animation_page_page_separator_container->addChild('page_page_title_separator_animations_container', $page_page_title_separator_animations_container);

		$page_page_title_separator_animations_data_start = new QodeGroup('滚动动画开始点', '这些是滚动动画中第一个关键帧的属性');
		$page_page_title_separator_animations_container->addChild('page_page_title_separator_animations_data_start', $page_page_title_separator_animations_data_start);

		$row1 = new QodeRow();
		$page_page_title_separator_animations_data_start->addChild('row1', $row1);

		$page_page_title_separator_data_start = new QodeMetaField('textsimple', 'page_page_title_separator_data_start', '', '滚动条顶部距离（px）');
		$row1->addChild('page_page_title_separator_data_start', $page_page_title_separator_data_start);

		$page_page_title_separator_start_custom_style = new QodeMetaField('textareasimple', 'page_page_title_separator_start_custom_style', '', '输入用分号分隔的CSS声明');
		$row1->addChild('page_page_title_separator_start_custom_style', $page_page_title_separator_start_custom_style);

		$page_page_title_separator_animations_data_end = new QodeGroup('滚动动画终点', '这些是滚动动画中最后一个关键帧的属性');
		$page_page_title_separator_animations_container->addChild('page_page_title_separator_animations_data_end', $page_page_title_separator_animations_data_end);

		$row2 = new QodeRow();
		$page_page_title_separator_animations_data_end->addChild('row2', $row2);

		$page_page_title_separator_data_end = new QodeMetaField('textsimple', 'page_page_title_separator_data_end', '', '滚动条顶部距离（px）');
		$row2->addChild('page_page_title_separator_data_end', $page_page_title_separator_data_end);

		$page_page_title_separator_end_custom_style = new QodeMetaField('textareasimple', 'page_page_title_separator_end_custom_style', '', '输入用分号分隔的CSS声明');
		$row2->addChild('page_page_title_separator_end_custom_style', $page_page_title_separator_end_custom_style);

		//Subtitle Animations
		$page_page_subtitle_animations = new QodeMetaField('selectblank', 'page_page_subtitle_animations', '', '启用页面子标题动画', '此选项将启用页面子标题滚动动画',
			array(
				'no' => '否',
				'yes' => '是'
			),
			array(
				'dependence' => true,
				'hide' => array(
					'' => '#qodef_page_page_subtitle_animations_container',
					'no' => '#qodef_page_page_subtitle_animations_container'
				),
				'show' => array(
					'yes' => '#qodef_page_page_subtitle_animations_container'
				)
			));
		$qodeTitleAnimations->addChild('page_page_subtitle_animations', $page_page_subtitle_animations);

		$page_page_subtitle_animations_container = new QodeContainer('page_page_subtitle_animations_container', 'page_page_subtitle_animations', '', array('', 'no'));
		$qodeTitleAnimations->addChild('page_page_subtitle_animations_container', $page_page_subtitle_animations_container);

		$page_page_subtitle_animations_data_start = new QodeGroup('滚动动画开始点', '这些是滚动动画中第一个关键帧的属性');
		$page_page_subtitle_animations_container->addChild('page_page_subtitle_animations_data_start', $page_page_subtitle_animations_data_start);

		$row1 = new QodeRow();
		$page_page_subtitle_animations_data_start->addChild('row1', $row1);

		$page_page_subtitle_data_start = new QodeMetaField('textsimple', 'page_page_subtitle_data_start', '', '滚动条顶部距离（px）');
		$row1->addChild('page_page_subtitle_data_start', $page_page_subtitle_data_start);

		$page_page_subtitle_start_custom_style = new QodeMetaField('textareasimple', 'page_page_subtitle_start_custom_style', '', '输入用分号分隔的CSS声明');
		$row1->addChild('page_page_subtitle_start_custom_style', $page_page_subtitle_start_custom_style);

		$page_page_subtitle_animations_data_end = new QodeGroup('滚动动画终点', '这些是滚动动画中最后一个关键帧的属性');
		$page_page_subtitle_animations_container->addChild('page_page_subtitle_animations_data_end', $page_page_subtitle_animations_data_end);

		$row2 = new QodeRow();
		$page_page_subtitle_animations_data_end->addChild('row2', $row2);

		$page_page_subtitle_data_end = new QodeMetaField('textsimple', 'page_page_subtitle_data_end', '', '滚动条顶部距离（px）');
		$row2->addChild('page_page_subtitle_data_end', $page_page_subtitle_data_end);

		$page_page_subtitle_end_custom_style = new QodeMetaField('textareasimple', 'page_page_subtitle_end_custom_style', '', '输入用分号分隔的CSS声明');
		$row2->addChild('page_page_subtitle_end_custom_style', $page_page_subtitle_end_custom_style);

		//Breadcrumb animations
		$animation_page_page_breadcrumbs_container = new QodeContainerNoStyle('animation_page_page_breadcrumbs_container', 'qode_enable_breadcrumbs', 'no');
		$qodeTitleAnimations->addChild('animation_page_page_breadcrumbs_container', $animation_page_page_breadcrumbs_container);

		$page_page_title_breadcrumbs_animations = new QodeMetaField('selectblank', 'page_page_title_breadcrumbs_animations', '', '启用页面标题面包屑导航动画', '此选项将启用页面标题面包屑滚动动画',
			array(
				'no' => '否',
				'yes' => '是'
			),
			array(
				'dependence' => true,
				'hide' => array(
					'' => '#qodef_page_page_title_breadcrumbs_animations_container',
					'no' => '#qodef_page_page_title_breadcrumbs_animations_container'
				),
				'show' => array(
					'yes' => '#qodef_page_page_title_breadcrumbs_animations_container'
				)
			));
		$animation_page_page_breadcrumbs_container->addChild('page_page_title_breadcrumbs_animations', $page_page_title_breadcrumbs_animations);

		$page_page_title_breadcrumbs_animations_container = new QodeContainer('page_page_title_breadcrumbs_animations_container', 'page_page_title_breadcrumbs_animations', '', array('', 'no'));
		$animation_page_page_breadcrumbs_container->addChild('page_page_title_breadcrumbs_animations_container', $page_page_title_breadcrumbs_animations_container);

		$page_page_title_breadcrumbs_animations_data_start = new QodeGroup('滚动动画开始点', '这些是滚动动画中第一个关键帧的属性');
		$page_page_title_breadcrumbs_animations_container->addChild('page_page_title_breadcrumbs_animations_data_start', $page_page_title_breadcrumbs_animations_data_start);

		$row1 = new QodeRow();
		$page_page_title_breadcrumbs_animations_data_start->addChild('row1', $row1);

		$page_page_title_breadcrumbs_data_start = new QodeMetaField('textsimple', 'page_page_title_breadcrumbs_data_start', '', '滚动条顶部距离（px）');
		$row1->addChild('page_page_title_breadcrumbs_data_start', $page_page_title_breadcrumbs_data_start);

		$page_page_title_breadcrumbs_start_custom_style = new QodeMetaField('textareasimple', 'page_page_title_breadcrumbs_start_custom_style', '', '输入用分号分隔的CSS声明');
		$row1->addChild('page_page_title_breadcrumbs_start_custom_style', $page_page_title_breadcrumbs_start_custom_style);

		$page_page_title_breadcrumbs_animations_data_end = new QodeGroup('滚动动画终点', '这些是滚动动画中最后一个关键帧的属性');
		$page_page_title_breadcrumbs_animations_container->addChild('page_page_title_breadcrumbs_animations_data_end', $page_page_title_breadcrumbs_animations_data_end);

		$row2 = new QodeRow();
		$page_page_title_breadcrumbs_animations_data_end->addChild('row2', $row2);

		$page_page_title_breadcrumbs_data_end = new QodeMetaField('textsimple', 'page_page_title_breadcrumbs_data_end', '', '滚动条顶部距离（px）');
		$row2->addChild('page_page_title_breadcrumbs_data_end', $page_page_title_breadcrumbs_data_end);

		$page_page_title_breadcrumbs_end_custom_style = new QodeMetaField('textareasimple', 'page_page_title_breadcrumbs_end_custom_style', '', '输入用分号分隔的CSS声明');
		$row2->addChild('page_page_title_breadcrumbs_end_custom_style', $page_page_title_breadcrumbs_end_custom_style);


	}

	add_action('qode_meta_boxes_map', 'qode_map_title_animations_meta_fields');
}