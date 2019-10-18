<?php

if(!function_exists('qode_woocommerce_options_map')) {
	/**
	 * WooCommerce options page
	 */
	function qode_woocommerce_options_map()
	{

		$woocommerce_page = new QodeAdminPage("_woocommerce", "WooCommerce", "fa fa-shopping-cart");

		qode_framework()->qodeOptions->addAdminPage("woocommerce", $woocommerce_page);

		$product_list_panel = new QodePanel("Product List", "product_list_panel");
		$woocommerce_page->addChild($product_list_panel->name, $product_list_panel);

		$woo_products_list_number = new QodeField("select", "woo_products_list_number", "columns-3", "产品列表及相关产品列数", "在单一产品上选择产品列表和相关产品的列数", array(
			"columns-3" => "3列 (2带侧边栏)",
			"columns-4" => "4列 (3带侧边栏)"
		));

		$product_list_panel->addChild("woo_products_list_number", $woo_products_list_number);

		$product_info_box_color = new QodeField('color', 'woo_product_info_box_color', '', '产品信息框背景颜色', '设置放置产品信息的框的背景颜色');
		$product_list_panel->addChild('woo_product_info_box_color', $product_info_box_color);

		$product_show_categories = new QodeField('yesno','woo_products_show_categories','no','显示标题上分类 ','启用此选项将显示标题之上的分类');
		$product_list_panel->addChild('woo_products_show_categories', $product_show_categories);

		//Title Separator
		$product_title_show_sep = new QodeField(
			'yesno',
			'woo_products_show_title_sep',
			'no',
			'产品标题后显示分隔符 ',
			'启用此选项将在产品标题后显示小分隔线',
			array(),
			array(
				"dependence" => true,
				"dependence_hide_on_yes" => "",
				"dependence_show_on_yes" => "#qodef_woo_products_title_sep_container"
			)
		);

		$product_list_panel->addChild('woo_products_show_title_sep', $product_title_show_sep);

		$product_title_sep_container = new QodeContainer('woo_products_title_sep_container', 'woo_products_show_title_sep', 'no');
		$product_list_panel->addChild('woo_products_title_sep_container', $product_title_sep_container);

		$group10 = new QodeGroup("分隔线样式", "宝座产品标题分隔线样式");
		$product_title_sep_container->addChild("group10", $group10);

		$row1 = new QodeRow();
		$group10->addChild("row1", $row1);

		$woo_products_title_separator_color = new QodeField("colorsimple", "woo_products_title_separator_color", "", "颜色", "This is some description");
		$row1->addChild("woo_products_title_separator_color", $woo_products_title_separator_color);

		$woo_products_title_separator_thickness = new QodeField("textsimple", "woo_products_title_separator_thickness", "", "粗细 (px)");
		$row1->addChild("woo_products_title_separator_thickness", $woo_products_title_separator_thickness);

		$woo_products_title_separator_margin_top = new QodeField("textsimple", "woo_products_title_separator_margin_top", "", "上边距 (px)", "This is some description");
		$row1->addChild("woo_products_title_separator_margin_top", $woo_products_title_separator_margin_top);

		$woo_products_title_separator_margin_bottom = new QodeField("textsimple", "woo_products_title_separator_margin_bottom", "", "下边距 (px)", "This is some description");
		$row1->addChild("woo_products_title_separator_margin_bottom", $woo_products_title_separator_margin_bottom);

		$woo_products_show_order_by = new QodeField('yesno','woo_products_show_order_by','yes','显示排序方式下拉','');
		$product_list_panel->addChild('woo_products_show_order_by', $woo_products_show_order_by);

		//Product Title
		$group3 = new QodeGroup("产品标题", "定义产品标题文字样式");
		$product_list_panel->addChild("group3", $group3);

		$row1 = new QodeRow();
		$group3->addChild("row1", $row1);

		$woo_products_title_color = new QodeField("colorsimple", "woo_products_title_color", "", "文字颜色");
		$row1->addChild("woo_products_title_color", $woo_products_title_color);

		$woo_products_title_font_size = new QodeField("textsimple", "woo_products_title_font_size", "", "字体大小 (px)");
		$row1->addChild("woo_products_title_font_size", $woo_products_title_font_size);

		$woo_products_title_line_height = new QodeField("textsimple", "woo_products_title_line_height", "", "行高 (px)");
		$row1->addChild("woo_products_title_line_height", $woo_products_title_line_height);

		$woo_products_title_text_transform = new QodeField("selectblanksimple", "woo_products_title_text_transform", "", "文字转换", "", qode_get_text_transform_array());
		$row1->addChild("woo_products_title_text_transform", $woo_products_title_text_transform);

		$row2 = new QodeRow(true);
		$group3->addChild("row2", $row2);

		$woo_products_title_font_family = new QodeField("fontsimple", "woo_products_title_font_family", "-1", "字体系列", "This is some description");
		$row2->addChild("woo_products_title_font_family", $woo_products_title_font_family);

		$woo_products_title_font_style = new QodeField("selectblanksimple", "woo_products_title_font_style", "", "字体样式", "This is some description", qode_get_font_style_array());
		$row2->addChild("woo_products_title_font_style", $woo_products_title_font_style);

		$woo_products_title_font_weight = new QodeField("selectblanksimple", "woo_products_title_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row2->addChild("woo_products_title_font_weight", $woo_products_title_font_weight);

		$woo_products_title_letter_spacing = new QodeField("textsimple", "woo_products_title_letter_spacing", "", "字符间距 (px)", "This is some description");
		$row2->addChild("woo_products_title_letter_spacing", $woo_products_title_letter_spacing);

		$row3 = new QodeRow(true);
		$group3->addChild("row3", $row3);

		$woo_products_title_hover_color = new QodeField("colorsimple", "woo_products_title_hover_color", "", "悬停文字颜色", "This is some description");
		$row3->addChild("woo_products_title_hover_color", $woo_products_title_hover_color);

		$woo_products_title_line_margin_bottom = new QodeField("textsimple", "woo_products_title_line_margin_bottom", "", "下边距 (px)", "This is some description");
		$row3->addChild("woo_products_title_line_margin_bottom", $woo_products_title_line_margin_bottom);

		$woo_products_title_text_align = new QodeField("selectblanksimple", "woo_products_title_text_align", "", "文字对齐", "This is some description", array(
			"center" => "中",
			"left" => "左",
			"right" => "右"
		));
		$row3->addChild("woo_products_title_text_align", $woo_products_title_text_align);


		//Product price
		$group4 = new QodeGroup("产品价格", "定义产品价格文字样式");
		$product_list_panel->addChild("group4", $group4);

		$row1 = new QodeRow();
		$group4->addChild("row1", $row1);

		$woo_products_price_color = new QodeField("colorsimple", "woo_products_price_color", "", "文字颜色", "This is some description");
		$row1->addChild("woo_products_price_color", $woo_products_price_color);

		$woo_products_price_font_size = new QodeField("textsimple", "woo_products_price_font_size", "", "字体大小 (px)", "This is some description");
		$row1->addChild("woo_products_price_font_size", $woo_products_price_font_size);

		$woo_products_price_line_height = new QodeField("textsimple", "woo_products_price_line_height", "", "行高 (px)", "This is some description");
		$row1->addChild("woo_products_price_line_height", $woo_products_price_line_height);

		$woo_products_price_text_transform = new QodeField("selectblanksimple", "woo_products_price_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
		$row1->addChild("woo_products_price_text_transform", $woo_products_price_text_transform);

		$row2 = new QodeRow(true);
		$group4->addChild("row2", $row2);

		$woo_products_price_font_family = new QodeField("fontsimple", "woo_products_price_font_family", "-1", "字体系列", "This is some description");
		$row2->addChild("woo_products_price_font_family", $woo_products_price_font_family);

		$woo_products_price_font_style = new QodeField("selectblanksimple", "woo_products_price_font_style", "", "字体样式", "This is some description", qode_get_font_style_array());
		$row2->addChild("woo_products_price_font_style", $woo_products_price_font_style);

		$woo_products_price_font_weight = new QodeField("selectblanksimple", "woo_products_price_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row2->addChild("woo_products_price_font_weight", $woo_products_price_font_weight);

		$woo_products_price_letter_spacing = new QodeField("textsimple", "woo_products_price_letter_spacing", "", "字符间距 (px)", "This is some description");
		$row2->addChild("woo_products_price_letter_spacing", $woo_products_price_letter_spacing);

		$row3 = new QodeRow(true);
		$group4->addChild("row3", $row3);

		$woo_products_price_old_font_size = new QodeField("textsimple", "woo_products_price_old_font_size", "", "原价字体大小 (px)", "This is some description");
		$row3->addChild("woo_products_price_old_font_size", $woo_products_price_old_font_size);

		$woo_products_price_old_color = new QodeField("colorsimple", "woo_products_price_old_color", "", "原价颜色", "This is some description");
		$row3->addChild("woo_products_price_old_color", $woo_products_price_old_color);

		$woo_products_price_text_align = new QodeField("selectblanksimple", "woo_products_price_text_align", "", "文字对齐方式", "This is some description", array(
			"center" => "中",
			"left" => "左",
			"right" => "右"
		));
		$row3->addChild("woo_products_price_text_align", $woo_products_price_text_align);

		//Product sale
		$group5 = new QodeGroup("产品促销", "定义产品促销文字样式");
		$product_list_panel->addChild("group5", $group5);

		$row1 = new QodeRow();
		$group5->addChild("row1", $row1);

		$woo_products_sale_color = new QodeField("colorsimple", "woo_products_sale_color", "", "文字颜色", "This is some description");
		$row1->addChild("woo_products_sale_color", $woo_products_sale_color);

		$woo_products_sale_font_size = new QodeField("textsimple", "woo_products_sale_font_size", "", "字体大小 (px)", "This is some description");
		$row1->addChild("woo_products_sale_font_size", $woo_products_sale_font_size);

		$woo_products_sale_text_transform = new QodeField("selectblanksimple", "woo_products_sale_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
		$row1->addChild("woo_products_sale_text_transform", $woo_products_sale_text_transform);

		$woo_products_sale_letter_spacing = new QodeField("textsimple", "woo_products_sale_letter_spacing", "", "字符间距 (px)", "This is some description");
		$row1->addChild("woo_products_sale_letter_spacing", $woo_products_sale_letter_spacing);

		$row2 = new QodeRow(true);
		$group5->addChild("row2", $row2);

		$woo_products_sale_font_family = new QodeField("fontsimple", "woo_products_sale_font_family", "-1", "字体系列", "This is some description");
		$row2->addChild("woo_products_sale_font_family", $woo_products_sale_font_family);

		$woo_products_sale_font_style = new QodeField("selectblanksimple", "woo_products_sale_font_style", "", "字体样式", "This is some description", qode_get_font_style_array());
		$row2->addChild("woo_products_sale_font_style", $woo_products_sale_font_style);

		$woo_products_sale_font_weight = new QodeField("selectblanksimple", "woo_products_sale_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row2->addChild("woo_products_sale_font_weight", $woo_products_sale_font_weight);

		$woo_products_sale_border_radius = new QodeField("textsimple", "woo_products_sale_border_radius", "", "边框半径 (px)", "This is some description");
		$row2->addChild("woo_products_sale_border_radius", $woo_products_sale_border_radius);

		$row3 = new QodeRow(true);
		$group5->addChild("row3", $row3);

		$woo_products_sale_background_color = new QodeField("colorsimple", "woo_products_sale_background_color", "", "背景颜色", "This is some description");
		$row3->addChild("woo_products_sale_background_color", $woo_products_sale_background_color);


		$woo_products_sale_width = new QodeField("textsimple", "woo_products_sale_width", "", "宽度 (px)", "This is some description");
		$row3->addChild("woo_products_sale_width", $woo_products_sale_width);

		$woo_products_sale_height = new QodeField("textsimple", "woo_products_sale_height", "", "高度 (px)", "This is some description");
		$row3->addChild("woo_products_sale_height", $woo_products_sale_height);

		$woo_products_sale_show_sep = new QodeField("yesnosimple", "woo_products_sale_show_sep", "yes", "显示分隔线");
		$row3->addChild("woo_products_sale_show_sep", $woo_products_sale_show_sep);

		//Product out of stock

		$group6 = new QodeGroup('产品"缺货"', "定义“缺货”文字样式");
		$product_list_panel->addChild("group6", $group6);

		$row1 = new QodeRow();
		$group6->addChild("row1", $row1);

		$woo_products_out_of_stock_color = new QodeField("colorsimple", "woo_products_out_of_stock_color", "", "文字颜色", "This is some description");
		$row1->addChild("woo_products_out_of_stock_color", $woo_products_out_of_stock_color);

		$woo_products_out_of_stock_font_size = new QodeField("textsimple", "woo_products_out_of_stock_font_size", "", "字体大小 (px)", "This is some description");
		$row1->addChild("woo_products_out_of_stock_font_size", $woo_products_out_of_stock_font_size);

		$woo_products_out_of_stock_text_transform = new QodeField("selectblanksimple", "woo_products_out_of_stock_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
		$row1->addChild("woo_products_out_of_stock_text_transform", $woo_products_out_of_stock_text_transform);

		$woo_products_out_of_stock_letter_spacing = new QodeField("textsimple", "woo_products_out_of_stock_letter_spacing", "", "字符间距 (px)", "This is some description");
		$row1->addChild("woo_products_out_of_stock_letter_spacing", $woo_products_out_of_stock_letter_spacing);

		$row2 = new QodeRow(true);
		$group6->addChild("row2", $row2);

		$woo_products_out_of_stock_font_family = new QodeField("fontsimple", "woo_products_out_of_stock_font_family", "-1", "字体系列", "This is some description");
		$row2->addChild("woo_products_out_of_stock_font_family", $woo_products_out_of_stock_font_family);

		$woo_products_out_of_stock_font_style = new QodeField("selectblanksimple", "woo_products_out_of_stock_font_style", "", "字体样式", "This is some description", qode_get_font_style_array());
		$row2->addChild("woo_products_out_of_stock_font_style", $woo_products_out_of_stock_font_style);

		$woo_products_out_of_stock_font_weight = new QodeField("selectblanksimple", "woo_products_out_of_stock_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row2->addChild("woo_products_out_of_stock_font_weight", $woo_products_out_of_stock_font_weight);

		$woo_products_out_of_stock_border_radius = new QodeField("textsimple", "woo_products_out_of_stock_border_radius", "", "边框半径 (px)", "This is some description");
		$row2->addChild("woo_products_out_of_stock_border_radius", $woo_products_out_of_stock_border_radius);

		$row3 = new QodeRow(true);
		$group6->addChild("row3", $row3);

		$woo_products_out_of_stock_background_color = new QodeField("colorsimple", "woo_products_out_of_stock_background_color", "", "背景颜色", "This is some description");
		$row3->addChild("woo_products_out_of_stock_background_color", $woo_products_out_of_stock_background_color);

		$woo_products_out_of_stock_width = new QodeField("textsimple", "woo_products_out_of_stock_width", "", "宽度 (px)", "This is some description");
		$row3->addChild("woo_products_out_of_stock_width", $woo_products_out_of_stock_width);

		$woo_products_out_of_stock_height = new QodeField("textsimple", "woo_products_out_of_stock_height", "", "高度 (px)", "This is some description");
		$row3->addChild("woo_products_out_of_stock_height", $woo_products_out_of_stock_height);

		//Product add to cart
		$products_add_to_cart_subtitle = new QodeGroup('"添加到购物车"按钮', '定义添加到购物车按钮样式');
		$product_list_panel->addChild("products_add_to_cart_subtitle", $products_add_to_cart_subtitle);

		$row1 = new QodeRow();
		$products_add_to_cart_subtitle->addChild("row1", $row1);

		$woo_products_add_to_cart_color = new QodeField("colorsimple", "woo_products_add_to_cart_color", "", "文字颜色", "This is some description");
		$row1->addChild("woo_products_add_to_cart_color", $woo_products_add_to_cart_color);

		$woo_products_add_to_cart_hover_color = new QodeField("colorsimple", "woo_products_add_to_cart_hover_color", "", "悬停文字颜色", "This is some description");
		$row1->addChild("woo_products_add_to_cart_hover_color", $woo_products_add_to_cart_hover_color);

		$woo_products_add_to_cart_font_size = new QodeField("textsimple", "woo_products_add_to_cart_font_size", "", "字体大小 (px)", "This is some description");
		$row1->addChild("woo_products_add_to_cart_font_size", $woo_products_add_to_cart_font_size);

		$woo_products_add_to_cart_line_height = new QodeField("textsimple", "woo_products_add_to_cart_line_height", "", "行高 (px)", "This is some description");
		$row1->addChild("woo_products_add_to_cart_line_height", $woo_products_add_to_cart_line_height);

		$row2 = new QodeRow(true);
		$products_add_to_cart_subtitle->addChild("row2", $row2);

		$woo_products_add_to_cart_text_transform = new QodeField("selectblanksimple", "woo_products_add_to_cart_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
		$row2->addChild("woo_products_add_to_cart_text_transform", $woo_products_add_to_cart_text_transform);

		$woo_products_add_to_cart_font_family = new QodeField("fontsimple", "woo_products_add_to_cart_font_family", "-1", "字体系列", "This is some description");
		$row2->addChild("woo_products_add_to_cart_font_family", $woo_products_add_to_cart_font_family);

		$woo_products_add_to_cart_font_style = new QodeField("selectblanksimple", "woo_products_add_to_cart_font_style", "", "字体样式", "This is some description", qode_get_font_style_array());
		$row2->addChild("woo_products_add_to_cart_font_style", $woo_products_add_to_cart_font_style);

		$woo_products_add_to_cart_font_weight = new QodeField("selectblanksimple", "woo_products_add_to_cart_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row2->addChild("woo_products_add_to_cart_font_weight", $woo_products_add_to_cart_font_weight);

		$row3 = new QodeRow(true);
		$products_add_to_cart_subtitle->addChild("row3", $row3);

		$woo_products_add_to_cart_letter_spacing = new QodeField("textsimple", "woo_products_add_to_cart_letter_spacing", "", "字符间距 (px)", "This is some description");
		$row3->addChild("woo_products_add_to_cart_letter_spacing", $woo_products_add_to_cart_letter_spacing);

		$woo_products_add_to_cart_background_color = new QodeField("colorsimple", "woo_products_add_to_cart_background_color", "", "背景颜色", "This is some description");
		$row3->addChild("woo_products_add_to_cart_background_color", $woo_products_add_to_cart_background_color);

		$woo_products_add_to_cart_background_hover_color = new QodeField("colorsimple", "woo_products_add_to_cart_background_hover_color", "", "悬停背景颜色", "This is some description");
		$row3->addChild("woo_products_add_to_cart_background_hover_color", $woo_products_add_to_cart_background_hover_color);

		$woo_products_add_to_cart_border_radius = new QodeField("textsimple", "woo_products_add_to_cart_border_radius", "", "边框半径 (px)", "This is some description");
		$row3->addChild("woo_products_add_to_cart_border_radius", $woo_products_add_to_cart_border_radius);

		$row4 = new QodeRow();
		$products_add_to_cart_subtitle->addChild("row4", $row4);

		$woo_products_add_to_cart_border_color = new QodeField("colorsimple", "woo_products_add_to_cart_border_color", "", "边框颜色", "This is some description");
		$row4->addChild("woo_products_add_to_cart_border_color", $woo_products_add_to_cart_border_color);

		$woo_products_add_to_cart_border_hover_color = new QodeField("colorsimple", "woo_products_add_to_cart_border_hover_color", "", "边框悬停颜色", "This is some description");
		$row4->addChild("woo_products_add_to_cart_border_hover_color", $woo_products_add_to_cart_border_hover_color);

		$woo_products_add_to_cart_border_width = new QodeField("textsimple", "woo_products_add_to_cart_border_width", "", "边框宽度 (px)", "This is some description");
		$row4->addChild("woo_products_add_to_cart_border_width", $woo_products_add_to_cart_border_width);

		$woo_products_add_to_cart_hover_type = new QodeField("selectsimple","woo_products_add_to_cart_hover_type","","按钮悬停类型","This is some description",array(
			"" => "默认",
			"enlarge" => "放大"
		));
		$row4->addChild("woo_products_add_to_cart_hover_type",$woo_products_add_to_cart_hover_type);

		//Product single
		$product_single_panel = new QodePanel('单个产品', 'product_single_panel');

		$woocommerce_page->addChild('product_single_panel', $product_single_panel);

		$woo_product_single_type = new QodeField("select","woo_product_single_type","","产品类型","选择产品类型",array(
			"" => "默认",
			"wide-gallery" => "宽相册",
			"tabs-on-bottom" => "底部选项卡"
		));
		$product_single_panel->addChild("woo_product_single_type",$woo_product_single_type);

		$woo_product_single_related_post_tag = new QodeField("select","woo_product_single_related_post_tag","","相关和追加销售部分H标签","选择相关和追加销售部分标题h标签，默认是h4",array(
			""	 => "默认",
			"h2" => "h2",
			"h3" => "h3",
			"h4" => "h4",
			"h5" => "h5",
			"h6" => "h6"
		));
		$product_single_panel->addChild("woo_product_single_related_post_tag",$woo_product_single_related_post_tag);

		//Product single title
		$group3 = new QodeGroup("产品标题", "定义产品标题文字样式");
		$product_single_panel->addChild("group3", $group3);

		$row1 = new QodeRow();
		$group3->addChild("row1", $row1);

		$woo_product_single_title_color = new QodeField("colorsimple", "woo_product_single_title_color", "", "文字颜色");
		$row1->addChild("woo_product_single_title_color", $woo_product_single_title_color);

		$woo_product_single_title_font_size = new QodeField("textsimple", "woo_product_single_title_font_size", "", "字体大小 (px)");
		$row1->addChild("woo_product_single_title_font_size", $woo_product_single_title_font_size);

		$woo_product_single_title_line_height = new QodeField("textsimple", "woo_product_single_title_line_height", "", "行高 (px)");
		$row1->addChild("woo_product_single_title_line_height", $woo_product_single_title_line_height);

		$woo_product_single_title_text_transform = new QodeField("selectblanksimple", "woo_product_single_title_text_transform", "", "文字转换", "", qode_get_text_transform_array());
		$row1->addChild("woo_product_single_title_text_transform", $woo_product_single_title_text_transform);

		$row2 = new QodeRow(true);
		$group3->addChild("row2", $row2);

		$woo_product_single_title_font_family = new QodeField("fontsimple", "woo_product_single_title_font_family", "-1", "字体系列", "This is some description");
		$row2->addChild("woo_product_single_title_font_family", $woo_product_single_title_font_family);

		$woo_product_single_title_font_style = new QodeField("selectblanksimple", "woo_product_single_title_font_style", "", "字体样式", "This is some description", qode_get_font_style_array());
		$row2->addChild("woo_product_single_title_font_style", $woo_product_single_title_font_style);

		$woo_product_single_title_font_weight = new QodeField("selectblanksimple", "woo_product_single_title_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row2->addChild("woo_product_single_title_font_weight", $woo_product_single_title_font_weight);

		$woo_product_single_title_letter_spacing = new QodeField("textsimple", "woo_product_single_title_letter_spacing", "", "字符间距 (px)", "This is some description");
		$row2->addChild("woo_product_single_title_letter_spacing", $woo_product_single_title_letter_spacing);

		$row3 = new QodeRow(true);
		$group3->addChild("row3", $row3);

		$woo_product_single_title_line_margin_bottom = new QodeField("textsimple", "woo_product_single_title_line_margin_bottom", "", "下边距 (px)", "This is some description");
		$row3->addChild("woo_product_single_title_line_margin_bottom", $woo_product_single_title_line_margin_bottom);

		//Product single price
		$group4 = new QodeGroup("产品价格", "定义产品价格文字样式");
		$product_single_panel->addChild("group4", $group4);

		$row1 = new QodeRow();
		$group4->addChild("row1", $row1);

		$woo_product_single_price_color = new QodeField("colorsimple", "woo_product_single_price_color", "", "文字颜色", "This is some description");
		$row1->addChild("woo_product_single_price_color", $woo_product_single_price_color);

		$woo_product_single_price_font_size = new QodeField("textsimple", "woo_product_single_price_font_size", "", "字体大小 (px)", "This is some description");
		$row1->addChild("woo_product_single_price_font_size", $woo_product_single_price_font_size);

		$woo_product_single_price_line_height = new QodeField("textsimple", "woo_product_single_price_line_height", "", "行高 (px)", "This is some description");
		$row1->addChild("woo_product_single_price_line_height", $woo_product_single_price_line_height);

		$woo_product_single_price_text_transform = new QodeField("selectblanksimple", "woo_product_single_price_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
		$row1->addChild("woo_product_single_price_text_transform", $woo_product_single_price_text_transform);

		$row2 = new QodeRow(true);
		$group4->addChild("row2", $row2);

		$woo_product_single_price_font_family = new QodeField("fontsimple", "woo_product_single_price_font_family", "-1", "字体系列", "This is some description");
		$row2->addChild("woo_product_single_price_font_family", $woo_product_single_price_font_family);

		$woo_product_single_price_font_style = new QodeField("selectblanksimple", "woo_product_single_price_font_style", "", "字体样式", "This is some description", qode_get_font_style_array());
		$row2->addChild("woo_product_single_price_font_style", $woo_product_single_price_font_style);

		$woo_product_single_price_font_weight = new QodeField("selectblanksimple", "woo_product_single_price_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row2->addChild("woo_product_single_price_font_weight", $woo_product_single_price_font_weight);

		$woo_product_single_price_letter_spacing = new QodeField("textsimple", "woo_product_single_price_letter_spacing", "", "字符间距 (px)", "This is some description");
		$row2->addChild("woo_product_single_price_letter_spacing", $woo_product_single_price_letter_spacing);

		$row3 = new QodeRow(true);
		$group4->addChild("row3", $row3);

		$woo_product_single_price_old_font_size = new QodeField("textsimple", "woo_product_single_price_old_font_size", "", "原价字体大小 (px)", "This is some description");
		$row3->addChild("woo_product_single_price_old_font_size", $woo_product_single_price_old_font_size);

		$woo_product_single_price_old_color = new QodeField("colorsimple", "woo_product_single_price_old_color", "", "原价颜色", "This is some description");
		$row3->addChild("woo_product_single_price_old_color", $woo_product_single_price_old_color);

		//Quantity buttons
		$quantity_buttons_group = new QodeGroup('数量按钮', '定义数量按钮样式');
		$product_single_panel->addChild('quantity_buttons_group', $quantity_buttons_group);

		$quantity_button_background_color = new QodeField('colorsimple', 'quantity_button_background_color', '', '背景颜色');
		$quantity_buttons_group->addChild('quantity_button_background_color', $quantity_button_background_color);

		$quantity_button_hover_background_color = new QodeField('colorsimple', 'quantity_hover_button_background_color', '', '悬停背景颜色');
		$quantity_buttons_group->addChild('quantity_hover_button_background_color', $quantity_button_hover_background_color);

		$quantity_button_icon_color = new QodeField('colorsimple', 'quantity_button_icon_color', '', '图标颜色');
		$quantity_buttons_group->addChild('quantity_button_icon_color', $quantity_button_icon_color);

		$quantity_button_icon_hover_color = new QodeField('colorsimple', 'quantity_button_icon_hover_color', '', '图标悬停颜色');
		$quantity_buttons_group->addChild('quantity_button_icon_hover_color', $quantity_button_icon_hover_color);

		//Cart page
		$panel_cart_page = new QodePanel('购物车页面', 'panel_cart_page');
		$woocommerce_page->addChild('panel_cart_page', $panel_cart_page);

		$cart_title_size = new QodeField('text', 'woo_cart_title_size', '', '标题大小 (px)', '定义购物车页面显示标题大小', '', array('col_width' => 3));
		$panel_cart_page->addChild('woo_cart_title_size', $cart_title_size);

		$cart_title_line_height = new QodeField('text', 'woo_cart_title_line_height', '', '行高 (px)', '定义购物车页面显示标题行高', '', array('col_width' => 3));
		$panel_cart_page->addChild('woo_cart_title_line_height', $cart_title_line_height);

		$cart_title_letter_spacing = new QodeField('text', 'woo_cart_title_letter_spacing', '', '字符间距 (px)', '定义购物车页面显示标题字符间距', '', array('col_width' => 3));
		$panel_cart_page->addChild('woo_cart_title_letter_spacing', $cart_title_letter_spacing);

		//Product List - Elegant Shortcode
		$panel_product_list_shortcode_page = new QodePanel('产品列表 - 优雅的简码', 'panel_product_list_shortcode_page');
		$woocommerce_page->addChild('panel_product_list_shortcode_page', $panel_product_list_shortcode_page);

		$product_list_first_background_color = new QodeField('color', 'product_list_first_background_color', '', '第一背景颜色');
		$panel_product_list_shortcode_page->addChild('product_list_first_background_color', $product_list_first_background_color);

		$product_list_second_background_color = new QodeField('color', 'product_list_second_background_color', '', '第二背景颜色');
		$panel_product_list_shortcode_page->addChild('product_list_second_background_color', $product_list_second_background_color);

		//Product category
		$group_ples = new QodeGroup("产品分类", "定义产品分类文字样式");
		$panel_product_list_shortcode_page->addChild("group_ples", $group_ples);

		$row1 = new QodeRow();
		$group_ples->addChild("row1", $row1);

		$woo_product_list_elegant_category_color = new QodeField("colorsimple", "woo_product_list_elegant_category_color", "", "文字颜色", "This is some description");
		$row1->addChild("woo_product_list_elegant_category_color", $woo_product_list_elegant_category_color);

		$woo_product_list_elegant_category_font_size = new QodeField("textsimple", "woo_product_list_elegant_category_font_size", "", "字体大小 (px)", "This is some description");
		$row1->addChild("woo_product_list_elegant_category_font_size", $woo_product_list_elegant_category_font_size);

		$woo_product_list_elegant_category_line_height = new QodeField("textsimple", "woo_product_list_elegant_category_line_height", "", "行高 (px)", "This is some description");
		$row1->addChild("woo_product_list_elegant_category_line_height", $woo_product_list_elegant_category_line_height);

		$woo_product_list_elegant_category_text_transform = new QodeField("selectblanksimple", "woo_product_list_elegant_category_text_transform", "", "文字转换", "This is some description", qode_get_text_transform_array());
		$row1->addChild("woo_product_list_elegant_category_text_transform", $woo_product_list_elegant_category_text_transform);

		$row2 = new QodeRow(true);
		$group_ples->addChild("row2", $row2);

		$woo_product_list_elegant_category_font_family = new QodeField("fontsimple", "woo_product_list_elegant_category_font_family", "-1", "字体系列", "This is some description");
		$row2->addChild("woo_product_list_elegant_category_font_family", $woo_product_list_elegant_category_font_family);

		$woo_product_list_elegant_category_font_style = new QodeField("selectblanksimple", "woo_product_list_elegant_category_font_style", "", "字体样式", "This is some description", qode_get_font_style_array());
		$row2->addChild("woo_product_list_elegant_category_font_style", $woo_product_list_elegant_category_font_style);

		$woo_product_list_elegant_category_font_weight = new QodeField("selectblanksimple", "woo_product_list_elegant_category_font_weight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row2->addChild("woo_product_list_elegant_category_font_weight", $woo_product_list_elegant_category_font_weight);

		$woo_product_list_elegant_category_letter_spacing = new QodeField("textsimple", "woo_product_list_elegant_category_letter_spacing", "", "字符间距 (px)", "This is some description");
		$row2->addChild("woo_product_list_elegant_category_letter_spacing", $woo_product_list_elegant_category_letter_spacing);

		$row3 = new QodeRow(true);
		$group_ples->addChild("row3", $row3);

		$woo_product_list_elegant_category_hover_color = new QodeField("colorsimple", "woo_product_list_elegant_category_hover_color", "", "悬停颜色", "This is some description");
		$row3->addChild("woo_product_list_elegant_category_hover_color", $woo_product_list_elegant_category_hover_color);

		//Dropdown Cart
		$panel_dropdown_cart = new QodePanel('下拉购物车', 'panel_dropdown_cart');
		$woocommerce_page->addChild('panel_dropdown_cart', $panel_dropdown_cart);

		$woo_cart_type = new QodeField('select', 'woo_cart_type', '', '购物车图标类型', '选择下拉购物车图标类型', array(
			'' => '默认',
			'font-elegant' => '字体优雅图标'
		));
		$panel_dropdown_cart->addChild('woo_cart_type', $woo_cart_type);

	}
	add_action('qode_options_map','qode_woocommerce_options_map',200);
}