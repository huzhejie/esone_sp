<?php

global $qodeIconCollections;

/*** Removing shortcodes ***/
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_button");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_message");
vc_remove_element("vc_tour");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_toggle");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");
vc_remove_element("vc_cta");
vc_remove_element("vc_round_chart");
vc_remove_element("vc_line_chart");
vc_remove_element("vc_tta_accordion");
vc_remove_element("vc_tta_tour");
vc_remove_element("vc_tta_tabs");

//Remove Grid Elements if disabled
if (!qode_vc_grid_elements_enabled() && version_compare(qode_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_element('vc_basic_grid');
	vc_remove_element('vc_media_grid');
	vc_remove_element('vc_masonry_grid');
	vc_remove_element('vc_masonry_media_grid');
	vc_remove_element('vc_icon');
}

if (version_compare(qode_get_vc_version(), '5.0') >= 0) {
	vc_remove_element("vc_section");
}

if(!qode_vc_grid_elements_enabled()) {
	vc_remove_element('vc_button2');
	vc_remove_element("vc_custom_heading");
	vc_remove_element("vc_btn");
}

/*** Remove unused parameters ***/
if (function_exists('vc_remove_param')) {
	vc_remove_param('vc_single_image', 'css_animation');
	vc_remove_param('vc_column_text', 'css_animation');
	vc_remove_param('vc_row', 'video_bg');
	vc_remove_param('vc_row', 'video_bg_url');
	vc_remove_param('vc_row', 'video_bg_parallax');
	vc_remove_param('vc_row', 'full_height');
	vc_remove_param('vc_row', 'content_placement');
	vc_remove_param('vc_row', 'full_width');
	vc_remove_param('vc_row', 'bg_image');
	vc_remove_param('vc_row', 'bg_color');
	vc_remove_param('vc_row', 'font_color');
	vc_remove_param('vc_row', 'margin_bottom');
	vc_remove_param('vc_row', 'bg_image_repeat');
	vc_remove_param('vc_tabs', 'interval');
	vc_remove_param('vc_separator', 'style');
	vc_remove_param('vc_separator', 'color');
	vc_remove_param('vc_separator', 'accent_color');
	vc_remove_param('vc_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'style');
	vc_remove_param('vc_text_separator', 'color');
	vc_remove_param('vc_text_separator', 'accent_color');
	vc_remove_param('vc_text_separator', 'el_width');
	vc_remove_param('vc_row', 'gap');
    vc_remove_param('vc_row', 'columns_placement');
    vc_remove_param('vc_row', 'equal_height');
    vc_remove_param('vc_row_inner', 'gap');
    vc_remove_param('vc_row_inner', 'content_placement');
    vc_remove_param('vc_row_inner', 'equal_height');


    //remove vc parallax functionality
    vc_remove_param('vc_row', 'parallax');
    vc_remove_param('vc_row', 'parallax_image');

//	vc_remove_param( "vc_row", "css" );
//	vc_remove_param( "vc_row_inner", "css" );

	if(version_compare(qode_get_vc_version(), '4.4.2') >= 0) {
		vc_remove_param('vc_accordion', 'disable_keyboard');
		vc_remove_param('vc_separator', 'align');
		vc_remove_param('vc_separator', 'border_width');
		vc_remove_param('vc_text_separator', 'align');
		vc_remove_param('vc_text_separator', 'border_width');
	}
	if(version_compare(qode_get_vc_version(), '4.7.4') >= 0) {
		add_action( 'init', 'qode_remove_vc_image_zoom',11);
		function qode_remove_vc_image_zoom() {
			//Remove zoom from click action on single image
			$param = WPBMap::getParam( 'vc_single_image', 'onclick' );
			unset($param['value']['Zoom']);
			vc_update_shortcode_param( 'vc_single_image', $param );
		}
		vc_remove_param('vc_text_separator', 'css');
		vc_remove_param('vc_separator', 'css');
	}
	if(version_compare(qode_get_vc_version(), '4.10') >= 0) {
		vc_remove_param('vc_text_separator', 'add_icon');
		vc_remove_param('vc_text_separator', 'i_type');
		vc_remove_param('vc_text_separator', 'i_icon_fontawesome');
		vc_remove_param('vc_text_separator', 'i_icon_openiconic');
		vc_remove_param('vc_text_separator', 'i_icon_typicons');
		vc_remove_param('vc_text_separator', 'i_icon_entypo');
		vc_remove_param('vc_text_separator', 'i_icon_linecons');
		vc_remove_param('vc_text_separator', 'i_color');
		vc_remove_param('vc_text_separator', 'i_custom_color');
		vc_remove_param('vc_text_separator', 'i_background_style');
		vc_remove_param('vc_text_separator', 'i_background_color');
		vc_remove_param('vc_text_separator', 'i_custom_background_color');
		vc_remove_param('vc_text_separator', 'i_size');
		vc_remove_param('vc_text_separator', 'i_css_animation');
		vc_remove_param('vc_row', 'parallax_speed_bg');
		vc_remove_param('vc_row', 'parallax_speed_video');
	}
	if(function_exists('vc_remove_param') && version_compare(qode_get_vc_version(), '4.12') >= 0) {
		vc_remove_param('vc_row', 'disable_element');
		vc_remove_param('vc_row_inner', 'disable_element');
	}
}
/*** Remove unused parameters from grid elements ***/
if (function_exists('vc_remove_param') && qode_vc_grid_elements_enabled() && version_compare(qode_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_param('vc_basic_grid', 'button_style');
	vc_remove_param('vc_basic_grid', 'button_color');
	vc_remove_param('vc_basic_grid', 'button_size');
	vc_remove_param('vc_basic_grid', 'filter_color');
	vc_remove_param('vc_basic_grid', 'filter_style');
	vc_remove_param('vc_media_grid', 'button_style');
	vc_remove_param('vc_media_grid', 'button_color');
	vc_remove_param('vc_media_grid', 'button_size');
	vc_remove_param('vc_media_grid', 'filter_color');
	vc_remove_param('vc_media_grid', 'filter_style');
	vc_remove_param('vc_masonry_grid', 'button_style');
	vc_remove_param('vc_masonry_grid', 'button_color');
	vc_remove_param('vc_masonry_grid', 'button_size');
	vc_remove_param('vc_masonry_grid', 'filter_color');
	vc_remove_param('vc_masonry_grid', 'filter_style');
	vc_remove_param('vc_masonry_media_grid', 'button_style');
	vc_remove_param('vc_masonry_media_grid', 'button_color');
	vc_remove_param('vc_masonry_media_grid', 'button_size');
	vc_remove_param('vc_masonry_media_grid', 'filter_color');
	vc_remove_param('vc_masonry_media_grid', 'filter_style');
	vc_remove_param('vc_basic_grid', 'paging_color');
	vc_remove_param('vc_basic_grid', 'arrows_color');
	vc_remove_param('vc_media_grid', 'paging_color');
	vc_remove_param('vc_media_grid', 'arrows_color');
	vc_remove_param('vc_masonry_grid', 'paging_color');
	vc_remove_param('vc_masonry_grid', 'arrows_color');
	vc_remove_param('vc_masonry_media_grid', 'paging_color');
	vc_remove_param('vc_masonry_media_grid', 'arrows_color');
}

/*** Remove frontend editor ***/
if(function_exists('vc_disable_frontend')){
	vc_disable_frontend();
}
$fa_icons = getFontAwesomeIconArray();
$collection = $qodeIconCollections->getIconCollection('font_awesome');
$icons = $collection->getIconsArray();

$carousel_sliders = getCarouselSliderArray();

$animations = array(
	"" => "",
	"从左侧显示元素" => "element_from_left",
	"从右侧显示元素" => "element_from_right",
	"从上显示元素" => "element_from_top",
	"从下显示元素" => "element_from_bottom",
	"淡入显示元素" => "element_from_fade"
);

$font_weight_array = array(
	"默认" => "",
	"细 100" => "100",
	"超浅 200" => "200",
	"浅 300" => "300",
	"正常 400" => "400",
	"中 500" => "500",
	"半粗 600" => "600",
	"粗 700" => "700",
	"超粗 800" => "800",
	"极粗 900" => "900"
);

/*** Accordion ***/

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Style",
	"param_name" => "style",
	"value" => array(
		"手风琴"             => "accordion",
		"切换"                => "toggle",
        "框式手风琴"       => "boxed_accordion",
        "框式切换"          => "boxed_toggle"
	),
	'save_always' => true,
	"description" => ""
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "手风琴标记边框半径",
	"param_name" => "accordion_border_radius",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "style", 'value' => array('accordion', 'toggle'))
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "标题颜色",
	"param_name" => "title_color",
	"value" => "",
	"description" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "背景颜色",
	"param_name" => "background_color",
	"value" => "",
	"description" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "dropdown",
    "class" => "",
    "heading" => "标题标签",
    "param_name" => "title_tag",
    "value" => array(
        ""   => "",
        "h2" => "h2",
        "h3" => "h3",
        "h4" => "h4",	
        "h5" => "h5",
        "h6" => "h6",	
    ),
    "description" => ""
));

/*** Tabs ***/

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "风格",
	"param_name" => "style",
	"value" => array(
		"水平居中" => "horizontal",
		"水平左" => "horizontal_left",
		"水平右" => "horizontal_right",
		"框式" => "boxed",
		"垂直左" => "vertical_left",
		"垂直右" => "vertical_right"
	),
	'save_always' => true,
	"description" => ""
));

/*** Gallery ***/

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "列数",
	"param_name" => "column_number",
	 "value" => array(2, 3, 4, 5, 6, "Disable" => 0),
	'save_always' => true,
	 "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => "灰度图像",
    "param_name" => "grayscale",
    "value" => array('否' => 'no', '是' => 'yes'),
	'save_always' => true,
    "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => "启用拖动",
    "param_name" => "enable_drag",
    "value" => array(
        '' => '',
        '是' => 'yes',
        '否' => 'no'
    ),
    "description" => "",
    "dependency" => Array('element' => "onclick", 'value' => array(''))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => "显示方向导航",
    "param_name" => "direction_nav",
    "value" => array(
        '' => '',
        '是' => 'yes',
        '否' => 'no'
    ),
    "description" => "",
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide','flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => "显示控制导航",
    "param_name" => "control_nav",
    "value" => array(
        '' => '',
        '是' => 'yes',
        '否' => 'no'
    ),
    "description" => "",
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide','flexslider_fade'))
));

vc_add_param('vc_gallery', array(
	'type'			=> 'dropdown',
	'heading'		=> esc_html__('Show image description at bottom', 'qode'),
	'param_name'	=> 'show_image_description',
	'value'			=> array(
		'否' => 'no',
		'是' => 'yes'
	),
	'dependency'	=> array('element' => 'type', 'value' => array('flexslider_slide','flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => "悬停暂停",
    "param_name" => "pause_on_hover",
    "value" => array(
        '' => '',
        '是' => 'yes',
        '否' => 'no'
    ),
    "description" => "",
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide','flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => "相框",
    "param_name" => "frame",
	"value" => array("Use frame?" => "use_frame"),
	"value" => array(
		'' => '',
		'是' => 'use_frame',
		'否' => 'no'
	),
    "description" => "",
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide'))
));

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "选择相框",
	"param_name" => "choose_frame",
	"value" => array('默认' => 'default', '相框 1' => 'frame1', '相框 2' => 'frame2'),
	'save_always' => true,
	"dependency" => Array('element' => "frame", 'value' => array('use_frame'))
));
vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "图片之间空间",
	"param_name" => "images_space",
	"value" => array('否' => 'gallery_without_space', '是' => 'gallery_with_space'),
	'save_always' => true,
	"dependency" => Array('element' => "type", 'value' => array('image_grid'))
));


/*** Empty Space ***/

vc_add_param("vc_empty_space",  array(
        "type" => "attach_image",
        'heading' => '背景图片',
        'param_name' => 'background_image',
        'value' => '',
        'description' =>( '从媒体库选择图片.'),
    )
);
vc_add_param("vc_empty_space",  array(
        "type" => "dropdown",
        'heading' => '图片平铺',
        'param_name' => 'image_repeat',
        "value" => array(
            '不平铺' => 'no-repeat',
            '横向平铺' => 'repeat-x',
            '纵向平铺' => 'repeat-y',
            '完全平铺' => 'repeat'
        ),
		'save_always' => true,
        'description' =>'',
        'dependency' => array('element' => 'background_image','not_empty' => true)
    )
);

/*** Row ***/

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "行类型",
	"param_name" => "row_type",
	"value" => array(
		"行" => "row",
		"视差" => "parallax",
		"扩展" => "expandable",
		"内容菜单" => "content_menu"
	),
	'save_always' => true
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "使用行作为全屏栏目",
	"param_name" => "use_row_as_full_screen_section",
	"value" => array(
		"否" => "no",
		"是" => "yes"
	),
	'save_always' => true,
	"description" => "此选项仅为全屏栏目模板工作",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "类型",
	"param_name" => "type",
	"value" => array(
		"全宽" => "full_width",
		"网格" => "grid"		
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => "标题风格",
    "param_name" => "header_style",
    "value" => array(
        "" => "",
        "浅色" => "light",
        "深色" => "dark"
    ),
    "dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "内容宽度",
	"param_name" => "parallax_content_width",
	"value" => array(
		"网格" => "in_grid",
		"全宽" => "full_width"
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "锚ID",
	"param_name" => "anchor",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "行在内容菜单",
	"value" => array(
		"否" => "",
		"是" => "in_content_menu"
	),
	"param_name" => "in_content_menu",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "内容菜单标题",
	"value" => "",
	"param_name" => "content_menu_title",
	"description" => "",
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "内容菜单图标",
	"param_name" => "content_menu_icon",
	"value" => $icons,
	'save_always' => true,
	"description" => "",
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "角形在背景",
	"param_name" => "angled_section",
	"value" => array(
		'否' => 'no',
		'是' => 'yes'
	),
	'save_always' => true,
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "角形位置",
	"param_name" => "angled_section_position",
	"value" => array(
		'默认 (两个)' => 'both',
		'仅顶部' => 'top',
		'仅底部' => 'bottom'
	),
	'save_always' => true,
	"description" => "",
	"dependency" => Array('element' => "angled_section", 'value' => array('yes'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "角形方向",
	"param_name" => "angled_section_direction",
	"value" => array(
		'从左到右' => 'from_left_to_right',
		'从右到左' => 'from_right_to_left'
	),
	'save_always' => true,
	"description" => "",
	"dependency" => Array('element' => "angled_section", 'value' => array('yes'))
));


vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "文字对齐方式",
	"param_name" => "text_align",
	"value" => array(
		"左" => "left",
		"中" => "center",
		"右" => "right"
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "视频背景",
	"value" => array(
		"否" => "",
		"是" => "show_video"
	),
	"param_name" => "video",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "视频叠加",
	"value" => array(
		"否" => "",
		"是" => "show_video_overlay"
	),
	"param_name" => "video_overlay",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "视频叠加图片（图案）",
	"value" => "",
	"param_name" => "video_overlay_image",
	"description" => "",
	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "视频背景 (webm) 文件网址",
	"value" => "",
	"param_name" => "video_webm",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "视频背景 (mp4) 文件网址",
	"value" => "",
	"param_name" => "video_mp4",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "视频背景 (ogv) 文件网址",
	"value" => "",
	"param_name" => "video_ogv",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "视频预览图片",
	"value" => "",
	"param_name" => "video_image",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "背景图片",
	"value" => "",
	"param_name" => "background_image",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "设置背景图片为图案",
	"value" => array(
		"否" => "without_pattern",
		"是" => "with_pattern"
	),
	'save_always' => true,
	"param_name" => "background_image_as_pattern",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    'type' => 'dropdown',
    'class' => '',
    'heading' => '全屏高度',
    'param_name' => 'full_screen_section_height',
    'value' => array(
        '否' => 'no',
        '是' => 'yes'
    ),
    'save_always' => true,
    'dependency' => Array('element' => 'row_type', 'value' => array('parallax'))
));

vc_add_param('vc_row', array(
    'type' => 'dropdown',
    'class' => '',
    'heading' => '在中间垂直对齐内容',
    'param_name' => 'vertically_align_content_in_middle',
    'value' => array(
        '否' => 'no',
        '是' => 'yes'
    ),
    'dependency' => array('element' => 'full_screen_section_height', 'value' => 'yes')
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "栏目高度",
	"param_name" => "section_height",
	"value" => "",
	"dependency" => Array('element' => "full_screen_section_height", 'value' => array('no'))
));
vc_add_param("vc_row", array(
    "type" => "textfield",
    "class" => "",
    "heading" => "视差速度",
    "param_name" => "parallax_speed",
    "value" => "",
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "背景颜色",
	"param_name" => "background_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable','content_menu'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "下边框颜色",
	"param_name" => "border_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));


vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => "禁用负边距",
	"value" => array("禁用负边距" => "disable_negative_margin" ),
	"param_name" => "row_negative_margin",
	"description" => '此选项将在行删除左右-15px边距',
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "填充",
	"value" => "",
	"param_name" => "side_padding",
	"description" => "填充 (左/右 % - 仅全宽)",
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "侧填充",
	"value" => "",
	"param_name" => "parallax_side_padding",
	"description" => "填充 (左/右 % - 仅全宽)",
	"dependency" => Array('element' => "parallax_content_width", 'value' => array('full_width'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "上填充",
	"value" => "",
	"param_name" => "padding_top",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "下填充",
	"value" => "",
	"param_name" => "padding_bottom",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "标签颜色",
	"param_name" => "color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "标签悬停颜色",
	"param_name" => "hover_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "更多标签",
	"param_name" => "more_button_label",
	"value" =>  "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "最少标签",
	"param_name" => "less_button_label",
	"value" =>  "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "标签位置",
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		"左" => "left",
		"右" => "right",
		"中" => "center"
	),
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => "扩展内容顶部填充（PX）",
    "param_name" => "expandable_content_top_padding",
    "admin_label" => true,
    "value" => "",
    "description" => "默认值是70",
    "dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row",  array(
  "type" => "dropdown",
  "heading" => "CSS动画",
  "param_name" => "css_animation",
  "admin_label" => true,
  "value" => $animations,
	'save_always' => true,
  "description" => "",
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));
vc_add_param("vc_row",  array(
  "type" => "textfield",
  "heading" => "过渡延迟（ms）",
  "param_name" => "transition_delay",
  "admin_label" => true,
  "value" => "",
  "description" => "",
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));

/*** Row Inner ***/

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "行类型",
	"param_name" => "row_type",
	"value" => array(
		"行" => "row",
		"视差" => "parallax",
		"扩展" => "expandable"
	),
	'save_always' => true
	
));
vc_add_param("vc_row_inner", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => "用于框",
	"value" => array("使用行作为框" => "use_row_as_box" ),
	"param_name" => "use_as_box",
	"description" => '',
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "类型",
	"param_name" => "type",
	"value" => array(
		"全宽" => "full_width",
		"网格" => "grid"
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "锚ID",
	"param_name" => "anchor",
	"value" => ""
));
vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "文字对齐方式",
	"param_name" => "text_align",
	"value" => array(
		"左" => "left",
		"中" => "center",
		"右" => "right"
	),
	'save_always' => true
	
));
vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "背景颜色",
	"param_name" => "background_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));
vc_add_param("vc_row_inner", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "背景图片",
	"value" => "",
	"param_name" => "background_image",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));
vc_add_param("vc_row_inner", array(
    'type' => 'dropdown',
    'class' => '',
    'heading' => '全屏高度',
    'param_name' => 'full_screen_section_height',
    'value' => array(
        '否' => 'no',
        '是' => 'yes'
    ),
    'save_always' => true,
    'dependency' => Array('element' => 'row_type', 'value' => array('parallax'))
));
vc_add_param('vc_row_inner', array(
    'type' => 'dropdown',
    'class' => '',
    'heading' => '在中间垂直对齐内容',
    'param_name' => 'vertically_align_content_in_middle',
    'value' => array(
        '否' => 'no',
        '是' => 'yes'
    ),
    'dependency' => array('element' => 'full_screen_section_height', 'value' => 'yes')
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "栏目高度",
	"param_name" => "section_height",
	"value" => "",
	"dependency" => Array('element' => "full_screen_section_height", 'value' => array('no'))
));
vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "边框颜色",
	"param_name" => "border_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => "禁用负边距",
	"value" => array("禁用负边距" => "disable_negative_margin" ),
	"param_name" => "row_negative_margin",
	"description" => '此选项将在行中删除左右-15px边距',
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "填充",
	"value" => "",
	"param_name" => "side_padding",
	"description" => "填充 (左/右 % - 仅全宽)",
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "上填充",
	"value" => "",
	"param_name" => "padding_top",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "下填充",
	"value" => "",
	"param_name" => "padding_bottom",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "更多按钮标签",
	"param_name" => "more_button_label",
	"value" =>  "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "更少按钮标签",
	"param_name" => "less_button_label",
	"value" =>  "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "按钮位置",
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		"左" => "left",
		"右" => "right",
		"中" => "center"	
	),
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "颜色",
	"param_name" => "color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => "扩展内容顶部填充（px）",
    "param_name" => "expandable_content_top_padding",
    "admin_label" => true,
    "value" => "",
    "description" => "默认值是70",
    "dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row_inner",  array(
	"type" => "dropdown",
	"heading" => "CSS动画",
	"param_name" => "css_animation",
	"admin_label" => true,
	"value" => $animations,
	'save_always' => true,
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));
vc_add_param("vc_row_inner",  array(
  "type" => "textfield",
  "heading" => "过渡延迟 (ms)",
  "param_name" => "transition_delay",
  "admin_label" => true,
  "value" => "",
  "description" => "",
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));

/*** Separator ***/


$separator_setting = array (
  'show_settings_on_create' => true,
  "controls"	=> '',
);
vc_map_update('vc_separator', $separator_setting);


vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "类型",
	"param_name" => "type",
	"value" => array(
		"正常"		=>	"normal",
		"透明"	=>	"transparent",
		"小"			=>	"small"
	),
	'save_always' => true,
	"description" => ""
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "位置",
	"param_name" => "position",
	"value" => array(
		"中" => "center",
		"左" => "left",
		"右" => "right"
	),
	'save_always' => true,
    "dependency" => array("element" => "type", "value" => array("small")),
	"description" => ""
));

vc_add_param("vc_separator", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "颜色",
	"param_name" => "color",
	"value" => "",
	"dependency" => array("element" => "type", "value" => array("normal","small")),
	"description" => ""
));

vc_add_param("vc_separator",  array(
    "type" => "dropdown",
    "heading" => "渐变颜色",
    "param_name" => "gradient_color",
    "value" => array(
        '否' => 'no',
        '是' => 'yes'
    ),
    "description" => "",
    "dependency" => array("element" => "type", "value" => array("normal","small"))

));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "透明度",
	"param_name" => "transparency",
	"value" => "",
	"dependency" => array("element" => "type", "value" => array("normal","small")),
	"description" => "值在0到1之间"
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "粗细",
	"param_name" => "thickness",
	"value" => "",
	"description" => ""
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "宽度",
	"param_name" => "width",
	"value" => "",
	"dependency" => array("element" => "type", "value" => array("small")),
	"description" => ""
));

vc_add_param("vc_separator", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => "",
	"value" => array("使用百分比？" => "yes"),
	"param_name" => "width_in_percentages",
	"dependency" => array('element' => 'width', 'not_empty' => true)
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "上边距",
	"param_name" => "up",
	"value" => "",
	"description" => ""
));
vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "下边距",
	"param_name" => "down",
	"value" => "",
	"description" => ""
));

/*** Separator With Text ***/

vc_add_param("vc_text_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "边框",
	"param_name" => "border",
	"value" => array(
		"否" => "no",
		"是" => "yes"
	),
	'save_always' => true
));
vc_add_param("vc_text_separator", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "边框颜色",
	"param_name" => "border_color",
	"dependency" => Array('element' => "border", 'value' => array('yes'))
	
));
vc_add_param("vc_text_separator", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "背景颜色",
	"param_name" => "background_color",
	
));
vc_add_param("vc_text_separator", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "标题颜色",
	"param_name" => "title_color",
));

/*** Single Image ***/

vc_add_param("vc_single_image",  array(
  "type" => "dropdown",
  "heading" => "CSS动画",
  "param_name" => "qode_css_animation",
  "admin_label" => true,
  "value" => $animations,
	'save_always' => true,
  "description" => ""
  
));
vc_add_param("vc_single_image",  array(
  "type" => "textfield",
  "heading" => "过渡延迟 (s)",
  "param_name" => "transition_delay",
  "admin_label" => true,
  "value" => "",
  "description" => ""
  
));
vc_add_param("vc_single_image",  array(
  "type" => "dropdown",
  "heading" => "悬停动画",
  "param_name" => "qode_hover_animation",
  "admin_label" => true,
  "value" => array(
  		'无动画' => '',
  		'放大' => 'zoom_in',
  		'深色覆盖' => 'darken'
  	),
  "description" => ""
  
));

