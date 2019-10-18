<?php
if(!function_exists('qode_haeder_options_map')) {
    /**
     * Header options page
     */
    function qode_haeder_options_map(){

$headerandfooterPage = new QodeAdminPage("_header", "页眉", "fa fa-header");
        qode_framework()->qodeOptions->addAdminPage("headerandfooter", $headerandfooterPage);

        // Header Position

$panel6 = new QodePanel("页眉位置", "header_position");
        $headerandfooterPage->addChild("panel6", $panel6);
	$vertical_area = new QodeField("yesno","vertical_area","no","切换到左侧菜单","启用此选项将切换到左侧菜单区域（默认是顶赔菜单）", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "#qodef_header_panel,#qodef_header_top_panel,#qodef_enable_search_panel,#qodef_enable_menus_panel,#qodef_enable_side_area_panel,#qodef_enable_popup_menu_panel,#qodef_language_switcher",
                "dependence_show_on_yes" => "#qodef_vertical_areas_panel"));
        $panel6->addChild("vertical_area", $vertical_area);

        // Header

$panel5 = new QodePanel("页眉","header_panel","vertical_area","yes");
        $headerandfooterPage->addChild("panel5", $panel5);
	$header_in_grid = new QodeField("yesno","header_in_grid","yes","网格页眉","启用此选项将在网格显示页眉内容");
        $panel5->addChild("header_in_grid", $header_in_grid);
        $header_bottom_appearance = new QodeField("select", "header_bottom_appearance", "regular", "页眉类型", "选择页眉布局和行为",
			array(
			"regular" => "正常",
       "fixed" => "固定",
	   "fixed fixed_minimal" => "固定最小",
       "fixed_hiding" => "固定高级",
	   "fixed_top_header" => "固定页眉顶部",
       "stick" => "粘性",
       "stick menu_bottom" => "粘性展开",
       "stick_with_left_right_menu" => "粘性分隔"
        ),
            array("dependence" => true,
                "hide" => array(
                    "regular" => "#qodef_search_left_sidearea_right_container,#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_height_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_scroll,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_background_color_sticky,#qodef_header_background_transparency_scroll,#qodef_header_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_header_fixed_top_logo_background_container",
                    "fixed" => "#qodef_search_left_sidearea_right_container,#qodef_header_top_height_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container, #qodef_header_fixed_top_logo_background_container",
                    "fixed fixed_minimal" => "#qodef_search_left_sidearea_right_container,#qodef_header_top_height_container,#qodef_menu_position_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_header_fixed_top_logo_background_container",
                    "fixed_top_header" => "#qodef_search_left_sidearea_right_container,#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_header_height_container,#qodef_menu_position_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container",
                    "fixed_hiding" => "#qodef_header_top_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky, #qodef_header_fixed_top_logo_background_container",
                    "stick menu_bottom" => "#qodef_search_left_sidearea_right_container,#qodef_header_top_height_container,#qodef_menu_background_color_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_header_fixed_top_logo_background_container",
                    "stick_with_left_right_menu" => "#qodef_search_left_sidearea_right_container,#qodef_header_top_height_container,#qodef_menu_background_color_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_header_fixed_top_logo_background_container",
                    "stick" => "#qodef_search_left_sidearea_right_container,#qodef_header_top_height_container,#qodef_menu_background_color_container,#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_header_fixed_top_logo_background_container"),
                "show" => array(
                    "regular" => "#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_menu_position_container",
                    "fixed" => "#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_background_color_scroll,#qodef_header_background_transparency_scroll",
                    "fixed fixed_minimal" => "#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_header_height_scroll,#qodef_header_background_color_scroll,#qodef_header_background_transparency_scroll",
                    "fixed_top_header" => "#qodef_header_top_height_container,#qodef_header_height_scroll,#qodef_header_fixed_top_logo_background_container",
                    "stick" => "#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_menu_position_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky",
                    "stick menu_bottom" => "#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky",
                    "stick_with_left_right_menu" => "#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky",
                    "fixed_hiding" => "#qodef_search_left_sidearea_right_container,#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_menu_background_color_container,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_scroll_amount_for_fixed_hiding_container")));
        $panel5->addChild("header_bottom_appearance", $header_bottom_appearance);

        $search_left_sidearea_right_container = new QodeContainer("search_left_sidearea_right_container", "header_bottom_appearance", "", array("regular", "fixed", "fixed_top_header", "fixed fixed_minimal", "stick", "stick menu_bottom", "stick_with_left_right_menu", "fixed_top_header", "fixed fixed_minimal"));
        $panel5->addChild("search_left_sidearea_right_container", $search_left_sidearea_right_container);

		$search_left_sidearea_right = new QodeField("yesno","search_left_sidearea_right","no","放置搜索和侧区域图标到页眉一侧 ","启用此选项将设置搜索图标到页眉左侧，区域图标到页眉右侧");
        $search_left_sidearea_right_container->addChild("search_left_sidearea_right", $search_left_sidearea_right);

        $scroll_amount_for_sticky_container = new QodeContainer("scroll_amount_for_sticky_container", "header_bottom_appearance", "", array("regular", "fixed", "fixed_hiding", "fixed fixed_minimal", "fixed_top_header"));
        $panel5->addChild("scroll_amount_for_sticky_container", $scroll_amount_for_sticky_container);
		$scroll_amount_for_sticky = new QodeField("text","scroll_amount_for_sticky","","粘性滚动量（px）","启用粘性菜单滚动量（像素）", array(), array("col_width" => 3));
        $scroll_amount_for_sticky_container->addChild("scroll_amount_for_sticky", $scroll_amount_for_sticky);

		$hide_initial_sticky = new QodeField("yesno","hide_initial_sticky","no","初始隐藏页眉","启用此选项将在初始隐藏页眉，且它仅在用户向下滚动页面时显示");
        $scroll_amount_for_sticky_container->addChild("hide_initial_sticky", $hide_initial_sticky);

        $scroll_amount_for_fixed_hiding_container = new QodeContainer("scroll_amount_for_fixed_hiding_container", "header_bottom_appearance", "", array("regular", "fixed", "stick", "stick menu_bottom", "stick_with_left_right_menu", "fixed fixed_minimal", "fixed_top_header"));
        $panel5->addChild("scroll_amount_for_fixed_hiding_container", $scroll_amount_for_fixed_hiding_container);
        $scroll_amount_for_fixed_hiding = new QodeField("text","scroll_amount_for_fixed_hiding","","滚动量（px）","输入隐藏菜单滚动量（像素）", array(), array("col_width" => 3));
        $scroll_amount_for_fixed_hiding_container->addChild("scroll_amount_for_fixed_hiding", $scroll_amount_for_fixed_hiding);

        $menu_position_container = new QodeContainer("menu_position_container", "header_bottom_appearance", "", array("stick menu_bottom", "stick_with_left_right_menu", "fixed_hiding", "fixed fixed_minimal", "fixed_top_header"));
        $panel5->addChild("menu_position_container", $menu_position_container);
        $menu_position = new QodeField("select", "menu_position", "", "菜单位置", "选择菜单位置", array(
            "-1" => "右",
            "center" => "中",
            "left" => "左"
        ));
        $menu_position_container->addChild("menu_position", $menu_position);
	    $center_logo_image = new QodeField("yesno","center_logo_image","no","居中Logo","启用此选项将居中LOGO并在上面菜单定位它", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_center_logo_image_container"));
        $menu_position_container->addChild("center_logo_image", $center_logo_image);

        $center_logo_image_container = new QodeContainer("center_logo_image_container", "center_logo_image", "no");
        $menu_position_container->addChild("center_logo_image_container", $center_logo_image_container);

	$search_left_sidearea_right_regular = new QodeField("yesno","search_left_sidearea_right_regular","no","放置搜索和侧区域图标到页眉一侧 ","启用此选项将设置搜索图标到页眉左侧，区域图标到页眉右侧");
        $center_logo_image_container->addChild("search_left_sidearea_right_regular", $search_left_sidearea_right_regular);

    $center_logo_image_animate = new QodeField("yesno","center_logo_image_animate","no","动画居中Logo","启用此选项将在加载时动画LOGO");
        $center_logo_image_container->addChild("center_logo_image_animate", $center_logo_image_animate);

        $disable_text_shadow_for_sticky_container = new QodeContainer("disable_text_shadow_for_sticky_container", "header_bottom_appearance", "", array("fixed_top_header", "regular"));
        $panel5->addChild("disable_text_shadow_for_sticky_container", $disable_text_shadow_for_sticky_container);

		$disable_text_shadow_for_sticky = new QodeField("yesno","disable_text_shadow_for_sticky","no","禁用滚动页眉阴影","启用此选项将禁用滚动/粘性页眉阴影");
        $disable_text_shadow_for_sticky_container->addChild("disable_text_shadow_for_sticky", $disable_text_shadow_for_sticky);

        $header_height_container = new QodeContainerNoStyle("header_height_container", "header_bottom_appearance", "", array("fixed_top_header"));
        $panel5->addChild("header_height_container", $header_height_container);
    $group1 = new QodeGroup("页眉高度","输入页眉高度像素");
        $header_height_container->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);
        $header_height = new QodeField("textsimple","header_height","","初始（px）","初始页眉 (px)");
        $row1->addChild("header_height", $header_height);
        $header_height_scroll = new QodeField("textsimple","header_height_scroll","","滚动之后(px)","This is some description", array(), array(),"header_bottom_appearance", array( "regular","stick","stick menu_bottom","stick_with_left_right_menu","fixed_hiding"));
        $row1->addChild("header_height_scroll", $header_height_scroll);
        $header_height_sticky = new QodeField("textsimple","header_height_sticky","","滚动之后(px)","This is some description", array(), array(),"header_bottom_appearance", array( "regular","fixed","fixed_hiding", "fixed fixed_minimal","fixed_top_header"));
        $row1->addChild("header_height_sticky", $header_height_sticky);
        $header_height_scroll_hidden = new QodeField("textsimple","header_height_scroll_hidden","","滚动之后 (px)","This is some description", array(), array(),"header_bottom_appearance", array( "regular","fixed","stick","stick menu_bottom","stick_with_left_right_menu","fixed fixed_minimal","fixed_top_header"));
        $row1->addChild("header_height_scroll_hidden", $header_height_scroll_hidden);

        $header_fixed_top_logo_background_container = new QodeContainer("header_fixed_top_logo_background_container", "header_bottom_appearance", "", array("regular", "fixed", "fixed fixed_minimal", "stick", "stick menu_bottom", "stick_with_left_right_menu", "fixed_hiding"));
        $panel5->addChild("header_fixed_top_logo_background_container", $header_fixed_top_logo_background_container);

		$header_fixed_top_logo_background = new QodeField("image","header_fixed_top_logo_background","","页眉底部背景图片","设置页眉底部背景图片");
        $header_fixed_top_logo_background_container->addChild("header_fixed_top_logo_background", $header_fixed_top_logo_background);

    $header_style = new QodeField("select","header_style","","页眉皮肤","选择页眉风格使页眉元素（LOGO、主菜单、侧菜单按钮）在预设风格中", array(
            "-1" => "",
        "light" => "浅色",
        "dark" => "深色"
        ));
        $panel5->addChild("header_style", $header_style);

    $enable_header_style_on_scroll = new QodeField("yesno","enable_header_style_on_scroll","no","启用滚动页眉风格","启用此选项，页眉将根据行设置为深色/浅色更改风格");
        $panel5->addChild("enable_header_style_on_scroll", $enable_header_style_on_scroll);

$group2 = new QodeGroup("页眉背景颜色","选择页眉区域背景颜色");
        $panel5->addChild("group2", $group2);
        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);
