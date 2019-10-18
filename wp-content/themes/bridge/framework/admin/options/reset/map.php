<?php

if(!function_exists('qode_reset_options_map')) {
    /**
     * Reset options page
     */
    function qode_reset_options_map(){

$resetPage = new QodeAdminPage("_reset", "重置", "fa fa-eraser");
        qode_framework()->qodeOptions->addAdminPage("Reset", $resetPage);

        //Reset

$panel1 = new QodePanel("重置为默认","reset_panel");
        $resetPage->addChild("panel1", $panel1);

	$reset_to_defaults = new QodeField("yesno","reset_to_defaults","no","重置为默认","此选项将重置所有选项值为默认");
        $panel1->addChild("reset_to_defaults", $reset_to_defaults);
    }
    add_action('qode_options_map','qode_reset_options_map',220);
}