$social_icons_array = array(
	"" => "",
	"ADN" => "fa-adn",
	"Android" => "fa-android",
	"Apple" => "fa-apple",
	"Bitbucket" => "fa-bitbucket",	
	"Bitbucket-Sign" => "fa-bitbucket-sign",	
	"Bitcoin" => "fa-bitcoin",	
	"BTC" => "fa-btc",	
	"CSS3" => "fa-css3",	
	"Dribbble" => "fa-dribbble",	
	"Dropbox" => "fa-dropbox",	
	"E-mail" => "fa-envelope",	
	"Facebook" => "fa-facebook",	
	"Facebook-Sign" => "fa-facebook-sign",	
	"Flickr" => "fa-flickr",	
	"Foursquare" => "fa-foursquare",	
	"GitHub" => "fa-github",	
	"GitHub-Alt" => "fa-github-alt",	
	"GitHub-Sign" => "fa-github-sign",	
	"Gittip" => "fa-gittip",	
	"Google Plus" => "fa-google-plus",	
	"Google Plus-Sign" => "fa-google-plus-sign",	
	"HTML5" => "fa-html5",	
	"Instagram" => "fa-instagram",	
	"LinkedIn" => "fa-linkedin",	
	"LinkedIn-Sign" => "fa-linkedin-sign",	
	"Linux" => "fa-linux",
	"Mail" => "fa-envelope",
	"Mail Alt" => "fa-envelope-o",
	"Mail Square" => "fa-envelope-square",
	"MaxCDN" => "fa-maxcdn",	
	"Pinterest" => "fa-pinterest",	
	"Pinterest-Sign" => "fa-pinterest-sign",	
	"Renren" => "fa-renren",	
	"Skype" => "fa-skype",	
	"StackExchange" => "fa-stackexchange",	
	"Trello" => "fa-trello",	
	"Tumblr" => "fa-tumblr",	
	"Tumblr-Sign" => "fa-tumblr-sign",	
	"Twitter" => "fa-twitter",	
	"Twitter-Sign" => "fa-twitter-sign",	
	"Vimeo-Square" => "fa-vimeo-square",	
	"VK" => "fa-vk",	
	"Weibo" => "fa-weibo",	
	"Windows" => "fa-windows",	
	"Xing" => "fa-xing",	
	"Xing-Sign" => "fa-xing-sign",	
	"YouTube" => "fa-youtube",	
	"YouTube Play" => "fa-youtube-play",	
	"YouTube-Sign" => "fa-youtube-sign"
);


// Banner
vc_map( array(
	'name'		=> '横幅',
	'base'		=> 'qode_banner',
	'category'	=> '主题自带',
	'icon'		=> 'extended-custom-icon-qode icon-wpb-banner',
	'allowed_container_element' => 'vc_row',
	'params' => array(
		array(
			'type'			=> 'attach_image',
			'heading'		=> '图片',
			'param_name'	=> 'image',
			'admin_label'	=> true
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '链接',
			'param_name'	=> 'link'
		),
		array(
			'type'			=> 'dropdown',
			'heading'		=> '打开方式',
			'param_name'	=> 'target',
			'value'			=> array(
				'本窗口'          => '_self',
				'新窗口'         => '_blank',
				'父窗口'        => '_parent'
			)
		),
		array(
			'type'			=> 'dropdown',
			'heading'		=> '垂直对齐',
			'param_name'	=> 'vertical_alignment',
			'value'			=> array(
				'中'		=> 'center',
				'上'			=> 'top',
				'下'		=> 'bottom'
			)
		),
		array(
			'type'			=> 'textarea_html',
			'heading'		=> '内容',
			'param_name'	=> 'content',
			'admin_label'	=> true
		),

	)
) );

// Blockquote 
vc_map( array(
		"name" => "大段引用",
		"base" => "blockquote",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textarea",
				"heading" => "文字",
				"param_name" => "text",
				"value" => "大段引用文字",
				'save_always' => true,
				'admin_label' => true

			),
            array(
				"type" => "colorpicker",
				"heading" => "文字颜色",
				"param_name" => "text_color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "宽度",
				"param_name" => "width",
				"description" => "宽度 (%)",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "行高",
				"param_name" => "line_height",
				"description" => "行高（px）"
			),
            array(
				"type" => "colorpicker",
				"heading" => "背景颜色",
				"param_name" => "background_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "边框颜色",
				"param_name" => "border_color",
				"description" => ""
			),
            array(
                "type" => "dropdown",
                "heading" => "显示引用图标",
                "param_name" => "show_quote_icon",
                "value" => array(
                    "是" => "yes",
                    "否" => "no"
                ),
				'save_always' => true,
                "description" => "",
				'admin_label' => true
            ),
            array(
                "type" => "colorpicker",
                "heading" => "引用图标颜色",
                "param_name" => "quote_icon_color",
                "description" => "",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes'),
            )
		)
) );

/*** Blog Masonry ***/
vc_map( array(
		"name" => "博客切片",
		"base" => "masonry_blog",
		"icon" => "extended-custom-icon-qode icon-wpb-masonry_blog",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array(
                "type" => "textfield",
                "heading" => "文章数量",
                "param_name" => "number_of_posts",
                "description" => "",
				'admin_label' => true
            ),
			array(
				"type" => "dropdown",
				"heading" => "排序方式",
				"param_name" => "order_by",
				"value" => array(
					"标题" => "title",
					"日期" => "date"
				),
				'save_always' => true,
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "dropdown",
				"heading" => "顺序",
				"param_name" => "order",
				"value" => array(
					"升序" => "ASC",
					"降序" => "DESC"
				),
				'save_always' => true,
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "分类别名",
				"param_name" => "category",
				"description" => "为所有留空或使用逗号分隔列表",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "文字长度",
				"param_name" => "text_length",
				"description" => "字符数"
			),
            array(
				"type" => "dropdown",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",	
					"h5" => "h5",	
					"h6" => "h6",	
				),
				"description" => ""
            ),
			array(
				"type" => "dropdown",
				"heading" => "显示日期",
				"param_name" => "display_time",
				"value" => array(
				    "默认" => "",
					"是" => "1",
					"否" => "0"
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"heading" => "显示评论",
				"param_name" => "display_comments",
				"value" => array(
				    "默认" => "",
					"是" => "1",
					"否" => "0"
				),
				"description" => ''
			)
		)
) );

// Blog Slider
vc_map( array(
        "name" => "博客侧边栏",
        "base" => "blog_slider",
        "category" => '主题自带',
        "icon" => "extended-custom-icon-qode icon-wpb-blog-slider",
        "allowed_container_element" => 'vc_row',
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => "幻灯片类型",
                "param_name" => "type",
                "value" => array(
                    "默认" => "",
                    "轮播" => "carousel",
                    "简单" => "simple"
                ),
                "description" => "默认类型是轮播",
				"admin_label" => true
            ),
            array(
                "type" => "dropdown",
                "heading" => "自动开始",
                "param_name" => "auto_start",
                "value" => array(
                    "否" => "false",
                    "是" => "true"
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => "文章信息位置",
                "param_name" => "info_position",
                "value" => array(
                    "默认（覆盖）" => "",
                    "底部" => "info_in_bottom_always"
                ),
                "dependency" => array('element' => 'type', 'value' => array('carousel',''))
            ),
            array(
                "type" => "dropdown",
                "heading" => "Image size",
                "param_name" => "image_size",
                "value" => array(
                    "默认" => "",
                    "原始大小" => "full",
                    "横向" => "landscape",
                    "竖向" => "portrait",
                    "自定义" => "custom"
                )
            ),
			array(
				"type" => "textfield",
				"heading" => "图片宽度（px）",
				"param_name" => "image_width",
				"value" => "",
				"description" => "设置图片自定义宽度",
				"dependency" => array('element' => 'image_size','value' => array('custom'))
			),
			array(
				"type" => "textfield",
				"heading" => "图片高度（px）",
				"param_name" => "image_height",
				"value" => "",
				"description" => "设置图片自定义高度",
				"dependency" => array('element' => 'image_size','value' => array('custom'))
			),
            array(
                "type" => "dropdown",
                "heading" => "主题自带",
                "param_name" => "order_by",
                "value" => array(
                    "" => "",
                    "标题" => "title", 
                    "日期" => "date"
                ),
				"admin_label" => true
            ),
            array(
                "type" => "dropdown",
                "heading" => "顺序",
                "param_name" => "order",
                "value" => array(
                    "" => "",
                    "升序" => "ASC",
                    "降序" => "DESC",   
                ),
				"admin_label" => true
            ),
            array(
                "type" => "textfield",
                "heading" => "数量",
                "param_name" => "number",
                "value" => "-1",
                "description" => "页面博客文章数量（-1是所有）"
            ),
            array(
                "type" => "dropdown",
                "heading" => "博客文章显示数量",
                "param_name" => "blogs_shown",
                "value" => array(
                    "" => "",
                    "3" => "3",
                    "4" => "4",
                    "5" => "5",
                    "6" => "6"   
                ),
                "save_always" => true,
                "description" => "在全宽同一时间显示的博客文章数量（在较小的屏幕自适应将显示较小的项目）",
                "dependency" => array('element' => 'type', 'value' => array('carousel',''))
            ),
            array(
                "type" => "textfield",
                "heading" => "分类",
                "param_name" => "category",
                "value" => "",
                "description" => "分类别名（所有留空）",
				"admin_label" => true
            ),
            array(
                "type" => "textfield",
                "heading" => "所选项目",
                "param_name" => "selected_projects",
                "value" => "",
                "description" => "选择项目（所有留空，用逗号分隔）",
				"admin_label" => true
            ),
            array(
                "type" => "colorpicker",
                "heading" => "信息框颜色",
                "param_name" => "hover_box_color",
                "value" => "",
                "description" => "",
            ),
            array(
                "type" => "dropdown",
                "heading" => "文章信息位置",
                "param_name" => "post_info_position",
                "value" => array(
                    "默认" => "",
                    "标题之上" => "above_title"
                ),
                "dependency" => array('element' => "type", 'value' => array('simple'))
            ),
            array(
                "type" => "dropdown",
                "heading" => "显示分类名字",
                "param_name" => "show_categories",
                "value" => array(
                    "是" => "yes",
                    "否" => "no"
                ),
				'save_always' => true,
                "description" => "默认值为是",
            ),
            array(
                "type" => "colorpicker",
                "heading" => "分类名颜色",
                "param_name" => "category_color",
                "value" => "",
                "dependency" => array('element' => "show_categories", 'value' => array('yes'))
            ),
            array(
                "type" => "colorpicker",
                "heading" => "天颜色",
                "param_name" => "day_color",
                "value" => "",
                "dependency" => array('element' => "info_position", 'value' => array('info_in_bottom_always'))
            ),
            array(
                "type" => "textfield",
                "heading" => "天字体大小 (px)",
                "param_name" => "day_font_size",
                "value" => "",
                "dependency" => array('element' => "info_position", 'value' => array('info_in_bottom_always'))
            ),
            array(
                "type" => "colorpicker",
                "heading" => "月颜色",
                "param_name" => "month_color",
                "value" => "",
                "dependency" => array('element' => "info_position", 'value' => array('info_in_bottom_always'))
            ),
            array(
                "type" => "textfield",
                "heading" => "月字体大小 (px)",
                "param_name" => "month_font_size",
                "value" => "",
                "dependency" => array('element' => "info_position", 'value' => array('info_in_bottom_always'))
            ),
            array(
                "type" => "dropdown",
                "heading" => "显示日期",
                "param_name" => "show_date",
                "value" => array(
                    "是" => "yes",
                    "否" => "no"
                ),
				'save_always' => true,
                "description" => "默认值为是，不影响轮播类型 - 文章信息位置底部",
            ),
            array(
                "type" => "colorpicker",
                "heading" => "日期颜色",
                "param_name" => "date_color",
                "value" => "",
                "description" => "不影响轮播类型 - 文章信息位置底部",
                "dependency" => array('element' => "show_date", 'value' => array('yes'))
            ),
            array(
                "type" => "dropdown",
                "heading" => "显示作者",
                "param_name" => "show_author",
                "value" => array(
                    "是" => "yes",
                    "否" => "no"
                ),
				'save_always' => true,
                "description" => "默认值为是",
                "dependency" => array('element' => "type", 'value' => array('simple'))
            ),
            array(
                "type" => "colorpicker",
                "heading" => "作者颜色",
                "param_name" => "author_color",
                "value" => "",
                "description" => "",
                "dependency" => array('element' => "show_author", 'value' => array('yes'))
            ),
            array(
                "type" => "dropdown",
                "heading" => "标题标签",
                "param_name" => "title_tag",
                "value" => array(
                    ""   => "",
                    "h2" => "h2",
                    "h3" => "h3",
                    "h4" => "h4",
                    "h5" => "h5",
                    "h6" => "h6",
                ),
                "description" => ""
            ),
            array(
                "type" => "colorpicker",
                "heading" => "标题颜色",
                "param_name" => "title_color",
                "value" => "",
                "description" => ""
            ),
    		array(
				"type" => "dropdown",
				"heading" => "显示评论",
				"param_name" => "show_comments",
				"value" => array(
					"否"  => "no",
					"是" => "yes"
				),
				'save_always' => true,
				"description" => "",
                "dependency" => array('element' => "info_position", 'value' => array('info_in_bottom_always'))
			),
            array(
                "type" => "colorpicker",
                "heading" => "评论颜色",
                "param_name" => "comments_color",
                "value" => "",
                "description" => "",
                "dependency" => array('element' => "show_comments", 'value' => array('yes'))
            ),
			array(
				"type" => "dropdown",
				"heading" => "显示摘要",
				"param_name" => "show_excerpt",
				"value" => array(
					"否"  => "no",
					"是" => "yes"
				),
				'save_always' => true,
				"description" => "",
				"dependency" => array('element' => "type", 'value' => array('simple'))
			),
			array(
				"type" => "textfield",
				"heading" => "摘要长度",
				"param_name" => "excerpt_length",
				"value" => "",
				"dependency" => array('element' => "show_excerpt", 'value' => array('yes'))
			),
            array(
                "type" => "colorpicker",
                "heading" => "摘要颜色",
                "param_name" => "excerpt_color",
                "value" => "",
                "description" => "",
                "dependency" => array('element' => "show_excerpt", 'value' => array('yes'))
            ),
    		array(
				"type" => "dropdown",
				"heading" => "显示阅读更多按钮",
				"param_name" => "show_read_more",
				"value" => array(
					"默认"  => "default",
					"是" => "yes",
					"否"  => "no"
				),
				'save_always' => true,
				"description" => "",
                "dependency" => array('element' => "type", 'value' => array('simple'))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__('Read More Button Size', 'qode'),
				"param_name" => "read_more_button_size",
				"value" => array(
					esc_html__('Small', 'qode')		=> "small",
					esc_html__('Medium', 'qode')	=> "medium",
					esc_html__('Large', 'qode')		=> "large"
				),
				"dependency" => array('element' => 'show_read_more', 'value' => array('yes'))
			),
            array(
                "type" => "checkbox",
                "heading" => "上一页/下一页导航",
                "value" => array("启用上一页/下一页导航？" => "enable_navigation"),
                "param_name" => "enable_navigation"
            ),
            array(
                "type" => "textfield",
                "heading" => "额外class名",
                "param_name" => "add_class",
                "value" => "",
                "description" => "如果你想样式化此特殊的博客幻灯片不同，你可以使用此字段添加一个额外class名字给它，然后在你的CSS文件指定class名."
            )
        )
) );

// Button
vc_map( array(
		"name" => "按钮",
		"base" => "button",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-button",
		"allowed_container_element" => 'vc_row',
		"params" =>  array_merge( array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "大小",
				"param_name" => "size",
				"value" => array(
					"默认" => "",
                    "小" => "small",
					"中" => "medium",	
					"大" => "large",
					"加大" => "big_large",
					"加大全宽" => "big_large_full_width"
				)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "样式",
				"param_name" => "style",
				"value" => array(
					"默认" => "",
					"白" => "white"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "文字",
				"param_name" => "text"
			),
//			array(
//				"type" => "dropdown",
//				"class" => "",
//				"heading" => "Icon",
//				"param_name" => "icon",
//				"value" => $icons,
//				'save_always' => true
//				),
		),
	$qodeIconCollections->getVCParamsArray(),
	array(
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "图标颜色",
				"param_name" => "icon_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "链接",
				"param_name" => "link"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "链接目标",
				"param_name" => "target",
				"value" => array(
					"自身" => "_self",
					"新页面" => "_blank",	
					"父级" => "_parent",
					"顶级" => "_top"	
				),
				'save_always' => true
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => "ID",
                "param_name" => "button_id",
                "description" => "设置唯一按钮ID属性"
            ),
            array(
            	"type" => "dropdown",
            	"holder" => "div",
            	"class" => "",
            	"heading" => "悬停类型",
            	"param_name" => "hover_type",
            	"value" => array(
            		"默认" => "default",
            		"放大" => "enlarge",	
            	),
            	'save_always' => true
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "颜色",
				"param_name" => "color"
			),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => "悬停颜色",
                "param_name" => "hover_color"
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => "背景颜色",
                "param_name" => "background_color"
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => "悬停背景颜色",
                "param_name" => "hover_background_color"
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "边框颜色",
				"param_name" => "border_color"
			),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => "悬停边框颜色",
                "param_name" => "hover_border_color"
            ),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "字体样式",
				"param_name" => "font_style",
				"value" => array(
					"" => "",
					"正常" => "normal",	
					"斜体" => "italic"
				)
			),
			array(
				"type" => "dropdown",
				"heading" => "字体粗细",
				"param_name" => "font_weight",
				"value" => array(
					"默认" => "",
					"细 100" => "100",
					"超浅 200" => "200",
					"浅 300" => "300",
					"正常 400" => "400",
					"中 500" => "500",
					"半粗 600" => "600",
					"粗 700" => "700",
					"超粗 800" => "800",
					"极粗 900" => "900"
				)
			),
			array(
				"type" => "dropdown",
				"heading" => "文字对齐",
				"param_name" => "text_align",
				"value" => array(
					"" => "",
					"左" => "left",	
					"右" => "right",
					"中" => "center"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "边框",
				"param_name" => "margin",
				"description" => __("Please insert margin in format: 0px 0px 1px 0px", 'qode')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "边框半径",
				"param_name" => "border_radius",
				"description" => __("Please insert border radius(Rounded corners) in px. For example: 4 ", 'qode')
			),
			array(
				"type" => "dropdown",
				"heading" => "启用按钮阴影",
				"param_name" => "button_shadow",
				"value" => array(
					"默认"	=> "",
					"否"		=> "no",
					"是"		=> "yes"
				)
			)
		))
) );

/*** Call to action ***/
vc_map( array(
		"name" => "行为号召",
		"base" => "action",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-action",
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array(
                "type"          => "dropdown",
                "heading"       => "全宽",
                "param_name"    => "full_width",
                "value"         => array(
                    "是"       => "yes",
                    "否"        => "no"
                ),
				'save_always' => true,
                "description"   => ""
            ),
            array(
                "type"          => "dropdown",
                "heading"       => "网格内容",
                "param_name"    => "content_in_grid",
                "value"         => array(
                    "是"       => "yes",
                    "否"        => "no"
                ),
				'save_always' => true,
                "dependency"    => array("element" => "full_width", "value" => "yes")
            ),
			array(
				"type" => "dropdown",
				"heading" => "类型",
				"param_name" => "type",
				"value" => array(
					"正常" => "normal",
					"简单" => "simple",
					"带图标" => "with_icon"	
				),
				'save_always' => true
			),
			array(
				"type" => "dropdown",
				"heading" => "图标",
				"param_name" => "icon",
				"value" => $icons,
				'save_always' => true,
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
			array(
				"type" => "dropdown",
				"heading" => "图标大小",
				"param_name" => "icon_size",
				"value" => array(
					"" => "",
					"小" => "fa-lg",
					"中" => "fa-2x",
					"大" => "fa-3x"
				),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"heading" => "图标颜色",
				"param_name" => "icon_color",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
			array(
				"type" => "attach_image",
				"heading" => "自定义图标",
				"param_name" => "custom_icon",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"heading" => "背景颜色",
				"param_name" => "background_color"
			),
			array(
				"type" => "attach_image",
				"heading" => "背景图片",
				"param_name" => "background_image"
			),
			array(
				"type" => "checkbox",
				"value" => array("使用背景图片作为图案？" => "yes" ),
				"param_name" => "use_background_as_pattern",
				"dependency" => Array('element' => "background_image", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"heading" => "边框颜色",
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"heading" => "上填充 (px)",
				"param_name" => "padding_top"
			),
			array(
				"type" => "textfield",
				"heading" => "下填充 (px)",
				"param_name" => "padding_bottom"
			),
			array(
				"type" => "textfield",
				"heading" => "默认文字字体大小",
				"param_name" => "text_size",
				"description" => "p标签字体大小"
			),
			array(
				"type" => "dropdown",
				"heading" => "文字字体粗细",
				"param_name" => "text_font_weight",
				"value" => $font_weight_array,
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"heading" => "文字字母间距",
				"param_name" => "text_letter_spacing",
			),
            array(
                "type" => "dropdown",
                "heading" => "显示按钮",
                "param_name" => "show_button",
                "value" => array(
                    "是" => "yes",
                    "否" => "no"
                ),
				'save_always' => true
            ),
			array(
				"type" => "dropdown",
				"heading" => "按钮大小",
				"param_name" => "button_size",
				"value" => array(
					"默认" => "",
					"小" => "small",
					"中" => "medium",
					"大" => "large",
					"加大" => "big_large"
				),
				"dependency" => array('element' => 'show_button', 'value' => array('yes'))
			),
            array(
                "type" => "textfield",
                "heading" => "按钮文字",
                "param_name" => "button_text",
                "dependency" => array('element' => 'show_button', 'value' => array('yes'))
            ),
			array(
				"type" => "textfield",
				"heading" => "按钮链接",
				"param_name" => "button_link",
                "dependency" => array('element' => 'show_button', 'value' => array('yes'))
			),
            array(
                "type" => "dropdown",
                "heading" => "按钮目标",
                "param_name" => "button_target",
                "value" => array(
                    "" => "",
                    "自身" => "_self",
                    "新页面" => "_blank",
                    "父级" => "_parent"
                ),
                "dependency" => array('element' => 'show_button', 'value' => array('yes'))
            ),
            array(
                "type" => "colorpicker",
                "heading" => "按钮文字颜色",
                "param_name" => "button_text_color",
                "dependency" => array('element' => 'show_button', 'value' => array('yes'))
            ),
            array(
                "type" => "colorpicker",
                "heading" => "按钮悬停文字颜色",
                "param_name" => "button_hover_text_color",
                "dependency" => array('element' => 'show_button', 'value' => array('yes'))
            ),
            array(
                "type" => "colorpicker",
                "heading" => "按钮背景颜色",
                "param_name" => "button_background_color",
                "description" => "",
                "dependency" => array('element' => 'show_button', 'value' => array('yes'))
            ),
             array(
                "type" => "colorpicker",
                "heading" => "按钮悬停背景颜色",
                "param_name" => "button_hover_background_color",
                "dependency" => array('element' => 'show_button', 'value' => array('yes'))
            ),
            array(
                "type" => "colorpicker",
                "heading" => "按钮边框颜色",
                "param_name" => "button_border_color",
                "description" => "",
                "dependency" => array('element' => 'show_button', 'value' => array('yes'))
            ),
            array(
                "type" => "colorpicker",
                "heading" => "按钮悬停边框颜色",
                "param_name" => "button_hover_border_color",
                "description" => "",
                "dependency" => array('element' => 'show_button', 'value' => array('yes'))
            ),
			array(
				"type" => "textarea_html",
				"heading" => "内容",
				"param_name" => "content",
				"value" => "<p>"."我是调用操作测试文字."."</p>",
				"description" => ""
			)
		)
) );

// Countdown
vc_map( array(
    "name" => "倒计时",
    "base" => "countdown",
    "category" => '主题自带',
    'admin_enqueue_css' => array(get_template_directory_uri().'/css/admin/vc-extend.css'),
    "icon" => "extended-custom-icon-qode icon-wpb-countdown",
    "allowed_container_element" => 'vc_row',
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => "年",
            "param_name" => "year",
            "value" => array(
                "" => "",
                "2014" => "2014",
                "2015" => "2015",
                "2016" => "2016",
                "2017" => "2017",
                "2018" => "2018",
                "2019" => "2019",
                "2020" => "2020"
            ),
			"save_always" => true,
			"admin_label" => true
        ),

        array(
            "type" => "dropdown",
            "heading" => "月",
            "param_name" => "month",
            "value" => array(
                "" => "",
                "一月" => "1",
                "二月" => "2",
                "三月" => "3",
                "四月" => "4",
                "五月" => "5",
                "六月" => "6",
                "七月" => "7",
                "八月" => "8",
                "九月" => "9",
                "十月" => "10",
                "十一月" => "11",
                "十二月" => "12"
            ),
			"save_always" => true,
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => "日",
            "param_name" => "day",
            "value" => array(
                "" => "",
                "1" => "1",
                "2" => "2",
                "3" => "3",
                "4" => "4",
                "5" => "5",
                "6" => "6",
                "7" => "7",
                "8" => "8",
                "9" => "9",
                "10" => "10",
                "11" => "11",
                "12" => "12",
                "13" => "13",
                "14" => "14",
                "15" => "15",
                "16" => "16",
                "17" => "17",
                "18" => "18",
                "19" => "19",
                "20" => "20",
                "21" => "21",
                "22" => "22",
                "23" => "23",
                "24" => "24",
                "25" => "25",
                "26" => "26",
                "27" => "27",
                "28" => "28",
                "29" => "29",
                "30" => "30",
                "31" => "31",
            ),
			"save_always" => true,
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => "时",
            "param_name" => "hour",
            "value" => array(
                "" => "",
                "0" => "0",
                "1" => "1",
                "2" => "2",
                "3" => "3",
                "4" => "4",
                "5" => "5",
                "6" => "6",
                "7" => "7",
                "8" => "8",
                "9" => "9",
                "10" => "10",
                "11" => "11",
                "12" => "12",
                "13" => "13",
                "14" => "14",
                "15" => "15",
                "16" => "16",
                "17" => "17",
                "18" => "18",
                "19" => "19",
                "20" => "20",
                "21" => "21",
                "22" => "22",
                "23" => "23",
                "24" => "24"
            ),
			"save_always" => true,
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => "分",
            "param_name" => "minute",
            "value" => array(
                "" => "",
                "0" => "0",
                "1" => "1",
                "2" => "2",
                "3" => "3",
                "4" => "4",
                "5" => "5",
                "6" => "6",
                "7" => "7",
                "8" => "8",
                "9" => "9",
                "10" => "10",
                "11" => "11",
                "12" => "12",
                "13" => "13",
                "14" => "14",
                "15" => "15",
                "16" => "16",
                "17" => "17",
                "18" => "18",
                "19" => "19",
                "20" => "20",
                "21" => "21",
                "22" => "22",
                "23" => "23",
                "24" => "24",
                "25" => "25",
                "26" => "26",
                "27" => "27",
                "28" => "28",
                "29" => "29",
                "30" => "30",
                "31" => "31",
                "32" => "32",
                "33" => "33",
                "34" => "34",
                "35" => "35",
                "36" => "36",
                "37" => "37",
                "38" => "38",
                "39" => "39",
                "40" => "40",
                "41" => "41",
                "42" => "42",
                "43" => "43",
                "44" => "44",
                "45" => "45",
                "46" => "46",
                "47" => "47",
                "48" => "48",
                "49" => "49",
                "50" => "50",
                "51" => "51",
                "52" => "52",
                "53" => "53",
                "54" => "54",
                "55" => "55",
                "56" => "56",
                "57" => "57",
                "58" => "58",
                "59" => "59",
                "60" => "60",
            ),
			"save_always" => true,
			"admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => "月标签",
            "param_name" => "month_label",
			"admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => "日标签",
            "param_name" => "day_label",
			"admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => "时标签",
            "param_name" => "hour_label",
			"admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => "分标签",
            "param_name" => "minute_label",
			"admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => "秒标签",
            "param_name" => "second_label",
			"admin_label" => true
        ),
        array(
			"type" => "textfield",
			"heading" => "单月标签",
			"param_name" => "month_singular_label"
		),
		array(
			"type" => "textfield",
			"heading" => "单日标签",
			"param_name" => "day_singular_label"
		),
		array(
			"type" => "textfield",
			"heading" => "单小时标签",
			"param_name" => "hour_singular_label"
		),
		array(
			"type" => "textfield",
			"heading" => "单分钟标签",
			"param_name" => "minute_singular_label"
		),
		array(
			"type" => "textfield",
			"heading" => "单秒标签",
			"param_name" => "second_singular_label"
		),
        array(
            "type" => "colorpicker",
            "heading" => "颜色",
            "param_name" => "color",
            "description" => "为数字，标签和分隔",
        ),
        array(
            "type" => "textfield",
            "heading" => "数字字体大小（像素）",
            "param_name" => "digit_font_size",
            "description" => ""
        ),
        array(
            "type" => "textfield",
            "heading" => "标签字体大小 (px)",
            "param_name" => "label_font_size",
            "description" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => "字体粗细",
            "param_name" => "font_weight",
            "description" => "对于这两个数字和标签",
            "value" => array(
                "默认" => "",
                "细 100" => "100",
                "超浅 200" => "200",
                "浅色 300" => "300",
                "正常 400" => "400",
                "中 500" => "500",
                "半粗 600" => "600",
                "粗 700" => "700",
                "超粗 800" => "800",
                "极粗 900" => "900"
            )
        ),
        array(
            "type" => "dropdown",
            "heading" => "显示分隔符",
            "param_name" => "show_separator",
            "value" => array(
                "否" => "hide_separator",
                "是" => "show_separator"
            ),
			'save_always' => true
        ),
    )
) );

