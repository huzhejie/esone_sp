<?php

if(!function_exists('qode_general_options_map')) {
    /**
     * General options page
     */
    function qode_general_options_map(){

$generalPage = new QodeAdminPage("", "常规", "fa fa-institution");
        qode_framework()->qodeOptions->addAdminPage("general", $generalPage);

        // Design Style

$panel1 = new QodePanel("设计风格","design_style");
        $generalPage->addChild("panel1", $panel1);

	$google_fonts = new QodeField("font","google_fonts","-1","字体系列","选择网站默认谷歌字体");
        $panel1->addChild("google_fonts", $google_fonts);

        $additional_google_fonts = new QodeField("yesno","additional_google_fonts","no","附加谷歌字体","", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_additional_google_font_container"));
        $panel1->addChild("additional_google_fonts",$additional_google_fonts);

        $additional_google_font_container = new QodeContainer("additional_google_font_container","additional_google_fonts","no");
        $panel1->addChild("additional_google_font_container",$additional_google_font_container);

        $additional_google_font1 = new QodeField("font","additional_google_font1","-1","字体系列","为网站选择附加谷歌字体");
        $additional_google_font_container->addChild("additional_google_font1",$additional_google_font1);

        $additional_google_font2 = new QodeField("font","additional_google_font2","-1","字体系列","为网站选择附加谷歌字体");
        $additional_google_font_container->addChild("additional_google_font2",$additional_google_font2);

        $additional_google_font3 = new QodeField("font","additional_google_font3","-1","字体系列","为网站选择附加谷歌字体");
        $additional_google_font_container->addChild("additional_google_font3",$additional_google_font3);

        $additional_google_font4 = new QodeField("font","additional_google_font4","-1","字体系列","为网站选择附加谷歌字体");
        $additional_google_font_container->addChild("additional_google_font4",$additional_google_font4);

        $additional_google_font5 = new QodeField("font","additional_google_font5","-1","字体系列","为网站选择附加谷歌字体");
        $additional_google_font_container->addChild("additional_google_font5",$additional_google_font5);

	$first_color = new QodeField("color","first_color","","第一主颜色","选择最有统治力的主题颜色");
        $panel1->addChild("first_color", $first_color);

	$second_color = new QodeField("color","second_color","","第二主颜色","选择第二最有统治力的主题颜色");
        $panel1->addChild("second_color", $second_color);

	$third_color = new QodeField("color","third_color","","第三主颜色","选择第三最有统治力的主题颜色");
        $panel1->addChild("third_color", $third_color);

	$fourth_color = new QodeField("color","fourth_color","","第四主颜色","选择第四最有统治力主题颜色");
        $panel1->addChild("fourth_color", $fourth_color);

	$background_color = new QodeField("color","background_color","","内容背景颜色","选择页面内容区域背景颜色");
        $panel1->addChild("background_color", $background_color);

	$background_color_boxes = new QodeField("color","background_color_boxes","","框背景颜色","选择作品和博客框背景颜色");
        $panel1->addChild("background_color_boxes", $background_color_boxes);

	$selection_color = new QodeField("color","selection_color","","文字选择颜色","选择选择文字时颜色");
        $panel1->addChild("selection_color", $selection_color);

        $group_gradient = qode_add_admin_group(array(
            'name'        => 'group_gradient',
            'title'       => '渐变色',
            'description' => '定义渐变样式颜色',
            'parent'      => $panel1
        ));

            $row_gradient_style1 = qode_add_admin_row(array(
                'name'   => 'row_gradient_style1',
                'parent' => $group_gradient
            ));

                qode_add_admin_field(array(
                    'type'          => 'colorsimple',
                    'name'          => 'gradient_style1_start_color',
                    'default_value' => '#31c8a2',
                    'label'         => '样式 1 - 开始颜色 (默认 #31c8a2)',
                    'parent'        => $row_gradient_style1
                ));

                qode_add_admin_field(array(
                    'type'          => 'colorsimple',
                    'name'          => 'gradient_style1_end_color',
                    'default_value' => '#ae66fd',
                    'label'         => '样式 1 - 结束颜色 (默认 #ae66fd)',
                    'parent'        => $row_gradient_style1
                ));

        $transparent_content = new QodeField("yesno","transparent_content","no","启用统一的网站背景","如果启用，页面内容背景将为透明（除非另外设定）且在这里设置的背景会显示", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_transparent_content_container"));
        $panel1->addChild("transparent_content",$transparent_content);

            $transparent_content_container = new QodeContainer("transparent_content_container","transparent_content","no");
            $panel1->addChild("transparent_content_container",$transparent_content_container);

            $transparent_content_background_color = new QodeField("color","transparent_content_background_color","","背景颜色","选择主体背景颜色，默认是 #ffffff.");
            $transparent_content_container->addChild("transparent_content_background_color",$transparent_content_background_color);

            $transparent_content_background_image = new QodeField("image","transparent_content_background_image","","背景图片","选择背景显示的图片");
            $transparent_content_container->addChild("transparent_content_background_image",$transparent_content_background_image);

            $transparent_content_pattern_background_image = new QodeField("image","transparent_content_pattern_background_image","","背景图案","选择图片用于背景图案");
            $transparent_content_container->addChild("transparent_content_pattern_background_image",$transparent_content_pattern_background_image);

        $overlapping_content = new QodeField("yesno", "overlapping_content", "no", "启用叠加内容", "启用此选项将使内容叠加标题区域或设置幻灯片像素量", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_overlapping_content_container"));
        $panel1->addChild("overlapping_content", $overlapping_content);

        $overlapping_content_container = new QodeContainer("overlapping_content_container", "overlapping_content", "no");
        $panel1->addChild("overlapping_content_container", $overlapping_content_container);

    $overlapping_content_amount = new QodeField("text","overlapping_content_amount","","叠加量（px）","输入你想内容叠加标题区域或幻灯片像素量", array(), array("col_width" => 1));
        $overlapping_content_container->addChild("overlapping_content_amount", $overlapping_content_amount);

    $overlapping_content_padding = new QodeField("text","overlapping_content_padding","","叠加左/右填充（px）","此选项仅在默认（网格）模板采取效果", array(), array("col_width" => 1));
        $overlapping_content_container->addChild("overlapping_content_padding", $overlapping_content_padding);

	$boxed = new QodeField("yesno","boxed","no","框式布局","启用此选项将在网格显示网站内容", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_boxed_container"));
        $panel1->addChild("boxed", $boxed);

        $boxed_container = new QodeContainer("boxed_container", "boxed", "no");
        $panel1->addChild("boxed_container", $boxed_container);

		$background_color_box = new QodeField("color","background_color_box","","页面背景颜色","选择页面背景（body）颜色");
        $boxed_container->addChild("background_color_box", $background_color_box);

		$background_image = new QodeField("image","background_image","","背景图片","选择在背景显示的图片");
        $boxed_container->addChild("background_image", $background_image);

		$pattern_background_image = new QodeField("image","pattern_background_image","","背景图案","选择背景图案使用的图片");
        $boxed_container->addChild("pattern_background_image", $pattern_background_image);

    $paspartu = new QodeField("yesno","paspartu","no","路路通","启用此选项将显示路路通环绕的网站内容", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_paspartu_container"));
        $panel1->addChild("paspartu", $paspartu);

        $paspartu_container = new QodeContainer("paspartu_container", "paspartu", "no");
        $panel1->addChild("paspartu_container", $paspartu_container);

        $paspartu_color = new QodeField("color","paspartu_color","","路路通颜色","选择路路通颜色，默认值是 #ffffff");
        $paspartu_container->addChild("paspartu_color", $paspartu_color);

        $paspartu_width = new QodeField("text","paspartu_width","","路路通大小（%）","输入路路通大小值，默认值是2%（百分比相对于网站宽度）", array(), array("col_width" => 3));
        $paspartu_container->addChild("paspartu_width", $paspartu_width);

        $paspartu_header_alignment = new QodeField("yesno","paspartu_header_alignment","no","路路通对齐页眉","启用此选项将设置页眉内容与路路通");
        $paspartu_container->addChild("paspartu_header_alignment", $paspartu_header_alignment);

        $paspartu_header_inside = new QodeField("yesno","paspartu_header_inside","no","设置页眉内路路通","启用此选项将设置整个页眉在路路通左右边框之间");
        $paspartu_container->addChild("paspartu_header_inside", $paspartu_header_inside);

        $vertical_menu_inside_paspartu = new QodeField("yesno","vertical_menu_inside_paspartu","yes","垂直菜单在路路通","");
        $paspartu_container->addChild("vertical_menu_inside_paspartu", $vertical_menu_inside_paspartu);

        $paspartu_footer_alignment = new QodeField("yesno", "paspartu_footer_alignment", "no", "对齐页脚路路通", "启用此选项将页脚内容与路路通边框对齐");
        $paspartu_container->addChild("paspartu_footer_alignment", $paspartu_footer_alignment);

        $paspartu_on_top = new QodeField("yesno", "paspartu_on_top", "yes", "顶部路路通", "禁用此选项将禁用顶部路路通", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_paspartu_on_top_fixed_container"));
        $paspartu_container->addChild("paspartu_on_top", $paspartu_on_top);

        $paspartu_on_top_fixed_container = new QodeContainer("paspartu_on_top_fixed_container", "paspartu_on_top", "no");
        $paspartu_container->addChild("paspartu_on_top_fixed_container", $paspartu_on_top_fixed_container);

        $paspartu_on_top_fixed = new QodeField("yesno","paspartu_on_top_fixed","no","固定顶部路路通","启用此选项将固定路路通顶部到屏幕顶部");
        $paspartu_on_top_fixed_container->addChild("paspartu_on_top_fixed", $paspartu_on_top_fixed);

        $paspartu_on_bottom_slider_container = new QodeContainer("paspartu_on_bottom_slider_container", "", "");
        $paspartu_container->addChild("paspartu_on_bottom_slider_container", $paspartu_on_bottom_slider_container);

        $paspartu_on_bottom_slider = new QodeField("yesno","paspartu_on_bottom_slider","no","显示幻灯片底部路路通","启用此选项将在幻灯片显示底部路路通");
        $paspartu_on_bottom_slider_container->addChild("paspartu_on_bottom_slider", $paspartu_on_bottom_slider);

        $paspartu_on_bottom = new QodeField("yesno","paspartu_on_bottom","yes","底部路路通","禁用此选项将禁用路路通底部", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_paspartu_on_bottom_fixed_container"));
        $paspartu_container->addChild("paspartu_on_bottom", $paspartu_on_bottom);

        $paspartu_on_bottom_fixed_container = new QodeContainer("paspartu_on_bottom_fixed_container", "paspartu_on_bottom", "no");
        $paspartu_container->addChild("paspartu_on_bottom_fixed_container", $paspartu_on_bottom_fixed_container);

            $paspartu_on_bottom_fixed = new QodeField("yesno","paspartu_on_bottom_fixed","no","固定底部路路通","启用此选项将固定路路通底部到屏幕底部");
        $paspartu_on_bottom_fixed_container->addChild("paspartu_on_bottom_fixed", $paspartu_on_bottom_fixed);

	$enable_content_top_margin = new QodeField("yesno","enable_content_top_margin","no","始终放置内容到页眉下面","启用此选项将始终把内容放到页眉下面");
        $panel1->addChild("enable_content_top_margin", $enable_content_top_margin);

        $initial_content_width = new QodeField("select", "initial_content_width", "grid_1100", "内容初始宽度", '选择在网格中内容初始宽度',
            array(
                "grid_1100" => "1100px (默认)",
                "grid_1200" => "1200px",
                "grid_1300" => "1300px",
                "grid_1400" => "1400px"
            )
        );
        $panel1->addChild("initial_content_width", $initial_content_width);

        // Settings

$panel4 = new QodePanel("设置","settings");
        $generalPage->addChild("panel4", $panel4);

	$page_transitions = new QodeField("select","page_transitions","0","页面过渡",'选择加载页面之间的过渡类型。为了使动画正常工作，你必须在固定链接设置选择"文章名"', array( 0 => "无动画",
            1 => "上/下",
            2 => "淡入",
            3 => "上/下 (入) / 淡出 (出t)",
            4 => "左/右"
        ), array("dependence" => true,
			"hide" => array(
				"0"=>"#qodef_ajax_animate_header_container",
				"1"=>"#qodef_ajax_animate_header_container,#qodef_page_loading_effect_container",
				"2"=>"#qodef_page_loading_effect_container",
				"3"=>"#qodef_page_loading_effect_container",
				"4"=>"#qodef_ajax_animate_header_container,#qodef_page_loading_effect_container"
			),
			"show" => array(
				"0"=>"#qodef_page_loading_effect_container",
				"1"=>"",
				"2"=>"#qodef_ajax_animate_header_container",
				"3"=>"#qodef_ajax_animate_header_container",
				"4"=>""
			) 
		), "enable_grid_elements", array("yes"));
        $panel4->addChild("page_transitions", $page_transitions);

        $page_transitions_notice = new QodeNotice("Ajax页面过渡", '选择加载页面之间的过渡类型。为了使动画正常工作，你必须在固定链接设置选择"文章名"', "由于VC网格元素的原因，AJAX页面过渡被禁用", "enable_grid_elements", "no");
        $panel4->addChild("page_transitions_notice", $page_transitions_notice);
	
		$ajax_animate_header_container = new QodeContainer("ajax_animate_header_container","page_transitions","0");
		$panel4->addChild("ajax_animate_header_container",$ajax_animate_header_container);
		
		$ajax_animate_header = new QodeField("yesno","ajax_animate_header","no","动画页眉","启用此选项将在Ajax页面过渡动画包含页眉区域");
		$ajax_animate_header_container->addChild("ajax_animate_header",$ajax_animate_header);


		$page_loading_effect_container = new QodeContainer("page_loading_effect_container","page_transitions","", array('1','2','3','4'));
		$panel4->addChild("page_loading_effect_container",$page_loading_effect_container);

		$page_loading_effect = new QodeField("yesno","page_loading_effect","no","页面加载效果","为您的网页选择加载效果。 请注意，这与Ajax页面过渡不同。该页面正常加载，没有Ajax，但它将具有加载效果。");
		$page_loading_effect_container->addChild("page_loading_effect",$page_loading_effect);

        $loading_animation = new QodeField("onoff", "loading_animation", "off", "加载动画", "启用此选项将显示页面加载动画", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_loading_animation_container"));
        $panel4->addChild("loading_animation", $loading_animation);

        $loading_animation_container = new QodeContainer("loading_animation_container", "loading_animation", "off");
        $panel4->addChild("loading_animation_container", $loading_animation_container);

		$group1 = new QodeGroup("加载动画图形","选择预加载图形动画的类型和颜色");
        $loading_animation_container->addChild("group1", $group1);

        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);

				$loading_animation_spinner = new QodeField("selectsimple","loading_animation_spinner","pulse","微调","This is some description", array( "pulse" => "脉冲",
	       "double_pulse" => "双脉冲",
            "cube" => "Cube",
	       "rotating_cubes" => "旋转立方体",
	       "stripes" => "条纹",
	       "wave" => "波浪",
	       "two_rotating_circles" => "2 旋转圈",
	       "five_rotating_circles" => "5 旋转圈"
        ));
        $row1->addChild("loading_animation_spinner", $loading_animation_spinner);

				$spinner_color = new QodeField("colorsimple","spinner_color","","微调颜色","This is some description");
        $row1->addChild("spinner_color", $spinner_color);

		$loading_background_color = new QodeField("color", "loading_background_color", "", "背景颜色", '选择背景颜色（注意：此选项仅在启用页面加载效果时应用）');
		$loading_animation_container->addChild("loading_background_color", $loading_background_color);

        $loading_image = new QodeField("image", "loading_image", "", "加载图片", '上传图片显示到页面加载（注意：页面过渡必须设置为"无动画"）');
        $loading_animation_container->addChild("loading_image", $loading_image);

		$loading_animation_left_menu_alignment = new QodeField("yesno","loading_animation_left_menu_alignment","no","中心加载动画到浏览器窗口",'启用此选项将居中加载动画到浏览器窗口，当启用左菜单时代替内容');
        $loading_animation_container->addChild("loading_animation_left_menu_alignment", $loading_animation_left_menu_alignment);

	$smooth_scroll = new QodeField("yesno","smooth_scroll","yes","平滑滚动","启用该选项将执行每个页面上的平滑滚动效果（在Mac和触摸设备除外）");
        $panel4->addChild("smooth_scroll", $smooth_scroll);

	$elements_animation_on_touch = new QodeField("yesno","elements_animation_on_touch","no","移动/触摸屏设备动画元素","启用此选项将允许元素（简码）对移动/触摸屏设备动画");
        $panel4->addChild("elements_animation_on_touch", $elements_animation_on_touch);

	$show_back_button = new QodeField("yesno","show_back_button","yes","显示'返回顶部按钮'","启用此选项将显示返回顶部按钮到任何页面");
        $panel4->addChild("show_back_button", $show_back_button);

	$responsiveness = new QodeField("yesno","responsiveness","yes","自适应","启用此选项将使所有页面自适应");
        $panel4->addChild("responsiveness", $responsiveness);

        $content_sidebar_responsiveness = new QodeField("yesno", "content_sidebar_responsiveness", "no", "平板设备（纵向视图）侧边栏自适应", "启用此选项将启用在纵向视图平板设备的自适应侧边栏。默认行为为移动视图启用自适应侧边栏");
        $panel4->addChild("content_sidebar_responsiveness", $content_sidebar_responsiveness);

        $favicon_image = new QodeField("image", "favicon_image", QODE_ROOT . "/img/favicon.ico", "收藏图片", "选择要显示的收藏图片");
        $panel4->addChild("favicon_image", $favicon_image);

	$internal_no_ajax_links = new QodeField("textarea","internal_no_ajax_links","","加载内部网址不带AJAX（分隔分隔）","要禁用某些网页AJAX转换，在此输入自己的完整URL（例如：http://www.4mudi.com/forum/）");
        $panel4->addChild("internal_no_ajax_links", $internal_no_ajax_links);

        // Custom Code

$panel3 = new QodePanel("自定义代码","custom_code");
        $generalPage->addChild("panel3", $panel3);

	$custom_css = new QodeField("textarea","custom_css","","自定义CSS","在这里输入自定义CSS");
        $panel3->addChild("custom_css", $custom_css);

	$custom_svg_css = new QodeField("textarea", "custom_svg_css", "", "自定义SVG CSS", "在这里输入你的SVG CSS");
        $panel3->addChild("custom_svg_css", $custom_svg_css);

	$custom_js = new QodeField("textarea","custom_js","","自定义JS",'在这里输入你的自定义Javascript (jQuery选择是"$j"，因为冲突模式)');
        $panel3->addChild("custom_js", $custom_js);

        // SEO

        $panel2 = new QodePanel("SEO", "seo");
        $generalPage->addChild("panel2", $panel2);

	$google_analytics_code = new QodeField("text","google_analytics_code","","谷歌分析帐户ID","有了这个字段，你可以在你的网站监控流量");
        $panel2->addChild("google_analytics_code", $google_analytics_code);

	$disable_qode_seo = new QodeField("yesno","disable_qode_seo","no","禁用SEO","启用此选项将关闭SEO", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "#qodef_disable_qode_seo_container",
                "dependence_show_on_yes" => ""));
        $panel2->addChild("disable_qode_seo", $disable_qode_seo);

        $disable_qode_seo_container = new QodeContainer("disable_qode_seo_container", "disable_qode_seo", "yes");
        $panel2->addChild("disable_qode_seo_container", $disable_qode_seo_container);

		$meta_keywords = new QodeField("textarea","meta_keywords","","元关键词","添加用逗号分隔的关键词列表增强SEO");
        $disable_qode_seo_container->addChild("meta_keywords", $meta_keywords);

		$meta_description = new QodeField("textarea","meta_description","","元描述","输入网站简短的描述");
        $disable_qode_seo_container->addChild("meta_description", $meta_description);


		// Google Maps

		$panel_google_maps = new QodePanel("谷歌地图", "google_maps");
		$generalPage->addChild("panel_google_maps", $panel_google_maps);

		$google_maps_api_key = new QodeField("text", "google_maps_api_key", "", "谷歌地图Api Key", "此处插入您的谷歌地图API密钥。有关如何创建一个谷歌地图API密钥的说明，请参阅我们的文档。暂时可以使用 'AIzaSyCwbt1Y6Mzwn-f0Jn3xxXDHgsGqpfRxSiU'");
		$panel_google_maps->addChild("google_maps_api_key", $google_maps_api_key);

    }

    add_action('qode_options_map','qode_general_options_map',10);
}