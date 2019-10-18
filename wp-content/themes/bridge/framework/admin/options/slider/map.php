<?php
if(!function_exists('qode_slider_options_map')) {
    /**
     * Slider options page
     */
    function qode_slider_options_map(){

$sliderPage = new QodeAdminPage("_slider", "幻灯片", "fa fa-sliders");
        qode_framework()->qodeOptions->addAdminPage("slider", $sliderPage);

        // General Style

$panel3 = new QodePanel("常规风格","navigation_control_style");
        $sliderPage->addChild("panel3", $panel3);

	$qs_slider_height_tablet = new QodeField("text","qs_slider_height_tablet","","竖向平板和横向手机视图幻灯片高度(px)","定义平板设备 - 竖向视图和手机设备横向视图幻灯片高度");
        $panel3->addChild("qs_slider_height_tablet", $qs_slider_height_tablet);

	$qs_slider_height_mobile = new QodeField("text","qs_slider_height_mobile","","手机设备幻灯片高度 (px)","定义手机设备幻灯片高度");
        $panel3->addChild("qs_slider_height_mobile", $qs_slider_height_mobile);

        //Buttons

$panel4 = new QodePanel("按钮风格","buttons_panel");
        $sliderPage->addChild("panel4", $panel4);

	$group1 = new QodeGroup("按钮1风格","定义按钮1风格.");
        $panel4->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);

			$qs_button_color = new QodeField("colorsimple","qs_button_color","","文字颜色","This is some description");
        $row1->addChild("qs_button_color", $qs_button_color);

			$qs_button_hover_color = new QodeField("colorsimple","qs_button_hover_color","","悬停文字颜色","This is some description");
        $row1->addChild("qs_button_hover_color", $qs_button_hover_color);

			$qs_button_background_color = new QodeField("colorsimple","qs_button_background_color","","背景颜色","This is some description");
        $row1->addChild("qs_button_background_color", $qs_button_background_color);

			$qs_button_hover_background_color = new QodeField("colorsimple","qs_button_hover_background_color","","背景悬停颜色","This is some description");
        $row1->addChild("qs_button_hover_background_color", $qs_button_hover_background_color);

        $row2 = new QodeRow(true);
        $group1->addChild("row2", $row2);

			$qs_button_border_color = new QodeField("colorsimple","qs_button_border_color","","边框颜色","This is some description");
        $row2->addChild("qs_button_border_color", $qs_button_border_color);

			$qs_button_hover_border_color = new QodeField("colorsimple","qs_button_hover_border_color","","边框悬停颜色","This is some description");
        $row2->addChild("qs_button_hover_border_color", $qs_button_hover_border_color);

			$qs_button_border_width = new QodeField("textsimple","qs_button_border_width","","边框宽度（px）","This is some description");
        $row2->addChild("qs_button_border_width", $qs_button_border_width);

			$qs_button_border_radius = new QodeField("textsimple","qs_button_border_radius","","边框半径 (px)","This is some description");
        $row2->addChild("qs_button_border_radius", $qs_button_border_radius);

	$group2 = new QodeGroup("按钮2风格","定义按钮2风格.");
        $panel4->addChild("group2", $group2);
        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);

			$qs_button2_color = new QodeField("colorsimple","qs_button2_color","","文字颜色","This is some description");
        $row1->addChild("qs_button2_color", $qs_button2_color);

			$qs_button2_hover_color = new QodeField("colorsimple","qs_button2_hover_color","","悬停文字颜色","This is some description");
        $row1->addChild("qs_button2_hover_color", $qs_button2_hover_color);

			$qs_button2_background_color = new QodeField("colorsimple","qs_button2_background_color","","背景颜色","This is some description");
        $row1->addChild("qs_button2_background_color", $qs_button2_background_color);

			$qs_button2_hover_background_color = new QodeField("colorsimple","qs_button2_hover_background_color","","背景悬停颜色","This is some description");
        $row1->addChild("qs_button2_hover_background_color", $qs_button2_hover_background_color);

        $row2 = new QodeRow(true);
        $group2->addChild("row2", $row2);

			$qs_button2_border_color = new QodeField("colorsimple","qs_button2_border_color","","边框颜色","This is some description");
        $row2->addChild("qs_button2_border_color", $qs_button2_border_color);

			$qs_button2_hover_border_color = new QodeField("colorsimple","qs_button2_hover_border_color","","边框悬停颜色","This is some description");
        $row2->addChild("qs_button2_hover_border_color", $qs_button2_hover_border_color);

			$qs_button2_border_width = new QodeField("textsimple","qs_button2_border_width","","边框宽度（px）","This is some description");
        $row2->addChild("qs_button2_border_width", $qs_button2_border_width);

			$qs_button2_border_radius = new QodeField("textsimple","qs_button2_border_radius","","边框半径 (px)","This is some description");
        $row2->addChild("qs_button2_border_radius", $qs_button2_border_radius);

		//Buttons v2

		$panel4V2Buttons = new QodePanel("按钮V2风格", "buttons_v2_panel");
		$sliderPage->addChild("buttons_v2_panel", $panel4V2Buttons);

		$group1 = new QodeGroup("按钮1风格", "定义按钮1风格.");
		$panel4V2Buttons->addChild("group1", $group1);
		$row1 = new QodeRow();
		$group1->addChild("row1", $row1);

		$qs_v2_button_color = new QodeField("colorsimple", "qs_v2_button_color", "", "文字颜色", "This is some description");
		$row1->addChild("qs_v2_button_color", $qs_v2_button_color);

		$qs_v2_button_hover_color = new QodeField("colorsimple", "qs_v2_button_hover_color", "", "悬停文字颜色", "This is some description");
		$row1->addChild("qs_v2_button_hover_color", $qs_v2_button_hover_color);

		$qs_v2_button_background_color = new QodeField("colorsimple", "qs_v2_button_background_color", "", "背景颜色", "This is some description");
		$row1->addChild("qs_v2_button_background_color", $qs_v2_button_background_color);

		$qs_v2_button_hover_background_color = new QodeField("colorsimple", "qs_v2_button_hover_background_color", "", "背景悬停颜色", "This is some description");
		$row1->addChild("qs_v2_button_hover_background_color", $qs_v2_button_hover_background_color);

		$row2 = new QodeRow(true);
		$group1->addChild("row2", $row2);

		$qs_v2_button_icon_left_border_color = new QodeField("colorsimple", "qs_v2_button_icon_left_border_color", "", "图标左边框颜色", "This is some description");
		$row2->addChild("qs_v2_button_icon_left_border_color", $qs_v2_button_icon_left_border_color);

		$qs_v2_button_hover_icon_left_border_color = new QodeField("colorsimple", "qs_v2_button_hover_icon_left_border_color", "", "图标左边框悬停颜色", "This is some description");
		$row2->addChild("qs_v2_button_hover_icon_left_border_color", $qs_v2_button_hover_icon_left_border_color);


		$qs_v2_button_icon_background_color = new QodeField("colorsimple", "qs_v2_button_icon_background_color", "", "图标背景颜色", "This is some description");
		$row2->addChild("qs_v2_button_icon_background_color", $qs_v2_button_icon_background_color);

		$qs_v2_button_hover_icon_background_color = new QodeField("colorsimple", "qs_v2_button_hover_icon_background_color", "", "图标背景悬停颜色", "This is some description");
		$row2->addChild("qs_v2_button_hover_icon_background_color", $qs_v2_button_hover_icon_background_color);

		$group2 = new QodeGroup("按钮2风格", "Define style for button 2.");
		$panel4V2Buttons->addChild("group2", $group2);
		$row1 = new QodeRow();
		$group2->addChild("row1", $row1);

		$qs_v2_button2_color = new QodeField("colorsimple", "qs_v2_button2_color", "", "文字颜色", "This is some description");
		$row1->addChild("qs_v2_button2_color", $qs_v2_button2_color);

		$qs_v2_button2_hover_color = new QodeField("colorsimple", "qs_v2_button2_hover_color", "", "悬停文字颜色", "This is some description");
		$row1->addChild("qs_v2_button2_hover_color", $qs_v2_button2_hover_color);

		$qs_v2_button2_background_color = new QodeField("colorsimple", "qs_v2_button2_background_color", "", "背景颜色", "This is some description");
		$row1->addChild("qs_v2_button2_background_color", $qs_v2_button2_background_color);

		$qs_v2_button2_hover_background_color = new QodeField("colorsimple", "qs_v2_button2_hover_background_color", "", "背景悬停颜色", "This is some description");
		$row1->addChild("qs_v2_button2_hover_background_color", $qs_v2_button2_hover_background_color);

		$row2 = new QodeRow(true);
		$group2->addChild("row2", $row2);

		$qs_v2_button2_icon_left_border_color = new QodeField("colorsimple", "qs_v2_button2_icon_left_border_color", "", "图标左边框颜色", "This is some description");
		$row2->addChild("qs_v2_button2_icon_left_border_color", $qs_v2_button2_icon_left_border_color);

		$qs_v2_button2_hover_icon_left_border_color = new QodeField("colorsimple", "qs_v2_button2_hover_icon_left_border_color", "", "图标左边框悬停颜色", "This is some description");
		$row2->addChild("qs_v2_button2_hover_icon_left_border_color", $qs_v2_button2_hover_icon_left_border_color);


		$qs_v2_button2_icon_background_color = new QodeField("colorsimple", "qs_v2_button2_icon_background_color", "", "图标背景颜色", "This is some description");
		$row2->addChild("qs_v2_button_icon_background_color", $qs_v2_button2_icon_background_color);

		$qs_v2_button2_hover_icon_background_color = new QodeField("colorsimple", "qs_v2_button2_hover_icon_background_color", "", "图标背景悬停颜色", "This is some description");
		$row2->addChild("qs_v2_button2_hover_icon_background_color", $qs_v2_button2_hover_icon_background_color);

        // Custom cursor navigation style

	$panel5 = new QodePanel("自定义光标导航样式","navigation_custom_cursor_style");
        $sliderPage->addChild("panel5", $panel5);

	$qs_enable_navigation_custom_cursor = new QodeField("yesno","qs_enable_navigation_custom_cursor","no","为导航启用自定义光标","启用此选项将为幻灯片导航显示自定义光标", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qs_enable_navigation_custom_cursor_container"));
        $panel5->addChild("qs_enable_navigation_custom_cursor", $qs_enable_navigation_custom_cursor);


        $qs_enable_navigation_custom_cursor_container = new QodeContainer("qs_enable_navigation_custom_cursor_container", "qs_enable_navigation_custom_cursor", "no");
        $panel5->addChild("qs_enable_navigation_custom_cursor_container", $qs_enable_navigation_custom_cursor_container);

	$cursor_image_left_right_area_size = new QodeField("text","cursor_image_left_right_area_size","","可点击左/右区域大小 (%)","定义可点击左/右幻灯片区域的大小相对于幻灯片的宽度（默认值是23％）", array(), array("col_width" => 3));
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_right_area_size", $cursor_image_left_right_area_size);

	$cursor_image_left_normal = new QodeField("image","cursor_image_left_normal","","光标图片'左' - 正常","选择要显示的默认光标'左'图片 ");
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_normal", $cursor_image_left_normal);

	$cursor_image_right_normal = new QodeField("image","cursor_image_right_normal","","光标图片'右' - 正常","选择要显示的默认光标'右'图片 ");
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_right_normal", $cursor_image_right_normal);


	$cursor_image_left_light = new QodeField("image","cursor_image_left_light","","光标图片'左' - 浅色","选择要显示光标'左'浅色图片 ");
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_light", $cursor_image_left_light);

	$cursor_image_right_light = new QodeField("image","cursor_image_right_light","","光标图片'右' - 浅色","选择要显示的光标'右'浅色图片 ");
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_right_light", $cursor_image_right_light);

	$cursor_image_left_dark = new QodeField("image","cursor_image_left_dark","","光标图片'左' - 深色","选择要显示的光标'左'深色图片 ");
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_dark", $cursor_image_left_dark);

	$cursor_image_right_dark = new QodeField("image","cursor_image_right_dark","","光标图片'右' - 深色","选择要显示的光标'右'深色 ");
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_right_dark", $cursor_image_right_dark);


	$qs_enable_navigation_custom_cursor_grab = new QodeField("yesno","qs_enable_navigation_custom_cursor_grab","no","为'枪'箭头启用自定义光标","启用此选项将为幻灯片'枪'箭头显示自定义光标", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qs_enable_navigation_custom_cursor_grab_container"));
        $qs_enable_navigation_custom_cursor_container->addChild("qs_enable_navigation_custom_cursor_grab", $qs_enable_navigation_custom_cursor_grab);

        $qs_enable_navigation_custom_cursor_grab_container = new QodeContainer("qs_enable_navigation_custom_cursor_grab_container", "qs_enable_navigation_custom_cursor_grab", "no");
        $qs_enable_navigation_custom_cursor_container->addChild("qs_enable_navigation_custom_cursor_grab_container", $qs_enable_navigation_custom_cursor_grab_container);

	$cursor_image_grab_normal = new QodeField("image","cursor_image_grab_normal","","光标图片'抢' - 正常","选择要显示的光标'抢'图片");
        $qs_enable_navigation_custom_cursor_grab_container->addChild("cursor_image_grab_normal", $cursor_image_grab_normal);

	$cursor_image_grab_light = new QodeField("image","cursor_image_grab_light","","光标图片'抢' - 浅色","选择要显示的光标'抢'浅色图片");
        $qs_enable_navigation_custom_cursor_grab_container->addChild("cursor_image_grab_light", $cursor_image_grab_light);

	$cursor_image_grab_dark = new QodeField("image","cursor_image_grab_dark","","光标图片'抢' - 深色","选择要显示的光标'抢'深色图片");
        $qs_enable_navigation_custom_cursor_grab_container->addChild("cursor_image_grab_dark", $cursor_image_grab_dark);
    }
    add_action('qode_options_map','qode_slider_options_map',90);
}