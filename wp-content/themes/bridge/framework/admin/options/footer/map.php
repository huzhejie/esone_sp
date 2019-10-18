<?php

if(!function_exists('qode_footer_options_map')) {
    /**
     * Footer options page
     */
    function qode_footer_options_map()
    {

        $footerPage = new QodeAdminPage("_footer", "页脚", "fa fa-sort-amount-asc");
        qode_framework()->qodeOptions->addAdminPage("footer", $footerPage);


$panel10 = new QodePanel("页脚","footer_panel");
        $footerPage->addChild("panel10", $panel10);
$uncovering_footer = new QodeField("yesno","uncovering_footer","no","不包含页脚","启用此选项将使页脚滚动时逐渐出现");
        $panel10->addChild("uncovering_footer", $uncovering_footer);

$footer_main_image_background = new QodeField("image","footer_main_image_background","","页眉背景颜色","选择页脚背景颜色");
        $panel10->addChild("footer_main_image_background", $footer_main_image_background);
$show_footer_top = new QodeField("yesno","show_footer_top","yes","显示页脚顶部","启用此选项将显示页脚顶部区域", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_show_footer_top_container"));
        $panel10->addChild("show_footer_top", $show_footer_top);
        $show_footer_top_container = new QodeContainer("show_footer_top_container", "show_footer_top", "no");
        $panel10->addChild("show_footer_top_container", $show_footer_top_container);
$footer_in_grid = new QodeField("yesno","footer_in_grid","yes","网格页脚","启用此选项将放置页眉顶部内容到网格");
        $show_footer_top_container->addChild("footer_in_grid", $footer_in_grid);
$footer_top_columns = new QodeField("select","footer_top_columns","4","页脚顶部列","选择页脚顶部区域列数", array( "1" => "1",
            "2" => "2",
            "3" => "3",
            "5" => "3(25%+25%+50%)",
            "6" => "3(50%+25%+25%)",
            "4" => "4"
        ), array(
            "dependence" => true,
            "hide" => array(
                "1" => "#qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container, #qodef_footer_col4_alignment_container",
                "2" => "#qodef_footer_col3_alignment_container, #qodef_footer_col4_alignment_container",
                "3" => "#qodef_footer_col4_alignment_container",
                "5" => "#qodef_footer_col4_alignment_container",
                "6" => "#qodef_footer_col4_alignment_container",
                "4" => ""
            ),
            "show" => array(
                "1" => "#qodef_footer_col1_alignment_container",
                "2" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container",
                "3" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container",
                "5" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container",
                "6" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container",
                "4" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container, #qodef_footer_col4_alignment_container",
            )
        ));
        $show_footer_top_container->addChild("footer_top_columns", $footer_top_columns);

        $footer_col1_alignment_container = new QodeContainer("footer_col1_alignment_container", "footer_top_columns", "");
        $show_footer_top_container->addChild("footer_col1_alignment_container", $footer_col1_alignment_container);

$footer_col1_alignment = new QodeField("selectblank","footer_col1_alignment","","页脚顶部第一列对齐方式","选择第一列对齐方式",array(
	"left" => "左",
	"center" => "中",
	"right" => "右"
        ));
        $footer_col1_alignment_container->addChild("footer_col1_alignment", $footer_col1_alignment);

        $footer_col2_alignment_container = new QodeContainer("footer_col2_alignment_container", "footer_top_columns", "", array("1"));
        $show_footer_top_container->addChild("footer_col2_alignment_container", $footer_col2_alignment_container);

$footer_col2_alignment = new QodeField("selectblank","footer_col2_alignment","","页脚顶部第二列对齐方式","选择第二列对齐方式",array(
	"left" => "左",
	"center" => "中",
	"right" => "右"
        ));
        $footer_col2_alignment_container->addChild("footer_col2_alignment", $footer_col2_alignment);

        $footer_col3_alignment_container = new QodeContainer("footer_col3_alignment_container", "footer_top_columns", "", array("1", "2"));
        $show_footer_top_container->addChild("footer_col3_alignment_container", $footer_col3_alignment_container);

$footer_col3_alignment = new QodeField("selectblank","footer_col3_alignment","","页脚顶部第三列对齐方式","选择第三列对齐方式",array(
	"left" => "左",
	"center" => "中",
	"right" => "右"
        ));
        $footer_col3_alignment_container->addChild("footer_col3_alignment", $footer_col3_alignment);

        $footer_col4_alignment_container = new QodeContainer("footer_col4_alignment_container", "footer_top_columns", "", array("1", "2", "3", "5", "6"));
        $show_footer_top_container->addChild("footer_col4_alignment_container", $footer_col4_alignment_container);

$footer_col4_alignment = new QodeField("selectblank","footer_col4_alignment","","页脚顶部第四列对齐方式","选择第四列对齐方式",array(
	"left" => "左",
	"center" => "中",
	"right" => "右"
        ));
        $footer_col4_alignment_container->addChild("footer_col4_alignment", $footer_col4_alignment);

        $footer_top_responsive = new QodeField("yesno", "footer_top_responsive", "no", "设置页脚列在平板竖向一个接一个", "启用此选项将设置页脚列在平板竖向视图一个接一个");
        $show_footer_top_container->addChild("footer_top_responsive", $footer_top_responsive);

        $group1 = new QodeGroup("页脚顶部颜色", "配置页脚顶部区域颜色");
        $show_footer_top_container->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);
$footer_top_background_color = new QodeField("colorsimple","footer_top_background_color","","背景颜色","This is some description");
        $row1->addChild("footer_top_background_color", $footer_top_background_color);
$footer_top_title_color = new QodeField("colorsimple","footer_top_title_color","","标题颜色","This is some description");
        $row1->addChild("footer_top_title_color", $footer_top_title_color);
$footer_top_text_color = new QodeField("colorsimple","footer_top_text_color","","文字颜色","This is some description");
        $row1->addChild("footer_top_text_color", $footer_top_text_color);
        $row2 = new QodeRow(true);
        $group1->addChild("row2", $row2);
$footer_link_color = new QodeField("colorsimple","footer_link_color","","链接颜色","This is some description");
        $row2->addChild("footer_link_color", $footer_link_color);
$footer_link_hover_color = new QodeField("colorsimple","footer_link_hover_color","","链接悬停颜色","This is some description");
        $row2->addChild("footer_link_hover_color", $footer_link_hover_color);
$footer_image_background = new QodeField("image","footer_image_background","","页脚顶部背景图片","选择页脚顶部背景图片");
        $show_footer_top_container->addChild("footer_image_background", $footer_image_background);

        //Footer top border section
$footer_top_border_group = new QodeGroup('页脚上边框', '设置页脚上边框');
        $show_footer_top_container->addChild('footer_top_border_group', $footer_top_border_group);

        $row_ft_border = new QodeRow(true);
        $footer_top_border_group->addChild('row_ft_border', $row_ft_border);

$footer_top_border_color = new QodeField('colorsimple', 'footer_top_border_color', '', '上边框颜色');
        $row_ft_border->addChild('footer_top_border_color', $footer_top_border_color);

$footer_top_border_width = new QodeField('textsimple', 'footer_top_border_width', '', '上边框宽度（px）');
        $row_ft_border->addChild('footer_top_border_width', $footer_top_border_width);

$footer_top_border_in_grid = new QodeField('yesnosimple', 'footer_top_border_in_grid', 'no', '网格上边框');
        $row_ft_border->addChild('footer_top_border_in_grid', $footer_top_border_in_grid);

$footer_top_padding_group = new QodeGroup('页脚上填充', '设置页脚顶部填充');
        $show_footer_top_container->addChild('footer_top_padding_group', $footer_top_padding_group);

        $footer_top_padding_row = new QodeRow(true);
        $footer_top_padding_group->addChild('footer_top_padding_row', $footer_top_padding_row);

$footer_top_padding_top = new QodeField('textsimple', 'footer_top_padding_top', '', '上填充 (px)');
        $footer_top_padding_row->addChild('footer_top_padding_top', $footer_top_padding_top);

$footer_top_padding_right = new QodeField('textsimple', 'footer_top_padding_right', '', '右填充 (px)');
        $footer_top_padding_row->addChild('footer_top_padding_right', $footer_top_padding_right);

$footer_top_padding_bottom = new QodeField('textsimple', 'footer_top_padding_bottom', '', '下填充 (px)');
        $footer_top_padding_row->addChild('footer_top_padding_bottom', $footer_top_padding_bottom);

$footer_top_padding_left = new QodeField('textsimple', 'footer_top_padding_left', '', '左填充 (px)');
        $footer_top_padding_row->addChild('footer_top_padding_left', $footer_top_padding_left);


        //Footer angled sections
$footer_angled_section = new QodeField("yesno","footer_angled_section","no","启用角度页脚","启用此选项将在页脚背景显示角形", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_footer_angled_section_holder"));
        $show_footer_top_container->addChild("footer_angled_section", $footer_angled_section);

        $footer_angled_section_holder = new QodeContainer("footer_angled_section_holder", "footer_angled_section", "no");
        $show_footer_top_container->addChild("footer_angled_section_holder", $footer_angled_section_holder);

$footer_angled_section_direction = new QodeField("select","footer_angled_section_direction","","角形方向","选择页脚角形方向", array(
	"from_left_to_right" => "从左到右",
	"from_right_to_left" => "从右到左"
        ));
        $footer_angled_section_holder->addChild("footer_angled_section_direction", $footer_angled_section_direction);

$footer_angled_section_background_color = new QodeField("color","footer_angled_section_background_color","","背景颜色","选择角形背景颜色");
        $footer_angled_section_holder->addChild("footer_angled_section_background_color", $footer_angled_section_background_color);


$footer_text = new QodeField("yesno","footer_text","yes","显示页脚底部","启用此选项将显示页脚底部区域", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_footer_text_container"));
        $panel10->addChild("footer_text", $footer_text);
        $footer_text_container = new QodeContainer("footer_text_container", "footer_text", "no");
        $panel10->addChild("footer_text_container", $footer_text_container);

$footer_bottom_in_grid = new QodeField("yesno","footer_bottom_in_grid","no","网格页脚底部","启用此选项将在网格放置页脚底部内容");
        $footer_text_container->addChild("footer_bottom_in_grid", $footer_bottom_in_grid);

$footer_bottom_columns = new QodeField("select","footer_bottom_columns","1","页脚底部列","选择页脚底部区域列数", array( "1" => "1",
            "2" => "2",
            "3" => "3"
        ));
        $footer_text_container->addChild("footer_bottom_columns", $footer_bottom_columns);

$group2 = new QodeGroup("页脚底部颜色","配置页脚底部区域颜色");
        $footer_text_container->addChild("group2", $group2);
        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);
$footer_bottom_background_color = new QodeField("colorsimple","footer_bottom_background_color","","背景颜色","This is some description");
        $row1->addChild("footer_bottom_background_color", $footer_bottom_background_color);
$footer_bottom_text_color = new QodeField("colorsimple","footer_bottom_text_color","","文字颜色","This is some description");
        $row1->addChild("footer_bottom_text_color", $footer_bottom_text_color);
$footer_bottom_link_hover_color = new QodeField("colorsimple","footer_bottom_link_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("footer_bottom_link_hover_color", $footer_bottom_link_hover_color);

$footer_bottom_border_group = new QodeGroup('页脚底部边框', '设置页脚底部部分边框');
        $footer_text_container->addChild('footer_bottom_border_group', $footer_bottom_border_group);
        $footer_bottom_border_row = new QodeRow(true);
        $footer_bottom_border_group->addChild('footer_bottom_border_row', $footer_bottom_border_row);

$footer_bottom_border_color = new QodeField('colorsimple', 'footer_bottom_border_color', '', '上边框颜色');
        $footer_bottom_border_row->addChild('footer_bottom_border_color', $footer_bottom_border_color);

$footer_bottom_border_width = new QodeField('textsimple', 'footer_bottom_border_width', '', '上边框宽度（px）');
        $footer_bottom_border_row->addChild('footer_bottom_border_width', $footer_bottom_border_width);

$footer_bottom_border_in_grid = new QodeField('yesnosimple', 'footer_bottom_border_in_grid', 'no', '网格上边框');
        $footer_bottom_border_row->addChild('footer_bottom_border_in_grid', $footer_bottom_border_in_grid);


$footer_bottom_padding_group = new QodeGroup('页脚下填充', '设置页脚下填充');
        $footer_text_container->addChild('footer_bottom_padding_group', $footer_bottom_padding_group);
        $footer_bottom_padding_row = new QodeRow(true);
        $footer_bottom_padding_group->addChild('footer_bottom_padding_row', $footer_bottom_padding_row);

$footer_bottom_padding_top = new QodeField('textsimple', 'footer_bottom_padding_top', '', '上填充（px）');
        $footer_bottom_padding_row->addChild('footer_bottom_padding_top', $footer_bottom_padding_top);

$footer_bottom_padding_right = new QodeField('textsimple', 'footer_bottom_padding_right', '', '右填充（px）');
        $footer_bottom_padding_row->addChild('footer_bottom_padding_right', $footer_bottom_padding_right);

$footer_bottom_padding_bottom = new QodeField('textsimple', 'footer_bottom_padding_bottom', '', '下填充（px）');
        $footer_bottom_padding_row->addChild('footer_bottom_padding_bottom', $footer_bottom_padding_bottom);

$footer_bottom_padding_left = new QodeField('textsimple', 'footer_bottom_padding_left', '', '左填充（px）');
        $footer_bottom_padding_row->addChild('footer_bottom_padding_left', $footer_bottom_padding_left);


$footer_bottom_image_background = new QodeField("image","footer_bottom_image_background","","页脚底部背景图片","选择页脚底部背景图片");
        $footer_text_container->addChild("footer_bottom_image_background", $footer_bottom_image_background);

$footer_custom_menu_spacing = new QodeField("text","footer_custom_menu_spacing","","自定义菜单项目空间（px）","输入自定义菜单小工具项目之间间距。此选项仅当在页脚底部设置自定义菜单时应用。",array(),array("col_width" => 3));
        $footer_text_container->addChild("footer_custom_menu_spacing", $footer_custom_menu_spacing);

    }
    add_action('qode_options_map','qode_footer_options_map',40);
}