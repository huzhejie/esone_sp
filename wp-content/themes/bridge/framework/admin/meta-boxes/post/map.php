<?php

if(!function_exists('qode_map_post_meta_fields')) {

	function qode_map_post_meta_fields() {

		// Layout
		$post_layout_meta_box = qode_add_meta_box(
			array(
				'scope' => array('post'),
				'title' => '文章布局',
				'name' => 'post_layout'
			)
		);

		$qode_hide_featured_image = new QodeMetaField("yesno","qode_hide-featured-image","no","隐藏特色图片","你想为此文章隐藏特色图片吗？");
		$post_layout_meta_box->addChild("qode_hide-featured-image",$qode_hide_featured_image);


		$qode_post_style_masonry_date_image = new QodeMetaField("select","qode_post_style_masonry_date_image","","博客切片图片尺寸 - 日期在图片中","选择博客切片图片尺寸 - 日期在图像模板中",array(
			"full" => "默认",
			"landscape" => "横向",
			"portrait" => "竖向",
			"square" => "正方形"
		));
		$post_layout_meta_box->addChild("qode_post_style_masonry_date_image",$qode_post_style_masonry_date_image);

		$qode_post_style_masonry_gallery = new QodeMetaField("select","qode_post_style_masonry_gallery","","切片相册尺寸","选择它出现在切片相册列表中的图片布局",array(
			"default" => "默认",
			"large-width" => "大宽度",
			"large-height" => "大高度",
			"large-width-height" => "大宽/高"
		));
		$post_layout_meta_box->addChild("qode_post_style_masonry_gallery",$qode_post_style_masonry_gallery);

		$single_templates_meta = array(
			'standard'				=> '标准',
			'image-title-post'		=> '图片标题文章'
		);
		$single_templates_meta = apply_filters('qode_single_blog_templates_meta',$single_templates_meta);
		qode_add_meta_box_field(
			array(
				'name'        	=> 'blog_single_type_meta',
				'type'        	=> 'selectblank',
				'label'       	=> '单篇文章类型',
				'default_value'	=> '',
				'description'	=> '选择单个文章页面类型',
				'parent'		=> $post_layout_meta_box,
				'options'		=> $single_templates_meta
			)
		);

		qode_add_meta_box_field(
			array(
				'name'        => 'post_layout_meta',
				'type'        => 'selectblank',
            'label'       => '文章布局',
				'default'	  => 'default',
            'description' => '选择博客复合列表文章布局',
				'parent'      => $post_layout_meta_box,
				'options'     => array(
                'default' => '默认',
                'split' => '分裂'
				)
			)
		);

		do_action('qode_blog_post_meta', $post_layout_meta_box);
	}

	add_action('qode_meta_boxes_map', 'qode_map_post_meta_fields');
}