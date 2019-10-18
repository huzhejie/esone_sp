<?php

if(!function_exists('qode_contactform7_options_map')) {
    /**
     * Contact Form 7 options page
     */
    function qode_contactform7_options_map()
    {

$contactform7page = new QodeAdminPage("_contact_form_7", "联系表7", "fa fa-file-text-o");
        qode_framework()->qodeOptions->addAdminPage("Contact Form 7", $contactform7page);

        //Contact Form 7 Settings

$panel1 = new QodePanel("自定义风格1设置","contact_form_custom_style_1_panel");
        $contactform7page->addChild("panel1", $panel1);

	$group1 = new QodeGroup("表单元素'背景","定义表单元素背景风格 (输入、文字区域、选择)");
        $panel1->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);
			$cf7_custom_style_1_element_background_color = new QodeField("colorsimple","cf7_custom_style_1_element_background_color","","背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_element_background_color", $cf7_custom_style_1_element_background_color);
			$cf7_custom_style_1_element_focus_background_color = new QodeField("colorsimple","cf7_custom_style_1_element_focus_background_color","","焦点背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_element_focus_background_color", $cf7_custom_style_1_element_focus_background_color);
			$cf7_custom_style_1_element_background_transparency = new QodeField("textsimple","cf7_custom_style_1_element_background_transparency","","背景透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_1_element_background_transparency", $cf7_custom_style_1_element_background_transparency);
	$group2 = new QodeGroup("表单元素'边框","定义表单元素边框风格 (文字输入字段、文字区域、选择)");
        $panel1->addChild("group2", $group2);
        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);
			$cf7_custom_style_1_element_border_color = new QodeField("colorsimple","cf7_custom_style_1_element_border_color","","边框颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_element_border_color", $cf7_custom_style_1_element_border_color);
			$cf7_custom_style_1_element_focus_border_color = new QodeField("colorsimple","cf7_custom_style_1_element_focus_border_color","","焦点边框颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_element_focus_border_color", $cf7_custom_style_1_element_focus_border_color);
			$cf7_custom_style_1_border_transparency = new QodeField("textsimple","cf7_custom_style_1_border_transparency","","边框透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_1_border_transparency", $cf7_custom_style_1_border_transparency);
			$cf7_custom_style_1_element_border_width = new QodeField("textsimple","cf7_custom_style_1_element_border_width","","边框宽度（px）","This is some description");
        $row1->addChild("cf7_custom_style_1_element_border_width", $cf7_custom_style_1_element_border_width);
        $row2 = new QodeRow();
        $group2->addChild("row2", $row2);
        $cf7_custom_style_1_element_enable_border_bottom = new QodeField("yesnosimple", "cf7_custom_style_1_element_enable_border_bottom", "no", "仅启用下边框","This is some description");
        $row2->addChild("cf7_custom_style_1_element_enable_border_bottom", $cf7_custom_style_1_element_enable_border_bottom);

        $group3 = new QodeGroup("表单元素'边框半径", "定义表单元素边框半径 (文字输入字段、文字区域、选择)");
        $panel1->addChild("group3", $group3);
        $row1 = new QodeRow();
        $group3->addChild("row1", $row1);
				$cf7_custom_style_1_element_border_radius_top_left = new QodeField("textsimple","cf7_custom_style_1_element_border_radius_top_left","","左上(px)","This is some description");
        $row1->addChild("cf7_custom_style_1_element_border_radius_top_left", $cf7_custom_style_1_element_border_radius_top_left);
				$cf7_custom_style_1_element_border_radius_top_right = new QodeField("textsimple","cf7_custom_style_1_element_border_radius_top_right","","右上(px)","This is some description");
        $row1->addChild("cf7_custom_style_1_element_border_radius_top_right", $cf7_custom_style_1_element_border_radius_top_right);
				$cf7_custom_style_1_element_border_radius_bottom_right = new QodeField("textsimple","cf7_custom_style_1_element_border_radius_bottom_right","","右下(px)","This is some description");
        $row1->addChild("cf7_custom_style_1_element_border_radius_bottom_right", $cf7_custom_style_1_element_border_radius_bottom_right);
				$cf7_custom_style_1_element_border_radius_bottom_left = new QodeField("textsimple","cf7_custom_style_1_element_border_radius_bottom_left","","左下(px)","This is some description");
        $row1->addChild("cf7_custom_style_1_element_border_radius_bottom_left", $cf7_custom_style_1_element_border_radius_bottom_left);


	$group4 = new QodeGroup("表单元素'文字风格","定义表单元素文字风格 (文字输入字段、文字区域、选择)");
        $panel1->addChild("group4", $group4);
        $row1 = new QodeRow();
        $group4->addChild("row1", $row1);
			$cf7_custom_style_1_element_font_color = new QodeField("colorsimple","cf7_custom_style_1_element_font_color","","文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_element_font_color", $cf7_custom_style_1_element_font_color);
			$cf7_custom_style_1_element_font_focus_color = new QodeField("colorsimple","cf7_custom_style_1_element_font_focus_color","","焦点文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_element_font_focus_color", $cf7_custom_style_1_element_font_focus_color);
			$cf7_custom_style_1_element_font_size = new QodeField("textsimple","cf7_custom_style_1_element_font_size","","字体大小（px）","This is some description");
        $row1->addChild("cf7_custom_style_1_element_font_size", $cf7_custom_style_1_element_font_size);
			$cf7_custom_style_1_element_line_height = new QodeField("textsimple","cf7_custom_style_1_element_line_height","","行高（px）","This is some description");
        $row1->addChild("cf7_custom_style_1_element_line_height", $cf7_custom_style_1_element_line_height);
        $row2 = new QodeRow(true);
        $group4->addChild("row2", $row2);
			$cf7_custom_style_1_element_font_family = new QodeField("fontsimple","cf7_custom_style_1_element_font_family","-1","字体系列","This is some description");
        $row2->addChild("cf7_custom_style_1_element_font_family", $cf7_custom_style_1_element_font_family);
        $cf7_custom_style_1_element_font_style = new QodeField("selectblanksimple", "cf7_custom_style_1_element_font_style", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_1_element_font_style", $cf7_custom_style_1_element_font_style);
        $cf7_custom_style_1_element_font_weight = new QodeField("selectblanksimple", "cf7_custom_style_1_element_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_1_element_font_weight", $cf7_custom_style_1_element_font_weight);
        $cf7_custom_style_1_element_text_transform = new QodeField("selectblanksimple", "cf7_custom_style_1_element_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_1_element_text_transform", $cf7_custom_style_1_element_text_transform);
        $row3 = new QodeRow(true);
        $group4->addChild("row3", $row3);
			$cf7_custom_style_1_element_letter_spacing = new QodeField("textsimple","cf7_custom_style_1_element_letter_spacing","","字符间距（px）","This is some description");
        $row3->addChild("cf7_custom_style_1_element_letter_spacing", $cf7_custom_style_1_element_letter_spacing);

	$group5 = new QodeGroup("表单元素'填充","定义表单元素填充 (文字输入字段、文字区域、选择)");
        $panel1->addChild("group5", $group5);
        $row1 = new QodeRow();
        $group5->addChild("row1", $row1);
			$cf7_custom_style_1_element_padding_top = new QodeField("textsimple","cf7_custom_style_1_element_padding_top","","上填充 (px)","This is some description");
        $row1->addChild("cf7_custom_style_1_element_padding_top", $cf7_custom_style_1_element_padding_top);
			$cf7_custom_style_1_element_padding_right = new QodeField("textsimple","cf7_custom_style_1_element_padding_right","","右填充（px）","This is some description");
        $row1->addChild("cf7_custom_style_1_element_padding_right", $cf7_custom_style_1_element_padding_right);
			$cf7_custom_style_1_element_padding_bottom = new QodeField("textsimple","cf7_custom_style_1_element_padding_bottom","","下填充 (px)","This is some description");
        $row1->addChild("cf7_custom_style_1_element_padding_bottom", $cf7_custom_style_1_element_padding_bottom);
			$cf7_custom_style_1_element_padding_left = new QodeField("textsimple","cf7_custom_style_1_element_padding_left","","左填充（px）","This is some description");
        $row1->addChild("cf7_custom_style_1_element_padding_left", $cf7_custom_style_1_element_padding_left);

	$group6 = new QodeGroup("表单元素'边距","定义表单元素边距 (文字输入字段、文字区域、选择)");
        $panel1->addChild("group6", $group6);
        $row1 = new QodeRow();
        $group6->addChild("row1", $row1);
			$cf7_custom_style_1_element_margin_top = new QodeField("textsimple","cf7_custom_style_1_element_margin_top","","上边距 (px)","This is some description");
        $row1->addChild("cf7_custom_style_1_element_margin_top", $cf7_custom_style_1_element_margin_top);
			$cf7_custom_style_1_element_margin_bottom = new QodeField("textsimple","cf7_custom_style_1_element_margin_bottom","","下边距 (px)","This is some description");
        $row1->addChild("cf7_custom_style_1_element_margin_bottom", $cf7_custom_style_1_element_margin_bottom);

	$group7 = new QodeGroup("按钮背景","定义按钮背景风格");
        $panel1->addChild("group7", $group7);
        $row1 = new QodeRow();
        $group7->addChild("row1", $row1);
			$cf7_custom_style_1_button_background_color = new QodeField("colorsimple","cf7_custom_style_1_button_background_color","","背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_button_background_color", $cf7_custom_style_1_button_background_color);
			$cf7_custom_style_1_button_hover_background_color = new QodeField("colorsimple","cf7_custom_style_1_button_hover_background_color","","悬停背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_button_hover_background_color", $cf7_custom_style_1_button_hover_background_color);
			$cf7_custom_style_1_button_background_transparency = new QodeField("textsimple","cf7_custom_style_1_button_background_transparency","","背景透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_1_button_background_transparency", $cf7_custom_style_1_button_background_transparency);
	$group8 = new QodeGroup("按钮边框","定义按钮边框风格");
        $panel1->addChild("group8", $group8);
        $row1 = new QodeRow();
        $group8->addChild("row1", $row1);
			$cf7_custom_style_1_button_border_color = new QodeField("colorsimple","cf7_custom_style_1_button_border_color","","边框颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_button_border_color", $cf7_custom_style_1_button_border_color);
			$cf7_custom_style_1_button_hover_border_color = new QodeField("colorsimple","cf7_custom_style_1_button_hover_border_color","","边框悬停颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_button_hover_border_color", $cf7_custom_style_1_button_hover_border_color);
			$cf7_custom_style_1_button_border_transparency = new QodeField("textsimple","cf7_custom_style_1_button_border_transparency","","边框透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_1_button_border_transparency", $cf7_custom_style_1_button_border_transparency);
			$cf7_custom_style_1_button_border_width = new QodeField("textsimple","cf7_custom_style_1_button_border_width","","边框宽度（px）","This is some description");
        $row1->addChild("cf7_custom_style_1_button_border_width", $cf7_custom_style_1_button_border_width);

	$group9 = new QodeGroup("按钮边框半径","定义按钮边框半径");
        $panel1->addChild("group9", $group9);
        $row1 = new QodeRow();
        $group9->addChild("row1", $row1);
			$cf7_custom_style_1_button_border_radius_top_left = new QodeField("textsimple","cf7_custom_style_1_button_border_radius_top_left","","左上(px)","This is some description");
        $row1->addChild("cf7_custom_style_1_button_border_radius_top_left", $cf7_custom_style_1_button_border_radius_top_left);
			$cf7_custom_style_1_button_border_radius_top_right = new QodeField("textsimple","cf7_custom_style_1_button_border_radius_top_right","","右上(px)","This is some description");
        $row1->addChild("cf7_custom_style_1_button_border_radius_top_right", $cf7_custom_style_1_button_border_radius_top_right);
			$cf7_custom_style_1_button_border_radius_bottom_right = new QodeField("textsimple","cf7_custom_style_1_button_border_radius_bottom_right","","右下(px)","This is some description");
        $row1->addChild("cf7_custom_style_1_button_border_radius_bottom_right", $cf7_custom_style_1_button_border_radius_bottom_right);
			$cf7_custom_style_1_button_border_radius_bottom_left = new QodeField("textsimple","cf7_custom_style_1_button_border_radius_bottom_left","","左下(px)","This is some description");
        $row1->addChild("cf7_custom_style_1_button_border_radius_bottom_left", $cf7_custom_style_1_button_border_radius_bottom_left);

	$group10 = new QodeGroup("按钮文字风格","定义按钮文字风格");
        $panel1->addChild("group10", $group10);
        $row1 = new QodeRow();
        $group10->addChild("row1", $row1);
			$cf7_custom_style_1_button_font_color = new QodeField("colorsimple","cf7_custom_style_1_button_font_color","","文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_button_font_color", $cf7_custom_style_1_button_font_color);
			$cf7_custom_style_1_button_font_hover_color = new QodeField("colorsimple","cf7_custom_style_1_button_font_hover_color","","悬停文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_1_button_font_hover_color", $cf7_custom_style_1_button_font_hover_color);
			$cf7_custom_style_1_button_font_size = new QodeField("textsimple","cf7_custom_style_1_button_font_size","","字体大小（px）","This is some description");
        $row1->addChild("cf7_custom_style_1_button_font_size", $cf7_custom_style_1_button_font_size);
			$cf7_custom_style_1_button_font_family = new QodeField("fontsimple","cf7_custom_style_1_button_font_family","-1","字体系列","This is some description");
        $row1->addChild("cf7_custom_style_1_button_font_family", $cf7_custom_style_1_button_font_family);
        $row2 = new QodeRow(true);
        $group10->addChild("row2", $row2);
        $cf7_custom_style_1_button_font_style = new QodeField("selectblanksimple", "cf7_custom_style_1_button_font_style", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_1_button_font_style", $cf7_custom_style_1_button_font_style);
        $cf7_custom_style_1_button_font_weight = new QodeField("selectblanksimple", "cf7_custom_style_1_button_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_1_button_font_weight", $cf7_custom_style_1_button_font_weight);
        $cf7_custom_style_1_button_text_transform = new QodeField("selectblanksimple", "cf7_custom_style_1_button_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_1_button_text_transform", $cf7_custom_style_1_button_text_transform);
			$cf7_custom_style_1_button_letter_spacing = new QodeField("textsimple","cf7_custom_style_1_button_letter_spacing","","字符间距（px）","This is some description");
        $row2->addChild("cf7_custom_style_1_button_letter_spacing", $cf7_custom_style_1_button_letter_spacing);

			$cf7_custom_style_1_button_height = new QodeField("text","cf7_custom_style_1_button_height","","按钮高度 (px)","输入按钮高度像素",array(), array("col_width" => 3));
        $panel1->addChild("cf7_custom_style_1_button_height", $cf7_custom_style_1_button_height);

			$cf7_custom_style_1_button_padding = new QodeField("text","cf7_custom_style_1_button_padding","","按钮左/右填充（px）","输入按钮左右填充像素",array(), array("col_width" => 3));
        $panel1->addChild("cf7_custom_style_1_button_padding", $cf7_custom_style_1_button_padding);

		$cf7_custom_style_1_button_hover = new QodeField("select","cf7_custom_style_1_button_hover","","按钮悬停类型","选择按钮悬停类型",array(
			"" => "默认",
			"enlarge" => "放大"
		));
		$panel1->addChild("cf7_custom_style_1_button_hover",$cf7_custom_style_1_button_hover);

        qode_add_admin_field(
            array(
                'name'              => 'button_cf1_full_width',
                'type'              => 'yesno',
                'label'             => esc_html__('Enable Full Width Button', 'qode'),
                'description'       => esc_html__('Enabling this option will make the "Send" button take up the full width of the contact form.', 'qode'),
                'default_value'     => 'no',
                'parent'            => $panel1,
            )
        );

			$cf7_custom_style_1_textarea_height = new QodeField("text","cf7_custom_style_1_textarea_height","","文字区域高度(px)","输入文字区域表单元素高度像素",array(),array("col_width" => 3));
        $panel1->addChild("cf7_custom_style_1_textarea_height", $cf7_custom_style_1_textarea_height);

$panel2 = new QodePanel("自定义风格2设置","contact_form_custom_style_2_panel");
        $contactform7page->addChild("panel2", $panel2);

	$group1 = new QodeGroup("表单元素'背景","定义表单元素背景风格（输入、文字区域、选择）");
        $panel2->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);
			$cf7_custom_style_2_element_background_color = new QodeField("colorsimple","cf7_custom_style_2_element_background_color","","背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_element_background_color", $cf7_custom_style_2_element_background_color);
			$cf7_custom_style_2_element_focus_background_color = new QodeField("colorsimple","cf7_custom_style_2_element_focus_background_color","","焦点背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_element_focus_background_color", $cf7_custom_style_2_element_focus_background_color);
			$cf7_custom_style_2_element_background_transparency = new QodeField("textsimple","cf7_custom_style_2_element_background_transparency","","背景透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_2_element_background_transparency", $cf7_custom_style_2_element_background_transparency);
	$group2 = new QodeGroup("表单元素'边框","定义表单元素边框风格（文字输入字段、文字区域、选择）");
        $panel2->addChild("group2", $group2);
        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);
			$cf7_custom_style_2_element_border_color = new QodeField("colorsimple","cf7_custom_style_2_element_border_color","","边框颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_element_border_color", $cf7_custom_style_2_element_border_color);
			$cf7_custom_style_2_element_focus_border_color = new QodeField("colorsimple","cf7_custom_style_2_element_focus_border_color","","焦点边框颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_element_focus_border_color", $cf7_custom_style_2_element_focus_border_color);
			$cf7_custom_style_2_border_transparency = new QodeField("textsimple","cf7_custom_style_2_border_transparency","","边框透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_2_border_transparency", $cf7_custom_style_2_border_transparency);
			$cf7_custom_style_2_element_border_width = new QodeField("textsimple","cf7_custom_style_2_element_border_width","","边框宽度（px）","This is some description");
        $row1->addChild("cf7_custom_style_2_element_border_width", $cf7_custom_style_2_element_border_width);
        $row2 = new QodeRow();
        $group2->addChild("row2", $row2);
        $cf7_custom_style_2_element_enable_border_bottom = new QodeField("yesnosimple", "cf7_custom_style_2_element_enable_border_bottom", "no", "仅启用下边框","This is some description");
        $row2->addChild("cf7_custom_style_2_element_enable_border_bottom", $cf7_custom_style_2_element_enable_border_bottom);

        $group3 = new QodeGroup("表单元素'边框半径", "定义表单元素边框半径（文字输入字段、文字区域、选择）");
        $panel2->addChild("group3", $group3);
        $row1 = new QodeRow();
        $group3->addChild("row1", $row1);
				$cf7_custom_style_2_element_border_radius_top_left = new QodeField("textsimple","cf7_custom_style_2_element_border_radius_top_left","","左上(px)","This is some description");
        $row1->addChild("cf7_custom_style_2_element_border_radius_top_left", $cf7_custom_style_2_element_border_radius_top_left);
				$cf7_custom_style_2_element_border_radius_top_right = new QodeField("textsimple","cf7_custom_style_2_element_border_radius_top_right","","右上(px)","This is some description");
        $row1->addChild("cf7_custom_style_2_element_border_radius_top_right", $cf7_custom_style_2_element_border_radius_top_right);
				$cf7_custom_style_2_element_border_radius_bottom_right = new QodeField("textsimple","cf7_custom_style_2_element_border_radius_bottom_right","","右下(px)","This is some description");
        $row1->addChild("cf7_custom_style_2_element_border_radius_bottom_right", $cf7_custom_style_2_element_border_radius_bottom_right);
				$cf7_custom_style_2_element_border_radius_bottom_left = new QodeField("textsimple","cf7_custom_style_2_element_border_radius_bottom_left","","左下(px)","This is some description");
        $row1->addChild("cf7_custom_style_2_element_border_radius_bottom_left", $cf7_custom_style_2_element_border_radius_bottom_left);

	$group4 = new QodeGroup("表单元素'文字风格","定义表单元素文字风格(文字输入字段、文字区域、选择)");
        $panel2->addChild("group4", $group4);
        $row1 = new QodeRow();
        $group4->addChild("row1", $row1);
			$cf7_custom_style_2_element_font_color = new QodeField("colorsimple","cf7_custom_style_2_element_font_color","","文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_element_font_color", $cf7_custom_style_2_element_font_color);
			$cf7_custom_style_2_element_font_focus_color = new QodeField("colorsimple","cf7_custom_style_2_element_font_focus_color","","焦点文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_element_font_focus_color", $cf7_custom_style_2_element_font_focus_color);
			$cf7_custom_style_2_element_font_size = new QodeField("textsimple","cf7_custom_style_2_element_font_size","","字体大小（px）","This is some description");
        $row1->addChild("cf7_custom_style_2_element_font_size", $cf7_custom_style_2_element_font_size);
			$cf7_custom_style_2_element_line_height = new QodeField("textsimple","cf7_custom_style_2_element_line_height","","行高（px）","This is some description");
        $row1->addChild("cf7_custom_style_2_element_line_height", $cf7_custom_style_2_element_line_height);
        $row2 = new QodeRow(true);
        $group4->addChild("row2", $row2);
			$cf7_custom_style_2_element_font_family = new QodeField("fontsimple","cf7_custom_style_2_element_font_family","-1","字体系列","This is some description");
        $row2->addChild("cf7_custom_style_2_element_font_family", $cf7_custom_style_2_element_font_family);
        $cf7_custom_style_2_element_font_style = new QodeField("selectblanksimple", "cf7_custom_style_2_element_font_style", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_2_element_font_style", $cf7_custom_style_2_element_font_style);
        $cf7_custom_style_2_element_font_weight = new QodeField("selectblanksimple", "cf7_custom_style_2_element_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_2_element_font_weight", $cf7_custom_style_2_element_font_weight);
        $cf7_custom_style_2_element_text_transform = new QodeField("selectblanksimple", "cf7_custom_style_2_element_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_2_element_text_transform", $cf7_custom_style_2_element_text_transform);
        $row3 = new QodeRow(true);
        $group4->addChild("row3", $row3);
			$cf7_custom_style_2_element_letter_spacing = new QodeField("textsimple","cf7_custom_style_2_element_letter_spacing","","字符间距（px）","This is some description");
        $row3->addChild("cf7_custom_style_2_element_letter_spacing", $cf7_custom_style_2_element_letter_spacing);
	$group5 = new QodeGroup("表单元素'填充","定义表单元素填充（文字输入字段、文字区域、选择）");
        $panel2->addChild("group5", $group5);
        $row1 = new QodeRow();
        $group5->addChild("row1", $row1);
			$cf7_custom_style_2_element_padding_top = new QodeField("textsimple","cf7_custom_style_2_element_padding_top","","上填充(px)","This is some description");
        $row1->addChild("cf7_custom_style_2_element_padding_top", $cf7_custom_style_2_element_padding_top);
			$cf7_custom_style_2_element_padding_right = new QodeField("textsimple","cf7_custom_style_2_element_padding_right","","右填充（px）","This is some description");
        $row1->addChild("cf7_custom_style_2_element_padding_right", $cf7_custom_style_2_element_padding_right);
			$cf7_custom_style_2_element_padding_bottom = new QodeField("textsimple","cf7_custom_style_2_element_padding_bottom","","下填充(px)","This is some description");
        $row1->addChild("cf7_custom_style_2_element_padding_bottom", $cf7_custom_style_2_element_padding_bottom);
			$cf7_custom_style_2_element_padding_left = new QodeField("textsimple","cf7_custom_style_2_element_padding_left","","左填充（px）","This is some description");
        $row1->addChild("cf7_custom_style_2_element_padding_left", $cf7_custom_style_2_element_padding_left);
	$group6 = new QodeGroup("表单元素'边距","定义表单元素边距（文字输入字段、文字区域、选择）");
        $panel2->addChild("group6", $group6);
        $row1 = new QodeRow();
        $group6->addChild("row1", $row1);
			$cf7_custom_style_2_element_margin_top = new QodeField("textsimple","cf7_custom_style_2_element_margin_top","","上边距 (px)","This is some description");
        $row1->addChild("cf7_custom_style_2_element_margin_top", $cf7_custom_style_2_element_margin_top);
			$cf7_custom_style_2_element_margin_bottom = new QodeField("textsimple","cf7_custom_style_2_element_margin_bottom","","下边距 (px)","This is some description");
        $row1->addChild("cf7_custom_style_2_element_margin_bottom", $cf7_custom_style_2_element_margin_bottom);

	$group7 = new QodeGroup("按钮背景","定义按钮背景风格");
        $panel2->addChild("group7", $group7);
        $row1 = new QodeRow();
        $group7->addChild("row1", $row1);
			$cf7_custom_style_2_button_background_color = new QodeField("colorsimple","cf7_custom_style_2_button_background_color","","背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_button_background_color", $cf7_custom_style_2_button_background_color);
			$cf7_custom_style_2_button_hover_background_color = new QodeField("colorsimple","cf7_custom_style_2_button_hover_background_color","","悬停背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_button_hover_background_color", $cf7_custom_style_2_button_hover_background_color);
			$cf7_custom_style_2_button_background_transparency = new QodeField("textsimple","cf7_custom_style_2_button_background_transparency","","背景透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_2_button_background_transparency", $cf7_custom_style_2_button_background_transparency);
	$group8 = new QodeGroup("按钮边框","定义按钮边框风格");
        $panel2->addChild("group8", $group8);
        $row1 = new QodeRow();
        $group8->addChild("row1", $row1);
			$cf7_custom_style_2_button_border_color = new QodeField("colorsimple","cf7_custom_style_2_button_border_color","","边框颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_button_border_color", $cf7_custom_style_2_button_border_color);
			$cf7_custom_style_2_button_hover_border_color = new QodeField("colorsimple","cf7_custom_style_2_button_hover_border_color","","边框悬停颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_button_hover_border_color", $cf7_custom_style_2_button_hover_border_color);
			$cf7_custom_style_2_button_border_transparency = new QodeField("textsimple","cf7_custom_style_2_button_border_transparency","","边框透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_2_button_border_transparency", $cf7_custom_style_2_button_border_transparency);
			$cf7_custom_style_2_button_border_width = new QodeField("textsimple","cf7_custom_style_2_button_border_width","","边框宽度（px）","This is some description");
        $row1->addChild("cf7_custom_style_2_button_border_width", $cf7_custom_style_2_button_border_width);
	$group9 = new QodeGroup("按钮边框半径","定义按钮边框半径");
        $panel2->addChild("group9", $group9);
        $row1 = new QodeRow();
        $group9->addChild("row1", $row1);
			$cf7_custom_style_2_button_border_radius_top_left = new QodeField("textsimple","cf7_custom_style_2_button_border_radius_top_left","","左上(px)","This is some description");
        $row1->addChild("cf7_custom_style_2_button_border_radius_top_left", $cf7_custom_style_2_button_border_radius_top_left);
			$cf7_custom_style_2_button_border_radius_top_right = new QodeField("textsimple","cf7_custom_style_2_button_border_radius_top_right","","右上(px)","This is some description");
        $row1->addChild("cf7_custom_style_2_button_border_radius_top_right", $cf7_custom_style_2_button_border_radius_top_right);
			$cf7_custom_style_2_button_border_radius_bottom_right = new QodeField("textsimple","cf7_custom_style_2_button_border_radius_bottom_right","","右下(px)","This is some description");
        $row1->addChild("cf7_custom_style_2_button_border_radius_bottom_right", $cf7_custom_style_2_button_border_radius_bottom_right);
			$cf7_custom_style_2_button_border_radius_bottom_left = new QodeField("textsimple","cf7_custom_style_2_button_border_radius_bottom_left","","左下(px)","This is some description");
        $row1->addChild("cf7_custom_style_2_button_border_radius_bottom_left", $cf7_custom_style_2_button_border_radius_bottom_left);

	$group10 = new QodeGroup("按钮文字风格","定义按钮文字风格");
        $panel2->addChild("group10", $group10);
        $row1 = new QodeRow();
        $group10->addChild("row1", $row1);
			$cf7_custom_style_2_button_font_color = new QodeField("colorsimple","cf7_custom_style_2_button_font_color","","文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_button_font_color", $cf7_custom_style_2_button_font_color);
			$cf7_custom_style_2_button_font_hover_color = new QodeField("colorsimple","cf7_custom_style_2_button_font_hover_color","","悬停文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_2_button_font_hover_color", $cf7_custom_style_2_button_font_hover_color);
			$cf7_custom_style_2_button_font_size = new QodeField("textsimple","cf7_custom_style_2_button_font_size","","字体大小（px）","This is some description");
        $row1->addChild("cf7_custom_style_2_button_font_size", $cf7_custom_style_2_button_font_size);
			$cf7_custom_style_2_button_font_family = new QodeField("fontsimple","cf7_custom_style_2_button_font_family","-1","字体系列","This is some description");
        $row1->addChild("cf7_custom_style_2_button_font_family", $cf7_custom_style_2_button_font_family);
        $row2 = new QodeRow(true);
        $group10->addChild("row2", $row2);
        $cf7_custom_style_2_button_font_style = new QodeField("selectblanksimple", "cf7_custom_style_2_button_font_style", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_2_button_font_style", $cf7_custom_style_2_button_font_style);
        $cf7_custom_style_2_button_font_weight = new QodeField("selectblanksimple", "cf7_custom_style_2_button_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_2_button_font_weight", $cf7_custom_style_2_button_font_weight);
        $cf7_custom_style_2_button_text_transform = new QodeField("selectblanksimple", "cf7_custom_style_2_button_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_2_button_text_transform", $cf7_custom_style_2_button_text_transform);
			$cf7_custom_style_2_button_letter_spacing = new QodeField("textsimple","cf7_custom_style_2_button_letter_spacing","","字符间距（px）","This is some description");
        $row2->addChild("cf7_custom_style_2_button_letter_spacing", $cf7_custom_style_2_button_letter_spacing);

		$cf7_custom_style_2_button_height = new QodeField("text","cf7_custom_style_2_button_height","","按钮高度 (px)","输入按钮高度像素",array(), array("col_width" => 3));
        $panel2->addChild("cf7_custom_style_2_button_height", $cf7_custom_style_2_button_height);

		$cf7_custom_style_2_button_padding = new QodeField("text","cf7_custom_style_2_button_padding","","按钮左/右填充（px）","输入按钮左右填充像素 ",array(), array("col_width" => 3));
        $panel2->addChild("cf7_custom_style_2_button_padding", $cf7_custom_style_2_button_padding);

		$cf7_custom_style_2_button_hover = new QodeField("select","cf7_custom_style_2_button_hover","","按钮悬停类型","选择按钮悬停类型",array(
			"" => "默认",
			"enlarge" => "放大"
		));
		$panel2->addChild("cf7_custom_style_2_button_hover",$cf7_custom_style_2_button_hover);

        qode_add_admin_field(
            array(
                'name'              => 'button_cf2_full_width',
                'type'              => 'yesno',
                'label'             => esc_html__('Enable Full Width Button', 'qode'),
                'description'       => esc_html__('Enabling this option will make the "Send" button take up the full width of the contact form.', 'qode'),
                'default_value'     => 'no',
                'parent'            => $panel2,
            )
        );

		$cf7_custom_style_2_textarea_height = new QodeField("text","cf7_custom_style_2_textarea_height","","文字区域高度 (px)","输入文字区域表单元素高度",array(),array("col_width" => 3));
        $panel2->addChild("cf7_custom_style_2_textarea_height", $cf7_custom_style_2_textarea_height);

$panel3 = new QodePanel("自定义风格3设置","contact_form_custom_style_3_panel");
        $contactform7page->addChild("panel3", $panel3);

	$group1 = new QodeGroup("表单元素'背景","定义表单元素背景风格（输入、文字区域、选择）");
        $panel3->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);
			$cf7_custom_style_3_element_background_color = new QodeField("colorsimple","cf7_custom_style_3_element_background_color","","背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_element_background_color", $cf7_custom_style_3_element_background_color);
			$cf7_custom_style_3_element_focus_background_color = new QodeField("colorsimple","cf7_custom_style_3_element_focus_background_color","","焦点背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_element_focus_background_color", $cf7_custom_style_3_element_focus_background_color);
			$cf7_custom_style_3_element_background_transparency = new QodeField("textsimple","cf7_custom_style_3_element_background_transparency","","背景透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_3_element_background_transparency", $cf7_custom_style_3_element_background_transparency);
	$group2 = new QodeGroup("表单元素'边框","定义表单元素边框风格（文字输入字段、文字区域、选择）");
        $panel3->addChild("group2", $group2);
        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);
			$cf7_custom_style_3_element_border_color = new QodeField("colorsimple","cf7_custom_style_3_element_border_color","","边框颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_element_border_color", $cf7_custom_style_3_element_border_color);
			$cf7_custom_style_3_element_focus_border_color = new QodeField("colorsimple","cf7_custom_style_3_element_focus_border_color","","焦点边框颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_element_focus_border_color", $cf7_custom_style_3_element_focus_border_color);
			$cf7_custom_style_3_border_transparency = new QodeField("textsimple","cf7_custom_style_3_border_transparency","","边框透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_3_border_transparency", $cf7_custom_style_3_border_transparency);
			$cf7_custom_style_3_element_border_width = new QodeField("textsimple","cf7_custom_style_3_element_border_width","","边框宽度（px）","This is some description");
        $row1->addChild("cf7_custom_style_3_element_border_width", $cf7_custom_style_3_element_border_width);
        $row2 = new QodeRow();
        $group2->addChild("row2", $row2);
        $cf7_custom_style_3_element_enable_border_bottom = new QodeField("yesnosimple", "cf7_custom_style_3_element_enable_border_bottom", "no", "仅启用下边框","This is some description");
        $row2->addChild("cf7_custom_style_3_element_enable_border_bottom", $cf7_custom_style_3_element_enable_border_bottom);
        $group3 = new QodeGroup("表单元素'边框半径", "定义表单元素边框半径（文字输入字段、文字区域、选择）");
        $panel3->addChild("group3", $group3);
        $row1 = new QodeRow();
        $group3->addChild("row1", $row1);
				$cf7_custom_style_3_element_border_radius_top_left = new QodeField("textsimple","cf7_custom_style_3_element_border_radius_top_left","","左上(px)","This is some description");
        $row1->addChild("cf7_custom_style_3_element_border_radius_top_left", $cf7_custom_style_3_element_border_radius_top_left);
				$cf7_custom_style_3_element_border_radius_top_right = new QodeField("textsimple","cf7_custom_style_3_element_border_radius_top_right","","右上(px)","This is some description");
        $row1->addChild("cf7_custom_style_3_element_border_radius_top_right", $cf7_custom_style_3_element_border_radius_top_right);
				$cf7_custom_style_3_element_border_radius_bottom_right = new QodeField("textsimple","cf7_custom_style_3_element_border_radius_bottom_right","","右下(px)","This is some description");
        $row1->addChild("cf7_custom_style_3_element_border_radius_bottom_right", $cf7_custom_style_3_element_border_radius_bottom_right);
				$cf7_custom_style_3_element_border_radius_bottom_left = new QodeField("textsimple","cf7_custom_style_3_element_border_radius_bottom_left","","左下(px)","This is some description");
        $row1->addChild("cf7_custom_style_3_element_border_radius_bottom_left", $cf7_custom_style_3_element_border_radius_bottom_left);

	$group4 = new QodeGroup("表单元素'文字风格","定义表单元素文字风格（文字输入字段、文字区域、选择）");
        $panel3->addChild("group4", $group4);
        $row1 = new QodeRow();
        $group4->addChild("row1", $row1);
			$cf7_custom_style_3_element_font_color = new QodeField("colorsimple","cf7_custom_style_3_element_font_color","","文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_element_font_color", $cf7_custom_style_3_element_font_color);
			$cf7_custom_style_3_element_font_focus_color = new QodeField("colorsimple","cf7_custom_style_3_element_font_focus_color","","焦点文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_element_font_focus_color", $cf7_custom_style_3_element_font_focus_color);
			$cf7_custom_style_3_element_font_size = new QodeField("textsimple","cf7_custom_style_3_element_font_size","","字体大小（px）","This is some description");
        $row1->addChild("cf7_custom_style_3_element_font_size", $cf7_custom_style_3_element_font_size);
			$cf7_custom_style_3_element_line_height = new QodeField("textsimple","cf7_custom_style_3_element_line_height","","行高（px）","This is some description");
        $row1->addChild("cf7_custom_style_3_element_line_height", $cf7_custom_style_3_element_line_height);
        $row2 = new QodeRow(true);
        $group4->addChild("row2", $row2);
			$cf7_custom_style_3_element_font_family = new QodeField("fontsimple","cf7_custom_style_3_element_font_family","-1","字体系列","This is some description");
        $row2->addChild("cf7_custom_style_3_element_font_family", $cf7_custom_style_3_element_font_family);
        $cf7_custom_style_3_element_font_style = new QodeField("selectblanksimple", "cf7_custom_style_3_element_font_style", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_3_element_font_style", $cf7_custom_style_3_element_font_style);
        $cf7_custom_style_3_element_font_weight = new QodeField("selectblanksimple", "cf7_custom_style_3_element_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_3_element_font_weight", $cf7_custom_style_3_element_font_weight);
        $cf7_custom_style_3_element_text_transform = new QodeField("selectblanksimple", "cf7_custom_style_3_element_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_3_element_text_transform", $cf7_custom_style_3_element_text_transform);
        $row3 = new QodeRow(true);
        $group4->addChild("row3", $row3);
			$cf7_custom_style_3_element_letter_spacing = new QodeField("textsimple","cf7_custom_style_3_element_letter_spacing","","字符间距（px）","This is some description");
        $row3->addChild("cf7_custom_style_3_element_letter_spacing", $cf7_custom_style_3_element_letter_spacing);
	$group5 = new QodeGroup("表单元素'填充","定义表单元素填充（文字输入字段、文字区域、选择）");
        $panel3->addChild("group5", $group5);
        $row1 = new QodeRow();
        $group5->addChild("row1", $row1);
			$cf7_custom_style_3_element_padding_top = new QodeField("textsimple","cf7_custom_style_3_element_padding_top","","上填充 (px)","This is some description");
        $row1->addChild("cf7_custom_style_3_element_padding_top", $cf7_custom_style_3_element_padding_top);
			$cf7_custom_style_3_element_padding_right = new QodeField("textsimple","cf7_custom_style_3_element_padding_right","","右填充（px）","This is some description");
        $row1->addChild("cf7_custom_style_3_element_padding_right", $cf7_custom_style_3_element_padding_right);
			$cf7_custom_style_3_element_padding_bottom = new QodeField("textsimple","cf7_custom_style_3_element_padding_bottom","","下填充 (px)","This is some description");
        $row1->addChild("cf7_custom_style_3_element_padding_bottom", $cf7_custom_style_3_element_padding_bottom);
			$cf7_custom_style_3_element_padding_left = new QodeField("textsimple","cf7_custom_style_3_element_padding_left","","左填充（px）","This is some description");
        $row1->addChild("cf7_custom_style_3_element_padding_left", $cf7_custom_style_3_element_padding_left);

	$group6 = new QodeGroup("表单元素'边距","定义表单元素边距（文字输入字段、文字区域、选择）");
        $panel3->addChild("group6", $group6);
        $row1 = new QodeRow();
        $group6->addChild("row1", $row1);
			$cf7_custom_style_3_element_margin_top = new QodeField("textsimple","cf7_custom_style_3_element_margin_top","","上边距 (px)","This is some description");
        $row1->addChild("cf7_custom_style_3_element_margin_top", $cf7_custom_style_3_element_margin_top);
			$cf7_custom_style_3_element_margin_bottom = new QodeField("textsimple","cf7_custom_style_3_element_margin_bottom","","下边距 (px)","This is some description");
        $row1->addChild("cf7_custom_style_3_element_margin_bottom", $cf7_custom_style_3_element_margin_bottom);

	$group7 = new QodeGroup("按钮背景","定义按钮背景风格");
        $panel3->addChild("group7", $group7);
        $row1 = new QodeRow();
        $group7->addChild("row1", $row1);
			$cf7_custom_style_3_button_background_color = new QodeField("colorsimple","cf7_custom_style_3_button_background_color","","背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_button_background_color", $cf7_custom_style_3_button_background_color);
			$cf7_custom_style_3_button_hover_background_color = new QodeField("colorsimple","cf7_custom_style_3_button_hover_background_color","","悬停背景颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_button_hover_background_color", $cf7_custom_style_3_button_hover_background_color);
			$cf7_custom_style_3_button_background_transparency = new QodeField("textsimple","cf7_custom_style_3_button_background_transparency","","背景透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_3_button_background_transparency", $cf7_custom_style_3_button_background_transparency);
	$group8 = new QodeGroup("按钮边框","定义按钮边框风格");
        $panel3->addChild("group8", $group8);
        $row1 = new QodeRow();
        $group8->addChild("row1", $row1);
			$cf7_custom_style_3_button_border_color = new QodeField("colorsimple","cf7_custom_style_3_button_border_color","","边框颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_button_border_color", $cf7_custom_style_3_button_border_color);
			$cf7_custom_style_3_button_hover_border_color = new QodeField("colorsimple","cf7_custom_style_3_button_hover_border_color","","边框悬停颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_button_hover_border_color", $cf7_custom_style_3_button_hover_border_color);
			$cf7_custom_style_3_button_border_transparency = new QodeField("textsimple","cf7_custom_style_3_button_border_transparency","","边框透明度（值：0-1）","This is some description");
        $row1->addChild("cf7_custom_style_3_button_border_transparency", $cf7_custom_style_3_button_border_transparency);
			$cf7_custom_style_3_button_border_width = new QodeField("textsimple","cf7_custom_style_3_button_border_width","","边框宽度（px）","This is some description");
        $row1->addChild("cf7_custom_style_3_button_border_width", $cf7_custom_style_3_button_border_width);
	$group9 = new QodeGroup("按钮边框半径","定义按钮边框半径");
        $panel3->addChild("group9", $group9);
        $row1 = new QodeRow();
        $group9->addChild("row1", $row1);
			$cf7_custom_style_3_button_border_radius_top_left = new QodeField("textsimple","cf7_custom_style_3_button_border_radius_top_left","","左上(px)","This is some description");
        $row1->addChild("cf7_custom_style_3_button_border_radius_top_left", $cf7_custom_style_3_button_border_radius_top_left);
			$cf7_custom_style_3_button_border_radius_top_right = new QodeField("textsimple","cf7_custom_style_3_button_border_radius_top_right","","右上(px)","This is some description");
        $row1->addChild("cf7_custom_style_3_button_border_radius_top_right", $cf7_custom_style_3_button_border_radius_top_right);
			$cf7_custom_style_3_button_border_radius_bottom_right = new QodeField("textsimple","cf7_custom_style_3_button_border_radius_bottom_right","","右下(px)","This is some description");
        $row1->addChild("cf7_custom_style_3_button_border_radius_bottom_right", $cf7_custom_style_3_button_border_radius_bottom_right);
			$cf7_custom_style_3_button_border_radius_bottom_left = new QodeField("textsimple","cf7_custom_style_3_button_border_radius_bottom_left","","左下(px)","This is some description");
        $row1->addChild("cf7_custom_style_3_button_border_radius_bottom_left", $cf7_custom_style_3_button_border_radius_bottom_left);
	$group10 = new QodeGroup("按钮文字风格","定义按钮文字风格");
        $panel3->addChild("group10", $group10);
        $row1 = new QodeRow();
        $group10->addChild("row1", $row1);
			$cf7_custom_style_3_button_font_color = new QodeField("colorsimple","cf7_custom_style_3_button_font_color","","文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_button_font_color", $cf7_custom_style_3_button_font_color);
			$cf7_custom_style_3_button_font_hover_color = new QodeField("colorsimple","cf7_custom_style_3_button_font_hover_color","","悬停文字颜色","This is some description");
        $row1->addChild("cf7_custom_style_3_button_font_hover_color", $cf7_custom_style_3_button_font_hover_color);
			$cf7_custom_style_3_button_font_size = new QodeField("textsimple","cf7_custom_style_3_button_font_size","","字体大小（px）","This is some description");
        $row1->addChild("cf7_custom_style_3_button_font_size", $cf7_custom_style_3_button_font_size);
			$cf7_custom_style_3_button_font_family = new QodeField("fontsimple","cf7_custom_style_3_button_font_family","-1","字体系列","This is some description");
        $row1->addChild("cf7_custom_style_3_button_font_family", $cf7_custom_style_3_button_font_family);
        $row2 = new QodeRow(true);
        $group10->addChild("row2", $row2);
        $cf7_custom_style_3_button_font_style = new QodeField("selectblanksimple", "cf7_custom_style_3_button_font_style", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_3_button_font_style", $cf7_custom_style_3_button_font_style);
        $cf7_custom_style_3_button_font_weight = new QodeField("selectblanksimple", "cf7_custom_style_3_button_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_3_button_font_weight", $cf7_custom_style_3_button_font_weight);
        $cf7_custom_style_3_button_text_transform = new QodeField("selectblanksimple", "cf7_custom_style_3_button_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_3_button_text_transform", $cf7_custom_style_3_button_text_transform);
			$cf7_custom_style_3_button_letter_spacing = new QodeField("textsimple","cf7_custom_style_3_button_letter_spacing","","字符间距（px）","This is some description");
        $row2->addChild("cf7_custom_style_3_button_letter_spacing", $cf7_custom_style_3_button_letter_spacing);

	$cf7_custom_style_3_button_height = new QodeField("text","cf7_custom_style_3_button_height","","按钮高度 (px)","输入按钮高度像素 ",array(), array("col_width" => 3));
        $panel3->addChild("cf7_custom_style_3_button_height", $cf7_custom_style_3_button_height);

	$cf7_custom_style_3_button_padding = new QodeField("text","cf7_custom_style_3_button_padding","","按钮左/右填充（px）","输入按钮左右填充像素 ",array(), array("col_width" => 3));
        $panel3->addChild("cf7_custom_style_3_button_padding", $cf7_custom_style_3_button_padding);

		$cf7_custom_style_3_button_hover = new QodeField("select","cf7_custom_style_3_button_hover","","按钮悬停类型","选择按钮悬停类型",array(
			"" => "默认",
			"enlarge" => "放大"
		));
		$panel3->addChild("cf7_custom_style_3_button_hover",$cf7_custom_style_3_button_hover);

        qode_add_admin_field(
            array(
                'name'              => 'button_cf3_full_width',
                'type'              => 'yesno',
                'label'             => esc_html__('Enable Full Width Button', 'qode'),
                'description'       => esc_html__('Enabling this option will make the "Send" button take up the full width of the contact form.', 'qode'),
                'default_value'     => 'no',
                'parent'            => $panel3,
            )
        );

	$cf7_custom_style_3_textarea_height = new QodeField("text","cf7_custom_style_3_textarea_height","","文字区域高度(px)","输入文字区域表单元素高度像素",array(),array("col_width" => 3));
        $panel3->addChild("cf7_custom_style_3_textarea_height", $cf7_custom_style_3_textarea_height);

    }
    add_action('qode_options_map','qode_contactform7_options_map',190);
}