/*** Counter ***/
vc_map( array(
		"name" => "计数器",
		"base" => "counter",
		"category" => '主题自带',
		'admin_enqueue_css' => array(get_template_directory_uri().'/css/admin/vc-extend.css'),
		"icon" => "extended-custom-icon-qode icon-wpb-counter",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"heading" => "类型",
				"param_name" => "type",
				"value" => array(
					"零计数器" => "zero",
					"随机计数器" => "random"	
				),
				'save_always' => true,
				"description" => "",
				'admin_label' => true
			),
            array(
                "type" => "dropdown",
                "heading" => "框",
                "param_name" => "box",
                "value" => array(
                    "是" => "yes",
                    "否" => "no"
                ),
				'save_always' => true,
                "description" => ""
            ),
            array(
                "type" => "colorpicker",
                "heading" => "框边框颜色",
                "param_name" => "box_border_color",
                "description" => "",
                "dependency" => array('element' => "box", 'value' => array('yes'))
            ),
			array(
				"type" => "dropdown",
				"heading" => "位置",
				"param_name" => "position",
				"value" => array(
					"左" => "left",
					"右" => "right",	
					"中" => "center"	
				),
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "数字",
				"param_name" => "digit",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "字体大小 (px)",
				"param_name" => "font_size",
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "字体粗细",
				"param_name" => "font_weight",
				"value" => array(
					"默认" 			=> "",
                   "细 100" => "100",
                "超浅 200" => "200",
                "浅色 300" => "300",
                "正常 400" => "400",
                "中 500" => "500",
                "半粗 600" => "600",
                "粗 700" => "700",
                "超粗 800" => "800",
                "极粗 900" => "900"
				),
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "字体颜色",
				"param_name" => "font_color",
				"description" => ""
			),
            array(
                "type" => "textfield",
                "heading" => "文字",
                "param_name" => "text",
                "description" => "",
				'admin_label' => true
            ),
            array(
                "type" => "textfield",
                "heading" => "文字大小 (px)",
                "param_name" => "text_size",
                "description" => ""
            ),
			array(
				"type" => "dropdown",
				"heading" => "文字字体粗细",
				"param_name" => "text_font_weight",
				"value" => array(
					"默认" => "",
					"细 100" => "100",
					"超浅 200" => "200",
					"浅 300" => "300",
					"正常 400" => "400",
					"中 500" => "500",
					"半粗 600" => "600",
					"粗 700" => "700",
					"超粗 800" => "800",
					"极粗 900" => "900"
				)
			),
			array(
				"type" => "dropdown",
				"heading" => "文字转换",
				"param_name" => "text_transform",
				"value" => array(
					"默认" 			=> "",
					"无"				=> "none",
					"大写" 		=> "capitalize",
					"首字大写"			=> "uppercase",
					"小写"			=> "lowercase"
				),
				"description" => ""
			),
            array(
                "type" => "colorpicker",
                "heading" => "文字颜色",
                "param_name" => "text_color",
                "description" => ""
            ),
            array(
                "type" => "dropdown",
                "heading" => "分隔",
                "param_name" => "separator",
                "value" => array(
                    "是" => "yes",
                    "否" => "no"
                ),
				'save_always' => true,
                "description" => ""
            ),
            array(
                "type" => "colorpicker",
                "heading" => "分隔颜色",
                "param_name" => "separator_color",
                "description" => "",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
			array(
				"type" => "textfield",
				"heading" => "分隔透明度",
				"param_name" => "separator_transparency",
				"description" => "值需要在0和1之间",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__('Element Appearance', 'qode'),
				"param_name" => "element_appearance",
				"description" => esc_html__('Set distance (related to browser bottom) to start the animation', 'qode')
			)
		)
) );

// Cover Boxes
vc_map( array(
		"name" => "封面框",
		"base" => "cover_boxes",
		'admin_enqueue_css' => array(get_template_directory_uri().'/css/admin/vc-extend.css'),
		"icon" => "extended-custom-icon-qode icon-wpb-cover_boxes",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array(
                "type" => "textfield",
                "heading" => "激活元素",
                "param_name" => "active_element",
                "value" => "",
				'admin_label' => true
            ),
			array(
				"type" => "attach_image",
				"heading" => "图片 1",
				"param_name" => "image1",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "标题 1",
				"param_name" => "title1",
				"value" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "标题颜色1",
				"param_name" => "title_color1",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "文字1",
				"param_name" => "text1",
				"value" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "文字颜色1",
				"param_name" => "text_color1",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "链接1",
				"param_name" => "link1",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "链接标签1",
				"param_name" => "link_label1",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "目标1",
				"param_name" => "target1",
				"value" => array(
					"自身" => "_self",
					"新页面" => "_blank",
					"父级" => "_parent",	
					"顶级" => "_top"	
				),
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "attach_image",
				"heading" => "图片2",
				"param_name" => "image2",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "标题2",
				"param_name" => "title2",
				"value" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "标题颜色2",
				"param_name" => "title_color2",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "文字2",
				"param_name" => "text2",
				"value" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "文字颜色2",
				"param_name" => "text_color2",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "链接2",
				"param_name" => "link2",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "链接标签2",
				"param_name" => "link_label2",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "打开方式2",
				"param_name" => "target2",
				"value" => array(
					"自身" => "_self",
					"新页面" => "_blank",
					"父级" => "_parent",	
					"顶级" => "_top"	
				),
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "attach_image",
				"heading" => "图片3",
				"param_name" => "image3",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "标题3",
				"param_name" => "title3",
				"value" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "标题颜色3",
				"param_name" => "title_color3",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "文字3",
				"param_name" => "text3",
				"value" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "文字颜色3",
				"param_name" => "text_color3",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "链接3",
				"param_name" => "link3",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "链接标签3",
				"param_name" => "link_label3",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "打开方式3",
				"param_name" => "target3",
				"value" => array(
					"自身" => "_self",
					"新页面" => "_blank",
					"目标" => "_parent",	
					"顶级" => "_top"	
				),
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "阅读更多按钮样式",
				"param_name" => "read_more_button_style",
				"value" => array(
					"默认" => "",
					"否" => "no",
					"是" => "yes"
				),
				"description" => ""
			)
		)
) );

// Custom Font
vc_map( array(
		"name" => "自定义字体",
		"base" => "custom_font",
		"icon" => "extended-custom-icon-qode icon-wpb-custom_font",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "字体系列",
				"param_name" => "font_family",
				"value" => "",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "字体大小",
				"param_name" => "font_size",
				"value" => "15",
				'save_always' => true,
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "行高",
				"param_name" => "line_height",
				"value" => "26",
				'save_always' => true,
				'admin_label' => true
			),
			array(
				"type" => "dropdown",
				"heading" => "字体样式",
				"param_name" => "font_style",
				"value" => array(
					"正常" => "normal",
					"斜体" => "italic"	
				),
				'save_always' => true,
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "dropdown",
				"heading" => "文字对齐",
				"param_name" => "text_align",
				"value" => array(
					"左" => "left",
					"中" => "center",
					"右" => "right"	
				),
				'save_always' => true,
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "字体粗细",
				"param_name" => "font_weight",
				"value" => "300",
				'save_always' => true,
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "颜色",
				"param_name" => "color",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "dropdown",
				"heading" => "文字修饰",
				"param_name" => "text_decoration",
				"value" => array(
					"无" => "none",
					"下划线" => "underline",
					"上划线" => "overline",
					"线通过" => "line-through"	
				),
				'save_always' => true,
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "dropdown",
				"heading" => "文字阴影",
				"param_name" => "text_shadow",
				"value" => array(
					"否" => "no",
					"是" => "yes"
				),
				'save_always' => true,
				"description" => ""
			),
            array(
                "type" => "textfield",
                "heading" => "字符间距 (px)",
                "param_name" => "letter_spacing",
                "value" => "",
				'admin_label' => true
            ),
			array(
				"type" => "colorpicker",
				"heading" => "背景颜色",
				"param_name" => "background_color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "填充 (px)",
				"param_name" => "padding",
				"value" => "0"
			),
			array(
				"type" => "textfield",
				"heading" => "边距 (px)",
				"param_name" => "margin",
				"value" => "0"
			),
			array(
				"type" => "colorpicker",
				"heading" => "边框颜色",
				"param_name" => "border_color",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "边框宽度 (px)",
				"param_name" => "border_width",
				"value" => "",
				"description" => "只输入数字，忽略px"
			),
			array(
				"type" => "textarea_html",
				"heading" => "内容",
				"param_name" => "content",
				"value" => "<p>这里是四亩地内容</p>",
				"description" => "",
				'admin_label' => true
			)
		)
) );

/*** Google Map ***/
vc_map( array(
	"name" => "谷歌地图",
	"base" => "qode_google_map",
	"icon" => "extended-custom-icon-qode icon-wpb-google-map",
	"category" => '主题自带',
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type"			=> "textfield",
			"heading" => "地址1",
			"param_name"	=> "address1",
			"admin_label"	=> true
		),
		array(
			"type"			=> "textfield",
			"heading" => "地址2",
			"param_name"	=> "address2",
			"admin_label"	=> true
		),
		array(
			"type"			=> "textfield",
			"heading" => "地址3",
			"param_name"	=> "address3",
			"admin_label"	=> true
		),
		array(
			"type"			=> "textfield",
			"heading" => "地址4",
			"param_name"	=> "address4",
			"admin_label"	=> true
		),
		array(
			"type"			=> "textfield",
			"heading" => "地址5",
			"param_name"	=> "address5",
			"admin_label"	=> true
		),
		array(
			"type"			=> "textfield",
			"heading"		=> "地图高度",
			"param_name"	=> "map_height",
			"admin_label"	=> true
		),
		array(
			"type"			=> "attach_image",
			"heading"		=> "针",
			"param_name"	=> "pin",
			"description" => "选择在谷歌地图上使用的针图片"
		),
		array(
			"type"			=> "dropdown",
			"heading"		=> "自定义地图样式",
			"param_name"	=> "custom_map_style",
			"value"			=> array(
				"否" => "false",
				"是" => "true"
			),
			'save_always'	=> true,
			"description" => "启用此选项将允许样式化地图"
		),
		array(
			"type"			=> "colorpicker",
			"heading"		=> "颜色叠加",
			"param_name"	=> "color_overlay",
			"description" => "选择地图颜色叠加",
			"dependency"	=> array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type"			=> "textfield",
			"heading"		=> "饱和",
			"param_name"	=> "saturation",
			"description" => "选择饱和度级别（-100=最少饱和，100=最多饱和）",
			"dependency"	=> array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type"			=> "textfield",
			"heading" => "亮度",
			"param_name"	=> "lightness",
			"description" => "选择亮度级别（-100=最暗，100=最亮）",
			"dependency"	=> array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type"			=> "textfield",
			"heading"		=> "地图缩放",
			"param_name"	=> "zoom",
			"description" => "入一个变焦倍数谷歌地图（0 =整个世界，19 =个别建筑物）"
		),
		array(
			"type"			=> "dropdown",
			"heading"		=> "鼠标滚轮放大地图",
			"param_name"	=> "google_maps_scroll_wheel",
			"value"			=> array(
				"No" => "false",
				"Yes" => "true"
			),
			'save_always'	=> true,
			"description" => "启用此选项将允许用户使用鼠标滚轮缩放地图"
		)
	)
));

// Icon
vc_map( array(
		"name" => "图标",
		"base" => "icons",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-icons",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
            $qodeIconCollections->getVCParamsArray(),
            array(
                array(
                    "type" => "dropdown",
                    "heading" => "大小",
                    "param_name" => "size",
                    "value" => array(
                        "很小" => "fa-lg",
                        "小" => "fa-2x",
                        "中" => "fa-3x",
                        "大" => "fa-4x",
                        "很大" => "fa-5x"
                    ),
					'save_always' => true,
                    "admin_label" => ""
                ),
                array(
                    "type" => "dropdown",
                    "heading" => "类型",
                    "param_name" => "type",
                    "value" => array(
                        "正常" => "normal",
                        "圆" => "circle",
                        "方" => "square"
                    ),
					'save_always' => true,
					"admin_label" => ""
                ),
                array(
                    "type" => "textfield",
                    "heading" => "自定义大小 (px)",
                    "param_name" => "custom_size",
                    "value" => ""
                ),
                array(
                    "type" => "textfield",
                    "heading" => "自定义形状大小 (px)",
                    "param_name" => "custom_shape_size",
                    "value" => "",
                    "dependency" => array("element" => "type", "value" => array("circle", "square"))
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => "图标颜色",
                    "param_name" => "icon_color",
                    "description" => ""
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => "图标悬停颜色",
                    "param_name" => "icon_hover_color",
                    "description" => ""
                ),
                array(
                    "type" => "textfield",
                    "heading" => "边框半径（px）",
                    "param_name" => "border_radius",
                    "value" => "",
                    "dependency" => array("element" => "type", "value" => array("square"))
                ),
                array(
                    "type" => "dropdown",
                    "heading" => "位置",
                    "param_name" => "position",
                    "value" => array(
                        "正常" => "",
                        "左" => "left",
                        "中" => "center",
                        "右" => "right"
                    ),
                    "description" => ""
                ),
                array(
                    "type" => "dropdown",
                    "heading" => "边框",
                    "param_name" => "border",
                    "value" => array(
                        "是" => "yes",
                        "否" => "no"
                    ),
					'save_always' => true,
                    "description" => "",
                    "dependency" => Array('element' => "type", 'value' => array('square'))
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => "边框颜色",
                    "param_name" => "border_color",
                    "description" => "仅方形类型",
                    "dependency" => Array('element' => "type", 'value' => array('square'))
                ),
                array(
                    "type" => "textfield",
                    "heading" => "边框宽度(px)",
                    "param_name" => "border_width",
                    "description" => "仅方形类型",
                    "dependency" => Array('element' => "type", 'value' => array('square'))
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => "背景颜色",
                    "param_name" => "background_color",
                    "description" => "",
                    "dependency" => array("element" => "type", "value" => array("circle", "square"))
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => "悬停背景颜色",
                    "param_name" => "hover_background_color",
                    "description" => "",
                    "dependency" => array("element" => "type", "value" => array("circle", "square"))
                ),
                array(
                    "type" => "textfield",
                    "heading" => "边距",
                    "param_name" => "margin",
                    "description" => "边距（上右下左）"
                ),
                array(
                    "type" => "dropdown",
                    "heading" => "图标动画",
                    "param_name" => "icon_animation",
                    "value" => array(
                        "No" => "",
                        "Yes" => "q_icon_animation"
                    ),
                    "description" => ""
                ),
                array(
                    "type" => "textfield",
                    "heading" => "图标动画延迟(ms)",
                    "param_name" => "icon_animation_delay",
                    "value" => "",
                    "description" => ""
                ),
                array(
                    "type" => "textfield",
                    "heading" => "链接",
                    "param_name" => "link",
                    "value" => ""
                ),
				array(
					"type" => "checkbox",
					"heading" => "使用链接作为锚",
					"value" => array("Use this icon as Anchor?" => "yes"),
					"param_name" => "anchor_icon",
					"description" => "选中此框以使用图标为锚链接（例如#about）",
					"dependency" => Array('element' => "link", 'not_empty' => true)
				),
                array(
                    "type" => "dropdown",
                    "heading" => "打开方式",
                    "param_name" => "target",
                    "value" => array(
                        "自身" => "_self",
                        "新窗口" => "_blank",
                        "父级" => "_parent"
                    ),
					'save_always' => true,
                    "description" => ""
                )
            )
        )
) );

/*** Icon List Item ***/
vc_map( array(
		"name" => "图标列表项目",
		"base" => "icon_list_item",
		"icon" => "extended-custom-icon-qode icon-wpb-icon_list_item",
		"category" => '主题自带',
		"params" =>  array_merge(
			$qodeIconCollections->getVCParamsArray(),
			array(
            array(
                "type" => "dropdown",
                "heading" => "图标类型",
                "param_name" => "icon_type",
                "value" => array(
                    "圈"        => "circle",
                    "透明"   => "transparent"
                ),
				'save_always' => true
            ),
			array(
				"type" => "textfield",
				"heading" => "图标大小",
				"param_name" => "icon_size"
			),
			array(
				"type" => "colorpicker",
				"heading" => "图标颜色",
				"param_name" => "icon_color"
			),
			array(
				"type" => "colorpicker",
				"heading" => "图标背景颜色",
				"param_name" => "icon_background_color",
                "dependency" => array('element' => "icon_type", 'value' => array('circle'))
			),
			array(
				"type" => "colorpicker",
				"heading" => "图标边框颜色",
				"param_name" => "icon_border_color",
                "dependency" => array('element' => "icon_type", 'value' => array('circle'))
			),
			array(
				"type" => "textfield",
				"heading" => "标题",
				"param_name" => "title",
				"admin_label" => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "标题颜色",
				"param_name" => "title_color"
			),
            array(
                "type" => "textfield",
                "heading" => "标题大小 (px)",
                "param_name" => "title_size"
            ),
			array(
				"type" => "dropdown",
				"heading" => "标题字体粗细",
				"param_name" => "title_font_weight",
				"value" => $font_weight_array
			),
			array(
				"type" => "textfield",
				"heading" => "下边距 (px)",
				"param_name" => "margin_bottom"
			),
		))
) );

// Icon with Text
vc_map( array(
		"name" => "图标带文字",
		"base" => "icon_text",
		"icon" => "extended-custom-icon-qode icon-wpb-icon_text",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
            array(
                array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "class" => "",
                    "heading" => "框类型",
                    "param_name" => "box_type",
                    "value" => array(
                        "正常" => "normal",
                        "框内图标" => "icon_in_a_box"
                    ),
					'save_always' => true,
                    "description" => ""
                ),
                array(
                    "type" => "colorpicker",
                    "holder" => "div",
                    "class" => "",
                    "heading" => "框边框颜色",
                    "param_name" => "box_border_color",
                    "description" => "",
                    "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                ),
                array(
                    "type" => "colorpicker",
                    "holder" => "div",
                    "class" => "",
                    "heading" => "框背景颜色",
                    "param_name" => "box_background_color",
                    "description" => "",
                    "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                )
            ),
        $qodeIconCollections->getVCParamsArray(),
        array(
            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => "图片",
                "param_name" => "image"
            ),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "图标类型",
				"param_name" => "icon_type",
				"value" => array(
					"正常" => "normal",
					"圆" => "circle",
					"方" => "square"	
				),
				'save_always' => true,
				"description" => ""
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "图标/图片位置",
                "param_name" => "icon_position",
                "value" => array(
                    "上" => "top",
                    "左" => "left",
                    "标题从左" => "left_from_title",
                    "右" => "right"
                ),
				'save_always' => true,
                "description" => "图标位置（仅正常框类型）",
                "dependency" => Array('element' => "box_type", 'value' => array('normal'))
            ),
			array(
				"type" => "dropdown",
				"heading" => "内容对齐方式",
				"param_name" => "content_alignment",
				"value" => array(
					"中" => "center",
					"左" => "left",
					"右" => "right"
				),
				"dependency" => array('element' => "icon_position", 'value' => array('top'))
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => "图标边距",
                "param_name" => "icon_margin",
                "value" => "",
                "description" => "边距需要设置为上右下左格式",
                "dependency" => array('element' => "icon_position", 'value' => array('top'))
            ),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "图标大小",
				"param_name" => "icon_size",
				"value" => array(
					"细" => "fa-lg",
					"小" => "fa-2x",
					"中" => "fa-3x",	
					"大" => "fa-4x",
					"非常大" => "fa-5x"	
				),
				'save_always' => true,
				"description" => ""
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "使用自定义图标大小",
                "param_name" => "use_custom_icon_size",
                "value" => array(
                    "否" => "no",
                    "是" => "yes"
                ),
				'save_always' => true,
                "description" => __("如果你想使用自定义图标大小和边距，选择是")
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "自定义图标大小（px）",
				"param_name" => "custom_icon_size",
				"value" => "",
                "description" => __("只输入数字，忽略px"),
                "dependency" => array('element' => "use_custom_icon_size", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "自定义圆和方内图标大小（px）",
				"param_name" => "custom_icon_size_inner",
				"value" => "",
				"description" => __("只输入数字，忽略px。仅适用于圆或方图标类型"),
				"dependency" => array('element' => 'use_custom_icon_size', 'value' => array('yes'))
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => "自定义图标边距 (px)",
                "param_name" => "custom_icon_margin",
                "value" => "",
                "description" => __("图标和文字之间的间距（左图标/边距位置）。仅仅输入数字，省略PX"),
                "dependency" => array('element' => "use_custom_icon_size", 'value' => array('yes'))
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "图标边框颜色",
				"param_name" => "icon_border_color",
				"description" => "仅为方和圆类型",
				"dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "图标颜色",
				"param_name" => "icon_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "图标悬停颜色",
				"param_name" => "icon_hover_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "图标背景颜色",
				"param_name" => "icon_background_color",
				"description" => "图标背景颜色（仅为方和圆图标类型）",
				"dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "图标悬停背景颜色",
				"param_name" => "icon_hover_background_color",
				"description" => "图标悬停背景颜色（仅为方和圆图标类型）",
				"dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "图标动画",
                "param_name" => "icon_animation",
                "value" => array(
                    "否" => "",
                    "是" => "q_icon_animation"
                ),
                "description" => ""
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => "图标动画延迟 (ms)",
                "param_name" => "icon_animation_delay",
                "value" => "",
                "description" => "",
                "dependency" => Array('element' => "icon_animation", 'value' => array('q_icon_animation'))
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "标题",
				"param_name" => "title",
				"value" => ""
			),
            array(
				"type" => "dropdown",
				"class" => "",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",	
					"h5" => "h5",	
					"h6" => "h6",	
				),
				"description" => ""
            ),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "标题颜色",
				"param_name" => "title_color",
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => "标题字体粗细",
				"param_name" => "title_font_weight",
				"value" => array(
					"默认" 			=> "",
					"细 100"			=> "100",
					"超浅 200" 	=> "200",
					"浅 300"			=> "300",
					"正常 400"		=> "400",
					"中 500"		=> "500",
					"半粗 600"		=> "600",
					"粗 700"			=> "700",
					"超粗 800"	=> "800",
					"极粗 900"	=> "900"
					),
				"description" => ""
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "分隔符",
                "param_name" => "separator",
                "value" => array(
                    "否" => "no",
                    "是" => "yes"
                ),
                'save_always' => true,
                "description" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => "分隔符颜色",
                "param_name" => "separator_color",
                "description" => "",
                "dependency" => Array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => "分隔上边距",
                "param_name" => "separator_top_margin",
                "value" => ""
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => "分隔下边距",
                "param_name" => "separator_bottom_margin",
                "value" => ""
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => "分隔宽度",
                "param_name" => "separator_width",
                "value" => ""
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "文字",
				"param_name" => "text",
				"value" => ""
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "文字颜色",
				"param_name" => "text_color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "链接",
				"param_name" => "link",
				"value" => "",
				"dependency" => Array('element' => "box_type", 'value' => array('normal'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "链接文字",
				"param_name" => "link_text",
				"value" => "",
				"dependency" => Array('element' => "box_type", 'value' => array('normal'))
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "链接颜色",
				"param_name" => "link_color",
				"description" => "",
				"dependency" => Array('element' => "box_type", 'value' => array('normal'))
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => "目标",
				"param_name" => "target",
				"value" => array(
                    ""   => "",
					"自身" => "_self",
					"新窗口" => "_blank",
					"父级" => "_parent",
				),
				"description" => "",
				"dependency" => Array('element' => "box_type", 'value' => array('normal'))
            ),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "链接图标",
				"param_name" => "link_icon",
				"value" => array(
					'' => '',
					'是' => 'yes',
					'否' => 'no'
				)
			)
        )
		)
) );

