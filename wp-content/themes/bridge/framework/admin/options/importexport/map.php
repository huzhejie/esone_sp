<?php
if(!function_exists('qode_import_export_options_map')) {
    /**
     * Import/Export options page
     */
    function qode_import_export_options_map(){

        $importexportPage = new QodeAdminPage("_importexport", "导入/导出选项", "fa fa-database");
        qode_framework()->qodeOptions->addAdminPage("导入/导出选项", $importexportPage);


        $panel1 = new QodeImportExport("导入/导出选项", "importexport_section");
		$importexportPage->addChild("panel1", $panel1);

    }
    add_action('qode_options_map','qode_import_export_options_map',215);
}