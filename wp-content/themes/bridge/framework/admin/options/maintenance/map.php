<?php
if(!function_exists('qode_maintenance_options_map')) {
    /**
     * Maintenance options page
     */
    function qode_maintenance_options_map(){

        $qode_pages = array();
        $pages = get_posts(array(
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'meta_value' => 'landing_page.php'
        ));
        foreach ($pages as $page) {
            $qode_pages[$page->ID] = $page->post_title;
        }

$maintenancePage = new QodeAdminPage("_maintenance", "维护模式", "fa fa-wrench");
        qode_framework()->qodeOptions->addAdminPage("Maintenance Mode", $maintenancePage);

        //Maintenance

$panel1 = new QodePanel("设置","maintenance_panel");
        $maintenancePage->addChild("panel1", $panel1);

	$maintenance_mode = new QodeField("yesno","qode_maintenance_mode","no","维护模式","如果你想在网站启用维护模式，打开此选项", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_maintenance_container"
            ));
        $panel1->addChild("qode_maintenance_mode", $maintenance_mode);

        $maintenance_container = new QodeContainer("maintenance_container", "qode_maintenance_mode", "no");
        $panel1->addChild("maintenance_container", $maintenance_container);

    $maintenance_page = new QodeField("selectblank","qode_maintenance_page","",'维护页面','选择用户访问网站时显示的维护页面',$qode_pages);
        $maintenance_container->addChild("qode_maintenance_page", $maintenance_page);

    }
    add_action('qode_options_map','qode_maintenance_options_map',210);
}