<?php
//Masonry Gallery Metaboxes

//General settings for text, buttons, links
$qodeMasonryGalleryItemGeneral = new QodeMetaBox("masonry_gallery", "切片相册常规");
$qodeFramework->qodeMetaBoxes->addMetaBox("masonry_gallery_item_general",$qodeMasonryGalleryItemGeneral);

	$qode_masonry_gallery_item_text = new QodeMetaField('text', 'qode_masonry_gallery_item_text', '', '文字', '');
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_text', $qode_masonry_gallery_item_text);

	$qode_masonry_gallery_item_link = new QodeMetaField('text', 'qode_masonry_gallery_item_link', '', '链接', '');
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_link', $qode_masonry_gallery_item_link);

	$qode_masonry_gallery_item_link_target = new QodeMetaField('select', 'qode_masonry_gallery_item_link_target', '_self', '链接目标', '', array(
		'_self' => '自身',
		'_blank' => '空白页'
	));
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_link_target', $qode_masonry_gallery_item_link_target);
	
	$qode_masonry_item_parallax = new QodeMetaField("select","qode_masonry_item_parallax","no","设置视差项目","", array(
		"no" => "否",
		"yes" => "是"
	));
	$qodeMasonryGalleryItemGeneral->addChild("qode_masonry_item_parallax",$qode_masonry_item_parallax);
	
	//Masonry Gallery Style - Size, Type
	$section_style_title = new QodeTitle('section_style_title', '切片相册项目风格');
	$qodeMasonryGalleryItemGeneral->addChild('section_style_title', $section_style_title);

	$qode_masonry_gallery_item_size = new QodeMetaField('select', 'qode_masonry_gallery_item_size', 'square_small', '大小', '大小', array(
		'square_small' => '小方形',
		'square_big' => '大方形',		
		'rectangle_portrait' => '横向长方形',
		'rectangle_landscape' => '竖向长方形'
	));
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_size', $qode_masonry_gallery_item_size);

	$qode_masonry_gallery_item_type = new QodeMetaField('select', 'qode_masonry_gallery_item_type', 'with_button', '类型', '类型', array(
		'with_button' => '带按钮',
		'with_icon' => '带图标',
		'standard' => '标准'
	),
	array(
		'dependence' => true,
		'hide' => array(
			'with_button' => '#qodef_qode_masonry_gallery_item_icon_type_container',
			'with_icon' => '#qodef_qode_masonry_gallery_item_button_type_container',
			'standard' => '#qodef_qode_masonry_gallery_item_button_type_container, #qodef_qode_masonry_gallery_item_icon_type_container'
		),
		'show' => array(
			'with_button' => '#qodef_qode_masonry_gallery_item_button_type_container',
			'with_icon' => '#qodef_qode_masonry_gallery_item_icon_type_container',
			'standard' => ''
		)
	));
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_type', $qode_masonry_gallery_item_type);

	$qode_masonry_gallery_item_button_type_container = new QodeContainer('qode_masonry_gallery_item_button_type_container', 'qode_masonry_gallery_item_type', '', array('standard', 'with_icon'));
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_button_type_container', $qode_masonry_gallery_item_button_type_container);

		$qode_masonry_gallery_button_label = new QodeMetaField('text', 'qode_masonry_gallery_button_label', '', '按钮标签', '');
		$qode_masonry_gallery_item_button_type_container->addChild('qode_masonry_gallery_button_label', $qode_masonry_gallery_button_label);

	$qode_masonry_gallery_item_icon_type_container = new QodeContainer('qode_masonry_gallery_item_icon_type_container', 'qode_masonry_gallery_item_type', '', array('standard', 'with_button'));
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_icon_type_container', $qode_masonry_gallery_item_icon_type_container);
//Icon Packages
$qode_masonry_gallery_item_icon_hide_array = array();
$qode_masonry_gallery_item_icon_show_array = array();

if(is_array($qodeIconCollections->iconCollections) && count($qodeIconCollections->iconCollections)) {

    $qode_masonry_gallery_item_icon_collection_params = $qodeIconCollections->getIconCollectionsParams();

    foreach ($qodeIconCollections->iconCollections as $dep_collection_key => $dep_collection_object) {

        $qode_masonry_gallery_item_icon_hide_array[$dep_collection_key] = '';

        $qode_masonry_gallery_item_icon_show_array[$dep_collection_key] = '#qodef_qode_masonry_gallery_item_with_icon_'.$dep_collection_object->param.'_container';

        foreach ($qode_masonry_gallery_item_icon_collection_params as $qode_masonry_gallery_item_icon_collection_param) {

            if($qode_masonry_gallery_item_icon_collection_param !== $dep_collection_object->param) {
                $qode_masonry_gallery_item_icon_hide_array[$dep_collection_key].= '#qodef_qode_masonry_gallery_item_with_icon_'.$qode_masonry_gallery_item_icon_collection_param.'_container,';
            }

        }

        $qode_masonry_gallery_item_icon_hide_array[$dep_collection_key] = rtrim($qode_masonry_gallery_item_icon_hide_array[$dep_collection_key], ',');
    }

}

$qode_masonry_gallery_item_with_icon_icon_pack = new QodeMetaField(
    'select',
    'qode_masonry_gallery_item_with_icon_icon_pack',
    'font_awesome',
    '图标包',
    '选择图标包',
    $qodeIconCollections->getIconCollections(),
    array(
        'dependence' => true,
        'hide' => $qode_masonry_gallery_item_icon_hide_array,
        'show' => $qode_masonry_gallery_item_icon_show_array
    )
);
$qode_masonry_gallery_item_icon_type_container->addChild('qode_masonry_gallery_item_with_icon_icon_pack', $qode_masonry_gallery_item_with_icon_icon_pack);

if(is_array($qodeIconCollections->iconCollections) && count($qodeIconCollections->iconCollections)) {

    foreach ($qodeIconCollections->iconCollections as $collection_key => $collection_object) {
        $icons_array = $collection_object->getIconsArray();

        $icon_collections_keys = $qodeIconCollections->getIconCollectionsKeys();

        unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

        $qode_masonry_gallery_item_icon_hide_values = $icon_collections_keys;

        $qode_masonry_gallery_item_icon_pack_container = new QodeContainer('qode_masonry_gallery_item_with_icon_'.$collection_object->param.'_container', 'qode_masonry_gallery_item_with_icon_icon_pack', '', $qode_masonry_gallery_item_icon_hide_values);
        $qode_masonry_gallery_item_icon_type_container->addChild('qode_masonry_gallery_item_with_icon_'.$collection_object->param.'_container', $qode_masonry_gallery_item_icon_pack_container);

        $qode_masonry_gallery_item_with_icon_icon_type = new QodeMetaField('select', 'qode_masonry_gallery_item_with_icon_'.$collection_object->param, '', $collection_object->title, '图标包', $icons_array);
        $qode_masonry_gallery_item_icon_pack_container->addChild('qode_masonry_gallery_item_with_icon_'.$collection_object->param, $qode_masonry_gallery_item_with_icon_icon_type);

    }

}