// Image hover
vc_map( array(
		"name" => "图片悬停",
		"base" => "image_hover",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-image_hover",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "attach_image",
				"heading" => "图片",
				"param_name" => "image",
				'admin_label' => true
			),
			array(
				"type" => "attach_image",
				"heading" => "悬停图片",
				"param_name" => "hover_image",
				'admin_label' => true
			),
            array(
				"type" => "textfield",
				"heading" => "链接",
				"param_name" => "link",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "dropdown",
				"heading" => "打开方式",
				"param_name" => "target",
				"description" => "",
                "value" => array(
                    "自身" => "_self",
                    "新窗口" => "_blank",
                    "父级" => "_parent"
                ),
				'save_always' => true
			),
            array(
				"type" => "dropdown",
				"heading" => "动画",
				"param_name" => "animation",
				"description" => "",
                "value" => array(
                    "" => "",
                    "是" => "yes",
                    "否" => "no"
                )
			),
            array(
				"type" => "textfield",
				"heading" => "过渡延迟",
				"param_name" => "transition_delay",
				"description" => "",
                "dependency" => array('element' => "animation", 'value' => array("yes"))
			)
		)
) );

// Image with text 
vc_map( array(
		"name" => "图片带文字",
		"base" => "image_with_text",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-image_with_text",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "attach_image",
				"heading" => "图片",
				"param_name" => "image",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "标题",
				"param_name" => "title",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "标题颜色",
				"param_name" => "title_color",
				"description" => ""
			),
            array(
				"type" => "dropdown",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",	
					"h5" => "h5",	
					"h6" => "h6",	
				),
				"description" => ""
            ),
			array(
				"type" => "textarea_html",
				"heading" => "内容",
				"param_name" => "content",
				"value" => "<p>"."我是图片带文字简码测试文字."."</p>",
				"description" => "",
				'admin_label' => true
			)
		)
) );

// Image with text over
vc_map( array(
		"name" => "文字在图片上",
		"base" => "image_with_text_over",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-image_with_text_over",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"heading" => "宽度",
				"param_name" => "layout_width",
				"value" => array(
                    ""   => "",
                    "1/2" => "one_half",
					"1/3" => "one_third",
					"1/4" => "one_fourth",
				),
				"description" => ""
            ),
			array(
				"type" => "attach_image",
				"heading" => "图片",
				"param_name" => "image",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "图像着色颜色",
				"param_name" => "image_shader_color",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "图像着色器悬停颜色",
				"param_name" => "image_shader_hover_color"
			),
			array(
				"type" => "dropdown",
				"heading" => "图标",
				"param_name" => "icon",
				"value" => $icons,
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "图标大小",
				"param_name" => "icon_size",
				"value" => array(
                    "很小" => "fa-lg",
                    "小" => "fa-2x",
                    "中" => "fa-3x",    
                    "大" => "fa-4x",
					"很大" => "fa-5x"
				),
				'save_always' => true,
				"description" => ""
            ),
			array(
				"type" => "colorpicker",
				"heading" => "图标颜色",
				"param_name" => "icon_color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "标题",
				"param_name" => "title",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "标题颜色",
				"param_name" => "title_color",
				"description" => ""
			),
            array(
				"type" => "textfield",
				"heading" => "标题大小 (px)",
				"param_name" => "title_size",
				"description" => ""
			),
            array(
				"type" => "dropdown",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",	
					"h5" => "h5",	
					"h6" => "h6",	
				),
				"description" => ""
            ),
			array(
				"type" => "textarea_html",
				"heading" => "内容",
				"param_name" => "content",
				"value" => "<p>"."我是图片带文字简码测试文字."."</p>",
				"description" => "",
				'admin_label' => true
			)
		)
) );

// Text marquee
vc_map( array(
		"name" => "文字滚动字幕",
		"base" => "text_marquee",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-text-marquee",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "标题",
				"param_name" => "title",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "标题颜色",
				"param_name" => "title_color",
				"description" => ""
			)
		)
) );

//Expanding Images
vc_map( array(
	'name' => '展开图片',
	'base' => 'expanding_images',
	'category' => '主题自带',
	'icon' => 'extended-custom-icon-qode icon-wpb-expanding-images',
	"allowed_container_element" => 'vc_row',
	'params' => array(
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__('Choose Frame', 'qode'),
			'param_name' => 'frame',
			'value'      => array(
				esc_html__('Standard', 'qode')	=> 'standard',
				esc_html__('Jungle', 'qode')	=> 'jungle'
			)
		),
		array(
			'type'			=> 'attach_image',
			'heading'		=> '主角图片',
			'param_name'	=> 'hero_image',
			'description'	=> '此图片将在平板框内设置.'
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '链接',
			'param_name'	=> 'link',
			'description'	=> '输入外部URL链接。',
			'admin_label'	=> true
		),
		array(
		    'type'       => 'dropdown',
		    'heading'    => '打开方式',
		    'param_name' => 'target',
		    'value'      => array(
		        ''      => '',
		        'Self'  => '_self',
		        'Blank' => '_blank'
		    ),
		    'dependency' => array('element' => 'link', 'not_empty' => true),
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '标题',
			'param_name'	=> 'title',
			'description'	=> '主角图片标题.',
		    'dependency' => array('element' => 'link', 'not_empty' => true),
			'admin_label'	=> true
		),
		array(
			'type'			=> 'attach_image',
			'heading'		=> '侧面图片 1',
			'param_name'	=> 'side_image_1',
			'description'	=> '此图片将在平板框左上角旁边设置.',
			'group'			=> '内侧图片'
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '侧面图片 1 链接',
			'param_name'	=> 'side_image_1_link',
		    'dependency' => array('element' => 'side_image_1', 'not_empty' => true),
			'group'			=> '内侧图片'
		),
		array(
			'type'			=> 'attach_image',
			'heading'		=> '侧面图片 2',
			'param_name'	=> 'side_image_2',
			'description'	=> '此图片将在平板框左下角旁边设置.',
			'group'			=> '内侧图片'
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '侧面图片 2 链接',
			'param_name'	=> 'side_image_2_link',
		    'dependency' => array('element' => 'side_image_2', 'not_empty' => true),
			'group'			=> '内侧图片'
		),
		array(
			'type'			=> 'attach_image',
			'heading'		=> '侧面图片 3',
			'param_name'	=> 'side_image_3',
			'description'	=> '此图片将在平板框右上角旁边设置.',
			'group'			=> '内侧图片'
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '侧面图片 3 链接',
			'param_name'	=> 'side_image_3_link',
		    'dependency' => array('element' => 'side_image_3', 'not_empty' => true),
			'group'			=> '内侧图片'
		),
		array(
			'type'			=> 'attach_image',
			'heading'		=> '侧面图片 4',
			'param_name'	=> 'side_image_4',
			'description'	=> '此图片将在平板框右下角旁边设置.',
			'group'			=> 'Inner Side Images'
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '侧面图片 4 链接',
			'param_name'	=> 'side_image_4_link',
		    'dependency' => array('element' => 'side_image_4', 'not_empty' => true),
			'group'			=> '内侧图片'
		),
		array(
			'type'			=> 'attach_image',
			'heading'		=> '侧面图片 5',
			'param_name'	=> 'side_image_5',
			'description'	=> '此图片将在整个栏目左上角设置.',
			'group'			=> '外侧图片'
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '侧面图片 5 链接',
			'param_name'	=> 'side_image_5_link',
		    'dependency' => array('element' => 'side_image_5', 'not_empty' => true),
			'group'			=> '外侧图片'
		),
		array(
			'type'			=> 'attach_image',
			'heading'		=> '侧面图片 6',
			'param_name'	=> 'side_image_6',
			'description'	=> '此图片将在整个栏目左下角设置.',
			'group'			=> '外侧图片'
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '侧面图片 6 链接',
			'param_name'	=> 'side_image_6_link',
		    'dependency' => array('element' => 'side_image_6', 'not_empty' => true),
			'group'			=> '外侧图片'
		),
		array(
			'type'			=> 'attach_image',
			'heading'		=> '侧面图片 7',
			'param_name'	=> 'side_image_7',
			'description'	=> '此图片将在整个栏目右上角设置.',
			'group'			=> '外侧图片'
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '侧面图片 7 链接',
			'param_name'	=> 'side_image_7_link',
		    'dependency' => array('element' => 'side_image_7', 'not_empty' => true),
			'group'			=> '外侧图片'
		),
		array(
			'type'			=> 'attach_image',
			'heading'		=> '侧面图片 8',
			'param_name'	=> 'side_image_8',
			'description'	=> '此图片将在整个栏目右下角设置.',
			'group'			=> '外侧图片'
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '侧面图片 8 链接',
			'param_name'	=> 'side_image_8_link',
		    'dependency' => array('element' => 'side_image_8', 'not_empty' => true),
			'group'			=> '外侧图片'
		),
	)
));

/*** Latest Posts ***/
vc_map( array(
		"name" => "最新文章",
		"base" => "latest_post",
		"icon" => "extended-custom-icon-qode icon-wpb-latest_post",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"heading" => __("类型", 'qode'),
				"param_name" => "type",
				"value" => array(
					"图片在左框" => "image_in_box",
					"最小" => "minimal",
					"框" => "boxes",
					"框带分隔" => "dividers"
				),
				'save_always' => true,
				"admin_label" => true
			),
            array(
                "type" => "textfield",
                "heading" => "文章数量",
                "param_name" => "number_of_posts",
				"admin_label" => true,
                "dependency" => Array('element' => "type", 'value' => array('date_in_box', 'image_in_box', 'minimal'))
            ),
            array(
                "type" => "dropdown",
                "heading" => "列数",
                "param_name" => "number_of_colums",
                "value" => array(
					"二" => "2",
					"三" => "3",
					"四" => "4"
				),
				'save_always' => true,
				"admin_label" => true,
                "dependency" => Array('element' => "type", 'value' => array('boxes','dividers'))
            ),
            array(
                "type" => "dropdown",
                "heading" => "行数",
                "param_name" => "number_of_rows",
                "value" => array(
					"一"   => "1",
					"二"   => "2",
					"三" => "3",
					"四"  => "4",
					"五"  => "5"
				),
				'save_always' => true,
                "description" => "",
                "dependency" => Array('element' => "type", 'value' => array('boxes','dividers'))
            ),	
			array(
                "type" => "dropdown",
                "heading" => "文字来自边缘",
                "param_name" => "text_from_edge",
                "value" => array(
					"默认" => "",
					"否" => "no",
					"是" => "yes"
				),
                "description" => "",
                "dependency" => Array('element' => "type", 'value' => array('boxes'))
            ),
			array(
				"type" => "dropdown",
				"heading" => "排序方式",
				"param_name" => "order_by",
				"value" => array(
					"标题" => "title",
					"日期" => "date"
				),
				'save_always' => true,
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => "顺序",
				"param_name" => "order",
				"value" => array(
					"升序" => "ASC",
					"降序" => "DESC"
				),
				'save_always' => true,
				"admin_label" => true
			),
			array(
				"type" => "textfield",
				"heading" => "分类别名",
				"param_name" => "category",
				"description" => "为所有留空，或为列表使用逗号",
				"admin_label" => true
			),
			array(
				"type" => "textfield",
				"heading" => "文字长度",
				"param_name" => "text_length",
				"description" => "字数"
			),
            array(
				"type" => "dropdown",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",	
					"h5" => "h5",	
					"h6" => "h6",	
				)
            ),
			array(
				"type" => "dropdown",
				"heading" => "显示分类",
				"param_name" => "display_category",
				"value" => array(
					"默认" => "",
					"是" => "1",
					"否" => "0"
				)
			),
			array(
				"type" => "dropdown",
				"heading" => "显示日期",
				"param_name" => "display_time",
				"value" => array(
				    "默认" => "",
					"是" => "1",
					"否" => "0"
				),
				"dependency" => array('element' => 'type', 'value' => array("image_in_box","boxes","minimal"))
			),
			array(
				"type" => "dropdown",
				"heading" => "显示评论",
				"param_name" => "display_comments",
				"value" => array(
				    "默认" => "",
					"是" => "1",
					"否" => "0"
				)
			),
			array(
				"type" => "dropdown",
				"heading" => "显示赞",
				"param_name" => "display_like",
				"value" => array(
				    "默认" => "",
					"是" => "1",
					"否" => "0"
				)
			),
			array(
				"type" => "dropdown",
				"heading" => "显示分享",
				"param_name" => "display_share",
				"value" => array(
				    "默认" => "",
					"是" => "1",
					"否" => "0"
				)
			)
		)
) );

/*** Latest Posts 2 ***/
vc_map( array(
		"name" => "最新文章2",
		"base" => "latest_post_two",
		"icon" => "extended-custom-icon-qode icon-wpb-latest_post_two",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array(
                "type" => "textfield",
                "heading" => "文章数量",
                "param_name" => "number_of_posts",
                "admin_label" => true
            ),
            array(
                "type" => "dropdown",
                "heading" => "列数",
                "param_name" => "number_of_columns",
                "value" => array(
					"一"   => "1",
					"二"   => "2",
					"三" => "3",
					"四"  => "4"
				),
				'save_always' => true,
				"admin_label" => true
            ),
			array(
				"type" => "dropdown",
				"heading" => "排序方式",
				"param_name" => "order_by",
				"value" => array(
					"标题" => "title",
					"日期" => "date"
				),
				'save_always' => true,
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => "顺序",
				"param_name" => "order",
				"value" => array(
					"升序" => "ASC",
					"降序" => "DESC"
				),
				'save_always' => true,
				"admin_label" => true
			),
			array(
				"type" => "textfield",
				"heading" => "分类别名",
				"param_name" => "category",
				"description" => "为所有留空或为列表使用逗号"
			),
			array(
				"type" => "textfield",
				"heading" => "文字长度",
				"param_name" => "text_length",
				"description" => "字符数"
			),
            array(
				"type" => "dropdown",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",	
					"h5" => "h5",	
					"h6" => "h6",	
				)
            ),
            array(
				"type" => "dropdown",
				"heading" => "显示特色图片",
				"param_name" => "display_featured_images",
				"value" => array(
					"否" => "no",
					"是" => "yes"
				),
				'save_always' => true
			),
			array(
				"type" => "dropdown",
				"heading" => "图片大小",
				"param_name" => "featured_image_size",
				"value" => array(
					"默认" => "",
					"完整" => "full",
					"横向" => "landscape",
					"竖向" => "portrait",
					"自定义" => "custom"
				),
				"dependency" => array('element' => 'display_featured_images','value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"heading" => "图片宽度 (px)",
				"param_name" => "image_width",
				"value" => "",
				"description" => "设置图片自定义宽度",
				"dependency" => array('element' => 'featured_image_size','value' => array('custom'))
			),
			array(
				"type" => "textfield",
				"heading" => "图片高度 (px)",
				"param_name" => "image_height",
				"value" => "",
				"description" => "设置图片自定义高度",
				"dependency" => array('element' => 'featured_image_size','value' => array('custom'))
			),
            array(
				"type" => "colorpicker",
				"heading" => "标题颜色",
				"param_name" => "title_color",
				"group" => '设计选项'
			),
			array(
				"type" => "colorpicker",
				"heading" => "分隔颜色",
				"param_name" => "separator_color",
				"description" => "",
				"group" => '设计选项'
			),
			array(
				"type" => "dropdown",
				"heading" => "分隔渐变",
				"param_name" => "separator_gradient",
				"value" => array(
					"否"	=> "no",
					"是"	=> "yes"
				),
				"group" => '设计选项'
			),
			array(
				"type" => "colorpicker",
				"heading" => "摘要颜色",
				"param_name" => "excerpt_color",
				"description" => "",
				"group" => '设计选项'
			),
			array(
				"type" => "colorpicker",
				"heading" => "文章信息颜色",
				"param_name" => "post_info_color",
				"description" => "",
				"group" => '设计选项'
			),
			array(
				"type" => "colorpicker",
				"heading" => "文章信息分隔颜色",
				"param_name" => "post_info_separator_color",
				"description" => "",
				"group" => '设计选项'
			),
			array(
				"type" => "colorpicker",
				"heading" => "背景颜色",
				"param_name" => "background_color",
				"description" => "",
				"group" => '设计选项'
			)
		)
) );

// Line Graph shortcode
vc_map( array(
		"name" => "线形图",
		"base" => "line_graph",
		"icon" => "extended-custom-icon-qode icon-wpb-line_graph",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"heading" => "类型",
				"param_name" => "type",
				"value" => array(
					"" => "",
					"圆边" => "rounded",
					"锐边" => "sharp"	
				),
				"save_always" => true,
				"admin_label" => true
			),
			array(
				"type" => "textfield",
				"heading" => "宽度",
				"param_name" => "width",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "高度",
				"param_name" => "height",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "自定义颜色",
				"param_name" => "custom_color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "比例度量",
				"param_name" => "scale_steps",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "比例度量宽度",
				"param_name" => "scale_step_width",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "标签",
				"param_name" => "labels",
				"value" => "Label 1, Label 2, Label 3",
				"save_always" => true
			),
			array(
				"type" => "textarea_html",
				"heading" => "内容",
				"param_name" => "content",
				"value" => "#1abc9c,Legend One,1,5,10;#5ed0ba,Legend Two,3,7,20;#8cddcd,Legend Three,10,2,34",
				"save_always" => true,
				"description" => ""
			)
		)
) );

// List - Ordered
vc_map( array(
		"name" => "列表 - 有序",
		"base" => "ordered_list",
		"icon" => "extended-custom-icon-qode icon-wpb-ordered_list",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "内容",
				"param_name" => "content",
				"value" => "<ol><li>这里是列表</li><li>这里是列表</li><li>这里是列表</li></ol>",
				"description" => ""
			)

		)
) );

// List - Unordered
vc_map( array(
		"name" => "列表 - 无序",
		"base" => "unordered_list",
		"icon" => "extended-custom-icon-qode icon-wpb-unordered_list",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"heading" => "风格",
				"param_name" => "style",
				"value" => array(
					"圈" => "circle",
					"数字" => "number"
				),
				'save_always' => true,
				"admin_label" => true
			),
            array(
                "type" => "dropdown",
				"heading" => "数字类型",
				"param_name" => "number_type",
				"value" => array(
					"圈" => "circle_number",
					"透明" => "transparent_number"
				),
				'save_always' => true,
				"description" => "",
                "dependency" => array('element' => "style", 'value' => array('number'))
			),
			array(
				"type" => "dropdown",
				"heading" => "动画列表",
				"param_name" => "animate",
				"value" => array(
					"否" => "no",
					"是" => "yes"
				),
				'save_always' => true,
				"description" => ""
			),
            array(
				"type" => "dropdown",
				"heading" => "字体粗细",
				"param_name" => "font_weight",
				"value" => array(
                    "默认" => "",
					"细" => "light",
					"正常" => "normal",
                    "粗" => "bold"
				),
				"description" => ""
			),
			array(
				"type" => "textarea_html",
				"heading" => "内容",
				"param_name" => "content",
				"value" => "<ul><li>这里是列表</li><li>这里是列表</li><li>这里是列表</li></ul>",
				"description" => ""
			)
		)
) );

//Masonry Gallery
vc_map( array(
		"name" => "切片相册",
		"base" => "qode_masonry_gallery",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-masonry_gallery",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "分类",
				"param_name" => "category",
				"value" => "",
				"description" => "分类别名（为所有留空）"
			),
			array(
				"type" => "textfield",
				"heading" => "数量",
				"param_name" => "number",
				"value" => "",
				"description" => "切片相册项目数量"
			),
			array(
				"type" => "dropdown",
				"heading" => "顺序",
				"param_name" => "order",
				"value" => array(
				    "降序" => "DESC",
				    "升序" => "ASC"
				),
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "视差项目速度",
				"param_name" => "parallax_item_speed",
				"value" => "",
				"description" => '此选项仅影响在"在视差设置切片项目"设置为"是"时的作品项目，默认值是0.3'
			),
			array(
				"type" => "textfield",
				"heading" => "视差项目偏移",
				"param_name" => "parallax_item_offset",
				"value" => "",
				"description" => '此选项仅影响在"在视差设置切片项目"设置为"是"时的作品项目，默认值是0'
			),
		)
));

//Message
vc_map( array(
		"name" => "信息",
		"base" => "message",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-message",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "类型",
				"param_name" => "type",
				"value" => array(
					"正常" => "normal",
					"带图片" => "with_icon"	
				),
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => "图标",
				"param_name" => "icon",
				"value" => $icons,
				'save_always' => true,
				"description" => "",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "图标大小",
				"param_name" => "icon_size",
				"value" => array(
					"小" => "fa-lg",
					"中" => "fa-2x",
					"大" => "fa-3x"
				),
				'save_always' => true,
				"description" => "",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => "图标颜色",
				"param_name" => "icon_color",
				"description" => "",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => "图标背景颜色",
				"param_name" => "icon_background_color",
				"description" => "",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "自定义图标",
				"param_name" => "custom_icon",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "背景颜色",
				"param_name" => "background_color",
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "边框",
				"param_name" => "border",
				"value" => array(
					"默认"	=> "",
					"否"		=> "no",
					"是"		=> "yes"
				),
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "边框宽度 (px)",
				"param_name" => "border_width",
				"dependency" => Array('element' => "border", 'value' => array('yes'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "边框颜色",
				"param_name" => "border_color",
				"dependency" => Array('element' => "border", 'value' => array('yes'))
			),
            array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => "关闭按钮颜色",
				"param_name" => "close_button_color",
				"description" => ""
                        ),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "内容",
				"param_name" => "content",
				"value" => "<p>"."我是四亩地信息简码测试文字."."</p>",
				"description" => ""
			)
		)
) );

/*** Parallax Layers ***/
vc_map( array(
    "name" => "视差层",
    "base" => "qode_parallax_layers",
    "category" => '主题自带',
    "icon" => "extended-custom-icon-qode icon-wpb-parallax-layers",
    "allowed_container_element" => 'vc_row',
    "params" => array(
        array(
            "type" => "attach_images",
            "holder" => "div",
            "class" => "",
            "heading" => "层",
            "param_name" => "images"
        ),
        array(
            "type" => "dropdown",
            "holder" => "div",
            "class" => "",
            "heading" => "全屏高度",
            "param_name" => "full_screen",
            "value" => array(
                "否" => "no",
                "是" => "yes"
            ),
			'save_always' => true,
            "description" => ""
        ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => "高度 (px)",
            "param_name" => "height",
            "value" => "",
            "dependency" => array('element' => 'full_screen', 'value' => 'no')
        ),
        array(
            "type" => "textarea_html",
            "holder" => "div",
            "class" => "",
            "heading" => "内容",
            "param_name" => "content",
            "value" => "",
            "description" => "此内容将显示为最终层（顶层）在所有其他层上面"
        )
    )
) );

// Pie Chart
vc_map( array(
		"name" => "饼形图",
		"base" => "pie_chart",
		"icon" => "extended-custom-icon-qode icon-wpb-pie_chart",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "百分比",
				"param_name" => "percent",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "百分比颜色",
				"param_name" => "percentage_color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "百分比字体大小",
				"param_name" => "percent_font_size",
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "百分比字体粗细",
				"param_name" => "percent_font_weight",
				"value" => array(
					"默认" 			=> "",
					"细 100"			=> "100",
					"超浅 200" 	=> "200",
					"浅 300"			=> "300",
					"正常 400"		=> "400",
					"中 500"		=> "500",
					"半粗 600"		=> "600",
					"粗 700"			=> "700",
					"超粗 800"	=> "800",
					"极粗 900"	=> "900"
				),
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "条激活颜色",
				"param_name" => "active_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "条未激活颜色",
				"param_name" => "noactive_color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "饼图线宽 (px)",
				"param_name" => "line_width",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "标题",
				"param_name" => "title",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "标题颜色",
				"param_name" => "title_color",
				"description" => ""
			),
            array(
				"type" => "dropdown",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",	
					"h5" => "h5",	
					"h6" => "h6",	
				),
				"description" => ""
            ),
			array(
				"type" => "textfield",
				"heading" => "文字",
				"param_name" => "text",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "文字颜色",
				"param_name" => "text_color",
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "分隔线",
				"param_name" => "separator",
				"value" => array(
					"是" => "yes",
					"否" => "no"
				),
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "分隔线颜色",
				"param_name" => "separator_color",
				"description" => "",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__('Element Appearance', 'qode'),
				"param_name" => "element_appearance",
				"description" => esc_html__('Set distance (related to browser bottom) to start the animation', 'qode')
			)
		)
) );

