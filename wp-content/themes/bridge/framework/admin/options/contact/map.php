<?php
if(!function_exists('qode_contact_options_map')) {
    /**
     * Contact options page
     */
    function qode_contact_options_map(){

$contactPage = new QodeAdminPage("_contact", "联系页", "fa fa-envelope-o");
        qode_framework()->qodeOptions->addAdminPage("联系页", $contactPage);

        //Contact Form

$panel1 = new QodePanel("联系页","contact_page_panel");
        $contactPage->addChild("panel1", $panel1);

	$enable_google_map = new QodeField("yesno","enable_google_map","no","启用谷歌地图","启用此选项将在联系页显示谷歌地图", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_google_map_settings_panel"));
        $panel1->addChild("enable_google_map", $enable_google_map);

	$section_between_map_form = new QodeField("yesno","section_between_map_form","yes","显示上层部分","启用此选项将显示地图和联系表之间的部分", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_upper_section_settings_panel"));
        $panel1->addChild("section_between_map_form", $section_between_map_form);

	$enable_contact_form = new QodeField("yesno","enable_contact_form","no","启用联系表","此选项将在联系页显示联系表", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_contact_form_settings_panel"));
        $panel1->addChild("enable_contact_form", $enable_contact_form);

        //Google Map Settings

$panel3 = new QodePanel("谷歌地图设置","google_map_settings_panel","enable_google_map","no");
        $contactPage->addChild("panel3", $panel3);

	$google_maps_address = new QodeField("text","google_maps_address","","谷歌地图地址",'输入在谷歌地图地址 (示例："中国河南郑州新郑');
        $panel3->addChild("google_maps_address", $google_maps_address);

	$google_maps_address2 = new QodeField("text","google_maps_address2","","谷歌地图地址2","输入在谷歌地图上显示的其它地址");
        $panel3->addChild("google_maps_address2", $google_maps_address2);

	$google_maps_address3 = new QodeField("text","google_maps_address3","","谷歌地图地址3","输入在谷歌地图上显示的其它地址");
        $panel3->addChild("google_maps_address3", $google_maps_address3);

	$google_maps_address4 = new QodeField("text","google_maps_address4","","谷歌地图地址4","输入在谷歌地图上显示的其它地址");
        $panel3->addChild("google_maps_address4", $google_maps_address4);

	$google_maps_address5 = new QodeField("text","google_maps_address5","","谷歌地图地址5","输入在谷歌地图上显示的其它地址");
        $panel3->addChild("google_maps_address5", $google_maps_address5);

	$google_maps_pin_image = new QodeField("image","google_maps_pin_image",QODE_ROOT."/img/pin.png","钉图片","选择要在谷歌地图使用的钉图片");
        $panel3->addChild("google_maps_pin_image", $google_maps_pin_image);

	$google_maps_height = new QodeField("text","google_maps_height","750","地图高度（px）","输入谷歌地图高度像素");
        $panel3->addChild("google_maps_height", $google_maps_height);

	$google_maps_zoom = new QodeField("range","google_maps_zoom","12","地图缩放","输入谷歌地图缩放变焦(0 = 全球, 19 = 单个建筑)", array(), array( "range_min" => "3",
            "range_max" => "19",
            "range_step" => "1",
            "range_decimals" => "0"
        ));
        $panel3->addChild("google_maps_zoom", $google_maps_zoom);

	$google_maps_scroll_wheel = new QodeField("yesno","google_maps_scroll_wheel","no","鼠标滚轮缩放地图","启用这个选项将允许用户使用鼠标滚轮来放大地图");
        $panel3->addChild("google_maps_scroll_wheel", $google_maps_scroll_wheel);

	$google_maps_style = new QodeField("yesno","google_maps_style","yes","自定义地图风格","启用此选项将允许编辑地图", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_google_maps_style_container"));
        $panel3->addChild("google_maps_style", $google_maps_style);

        $google_maps_style_container = new QodeContainer("google_maps_style_container", "google_maps_style", "no");
        $panel3->addChild("google_maps_style_container", $google_maps_style_container);

		$google_maps_color = new QodeField("color","google_maps_color","","颜色叠加","选择地图颜色叠加");
        $google_maps_style_container->addChild("google_maps_color", $google_maps_color);

		$google_maps_saturation = new QodeField("range","google_maps_saturation","","饱和度","选择饱和度级别(-100 = 低饱和, 100 = 最饱和)", array(), array( "range_min" => "-100",
            "range_max" => "100",
            "range_step" => "1",
            "range_decimals" => "0"
        ));
        $google_maps_style_container->addChild("google_maps_saturation", $google_maps_saturation);

		$google_maps_lightness = new QodeField("range","google_maps_lightness","","亮度","选择亮度级别 (-100 = 最暗, 100 = 最亮)", array(), array( "range_min" => "-100",
            "range_max" => "100",
            "range_step" => "1",
            "range_decimals" => "0"
        ));
        $google_maps_style_container->addChild("google_maps_lightness", $google_maps_lightness);

        //Upper Section Settings

$panel4 = new QodePanel("上层部分设置","upper_section_settings_panel","section_between_map_form","no");
        $contactPage->addChild("panel4", $panel4);

	$section_between_map_form_position = new QodeField("select","section_between_map_form_position","","部分对齐","选择上层部分对齐方式", array( "" => "默认",
       "left" => "左",
       "right" => "右",
       "center" => "中"
        ));
        $panel4->addChild("section_between_map_form_position", $section_between_map_form_position);

	$contact_section_above_form_title = new QodeField("text","contact_section_above_form_title","","标题","输入在上层部分显示的标题");
        $panel4->addChild("contact_section_above_form_title", $contact_section_above_form_title);

	$contact_section_above_form_subtitle = new QodeField("text","contact_section_above_form_subtitle","","子标题","输入在上层部分显示的子标题");
        $panel4->addChild("contact_section_above_form_subtitle", $contact_section_above_form_subtitle);

        //Contact Form Settings

$panel2 = new QodePanel("联系表设置","contact_form_settings_panel","enable_contact_form","no");
        $contactPage->addChild("panel2", $panel2);

	$receive_mail = new QodeField("text","receive_mail","","邮件发送到","输入电子邮件地址，用于接收通过联系表提交的邮件");
        $panel2->addChild("receive_mail", $receive_mail);

	$email_from = new QodeField("text","email_from","","邮件来自",'输入默认的邮件通过联系表接收电子邮件时出现在“发件人”字段');
        $panel2->addChild("email_from", $email_from);

	$email_subject = new QodeField("text","email_subject","","邮件主题",'输入默认的邮件通过联系表接收电子邮件时出现在“主题”字段');
        $panel2->addChild("email_subject", $email_subject);

	$hide_contact_form_website = new QodeField("yesno","hide_contact_form_website","no","隐藏网站字段",'启用该选项将隐藏联系表“网站”字段');
        $panel2->addChild("hide_contact_form_website", $hide_contact_form_website);

	$contact_heading_above = new QodeField("text","contact_heading_above","","联系表格标题","输入在联系表上面显示的标题");
        $panel2->addChild("contact_heading_above", $contact_heading_above);

	$use_recaptcha = new QodeField("yesno","use_recaptcha","no","使用reCAPTCHA","启用这个选项将放置在联系表一个验证码框", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_use_recaptcha_container"));
        $panel2->addChild("use_recaptcha", $use_recaptcha);

        $use_recaptcha_container = new QodeContainer("use_recaptcha_container", "use_recaptcha", "no");
        $panel2->addChild("use_recaptcha_container", $use_recaptcha_container);

		$recaptcha_public_key = new QodeField("text","recaptcha_public_key","","reCAPTCHA公开Key","输入reCAPTCHA公开key. 更多信息查看 https://www.google.com/recaptcha");
        $use_recaptcha_container->addChild("recaptcha_public_key", $recaptcha_public_key);

		$recaptcha_private_key = new QodeField("text","recaptcha_private_key","","reCAPTCHA私密Key","Enter reCAPTCHA私密key. 更多信息查看 https://www.google.com/recaptcha");
        $use_recaptcha_container->addChild("recaptcha_private_key", $recaptcha_private_key);
    }
    add_action('qode_options_map','qode_contact_options_map',150);
}