$header_background_color = new QodeField("colorsimple","header_background_color","","初始","This is some description");
        $row1->addChild("header_background_color", $header_background_color);
$header_background_color_scroll = new QodeField("colorsimple","header_background_color_scroll","","滚动之后","This is some description", array(), array(),"header_bottom_appearance", array( "regular","stick","stick menu_bottom","stick_with_left_right_menu","fixed_top_header"));
        $row1->addChild("header_background_color_scroll", $header_background_color_scroll);
$header_background_color_sticky = new QodeField("colorsimple","header_background_color_sticky","","滚动之后","This is some description", array(), array(),"header_bottom_appearance", array( "regular","fixed","fixed_hiding","fixed fixed_minimal","fixed_top_header"));
        $row1->addChild("header_background_color_sticky", $header_background_color_sticky);
$group3 = new QodeGroup("页眉透明度","选择页眉背景颜色透明度（0 = 全透明，1 = 不透明）");
        $panel5->addChild("group3", $group3);
        $row1 = new QodeRow();
        $group3->addChild("row1", $row1);
$header_background_transparency_initial = new QodeField("textsimple","header_background_transparency_initial","","初始","This is some description");
        $row1->addChild("header_background_transparency_initial", $header_background_transparency_initial);
$header_background_transparency_scroll = new QodeField("textsimple","header_background_transparency_scroll","","滚动之后","This is some description", array(), array(),"header_bottom_appearance", array( "regular","stick","stick menu_bottom","stick_with_left_right_menu","fixed_top_header"));
        $row1->addChild("header_background_transparency_scroll", $header_background_transparency_scroll);
$header_background_transparency_sticky = new QodeField("textsimple","header_background_transparency_sticky","","滚动之后","This is some description", array(), array(),"header_bottom_appearance", array( "regular","fixed","fixed_hiding", "fixed fixed_minimal","fixed_top_header"));
        $row1->addChild("header_background_transparency_sticky", $header_background_transparency_sticky);
$header_bottom_border_color = new QodeField("color","header_bottom_border_color","","页眉下边框颜色","选择页眉下边框颜色。注意：如果已选择颜色，将不显示下边框");
        $panel5->addChild("header_bottom_border_color", $header_bottom_border_color);
$header_botom_border_transparency = new QodeField("text","header_botom_border_transparency","","页眉下边框透明度","选择页眉边框颜色透明度（0 = 全透明，1 = 不透明）", array(), array("col_width" => 3));
        $panel5->addChild("header_botom_border_transparency", $header_botom_border_transparency);
$header_botom_border_in_grid = new QodeField("yesno","header_botom_border_in_grid","no","在网格启用页眉下边框","启用此选项将在网格设置页眉边框底部宽度");
        $panel5->addChild("header_botom_border_in_grid", $header_botom_border_in_grid);


        $panel10 = new QodePanel("菜单", "enable_menus_panel", "vertical_area", "yes");
        $headerandfooterPage->addChild("panel10", $panel10);

        $menu_background_color_container = new QodeContainer("menu_background_color_container", "header_bottom_appearance", "", array("regular", "fixed", "stick", "stick_with_left_right_menu", "fixed fixed_minimal", "fixed_top_header"));
        $panel10->addChild("menu_background_color_container", $menu_background_color_container);

        $menu_background_color = new QodeField("color", "menu_background_color", "", "一级菜单背景颜色", "选择菜单背景颜色（仅为固定高级页眉工作）");
        $menu_background_color_container->addChild("menu_background_color", $menu_background_color);

$dropdown_separator_beetwen_items = new QodeField("yesno","dropdown_separator_beetwen_items","no","下拉菜单项分隔线","启用此选项将在经典下拉菜单的菜单项目之间显示水平分隔线（如遇较宽的菜单，垂直分割线始终启用）");
        $panel10->addChild("dropdown_separator_beetwen_items", $dropdown_separator_beetwen_items);
$dropdown_border_around = new QodeField("yesno","dropdown_border_around","no","下拉菜单边框","启用此选项将显示下拉菜单边框");
        $panel10->addChild("dropdown_border_around", $dropdown_border_around);
$header_separator_color = new QodeField("color","header_separator_color","","下拉菜单项目分隔线和边框颜色","为下拉菜单项目之间的水平（经典下拉）或垂直（宽下拉）分隔线选择颜色。此选项也适用于边框环绕下拉菜单");
        $panel10->addChild("header_separator_color", $header_separator_color);
$group4 = new QodeGroup("下拉菜单背景","选择主菜单背景颜色和透明度（0 = 全透明，1 = 不透明）");
        $panel10->addChild("group4", $group4);
        $row1 = new QodeRow();
        $group4->addChild("row1", $row1);
$dropdown_background_color = new QodeField("colorsimple","dropdown_background_color","","背景颜色","This is some description");
        $row1->addChild("dropdown_background_color", $dropdown_background_color);
$dropdown_background_transparency = new QodeField("textsimple","dropdown_background_transparency","","透明度","This is some description");
        $row1->addChild("dropdown_background_transparency", $dropdown_background_transparency);