// Pie Chart 2 (Pie)
vc_map( array(
		"name" => "饼状图 2 (饼)",
		"base" => "pie_chart2",
		"icon" => "extended-custom-icon-qode icon-wpb-pie_chart2",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "宽度",
				"param_name" => "width",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "高度",
				"param_name" => "height",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "联想文字颜色",
				"param_name" => "color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__('Element Appearance', 'qode'),
				"param_name" => "element_appearance",
				"description" => esc_html__('Set distance (related to browser bottom) to start the animation', 'qode')
			),
			array(
				"type" => "textarea_html",
				"heading" => "内容",
				"param_name" => "content",
				"value" => "15,#1abc9c,Legend One; 35,#5ed0ba,Legend Two; 50,#8cddcd,Legend Three",
				"save_always" => true,
				"description" => "",
				'admin_label' => true
			)

		)
) );

// Pie Chart 3 (Doughnut)
vc_map( array(
		"name" => "饼形图3 (甜甜圈)",
		"base" => "pie_chart3",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-pie_chart3",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "宽度",
				"param_name" => "width",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "高度",
				"param_name" => "height",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "联想文字颜色",
				"param_name" => "color",
				"description" => ""
			),
			array(
				"type" => "textarea_html",
				"heading" => "内容",
				"param_name" => "content",
				"value" => "15,#1abc9c,Legend One; 35,#5ed0ba,Legend Two; 50,#8cddcd,Legend Three",
				"save_always" => true,
				"description" => "",
				'admin_label' => true
			)

		)
) );

// Pie Chart With Icon
vc_map( array(
		"name" => "饼图图标",
		"base" => "pie_chart_with_icon",
		"icon" => "extended-custom-icon-qode icon-wpb-pie_chart_with_icon",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "百分比",
				"param_name" => "percent",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "条激活颜色",
				"param_name" => "active_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "条未激活颜色",
				"param_name" => "noactive_color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "饼图线宽 (px)",
				"param_name" => "line_width",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "标题",
				"param_name" => "title",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "标题颜色",
				"param_name" => "title_color",
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",	
					"h5" => "h5",	
					"h6" => "h6",	
				),
				"description" => ""
            ),
			array(
				"type" => "dropdown",
				"heading" => "图标",
				"param_name" => "icon",
				"value" => $icons,
				'save_always' => true,
				"description" => "",
				'admin_label' => true
				),
			array(
				"type" => "dropdown",
				"heading" => "图标大小",
				"param_name" => "icon_size",
				"value" => array(
					"很小" => "fa-lg",
					"小" => "fa-2x",
					"中" => "fa-3x",	
					"大" => "fa-4x",
					"非常大" => "fa-5x"	
				),
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "图标颜色",
				"param_name" => "icon_color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "文字",
				"param_name" => "text",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "文字颜色",
				"param_name" => "text_color",
				"description" => ""
			)
		)
) );

/*** Portfolio ***/
vc_map( array(
		"name" => "作品列表",
		"base" => "portfolio_list",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-portfolio",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "类型",
				"param_name" => "type",
				"value" => array(
					"标准" => "standard",
					"标准无空白" => "standard_no_space",
					"悬停文字" => "hover_text",
					"悬停文字无空白" => "hover_text_no_space",
                    "切片无空白"			=> "masonry",
                    "切片带空白"			=> "masonry_gallery_with_space",
                    "切片(Pinterest)带空白" => "masonry_with_space",
                    "切片(Pinterest)带空白(仅图片)" => "masonry_with_space_without_description",
                    "对齐相册"				=> "justified_gallery",
                    "交替大小"				=> "alternating_sizes"
				),
				'save_always' => true,
				"description" => ""
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "悬停动画类型",
                "param_name" => "hover_type_standard",
                "value" => array(
                    "默认" => "default",
                    "细微垂直" => "subtle_vertical_hover",
                    "图像细微旋转缩放" => "image_subtle_rotate_zoom_hover",
                    "图片文字缩放" => "image_text_zoom_hover",
                    "仅细加" => "thin_plus_only",
                    "慢速缩放" => "slow_zoom",
                    "分开" => "split_up"
                ),
				'save_always' => true,
                "dependency" => array('element' => "type", 'value' => array('standard', 'standard_no_space', 'masonry_with_space'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "悬停动画类型",
                "param_name" => "hover_type_text_on_hover_image",
                "value" => array(
                    "默认" => "default",
                    "细微垂直" => "subtle_vertical_hover",
                    "图像细微旋转缩放" => "image_subtle_rotate_zoom_hover",
                    "图片文字缩放" => "image_text_zoom_hover",
                    "光标更改" => "cursor_change_hover",
                    "仅细加" => "thin_plus_only",
                    "慢速缩放" => "slow_zoom",
                    "分开" => "split_up",
                    "灰度" => "grayscale",
                    "上滑" => "slide_up",
                    "从左翻转" => "flip_from_left"

                ),
				'save_always' => true,
                "dependency" => array('element' => "type", 'value' => array('hover_text', 'hover_text_no_space', 'masonry_with_space_without_description', 'alternating_sizes'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "悬停动画类型",
                "param_name" => "hover_type_masonry",
                "value" => array(
                    "默认" => "default",
                    "细微垂直" => "subtle_vertical_hover",
                    "图像细微旋转缩放" => "image_subtle_rotate_zoom_hover",
                    "图片文字缩放" => "image_text_zoom_hover",
                    "光标更改" => "cursor_change_hover",
                    "仅细加" => "thin_plus_only",
                    "慢速缩放" => "slow_zoom",
                    "分开" => "split_up"
                ),
				'save_always' => true,
                "dependency" => array('element' => "type", 'value' => array('masonry', 'masonry_gallery_with_space', 'justified_gallery'))
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "项目之间空间 (px)",
				"param_name" => "spacing",
				"value" => "",
				"description" => "",
				"dependency" => array('element' => "type","value" => array("masonry_with_space", "masonry_with_space_without_description", "justified_gallery"))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "框背景颜色",
				"param_name" => "box_background_color",
				"value" => "",
				"description" => "",
				"dependency" => array('element' => "type", 'value' => array('standard','standard_no_space', 'masonry_with_space'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "框边框",
				"param_name" => "box_border",
				"value" => array(
					"默认" => "",
					"否" => "no",
					"是" => "yes"
				),
				"description" => "",
				"dependency" => array('element' => "type", 'value' => array('standard','standard_no_space', 'masonry_with_space'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "框边框宽度",
				"param_name" => "box_border_width",
				"value" => "",
				"description" => "",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "框边框颜色",
				"param_name" => "box_border_color",
				"value" => "",
				"description" => "",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "列",
				"param_name" => "columns",
				"value" => array(
					"" => "",
                    "1" => "1",
					"2" => "2",
					"3" => "3",	
					"4" => "4",	
					"5" => "5",	
					"6" => "6"	
				),
				"save_always" => true,
				"description" => "",
				"dependency" => array('element' => "type", 'value' => array('standard','standard_no_space','hover_text','hover_text_no_space', 'masonry_with_space', 'masonry_with_space_without_description','alternating_sizes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "网格大小",
				"param_name" => "grid_size",
				"value" => array(
					"默认" => "",
					"3列网格" => "3",
					"4列网格" => "4",
					"5列网格" => "5"
				),
				"description" => "",
				"dependency" => array('element' => "type", 'value' => array('masonry', 'masonry_gallery_with_space'))
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "框",
                "param_name" => "frame_around_item",
                "value" => array(
                    "无框" => "no_frame",
                    "显示器外框" => "monitor_frame"
                ),
                "description" => "",
                "dependency" => array('element' => "type", 'value' => array('hover_text'))
            ),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "作品加载类型",
				"param_name" => "portfolio_loading_type",
				"value" => array(
					"" => "",
					"淡入 - 一个接一个" => "portfolio_one_by_one",
					"淡出 - 对角线" => "diagonal_fade",
					"从上滑 - 对角线" => "slide_from_top",
					"从左滑 - 随机" => "slide_from_left"
				),
				"description" => "",
				"dependency" => array('element' => "type", 'value' => array('standard','standard_no_space','hover_text','hover_text_no_space','alternating_sizes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "作品加载类型",
				"param_name" => "portfolio_loading_type_masonry",
				"value" => array(
					"" => "",
					"淡入 - 一个接一个" => "portfolio_one_by_one",
					"淡入 - 从下" => "portfolio_fade_from_bottom"
				),
				"description" => "",
				"dependency" => array('element' => "type", 'value' => array('masonry','masonry_gallery_with_space','masonry_with_space','masonry_with_space_without_description'))
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "图像比例",
                "param_name" => "image_size",
                "value" => array(
                    "原始" => "",
                    "方形" => "square",
					"横向" => "landscape",
					"竖向" => "portrait"
                ),
                "description" => "",
				"dependency" => array('element' => "type", 'value' => array('standard','standard_no_space','hover_text','hover_text_no_space','alternating_sizes'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => "图像颜色叠加",
                "param_name" => "overlay_background_color",
                "value" => "",
                "description" => "选择该悬停出现的叠加颜色。不适用于默认悬停类型",
                "dependency" => array('element' => 'type', 'value' => array('standard', 'standard_no_space', 'hover_text', 'hover_text_no_space', 'masonry', 'masonry_gallery_with_space', 'masonry_with_space','masonry_with_space_without_description', 'justified_gallery','alternating_sizes'))
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "行高 (px)",
				"param_name" => "row_height",
				"value" => "200",
				"save_always" => true,
				"description" => "目标行的高度，这可以根据图像的比例而变化。",
				"dependency" => array('element' => "type", 'value' => array('justified_gallery'))
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "最后行行为",
                "param_name" => "justify_last_row",
                "value" => array(
                    "左对齐" => "nojustify",
                    "右对齐" => "right",
                    "中央对齐" => "center",
                    "两端对齐" => "justify",
                    "隐藏" => "hide"
                ),
                "description" => "定义是否两端对齐最后行，以某种方式对齐或隐藏它.",
                "dependency" => array('element' => "type", 'value' => array('justified_gallery'))
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "两端对齐阈值 (0-1)",
				"param_name" => "justify_threshold",
				"value" => "0.75",
				"description" => "如果最后一行占用比可用宽度的这部分越多，它将不顾定义的对齐方式为两端对齐。输入1从不两端对齐最后行.",
				"dependency" => array('element' => "justify_last_row", 'value' => array('nojustify','right','center'))
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "排序方式",
                "param_name" => "order_by",
                "value" => array(
                    "" => "",
                    "菜单顺序" => "menu_order",
                    "标题" => "title",
                    "日期" => "date"
                ),
                "description" => ""
            ),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "顺序",
				"param_name" => "order",
				"value" => array(
					"" => "",
					"升序" => "ASC",
					"降序" => "DESC",
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "筛选",
				"param_name" => "filter",
				"value" => array(
					"" => "",
					"是" => "yes",
					"否" => "no"	
				),
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "筛选颜色",
				"param_name" => "filter_color",
				"description" => "",
				"dependency" => array('element' => "filter", 'value' => array('yes'))
			),
            array(
                "type" => "dropdown",
                "heading" => "筛选排序方式",
                "param_name" => "filter_order_by",
                "value" => array(
                    "名字" => "name",
                    "别名" => "slug",
                    "ID" => "id",
                    "描述" => "description"
                ),
                "description" => "",
                "dependency" => array('element' => "filter", 'value' => array('yes'))
            ),
			array(
				"type" => "dropdown",
				"heading" => "在筛选启用项目数量",
				"param_name" => "filter_number_of_items",
				"value" => array(
					"否" => "no",
					"是" => "yes"
				),
				"dependency" => array('element' => "filter", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "灯箱",
				"param_name" => "lightbox",
				"value" => array(
					"" => "",
					"是" => "yes",
					"否" => "no"	
				),
				"description" =>""
			),
			array(
				"type" => "dropdown",
				"heading" => "显示查看按钮",
				"param_name" => "view_button",
				"value" => array(
					"" => "",
					"是" => "yes",
					"否" => "no"
				),
				"description" =>""
			),
			array(
				"type" => "dropdown",
				"heading" => "显示加载更多",
				"param_name" => "show_load_more",
				"value" => array(
					"" => "",
					"是" => "yes",
					"否" => "no"	
				),
				"description" => "",
				"dependency" => array('element' => "type", 'value' => array('standard','standard_no_space','hover_text','hover_text_no_space', 'masonry_with_space', 'masonry_with_space_without_description', 'justified_gallery','alternating_sizes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "数量",
				"param_name" => "number",
				"value" => "-1",
				"description" => "页面作品数量 (-1是所有)"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "分类",
				"param_name" => "category",
				"value" => "",
				"description" => "分类别名 (为所有留空)"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "所选项目",
				"param_name" => "selected_projects",
				"value" => "",
				"description" => "所选项目 (为所有留空，用逗号分隔)"
			),
            array(
                "type" => "dropdown",
                "heading" => "显示标题",
                "param_name" => "show_title",
                "value" => array(
                    "" => "",
                    "是" => "yes",
                    "否" => "no"
                ),
                "description" => "",
            ),
            array(
				"type" => "dropdown",
				"class" => "",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",	
					"h5" => "h5",	
					"h6" => "h6",	
				),
				"description" => "",
                "dependency" => array("element" => "show_title", "value" => array("", "yes"))
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => "标题颜色",
                "param_name" => "title_color",
                "value" => "",
                "description" => "",
                "dependency" => array("element" => "show_title", "value" => array("", "yes"))
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => "标题字体大小 (px)",
                "param_name" => "title_font_size",
                "value" => "",
                "description" => "",
                "dependency" => array("element" => "show_title", "value" => array("", "yes"))
            ),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => "启用标题之下分隔线",
				"param_name" => "portfolio_separator",
				"value" => array(
					""   	=>	"",
					"否"   	=>	"no",
					"是"	=>	"yes"

				),
				"description" => ""
			),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => "分隔线颜色",
                "param_name" => "separator_color",
                "value" => "",
                "description" => "",
                "dependency" => array("element" => "portfolio_separator", "value" => array("yes"))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => "显示分类",
                "param_name" => "show_categories",
                "value" => array(
                    ""   	=>	"",
                    "是"	=>	"yes",
                    "否"   	=>	"no"
                ),
                "description" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => "分类名颜色",
                "param_name" => "category_color",
                "value" => "",
                "description" => "",
                "dependency" => array("element" => "show_categories", "value" => array("", "yes"))
            ),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => "文字对齐",
				"param_name" => "text_align",
				"value" => array(
					""   => "",
					"左" => "left",
					"中" => "center",
					"右" => "right"
				),
				"description" => "",
				"dependency" => array('element' => 'type', 'value' => array('standard', 'standard_no_space', 'masonry_with_space'))
			)
		)
) );

/*** Portfolio Slider ***/
vc_map( array(
		"name" => "作品幻灯片",
		"base" => "portfolio_slider",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-portfolio_slider",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "排序方式",
				"param_name" => "order_by",
				"value" => array(
					"" => "",
					"菜单顺序" => "menu_order",
					"标题" => "title",	
					"日期" => "date"
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "顺序",
				"param_name" => "order",
				"value" => array(
					"" => "",
					"升序" => "ASC",
					"降序" => "DESC",	
				),
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "数量",
				"param_name" => "number",
				"value" => "-1",
				"description" => "页面作品数量 (-1是所有)"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "分类",
				"param_name" => "category",
				"value" => "",
				"description" => "分类别名 (为所有留空)"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "所选项目",
				"param_name" => "selected_projects",
				"value" => "",
				"description" => "所选项目 (为所有留空，用逗号分隔)"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "项目显示数量",
				"param_name" => "number_of_items",
				"value" => array(
					"" => "",
					"四" => "4",
					"五" => "5"
				),
				"description" => "在全宽同时显示项目数量（在较小的屏幕/尺寸，由于自适应，将显示最少的项目）"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "灯箱",
				"param_name" => "lightbox",
				"value" => array(
					"" => "",
					"是" => "yes",
					"否" => "no"	
				),
				"description" => ""
			),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => "标题标签",
                "param_name" => "title_tag",
                "value" => array(
                    ""   => "",
                    "h2" => "h2",
                    "h3" => "h3",
                    "h4" => "h4",
                    "h5" => "h5",
                    "h6" => "h6",
                ),
                "description" => ""
            ),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "分隔线",
				"param_name" => "separator",
				"value" => array(
					"" => "",
					"否" => "no",
					"是" => "yes"

				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "隐藏'查看'按钮",
				"param_name" => "hide_button",
				"value" => array(
					"" => "",
					"否" => "no",
					"是" => "yes"
				),
				"description" => ""
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => "图像比例",
                "param_name" => "image_size",
                "value" => array(
                    "原始" => "",
                    "方形 (裁剪为570x570)" => "square",
					"横向 (裁剪为 800x600)" => "landscape",
                    "横向 (裁剪为 500x380)" => "portfolio_slider",
					"竖向 (裁剪为 600x800)" => "portrait"
                ),
                "description" => ""
            ),
            array(
                    "type" => "checkbox",
                    "class" => "",
                    "heading" => "上一页/下一页导航",
                    "value" => array("启用上一页/下一页导航？" => "enable_navigation"),
                    "param_name" => "enable_navigation"
            )
		)
) );

if(function_exists("is_woocommerce")) {

	/*** Product List - Elegant ***/
	vc_map( 
		array(
			"name" => "产品列表 - 优雅",
			"base" => "product_list_elegant",
			"icon" => "extended-custom-icon-qode icon-wpb-product_list_elegant",
			"category" => '主题自带',
			"allowed_container_element" => 'vc_row',
			"params" => array(
				array(
					"type" => "textfield",
					"heading" => "每页",
					"param_name" => "per_page",
					"value" => "12",
					'admin_label' => true,
				),
				array(
					"type" => "dropdown",
					"heading" => "列",
					"param_name" => "columns",
					"value" => array(
						"二" => "two_columns",
						"三" => "three_columns",
					),
					'save_always' => true,
					'admin_label' => true,
					"description" => ""
				),
				array(
					"type" => "textfield",
					"heading" => "分类别名",
					"param_name" => "category",
					'admin_label' => true,
				),
				array(
					"type" => "dropdown",
					"heading" => "排序方式",
					"param_name" => "order_by",
					"value" => array(
						"日期" => "date",
						"标题" => "title",
                        "菜单顺序" => "menu_order"
					),
					'save_always' => true,
					'admin_label' => true,
					"description" => ""
				),
				array(
					"type" => "dropdown",
					"heading" => "顺序",
					"param_name" => "order",
					"value" => array(
						"升序" => "ASC",
						"降序" => "DESC"
					),
					'save_always' => true,
					'admin_label' => true,
					"description" => ""
				),
	            array(
					"type" => "dropdown",
					"heading" => "产品标题标签",
					"param_name" => "title_tag",
					"value" => array(
	                    ""   => "",
						"h2" => "h2",
						"h3" => "h3",
						"h4" => "h4",	
						"h5" => "h5",	
						"h6" => "h6",	
					),
					"description" => ""
	            ),
	            array(
					"type" => "textfield",
					"heading" => "Holder填充（右上左下）",
					"param_name" => "holder_padding",
					'group'       => '设计选项',
					"description" => "由于自适应，我们建议使用值带百分比标记"
				),
	            array(
					"type" => "colorpicker",
					"heading" => "分隔颜色",
					"param_name" => "separator_color",
					"description" => "",
					'group'       => '设计选项',
				),
				array(
					"type" => "colorpicker",
					"heading" => "价格颜色",
					"param_name" => "price_color",
					"description" => "",
					'group'       => '设计选项',
				),
				array(
					"type" => "textfield",
					"heading" => "价格字体大小 (px)",
					"param_name" => "price_font_size",
					'group'       => '设计选项',
				),
				array(
					"type" => "dropdown",
					"heading" => "按钮大小",
					"param_name" => "button_size",
					"value" => array(
						"默认" => "",
						"小" => "small",
						"大" => "large",
						"巨大" => "big_large",
					),
					'save_always' => true,
					'group'       => '设计选项',
					"description" => ""
				),
				array(
					"type" => "dropdown",
					"heading" => "按钮悬停类型",
					"param_name" => "button_hover_type",
					"value" => array(
						"默认" => "default",
						"放大" => "enlarge",
					),
					'save_always' => true,
					'group'       => '设计选项',
					"description" => ""
				),
			)
		) 
	);
}

if(function_exists("is_woocommerce")) {

    /*** Product List - Masonry ***/
    vc_map(
        array(
            "name" => "产品列表 - 切片",
            "base" => "product_list_masonry",
            "icon" => "extended-custom-icon-qode icon-wpb-product_list_masonry",
            "category" => '主题自带',
            "allowed_container_element" => 'vc_row',
            "params" => array(
                array(
                    "type" => "textfield",
                    "heading" => "每页",
                    "param_name" => "per_page",
                    "value" => "",
					'admin_label' => true,
                ),
                array(
                    "type" => "dropdown",
                    "heading" => "列",
                    "param_name" => "columns",
                    "value" => array(
                        "二" => "two_columns",
                        "三" => "three_columns",
                        "四" => "four_columns",
                    ),
                    'save_always' => true,
					'admin_label' => true,
                    "description" => ""
                ),
                array(
                    "type" => "textfield",
                    "heading" => "分类别名",
                    "param_name" => "category",
					'admin_label' => true
                ),
                array(
                    "type" => "dropdown",
                    "heading" => "排序方式",
                    "param_name" => "order_by",
                    "value" => array(
                        "日期" => "date",
                        "标题" => "title",
                        "菜单顺序" => "menu_order"
                    ),
                    'save_always' => true,
					'admin_label' => true,
                    "description" => ""
                ),
                array(
                    "type" => "dropdown",
                    "heading" => "顺序",
                    "param_name" => "order",
                    "value" => array(
                        "升序" => "ASC",
                        "降序" => "DESC"
                    ),
                    'save_always' => true,
					'admin_label' => true,
                    "description" => ""
                ),
                array(
                    "type" => "dropdown",
                    "heading" => "产品标题标签",
                    "param_name" => "title_tag",
                    "value" => array(
                        ""   => "",
                        "h2" => "h2",
                        "h3" => "h3",
                        "h4" => "h4",
                        "h5" => "h5",
                        "h6" => "h6",
                    ),
                    "description" => ""
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => "悬停背景颜色",
                    "param_name" => "hover_background_color",
                    "description" => "",
                    'group'       => '设计选项',
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => "分类颜色",
                    "param_name" => "category_color",
                    "description" => "",
                    'group'       => '设计选项',
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => "分隔颜色",
                    "param_name" => "separator_color",
                    "description" => "",
                    'group'       => '设计选项',
                    'dependency' => array('element' => 'show_separator', 'value' => array('yes'))
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => "价格颜色",
                    "param_name" => "price_color",
                    "description" => "",
                    'group'       => '设计选项',
                ),
                array(
                    "type" => "textfield",
                    "heading" => "价格字体大小 (px)",
                    "param_name" => "price_font_size",
                    'group'       => '设计选项',
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => '图像比例',
                    'param_name' => 'image_size',
                    'value' => array(
                        '默认 - 来自商店设置' => '',
                        '原始' => 'original',
                        '方形' => 'square'
                    ),
                    'save_always' => true
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => '显示分隔',
                    'param_name' => 'show_separator',
                    'value' => array(
                        '是' => 'yes',
                        '否' => 'no'
                    ),
                    'save_always' => true
                )
            )
        )
    );
}

if(function_exists('is_woocommerce')) {

	/*** Product List - Pinterest ***/
	vc_map(
		array(
			'name' => '产品列表 - 瀑布流',
			'base' => 'product_list_pinterest',
			'icon' => 'extended-custom-icon-qode icon-wpb-product-list-pinterest',
			'category' => '主题自带',
			'allowed_container_element' => 'vc_row',
			'params' => array(
				array(
					'type'			=> 'textfield',
					'heading'		=> '每页',
					'param_name'	=> 'per_page',
					'admin_label'	=> true,
				),
				array(
					'type'			=> 'dropdown',
					'heading'		=> '列',
					'param_name'	=> 'columns',
					'value'			=> array(
						'二' => 'two_columns',
						'三' => 'three_columns',
						'四' => 'four_columns',
					),
					'admin_label'	=> true
				),
				array(
					'type'			=> 'textfield',
					'heading'		=> '分类别名',
					'param_name'	=> 'category',
					'admin_label'	=> true
				),
				array(
					'type'			=> 'dropdown',
					'heading'		=> '排序方式',
					'param_name'	=> 'order_by',
					'value'			=> array(
						'日期'			=> 'date',
						'标题'			=> 'title'
					),
					'admin_label'	=> true
				),
				array(
					'type'			=> 'dropdown',
					'heading'		=> '顺序',
					'param_name'	=> 'order',
					'value'			=> array(
						'升序'	=> 'ASC',
						'降序'	=> 'DESC'
					),
					'admin_label'	=> true
				),
				array(
					'type'			=> 'dropdown',
					'heading'		=> '产品标题标签',
					'param_name'	=> 'title_tag',
					'value'			=> array(
						''   => '',
						'h2' => 'h2',
						'h3' => 'h3',
						'h4' => 'h4',
						'h5' => 'h5',
						'h6' => 'h6',
					)
				),
				array(
					'type'			=> 'colorpicker',
					'heading'		=> '悬停背景颜色',
					'param_name'	=> 'hover_background_color',
					'group'			=> '设计选项',
				),
				array(
					'type'			=> 'colorpicker',
					'heading'		=> '分类颜色',
					'param_name'	=> 'category_color',
					'group'			=> '设计选项',
				),
				array(
					'type'			=> 'colorpicker',
					'heading'		=> '分隔颜色',
					'param_name'	=> 'separator_color',
					'group'			=> '设计选项',
				),
				array(
					'type'			=> 'colorpicker',
					'heading'		=> '价格颜色',
					'param_name'	=> 'price_color',
					'group'			=> '设计选项',
				),
				array(
					'type'			=> 'textfield',
					'heading'		=> '价格字体大小 (px)',
					'param_name'	=> 'price_font_size',
					'group'			=> '设计选项',
				)
			)
		)
	);
}


// Progress Bar - Horizontal shortcode
vc_map( array(
		"name" => "进度条 - 水平",
		"base" => "progress_bar",
		"icon" => "extended-custom-icon-qode icon-wpb-progress_bar",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "标题",
				"param_name" => "title",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "标题颜色",
				"param_name" => "title_color",
				"description" => ""
			),
            array(
				"type" => "dropdown",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",	
					"h5" => "h5",	
					"h6" => "h6",	
				),
				"description" => ""
            ),
			array(
				"type" => "textfield",
				"heading" => "百分比",
				"param_name" => "percent",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "百分比颜色",
				"param_name" => "percent_color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "百分比字体大小",
				"param_name" => "percent_font_size",
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "百分比字体粗细",
				"param_name" => "percent_font_weight",
				"value" => array(
					"默认" 			=> "",
					"细 100"			=> "100",
					"超浅 200" 	=> "200",
					"浅 300"			=> "300",
					"正常 400"		=> "400",
					"中 500"		=> "500",
					"半粗 600"		=> "600",
					"粗 700"			=> "700",
					"加粗 800"	=> "800",
					"极粗 900"	=> "900"
				),
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "激活背景颜色",
				"param_name" => "active_background_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "激活边框颜色",
				"param_name" => "active_border_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "非激活背景颜色",
				"param_name" => "noactive_background_color",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "非激活背景颜色透明度",
				"param_name" => "noactive_background_color_transparency",
				"description" => "0和1之间的值。如果上面字段不是空的时候工作"
			),
			array(
				"type" => "textfield",
				"heading" => "进度条高度 (px)",
				"param_name" => "height",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "进度条边框半径",
				"param_name" => "border_radius",
				"description" => ""
			)
		)
) );

// Progress Bar - Icon
vc_map( array(
		"name" => "进度条 - 图标",
		"base" => "progress_bar_icon",
		"icon" => "extended-custom-icon-qode icon-wpb-progress_bar_icon",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "图标数",
				"param_name" => "icons_number",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "textfield",
				"heading" => "激活图标数",
				"param_name" => "active_number",
				"description" => "",
				'admin_label' => true
			),
			array(
				"type" => "dropdown",
				"heading" => "Type",
				"param_name" => "type",
				"value" => array(
					"正常" => "normal",
					"圆形" => "circle",
					"方形" => "square"	
				),
				'save_always' => true,
				'admin_label' => true,
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => "图标",
				"param_name" => "icon",
				"value" => $icons,
				'save_always' => true,
				"description" => ""
				),
			array(
				"type" => "dropdown",
				"heading" => "大小",
				"param_name" => "size",
				"value" => array(
					"细" => "tiny",
					"小" => "small",
					"中" => "medium",	
					"大" => "large",
					"很大" => "very_large",
				),
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "自定义大小 (px)",
				"param_name" => "custom_size",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "图标颜色",
				"param_name" => "icon_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "图标激活颜色",
				"param_name" => "icon_active_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "背景颜色",
				"param_name" => "background_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "背景激活颜色",
				"param_name" => "background_active_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "边框颜色",
				"param_name" => "border_color",
				"description" => "仅为方形和圆形类型",
				"dependency" => array('element' => "type", 'value' => array('square', 'circle'))
			),
			array(
				"type" => "colorpicker",
				"heading" => "边框激活颜色",
				"param_name" => "border_active_color",
				"description" => "仅为方形和圆形",
				"dependency" => array('element' => "type", 'value' => array('square', 'circle'))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__('Element Appearance', 'qode'),
				"param_name" => "element_appearance",
				"description" => esc_html__('Set distance (related to browser bottom) to start the animation', 'qode')
			)
		)
) );

// Progress Bar - Vertical shortcode
vc_map( array(
		"name" => "进度条 - 垂直",
		"base" => "progress_bar_vertical",
		"icon" => "extended-custom-icon-qode icon-wpb-vertical_progress_bar",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array (
				"type" => "textfield",
				"heading" => "标题",
				"param_name" => "title",
				"description" => "",
				'admin_label' => true
			),
            array (
				"type" => "colorpicker",
				"heading" => "标题颜色",
				"param_name" => "title_color",
				"description" => ""
			),
            array(
				"type" => "dropdown",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",	
					"h5" => "h5",	
					"h6" => "h6",	
				),
				"description" => ""
            ),
            array (
				"type" => "textfield",
				"heading" => "标题大小",
				"param_name" => "title_size",
				"description" => ""
			),
            array (
                "type" => "colorpicker",
                "heading" => "条颜色",
                "param_name" => "bar_color",
                "description" => ""
            ),
            array (
                "type" => "colorpicker",
                "heading" => "条边框颜色",
                "param_name" => "bar_border_color",
                "description" => ""
            ),
			array (
				"type" => "colorpicker",
				"heading" => "背景颜色",
				"param_name" => "background_color",
				"description" => ""
			),
			array (
				"type" => "textfield",
				"heading" => "上边框半径",
				"param_name" => "border_radius",
				"description" => ""
			),
            array (
				"type" => "textfield",
				"heading" => "百分比",
				"param_name" => "percent",
				"description" => "",
				'admin_label' => true
			),
            array (
				"type" => "textfield",
				"heading" => "百分比文字大小",
				"param_name" => "percentage_text_size",
				"description" => ""
			),
            array (
				"type" => "colorpicker",
				"heading" => "百分比颜色",
				"param_name" => "percent_color",
				"description" => ""
			),
            array(
				"type" => "textarea",
				"heading" => "文字",
				"param_name" => "text",
				"value" => "",
				"description" => "",
				'admin_label' => true
			)
		)
) );

/*** Qode Carousel ***/
vc_map( array(
		"name" => "轮播",
		"base" => "qode_carousel",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-qode_carousel",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"heading" => "轮播幻灯片",
				"param_name" => "carousel",
				"value" => $carousel_sliders,
				'save_always' => true,
				'admin_label' => true,
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "可见项目数量",
				"param_name" => "number_of_visible_items",
				"value" => array(
					"默认" => "",
					"四" => "four_items",
					"五" => "five_items",
				),
				'save_always' => true,
			),
			array(
				"type" => "dropdown",
				"heading" => "排序方式",
				"param_name" => "orderby",
				"value" => array(
					"" => "",
					"菜单顺序" => "menu_order",
					"标题" => "title",	
					"日期" => "date"
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "顺序",
				"param_name" => "order",
				"value" => array(
					"" => "",
					"升序" => "ASC",
					"降序" => "DESC",	
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "在两行显示项目？",
				"param_name" => "show_in_two_rows",
				"value" => array(
					"否" => "",
					"是" => "yes",
				),
				"description" => ""
			)
		)
) );

// Qode Image Slider
vc_map( array(
    "name" => "图片幻灯片",
    "base" => "image_slider_no_space",
    "category" => '主题自带',
    "icon" => "extended-custom-icon-qode icon-wpb-images-stack",
    "allowed_container_element" => 'vc_row',
    "params" => array(
        array(
            "type" => "attach_images",
            "heading" => "图片",
            "param_name" => "images"
        ),
        array(
            "type" => "dropdown",
            "heading" => "点击",
            "param_name" => "on_click",
            "value" => array(
                "什么也不做"       			 	=> "",
                "在灯箱打开图片"     => "prettyphoto",
                "在新选项卡打开图片"			=> "new_tab",
                "使用自定义链接"				=> "use_custom_links"
            ),
            "description" => ""
        ),
        array(
            "type" => "textarea",
            "heading" => "自定义链接",
            "param_name" => "custom_links",
            "value" => "",
            "dependency" => array('element' => 'on_click', 'value' => 'use_custom_links'),
            "description" => "在这里输入每个图片的链接。用逗号分隔链接。"
        ),
        array(
            "type" => "dropdown",
            "heading" => "自定义链接目标",
            "param_name" => "custom_links_target",
            "value" => array(
                "" => "",
                "同一窗口" => "_self",
                "新窗口" => "_blank"
            ),
            "dependency" => array('element' => 'on_click', 'value' => 'use_custom_links'),
            "description" => ""
        ),
        array(
            "type" => "textfield",
            "heading" => "幻灯片高度 (px)",
            "param_name" => "height",
            "value" => "",
            "dependency" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => "导航风格",
            "param_name" => "navigation_style",
            "value" => array(
                "" => "",
                "浅色" => "light",
                "深色" => "dark"
            )
        ),
        array(
            "type" => "dropdown",
            "heading" => "高亮激活图片",
            "param_name" => "highlight_active_image",
            "value" => array(
                "" => "",
                "是" => "yes",
                "否" => "no"
            )
        ),
		array(
			"type" => "colorpicker",
			"heading" => "高亮非激活颜色",
			"param_name" => "highlight_inactive_color",
			"dependency" => array('element' => "highlight_active_image", 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"heading" => "高亮非激活透明度 (0-1)",
			"param_name" => "highlight_inactive_opacity",
			"value" => "",
			"dependency" => array('element' => "highlight_active_image", 'value' => 'yes')
		)
    )
) );

/*** Separator with icon ***/
vc_map( array(
    "name" => "分隔带图标",
    "base" => "separator_with_icon",
    "category" => '主题自带',
    "icon" => "extended-custom-icon-qode icon-wpb-qode_separator_with_icon",
    "allowed_container_element" => 'vc_row',
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => "图标",
            "param_name" => "icon",
            "value" => $icons,
			'save_always' => true,
            "description" => ""
        ),
        array(
            "type" => "colorpicker",
            "heading" => "颜色",
            "param_name" => "color",
            "value" => "",
            "description" => ""
        ),
        array(
            "type" => "textfield",
            "heading" => "透明度",
            "param_name" => "opacity",
            "value" => "",
            "description" => "从0到1设置"
        )
    )
) );

