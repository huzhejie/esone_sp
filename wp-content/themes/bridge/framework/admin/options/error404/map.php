<?php

if(!function_exists('qode_error_options_map')) {
    /**
     * Error options page
     */
    function qode_error_options_map()
    {

        $error404Page = new QodeAdminPage("_404", "404错误页面", "fa fa-times-circle-o");
        qode_framework()->qodeOptions->addAdminPage("error404Page", $error404Page);

        //404 Page Options

$panel1 = new QodePanel("404页面选项","page_error_options_panel");
        $error404Page->addChild("panel1", $panel1);

	$title_404 = new QodeField("text","404_title","","标题","输入404页面标题");
        $panel1->addChild("404_title", $title_404);

	$subtitle_404 = new QodeField("text","404_subtitle","","子标题","输入404页面子标题");
        $panel1->addChild("404_subtitle", $subtitle_404);

	$text_404 = new QodeField("text","404_text","","文字","输入404页面文字");
        $panel1->addChild("404_text", $text_404);

	$backlabel_404 = new QodeField("text","404_backlabel","","返回首页按钮标签",'输入"返回首页"按钮标签');
        $panel1->addChild("404_backlabel", $backlabel_404);
    }
    add_action('qode_options_map','qode_error_options_map',140);
}
