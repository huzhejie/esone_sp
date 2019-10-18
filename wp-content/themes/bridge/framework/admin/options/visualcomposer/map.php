<?php

if(!function_exists('qode_visualcomposer_options_map')) {
    /**
     * Visual Composer options page
     */
    function qode_visualcomposer_options_map()
    {

$visualComposerPage = new QodeAdminPage('_visual_composer', '可视化编辑器', 'fa fa-ellipsis-h');
        qode_framework()->qodeOptions->addAdminPage('visualComposerPage', $visualComposerPage);

$panel1 = new QodePanel('可视化编辑器网格元素', 'vc_grid_elements');
        $visualComposerPage->addChild('panel1', $panel1);

	$enable_grid_elements = new QodeField('yesno', 'enable_grid_elements', 'no', '启用网格元素', '启用此选项将允许使用可视化编辑器网格元素。注意：启用网格元素将禁用页面过渡。', array(), array(
            'dependence' => 'true',
            'dependence_hide_on_yes' => '',
            'dependence_show_on_yes' => '#qodef_vc_grid_elements_style'
        ));
        $panel1->addChild('enable_grid_elements', $enable_grid_elements);

$panel2 = new QodePanel('可视化编辑器网格元素风格', 'vc_grid_elements_style', 'enable_grid_elements', 'no');
        $visualComposerPage->addChild('panel2', $panel2);

	$group1 = new QodeGroup('按钮', '定义网格按钮风格');
        $panel2->addChild('group1', $group1);

        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);

			$vc_grid_button_title_color = new QodeField('colorsimple','vc_grid_button_title_color','','文字颜色','');
        $row1->addChild('vc_grid_button_title_color', $vc_grid_button_title_color);
			$vc_grid_button_title_hovercolor = new QodeField('colorsimple','vc_grid_button_title_hovercolor','','悬停颜色','');
        $row1->addChild('vc_grid_button_title_hovercolor', $vc_grid_button_title_hovercolor);

        $row2 = new QodeRow(true);
        $group1->addChild('row2', $row2);

			$vc_grid_button_title_google_fonts = new QodeField('fontsimple','vc_grid_button_title_google_fonts','-1','字体系列','');
        $row2->addChild('vc_grid_button_title_google_fonts', $vc_grid_button_title_google_fonts);
			$vc_grid_button_title_fontsize = new QodeField('textsimple','vc_grid_button_title_fontsize','','字体大小 (px)','');
        $row2->addChild('vc_grid_button_title_fontsize', $vc_grid_button_title_fontsize);
			$vc_grid_button_title_lineheight = new QodeField('textsimple','vc_grid_button_title_lineheight','','行高（px）','');
        $row2->addChild('vc_grid_button_title_lineheight', $vc_grid_button_title_lineheight);

        $row3 = new QodeRow(true);
        $group1->addChild('row3', $row3);

        $vc_grid_button_title_fontstyle = new QodeField('selectblanksimple', 'vc_grid_button_title_fontstyle', '', '字体风格', '', qode_get_font_style_array());
        $row3->addChild('vc_grid_button_title_fontstyle', $vc_grid_button_title_fontstyle);
        $vc_grid_button_title_fontweight = new QodeField('selectblanksimple', 'vc_grid_button_title_fontweight', '', '字体粗细', '', qode_get_font_weight_array());
        $row3->addChild('vc_grid_button_title_fontweight', $vc_grid_button_title_fontweight);
        $vc_grid_button_title_letter_spacing = new QodeField('textsimple', 'vc_grid_button_title_letter_spacing', '', '字符间距 (px)', '');
        $row3->addChild('vc_grid_button_title_letter_spacing', $vc_grid_button_title_letter_spacing);

        $row4 = new QodeRow(true);
        $group1->addChild('row4', $row4);

			$vc_grid_button_backgroundcolor = new QodeField('colorsimple','vc_grid_button_backgroundcolor','','背景颜色','');
        $row4->addChild('vc_grid_button_backgroundcolor', $vc_grid_button_backgroundcolor);
			$vc_grid_button_backgroundcolor_hover = new QodeField('colorsimple','vc_grid_button_backgroundcolor_hover','','悬停背景颜色','');
        $row4->addChild('vc_grid_button_backgroundcolor_hover', $vc_grid_button_backgroundcolor_hover);
			$vc_grid_button_border_color = new QodeField('colorsimple','vc_grid_button_border_color','','边框颜色','');
        $row4->addChild('vc_grid_button_border_color', $vc_grid_button_border_color);
			$vc_grid_button_border_hover_color = new QodeField('colorsimple','vc_grid_button_border_hover_color','','边框悬停颜色','');
        $row4->addChild('vc_grid_button_border_hover_color', $vc_grid_button_border_hover_color);

        $row5 = new QodeRow(true);
        $group1->addChild('row5', $row5);

			$vc_grid_button_border_width = new QodeField('textsimple','vc_grid_button_border_width','','边框宽度（px）','This is some description');
        $row5->addChild('vc_grid_button_border_width', $vc_grid_button_border_width);
			$vc_grid_button_border_radius = new QodeField('textsimple','vc_grid_button_border_radius','','边框半径（px）','This is some description');
        $row5->addChild('vc_grid_button_border_radius', $vc_grid_button_border_radius);


	$group2 = new QodeGroup('加载更多按钮', '定义网格加载更多按钮风格');
        $panel2->addChild('group2', $group2);

        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);

			$vc_grid_load_more_button_title_color = new QodeField('colorsimple','vc_grid_load_more_button_title_color','','文字颜色','');
        $row1->addChild('vc_grid_load_more_button_title_color', $vc_grid_load_more_button_title_color);
			$vc_grid_load_more_button_title_hovercolor = new QodeField('colorsimple','vc_grid_load_more_button_title_hovercolor','','悬停颜色','');
        $row1->addChild('vc_grid_load_more_button_title_hovercolor', $vc_grid_load_more_button_title_hovercolor);

        $row2 = new QodeRow(true);
        $group2->addChild('row2', $row2);

			$vc_grid_load_more_button_title_google_fonts = new QodeField('fontsimple','vc_grid_load_more_button_title_google_fonts','-1','字体系列','');
        $row2->addChild('vc_grid_load_more_button_title_google_fonts', $vc_grid_load_more_button_title_google_fonts);
			$vc_grid_load_more_button_title_fontsize = new QodeField('textsimple','vc_grid_load_more_button_title_fontsize','','字体大小 (px)','');
        $row2->addChild('vc_grid_load_more_button_title_fontsize', $vc_grid_load_more_button_title_fontsize);
			$vc_grid_load_more_button_title_lineheight = new QodeField('textsimple','vc_grid_load_more_button_title_lineheight','','行高（px）','');
        $row2->addChild('vc_grid_load_more_button_title_lineheight', $vc_grid_load_more_button_title_lineheight);

        $row3 = new QodeRow(true);
        $group2->addChild('row3', $row3);

        $vc_grid_load_more_button_title_fontstyle = new QodeField('selectblanksimple', 'vc_grid_load_more_button_title_fontstyle', '', '字体风格', '', qode_get_font_style_array());
        $row3->addChild('vc_grid_load_more_button_title_fontstyle', $vc_grid_load_more_button_title_fontstyle);
        $vc_grid_load_more_button_title_fontweight = new QodeField('selectblanksimple', 'vc_grid_load_more_button_title_fontweight', '', '字体粗细', '', qode_get_font_weight_array());
        $row3->addChild('vc_grid_load_more_button_title_fontweight', $vc_grid_load_more_button_title_fontweight);
			$vc_grid_load_more_button_title_letter_spacing = new QodeField('textsimple','vc_grid_load_more_button_title_letter_spacing','','字符间距（px）','');
        $row3->addChild('vc_grid_load_more_button_title_letter_spacing', $vc_grid_load_more_button_title_letter_spacing);

        $row4 = new QodeRow(true);
        $group2->addChild('row4', $row4);

			$vc_grid_load_more_button_backgroundcolor = new QodeField('colorsimple','vc_grid_load_more_button_backgroundcolor','','背景颜色','');
        $row4->addChild('vc_grid_load_more_button_backgroundcolor', $vc_grid_load_more_button_backgroundcolor);
			$vc_grid_load_more_button_backgroundcolor_hover = new QodeField('colorsimple','vc_grid_load_more_button_backgroundcolor_hover','','悬停背景颜色','');
        $row4->addChild('vc_grid_load_more_button_backgroundcolor_hover', $vc_grid_load_more_button_backgroundcolor_hover);
			$vc_grid_load_more_button_border_color = new QodeField('colorsimple','vc_grid_load_more_button_border_color','','边框颜色','');
        $row4->addChild('vc_grid_load_more_button_border_color', $vc_grid_load_more_button_border_color);
			$vc_grid_load_more_button_border_hover_color = new QodeField('colorsimple','vc_grid_load_more_button_border_hover_color','','边框悬停颜色','');
        $row4->addChild('vc_grid_load_more_button_border_hover_color', $vc_grid_load_more_button_border_hover_color);

        $row5 = new QodeRow(true);
        $group2->addChild('row5', $row5);

			$vc_grid_load_more_button_border_width = new QodeField('textsimple','vc_grid_load_more_button_border_width','','边框宽度（px）','This is some description');
        $row5->addChild('vc_grid_load_more_button_border_width', $vc_grid_load_more_button_border_width);
			$vc_grid_load_more_button_border_radius = new QodeField('textsimple','vc_grid_load_more_button_border_radius','','边框半径（px）','This is some description');
        $row5->addChild('vc_grid_load_more_button_border_radius', $vc_grid_load_more_button_border_radius);

	$group3 = new QodeGroup('分页', '定义网格分页风格');
        $panel2->addChild('group3', $group3);

        $row1 = new QodeRow();
        $group3->addChild('row1', $row1);

			$vc_grid_pagination_color = new QodeField('colorsimple', 'vc_grid_pagination_color', '', '颜色', '');
        $row1->addChild('vc_grid_pagination_color', $vc_grid_pagination_color);

			$vc_grid_pagination_hover_color = new QodeField('colorsimple', 'vc_grid_pagination_hover_color', '', '悬停颜色', '');
        $row1->addChild('vc_grid_pagination_hover_color', $vc_grid_pagination_hover_color);

			$vc_grid_pagination_background_color = new QodeField('colorsimple', 'vc_grid_pagination_background_color', '', '背景颜色', '');
        $row1->addChild('vc_grid_pagination_background_color', $vc_grid_pagination_background_color);

			$vc_grid_pagination_background_hover_color = new QodeField('colorsimple', 'vc_grid_pagination_background_hover_color', '', '背景悬停颜色', '');
        $row1->addChild('vc_grid_pagination_background_hover_color', $vc_grid_pagination_background_hover_color);

        $row2 = new QodeRow(true);
        $group3->addChild('row2', $row2);

			$vc_grid_pagination_border_color = new QodeField('colorsimple', 'vc_grid_pagination_border_color', '', '边框颜色', '');
        $row2->addChild('vc_grid_pagination_border_color', $vc_grid_pagination_border_color);

			$vc_grid_pagination_border_hover_color = new QodeField('colorsimple', 'vc_grid_pagination_border_hover_color', '', '边框悬停颜色', '');
        $row2->addChild('vc_grid_pagination_border_hover_color', $vc_grid_pagination_border_hover_color);

	$group4 = new QodeGroup('箭头', '定义网格箭头风格');
        $panel2->addChild('group4', $group4);

        $row1 = new QodeRow();
        $group4->addChild('row1', $row1);

			$vc_grid_arrows_color = new QodeField('colorsimple', 'vc_grid_arrows_color', '', '颜色', '');
        $row1->addChild('vc_grid_arrows_color', $vc_grid_arrows_color);

    }
    add_action('qode_options_map','qode_visualcomposer_options_map',180);
}