/*** Service table shortcode ***/
vc_map( array(
        "name" => "服务表格",
        "base" => "service_table",
        "icon" => "extended-custom-icon-qode icon-wpb-service_table",
        "category" => '主题自带',
        "allowed_container_element" => 'vc_row',
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "title",
                "value" => "",
				"admin_label" => true
            ),
            array(
                "type" => "dropdown",
                "heading" => "标题标签",
                "param_name" => "title_tag",
                "value" => array(
                    ""   => "",
                    "h2" => "h2",
                    "h3" => "h3",
                    "h4" => "h4",   
                    "h5" => "h5",   
                    "h6" => "h6",   
                ),
                "description" => ""
            ),
            array(
                "type" => "colorpicker",
                "heading" => "标题颜色",
                "param_name" => "title_color",
                "description" => ""
            ),
            array(
                "type" => "dropdown",
                "heading" => "标题背景类型",
                "param_name" => "title_background_type",
                "value" => array(
                    "Background Color" => "background_color_type",
                    "Background Image" => "background_image_type"
                ),
				'save_always' => true,
                "description" => ""
            ),
            array(
                "type" => "colorpicker",
                "heading" => "标题背景颜色",
                "param_name" => "title_background_color",
                "description" => "",
                "dependency" => array('element' => "title_background_type", 'value' => array('background_color_type'))
            ),
            array(
                "type" => "attach_image",
                "heading" => "背景颜色",
                "param_name" => "background_image",
                "dependency" => array('element' => "title_background_type", 'value' => array('background_image_type'))
            ),
            array(
                "type" => "textfield",
                "heading" => "背景图片高度 (px)",
                "param_name" => "background_image_height",
                "value" => "",
                "dependency" => array('element' => "title_background_type", 'value' => array('background_image_type'))
            ),
            array(
                "type" => "dropdown",
                "heading" => "图标",
                "param_name" => "icon",
                "value" => $icons,
				'save_always' => true,
				"admin_label" => true,
                "description" => ""
            ),
            array(
                "type" => "dropdown",
                "heading" => "图标大小",
                "param_name" => "icon_size",
                "value" => array(
                    "细" => "fa-lg",
                    "小" => "fa-2x",
                    "中" => "fa-3x",    
                    "大" => "fa-4x",
                    "很大" => "fa-5x" 
                ),
				'save_always' => true,
                "description" => ""
            ),
            array(
                "type" => "textfield",
                "heading" => "自定义大小 (px)",
                "param_name" => "custom_size",
                "value" => ""
            ),
			array(
				"type" => "colorpicker",
				"heading" => "图标颜色",
				"param_name" => "icon_color",
				"description" => ""
			),
            array(
                "type" => "colorpicker",
                "heading" => "内容背景颜色",
                "param_name" => "content_background_color",
                "description" => ""
            ),
			array(
				"type" => "dropdown",
				"heading" => "边框",
				"param_name" => "border",
				"value" => array(
					"默认" => "",
					"否" => "no",
					"是" => "yes"
				),
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "边框宽度 (px)",
				"param_name" => "border_width",
				"value" => "",
				"dependency" => array('element' => "border", 'value' => array('yes'))
			),
			array(
				"type" => "colorpicker",
				"heading" => "边框颜色",
				"param_name" => "border_color",
				"value" => "",
				"dependency" => array('element' => "border", 'value' => array('yes'))
			),
            array(
                "type" => "textarea_html",
				"admin_label" => true,
                "heading" => "内容",
                "param_name" => "content",
                "value" => "<li>这里是内容</li><li>这里是内容</li><li>这里是内容</li>",
                "description" => ""
            )
        )
) );

// Social Icon 
vc_map( array(
	"name"                      => "社交图标",
	"base"                      => "social_icons",
	"icon"                      => "extended-custom-icon-qode icon-wpb-social_icons",
	"category"                  => '主题自带',
	"allowed_container_element" => 'vc_row',
	"params"                    => array_merge(
		array(
			array(
				"type"              => "dropdown",
				"heading"           => "类型",
				"param_name"        => "type",
				"value"             => array(
					"圆" => "circle_social",
                    "方" => "square_social",
					"正常" => "normal_social"
				),
				'save_always' => true,
				'admin_label' => true,
				"description"       => ""
			)
		),
		$qodeIconCollections->getSocialVCParamsArray(array(),'',false,'linea_icons'),
        array(
            array(
                "type"              => "dropdown",
                "heading"           => "使用自定义大小",
                "param_name"        => "use_custom_size",
                "value"             => array(
                    "否"            => "no",
                    "是"           => "yes",
                ),
				'save_always' => true,
                "description"       => ""
            ),
            array(
                "type"              => "dropdown",
                "heading"           => "大小",
                "param_name"        => "size",
                "value"             => array(
                    "小"         => "fa-lg",
                    "正常"        => "fa-2x",
                    "大"         => "fa-3x",
                    "很大"    => "fa-4x"
                ),
				'save_always' 		=> true,
				'admin_label' 		=> true,
                "description"       => "",
                "dependency"        => array('element' => 'use_custom_size', 'value' => array('no'))
            ),
            array(
                "type"              => "textfield",
                "heading"           => "自定义大小(px)",
                "param_name"        => "custom_size",
                "value"             => "",
                "dependency"        => array('element' => 'use_custom_size', 'value' => array('yes'))
            ),
            array(
                "type"              => "textfield",
                "heading"           => "自定义形状尺寸(px)",
                "param_name"        => "custom_shape_size",
                "value"             => "",
                "dependency"        => array('element' => 'use_custom_size', 'value' => array('yes')),
                "description"       => "仅适用于方形和圆形图标类型"
            ),
            array(
                "type"              => "textfield",
                "heading"           => "链接",
                "param_name"        => "link",
                "value"             => ""
            ),
            array(
                "type"              => "dropdown",
                "heading"           => "目标",
                "param_name"        => "target",
                "value"             => array(
                    "自身"          => "_self",
                    "新窗口"         => "_blank",
                    "父级"        => "_parent"
                ),
				'save_always' => true,
                "description"       => ""
            ),
            array(
                "type"              => "textfield",
                "heading"           => "边框半径",
                "param_name"        => "border_radius",
                "value"             => "",
                "dependency"        => array("element" => "type", "value" => "square_social"),
                "description"       => "添加边框半径以像素为单位。省略单元，仅添加数字"
            ),
            array(
                "type"              => "colorpicker",
                "heading"           => "图标颜色",
                "param_name"        => "icon_color",
                "description"       => ""
            ),
            array(
                "type"              => "colorpicker",
                "heading"           => "图标悬停颜色",
                "param_name"        => "icon_hover_color",
                "description"       => ""
            ),
            array(
                "type"              => "colorpicker",
                "heading"           => "背景颜色",
                "param_name"        => "background_color",
                "description"       =>"",
                "dependency"        => array('element' => "type", 'value' => array('circle_social', 'square_social'))
            ),
            array(
                "type"              => "colorpicker",
                "heading"           => "背景悬停颜色",
                "param_name"        => "background_hover_color",
                "description"       =>"",
                "dependency"        => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
            ),
            array(
                "type"              => "textfield",
                "heading"           => "背景颜色透明度",
                "param_name"        => "background_color_transparency",
                "description"       =>"值需要0和1之间。仅适用于如果您选择了背景颜色圆/方形图标类型",
                "dependency"        => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
            ),
            array(
                "type"              => "textfield",
                "heading"           => "边框宽度",
                "param_name"        => "border_width",
                "dependency"        => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
            ),
            array(
                "type"              => "colorpicker",
                "heading"           => "边框颜色",
                "param_name"        => "border_color",
                "description"       => "",
                "dependency"        => array('element' => "type", 'value' => array('circle_social', 'square_social'))
            ),
            array(
                "type"              => "colorpicker",
                "heading"           => "边框悬停颜色",
                "param_name"        => "border_hover_color",
                "description"       => "",
                "dependency"        => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
            ),
            array(
                "type"              => "textfield",
                "heading"           => "图标边框",
                "param_name"        => "icon_margin",
                "value"             => "",
                "description"       => "边框应该设置为上右下左格式",
            ),
        )
    )
) );

// Social Share
vc_map( array(
    "name" => "社交分享",
    "base" => "social_share",
    "params" => array(
        array(
            "type" => "dropdown",
			"heading" => "显示分享图标",
			"param_name" => "show_share_icon",
			"value" => array(
				"否" => "no",
				"是" => "yes"
			),
			'save_always' => true,
			"description" => ""
        ),
		array(
			"type" => "dropdown",
			"heading" => "显示分享文字",
			"param_name" => "social_share_icon_pack",
			"value" => qode_icon_collections()->getIconCollectionsVC(),
			"dependency" => array('element' => "show_share_icon", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"heading" => "显示分享文字",
			"param_name" => "show_share_text",
			"value" => array(
				"默认" => "",
				"否" => "no",
				"是" => "yes"
			)
		)
    ),
    "icon" => "extended-custom-icon-qode icon-wpb-social_share",
    "category" => '主题自带',
    "allowed_container_element" => 'vc_row',
    "show_settings_on_create" => true
) );

// Social Share List
vc_map( array(
    "name" => "社交分享列表",
    "base" => "social_share_list",
    "icon" => "extended-custom-icon-qode icon-wpb-social_share_list",
    "category" => '主题自带',
    "allowed_container_element" => 'vc_row',
    "show_settings_on_create" => false,
    "params" => array()
) );

/*** Team Shortcode ***/
vc_map( array(
		"name" => "团队",
		"base" => "q_team",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-q_team",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"heading" => "类型",
				"param_name" => "type",
				"admin_label" => true,
				"value" => array(
					"默认" => "",
					"图片信息在图片下" => "info_below_image",
					"图片信息在悬停时出现" => "info_on_hover"
				),
				"description" => "默认类型是主要信息在图片下"
			),
			array(
				"type" => "attach_image",
				"heading" => "图片",
				"param_name" => "team_image"
			),
			array(
				"type"			=> "textfield",
				"heading"		=> "名字",
				"param_name"	=> "team_name",
				"admin_label"	=> true
			),
			array(
				"type"			=> "dropdown",
				"heading"		=> "标题标签",
				"param_name"	=> "title_tag",
            	"value" => array(
                    ""   => "",
                    "h2" => "h2",
                    "h3" => "h3",
                    "h4" => "h4",   
                    "h5" => "h5",   
                    "h6" => "h6",   
                ),
				"description" => "标题标签将参照团队成员的姓名"
			),
			array(
				"type"		 => "colorpicker",
				"heading"	 => "名字颜色",
				"param_name" => "name_color"
			),
            array(
				"type" => "textfield",
				"heading" => "位置",
				"param_name" => "team_position",
				"admin_label" => true
			),
			array(
				"type" => "colorpicker",
				"heading" => "位置颜色",
				"param_name" => "position_color"
			),
			array(
				"type" => "textarea",
				"heading" => "描述",
				"admin_label" => true,
				"param_name" => "team_description"
			),
			array(
				"type" => "colorpicker",
				"heading" => "背景颜色",
				"param_name" => "background_color"
			),
			array(
				"type" => "colorpicker",
				"heading" => "叠加颜色",
				"param_name" => "overlay_color",
				"dependency" => array('element' => 'type', 'value' => array('info_on_hover'))
			),
			array(
				"type" => "dropdown",
				"heading" => "框边框",
				"param_name" => "box_border",
				"value" => array(
					"默认" => "",
					"否" => "no",
					"是" => "yes"
				)
			),
			array(
				"type" => "textfield",
				"heading" => "框边框宽度",
				"param_name" => "box_border_width",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "colorpicker",
				"heading" => "框边框颜色",
				"param_name" => "box_border_color",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"heading" => "显示分隔线",
				"param_name" => "show_separator",
				"value" => array(
					"默认" => "",
					"是" => "yes",
					"否" => "no"
				)
			),
			array(
				"type" => "colorpicker",
				"heading" => "分隔线颜色",
				"param_name" => "separator_color",
				"value" => "",
				"dependency" => array('element' => "show_separator", 'value' => array('yes',''))
			),
			array(
				"type" => "colorpicker",
				"heading" => "社交图标颜色",
				"param_name" => "icons_color",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "社交图标1",
				"param_name" => "team_social_icon_1",
				"value" =>$social_icons_array,
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"heading" => "社交图标1链接",
				"param_name" => "team_social_icon_1_link"
			),
			array(
                "type" => "dropdown",
                "heading" => "社交图标1打开方式",
                "param_name" => "team_social_icon_1_target",
                "value" => array(
                    "" => "",
                    "自身" => "_self",
                    "新窗口" => "_blank",
                    "父级" => "_parent"
                )
            ),
			array(
				"type" => "dropdown",
				"heading" => "社交图标2",
				"param_name" => "team_social_icon_2",
				"value" =>$social_icons_array,
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"heading" => "社交图标2链接",
				"param_name" => "team_social_icon_2_link"
			),
			array(
                "type" => "dropdown",
                "heading" => "社交图标2打开方式",
                "param_name" => "team_social_icon_2_target",
                "value" => array(
                    "" => "",
                    "自身" => "_self",
                    "新窗口" => "_blank",
                    "父级" => "_parent"
                )
            ),
			array(
				"type" => "dropdown",
				"heading" => "社交图标3",
				"param_name" => "team_social_icon_3",
				"value" =>$social_icons_array,
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"heading" => "社交图标3链接",
				"param_name" => "team_social_icon_3_link"
			),
			array(
                "type" => "dropdown",
                "heading" => "社交图标3打开方式",
                "param_name" => "team_social_icon_3_target",
                "value" => array(
                    "" => "",
                    "自身" => "_self",
                    "新窗口" => "_blank",
                    "父级" => "_parent"
                ),
                "description" => ""
            ),
			array(
				"type" => "dropdown",
				"heading" => "社交图标4",
				"param_name" => "team_social_icon_4",
				"value" =>$social_icons_array,
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"heading" => "社交图标4链接",
				"param_name" => "team_social_icon_4_link"
			),
			array(
                "type" => "dropdown",
                "heading" => "社交图标4打开方式",
                "param_name" => "team_social_icon_4_target",
                "value" => array(
                    "" => "",
                    "自身" => "_self",
                    "新窗口" => "_blank",
                    "父级" => "_parent"
                ),
                "description" => ""
            ),
			array(
				"type" => "dropdown",
				"heading" => "社交图标5",
				"param_name" => "team_social_icon_5",
				"value" =>$social_icons_array,
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"heading" => "社交图标5链接",
				"param_name" => "team_social_icon_5_link"
			),
			array(
                "type" => "dropdown",
                "heading" => "社交图标5打开方式",
                "param_name" => "team_social_icon_5_target",
                "value" => array(
                    "" => "",
                    "自身" => "_self",
                    "新窗口" => "_blank",
                    "父级" => "_parent"
                ),
                "description" => ""
            )
		)
) );

