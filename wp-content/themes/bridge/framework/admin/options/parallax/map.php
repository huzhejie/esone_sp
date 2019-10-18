<?php
if(!function_exists('qode_parallax_options_map')) {
    /**
     * Parallax options page
     */
    function qode_parallax_options_map()
    {

        $parallaxPage = new QodeAdminPage("_parallax", "视差", "fa fa-arrows-v");
        qode_framework()->qodeOptions->addAdminPage("Parallax", $parallaxPage);

        //Parallax Settings

$panel1 = new QodePanel("视差设置","parallax_settings_panel");
        $parallaxPage->addChild("panel1", $panel1);

	$parallax_onoff = new QodeField("onoff","parallax_onoff","on","在触摸设备视差","启用此选项将允许在触摸设备视差");
        $panel1->addChild("parallax_onoff", $parallax_onoff);

	$parallax_minheight = new QodeField("text","parallax_minheight","400","视差最小高度 (px)","设置在小显示器视差图片最小高度 (手机、平板,等.)");
        $panel1->addChild("parallax_minheight", $parallax_minheight);
    }
    add_action('qode_options_map','qode_parallax_options_map',160);
}