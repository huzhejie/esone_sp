<?php

//Carousels

$qodeCarousels = new QodeMetaBox("carousels", "轮播");
$qodeFramework->qodeMetaBoxes->addMetaBox("carousels",$qodeCarousels);

	$qode_carousel_image = new QodeMetaField("image","qode_carousel-image","","轮播图片","选择轮播图片（最小宽度需要220px）");
	$qodeCarousels->addChild("qode_carousel-image",$qode_carousel_image);

	$qode_carousel_hover_image = new QodeMetaField("image","qode_carousel-hover-image","","轮播悬停图片","选择轮播悬停图片（最小宽度需要220px）");
	$qodeCarousels->addChild("qode_carousel-hover-image",$qode_carousel_hover_image);

	$qode_carousel_item_link = new QodeMetaField("text","qode_carousel-item-link","","链接","附上网址链接到图片 (例如：http://www.4mudi.com)");
	$qodeCarousels->addChild("qode_carousel-item-link",$qode_carousel_item_link);

	$qode_carousel_item_target = new QodeMetaField("selectblank","qode_carousel-item-target","","目标","指定打开链接的文档", array(
        "_self" => "Self",
        "_blank" => "Blank"
    ));
	$qodeCarousels->addChild("qode_carousel-item-target",$qode_carousel_item_target);