/*** Testimonials ***/
vc_map( array(
		"name" => "客户评价",
		"base" => "testimonials",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-testimonials",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "分类",
				"param_name" => "category",
				"value" => "",
				"description" => "分类别名（为所有留空）"
			),
			array(
				"type" => "textfield",
				"heading" => "数量",
				"param_name" => "number",
				"value" => "",
				"description" => "客户评价数量"
			),
            array(
                "type" => "dropdown",
                "heading" => "每个幻灯片数量",
                "param_name" => "number_per_slide",
                "value" => array(
                    "1"         => "1",
                    "2"         => "2",
                    "3"         => "3"
                ),
                "description" => "每个幻灯片客户评价数量"
            ),
			array(
				"type" => "dropdown",
				"heading" => "主题自带",
				"param_name" => "order_by",
				"value" => array(
					"" => "",
					"标题" => "title",
					"日期" => "date",
					"随机" => "rand"
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "排序方式",
				"param_name" => "order",
				"value" => array(
					"" => "",
					"Ascending" => "ASC",
					"Descending" => "DESC",
				),
				"description" => "",
				"dependency" => array("element" => "order_by", "value" => array("title", "date"))
			),
			array(
				"type" => "dropdown",
				"heading" => "显示作者图片",
				"param_name" => "author_image",
				"value" => array(
					"默认" => "",
					"否" => "no",
					"是" => "yes",
				),
				"description" => ""
			),
            array(
                "type" => "colorpicker",
                "heading" => "文字颜色",
                "param_name" => "text_color",
                "description" => ""
            ),
			array(
				"type" => "textfield",
				"heading" => "文字字体大小",
				"param_name" => "text_font_size",
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "作者文字字体粗细",
				"param_name" => "author_text_font_weight",
				"value" => array(
					"默认" 			=> "",
					"细 100"			=> "100",
					"超浅 200" 	=> "200",
					"浅 300"			=> "300",
					"正常 400"		=> "400",
					"中 500"		=> "500",
					"半粗 600"		=> "600",
					"粗 700"			=> "700",
					"超粗 800"	=> "800",
					"极粗 900"	=> "900"
				),
				"description" => ""
			),
            array(
                "type" => "colorpicker",
                "heading" => "作者文字颜色",
                "param_name" => "author_text_color",
                "description" => ""
            ),
			array(
				"type" => "textfield",
				"heading" => "作者文字字体大小 (px)",
				"param_name" => "author_text_font_size",
				"description" => "只输入数字，忽略px"
			),
            array(
                "type" => "dropdown",
                "heading" => "显示导航",
                "param_name" => "show_navigation",
                "value" => array(
                    "是" => "yes",
                    "否" => "no"
                ),
				'save_always' => true,
                "description" => ""
            ),
            array(
                "type" => "dropdown",
                "heading" => "导航风格",
                "param_name" => "navigation_style",
                "value" => array(
                    "深色" => "dark",
                    "浅色" => "light"
                ),
				'save_always' => true,
                "description" => "",
                "dependency" => array("element" => "show_navigation", "value" => array("yes"))
            ),
            array(
                "type" => "dropdown",
                "heading" => "自动旋转幻灯片(秒)",
                "param_name" => "auto_rotate_slides",
                "value" => array(
                    "3"         => "3",
                    "5"         => "5",
                    "10"        => "10",
                    "15"        => "15",
                    "禁用"   => "0"
                ),
				'save_always' => true,
                "description" => ""
            ),
            array(
                "type" => "dropdown",
                "heading" => "动画类型",
                "param_name" => "animation_type",
                "value" => array(
                    "淡入"   => "fade_option",
                    "滑动"  => "slide_option"
                ),
				'save_always' => true,
                "description" => ""
            ),
            array(
                "type" => "textfield",
                "heading" => "动画速度",
                "param_name" => "animation_speed",
                "value" => "",
                "description" => __("Speed of slide animation in milliseconds")
            )
		)
) );

/*** Testimonials Carousel ***/
vc_map( array(
		"name" => "客户评价轮播",
		"base" => "testimonials_carousel",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-testimonials-carousel",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "分类",
				"param_name" => "category",
				"value" => "",
				'admin_label' => true,
				"description" => "分类别名 (为所有留空)"
			),
			array(
				"type" => "textfield",
				"heading" => "数量",
				"param_name" => "number",
				"value" => "",
				'admin_label' => true,
				"description" => "客户评价数量"
			),
            array(
                "type" => "dropdown",
                "heading" => "每个幻灯片数",
                "param_name" => "number_per_slide",
                "value" => array(
                    "1"         => "1",
                    "2"         => "2",
                    "3"         => "3"
                ),
				'admin_label' => true,
                "description" => "每个幻灯片客户评价数量"
            ),
			array(
				"type" => "dropdown",
				"heading" => "排序方式",
				"param_name" => "order_by",
				"value" => array(
					"" => "",
					"标题" => "title",
					"日期" => "date",
					"随机" => "rand"
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "顺序",
				"param_name" => "order",
				"value" => array(
					"" => "",
					"升序" => "ASC",
					"降序" => "DESC",
				),
				"description" => "",
				"dependency" => array("element" => "order_by", "value" => array("title", "date"))
			),
			array(
				"type" => "dropdown",
				"heading" => "显示标题",
				"param_name" => "show_title",
				"value" => array(
					"默认" => "",
					"否" => "no",
					"是" => "yes",
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "显示评价",
				"param_name" => "show_rating",
				"value" => array(
					"默认" => "",
					"否" => "no",
					"是" => "yes",
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "显示作者图片",
				"param_name" => "author_image",
				"value" => array(
					"默认" => "",
					"否" => "no",
					"是" => "yes",
				),
				'admin_label' => true,
				"description" => ""
			),
            array(
                "type" => "colorpicker",
                "heading" => "文字颜色",
                "param_name" => "text_color",
                "description" => ""
            ),
			array(
				"type" => "textfield",
				"heading" => "文字字体大小",
				"param_name" => "text_font_size",
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "作者文字字体粗细",
				"param_name" => "author_text_font_weight",
				"value" => array(
					"默认" 			=> "",
					"细 100"			=> "100",
					"超浅 200" 	=> "200",
					"浅 300"			=> "300",
					"正常 400"		=> "400",
					"中 500"		=> "500",
					"半粗 600"		=> "600",
					"粗 700"			=> "700",
					"超粗 800"	=> "800",
					"极粗 900"	=> "900"
				),
				"description" => ""
			),
            array(
                "type" => "colorpicker",
                "heading" => "作者文字颜色",
                "param_name" => "author_text_color",
                "description" => ""
            ),
			array(
				"type" => "textfield",
				"heading" => "作者文字字体大小 (px)",
				"param_name" => "author_text_font_size",
				"description" => "只输入数字，忽略px"
			),
            array(
                "type" => "dropdown",
                "heading" => "显示导航",
                "param_name" => "show_navigation",
                "value" => array(
                    "是" => "yes",
                    "否" => "no"
                ),
				'save_always' => true,
				'admin_label' => true,
                "description" => ""
            ),
            array(
                "type" => "dropdown",
                "heading" => "导航样式",
                "param_name" => "navigation_style",
                "value" => array(
                    "深色" => "dark",
                    "浅色" => "light"
                ),
				'save_always' => true,
                "description" => "",
                "dependency" => array("element" => "show_navigation", "value" => array("yes"))
            ),
            array(
                "type" => "dropdown",
                "heading" => "幻灯片间隔时间 (秒)",
                "param_name" => "auto_rotate_slides",
                "value" => array(
                    "3"         => "3",
                    "5"         => "5",
                    "10"        => "10",
                    "15"        => "15",
                    "禁用"   => "0"
                ),
				'save_always' => true,
                "description" => ""
            ),
            array(
                "type" => "textfield",
                "heading" => "动画速度",
                "param_name" => "animation_speed",
                "value" => "",
                "description" => __("滑动动画速度，秒")
            )
		)
) );

/*** Testimonials Masonry***/
vc_map( array(
		"name" => "客户评价切片",
		"base" => "testimonials_masonry",
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-testimonials-masonry",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "分类",
				"param_name" => "category",
				"value" => "",
				"description" => "分类别名（为所有留空）"
			),
			array(
				"type" => "dropdown",
				"heading" => "排序方式",
				"param_name" => "order_by",
				"value" => array(
					"" => "",
					"标题" => "title",
					"日期" => "date",
					"随机" => "rand"
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "顺序",
				"param_name" => "order",
				"value" => array(
					"" => "",
					"Ascending" => "ASC",
					"Descending" => "DESC",
				),
				"description" => "",
				"dependency" => array("element" => "order_by", "value" => array("title", "date"))
			),
			array(
				"type" => "textfield",
				"heading" => "区块主标题",
				"param_name" => "main_title",
				"value" => "",
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "区块主标题标签",
				"param_name" => "main_title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",
					"h5" => "h5",
					"h6" => "h6",
				),
				"description" => "",
                "dependency" => array('element' => "main_title", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"heading" => "区块主标题大小 (px)",
				"param_name" => "main_title_size",
				"value" => "",
				"description" => "",
                "dependency" => array('element' => "main_title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"heading" => "区块主描述",
				"param_name" => "description",
				"value" => "",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "区块主按钮文字",
				"param_name" => "button_text",
				"value" => "",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "按钮背景颜色",
				"param_name" => "button_bckg_color",
				"value" => "",
				"description" => "",
                "dependency" => array('element' => "button_text", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"heading" => "按钮链接",
				"param_name" => "button_link",
				"value" => "",
				"description" => "",
                "dependency" => array('element' => "button_text", 'not_empty' => true)
			),
            array(
                "type" => "dropdown",
                "heading" => "链接目标",
                "param_name" => "link_target",
                "value" => array(
                    "" => "",
                    "自身" => "_self",
                    "新窗口" => "_blank",
                    "父级" => "_parent"
                ),
                "description" => "",
                "dependency" => array('element' => "button_link", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"heading" => "显示作者图片",
				"param_name" => "author_image",
				"value" => array(
					"默认" => "",
					"否" => "no",
					"是" => "yes",
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",
					"h5" => "h5",
					"h6" => "h6",
				),
				"description" => ""
            ),
			array(
				"type" => "textfield",
				"heading" => "标题大小(px)",
				"param_name" => "title_size",
				"value" => "",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "客户评价背景颜色",
				"param_name" => "background_color",
				"value" => "",
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "作者大小 (px)",
				"param_name" => "author_size",
				"value" => "",
				"description" => ""
			)
		)
) );

// Animation holder
class WPBakeryShortCode_Qode_Animation_Holder extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        'name' => '动画容器',
        'base' => 'qode_animation_holder',
        "content_element" => true,
        'category' => '主题自带',
        'icon' => 'extended-custom-icon-qode icon-wpb-animation-holder',
        'allowed_container_element' => 'vc_row',
		"as_parent" => array('except' => 'vc_row'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "js_view" => 'VcColumnView',
        'params' => array(
            array(
                "type" => "dropdown",
                "heading" => "动画类型",
                "param_name" => "animation_type",
                "value" => array(
            		'淡入元素'	=> 'element_from_fade',
            		'元素从左'  => 'element_from_left',
            		'元素从右' => 'element_from_right',
            		'元素从上'	 => 'element_from_top',
            		'元素从下'	 => 'element_from_bottom',
            		'元素增长'	=> 'element_transform',
                ),
                'save_always' => true,
                "description" => ""
            ),
            array(
                'type' => 'textfield',
                'class' => '',
                'heading' => '动画延迟',
                'param_name' => 'animation_delay',
                'value' => '',
                'description' => '动画延迟，单位：秒.'
            ),
        )
) );

class WPBakeryShortCode_Animated_Icons_With_Text  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "动画图标带文字", "qode",
        "base" => "animated_icons_with_text",
        "as_parent" => array('only' => 'animated_icon_with_text'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => '主题自带',
		"icon" => "extended-custom-icon-qode icon-wpb-animated_icons_with_text",
        "show_settings_on_create" => true,
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => "列",
                "param_name" => "columns",
                "value" => array(
                    "二"       => "two_columns",
                    "三"     => "three_columns",
                    "四"      => "four_columns",
                    "五"      => "five_columns"
                ),
				'save_always' => true,
				"admin_label" => true,
                "description" => ""
            )
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Animated_Icon_With_Text extends WPBakeryShortCode {}
vc_map( array(
        "name" => "动画图标带文字", "qode",
        "base" => "animated_icon_with_text",
		"icon" => "extended-custom-icon-qode icon-wpb-animated_icon_with_text_item",
        "content_element" => true,
        "as_child" => array('only' => 'animated_icons_with_text'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "textfield",
				"heading" => "标题",
				"param_name" => "title",
				"description" => "",
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",
					"h5" => "h5",
					"h6" => "h6",
				),
				"description" => ""
            ),
			array(
				"type" => "textarea",
				"heading" => "文字",
				"param_name" => "text",
				"description" => "",
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => "图标",
				"param_name" => "icon",
				"value" => $icons,
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "图标大小",
				"param_name" => "size",
				"description" => "填上数字，单位像素。例如：25"
			),
			array(
				"type" => "colorpicker",
				"heading" => "图标颜色",
				"param_name" => "icon_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "图标背景颜色",
				"param_name" => "icon_background_color",
				"description" =>""
			),
            array(
				"type" => "colorpicker",
				"heading" => "边框颜色",
				"param_name" => "border_color",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "悬停图标颜色",
				"param_name" => "icon_color_hover",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => "悬停图标背景颜色",
				"param_name" => "icon_background_color_hover",
				"description" =>""
			),
            array(
				"type" => "colorpicker",
				"heading" => "悬停边框颜色",
				"param_name" => "border_color_hover",
				"description" => ""
			)
        )
) );

class WPBakeryShortCode_Qode_Circles  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
		'name'				=> '流程容器', 'qode',
		'base'				=> 'qode_circles',
		'as_parent'			=> array('only' => 'qode_circle'),
		'content_element'	=> true,
		'category'			=> '主题自带',
		'icon'				=> 'extended-custom-icon-qode icon-wpb-qode_circles',
		'params' => array(
			array(
				'type'			=> 'dropdown',
				'heading'		=> '列',
				'param_name'	=> 'columns',
				'value'			=> array(
					'三'	=> 'three_columns',
					'四'	=> 'four_columns',
					'五'	=> 'five_columns'
				),
				'save_always' => true,
				'description' => ''
			),
			array(
				'type'			=> 'dropdown',
				'heading'		=> '流程之间线',
				'param_name'	=> 'circle_line',
				'value'			=> array(
					'否'	=> 'no_line',
					'是'	=> 'with_line',
				),
				'save_always'	=> true
			),
			array(
				'type'			=> 'colorpicker',
				'heading'		=> '线颜色',
				'param_name'	=> 'line_color',
			)
		),
		'js_view' => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Circle extends WPBakeryShortCode {}
vc_map( array(
	'name' => '流程', 'qode',
	'base' => 'qode_circle',
	'content_element' => true,
	'icon' => 'extended-custom-icon-qode icon-wpb-qode_circle',
	'as_child' => array('only' => 'qode_circles'), // Use only|except attributes to limit parent (separate multiple values with comma)
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => '类型',
			'param_name' => 'type',
			'value' => array(
				'流程图标' => 'icon_type',
				'图片' => 'image_type',
				'流程文字' => 'text_type'
			),
			'save_always' => true,
			'admin_label' => true
		),
		array(
			'type' => 'colorpicker',
			'heading' => '背景流程颜色',
			'param_name' => 'background_color',
			'description' => ''
		),
		array(
			'type' => 'textfield',
			'heading' => '背景流程透明度',
			'param_name' => 'background_transparency',
			'description' => '插入0和1之间的值'
		),
		array(
			'type' => 'colorpicker',
			'heading' => '流程边框颜色',
			'param_name' => 'border_color',
			'description' => ''
		),
		array(
			'type' => 'textfield',
			'heading' => '流程边框宽度',
			'param_name' => 'border_width',
			'description' => ''
		),
		array(
			'type' => 'dropdown',
			'heading' => '图标',
			'param_name' => 'icon',
			'value' => $icons,
			'save_always' => true,
			'dependency' => array('element' => 'type', 'value' => array('icon_type'))
		),
		array(
			'type' => 'dropdown',
			'heading' => '大小',
			'param_name' => 'size',
			'value' => array(
				'很小' => 'fa-lg',
				'小' => 'fa-2x',
				'正常' => 'fa-3x',
				'大' => 'fa-4x',
				'很大' => 'fa-5x'
			),
			'save_always' => true,
			'dependency' => array('element' => 'type', 'value' => array('icon_type'))
		),
		array(
			'type' => 'colorpicker',
			'heading' => '图标颜色',
			'param_name' => 'icon_color',
			'dependency' => array('element' => 'type', 'value' => array('icon_type'))
		),
		array(
			'type' => 'attach_image',
			'heading' => '图片',
			'param_name' => 'image',
			'dependency' => array('element' => 'type', 'value' => array('image_type'))
		),
		array(
			'type' => 'textfield',
			'heading' => '流程文字',
			'param_name' => 'text_in_circle',
			'dependency' => array('element' => 'type', 'value' => array('text_type')),
			'admin_label' => true
		),
		array(
			'type' => 'dropdown',
			'heading' => '流程标签文字',
			'param_name' => 'text_in_circle_tag',
			'value' => array(
				''   => '',
				'h2' => 'h2',
				'h3' => 'h3',
				'h4' => 'h4',
				'h5' => 'h5',
				'h6' => 'h6',
			),
			'description' => '',
			'dependency' => array('element' => 'text_in_circle', 'not_empty' => true)
		),
		array(
			'type' => 'textfield',
			'heading' => '流程文字大小 (px)',
			'param_name' => 'font_size',
			'dependency' => array('element' => 'text_in_circle', 'not_empty' => true)
		),
		array(
			'type' => 'colorpicker',
			'heading' => '流程文字颜色',
			'param_name' => 'text_in_circle_color',
			'description' => '',
			'dependency' => array('element' => 'text_in_circle', 'not_empty' => true)
		),
		array(
			'type' => 'dropdown',
			'heading' => '流程文字字体粗细',
			'param_name' => 'text_in_circle_font_weight',
			'description' => '不是所有的值都可以选择字体',
			'value' => array(
				'默认' => '',
				'细 100' => '100',
				'超浅 200' => '200',
				'浅 300' => '300',
				'正常 400' => '400',
				'中 500' => '500',
				'半粗 600' => '600',
				'粗 700' => '700',
				'超粗 800' => '800',
				'极粗 900' => '900'
			),
			'dependency' => array('element' => 'text_in_circle', 'not_empty' => true)
		),
		array(
			'type' => 'textfield',
			'heading' => '链接',
			'param_name' => 'link',
			'description' => ''
		),
		array(
			'type' => 'dropdown',
			'heading' => '链接打开方式',
			'param_name' => 'link_target',
			'value' => array(
				'' => '',
				'自身' => '_self',
				'新窗口' => '_blank',
				'父级' => '_parent'
			),
			'description' => '',
			'dependency' => array('element' => 'link', 'not_empty' => true)
		),
		array(
			'type' => 'textfield',
			'heading' => '标题',
			'param_name' => 'title',
			'description' => ''
		),
		array(
			'type' => 'dropdown',
			'heading' => '标题标签',
			'param_name' => 'title_tag',
			'value' => array(
				''   => '',
				'h2' => 'h2',
				'h3' => 'h3',
				'h4' => 'h4',
				'h5' => 'h5',
				'h6' => 'h6',
			),
			'description' => '',
			'dependency' => array('element' => 'title', 'not_empty' => true)
		),
		array(
			'type' => 'colorpicker',
			'heading' => '标题颜色',
			'param_name' => 'title_color',
			'description' => '',
			'dependency' => array('element' => 'title', 'not_empty' => true)
		),
		array(
			'type' => 'textarea',
			'heading' => '文字',
			'param_name' => 'text',
			'description' => ''
		),
		array(
			'type' => 'colorpicker',
			'heading' => '文字颜色',
			'param_name' => 'text_color',
			'description' => '',
			'dependency' => array('element' => 'text', 'not_empty' => true)
		)
	)
) );

class WPBakeryShortCode_Qode_Clients  extends WPBakeryShortCodesContainer {}
vc_map( array(
	'name' => '客户', 'qode',
	'base' => 'qode_clients',
	'as_parent' => array('only' => 'qode_client'),
	'content_element' => true,
	'category' => '主题自带',
	'icon' => 'extended-custom-icon-qode icon-wpb-qode_clients',
	'show_settings_on_create' => true,
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => '列',
			'param_name' => 'columns',
			'value' => array(
				'二'       => 'two_columns',
				'三'     => 'three_columns',
				'四'      => 'four_columns',
				'五'      => 'five_columns',
				'六'       => 'six_columns'
			),
			'save_always' => true,
			'admin_label' => true,
			'description' => ''
		)
	),
	'js_view' => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Client extends WPBakeryShortCode {}
vc_map( array(
	'name' => '客户', 'qode',
	'base' => 'qode_client',
	'content_element' => true,
	'icon' => 'extended-custom-icon-qode icon-wpb-qode_client',
	'as_child' => array('only' => 'qode_clients'), // Use only|except attributes to limit parent (separate multiple values with comma)
	'params' => array(
		array(
			'type'			=> 'attach_image',
			'heading'		=> '图片',
			'param_name'	=> 'image'
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> '链接',
			'param_name'	=> 'link',
			'admin_label'	=> true
		),
		array(
			'type'			=> 'dropdown',
			'heading'		=> '链接打开方式',
			'param_name'	=> 'link_target',
			'value'			=> array(
				'' => '',
				'自身' => '_self',
				'新窗口' => '_blank',
				'父级' => '_parent'
			)
		)
	)
) );

class WPBakeryShortCode_Qode_Elements_Holder  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  __( '元素容器', 'qode' ),
	"base" => "qode_elements_holder",
	"as_parent" => array('only' => 'qode_elements_holder_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => '主题自带',
	"icon" => "extended-custom-icon-qode icon-wpb-qode_elements_holder",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"heading" => "背景颜色",
			"param_name" => "background_color",
			"value" => "",
			"description" => ""
		),
		array(
			"type" => "dropdown",
			"heading" => "列",
			"param_name" => "number_of_columns",
			"value" => array(
				"一"    	=> "one_column",
				"二"    	=> "two_columns",
				"三"     => "three_columns",
				"四"      => "four_columns"
			),
			"admin_label" => true,
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"heading" => "列比例",
			"param_name" => "columns_proportion",
			"value" => array(
				"50:50"    	=> "50_50",
				"66:33"    	=> "66_33",
				"33:66"     => "33_66",
				"25:75"		=> "25_75",
				"75:25"		=> "75_25"
			),
			"dependency" => array("element" => "number_of_columns", "value" => array("two_columns"))
		),
		array(
			"type" => "dropdown",
			"heading" => "列比例",
			"param_name" => "three_columns_proportion",
			"value" => array(
				"33:33:33"    	=> "33_33_33",
				"50:25:25"    	=> "50_25_25",
				"25:25:50"     => "25_25_50"
			),
			"dependency" => array("element" => "number_of_columns", "value" => array("three_columns"))
		),
		array(
			"type" => "dropdown",
			"group" => "宽度和自适应",
			"heading" => "切换为一列",
			"param_name" => "switch_to_one_column",
			"value" => array(
				"默认"    		=> "",
				"1300px以下" 		=> "1300",
				"1000px以下"    	=> "1000",
				"768px以下"     	=> "768",
				"600px以下"    	=> "600",
				"480px以下"    	=> "480",
				"从不"    			=> "never"
			),
			"admin_label" => true,
			"description" => "选择在哪个阶段项目将在一列"
		),
		array(
			"type" => "dropdown",
			"group" => "宽度和自适应",
			"heading" => "选择自适应模式对齐方式",
			"param_name" => "alignment_one_column",
			"value" => array(
				"默认"    	=> "",
				"左" 			=> "left",
				"中"    	=> "center",
				"右"     	=> "right"
			),
			"description" => "当项目在一列时对齐"
		)
	)
) );

class WPBakeryShortCode_Qode_Elements_Holder_Item  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  __( '元素容器项目', 'qode' ),
	"base" => "qode_elements_holder_item",
	"as_parent" => array('except' => 'vc_row, vc_accordion, cover_boxes, portfolio_list, portfolio_slider, qode_carousel'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"as_child" => array('only' => 'qode_elements_holder'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => '主题自带',
	"icon" => "extended-custom-icon-qode icon-wpb-qode_elements_holder_item",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
			array(
				"type" => "colorpicker",
				"heading" => "背景颜色",
				"param_name" => "background_color",
                "value" => "",
				"admin_label" => true,
                "description" => ""
            ),
			array(
				"type" => "attach_image",
				"heading" => "背景图片",
				"param_name" => "background_image",
				"value" => "",
				"admin_label" => true,
				"description" => ""
			),
			array(
                "type" => "textfield",
                "heading" => "Padding",
                "param_name" => "item_padding",
                "value" => "",
				"admin_label" => true,
                "description" => "请插入填充，格式：0px 10px 0px 10px"
            ),
			array(
				"type" => "dropdown",
				"heading" => "垂直对齐",
				"param_name" => "vertical_alignment",
				"value" => array(
					"默认" => "",
					"上" => "top",
					"中" => "middle",
					"下" => "bottom"
				),
				"admin_label" => true,
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "高级滚动动画",
				"param_name" => "advanced_animations",
				"value" => array(
					"否" => "no",
					"是" => "yes"
				),
				'save_always' => true,
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "动画开始位置",
				"param_name" => "start_position",
				"value" => array(
					'页面底部' => 'bottom',
					'页面中间' => 'center'
				),
				'save_always' => true,
				"description" => "",
				"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
			),
			array(
				"type" => "textfield",
				"heading" => "开始动画风格",
				"param_name" => "start_animation_style",
				"description" => "",
				"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
			),
			array(
				"type" => "dropdown",
				"heading" => "动画结束位置",
				"param_name" => "end_position",
				"value" => array(
					"页面中间" => "center",
					"页面顶部" => "top-bottom"
				),
				'save_always' => true,
				"description" => "",
				"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
			),
			array(
				"type" => "textfield",
				"heading" => "结束动画风格",
				"param_name" => "end_animation_style",
				"description" => "",
				"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
			),
			array(
				'type' => 'textfield',
				'class' => '',
				'group' => '宽度和自适应',
				'heading' => '1280px-1440px屏幕大小之间填充',
				'param_name' => 'item_padding_1280_1440',
				'value' => '',
				'description' => '请插入填充，格式：0px 10px 0px 10px'
			),
            array(
                'type' => 'textfield',
                'class' => '',
                'group' => '宽度和自适应',
                'heading' => '屏蔽大小在1024px-1280px之间的填充',
                'param_name' => 'item_padding_1024_1280',
                'value' => '',
                'description' => '请插入填充，格式：0px 10px 0px 10px'
            ),
            array(
                'type' => 'textfield',
                'class' => '',
                'group' => '宽度和自适应',
                'heading' => '屏幕大小在768px-1024px之间的填充',
                'param_name' => 'item_padding_768_1024',
                'value' => '',
                'description' => '请插入填充，格式：0px 10px 0px 10px'
            ),
            array(
                'type' => 'textfield',
                'class' => '',
                'group' => '宽度和自适应',
                'heading' => '屏幕大小在600px-768px之间的填充',
                'param_name' => 'item_padding_600_768',
                'value' => '',
                'description' => '请插入填充，格式：0px 10px 0px 10px'
            ),
            array(
                'type' => 'textfield',
                'class' => '',
                'group' => '宽度和自适应',
                'heading' => '屏幕大小在480px-600px之间的填充',
                'param_name' => 'item_padding_480_600',
                'value' => '',
                'description' => '请插入填充，格式：0px 10px 0px 10px'
            ),
            array(
                'type' => 'textfield',
                'class' => '',
                'group' => '宽度和自适应',
                'heading' => '屏幕大小480px以下的填充',
                'param_name' => 'item_padding_480',
                'value' => '',
                'description' => '请插入填充，格式：0px 10px 0px 10px'
            )
        )
) );