$enable_wide_manu_background= new QodeField("yesno","enable_wide_manu_background","no","启用宽下拉类型全宽背景","启用此选项将为宽下拉类型显示全宽背景");
        $panel10->addChild("enable_wide_manu_background", $enable_wide_manu_background);

$panel3 = new QodePanel("搜索","enable_search_panel","vertical_area","yes");
        $headerandfooterPage->addChild("panel3", $panel3);
	$enable_search = new QodeField("yesno","enable_search","no","启用搜索栏","此选项启用搜索功能（搜索图标将出现在主导航旁边）
	", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_search_container"));
        $panel3->addChild("enable_search", $enable_search);

        $enable_search_container = new QodeContainer("enable_search_container", "enable_search", "no");
        $panel3->addChild("enable_search_container", $enable_search_container);

			$search_type = new QodeField("select","search_type","search_slides_from_window_top","搜索类型","选择搜索栏类型（注意：来自页眉底部搜索类型的幻灯片不与透明页眉一起工作）", array(
				"search_slides_from_window_top" => "幻灯片来自窗口底部",
				"search_slides_from_header_bottom" => "幻灯片来自页眉底部",
				"search_covers_header" => "搜索包含标题",
				"fullscreen_search" => "全屏搜索"
        ),
            array("dependence" => true,
                "hide" => array(
                    "search_slides_from_window_top" => "#qodef_search_animation_container,#qodef_search_cover_header_container,#qodef_search_height_container",
                    "search_covers_header" => "#qodef_search_height_container,#qodef_search_animation_container",
                    "fullscreen_search" => "#qodef_search_height_container,#qodef_search_cover_header_container",
                    "search_slides_from_header_bottom" => "#qodef_search_animation_container,#qodef_search_cover_header_container"
                ),
                "show" => array(
                    "search_slides_from_window_top" => "",
                    "search_slides_from_header_bottom" => "#qodef_search_height_container",
                    "fullscreen_search" => "#qodef_search_animation_container",
                    "search_covers_header" => "#qodef_search_cover_header_container"
                )
            ));
        $enable_search_container->addChild("search_type", $search_type);


        $search_height_container = new QodeContainer("search_height_container", "search_type", "", array("search_covers_header", "fullscreen_search", "search_slides_from_window_top"));
        $enable_search_container->addChild("search_height_container", $search_height_container);

                $search_height= new QodeField("text","search_height","","搜索栏高度","设置搜索栏高度（像素）",  array(), array("col_width" => 3));
        $search_height_container->addChild("search_height", $search_height);

        $search_animation_container = new QodeContainer("search_animation_container", "search_type", "", array("search_covers_header", "search_slides_from_header_bottom", "search_slides_from_window_top"));
        $enable_search_container->addChild("search_animation_container", $search_animation_container);

				$search_animation = new QodeField("select","search_animation","fade","全屏搜索叠加动画","选择全屏搜索叠加动画", array(
					"fade" => "淡入",
					"from_circle" => "出现圈"
        ));
        $search_animation_container->addChild("search_animation", $search_animation);

                $fullscreen_search_icon_color = new QodeField('color', 'fullscreen_search_icon_color', '', '全屏搜索图标颜色', '选择输入字段之后搜索图标的外观');
        $search_animation_container->addChild('fullscreen_search_icon_color', $fullscreen_search_icon_color);

        $search_cover_header_container = new QodeContainer("search_cover_header_container", "search_type", "", array("fullscreen_search", "search_slides_from_header_bottom", "search_slides_from_window_top"));
        $enable_search_container->addChild("search_cover_header_container", $search_cover_header_container);

				$search_cover_only_bottom_yesno = new QodeField("yesno","search_cover_only_bottom_yesno","no","仅包括页眉底部","启用此选项使搜索仅包含页眉底部");
        $search_cover_header_container->addChild("search_cover_only_bottom_yesno", $search_cover_only_bottom_yesno);

            $search_icon_pack = new QodeField('iconpack', 'search_icon_pack', 'font_awesome', '图标包', '选择搜索图标的图标包');
        $enable_search_container->addChild('search_icon_pack', $search_icon_pack);

			$search_background_color = new QodeField("color","search_background_color","","搜索背景颜色","选择搜索栏背景图片");
        $enable_search_container->addChild("search_background_color", $search_background_color);

			$group1 = new QodeGroup("搜索输入文字","定义搜索输入文字风格");
        $enable_search_container->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);
					$search_text_color = new QodeField("colorsimple","search_text_color","","文字颜色","选择搜索栏文字颜色");
        $row1->addChild("search_text_color", $search_text_color);
					$search_text_disabled_color = new QodeField("colorsimple","search_text_disabled_color","","禁用文字颜色","This is some description");
        $row1->addChild("search_text_disabled_color", $search_text_disabled_color);
					$search_text_fontsize = new QodeField("textsimple","search_text_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("search_text_fontsize", $search_text_fontsize);
					$search_text_texttransform = new QodeField("selectblanksimple","search_text_texttransform","","文字转换","This is some description",$options_texttransform);
        $row1->addChild("search_text_texttransform", $search_text_texttransform);

        $row2 = new QodeRow(true);
        $group1->addChild("row2", $row2);
					$search_text_google_fonts = new QodeField("fontsimple","search_text_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("search_text_google_fonts", $search_text_google_fonts);
					$search_text_fontstyle = new QodeField("selectblanksimple","search_text_fontstyle","","字体风格","This is some description",$options_fontstyle);
        $row2->addChild("search_text_fontstyle", $search_text_fontstyle);
					$search_text_fontweight = new QodeField("selectblanksimple","search_text_fontweight","","字体粗细","This is some description",$options_fontweight);
        $row2->addChild("search_text_fontweight", $search_text_fontweight);
					$search_text_letterspacing = new QodeField("textsimple","search_text_letterspacing","","字符间距（px）","This is some description");
        $row2->addChild("search_text_letterspacing", $search_text_letterspacing);

			$group5 = new QodeGroup("搜索标签文字","定义搜索标签文字风格");
        $enable_search_container->addChild("group5", $group5);
        $row1 = new QodeRow();
        $group5->addChild("row1", $row1);
					$search_label_text_color = new QodeField("colorsimple","search_label_text_color","","文字颜色","This is some description");
        $row1->addChild("search_label_text_color", $search_label_text_color);
					$search_label_text_fontsize = new QodeField("textsimple","search_label_text_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("search_label_text_fontsize", $search_label_text_fontsize);
        $search_label_text_texttransform = new QodeField("selectblanksimple", "search_label_text_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row1->addChild("search_label_text_texttransform", $search_label_text_texttransform);

        $row2 = new QodeRow(true);
        $group5->addChild("row2", $row2);
        $search_label_text_google_fonts = new QodeField("fontsimple", "search_label_text_google_fonts", "-1", "字体系列", "This is some description");
        $row2->addChild("search_label_text_google_fonts", $search_label_text_google_fonts);
        $search_label_text_fontstyle = new QodeField("selectblanksimple", "search_label_text_fontstyle", "", "字体样式", "This is some description", qode_get_font_style_array());
        $row2->addChild("search_label_text_fontstyle", $search_label_text_fontstyle);
        $search_label_text_fontweight = new QodeField("selectblanksimple", "search_label_text_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("search_label_text_fontweight", $search_label_text_fontweight);
        $search_label_text_letterspacing = new QodeField("textsimple", "search_label_text_letterspacing", "", "字符间距 (px)", "This is some description");
        $row2->addChild("search_label_text_letterspacing", $search_label_text_letterspacing);

			$group7 = new QodeGroup("初始搜索图标","定义页眉搜索图标大小");
        $enable_search_container->addChild("group7", $group7);
        $row1 = new QodeRow();
        $group7->addChild("row1", $row1);
					$header_search_icon_size= new QodeField("textsimple","header_search_icon_size","","图标大小","设置图标大小（像素）",  array(), array("col_width" => 3));
        $row1->addChild("header_search_icon_size", $header_search_icon_size);

			$group2 = new QodeGroup("搜索图标","定义搜索栏图标风格");
        $enable_search_container->addChild("group2", $group2);
        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);
					$search_icon_color = new QodeField("colorsimple","search_icon_color","","颜色","选择搜索栏图标颜色");
        $row1->addChild("search_icon_color", $search_icon_color);
					$search_icon_hover_color = new QodeField("colorsimple","search_icon_hover_color","","悬停颜色","选择搜索栏图标悬停颜色");
        $row1->addChild("search_icon_hover_color", $search_icon_hover_color);
					$search_icon_disabled_color = new QodeField("colorsimple","search_icon_disabled_color","","禁用颜色","选择搜索栏图标禁用颜色");
        $row1->addChild("search_icon_disabled_color", $search_icon_disabled_color);
					$search_icon_size= new QodeField("textsimple","search_icon_size","","大小","设置图标大小（像素）",  array(), array("col_width" => 3));
        $row1->addChild("search_icon_size", $search_icon_size);

			$group4 = new QodeGroup("搜索关闭图标","定义搜索关闭图标风格");
        $enable_search_container->addChild("group4", $group4);
        $row1 = new QodeRow();
        $group4->addChild("row1", $row1);
					$search_close_color = new QodeField("colorsimple","search_close_color","","颜色","选择搜索关闭图标颜色");
        $row1->addChild("search_close_color", $search_close_color);
					$search_close_hover_color = new QodeField("colorsimple","search_close_hover_color","","悬停颜色","选择搜索关闭图标悬停颜色");
        $row1->addChild("search_close_hover_color", $search_close_hover_color);
					$search_close_size = new QodeField("textsimple","search_close_size","","大小","选择搜索关闭图标大小");
        $row1->addChild("search_close_size", $search_close_size);

			$group3 = new QodeGroup("搜索下边框","定义搜索文字输入下边框风格（用于全屏搜索类型）");
        $enable_search_container->addChild("group3", $group3);
        $row1 = new QodeRow();
        $group3->addChild("row1", $row1);
					$search_border_color = new QodeField("colorsimple","search_border_color","","边框颜色","选择搜索文字输入边框颜色");
        $row1->addChild("search_border_color", $search_border_color);
					$search_border_focus_color = new QodeField("colorsimple","search_border_focus_color","","边框强调色","选择搜索文字输入强调颜色");
        $row1->addChild("search_border_focus_color", $search_border_focus_color);


$panel11 = new QodePanel("侧面区域","enable_side_area_panel","vertical_area","yes");
        $headerandfooterPage->addChild("panel11", $panel11);

	$enable_side_area = new QodeField("yesno","enable_side_area","yes","启用侧面区域","此选项启用侧面区域从主菜单导航打开", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_side_area_container"));
        $panel11->addChild("enable_side_area", $enable_side_area);

        $enable_side_area_container = new QodeContainer("enable_side_area_container", "enable_side_area", "no");
        $panel11->addChild("enable_side_area_container", $enable_side_area_container);


			$side_area_type = new QodeField("select","side_area_type","side_area_uncovered_from_content","侧面区域类型","选择侧面区域类型", array(
				"side_area_uncovered_from_content" => "从内容取消覆盖",
				"side_menu_slide_from_right" => "侧面从内容右上方",
				"side_menu_slide_with_content" => "内容从右侧面"
        ),
            array("dependence" => true,
                "hide" => array(
                    "side_area_uncovered_from_content" => "#qodef_side_area_width_container,#qodef_side_area_slide_with_content_container",
                    "side_menu_slide_from_right" => "#qodef_side_area_slide_with_content_container",
                    "side_menu_slide_with_content" => "#qodef_side_area_width_container"

                ),
                "show" => array(
                    "side_area_uncovered_from_content" => "",
                    "side_menu_slide_from_right" => "#qodef_side_area_width_container",
                    "side_menu_slide_with_content" => "#qodef_side_area_slide_with_content_container"
                )
            ));

        $enable_side_area_container->addChild("side_area_type", $side_area_type);

        //init icon pack hide and show array. It will be populated dinamically from collections array
        $side_area_icon_pack_hide_array = array();
        $side_area_icon_pack_show_array = array();

        //do we have some collection added in collections array?
        if (is_array(qode_icon_collections()->iconCollections) && count(qode_icon_collections()->iconCollections)) {
            //get collections params array. It will contain values of 'param' property for each collection
            $side_area_icon_collections_params = qode_icon_collections()->getIconCollectionsParams();

            //foreach collection generate hide and show array
            foreach (qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object) {
                $side_area_icon_pack_hide_array[$dep_collection_key] = '';

                //we need to include only current collection in show string as it is the only one that needs to show
                $side_area_icon_pack_show_array[$dep_collection_key] = '#qodef_side_area_icon_' . $dep_collection_object->param . '_container';

                //for all collections param generate hide string
                foreach ($side_area_icon_collections_params as $side_area_icon_collections_param) {
                    //we don't need to include current one, because it needs to be shown, not hidden
                    if ($side_area_icon_collections_param !== $dep_collection_object->param) {
                        $side_area_icon_pack_hide_array[$dep_collection_key] .= '#qodef_side_area_icon_' . $side_area_icon_collections_param . '_container,';
                    }
                }

                //remove remaining ',' character
                $side_area_icon_pack_hide_array[$dep_collection_key] = rtrim($side_area_icon_pack_hide_array[$dep_collection_key], ',');
            }

        }

        $side_area_button_icon_pack = new QodeField(
            "select",
            "side_area_button_icon_pack",
            "font_awesome",
                "侧面区域按钮图标包",
                "为侧面区域按钮选择图标包",
            qode_icon_collections()->getIconCollections(),
            array(
                "dependence" => true,
                "hide" => $side_area_icon_pack_hide_array,
                "show" => $side_area_icon_pack_show_array
            ));

        $enable_side_area_container->addChild("side_area_button_icon_pack", $side_area_button_icon_pack);

        if (is_array(qode_icon_collections()->iconCollections) && count(qode_icon_collections()->iconCollections)) {
            //foreach icon collection we need to generate separate container that will have dependency set
            //it will have one field inside with icons dropdown
            foreach (qode_icon_collections()->iconCollections as $collection_key => $collection_object) {
                $icons_array = $collection_object->getIconsArray();

                //get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
                $icon_collections_keys = qode_icon_collections()->getIconCollectionsKeys();

                //unset current one, because it doesn't have to be included in dependency that hides icon container
                unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

                $side_area_icon_hide_values = $icon_collections_keys;
                $side_area_icon_container = new QodeContainer("side_area_icon_" . $collection_object->param . "_container", "side_area_button_icon_pack", "", $side_area_icon_hide_values);
                    $side_area_button_icon = new QodeField("select", "side_area_icon_".$collection_object->param, "fa-bars", "侧面区域图标","选择侧面区域图标", $icons_array, array("col_width" => 3));
                $side_area_icon_container->addChild("side_area_icon_" . $collection_object->param, $side_area_button_icon);

                $enable_side_area_container->addChild("side_area_icon_" . $collection_object->param . "_container", $side_area_icon_container);
            }

        }

        $side_area_width_container = new QodeContainer("side_area_width_container", "side_area_type", "", array("side_menu_slide_with_content", "side_area_uncovered_from_content"));
        $enable_side_area_container->addChild("side_area_width_container", $side_area_width_container);

				$side_area_width = new QodeField("text","side_area_width","","侧面区域宽度","输入侧面区域宽度（百分比，输入超过30）", array(), array("col_width" => 3));
        $side_area_width_container->addChild("side_area_width", $side_area_width);

				$side_area_content_overlay_color= new QodeField("color","side_area_content_overlay_color","","内容叠加背景颜色","选择内容叠加背景颜色", array(), array("col_width" => 3));
        $side_area_width_container->addChild("side_area_content_overlay_color", $side_area_content_overlay_color);

				$side_area_content_overlay_opacity = new QodeField("text","side_area_content_overlay_opacity","","内容叠加背景透明度","选择内容叠加背景颜色透明度（0 = 全透明，1 = 不透明）", array(), array("col_width" => 3));
        $side_area_width_container->addChild("side_area_content_overlay_opacity", $side_area_content_overlay_opacity);

        $side_area_slide_with_content_container = new QodeContainer("side_area_slide_with_content_container", "side_area_type", "", array("side_menu_slide_from_right", "side_area_uncovered_from_content"));
        $enable_side_area_container->addChild("side_area_slide_with_content_container", $side_area_slide_with_content_container);

                $side_area_slide_with_content_width = new QodeField("select","side_area_slide_with_content_width","width_470","侧面区域宽度","选择侧面区域宽度", array(
            "width_270" => "270px",
            "width_370" => "370px",
            "width_470" => "470px"
        ));
        $side_area_slide_with_content_container->addChild("side_area_slide_with_content_width", $side_area_slide_with_content_width);

			$side_area_title = new QodeField("text","side_area_title","","侧面区域标题","输入侧面区域标题");
        $enable_side_area_container->addChild("side_area_title", $side_area_title);

			$side_area_background_color = new QodeField("color","side_area_background_color","","背景颜色","选择侧面区域背景颜色");
        $enable_side_area_container->addChild("side_area_background_color", $side_area_background_color);

			$group5 = new QodeGroup("填充","定义侧面区域填充");
        $enable_side_area_container->addChild("group5", $group5);
        $row1 = new QodeRow(true);
        $group5->addChild("row1", $row1);
				$side_area_padding_top = new QodeField("textsimple","side_area_padding_top","","上填充（px）","This is some description");
        $row1->addChild("side_area_padding_top", $side_area_padding_top);
					$side_area_padding_right = new QodeField("textsimple","side_area_padding_right","","右填充（px）","This is some description");
        $row1->addChild("side_area_padding_right", $side_area_padding_right);
					$side_area_padding_bottom = new QodeField("textsimple","side_area_padding_bottom","","下填充（px）","This is some description");
        $row1->addChild("side_area_padding_bottom", $side_area_padding_bottom);
					$side_area_padding_left = new QodeField("textsimple","side_area_padding_left","","左填充（px）","This is some description");
        $row1->addChild("side_area_padding_left", $side_area_padding_left);

				$side_area_alignment = new QodeField("selectblank","side_area_alignment","","侧面区域对齐方式","选择侧面区域内容对齐方式", array(
					"left" => "左",
					"center" => "中",
					"right" => "右"

        ));
        $enable_side_area_container->addChild("side_area_alignment", $side_area_alignment);

			$group1 = new QodeGroup("文字","定义侧面区域文字风格");
        $enable_side_area_container->addChild("group1", $group1);

        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);

				$side_area_text_color = new QodeField("colorsimple","side_area_text_color","","文字颜色","This is some description");
        $row1->addChild("side_area_text_color", $side_area_text_color);

				$side_area_text_hover_color = new QodeField("colorsimple","side_area_text_hover_color","","文字悬停颜色r","This is some description");
        $row1->addChild("side_area_text_hover_color", $side_area_text_hover_color);

				$side_area_text_lineheight = new QodeField("textsimple","side_area_text_lineheight","","行高（px）","This is some description");
        $row1->addChild("side_area_text_lineheight", $side_area_text_lineheight);

        $side_area_text_texttransform = new QodeField("selectblanksimple", "side_area_text_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row1->addChild("side_area_text_texttransform", $side_area_text_texttransform);

        $row2 = new QodeRow(true);
        $group1->addChild("row2", $row2);

				$side_area_text_font_size = new QodeField("textsimple","side_area_text_font_size","","字体大小（px）","This is some description");
        $row2->addChild("side_area_text_font_size", $side_area_text_font_size);

				$side_area_text_letter_spacing = new QodeField("textsimple","side_area_text_letter_spacing","","字符间距（px）","This is some description");
        $row2->addChild("side_area_text_letter_spacing", $side_area_text_letter_spacing);

        $side_area_text_font_weight = new QodeField("selectblanksimple", "side_area_text_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("side_area_text_font_weight", $side_area_text_font_weight);


        $group2 = new QodeGroup("标题", "定义侧面区域标题风格");
        $enable_side_area_container->addChild("group2", $group2);

        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);

				$side_area_title_color = new QodeField("colorsimple","side_area_title_color","","文字颜色","This is some description");
        $row1->addChild("side_area_title_color", $side_area_title_color);

        $row2 = new QodeRow(true);
        $group2->addChild("row2", $row2);

				$side_area_title_font_size = new QodeField("textsimple","side_area_title_font_size","","字体大小（px）","This is some description");
        $row2->addChild("side_area_title_font_size", $side_area_title_font_size);

				$side_area_title_letter_spacing = new QodeField("textsimple","side_area_title_letter_spacing","","字符间距（px）","This is some description");
        $row2->addChild("side_area_title_letter_spacing", $side_area_title_letter_spacing);

        $side_area_title_font_weight = new QodeField("selectblanksimple", "side_area_title_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("side_area_title_font_weight", $side_area_title_font_weight);


			$side_area_close_icon_style = new QodeField("select","side_area_close_icon_style","","关闭图标风格","选择关闭 ('X') 按钮风格", array( "-1" => "",
					   "light" => "浅色",
					   "dark" => "深色"
        ));
        $enable_side_area_container->addChild("side_area_close_icon_style", $side_area_close_icon_style);


$panel12 = new QodePanel("全屏菜单","enable_popup_menu_panel","vertical_area","yes");
        $headerandfooterPage->addChild("panel12", $panel12);
$enable_popup_menu = new QodeField("yesno","enable_popup_menu","no","启用全屏菜单","此选项启用一个全屏菜单从主菜单导航打开", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_popup_menu_container"));
        $panel12->addChild("enable_popup_menu", $enable_popup_menu);
        $enable_popup_menu_container = new QodeContainer("enable_popup_menu_container", "enable_popup_menu", "no");
        $panel12->addChild("enable_popup_menu_container", $enable_popup_menu_container);

        $popup_menu_animation_style = new QodeField("select", "popup_menu_animation_style", "", "全屏菜单叠加动画", "选择全屏菜单叠加动画类型", array(
            '' => '',
            'popup_menu_push_text_right' => '淡出拉取文字右',
            'popup_menu_push_text_top' => '淡出拉取文字上',
            'popup_menu_text_scaledown' => '淡出文字缩小'
        ));
        $enable_popup_menu_container->addChild("popup_menu_animation_style", $popup_menu_animation_style);

        $logo_image_popup = new QodeField("image", "logo_image_popup", "", "全屏菜单Logo图片", "选择全屏菜单logo");
        $enable_popup_menu_container->addChild("logo_image_popup", $logo_image_popup);

        $font_icon_pack_icon_popup = new QodeField("select", "font_icon_pack_icon_popup", "", "菜单图标风格", "选择全屏菜单图标风格", array(
            "" => "默认",
            "font_awesome" => "Font Awesome",
            "font_elegant" => "Font Elegant"

        ));
        $enable_popup_menu_container->addChild("font_icon_pack_icon_popup", $font_icon_pack_icon_popup);

        $group1 = new QodeGroup("一级风格", "定义全屏菜单第一级风格");
        $enable_popup_menu_container->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);
$popup_menu_color = new QodeField("colorsimple","popup_menu_color","","文字颜色","This is some description");
        $row1->addChild("popup_menu_color", $popup_menu_color);
$popup_menu_hover_color = new QodeField("colorsimple","popup_menu_hover_color","","文字悬停颜色","This is some description");
        $row1->addChild("popup_menu_hover_color", $popup_menu_hover_color);
$popup_menu_hover_background_color = new QodeField("colorsimple","popup_menu_hover_background_color","","背景悬停颜色","This is some description");
        $row1->addChild("popup_menu_hover_background_color", $popup_menu_hover_background_color);

        $row2 = new QodeRow(true);
        $group1->addChild("row2", $row2);
$popup_menu_google_fonts = new QodeField("fontsimple","popup_menu_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("popup_menu_google_fonts", $popup_menu_google_fonts);
$popup_menu_fontsize = new QodeField("textsimple","popup_menu_fontsize","","字体大小（px）","This is some description");
        $row2->addChild("popup_menu_fontsize", $popup_menu_fontsize);
$popup_menu_lineheight = new QodeField("textsimple","popup_menu_lineheight","","行高（px）","This is some description");
        $row2->addChild("popup_menu_lineheight", $popup_menu_lineheight);
        $popup_menu_texttransform = new QodeField("selectblanksimple", "popup_menu_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("popup_menu_texttransform", $popup_menu_texttransform);
        $row3 = new QodeRow(true);
        $group1->addChild("row3", $row3);
        $popup_menu_fontstyle = new QodeField("selectblanksimple", "popup_menu_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row3->addChild("popup_menu_fontstyle", $popup_menu_fontstyle);
        $popup_menu_fontweight = new QodeField("selectblanksimple", "popup_menu_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("popup_menu_fontweight", $popup_menu_fontweight);
$popup_menu_letterspacing = new QodeField("textsimple","popup_menu_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("popup_menu_letterspacing", $popup_menu_letterspacing);

$group2 = new QodeGroup("二级风格","定义全屏菜单二级风格");
        $enable_popup_menu_container->addChild("group2", $group2);
        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);
$popup_menu_color_2nd = new QodeField("colorsimple","popup_menu_color_2nd","","文字颜色","This is some description");
        $row1->addChild("popup_menu_color_2nd", $popup_menu_color_2nd);
$popup_menu_hover_color_2nd = new QodeField("colorsimple","popup_menu_hover_color_2nd","","文字悬停颜色","This is some description");
        $row1->addChild("popup_menu_hover_color_2nd", $popup_menu_hover_color_2nd);
$popup_menu_hover_background_color_2nd = new QodeField("colorsimple","popup_menu_hover_background_color_2nd","","背景悬停颜色","This is some description");
        $row1->addChild("popup_menu_hover_background_color_2nd", $popup_menu_hover_background_color_2nd);

        $row2 = new QodeRow(true);
        $group2->addChild("row2", $row2);
$popup_menu_google_fonts_2nd = new QodeField("fontsimple","popup_menu_google_fonts_2nd","-1","字体系列","This is some description");
        $row2->addChild("popup_menu_google_fonts_2nd", $popup_menu_google_fonts_2nd);
$popup_menu_fontsize_2nd = new QodeField("textsimple","popup_menu_fontsize_2nd","","字体大小（px）","This is some description");
        $row2->addChild("popup_menu_fontsize_2nd", $popup_menu_fontsize_2nd);
$popup_menu_lineheight_2nd = new QodeField("textsimple","popup_menu_lineheight_2nd","","行高（px）","This is some description");
        $row2->addChild("popup_menu_lineheight_2nd", $popup_menu_lineheight_2nd);
        $popup_menu_texttransform_2nd = new QodeField("selectblanksimple", "popup_menu_texttransform_2nd", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("popup_menu_texttransform_2nd", $popup_menu_texttransform_2nd);

        $row3 = new QodeRow(true);
        $group2->addChild("row3", $row3);
        $popup_menu_fontstyle_2nd = new QodeField("selectblanksimple", "popup_menu_fontstyle_2nd", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row3->addChild("popup_menu_fontstyle_2nd", $popup_menu_fontstyle_2nd);
        $popup_menu_fontweight_2nd = new QodeField("selectblanksimple", "popup_menu_fontweight_2nd", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("popup_menu_fontweight_2nd", $popup_menu_fontweight_2nd);
$popup_menu_letterspacing_2nd = new QodeField("textsimple","popup_menu_letterspacing_2nd","","字符间距（px）","This is some description");
        $row3->addChild("popup_menu_letterspacing_2nd", $popup_menu_letterspacing_2nd);

$group3 = new QodeGroup("背景","选择全屏菜单背景颜色和透明度（0 = 全透明，1 = 不透明）");
        $enable_popup_menu_container->addChild("group3", $group3);
        $row1 = new QodeRow();
        $group3->addChild("row1", $row1);
$popup_menu_background_color = new QodeField("colorsimple","popup_menu_background_color","","颜色","This is some description");
        $row1->addChild("popup_menu_background_color", $popup_menu_background_color);
$popup_menu_background_transparency = new QodeField("textsimple","popup_menu_background_transparency","","透明度","This is some description");
        $row1->addChild("popup_menu_background_transparency", $popup_menu_background_transparency);

        $group4 = new QodeGroup("关闭按钮颜色", "选择关闭按钮颜色");
        $enable_popup_menu_container->addChild("group4", $group4);
            $row2 = new QodeRow();
            $group4->addChild("row2", $row2);
                $popup_menu_close_button_color = new QodeField("colorsimple", "popup_menu_close_button_color", "", "颜色", "This is some description");
                $row2->addChild("popup_menu_close_button_color", $popup_menu_close_button_color);


$panel2 = new QodePanel("页眉顶部","header_top_panel","vertical_area","yes");
        $headerandfooterPage->addChild("panel2", $panel2);
$header_top_area = new QodeField("yesno","header_top_area","no","显示页眉顶部区域","启用此选项将显示页眉顶部区域（此设置应用到页眉左侧和右侧小工具）
        ", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_header_top_area_container"));
        $panel2->addChild("header_top_area", $header_top_area);
        $header_top_area_container = new QodeContainer("header_top_area_container", "header_top_area", "no");
        $panel2->addChild("header_top_area_container", $header_top_area_container);

        $header_top_scroll_container = new QodeContainer("header_top_scroll_container", "header_bottom_appearance", "", array("fixed_top_header"));
        $header_top_area_container->addChild("header_top_scroll_container", $header_top_scroll_container);

	$header_top_area_scroll = new QodeField("yesno","header_top_area_scroll","no","滚动隐藏","启用此选项将在滚动时隐藏页眉顶部（如果选择了固定页眉类型）");
        $header_top_scroll_container->addChild("header_top_area_scroll", $header_top_area_scroll);

        $hide_top_bar_on_mobile = new QodeField("yesno", "hide_top_bar_on_mobile", "no", "在手机页眉隐藏顶栏", "启用此选项，当激活手机页眉时将隐藏顶部页眉区域");
        $header_top_scroll_container->addChild("hide_top_bar_on_mobile", $hide_top_bar_on_mobile);

        $header_top_height_container = new QodeContainer("header_top_height_container", "header_bottom_appearance", "", array("regular", "fixed", "fixed_hiding", "fixed fixed_minimal", "stick", "stick menu_bottom", "stick_with_left_right_menu"));
        $header_top_area_container->addChild("header_top_height_container", $header_top_height_container);

			$header_top_height = new QodeField("text","header_top_height","","页眉顶部高度","输入页眉顶部高度", array(), array("col_width" => 3));
        $header_top_height_container->addChild("header_top_height", $header_top_height);

		$header_top_background_color = new QodeField("color","header_top_background_color","","背景颜色","选择页眉顶部区域背景颜色");
        $header_top_area_container->addChild("header_top_background_color", $header_top_background_color);

$group5 = new QodeGroup("下边框","定义页眉顶部下边框");
        $header_top_area_container->addChild("group5", $group5);
        $row1 = new QodeRow();
        $group5->addChild("row1", $row1);
$top_header_border_color = new QodeField("colorsimple","top_header_border_color","","下边框颜色","This is some description");
        $row1->addChild("top_header_border_color", $top_header_border_color);
$top_header_border_weight = new QodeField("textsimple","top_header_border_weight","","下边框宽度（px）","This is some description");
        $row1->addChild("top_header_border_weight", $top_header_border_weight);

        $top_header_area_padding = new QodeField("text", "top_header_area_padding", "", "填充 (%)", "为页眉顶部区域选择左/右填充");
        $header_top_area_container->addChild("top_header_area_padding", $top_header_area_padding);


        $panel7 = new QodePanel("左菜单区域", "vertical_areas_panel", "vertical_area", "no");
        $headerandfooterPage->addChild("panel7", $panel7);

        $vertical_area_type = new QodeField("select", "vertical_area_type", "", "左菜单区域类型", "指定菜单类型", array(
        "" => "始终打开（默认）",
        "hidden" => "初始隐藏"
        ),
            array("dependence" => true,
                "hide" => array(
                    "" => "#qodef_vertical_area_hidden_button_color_container, #qodef_vertical_area_width_container",
                    "hidden" => "#qodef_vertical_area_transparency_container"),
                "show" => array(
                    "" => "#qodef_vertical_area_transparency_container",
                    "hidden" => "#qodef_vertical_area_hidden_button_color_container, #qodef_vertical_area_width_container"
                )
            ));
        $panel7->addChild("vertical_area_type", $vertical_area_type);

        $vertical_area_hidden_button_color_container = new QodeContainer("vertical_area_hidden_button_color_container", "vertical_area_type", "");
        $panel7->addChild("vertical_area_hidden_button_color_container", $vertical_area_hidden_button_color_container);

    $vertical_area_hidden_button_color = new QodeField("color","vertical_area_hidden_button_color","","按钮颜色","选择按钮颜色，，打开/隐藏左菜单区域");
        $vertical_area_hidden_button_color_container->addChild("vertical_area_hidden_button_color", $vertical_area_hidden_button_color);

    $vertical_area_hidden_button_margin_top = new QodeField("text","vertical_area_hidden_button_margin_top","","按钮上边距（px）","设置按钮上边距，打开/关闭隐藏左菜单区域",array(),array("col_width" => 3));
        $vertical_area_hidden_button_color_container->addChild("vertical_area_hidden_button_margin_top", $vertical_area_hidden_button_margin_top);

        $vertical_area_width_container = new QodeContainer("vertical_area_width_container", "vertical_area_type", "");
        $panel7->addChild("vertical_area_width_container", $vertical_area_width_container);

		$vertical_area_width = new QodeField("select","vertical_area_width","width_260","左菜单区域宽度","选择左菜单区域宽度", array(
            "width_260" => "260px",
            "width_290" => "290px",
            "width_350" => "350px",
            "width_400" => "400px"
        ));
        $vertical_area_width_container->addChild("vertical_area_width", $vertical_area_width);

        $vertical_area_transparency_container = new QodeContainer("vertical_area_transparency_container", "vertical_area_type", "hidden");
        $panel7->addChild("vertical_area_transparency_container", $vertical_area_transparency_container);
    $vertical_area_transparency = new QodeField("yesno","vertical_area_transparency","no","启用透明左侧菜单区域","启用此选项将使左侧菜单背景透明");
        $vertical_area_transparency_container->addChild("vertical_area_transparency", $vertical_area_transparency);

$vertical_area_submenu_opening_style = new QodeField("select","vertical_area_submenu_opening_type","","子菜单打开风格","指定子菜单打开风格",array(
	"" => "悬停",
	"on_click" => "点击",
	"float" => "漂浮"
        ), array(
            "dependence" => true,
            "hide" => array("" => "#qodef_vertical_area_float_container", "on_click" => "#qodef_vertical_area_float_container"),
            "show" => array("float" => "#qodef_vertical_area_float_container")
        ));
        $panel7->addChild("vertical_area_submenu_opening_style", $vertical_area_submenu_opening_style);

        $vertically_center_content = new QodeField("yesno", "vertical_area_vertically_center_content", "no", "垂直居中内容", "启用该选项将使菜单垂直居中");
        $panel7->addChild("vertical_area_vertically_center_content", $vertically_center_content);

        $vertical_area_background = new QodeField("color", "vertical_area_background", "", "左侧菜单区域背景颜色","选择左侧菜单背景颜色");
        $panel7->addChild("vertical_area_background", $vertical_area_background);

        $vertical_area_float_container = new QodeContainer("vertical_area_float_container", "vertical_area_submenu_opening_type", array(), array("", "on_click"));
        $panel7->addChild("vertical_area_float_container", $vertical_area_float_container);

	$vertical_area_float_dropdown_bckg_color = new QodeField("color","vertical_area_float_dropdown_bckg_color","","下拉背景颜色","选择左菜单浮动类型下拉背景颜色");
        $vertical_area_float_container->addChild("vertical_area_float_dropdown_bckg_color", $vertical_area_float_dropdown_bckg_color);

	$vertical_area_float_dropdown_alignment = new QodeField("selectblank","vertical_area_float_dropdown_alignment","","下拉对齐","选择下拉对齐方式，如果它继承内容对齐请留空",array(
		"left" => "左",
		"center" => "中",
		"right" => "右"
        ));
        $vertical_area_float_container->addChild("vertical_area_float_dropdown_alignment", $vertical_area_float_dropdown_alignment);

$vertical_area_background_image = new QodeField("image","vertical_area_background_image","","左侧菜单区域背景图片","选择左侧菜单背景图片");
        $panel7->addChild("vertical_area_background_image", $vertical_area_background_image);
$vertical_area_text_color = new QodeField("color","vertical_area_text_color","","左菜单区域文字颜色（小工具）","选择左菜单小工具文字颜色");
        $panel7->addChild("vertical_area_text_color", $vertical_area_text_color);
$vertical_area_content_alignment = new QodeField("select","left_menu_alignment","","内容对齐","选择左菜单区域内容对齐方式", array( "left" => "左",
       "center" => "中",
       "right" => "右"
        ));
        $panel7->addChild("left_menu_alignment", $vertical_area_content_alignment);

$group1 = new QodeGroup("一级菜单风格","定义左菜单一级风格");
        $panel7->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);
$vertical_menu_color = new QodeField("colorsimple","vertical_menu_color","","文字颜色","This is some description");
        $row1->addChild("vertical_menu_color", $vertical_menu_color);
$vertical_menu_hovercolor = new QodeField("colorsimple","vertical_menu_hovercolor","","悬停/活动颜色","This is some description");
        $row1->addChild("vertical_menu_hovercolor", $vertical_menu_hovercolor);

        $row2 = new QodeRow(true);
        $group1->addChild("row2", $row2);
$vertical_menu_google_fonts = new QodeField("fontsimple","vertical_menu_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("vertical_menu_google_fonts", $vertical_menu_google_fonts);
$vertical_menu_fontsize = new QodeField("textsimple","vertical_menu_fontsize","","字体大小（px）","This is some description");
        $row2->addChild("vertical_menu_fontsize", $vertical_menu_fontsize);
$vertical_menu_lineheight = new QodeField("textsimple","vertical_menu_lineheight","","行高（px）","This is some description");
        $row2->addChild("vertical_menu_lineheight", $vertical_menu_lineheight);

        $row3 = new QodeRow(true);
        $group1->addChild("row3", $row3);
        $vertical_menu_fontstyle = new QodeField("selectblanksimple", "vertical_menu_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row3->addChild("vertical_menu_fontstyle", $vertical_menu_fontstyle);
        $vertical_menu_fontweight = new QodeField("selectblanksimple", "vertical_menu_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("vertical_menu_fontweight", $vertical_menu_fontweight);
        $vertical_menu_letterspacing = new QodeField("textsimple", "vertical_menu_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("vertical_menu_letterspacing", $vertical_menu_letterspacing);
        $vertical_menu_texttransform = new QodeField("selectblanksimple", "vertical_menu_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row3->addChild("vertical_menu_texttransform", $vertical_menu_texttransform);

$group2 = new QodeGroup("二级菜单风格","定义左侧菜单二级风格");
        $panel7->addChild("group2", $group2);
        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);
$vertical_dropdown_color = new QodeField("colorsimple","vertical_dropdown_color","","文字颜色","This is some description");
        $row1->addChild("vertical_dropdown_color", $vertical_dropdown_color);
$vertical_dropdown_hovercolor = new QodeField("colorsimple","vertical_dropdown_hovercolor","","悬停/活动颜色","This is some description");
        $row1->addChild("vertical_dropdown_hovercolor", $vertical_dropdown_hovercolor);

        $row2 = new QodeRow(true);
        $group2->addChild("row2", $row2);
$vertical_dropdown_google_fonts = new QodeField("fontsimple","vertical_dropdown_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("vertical_dropdown_google_fonts", $vertical_dropdown_google_fonts);
$vertical_dropdown_fontsize = new QodeField("textsimple","vertical_dropdown_fontsize","","字体大小（px）","This is some description");
        $row2->addChild("vertical_dropdown_fontsize", $vertical_dropdown_fontsize);
$vertical_dropdown_lineheight = new QodeField("textsimple","vertical_dropdown_lineheight","","行高（px）","This is some description");
        $row2->addChild("vertical_dropdown_lineheight", $vertical_dropdown_lineheight);

        $row3 = new QodeRow(true);
        $group2->addChild("row3", $row3);
        $vertical_dropdown_fontstyle = new QodeField("selectblanksimple", "vertical_dropdown_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row3->addChild("vertical_dropdown_fontstyle", $vertical_dropdown_fontstyle);
        $vertical_dropdown_fontweight = new QodeField("selectblanksimple", "vertical_dropdown_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("vertical_dropdown_fontweight", $vertical_dropdown_fontweight);
$vertical_dropdown_letterspacing = new QodeField("textsimple","vertical_dropdown_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("vertical_dropdown_letterspacing", $vertical_dropdown_letterspacing);
        $vertical_dropdown_texttransform = new QodeField("selectblanksimple", "vertical_dropdown_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row3->addChild("vertical_dropdown_texttransform", $vertical_dropdown_texttransform);


$group3 = new QodeGroup("三级菜单风格","定义左侧菜单三级风格");
        $panel7->addChild("group3", $group3);
        $row1 = new QodeRow();
        $group3->addChild("row1", $row1);
$vertical_dropdown_color_thirdlvl = new QodeField("colorsimple","vertical_dropdown_color_thirdlvl","","文字颜色","This is some description");
        $row1->addChild("vertical_dropdown_color_thirdlvl", $vertical_dropdown_color_thirdlvl);
$vertical_dropdown_hovercolor_thirdlvl = new QodeField("colorsimple","vertical_dropdown_hovercolor_thirdlvl","","悬停/活动颜色","This is some description");
        $row1->addChild("vertical_dropdown_hovercolor_thirdlvl", $vertical_dropdown_hovercolor_thirdlvl);

        $row2 = new QodeRow(true);
        $group3->addChild("row2", $row2);
$vertical_dropdown_google_fonts_thirdlvl = new QodeField("fontsimple","vertical_dropdown_google_fonts_thirdlvl","-1","字体系列","This is some description");
        $row2->addChild("vertical_dropdown_google_fonts_thirdlvl", $vertical_dropdown_google_fonts_thirdlvl);
$vertical_dropdown_fontsize_thirdlvl = new QodeField("textsimple","vertical_dropdown_fontsize_thirdlvl","","字体大小（px）","This is some description");
        $row2->addChild("vertical_dropdown_fontsize_thirdlvl", $vertical_dropdown_fontsize_thirdlvl);
$vertical_dropdown_lineheight_thirdlvl = new QodeField("textsimple","vertical_dropdown_lineheight_thirdlvl","","行高（px）","This is some description");
        $row2->addChild("vertical_dropdown_lineheight_thirdlvl", $vertical_dropdown_lineheight_thirdlvl);

        $row3 = new QodeRow(true);
        $group3->addChild("row3", $row3);
        $vertical_dropdown_fontstyle_thirdlvl = new QodeField("selectblanksimple", "vertical_dropdown_fontstyle_thirdlvl", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row3->addChild("vertical_dropdown_fontstyle_thirdlvl", $vertical_dropdown_fontstyle_thirdlvl);
        $vertical_dropdown_fontweight_thirdlvl = new QodeField("selectblanksimple", "vertical_dropdown_fontweight_thirdlvl", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("vertical_dropdown_fontweight_thirdlvl", $vertical_dropdown_fontweight_thirdlvl);
$vertical_dropdown_letterspacing_thirdlvl = new QodeField("textsimple","vertical_dropdown_letterspacing_thirdlvl","","字符间距（px）","This is some description");
        $row3->addChild("vertical_dropdown_letterspacing_thirdlvl", $vertical_dropdown_letterspacing_thirdlvl);
        $vertical_dropdown_texttransform_thirdlvl = new QodeField("selectblanksimple", "vertical_dropdown_texttransform_thirdlvl", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row3->addChild("vertical_dropdown_texttransform_thirdlvl", $vertical_dropdown_texttransform_thirdlvl);


$panel20 = new QodePanel("移动菜单","mobile_menu_panel");
        $headerandfooterPage->addChild("panel20", $panel20);

$mobile_separator_color = new QodeField("color","mobile_separator_color","","移动菜单项目分隔颜色","选择移动菜单水平分隔颜色");
        $panel20->addChild("mobile_separator_color", $mobile_separator_color);
$mobile_background_color = new QodeField("color","mobile_background_color","","移动页眉和菜单背景颜色","选择移动页眉和菜单背景颜色");
        $panel20->addChild("mobile_background_color", $mobile_background_color);
		$mobile_header_top_background_color = new QodeField("color", "mobile_header_top_background_color", "", "移动页眉顶部背景颜色", "选择移动页眉顶部背景颜色");
		$panel20->addChild("mobile_header_top_background_color", $mobile_header_top_background_color);
        //init icon pack hide and show array. It will be populated dinamically from collections array
        $mobile_menu_icon_pack_hide_array = array();
        $mobile_menu_icon_pack_show_array = array();

        //do we have some collection added in collections array?
        if (is_array(qode_icon_collections()->iconCollections) && count(qode_icon_collections()->iconCollections)) {
            //get collections params array. It will contain values of 'param' property for each collection
            $mobile_menu_icon_collections_params = qode_icon_collections()->getIconCollectionsParams();

            //foreach collection generate hide and show array
            foreach (qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object) {
                $mobile_menu_icon_pack_hide_array[$dep_collection_key] = '';

                //we need to include only current collection in show string as it is the only one that needs to show
                $mobile_menu_icon_pack_show_array[$dep_collection_key] = '#qodef_mobile_menu_icon_' . $dep_collection_object->param . '_container';

                //for all collections param generate hide string
                foreach ($mobile_menu_icon_collections_params as $mobile_menu_icon_collections_param) {
                    //we don't need to include current one, because it needs to be shown, not hidden
                    if ($mobile_menu_icon_collections_param !== $dep_collection_object->param) {
                        $mobile_menu_icon_pack_hide_array[$dep_collection_key] .= '#qodef_mobile_menu_icon_' . $mobile_menu_icon_collections_param . '_container,';
                    }
                }

                //remove remaining ',' character
                $mobile_menu_icon_pack_hide_array[$dep_collection_key] = rtrim($mobile_menu_icon_pack_hide_array[$dep_collection_key], ',');
            }

        }

        $mobile_menu_button_icon_pack = new QodeField(
            "select",
            "mobile_menu_button_icon_pack",
            "font_awesome",
    "移动菜单按钮图标包",
    "选择移动菜单按钮图标包",
            qode_icon_collections()->getIconCollections(),
            array(
                "dependence" => true,
                "hide" => $mobile_menu_icon_pack_hide_array,
                "show" => $mobile_menu_icon_pack_show_array
            ));

        $panel20->addChild("mobile_menu_button_icon_pack", $mobile_menu_button_icon_pack);

        if (is_array(qode_icon_collections()->iconCollections) && count(qode_icon_collections()->iconCollections)) {
            //foreach icon collection we need to generate separate container that will have dependency set
            //it will have one field inside with icons dropdown
            foreach (qode_icon_collections()->iconCollections as $collection_key => $collection_object) {
                $icons_array = $collection_object->getIconsArray();

                //get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
                $icon_collections_keys = qode_icon_collections()->getIconCollectionsKeys();

                //unset current one, because it doesn't have to be included in dependency that hides icon container
                unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

                $mobile_menu_icon_hide_values = $icon_collections_keys;
                $mobile_menu_icon_container = new QodeContainer("mobile_menu_icon_" . $collection_object->param . "_container", "mobile_menu_button_icon_pack", "", $mobile_menu_icon_hide_values);
        $mobile_menu_button_icon = new QodeField("select", "mobile_menu_icon_".$collection_object->param, "fa-bars", "移动菜单图标","选择移动菜单图标", $icons_array, array("col_width" => 3));
                $mobile_menu_icon_container->addChild("mobile_menu_icon_" . $collection_object->param, $mobile_menu_button_icon);

                $panel20->addChild("mobile_menu_icon_" . $collection_object->param . "_container", $mobile_menu_icon_container);
            }

        }


$panel9 = new QodePanel("页眉按钮图标","header_buttons_panel");
        $headerandfooterPage->addChild("panel9", $panel9);
$header_buttons_color = new QodeField("color","header_buttons_color","","颜色","选择页眉图标颜色");
        $panel9->addChild("header_buttons_color", $header_buttons_color);
$header_buttons_hover_color = new QodeField("color","header_buttons_hover_color","","悬停颜色","选择页眉图标悬停颜色");
        $panel9->addChild("header_buttons_hover_color", $header_buttons_hover_color);
$header_buttons_font_size = new QodeField("text","header_buttons_font_size","","图标大小（px）","选择页眉图标大小", array(), array("col_width" => 3));
        $panel9->addChild("header_buttons_font_size", $header_buttons_font_size);
$header_buttons_size = new QodeField("select","header_buttons_size","normal","侧面菜单 / 全屏菜单图标大小","选择侧面菜单/全屏菜单图标大小", array( "normal" => "正常",
       "medium" => "中",
       "large" => "大"
        ));
        $panel9->addChild("header_buttons_size", $header_buttons_size);


        if (qode_is_wpml_installed()) {
    $wpml_panel = new QodePanel('语言切换' , 'language_switcher', 'vertical_area', 'yes');

            $headerandfooterPage->addChild('language_switcher', $wpml_panel);

    $lang_items_padding = new QodeField('text', 'header_bottom_lang_items_padding', '', '语言列表之间左/右间距（px）', '设置当语言切换添加到主菜单上时语言之间的间距', array(), array("col_width" => 3));
            $wpml_panel->addChild('header_bottom_lang_items_padding', $lang_items_padding);
        }

    }
    add_action('qode_options_map','qode_haeder_options_map',30);
}