<?php

if(!function_exists('qode_contentbottom_options_map')) {
    /**
     * Content Bottom options page
     */
    function qode_contentbottom_options_map(){

        $contentbottomPage = new QodeAdminPage("_content_bottom", "内容底部", "fa fa-caret-square-o-down");
        qode_framework()->qodeOptions->addAdminPage("Content Bottom", $contentbottomPage);

        //Content Bottom Area

$panel1 = new QodePanel("内容底部区域","content_bottom_area_panel");
        $contentbottomPage->addChild("panel1", $panel1);

	$enable_content_bottom_area = new QodeField("yesno","enable_content_bottom_area","no","启用内容底部区域","此选项将在页面启用内容底部区域", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_content_bottom_area_container"));
        $panel1->addChild("enable_content_bottom_area", $enable_content_bottom_area);

        $enable_content_bottom_area_container = new QodeContainer("enable_content_bottom_area_container", "enable_content_bottom_area", "no");
        $panel1->addChild("enable_content_bottom_area_container", $enable_content_bottom_area_container);

        $content_botttom_custom_sidebars = qode_get_custom_sidebars();

			$content_bottom_sidebar_custom_display = new QodeField("selectblank","content_bottom_sidebar_custom_display","","显示侧边栏","选择要显示的内容底部侧边栏", $custom_sidebars);
        $enable_content_bottom_area_container->addChild("content_bottom_sidebar_custom_display", $content_bottom_sidebar_custom_display);

			$content_bottom_in_grid = new QodeField("yesno","content_bottom_in_grid","yes","在网格显示","启用此选项将在网格放置内容底部");
        $enable_content_bottom_area_container->addChild("content_bottom_in_grid", $content_bottom_in_grid);

			$content_bottom_background_color = new QodeField("color","content_bottom_background_color","","背景颜色","选择内容底部区域背景颜色");
        $enable_content_bottom_area_container->addChild("content_bottom_background_color", $content_bottom_background_color);
    }
    add_action('qode_options_map','qode_contentbottom_options_map',170);
}