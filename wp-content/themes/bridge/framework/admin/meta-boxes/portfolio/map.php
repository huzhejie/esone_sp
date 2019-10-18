<?php

if(!function_exists('qode_map_portfolio_general_meta_fields')) {

	//General

	function qode_map_portfolio_general_meta_fields() {

		$qode_pages = array();
		$pages = get_pages();
		foreach($pages as $page) {
			$qode_pages[$page->ID] = $page->post_title;
		}

		$qodeGeneral = qode_add_meta_box(
			array(
				'scope' => array('portfolio_page'),
				'title' => esc_html__('Qode Portfolio General', 'qode'),
				'name' => 'portfolio_general'
			)
		);

		$qode_portfolio_date = new QodeMetaField("date","qode_portfolio_date","","日期","设置作品项目日期");
		$qodeGeneral->addChild("qode_portfolio_date",$qode_portfolio_date);

		$qode_choose_portfolio_single_view = new QodeMetaField("selectblank","qode_choose-portfolio-single-view","","作品类型",'选择作品类型', array(
			"1" => "作品小图片",
			"2" => "作品小幻灯片",
			"5" => "作品大图片",
			"3" => "作品大幻灯片",
			"4" => "作品自定义 - 网格",
			"7" => "作品自定义 - 全宽",
			"6" => "作品相册",
			"8" => "作品大幻灯片 - 现代"
		),
			array("dependence" => true,
				"hide" => array(
					""=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"1"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"2"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"3"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"4"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"5"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"7"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"8"=>"#qodef_qode_choose_number_of_portfolio_columns_container"
				),
				"show" => array(
					"6"=>"#qodef_qode_choose_number_of_portfolio_columns_container")
			)
		);
		$qodeGeneral->addChild("qode_choose-portfolio-single-view",$qode_choose_portfolio_single_view);

		$qode_choose_number_of_portfolio_columns_container = new QodeContainer("qode_choose_number_of_portfolio_columns_container","qode_choose-portfolio-single-view","no",array("", "1", "2", "3", "4", "5", "7"));
		$qodeGeneral->addChild("qode_choose_number_of_portfolio_columns_container",$qode_choose_number_of_portfolio_columns_container);

	$qode_choose_number_of_portfolio_columns = new QodeMetaField("selectblank","qode_choose-number-of-portfolio-columns","","列数",'输入作品相册类型列数', array(
		"2" => "2 列",
		"3" => "3 列",
		"4" => "4 列"
		));

		$qode_choose_number_of_portfolio_columns_container->addChild("qode_choose-number-of-portfolio-columns",$qode_choose_number_of_portfolio_columns);

	$qode_portfolio_image_galery_orientation = new QodeMetaField("select","qode_portfolio_gallery_image_orientation","full","图像比例","选择作品相册类型图片比例",array(
		"full" => "原始",
		"portfolio-square" => "正方形",
		"portfolio-portrait" => "横向",
		"portfolio-landscape" => "竖向"
		));

		$qode_choose_number_of_portfolio_columns_container->addChild("qode_portfolio-external-link",$qode_portfolio_image_galery_orientation);


	$qode_choose_portfolio_list_page = new QodeMetaField("selectblank","qode_choose-portfolio-list-page","",'"返回"链接','选择作品单个项目页面"返回"页面链接',$qode_pages);
		$qodeGeneral->addChild("qode_choose-portfolio-list-page",$qode_choose_portfolio_list_page);

	$qode_portfolio_external_link = new QodeMetaField("text","qode_portfolio-external-link","","作品外部链接","输入来自作品列表页面的链接（例如：http://www.4mudi.com）");
		$qodeGeneral->addChild("qode_portfolio-external-link",$qode_portfolio_external_link);

	$qode_portfolio_external_link_target = new QodeMetaField("select","qode_portfolio-external-link-target","_blank","作品外部链接目标","选择来自作品列表页面的作品链接目标", array(
		"_blank" => "空页面",
		"_self" => "自身"
		));
		$qodeGeneral->addChild("qode_portfolio-external-link-target",$qode_portfolio_external_link_target);

	$qode_portfolio_lightbox_link = new QodeMetaField("text","qode_portfolio-lightbox-link","","作品自定义灯箱内容","输入网址链接灯箱里的自定义图片/视频内容");
		$qodeGeneral->addChild("qode_portfolio-lightbox-link",$qode_portfolio_lightbox_link);

	$qode_portfolio_type_masonry_style = new QodeMetaField("select","qode_portfolio_type_masonry_style","","切片大小",'选择切片类型作品列表图片布局', array(
		"default" => "默认",
		"large_width" => "大宽",
		"large_height" => "大高",
		"large_width_height" => "大宽/高"
		));
		$qodeGeneral->addChild("qode_portfolio_type_masonry_style",$qode_portfolio_type_masonry_style);

	$qode_show_badge = new QodeMetaField("yesempty","qode_show_badge","","显示徽章","启用此选项将在作品列表显示徽章", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qode_badge_container"));
		$qodeGeneral->addChild("qode_show_badge",$qode_show_badge);

		$qode_badge_container = new QodeContainer("qode_badge_container","qode_show_badge","");
		$qodeGeneral->addChild("qode_badge_container",$qode_badge_container);

	$qode_badge_text = new QodeMetaField("text","qode_badge_text","","徽章文字","", array(), array());
		$qode_badge_container->addChild("qode_badge_text",$qode_badge_text);

	}

	add_action('qode_meta_boxes_map', 'qode_map_portfolio_general_meta_fields');
}

if(!function_exists('qode_map_portfolio_images_videos_meta_fields')) {

	//Portfolio Images

	function qode_map_portfolio_images_videos_meta_fields() {

		$qodePortfolioImages = qode_add_meta_box(
			array(
				'scope' => array('portfolio_page'),
				'title' => esc_html__('Qode Portfolio Images (multiple upload)', 'qode'),
				'name' => 'portfolio_images'
			)
		);

		$qode_portfolio_image_gallery = new QodeMultipleImages("qode_portfolio-image-gallery","作品图片","选择作品图片");
		$qodePortfolioImages->addChild("qode_portfolio-image-gallery",$qode_portfolio_image_gallery);

		/*//Portfolio Images/Videos

		$qodePortfolioImagesVideos = new QodeMetaBox("portfolio_page", "Qode Portfolio Images/Videos (single upload)");
		$qodeFramework->qodeMetaBoxes->addMetaBox("portfolio_images_videos",$qodePortfolioImagesVideos);

			$qode_portfolio_images_videos = new QodeImagesVideos("Portfolio Images/Videos","ThisIsDescription");
			$qodePortfolioImagesVideos->addChild("qode_portfolio_images_videos",$qode_portfolio_images_videos);
		*/
		//Portfolio Images/Videos 2

		$qodePortfolioImagesVideos2 = qode_add_meta_box(
			array(
				'scope' => array('portfolio_page'),
				'title' => esc_html__('Qode Portfolio Images/Videos (single upload)', 'qode'),
				'name' => 'portfolio_images_videos2'
			)
		);

		$qode_portfolio_images_videos2 = new QodeImagesVideosFramework("作品图片/视频2","ThisIsDescription");
		$qodePortfolioImagesVideos2->addChild("qode_portfolio_images_videos2",$qode_portfolio_images_videos2);

		//Portfolio Additional Sidebar Items

		$qodeAdditionalSidebarItems = qode_add_meta_box(
			array(
				'scope' => array('portfolio_page'),
				'title' => esc_html__('Qode Additional Portfolio Sidebar Items', 'qode'),
				'name' => 'portfolio_properties'
			)
		);

		$qode_portfolio_properties = new QodeOptionsFramework("Portfolio Properties","ThisIsDescription");
		$qodeAdditionalSidebarItems->addChild("qode_portfolio_properties",$qode_portfolio_properties);

	}

	add_action('qode_meta_boxes_map', 'qode_map_portfolio_images_videos_meta_fields');
}