class WPBakeryShortCode_Qode_Pricing_List  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" => "价格列表", "qode",
	"base" => "qode_pricing_list",
	"as_parent" => array('only' => 'qode_pricing_list_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => '主题自带',
	"icon" => "extended-custom-icon-qode icon-wpb-qode_pricing_list",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Pricing_List_Item extends WPBakeryShortCode {}
vc_map( array(
	"name" => "价格列表项目", "qode",
	"base" => "qode_pricing_list_item",
	"content_element" => true,
	"icon" => "extended-custom-icon-qode icon-wpb-pricing_list_item",
	"as_child" => array('only' => 'qode_pricing_list'), // Use only|except attributes to limit parent (separate multiple values with comma)
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => "标题",
			"param_name" => "title",
			'admin_label' => true
		),
		array(
			"type" => "colorpicker",
			"heading" => "标题颜色",
			"param_name" => "title_color"
		),
		array(
			"type" => "textfield",
			"heading" => "标题字体大小 (px)",
			"param_name" => "title_font_size",
			"description" => "只输入数字，忽略单位，它会自动添加"
		),
		array(
			"type" => "dropdown",
			"heading" => "标题标签",
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				"h2" => "h2",
				"h3" => "h3",
				"h4" => "h4",
				"h5" => "h5",
				"h6" => "h6",
			),
			"description" => "",
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"heading" => "文字",
			"param_name" => "text",
			'admin_label' => true
		),
		array(
			"type" => "colorpicker",
			"heading" => "文字颜色",
			"param_name" => "text_color",
		),
		array(
			"type" => "textfield",
			"heading" => "文字字体大小 (px)",
			"param_name" => "text_font_size",
			"description" => "只输入数字。忽略单位，它会自动添加"
		),
		array(
			"type" => "textfield",
			"heading" => "价格",
			"param_name" => "price",
			"description" => "你可以添加任何单位",
			'admin_label' => true
		),
		array(
			"type" => "colorpicker",
			"heading" => "价格颜色",
			"param_name" => "price_color",
		),
		array(
			"type" => "textfield",
			"heading" => "价格字体大小 (px)",
			"param_name" => "price_font_size",
			"description" => "只输入数字，忽略单位，它会自动添加"
		)
	)
) );

class WPBakeryShortCode_Qode_Pricing_Tables  extends WPBakeryShortCodesContainer {}
vc_map( array(
    "name" => "价格表", "qode",
    "base" => "qode_pricing_tables",
    "as_parent" => array('only' => 'qode_pricing_table'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element" => true,
    "category" => '主题自带',
    "icon" => "extended-custom-icon-qode icon-wpb-pricing_column",
    "show_settings_on_create" => true,
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => "列",
            "param_name" => "columns",
            "value" => array(
                "二"       => "two_columns",
                "三"     => "three_columns",
                "四"      => "four_columns",
            ),
			'admin_label'	=> true,
			'save_always' => true,
            "description" => ""
        )
    ),
    "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Pricing_Table  extends WPBakeryShortCode {}
// Pricing table shortcode
vc_map( array(
		"name" => "价格表",
		"base" => "qode_pricing_table",
		"icon" => "extended-custom-icon-qode icon-wpb-pricing_list_item",
		"category" => '主题自带',
		"allowed_container_element" => 'vc_row',
        "as_child" => array('only' => 'qode_pricing_tables'), // Use only|except attributes to limit parent (separate multiple values with comma)
		"params" => array(
			array(
				"type" => "dropdown",
				"heading" => "Type",
				"param_name" => "type",
				"value" => array(
					"标准"	=> "standard",
					"高级"	=> "advanced"
				),
				'admin_label'	=> true,
				"description" => ""
			),
			array(
				"type"			=> "attach_image",
				"heading"		=> "图片",
				"param_name"	=> "image",
				"dependency" 	=> array('element' => "type", 'value' => 'advanced')
			),
			array(
				"type" => "textfield",
				"heading" => "标题",
				"param_name" => "title",
				"value" => "Basic Plan",
				'admin_label'	=> true,
				'save_always'	=> true,
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "标题标签",
				"param_name" => "title_tag",
				"value" => array(
					'h2' => 'h2',
					'h3' => 'h3',
					'h4' => 'h4',
					'h5' => 'h5',
					'h6' => 'h6',
				),
				'save_always'	=> true,
				"description" => ""
			),
			array(
				"type"			=> "textfield",
				"heading"		=> "子标题",
				"param_name"	=> "subtitle",
				"value"			=> "",
				"dependency" 	=> array('element' => "type", 'value' => 'advanced')
			),
			array(
				"type"			=> "textfield",
				"heading"		=> "简短信息",
				"param_name"	=> "short_info",
				"value"			=> "",
				"dependency" 	=> array('element' => "type", 'value' => 'advanced')
			),
			array(
				"type"			=> "textfield",
				"heading"		=> "附加信息",
				"param_name"	=> "additional_info",
				"value"			=> "",
				"dependency" 	=> array('element' => "type", 'value' => 'advanced')
			),
			array(
				"type" => "textfield",
				"heading" => "价格",
				"param_name" => "price",
				'admin_label'	=> true,
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "货币",
				"param_name" => "currency",
				'admin_label'	=> true,
				"description" => ""
			),
			array(
				"type" => "textfield",
				"heading" => "价格周期",
				"param_name" => "price_period",
				'admin_label'	=> true,
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => "显示按钮",
				"param_name" => "show_button",
				"value" => array(
					"是" => "yes",
					"否" => "no"
				),
				'admin_label'	=> true,
				'save_always' => true
			),
            array(
                "type" => "textfield",
                "heading" => "按钮文字",
                "param_name" => "button_text",
                "description" => "默认标签是购买",
                "dependency" => array('element' => 'show_button', 'value' => 'yes')
            ),
			array(
				"type" => "textfield",
				"heading" => "按钮链接",
				"param_name" => "link",
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"heading" => "按钮目标",
				"param_name" => "target",
				"value" => array(
					"" => "",
					"自身" => "_self",
					"新窗口" => "_blank",
					"父级" => "_parent"
				),
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"heading" => "按钮大小",
				"param_name" => "button_size",
				"value" => array(
					"" => "",
					"小" => "small",
					"中m" => "medium",
					"大" => "large"
				),
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				'type'			=> 'dropdown',
				'heading'		=> '激活',
				'param_name'	=> 'active',
				'value' => array(
					'否' => 'no',
					'是' => 'yes'
				),
				'save_always'	=> true,
				'admin_label'	=> true,
				'dependency' 	=> array('element' => 'type', 'value' => 'standard')
			),
            array(
                "type" => "textfield",
                "heading" => "激活文字",
                "param_name" => "active_text",
                "dependency" => array('element' => 'active', 'value' => 'yes')
            ),
			array(
				"type" => "textarea_html",
				"heading" => "内容",
				"param_name" => "content",
				"value" => "<li>这里是四亩地文字</li><li>这里是四亩地文字</li><li>这里是四亩地文字</li>",
				"description" => ""
			)
		)
) );

class WPBakeryShortCode_Qode_Vertical_Split_Slider  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  __( '垂直分割幻灯片', 'qode' ),
	"base" => "qode_vertical_split_slider",
	"as_parent" => array('only' => 'qode_vertical_left_sliding_panel,qode_vertical_right_sliding_panel'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => '主题自带',
	"icon" => "extended-custom-icon-qode icon-wpb-vertical_split_slider",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Vertical_Left_Sliding_Panel  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  __( 'Left Sliding Panel', 'qode' ),
	"base" => "qode_vertical_left_sliding_panel",
	"as_parent" => array('only' => 'qode_vertical_slide_content_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"as_child" => array('only' => 'qode_vertical_split_slider'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => '主题自带',
	"icon" => "extended-custom-icon-qode icon-wpb-vertical_split_left",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Vertical_Right_Sliding_Panel  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  __( 'Right Sliding Panel', 'qode' ),
	"base" => "qode_vertical_right_sliding_panel",
	"as_parent" => array('only' => 'qode_vertical_slide_content_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"as_child" => array('only' => 'qode_vertical_split_slider'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => '主题自带',
	"icon" => "extended-custom-icon-qode icon-wpb-vertical_split_right",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Vertical_Slide_Content_Item  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  __( 'Slide Content Item', 'qode' ),
	"base" => "qode_vertical_slide_content_item",
	"as_parent" => array('except' => 'vc_row, vc_accordion, cover_boxes, portfolio_list, portfolio_slider, qode_carousel'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"as_child" => array('only' => 'qode_vertical_left_sliding_panel, qode_vertical_right_sliding_panel'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => '主题自带',
	"icon" => "extended-custom-icon-qode icon-wpb-qode_horizontal_marquee_item",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"heading" => "背景颜色",
			"param_name" => "background_color",
			"value" => "",
			"description" => ""
		),
		array(
			"type" => "attach_image",
			"heading" => "背景图片",
			"param_name" => "background_image",
			"value" => "",
			"description" => ""
		),
		array(
			"type" => "textfield",
			"heading" => "左/右填充",
			"param_name" => "item_padding",
			"value" => "",
			"description" => "请插入填充，格式： '10px'"
		),
		array(
			"type" => "dropdown",
			"heading" => "内容对齐方式",
			"param_name" => "aligment",
			"value" => array(
				"左"    	=> "left",
				"右"     => "right",
				"中"      => "center"
			),
			'save_always' => true,
			"description" => ""
		),
		array(
			"type" => "dropdown",
			"heading" => "页眉/项目符号风格",
			"param_name" => "header_style",
			"value" => array(
				""	=>	"",
				"浅色"	=>	"light",
				"深色"	=>	"dark"
			),
			"description" => ""
		)

	)
) );

/******* Horizontal Marquee Shortcodes ***********/

class WPBakeryShortCode_Qode_Horizontal_Marquee  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  __( '水平字幕', 'qode' ),
	"base" => "qode_horizontal_marquee",
	"as_parent" => array('only' => 'qode_horizontal_marquee_item'),
	"content_element" => true,
	"category" => '主题自带',
	"icon" => "extended-custom-icon-qode icon-wpb-qode_horizontal_marquee",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type"			=> "textfield",
			"heading" => "高度 (px)",
			"param_name"	=> "height",
			"admin_label"	=> true,
			"description"	=> "输入字幕所需的高度。它可能会变得更低，以适应较小的屏幕."
		),
		array(
			"type" => "textfield",
			"heading" => "间距 (px)",
			"param_name" => "spacing",
			"description" => "选取框项目之间的距离。"
		)
	),
	"js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Horizontal_Marquee_Item  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  __( '水平字幕项目', 'qode' ),
	"base" => "qode_horizontal_marquee_item",
	"as_parent" => array('except' => 'vc_row, vc_tabs, vc_accordion, cover_boxes, portfolio_list, portfolio_slider, qode_carousel'),
	"as_child" => array('only' => 'qode_horizontal_marquee'),
	"content_element" => true,
	"category" => '主题自带',
	"icon" => "extended-custom-icon-qode icon-wpb-qode_horizontal_marquee_item",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => "宽度 (px)",
			"param_name" => "width",
			"description" => "输入此项目所需的宽度。这可能是低于小屏幕。"
		),
		array(
			"type" => "dropdown",
			"heading" => "垂直对齐",
			"param_name" => "align",
			"value" => array(
				"上"    	=> "top",
				"中"     => "middle",
				"下"      => "bottom"
			),
			'save_always' => true,
			"description" => "如何调整这个项目的相对于选框的高度内容."
		)
	),
	"js_view" => 'VcColumnView'
) );

/******* Preview Slider Shortcodes ***********/

class WPBakeryShortCode_Qode_Preview_Slider  extends WPBakeryShortCodesContainer {}
vc_map( array(
    "name" =>  __( '预览幻灯片', 'qode' ),
    "base" => "qode_preview_slider",
    "as_parent" => array('only' => 'qode_preview_slider_item'),
    "content_element" => true,
    "category" => '主题自带',
    "icon" => "extended-custom-icon-qode icon-wpb-qode_preview_slider",
    "show_settings_on_create" => false,
    "params" => array(),
    "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Preview_Slider_Item  extends WPBakeryShortCode {}
vc_map( array(
    "name" =>  __( '预览幻灯片项目', 'qode' ),
    "base" => "qode_preview_slider_item",
    "as_child" => array('only' => 'qode_preview_slider'),
    "category" => '主题自带',
    "icon" => "extended-custom-icon-qode icon-wpb-qode_preview_slider_item",
    "show_settings_on_create" => true,
    "params" => array(
        array(
            "type" => "attach_image",
            "heading" => "主图",
            "param_name" => "big_image",
            "description" => "",
			"admin_label" => true
        ),
        array(
            "type" => "attach_image",
            "heading" => "预览图",
            "param_name" => "small_image",
            "description" => "",
			"admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => "链接",
            "param_name" => "link",
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => "链接目标",
            "param_name" => "target",
            "value" => array(
                "自身" => "_self",
                "新窗口" => "_blank"
            ),
            'save_always' => true
        )
    )
) );

/******* In-Device Slider Shortcodes ***********/

class WPBakeryShortCode_Qode_In_Device_Slider  extends WPBakeryShortCodesContainer {}
vc_map( array(
    "name" =>  __( '设备内幻灯片', 'qode' ),
    "base" => "qode_in_device_slider",
    "as_parent" => array('only' => 'qode_in_device_slider_item'),
    "content_element" => true,
    "category" => '主题自带',
    "icon" => "extended-custom-icon-qode icon-wpb-qode_in_device_slider",
    "show_settings_on_create" => true,
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => "设备",
            "param_name" => "device",
            "description" => "选择在哪个幻灯片显示相框.",
            "value" => array(
                "桌面" => "desktop",
                "平板 - 竖向" => "tablet-portrait",
                "平板 - 横向" => "tablet-landscape",
                "手机 - 竖向" => "phone-portrait",
                "手机 - 横向" => "phone-landscape"
            ),
            'save_always' => true,
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => "悬停图片标题",
            "param_name" => "titles_on_hover",
            "value" => array(
                "是" => "yes",
                "否" => "no"
            ),
            'save_always' => true,
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => "显示导航箭头？",
            "param_name" => "navigation",
            "value" => array(
                "否" => "no",
                "是" => "yes"
            ),
            'save_always' => true,
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => "自动开始幻灯片",
            "param_name" => "auto_start",
            "value" => array(
                "是" => "yes",
                "否" => "no"
            ),
            'save_always' => true,
			"admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => "幻灯片之间时间 (ms)",
            "description" => "默认是5000.",
            "param_name" => "timeout",
            "placeholder" => '5000',
            'dependency' => array('element' => 'auto_start', 'value' => array('yes'))
        )
    ),
    "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_In_Device_Slider_Item  extends WPBakeryShortCode {}
vc_map( array(
    "name" =>  __( '设备内幻灯片项目', 'qode' ),
    "base" => "qode_in_device_slider_item",
    "as_child" => array('only' => 'qode_in_device_slider'),
    "category" => '主题自带',
    "icon" => "extended-custom-icon-qode icon-wpb-qode_in_device_slider_item",
    "show_settings_on_create" => true,
    "params" => array(
        array(
            "type" => "attach_image",
            "heading" => "图片",
            "param_name" => "image",
            "description" => ""
        ),
        array(
            "type" => "textfield",
            "heading" => "标题",
            "param_name" => "title",
			"admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => "链接",
            "param_name" => "link"
        ),
        array(
            "type" => "dropdown",
            "heading" => "链接打开方式",
            "param_name" => "target",
            "value" => array(
                "自身" => "_self",
                "新窗口" => "_blank"
            ),
            'save_always' => true
        )
    )
) );

/******* Content Slider Shortcodes ***********/

class WPBakeryShortCode_Qode_Content_Slider  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
    "name" =>  __( '内容幻灯片', 'qode' ),
    "base" => "qode_content_slider",
    "as_parent" => array('only' => 'qode_content_slider_item'),
    "content_element" => true,
    "category" => '主题自带',
    "icon" => "extended-custom-icon-qode icon-wpb-qode_content_slider",
    "show_settings_on_create" => true,
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => "自动播放",
            "param_name" => "auto_rotate",
            "value" => array(
                "3" => "3",
                "5" => "5",
                "10" => "10",
                "禁用" => "0"
            ),
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => "启用拖放",
            "param_name" => "enable_drag",
            "value" => array(
                '' => '',
                '是' => 'yes',
                '否' => 'no'
            )
        ),
        array(
            "type" => "dropdown",
            "heading" => "显示方向导航",
            "param_name" => "direction_nav",
            "value" => array(
                '' => '',
                '是' => 'yes',
                '否' => 'no'
            )
        ),
        array(
            "type" => "dropdown",
            "heading" => "显示控制导航",
            "param_name" => "control_nav",
            "value" => array(
                '' => '',
                '是' => 'yes',
                '否' => 'no'
            )
        ),
        array(
            "type" => "dropdown",
            "heading" => "对齐控制导航",
            "param_name" => "control_nav_justify",
            "value" => array(
                '' => '',
                '是' => 'yes',
                '否' => 'no'
            ),
            "description" => "",
			"dependency" => Array('element' => "control_nav", 'not_empty' => true)
        ),
        array(
            "type" => "dropdown",
            "heading" => "悬停暂停",
            "param_name" => "pause_on_hover",
            "value" => array(
                '' => '',
                '是' => 'yes',
                '否' => 'no'
            )
        )
    ),
    "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Content_Slider_Item  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
    "name" =>  __( 'Content Slider Item', 'qode' ),
    "base" => "qode_content_slider_item",
    "as_parent" => array(''),
    "as_child" => array('only' => 'qode_content_slider'),
    "content_element" => true,
    "category" => '主题自带',
    "icon" => "extended-custom-icon-qode icon-wpb-qode_content_slider_item",
    "show_settings_on_create" => false,
    "js_view" => 'VcColumnView'
) );

/***************** Woocommerce Shortcodes *********************/
//
if(function_exists("is_woocommerce") && version_compare(qode_get_vc_version(), '4.4.2') < 0){

/**** Order Tracking ***/

vc_map( array(
		"name" => "Order Tracking",
		"base" => "woocommerce_order_tracking",
		"icon" => "icon-wpb-woocommerce_order_tracking",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		 "show_settings_on_create" => false
));

/*** Product price/cart button ***/

vc_map( array(
		"name" => "Product price/cart button",
		"base" => "add_to_cart",
		"icon" => "icon-wpb-add_to_cart",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "ID",
				"param_name" => "id",
				"admin_label" => true
			),
			array(
				"type" => "textfield",
				"heading" => "SKU",
				"param_name" => "sku",
				"admin_label" => true
			)
		)
) );

/*** Product by SKU/ID ***/

vc_map( array(
		"name" => "Product by SKU/ID",
		"base" => "product",
		"icon" => "icon-wpb-product",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "ID",
				"param_name" => "id",
				"admin_label" => true
			),
			array(
				"type" => "textfield",
				"heading" => "SKU",
				"param_name" => "sku",
				"admin_label" => true
			)
		)
) );


/*** Products by SKU/ID ***/

vc_map( array(
		"name" => "Products by SKU/ID",
		"base" => "products",
		"icon" => "icon-wpb-products",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "IDS",
				"param_name" => "ids",
				"admin_label" => true
			),
			array(
				"type" => "textfield",
				"heading" => "SKUS",
				"param_name" => "skus",
				"admin_label" => true
			)
		)
) );

/*** Product categories ***/

vc_map( array(
		"name" => "Product categories",
		"base" => "product_categories",
		"icon" => "icon-wpb-product_categories",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "Number",
				"param_name" => "number",
				"admin_label" => true
			)
		)
) );

/*** Products by category slug ***/

vc_map( array(
		"name" => "Products by category slug",
		"base" => "product_category",
		"icon" => "icon-wpb-product_category",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "Category",
				"param_name" => "category",
				"admin_label" => true
			),
			array(
				"type" => "textfield",
				"heading" => "Per Page",
				"param_name" => "per_page",
				"value" => "12",
				"admin_label" => true
			),
			array(
				"type" => "textfield",
				"heading" => "Columns",
				"param_name" => "columns",
				"value" => "4",
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => "排序方式",
				"param_name" => "orderby",
				"value" => array(
					"日期" => "date",
					"标题" => "title",
				),
				"save_always" => true,
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => "Order",
				"param_name" => "order",
				"value" => array(
					"DESC" => "desc",
					"ASC" => "asc"
				),
				"save_always" => true,
				"admin_label" => true
			)
		)
) );

/*** Recent products ***/

vc_map( array(
		"name" => "Recent products",
		"base" => "recent_products",
		"icon" => "icon-wpb-recent_products",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "Per Page",
				"param_name" => "per_page",
				"value" => "12",
				"admin_label" => true
			),
			array(
				"type" => "textfield",
				"heading" => "Columns",
				"param_name" => "columns",
				"value" => "4",
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => "Order By",
				"param_name" => "order_by",
				"value" => array(
					"Date" => "date",
					"Title" => "title",
				),
				"save_always" => true,
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => "Order",
				"param_name" => "order",
				"value" => array(
					"DESC" => "desc",
					"ASC" => "asc"
				),
				"save_always" => true,
				"admin_label" => true
			),
		)
) );

/*** Featured products ***/

vc_map( array(
		"name" => "Featured products",
		"base" => "featured_products",
		"icon" => "icon-wpb-featured_products",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => "Per Page",
				"param_name" => "per_page",
				"value" => "12",
				"admin_label" => true
			),
			array(
				"type" => "textfield",
				"heading" => "Columns",
				"param_name" => "columns",
				"value" => "4",
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => "Order By",
				"param_name" => "order_by",
				"value" => array(
					"Date" => "date",
					"Title" => "title",
				),
				"save_always" => true,
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => "Order",
				"param_name" => "order",
				"value" => array(
					"DESC" => "desc",
					"ASC" => "asc"
				),
				"save_always" => true,
				"admin_label" => true
			),
		)
) );

/**** Shop Messages ***/

vc_map( array(
		"name" => "Shop Messages",
		"base" => "woocommerce_messages",
		"icon" => "icon-wpb-woocommerce_messages",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		 "show_settings_on_create" => false
));

/**** Cart ***/

vc_map( array(
		"name" => "Pages - Cart",
		"base" => "woocommerce_cart",
		"icon" => "icon-wpb-woocommerce_cart",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		 "show_settings_on_create" => false
));

/**** Checkout ***/

vc_map( array(
		"name" => "Pages - Checkout",
		"base" => "woocommerce_checkout",
		"icon" => "icon-wpb-woocommerce_checkout",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		 "show_settings_on_create" => false
));

/**** My Account ***/

vc_map( array(
		"name" => "Pages - My Account",
		"base" => "woocommerce_my_account",
		"icon" => "icon-wpb-woocommerce_my_account",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		 "show_settings_on_create" => false
));

/**** Edit Address ***/

vc_map( array(
		"name" => "Pages - Edit Address",
		"base" => "woocommerce_edit_address",
		"icon" => "icon-wpb-woocommerce_edit_address",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		 "show_settings_on_create" => false
));

/**** Change Password ***/

vc_map( array(
		"name" => "Pages - Change Password",
		"base" => "woocommerce_change_password",
		"icon" => "icon-wpb-woocommerce_change_password",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		 "show_settings_on_create" => false
));

/**** View Order ***/

vc_map( array(
		"name" => "Pages - View Order",
		"base" => "woocommerce_view_order",
		"icon" => "icon-wpb-woocommerce_view_order",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		 "show_settings_on_create" => false
));

/**** Pay ***/

vc_map( array(
		"name" => "Pages - Pay",
		"base" => "woocommerce_pay",
		"icon" => "icon-wpb-woocommerce_pay",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		 "show_settings_on_create" => false
));

/**** Thankyou ***/

vc_map( array(
		"name" => "Pages - Thankyou",
		"base" => "woocommerce_thankyou",
		"icon" => "icon-wpb-woocommerce_thankyou",
		"category" => 'Woocommerce',
		"allowed_container_element" => 'vc_row',
		 "show_settings_on_create" => false
));

}

/*** Contact Form 7 ***/

if(qode_contact_form_7_installed()){
	vc_add_param('contact-form-7', array(
		'type' => 'dropdown',
		'heading' => '风格',
		'param_name' => 'html_class',
		'value' => array(
			'默认'				=> 'default',
			'自定义风格 1'		=> 'cf7_custom_style_1',
			'自定义风格 2'		=> 'cf7_custom_style_2',
			'自定义风格 3'		=> 'cf7_custom_style_3'
		),
		'save_always' => true,
		'description' => '你可以在 主题选项 > 联系表7 风格化每个表单元素'
	));
}

/*** Restore Tabs&Accordion from Deprecated category ***/

$vc_map_deprecated_settings = array (
	'deprecated' => false,
	'category' => __( 'Content', 'js_composer' )
);
vc_map_update( 'vc_accordion', $vc_map_deprecated_settings );
vc_map_update( 'vc_tabs', $vc_map_deprecated_settings );
vc_map_update( 'vc_tab', array('deprecated' => false) );
vc_map_update( 'vc_accordion_tab', array('deprecated' => false) );

?>