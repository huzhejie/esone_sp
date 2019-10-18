<?php
if(!function_exists('qode_map_seo_meta_fields')) {

	function qode_map_seo_meta_fields() {
		$qodeSeo = qode_add_meta_box(
			array(
				'scope' => array('page', 'portfolio_page', 'post'),
				'title' => esc_html__('Qode SEO', 'qode'),
				'name' => 'page_seo'
			)
		);

		$seo_title = new QodeMetaField("text","qode_seo_title","","SEO标题","输入此页面自定义标题");
		$qodeSeo->addChild("qode_seo_title",$seo_title);

		$seo_keywords = new QodeMetaField("text","qode_seo_keywords","","元关键词","输入逗号分隔的关键词列表");
		$qodeSeo->addChild("qode_seo_keywords",$seo_keywords);

		$seo_description = new QodeMetaField("textarea","qode_seo_description","","元描述","输入此页面描述");
		$qodeSeo->addChild("qode_seo_description",$seo_description);

	}

	add_action('qode_meta_boxes_map', 'qode_map_seo_meta_fields');
}