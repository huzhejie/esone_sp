<?php
if(!function_exists('qode_logo_options_map')) {
    /**
     * Logo options page
     */
    function qode_logo_options_map(){

        $logoPage = new QodeAdminPage("_logo", "Logo", "fa fa-coffee");
        qode_framework()->qodeOptions->addAdminPage("logo", $logoPage);

        $panel1 = new QodePanel("Logo", "logo");
        $logoPage->addChild("panel1", $panel1);

	$logo_image = new QodeField("image","logo_image",QODE_ROOT."/img/logo.png","Logo图片 - 常规","选择要显示的默认LOGO图片 ");
        $panel1->addChild("logo_image", $logo_image);

	$logo_image_light = new QodeField("image","logo_image_light",QODE_ROOT."/img/logo_white.png","Logo图片 - 浅色",'选择“浅色”页眉皮肤要显示的LOGO图片');
        $panel1->addChild("logo_image_light", $logo_image_light);

	$logo_image_dark = new QodeField("image","logo_image_dark",QODE_ROOT."/img/logo_black.png","Logo图片 - 深色Dark",'选择“深色”页眉皮肤要显示的LOGO图片');
        $panel1->addChild("logo_image_dark", $logo_image_dark);

	$logo_image_sticky = new QodeField("image","logo_image_sticky",QODE_ROOT."/img/logo_black.png","Logo图片 - 粘性页眉",'选择“粘性”页眉类型要显示的LOGO图片');
        $panel1->addChild("logo_image_sticky", $logo_image_sticky);

	$logo_image_fixed_hidden = new QodeField("image","logo_image_fixed_hidden","","Logo图片 - 固定高级页眉",'选择“固定高级”页眉类型要显示的LOGO图片');
        $panel1->addChild("logo_image_fixed_hidden", $logo_image_fixed_hidden);

	$logo_image_mobile = new QodeField("image","logo_image_mobile","","Logo图片 - 移动页眉",'选择“移动”页眉类型要显示的LOGO图片');
        $panel1->addChild("logo_image_mobile", $logo_image_mobile);

	$vertical_logo_bottom = new QodeField("image","vertical_logo_bottom","","Logo图片 - 侧菜单区域底部", '为“初始隐藏”侧菜单区域类型在侧菜单区域选择要显示的LOGO图片');
        $panel1->addChild("vertical_logo_bottom", $vertical_logo_bottom);

	$logo_mobile_header_height = new QodeField("text","logo_mobile_header_height","","移动页眉Logo高度（px）","定义移动页眉logo高度");
        $panel1->addChild("logo_mobile_header_height", $logo_mobile_header_height);

	$logo_mobile_height = new QodeField("text","logo_mobile_height","","移动设备Logo高度","定义移动设备LOGO高度");
        $panel1->addChild("logo_mobile_height", $logo_mobile_height);
    }

    add_action('qode_options_map','qode_logo_options_map',20);
}