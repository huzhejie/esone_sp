<?php
$qode_custom_sidebars = array();
foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
	if(isUserMadeSidebar(ucwords($sidebar['name']))){
		$qode_custom_sidebars[$sidebar['id']] = ucwords( $sidebar['name']);
	}
}


$qode_blog_categories = array();
$categories = get_categories(); 
foreach($categories as $category) {
	$qode_blog_categories[$category->term_id] = $category->name;
}

//Qode Slide Type

$qodeSlideType = new QodeMetaBox("slides", "幻灯片类型");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_type",$qodeSlideType);

	$qode_slide_background_type = new QodeMetaField("imagevideo","qode_slide-background-type","image","幻灯片背景类型","你想上传图片或视频吗？", array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef-meta-box-slides_video_settings", "dependence_show_on_yes" => "#qodef-meta-box-slides_image_settings"));
	$qodeSlideType->addChild("qode_slide-background-type",$qode_slide_background_type);

//Qode Slide Image

$qodeSlideImageSettings = new QodeMetaBox("slides", "幻灯片图片","qode_slide-background-type",array("video"));
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_image_settings",$qodeSlideImageSettings);

	$qode_slide_image = new QodeMetaField("image","qode_slide-image","","幻灯片图片","选择背景图片");
	$qodeSlideImageSettings->addChild("qode_title-image",$qode_slide_image);
	
	$qode_slide_overlay_image = new QodeMetaField("image","qode_slide-overlay-image","","叠加图片","选择背景图片叠加图片（图案）");
	$qodeSlideImageSettings->addChild("qode_slide-overlay-image",$qode_slide_overlay_image);
	
	$qode_enable_image_animation = new QodeMetaField("yesno", "qode_enable_image_animation", "no", "启用图片动画", "启用此选项将在幻灯片图片打开一个定格动画", array(), array(
        "dependence" => "true",
        "dependence_hide_on_yes" => "",
        "dependence_show_on_yes" => "#qodef_qode_enable_image_animation_container"
    ));
	$qodeSlideImageSettings->addChild('qode_enable_image_animation', $qode_enable_image_animation);
	
	$qode_enable_image_animation_container = new QodeContainer("qode_enable_image_animation_container", "qode_enable_image_animation", "no");
	$qodeSlideImageSettings->addChild("qode_enable_image_animation_container", $qode_enable_image_animation_container);
	
	$qode_enable_image_animation_type = new QodeMetaField("select","qode_enable_image_animation_type","zoom_center","动画类型","", array(
        "zoom_center" => "中心放大",
        "zoom_top_left" => "左上放大",
        "zoom_top_right" => "右上放大",
        "zoom_bottom_left" => "左下放大",
        "zoom_bottom_right" => "右下放大"
    ));
    $qode_enable_image_animation_container->addChild("qode_enable_image_animation_type",$qode_enable_image_animation_type);

//Qode Slide Video

$qodeSlideVideoSettings = new QodeMetaBox("slides", "幻灯片视频","qode_slide-background-type",array("image"));
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_video_settings",$qodeSlideVideoSettings);

	$qode_slide_video_webm = new QodeMetaField("text","qode_slide-video-webm","","视频 - webm","你之前在媒体部分上传的webm文件路径");
	$qodeSlideVideoSettings->addChild("qode_slide-video-webm",$qode_slide_video_webm);
	
	$qode_slide_video_mp4 = new QodeMetaField("text","qode_slide-video-mp4","","视频 - mp4","你之前在媒体部分上传的mp4文件路径");
	$qodeSlideVideoSettings->addChild("qode_slide-video-mp4",$qode_slide_video_mp4);
	
	$qode_slide_video_ogv = new QodeMetaField("text","qode_slide-video-ogv","","视频 - ogv","你之前在媒体部分上传的ogv文件路径");
	$qodeSlideVideoSettings->addChild("qode_slide-video-ogv",$qode_slide_video_ogv);

	$qode_slide_video_image = new QodeMetaField("image","qode_slide-video-image","","视频预览图片","选择的图片将可见，至到视频被加载。此图片也将在触摸设备显示.");
	$qodeSlideVideoSettings->addChild("qode_slide-video-image",$qode_slide_video_image);
	
	$qode_slide_video_overlay = new QodeMetaField("yesempty","qode_slide-video-overlay","","视频叠加图片","你想视频有叠加图片吗？ ", array(),
			array("dependence" => true,
			"dependence_hide_on_yes" => "",
			"dependence_show_on_yes" => "#qodef_qode_slide-video-overlay_container"));
	$qodeSlideVideoSettings->addChild("qode_slide-video-overlay",$qode_slide_video_overlay);
	
	$qode_slide_video_overlay_container = new QodeContainer("qode_slide-video-overlay_container","qode_slide-video-overlay","");
	$qodeSlideVideoSettings->addChild("qode_slide_video_overlay_container",$qode_slide_video_overlay_container);
	
		$qode_slide_video_overlay_image = new QodeMetaField("image","qode_slide-video-overlay-image","","叠加图片","选择背景视频叠加图片（图案）");
		$qode_slide_video_overlay_container->addChild("qode_slide-video-overlay-image",$qode_slide_video_overlay_image);

//Qode Slide General

$qodeSlideGeneral = new QodeMetaBox("slides", "幻灯片常规");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_layout",$qodeSlideGeneral);
	
	$qode_slide_header_style = new QodeMetaField("selectblank","qode_slide-header-style","","页眉皮肤","页眉皮肤将在此幻灯片是焦点时应用", array(
	    "light" => "浅色",
	    "dark" => "深色"
	));
	$qodeSlideGeneral->addChild("qode_slide-header-style",$qode_slide_header_style);
	
	$qode_slide_navigation_color = new QodeMetaField("color","qode_slide-navigation-color","","导航颜色","导航颜色将在此幻灯片是焦点时应用");
	$qodeSlideGeneral->addChild("qode_slide-navigation-color",$qode_slide_navigation_color);
	
	$qode_slide_scroll_to_section = new QodeMetaField("text","qode_slide-anchor-button","","滚动部分","一个箭头将把浏览者带到页面下一栏目。在这里输入栏目锚，例如：'#contact'");
	$qodeSlideGeneral->addChild("qode_slide-anchor-button",$qode_slide_scroll_to_section);

	$qode_slide_hide_title = new QodeMetaField("yesempty","qode_slide-hide-title","","隐藏幻灯片标题","你想隐藏幻灯片标题吗？", array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef-meta-box-slides_title", "dependence_show_on_yes" => ""));
	$qodeSlideGeneral->addChild("qode_slide-hide-title",$qode_slide_hide_title);

    $qode_slide_hide_shadow = new QodeMetaField("yesempty","qode_slide-hide-shadow","","不显示幻灯片文字阴影","你想隐藏文字阴影吗？");
    $qodeSlideGeneral->addChild("qode_slide-hide-shadow",$qode_slide_hide_shadow);

    $qode_slide_thumbnail_animation = new QodeMetaField("select","qode_slide-thumbnail-animation","","图形动画","这是图形如何进入幻灯片", array(
        "flip" => "翻转",
        "fade" => "淡入"
    ));
    $qodeSlideGeneral->addChild("qode_slide-thumbnail-animation",$qode_slide_thumbnail_animation);

    $qode_slide_content_animation = new QodeMetaField("select","qode_slide-content-animation","","内容动画","这是内容（标题、子标题、文字和按钮）如何进入幻灯片", array(
        "all_at_once" => "一下子",
        "one_by_one" => "一个接一个"
    ));
    $qodeSlideGeneral->addChild("qode_slide-content-animation",$qode_slide_content_animation);

//Qode Slide Title

$qodeSlideTitle = new QodeMetaBox("slides", "幻灯片标题","qode_slide-hide-title",array("yes"));
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_title",$qodeSlideTitle);

	$title_group = new QodeGroup("标题风格","定义标题风格");
	$qodeSlideTitle->addChild("title_group",$title_group);
	    $row1 = new QodeRow();
	    $title_group->addChild("row1",$row1);
		    $title_color = new QodeMetaField("colorsimple","qode_slide-title-color","","字体颜色","这是一些描述");
		    $row1->addChild("qode_slide-title-color",$title_color);
		    $title_fontsize = new QodeMetaField("textsimple","qode_slide-title-font-size","","字体大小 (px)","This is some description");
		    $row1->addChild("qode_slide-title-font-size",$title_fontsize);
		    $title_lineheight = new QodeMetaField("textsimple","qode_slide-title-line-height","","行高 (px)","This is some description");
		    $row1->addChild("qode_slide-title-line-height",$title_lineheight);
		    $title_letterspacing = new QodeMetaField("textsimple","qode_slide-title-letter-spacing","","字符间距 (px)","This is some description");
		    $row1->addChild("qode_slide-title-letter-spacing",$title_letterspacing);
	
	    $row2 = new QodeRow(true);
	    $title_group->addChild("row2",$row2);
		    $title_google_fonts = new QodeMetaField("Fontsimple","qode_slide-title-font-family","","字体系列","This is some description");
		    $row2->addChild("qode_slide-title-font-family",$title_google_fonts);
		    $title_fontstyle = new QodeMetaField("selectblanksimple","qode_slide-title-font-style","","字体风格","This is some description",$options_fontstyle);
		    $row2->addChild("qode_slide-title-font-style",$title_fontstyle);
		    $title_fontweight = new QodeMetaField("selectblanksimple","qode_slide-title-font-weight","","字体粗细","This is some description",$options_fontweight);
		    $row2->addChild("qode_slide-title-font-weight",$title_fontweight);
		    $title_texttransform = new QodeMetaField("selectblanksimple","qode_slide-title-text-transform","","文字转换","This is some description",$options_texttransform);
		    $row2->addChild("qode_slide-title-text-transform",$title_texttransform);
	
	    $row3 = new QodeRow(true);
	    $title_group->addChild("row3",$row3);
		    $title_background_color = new QodeMetaField("colorsimple","qode_slide-title-background-color","","背景颜色","This is some description");
		    $row3->addChild("qode_slide-title-background-color",$title_background_color);
		    $title_background_color_transparency = new QodeMetaField("textsimple","qode_slide-title-bg-color-transparency","","背景颜色透明度（0 = 全透明，1 = 不透明）","Value between 0 and 1");
		    $row3->addChild("qode_slide-title-bg-color-transparency",$title_background_color_transparency);

	$qode_slide_title_separator = new QodeMetaField("yesno","qode_slide-separator-after-title","no","标题之后分隔","你想标题之后有分隔吗？", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qode_slide_title_separator_container"));
	$qodeSlideTitle->addChild("qode_slide-separator-after-title",$qode_slide_title_separator);
	
	$qode_slide_title_separator_container = new QodeContainer("qode_slide_title_separator_container","qode_slide-separator-after-title","no");
	$qodeSlideTitle->addChild("qode_slide_title_separator_container",$qode_slide_title_separator_container);
	
		$qode_slide_title_separator_color = new QodeMetaField("color","qode_slide-separator-color","","分隔线颜色","选择分隔线颜色");
		$qode_slide_title_separator_container->addChild("qode_slide-separator-color",$qode_slide_title_separator_color);
		
		$qode_slide_title_separator_transparency = new QodeMetaField("text","qode_slide-separator-transparency","","分隔透明度","输入0（全透明）和1（不透明）之间的值");
		$qode_slide_title_separator_container->addChild("qode_slide-separator-transparency",$qode_slide_title_separator_transparency);
		
		$qode_slide_title_separator_width = new QodeMetaField("text","qode_slide-separator-width","","分隔线宽度","输入从0%到100%的值。只输入数字.");
		$qode_slide_title_separator_container->addChild("qode_slide-separator-width",$qode_slide_title_separator_width);

		$qode_slide_title_separator_gradient = new QodeMetaField("yesno","qode_slide_separator_gradient","no","分隔渐变","为分隔线启用渐变");
		$qode_slide_title_separator_container->addChild("qode_slide_separator_gradient",$qode_slide_title_separator_gradient);

	$qode_slide_title_border = new QodeMetaField("yesno","qode_slide-border-around-title","no","边框环绕标题","你想边框环绕标题吗？", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qode_slide_title_border_container"));
	$qodeSlideTitle->addChild("qode_slide-border-around-title",$qode_slide_title_border);
	
	$qode_slide_title_border_container = new QodeContainer("qode_slide_title_border_container","qode_slide-border-around-title","no");
	$qodeSlideTitle->addChild("qode_slide_title_border_container",$qode_slide_title_border_container);
	
		$qode_slide_title_border_color = new QodeMetaField("color","qode_slide-border-around-title-color","","边框颜色","选择边框颜色");
		$qode_slide_title_border_container->addChild("qode_slide-border-around-title-color",$qode_slide_title_border_color);
		
		$qode_slide_title_border_transparency = new QodeMetaField("text","qode_slide-border-around-title-transparency","","边框透明度","输入0（全透明）和1（不透明）之间的值");
		$qode_slide_title_border_container->addChild("qode_slide-border-around-title-transparency",$qode_slide_title_border_transparency);

//Qode Slide Subtitle

$qodeSlideSubtitle = new QodeMetaBox("slides", "幻灯片子标题");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_subtitle",$qodeSlideSubtitle);

	$qode_slide_subtitle = new QodeMetaField("text","qode_slide-subtitle","","幻灯片子标题","输入幻灯片子标题");
	$qodeSlideSubtitle->addChild("qode_slide-subtitle",$qode_slide_subtitle);
	
	$qode_slide_subtitle_position = new QodeMetaField("select","qode_slide-subtitle-position","","子标题位置","选择子标题位置", array(
	    "above_title" => "标题之上",
	    "bellow_title" => "标题之下"
	));
	$qodeSlideSubtitle->addChild("qode_slide-subtitle-position",$qode_slide_subtitle_position);
	
	$subtitle_group = new QodeGroup("子标题风格","定义子标题风格");
	$qodeSlideSubtitle->addChild("subtitle_group",$subtitle_group);
	    $row1 = new QodeRow();
	    $subtitle_group->addChild("row1",$row1);
		    $subtitle_color = new QodeMetaField("colorsimple","qode_slide-subtitle-color","","字体颜色","This is some description");
		    $row1->addChild("qode_slide-subtitle-color",$subtitle_color);
		    $subtitle_fontsize = new QodeMetaField("textsimple","qode_slide-subtitle-font-size","","字体大小 (px)","This is some description");
		    $row1->addChild("qode_slide-subtitle-font-size",$subtitle_fontsize);
		    $subtitle_lineheight = new QodeMetaField("textsimple","qode_slide-subtitle-line-height","","行高 (px)","This is some description");
		    $row1->addChild("qode_slide-subtitle-line-height",$subtitle_lineheight);
		    $subtitle_letterspacing = new QodeMetaField("textsimple","qode_slide-subtitle-letter-spacing","","字符间距 (px)","This is some description");
		    $row1->addChild("qode_slide-subtitle-letter-spacing",$subtitle_letterspacing);
	
	    $row2 = new QodeRow(true);
	    $subtitle_group->addChild("row2",$row2);
		    $subtitle_google_fonts = new QodeMetaField("fontsimple","qode_slide-subtitle-font-family","","字体系列","This is some description");
		    $row2->addChild("qode_slide-subtitle-font-family",$subtitle_google_fonts);
		    $subtitle_fontstyle = new QodeMetaField("selectblanksimple","qode_slide-subtitle-font-style","","字体风格","This is some description",$options_fontstyle);
		    $row2->addChild("qode_slide-subtitle-font-style",$subtitle_fontstyle);
		    $subtitle_fontweight = new QodeMetaField("selectblanksimple","qode_slide-subtitle-font-weight","","字体粗细","This is some description",$options_fontweight);
		    $row2->addChild("qode_slide-subtitle-font-weight",$subtitle_fontweight);
			$subtitle_text_transform = new QodeMetaField("selectblanksimple","qode_slide-subtitle-text-transform","","文字转换","This is some description",$options_texttransform);
		    $row2->addChild("qode_slide-subtitle-text-transform",$subtitle_text_transform);
	
	    $row3 = new QodeRow(true);
	    $subtitle_group->addChild("row3",$row3);
		    $subtitle_background_color = new QodeMetaField("colorsimple","qode_slide-subtitle-background-color","","背景颜色","This is some description");
		    $row3->addChild("qode_slide-subtitle-background-color",$subtitle_background_color);
		    $subtitle_background_color_transparency = new QodeMetaField("textsimple","qode_slide-subtitle-bg-color-transparency","","背景颜色透明度（0 = 全透明，1 = 不透明）","值在0和1之间");
		    $row3->addChild("qode_slide-subtitle-bg-color-transparency",$subtitle_background_color_transparency);

    $subtitle_margin_group = new QodeGroup("下边距（px）","输入子标题下边距值（默认值是14）");
    $qodeSlideSubtitle->addChild("subtitle_margin_group",$subtitle_margin_group);
        $row1 = new QodeRow(true);
        $subtitle_margin_group->addChild("row1",$row1);
            $subtitle_margin_bottom = new QodeMetaField("textsimple","qode_slide_subtitle_margin_bottom","","","This is some description");
            $row1->addChild("qode_slide_subtitle_margin_bottom",$subtitle_margin_bottom);

    $subtitle_padding_group = new QodeGroup("填充","定义子标题填充");
    $qodeSlideSubtitle->addChild("subtitle_padding_group",$subtitle_padding_group);
        $row1 = new QodeRow(true);
        $subtitle_padding_group->addChild("row1",$row1);
            $subtitle_padding_top = new QodeMetaField("textsimple","qode_slide_subtitle_padding_top","","上填充（px）","This is some description");
            $row1->addChild("qode_slide_subtitle_padding_top",$subtitle_padding_top);
            $subtitle_padding_right = new QodeMetaField("textsimple","qode_slide_subtitle_padding_right","","右填充（px）","This is some description");
            $row1->addChild("qode_slide_subtitle_padding_right",$subtitle_padding_right);
            $subtitle_padding_bottom = new QodeMetaField("textsimple","qode_slide_subtitle_padding_bottom","","下填充（px）","This is some description");
            $row1->addChild("qode_slide_subtitle_padding_bottom",$subtitle_padding_bottom);
            $subtitle_padding_left = new QodeMetaField("textsimple","qode_slide_subtitle_padding_left","","左填充（px）","This is some description");
            $row1->addChild("qode_slide_subtitle_padding_left",$subtitle_padding_left);

//Qode Slide Text

$qodeSlideText = new QodeMetaBox("slides", "幻灯片文字");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_text",$qodeSlideText);

	$qode_slide_text = new QodeMetaField("textarea","qode_slide-text","","幻灯片文字","输入幻灯片文字");
	$qodeSlideText->addChild("qode_slide-text",$qode_slide_text);

    $text_group = new QodeGroup("文字风格","定义文字风格");
    $qodeSlideText->addChild("title_group",$text_group);
    $row1 = new QodeRow();
    $text_group->addChild("row1",$row1);
        $text_color = new QodeMetaField("colorsimple","qode_slide-text-color","","字体颜色","This is some description");
        $row1->addChild("qode_slide-text-color",$text_color);
        $text_fontsize = new QodeMetaField("textsimple","qode_slide-text-font-size","","字体大小 (px)","This is some description");
        $row1->addChild("qode_slide-text-font-size",$text_fontsize);
        $text_lineheight = new QodeMetaField("textsimple","qode_slide-text-line-height","","行高（px）","This is some description");
        $row1->addChild("qode_slide-text-line-height",$text_lineheight);
		$text_text_transform = new QodeMetaField("selectblanksimple","qode_slide-text-text-transform","","文字转换","This is some description",$options_texttransform);
		$row1->addChild("qode_slide-text-text-transform",$text_text_transform);

    $row2 = new QodeRow(true);
    $text_group->addChild("row2",$row2);
        $text_google_fonts = new QodeMetaField("Fontsimple","qode_slide-text-font-family","","字体系列","This is some description");
        $row2->addChild("qode_slide-text-font-family",$text_google_fonts);
        $text_fontstyle = new QodeMetaField("selectblanksimple","qode_slide-text-font-style","","字体风格","This is some description",$options_fontstyle);
        $row2->addChild("qode_slide-text-font-style",$text_fontstyle);
        $text_fontweight = new QodeMetaField("selectblanksimple","qode_slide-text-font-weight","","字体粗细","This is some description",$options_fontweight);
        $row2->addChild("qode_slide-text-font-weight",$text_fontweight);

    $text_without_separator_padding_group = new QodeGroup("填充","定义文字填充");
    $qodeSlideText->addChild("text_without_separator_padding_group",$text_without_separator_padding_group);
        $row1 = new QodeRow(true);
        $text_without_separator_padding_group->addChild("row1",$row1);
            $text_padding_top = new QodeMetaField("textsimple","qode_slide_text_padding_top","","上填充（px）","This is some description");
            $row1->addChild("qode_slide_text_padding_top",$text_padding_top);
            $text_padding_right = new QodeMetaField("textsimple","qode_slide_text_padding_right","","右填充（px）","This is some description");
            $row1->addChild("qode_slide_text_padding_right",$text_padding_right);
            $text_padding_bottom = new QodeMetaField("textsimple","qode_slide_text_padding_bottom","","下填充（px）","This is some description");
            $row1->addChild("qode_slide_text_padding_bottom",$text_padding_bottom);
            $text_padding_left = new QodeMetaField("textsimple","qode_slide_text_padding_left","","左填充（px）","This is some description");
            $row1->addChild("qode_slide_text_padding_left",$text_padding_left);

//Qode Slide Graphic

$qodeSlideGraphic = new QodeMetaBox("slides", "幻灯片图形");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_graphic",$qodeSlideGraphic);

	$qode_slide_graphic = new QodeMetaField("image","qode_slide-thumbnail","","幻灯片图形","选择幻灯片图形");
	$qodeSlideGraphic->addChild("qode_slide-thumbnail",$qode_slide_graphic);
	
	$qode_slide_graphic_link = new QodeMetaField("text","qode_slide-thumbnail-link","","链接","幻灯图片过去的链接，如果你想将它连结");
	$qodeSlideGraphic->addChild("qode_slide-thumbnail-link",$qode_slide_graphic_link);

$qodeSlideSvg = new QodeMetaBox('slides', '幻灯片SVG');
$qodeFramework->qodeMetaBoxes->addMetaBox('svg', $qodeSlideSvg);

	$qode_slide_svg_source = new QodeMetaField('textarea', 'qode_slide_svg_source', '', 'SVG源代码', '粘贴SVG源代码。（注意：所有SVG的CSS风格你可能要放到选项 > 常规 > 自定义SVG css）');
	$qodeSlideSvg->addChild('qode_slide_svg_source', $qode_slide_svg_source);

	$qode_slide_svg_link = new QodeMetaField('text', 'qode_slide_svg_link', '', 'SVG链接', '输入网址链接到SVG');
	$qodeSlideSvg->addChild('qode_slide_svg_link', $qode_slide_svg_link);

	$qode_slide_svg_drawing = new QodeMetaField("yesno", "qode_slide_svg_drawing", "no", "SVG图形动画", "启用SVG绘图动画", array(), array(
		"dependence" => "true",
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_svg_drawing_container"
	));
	$qodeSlideSvg->addChild("qode_slide_svg_drawing", $qode_slide_svg_drawing);

	$qode_slide_svg_drawing_container = new QodeContainer("qode_slide_svg_drawing_container", "qode_slide_svg_drawing", "no");
	$qodeSlideSvg->addChild("qode_slide_svg_drawing_container", $qode_slide_svg_drawing_container);

	$qode_slide_svg_frame_rate = new QodeMetaField("text", "qode_slide_svg_frame_rate", "", "SVG帧率", "FPS值（帧每秒），定义绘图速度");
	$qode_slide_svg_drawing_container->addChild("qode_slide_svg_frame_rate", $qode_slide_svg_frame_rate);

//Qode Slide Buttons

$qodeSlideButtons = new QodeMetaBox("slides", "幻灯片按钮");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_buttons",$qodeSlideButtons);

	$button1_group = new QodeGroup("按钮 1","");
	$qodeSlideButtons->addChild("button1_group",$button1_group);
	    $row1 = new QodeRow();
	    $button1_group->addChild("row1",$row1);
		    $button1_label = new QodeMetaField("textsimple","qode_slide-button-label","","标签","This is some description");
		    $row1->addChild("qode_slide-button-label",$button1_label);
		    $button1_link = new QodeMetaField("textsimple","qode_slide-button-link","","链接","This is some description");
		    $row1->addChild("qode_slide-button-link",$button1_link);

			$button1_type = new QodeMetaField("select","qode_slide_button_type","","类型","选择类型", array(
				"qode-button" 		=> "按钮",
				"qode-button-v2"	=> "按钮V2",
			),
			array("dependence" => true,
				"hide" => array(
					"qode-button"		=> "#qodef_qode_slide_button_v2_hover_container",
					"qode-button-v2"	=> "#qodef_qode_slide_button_hover_container"
				),
				"show" => array(
					"qode-button"		=> "#qodef_qode_slide_button_hover_container",
					"qode-button-v2"	=> "#qodef_qode_slide_button_v2_hover_container"
				))
			);
			$qodeSlideButtons->addChild("qode_slide_button_type",$button1_type);

			$qode_slide_button_hover_container = new QodeContainer("qode_slide_button_hover_container","qode_slide_button_type","qode-button-v2");
			$qodeSlideButtons->addChild("qode_slide_button_hover_container",$qode_slide_button_hover_container);

			$qode_slide_button_v2_hover_container = new QodeContainer("qode_slide_button_v2_hover_container","qode_slide_button_type","qode-button");
			$qodeSlideButtons->addChild("qode_slide_button_v2_hover_container",$qode_slide_button_v2_hover_container);

		    $button1_hover_type = new QodeMetaField("select","qode_slide-button-hover-type","default","悬停类型","选择悬停时动画", array(
			    "default" => "默认",
			    "enlarge" => "放大",
			));
			$qode_slide_button_hover_container->addChild("qode_slide-button-hover-type",$button1_hover_type);

//			$button1_v2_hover_type = new QodeMetaField("select","qode_slide_button_v2_hover_type","default","Hover Type","Choose animation on hover", array(
//
//				''					=> esc_html__('Default','qode') ,
//				'3d_rotate'			=> esc_html__('3D Rotate','qode'),
//				'shadow_enhance'	=> esc_html__('Shadow Enhance','qode'),
//				'icon_rotate'		=> esc_html__('Icon Rotate','qode')
//			));
//			$qode_slide_button_v2_hover_container->addChild("qode_slide_button_v2_hover_type",$button1_v2_hover_type);

			$button_v2_icon_gradient = new QodeMetaField("yesno","qode_slide_button_v2_icon_gradient","no","按钮V2图标渐变","请为此图标启用渐变。这仅用于按钮V2类型");
			$qode_slide_button_v2_hover_container->addChild("qode_slide_button_v2_icon_gradient",$button_v2_icon_gradient);


//init icon pack hide and show array. It will be populated dinamically from collections array
		$button1_icon_pack_hide_array = array();
		$button1_icon_pack_show_array = array();

		//do we have some collection added in collections array?
		if(is_array($qodeIconCollections->iconCollections) && count($qodeIconCollections->iconCollections)) {
			//get collections params array. It will contain values of 'param' property for each collection
			$button1_icon_collections_params = $qodeIconCollections->getIconCollectionsParams();

			//foreach collection generate hide and show array
			foreach ($qodeIconCollections->iconCollections as $dep_collection_key => $dep_collection_object) {
				$button1_icon_pack_hide_array[$dep_collection_key] = '';
				$button1_icon_pack_hide_array["no_icon"] = "";

				//button1_icon_size is input that is always shown when some icon pack is activated and hidden if 'no_icon' is selected
				$button1_icon_pack_hide_array["no_icon"] .= "#qodef_slider_button1_icon_size,";

				//we need to include only current collection in show string as it is the only one that needs to show
				$button1_icon_pack_show_array[$dep_collection_key] = '#qodef_slider_button1_icon_size, #qodef_button1_icon_'.$dep_collection_object->param.'_container';

				//for all collections param generate hide string
				foreach ($button1_icon_collections_params as $button1_icon_collections_param) {
					//we don't need to include current one, because it needs to be shown, not hidden
					if($button1_icon_collections_param !== $dep_collection_object->param) {
						$button1_icon_pack_hide_array[$dep_collection_key].= '#qodef_button1_icon_'.$button1_icon_collections_param.'_container,';
					}

					$button1_icon_pack_hide_array["no_icon"] .= '#qodef_button1_icon_'.$button1_icon_collections_param.'_container,';
				}

				//remove remaining ',' character
				$button1_icon_pack_hide_array[$dep_collection_key] = rtrim($button1_icon_pack_hide_array[$dep_collection_key], ',');
				$button1_icon_pack_hide_array["no_icon"] = rtrim($button1_icon_pack_hide_array["no_icon"], ',');
			}

		}

		$button1_icon_pack = new QodeMetaField(
			"select",
			"qode_slide_button1_icon_pack",
			"no_icon",
			"按钮1图标包",
			"选择第一个按钮图标包",
			$qodeIconCollections->getIconCollectionsEmpty("no_icon"),
			array(
				"dependence" => true,
				"hide" => $button1_icon_pack_hide_array,
				"show" => $button1_icon_pack_show_array
			));

		$qodeSlideButtons->addChild("button1_icon_pack", $button1_icon_pack);

		if(is_array($qodeIconCollections->iconCollections) && count($qodeIconCollections->iconCollections)) {
			//foreach icon collection we need to generate separate container that will have dependency set
			//it will have one field inside with icons dropdown
			foreach ($qodeIconCollections->iconCollections as $collection_key => $collection_object) {
				$icons_array = $collection_object->getIconsArray();

				//get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
				$icon_collections_keys = $qodeIconCollections->getIconCollectionsKeys();

				//unset current one, because it doesn't have to be included in dependency that hides icon container
				unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

				$button1_icon_hide_values = $icon_collections_keys;
				$button1_icon_hide_values[] = "no_icon";
				$button1_icon_container = new QodeContainer("button1_icon_".$collection_object->param."_container", "qode_slide_button1_icon_pack", "", $button1_icon_hide_values);
				$button1_icon = new QodeMetaField("select", "qode_slide_button1_icon_".$collection_object->param, "", "按钮1图标","选择第一按钮图标", $icons_array, array("col_width" => 3));
				$button1_icon_container->addChild("button1_icon_".$collection_object->param, $button1_icon);

				$qodeSlideButtons->addChild("button1_icon_".$collection_object->param."_container", $button1_icon_container);
			}

		}

	$button2_group = new QodeGroup("按钮 2","");
	$qodeSlideButtons->addChild("button2_group",$button2_group);
	    $row1 = new QodeRow();
	    $button2_group->addChild("row1",$row1);
		    $button2_label = new QodeMetaField("textsimple","qode_slide-button-label2","","标签","This is some description");
		    $row1->addChild("qode_slide-button-label",$button2_label);
		    $button2_link = new QodeMetaField("textsimple","qode_slide-button-link2","","链接","This is some description");
		    $row1->addChild("qode_slide-button-link",$button2_link);


			$button_type2 = new QodeMetaField("select","qode_slide_button_type2","","按钮2类型","选择类型", array(
				"qode-button" 		=> "按钮",
				"qode-button-v2"	=> "按钮V2",
			),
				array("dependence" => true,
					"hide" => array(
						"qode-button"		=> "#qodef_qode_slide_button_v2_hover_container2",
						"qode-button-v2"	=> "#qodef_qode_slide_button_hover_container2"
					),
					"show" => array(
						"qode-button"		=> "#qodef_qode_slide_button_hover_container2",
						"qode-button-v2"	=> "#qodef_qode_slide_button_v2_hover_container2"
					))
			);
			$qodeSlideButtons->addChild("qode_slide_button_type2",$button_type2);

			$qode_slide_button_hover_container2 = new QodeContainer("qode_slide_button_hover_container2","qode_slide_button_type2","qode-button-v2");
			$qodeSlideButtons->addChild("qode_slide_button_hover_container2",$qode_slide_button_hover_container2);

			$qode_slide_button_v2_hover_container2 = new QodeContainer("qode_slide_button_v2_hover_container2","qode_slide_button_type2","qode-button");
			$qodeSlideButtons->addChild("qode_slide_button_v2_hover_container2",$qode_slide_button_v2_hover_container2);


		    $button2_hover_type = new QodeMetaField("select","qode_slide-button-hover-type2","default","按钮2悬停类型","选择悬停时动画", array(
			    "default" => "默认",
			    "enlarge" => "放大",
			));
			$qode_slide_button_hover_container2->addChild("qode_slide-button-hover-type2",$button2_hover_type);

//			$button2_v2_hover_type = new QodeMetaField("select","qode_slide_button_v2_hover_type2","default","Button 2 V2 Hover Type","Choose animation on hover", array(
//
//				''					=> esc_html__('Default','qode') ,
//				'3d_rotate'			=> esc_html__('3D Rotate','qode'),
//				'shadow_enhance'	=> esc_html__('Shadow Enhance','qode'),
//				'icon_rotate'		=> esc_html__('Icon Rotate','qode')
//			));
//			$qode_slide_button_v2_hover_container2->addChild("qode_slide_button_v2_hover_type2",$button2_v2_hover_type);

			$button2_v2_icon_gradient = new QodeMetaField("yesno","qode_slide_button2_v2_icon_gradient","no","按钮2 V2图标渐变","请为此图标启用渐变。这仅用于按钮V2按钮");
			$qode_slide_button_v2_hover_container2->addChild("qode_slide_button2_v2_icon_gradient",$button2_v2_icon_gradient);

	//init icon pack hide and show array. It will be populated dinamically from collections array
	$button2_icon_pack_hide_array = array();
	$button2_icon_pack_show_array = array();

	//do we have some collection added in collections array?
	if(is_array($qodeIconCollections->iconCollections) && count($qodeIconCollections->iconCollections)) {
		//get collections params array. It will contain values of 'param' property for each collection
		$button2_icon_collections_params = $qodeIconCollections->getIconCollectionsParams();

		//foreach collection generate hide and show array
		foreach ($qodeIconCollections->iconCollections as $dep_collection_key => $dep_collection_object) {
			$button2_icon_pack_hide_array[$dep_collection_key] = '';
			$button2_icon_pack_hide_array["no_icon"] = "";

			//button2_icon_size is input that is always shown when some icon pack is activated and hidden if 'no_icon' is selected
			$button2_icon_pack_hide_array["no_icon"] .= "#qodef_slider_button2_icon_size,";

			//we need to include only current collection in show string as it is the only one that needs to show
			$button2_icon_pack_show_array[$dep_collection_key] = '#qodef_slider_button2_icon_size,#qodef_button2_icon_'.$dep_collection_object->param.'_container';

			//for all collections param generate hide string
			foreach ($button2_icon_collections_params as $button2_icon_collections_param) {
				//we don't need to include current one, because it needs to be shown, not hidden
				if($button2_icon_collections_param !== $dep_collection_object->param) {
					$button2_icon_pack_hide_array[$dep_collection_key].= '#qodef_button2_icon_'.$button2_icon_collections_param.'_container,';
				}

				$button2_icon_pack_hide_array["no_icon"] .= '#qodef_button2_icon_'.$button2_icon_collections_param.'_container,';
			}

			//remove remaining ',' character
			$button2_icon_pack_hide_array[$dep_collection_key] = rtrim($button2_icon_pack_hide_array[$dep_collection_key], ',');
			$button2_icon_pack_hide_array["no_icon"] = rtrim($button2_icon_pack_hide_array["no_icon"], ',');
		}

	}

	$button2_icon_pack = new QodeMetaField(
		"select",
		"qode_slide_button2_icon_pack",
		"no_icon",
		"按钮2图标包",
		"选择第二个按钮图标包",
		$qodeIconCollections->getIconCollectionsEmpty("no_icon"),
		array(
			"dependence" => true,
			"hide" => $button2_icon_pack_hide_array,
			"show" => $button2_icon_pack_show_array
		));

	$qodeSlideButtons->addChild("button2_icon_pack", $button2_icon_pack);

	if(is_array($qodeIconCollections->iconCollections) && count($qodeIconCollections->iconCollections)) {
		//foreach icon collection we need to generate separate container that will have dependency set
		//it will have one field inside with icons dropdown
		foreach ($qodeIconCollections->iconCollections as $collection_key => $collection_object) {
			$icons_array = $collection_object->getIconsArray();

			//get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
			$icon_collections_keys = $qodeIconCollections->getIconCollectionsKeys();

			//unset current one, because it doesn't have to be included in dependency that hides icon container
			unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

			$button2_icon_hide_values = $icon_collections_keys;
			$button2_icon_hide_values[] = "no_icon";
			$button2_icon_container = new QodeContainer("button2_icon_".$collection_object->param."_container", "qode_slide_button2_icon_pack", "", $button2_icon_hide_values);
			$button2_icon = new QodeMetaField("select", "qode_slide_button2_icon_".$collection_object->param, "", "按钮2图标","选择第二按钮图标", $icons_array, array("col_width" => 3));
			$button2_icon_container->addChild("button2_icon_".$collection_object->param, $button2_icon);

			$qodeSlideButtons->addChild("button2_icon_".$collection_object->param."_container", $button2_icon_container);
		}

	}

//Qode Slide Content Positioning

$qodeSlideContentPositioning = new QodeMetaBox("slides", "幻灯片内容定位");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_content_positioning",$qodeSlideContentPositioning);

	$qode_slide_graphic_alignment = new QodeMetaField("selectblank","qode_slide-graphic-alignment","","图形对齐","选择幻灯片图形对齐方式", array(
	    "left" => "左",
	    "center" => "中",
	    "right" => "右"
	));
	$qodeSlideContentPositioning->addChild("qode_slide-graphic-alignment",$qode_slide_graphic_alignment);
	
	$qode_slide_text_alignment = new QodeMetaField("selectblank","qode_slide-content-alignment","","文字对齐","选择幻灯片文字对齐", array(
	    "left" => "左",
	    "center" => "中",
	    "right" => "右"
	));
	$qodeSlideContentPositioning->addChild("qode_slide-content-alignment",$qode_slide_text_alignment);

	$qode_slide_separate_text_graphic = new QodeMetaField("selectblank","qode_slide-separate-text-graphic","no","单独的图形和文本定位","是否要分开放置图形和文本？", array(
	    "no" => "否",
	    "yes" => "是"
	), array("dependence" => true,
	         "hide" => array(
	            "" => "#qodef_qode_slide_graphic_positioning_container",
	            "no" => "#qodef_qode_slide_graphic_positioning_container"
	         ),
	         "show" => array(
	             "yes" => "#qodef_qode_slide_graphic_positioning_container"
	         )));
	$qodeSlideContentPositioning->addChild("qode_slide-separate-text-graphic",$qode_slide_separate_text_graphic);

    $qode_slide_content_vertical_middle = new QodeMetaField("yesno","qode_slide-content-vertical-middle","no","垂直对齐内容到中间","", array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef_qode_slide-content-vertical-middle-container", "dependence_show_on_yes" => "#qodef_qode_slide-content-vertical-middle-type-container"));
    $qodeSlideContentPositioning->addChild("qode_slide-content-vertical-middle",$qode_slide_content_vertical_middle);

    $qode_slide_content_vertical_middle_type_container = new QodeContainer("qode_slide-content-vertical-middle-type-container","qode_slide-content-vertical-middle","no");
    $qodeSlideContentPositioning->addChild("qode_slide-content-vertical-middle-type-container",$qode_slide_content_vertical_middle_type_container);

        $qode_slide_content_vertical_middle_type = new QodeMetaField("selectblank","qode_slide-content-vertical-middle-type","","相对从哪里测量高度对齐内容垂直","", array(
            "bottom_of_header" => "页眉底部",
            "window_top" => "窗口顶部"
        ));
        $qode_slide_content_vertical_middle_type_container->addChild("qode_slide-content-vertical-middle-type",$qode_slide_content_vertical_middle_type);

        $qode_slide_vertical_content_full_width = new QodeMetaField("yesno","qode_slide_vertical_content_full_width","no","内容容器全宽","你想设置幻灯片内容容器为全宽吗？");
        $qode_slide_content_vertical_middle_type_container->addChild("qode_slide_vertical_content_full_width",$qode_slide_vertical_content_full_width);

        $qode_slide_vertical_content_width = new QodeMetaField("text","qode_slide_vertical_content_width","","内容宽度","输入内容区域宽度 (%)",array(), array("col_width" => 3));
        $qode_slide_content_vertical_middle_type_container->addChild("qode_slide_vertical_content_width",$qode_slide_vertical_content_width);

        $content_vertical_positioning_group = new QodeGroup("幻灯片内容周围空间","输入幻灯片内容周围边距值");
        $qode_slide_content_vertical_middle_type_container->addChild("content_vertical_positioning_group",$content_vertical_positioning_group);
        $row1 = new QodeRow(true);
        $content_vertical_positioning_group->addChild("row1",$row1);
        $qode_slide_vertical_content_left = new QodeMetaField("textsimple","qode_slide_vertical_content_left","","从左 (%)","This is some description");
        $row1->addChild("qode_slide_vertical_content_left",$qode_slide_vertical_content_left);
        $qode_slide_vertical_content_right = new QodeMetaField("textsimple","qode_slide_vertical_content_right","","从右 (%)","This is some description");
        $row1->addChild("qode_slide_vertical_content_right",$qode_slide_vertical_content_right);

    $qode_slide_content_vertical_middle_container = new QodeContainer("qode_slide-content-vertical-middle-container","qode_slide-content-vertical-middle","yes");
    $qodeSlideContentPositioning->addChild("qode_slide-content-vertical-middle-container",$qode_slide_content_vertical_middle_container);

        $content_positioning_group = new QodeGroup("内容定位","幻灯片标题、子标题、文字和按钮定位 (和定位的图形不分隔) ");
        $qode_slide_content_vertical_middle_container->addChild("content_positioning_group",$content_positioning_group);
            $row1 = new QodeRow();
            $content_positioning_group->addChild("row1",$row1);
                $qode_slide_content_width = new QodeMetaField("textsimple","qode_slide-content-width","","宽度 (%)","This is some description");
                $row1->addChild("qode_slide-content-width",$qode_slide_content_width);

            $row2 = new QodeRow(true);
            $content_positioning_group->addChild("row2",$row2);
                $qode_slide_content_top = new QodeMetaField("textsimple","qode_slide-content-top","","内容从上 (%)","This is some description");
                $row2->addChild("qode_slide-content-top",$qode_slide_content_top);
                $qode_slide_content_left = new QodeMetaField("textsimple","qode_slide-content-left","","内容从左 (%)","This is some description");
                $row2->addChild("qode_slide-content-left",$qode_slide_content_left);

            $row3 = new QodeRow(true);
            $content_positioning_group->addChild("row3",$row3);
                $qode_slide_content_bottom = new QodeMetaField("textsimple","qode_slide-content-bottom","","内容从下 (%)","This is some description");
                $row3->addChild("qode_slide-content-bottom",$qode_slide_content_bottom);
                $qode_slide_content_right = new QodeMetaField("textsimple","qode_slide-content-right","","内容从右 (%)","This is some description");
                $row3->addChild("qode_slide-content-right",$qode_slide_content_right);

        $qode_slide_graphic_positioning_container = new QodeContainer("qode_slide_graphic_positioning_container","qode_slide-separate-text-graphic","no");
        $qode_slide_content_vertical_middle_container->addChild("qode_slide_graphic_positioning_container",$qode_slide_graphic_positioning_container);

        $graphic_positioning_group = new QodeGroup("图形定位","为幻灯片图形定位");
        $qode_slide_graphic_positioning_container->addChild("graphic_positioning_group",$graphic_positioning_group);
            $row1 = new QodeRow();
            $graphic_positioning_group->addChild("row1",$row1);
                $qode_slide_content_width = new QodeMetaField("textsimple","qode_slide-graphic-width","","宽度 (%)","This is some description");
                $row1->addChild("qode_slide-graphic-width",$qode_slide_content_width);

            $row2 = new QodeRow(true);
            $graphic_positioning_group->addChild("row2",$row2);
                $qode_slide_content_top = new QodeMetaField("textsimple","qode_slide-graphic-top","","内容从上 (%)","This is some description");
                $row2->addChild("qode_slide-graphic-top",$qode_slide_content_top);
                $qode_slide_content_left = new QodeMetaField("textsimple","qode_slide-graphic-left","","内容从左 (%)","This is some description");
                $row2->addChild("qode_slide-graphic-left",$qode_slide_content_left);

            $row3 = new QodeRow(true);
            $graphic_positioning_group->addChild("row3",$row3);
                $qode_slide_content_bottom = new QodeMetaField("textsimple","qode_slide-graphic-bottom","","内容从下 (%)","This is some description");
                $row3->addChild("qode_slide-graphic-bottom",$qode_slide_content_bottom);
                $qode_slide_content_right = new QodeMetaField("textsimple","qode_slide-graphic-right","","内容从右 (%)","This is some description");
                $row3->addChild("qode_slide-graphic-right",$qode_slide_content_right);

//Qode Slide Scroll Animations

$qodeSlideScrollAnimations = new QodeMetaBox("slides", "幻灯片滚动动画");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_scroll_animations",$qodeSlideScrollAnimations);

	$qode_slide_general_animation = new QodeMetaField("yesno", "qode_slide_general_animation", "yes", "在一次滚动动画整个幻灯片内容组", "所有幻灯片内容部分将作为组一起滚动", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_general_animation_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_general_animation', $qode_slide_general_animation);

	$qode_slide_general_animation_container = new QodeContainer('qode_slide_general_animation_container', 'qode_slide_general_animation', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_general_animation_container', $qode_slide_general_animation_container);

		$qode_slide_content_animation_data_start = new QodeGroup("滚动动画起点", "这些是幻灯片内容组滚动动画开始属性");
		$qode_slide_general_animation_container->addChild("qode_slide_content_animation_data_start", $qode_slide_content_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_content_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_start = new QodeMetaField("textsimple", "qode_slide_data_start", "","滚动条顶部距离（PX）", "", array(), array("col_width" => 1));
				$row1->addChild("qode_slide_data_start", $qode_slide_data_start);

				$qode_slide_data_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_start_custom_style", "", "输入用分号分隔的CSS声明", "", array(), array("col_width" => 4));
				$row1->addChild("qode_slide_data_start_custom_style", $qode_slide_data_start_custom_style);

		$qode_slide_content_animation_data_end = new QodeGroup("滚动动画终点", "这些是幻灯片内容组滚动动画结束属性");
		$qode_slide_general_animation_container->addChild("qode_slide_content_animation_data_end", $qode_slide_content_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_content_animation_data_end->addChild('row2', $row2);

				$qode_slide_data_end = new QodeMetaField("textsimple", "qode_slide_data_end", "", "滚动条顶部距离（PX）", "");
				$row2->addChild("qode_slide_data_end", $qode_slide_data_end);

				$qode_slide_data_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_end_custom_style", "", "输入用分号分隔的CSS声明", "");
				$row2->addChild("qode_slide_data_end_custom_style", $qode_slide_data_end_custom_style);

//Title scroll animation
	$qode_slide_title_animation_scroll = new QodeMetaField("yesno", "qode_slide_title_animation_scroll", "no", "滚动动画标题", "启用标题文本单独动画", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_title_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_title_animation_scroll', $qode_slide_title_animation_scroll);

	$qode_slide_title_animation_scroll_container = new QodeContainer('qode_slide_title_animation_scroll_container', 'qode_slide_title_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_title_animation_scroll_container', $qode_slide_title_animation_scroll_container);

		$qode_slide_title_animation_data_start = new QodeGroup("滚动动画起点", "这些都是滚动动画第一个关键帧属性");
		$qode_slide_title_animation_scroll_container->addChild("qode_slide_title_animation_data_start", $qode_slide_title_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_title_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_title_start = new QodeMetaField("textsimple", "qode_slide_data_title_start", "", "滚动条顶部距离（PX）", "");
				$row1->addChild("qode_slide_data_title_start", $qode_slide_data_title_start);

				$qode_slide_data_title_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_title_start_custom_style", "", "输入用分号分隔的CSS声明", "");
				$row1->addChild("qode_slide_data_title_start_custom_style", $qode_slide_data_title_start_custom_style);

		$qode_slide_title_animation_data_end = new QodeGroup("滚动动画终点", "这些是滚动动画的最后一个关键帧的属性");
		$qode_slide_title_animation_scroll_container->addChild("qode_slide_title_animation_data_end", $qode_slide_title_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_title_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_title_end = new QodeMetaField("textsimple", "qode_slide_data_title_end", "", "滚动条顶部距离（PX）", "");
				$row2->addChild("qode_slide_data_title_end", $qode_slide_data_title_end);

				$qode_slide_data_title_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_title_end_custom_style", "", "输入用分号分隔的CSS声明", "");
				$row2->addChild("qode_slide_data_title_end_custom_style", $qode_slide_data_title_end_custom_style);


//Subtitle scroll animation
	$qode_slide_subtitle_animation_scroll = new QodeMetaField("yesno", "qode_slide_subtitle_animation_scroll", "no", "滚动动画子标题", "启用单独动画子标题文字", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_subtitle_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_subtitle_animation_scroll', $qode_slide_subtitle_animation_scroll);

	$qode_slide_subtitle_animation_scroll_container = new QodeContainer('qode_slide_subtitle_animation_scroll_container', 'qode_slide_subtitle_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_subtitle_animation_scroll_container', $qode_slide_subtitle_animation_scroll_container);

		$qode_slide_subtitle_animation_data_start = new QodeGroup("滚动动画起点", "这些都是滚动动画第一个关键帧属性");
		$qode_slide_subtitle_animation_scroll_container->addChild("qode_slide_subtitle_animation_data_start", $qode_slide_subtitle_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_subtitle_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_subtitle_start = new QodeMetaField("textsimple", "qode_slide_data_subtitle_start", "", "滚动条顶部距离（PX）", "");
				$row1->addChild("qode_slide_data_subtitle_start", $qode_slide_data_subtitle_start);

				$qode_slide_data_subtitle_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_subtitle_start_custom_style", "", "输入用分号分隔的CSS声明", "");
				$row1->addChild("qode_slide_data_subtitle_start_custom_style", $qode_slide_data_subtitle_start_custom_style);

		$qode_slide_subtitle_animation_data_end = new QodeGroup("滚动动画终点", "这些是滚动动画的最后一个关键帧的属性");
		$qode_slide_subtitle_animation_scroll_container->addChild("qode_slide_subtitle_animation_data_end", $qode_slide_subtitle_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_subtitle_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_subtitle_end = new QodeMetaField("textsimple", "qode_slide_data_subtitle_end", "", "滚动条顶部距离（PX）", "");
				$row2->addChild("qode_slide_data_subtitle_end", $qode_slide_data_subtitle_end);

				$qode_slide_data_subtitle_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_subtitle_end_custom_style", "", "输入用分号分隔的CSS声明", "");
				$row2->addChild("qode_slide_data_subtitle_end_custom_style", $qode_slide_data_subtitle_end_custom_style);


//Graphics scroll animation
	$qode_slide_graphic_animation_scroll = new QodeMetaField("yesno", "qode_slide_graphic_animation_scroll", "no", "滚动动画图形", "启用单独动画图形", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_graphic_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_graphic_animation_scroll', $qode_slide_graphic_animation_scroll);

	$qode_slide_graphic_animation_scroll_container = new QodeContainer('qode_slide_graphic_animation_scroll_container', 'qode_slide_graphic_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_graphic_animation_scroll_container', $qode_slide_graphic_animation_scroll_container);

		$qode_slide_graphics_animation_data_start = new QodeGroup("滚动动画起点", "这些都是滚动动画第一个关键帧属性");
		$qode_slide_graphic_animation_scroll_container->addChild("qode_slide_graphics_animation_data_start", $qode_slide_graphics_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_graphics_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_graphics_start = new QodeMetaField("textsimple", "qode_slide_data_graphics_start", "", "滚动条顶部距离（PX）", "");
				$row1->addChild("qode_slide_data_graphics_start", $qode_slide_data_graphics_start);

				$qode_slide_data_graphics_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_graphics_start_custom_style", "", "输入用分号分隔的CSS声明", "");
				$row1->addChild("qode_slide_data_graphics_start_custom_style", $qode_slide_data_graphics_start_custom_style);

		$qode_slide_graphics_animation_data_end = new QodeGroup("滚动动画终点", "这些是滚动动画的最后一个关键帧的属性");
		$qode_slide_graphic_animation_scroll_container->addChild("qode_slide_graphics_animation_data_end", $qode_slide_graphics_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_graphics_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_graphics_end = new QodeMetaField("textsimple", "qode_slide_data_graphics_end", "", "滚动条顶部距离（PX）", "");
				$row2->addChild("qode_slide_data_graphics_end", $qode_slide_data_graphics_end);

				$qode_slide_data_graphics_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_graphics_end_custom_style", "", "输入用分号分隔的CSS声明", "");
				$row2->addChild("qode_slide_data_graphics_end_custom_style", $qode_slide_data_graphics_end_custom_style);

//Text scroll animation
	$qode_slide_text_animation_scroll = new QodeMetaField("yesno", "qode_slide_text_animation_scroll", "no", "滚动动画文字", "启用单独动画文字", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_text_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_text_animation_scroll', $qode_slide_text_animation_scroll);

	$qode_slide_text_animation_scroll_container = new QodeContainer('qode_slide_text_animation_scroll_container', 'qode_slide_text_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_text_animation_scroll_container', $qode_slide_text_animation_scroll_container);

		$qode_slide_text_animation_data_start = new QodeGroup("滚动动画起点", "这些都是滚动动画第一个关键帧属性");
		$qode_slide_text_animation_scroll_container->addChild("qode_slide_text_animation_data_start", $qode_slide_text_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_text_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_text_start = new QodeMetaField("textsimple", "qode_slide_data_text_start", "", "滚动条顶部距离（PX）", "");
				$row1->addChild("qode_slide_data_text_start", $qode_slide_data_text_start);

				$qode_slide_data_text_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_text_start_custom_style", "", "输入用分号分隔的CSS声明", "");
				$row1->addChild("qode_slide_data_text_start_custom_style", $qode_slide_data_text_start_custom_style);

		$qode_slide_text_animation_data_end = new QodeGroup("滚动动画终点", "这些是滚动动画的最后一个关键帧的属性");
		$qode_slide_text_animation_scroll_container->addChild("qode_slide_text_animation_data_end", $qode_slide_text_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_text_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_text_end = new QodeMetaField("textsimple", "qode_slide_data_text_end", "", "滚动条顶部距离（PX）", "");
				$row2->addChild("qode_slide_data_text_end", $qode_slide_data_text_end);

				$qode_slide_data_text_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_text_end_custom_style", "", "输入用分号分隔的CSS声明", "");
				$row2->addChild("qode_slide_data_text_end_custom_style", $qode_slide_data_text_end_custom_style);


//Button 1 scroll animation
	$qode_slide_button1_animation_scroll = new QodeMetaField("yesno", "qode_slide_button1_animation_scroll", "no", "滚动动画按钮1", "启用单独动画按钮1", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_button1_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_button1_animation_scroll', $qode_slide_button1_animation_scroll);

	$qode_slide_button1_animation_scroll_container = new QodeContainer('qode_slide_button1_animation_scroll_container', 'qode_slide_button1_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_button1_animation_scroll_container', $qode_slide_button1_animation_scroll_container);

		$qode_slide_button_1_animation_data_start = new QodeGroup("滚动动画起点", "这些都是滚动动画第一个关键帧属性");
		$qode_slide_button1_animation_scroll_container->addChild("qode_slide_button_1_animation_data_start", $qode_slide_button_1_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_button_1_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_button_1_start = new QodeMetaField("textsimple", "qode_slide_data_button_1_start", "", "滚动条顶部距离（PX）");
				$row1->addChild("qode_slide_data_button_1_start", $qode_slide_data_button_1_start);

				$qode_slide_data_button_1_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_button_1_start_custom_style", "", "输入用分号分隔的CSS声明");
				$row1->addChild("qode_slide_data_button_1_start_custom_style", $qode_slide_data_button_1_start_custom_style);

		$qode_slide_button_1_animation_data_end = new QodeGroup("滚动动画终点", "这些是滚动动画的最后一个关键帧的属性");
		$qode_slide_button1_animation_scroll_container->addChild("qode_slide_button_1_animation_data_end", $qode_slide_button_1_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_button_1_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_button_1_end = new QodeMetaField("textsimple", "qode_slide_data_button_1_end", "", "滚动条顶部距离（PX）");
				$row2->addChild("qode_slide_data_button_1_end", $qode_slide_data_button_1_end);

				$qode_slide_data_button_1_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_button_1_end_custom_style", "", "输入用分号分隔的CSS声明");
				$row2->addChild("qode_slide_data_button_1_end_custom_style", $qode_slide_data_button_1_end_custom_style);



//Button 2 scroll animation
	$qode_slide_button2_animation_scroll = new QodeMetaField("yesno", "qode_slide_button2_animation_scroll", "no", "滚动动画按钮2", "启用单独动画按钮2", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_button2_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_button2_animation_scroll', $qode_slide_button2_animation_scroll);

	$qode_slide_button2_animation_scroll_container = new QodeContainer('qode_slide_button2_animation_scroll_container', 'qode_slide_button2_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_button2_animation_scroll_container', $qode_slide_button2_animation_scroll_container);

		$qode_slide_button_2_animation_data_start = new QodeGroup("滚动动画起点", "这些都是滚动动画第一个关键帧属性");
		$qode_slide_button2_animation_scroll_container->addChild("qode_slide_button_2_animation_data_start", $qode_slide_button_2_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_button_2_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_button_2_start = new QodeMetaField("textsimple", "qode_slide_data_button_2_start", "", "滚动条顶部距离（PX）");
				$row1->addChild("qode_slide_data_button_2_start", $qode_slide_data_button_2_start);

				$qode_slide_data_button_2_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_button_2_start_custom_style", "", "输入用分号分隔的CSS声明");
				$row1->addChild("qode_slide_data_button_2_start_custom_style", $qode_slide_data_button_2_start_custom_style);

		$qode_slide_button_2_animation_data_end = new QodeGroup("滚动动画终点", "这些是滚动动画的最后一个关键帧的属性");
		$qode_slide_button2_animation_scroll_container->addChild("qode_slide_button_2_animation_data_end", $qode_slide_button_2_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_button_2_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_button_2_end = new QodeMetaField("textsimple", "qode_slide_data_button_2_end", "", "滚动条顶部距离（PX）");
				$row2->addChild("qode_slide_data_button_2_end", $qode_slide_data_button_2_end);

				$qode_slide_data_button_2_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_button_2_end_custom_style", "", "输入用分号分隔的CSS声明");
				$row2->addChild("qode_slide_data_button_2_end_custom_style", $qode_slide_data_button_2_end_custom_style);


//Separator Bottom scroll animation
	$qode_slide_separator_bottom_animation_scroll = new QodeMetaField("yesno", "qode_slide_separator_bottom_animation_scroll", "no", "滚动单独动画", "启用单独动画单独底部", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_separator_bottom_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_separator_bottom_animation_scroll', $qode_slide_separator_bottom_animation_scroll);

	$qode_slide_separator_bottom_animation_scroll_container = new QodeContainer('qode_slide_separator_bottom_animation_scroll_container', 'qode_slide_separator_bottom_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_separator_bottom_animation_scroll_container', $qode_slide_separator_bottom_animation_scroll_container);

		$qode_slide_separator_bottom_animation_data_start = new QodeGroup("滚动动画起点", "这些都是滚动动画第一个关键帧属性");
		$qode_slide_separator_bottom_animation_scroll_container->addChild("qode_slide_separator_bottom_animation_data_start", $qode_slide_separator_bottom_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_separator_bottom_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_separator_bottom_start = new QodeMetaField("textsimple", "qode_slide_data_separator_bottom_start", "", "滚动条顶部距离（PX）");
				$row1->addChild("qode_slide_data_separator_bottom_start", $qode_slide_data_separator_bottom_start);

				$qode_slide_data_separator_bottom_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_separator_bottom_start_custom_style", "", "输入用分号分隔的CSS声明");
				$row1->addChild("qode_slide_data_separator_bottom_start_custom_style", $qode_slide_data_separator_bottom_start_custom_style);

		$qode_slide_separator_bottom_animation_data_end = new QodeGroup("滚动动画终点", "这些是滚动动画的最后一个关键帧的属性");
		$qode_slide_separator_bottom_animation_scroll_container->addChild("qode_slide_separator_bottom_animation_data_end", $qode_slide_separator_bottom_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_separator_bottom_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_separator_bottom_end = new QodeMetaField("textsimple", "qode_slide_data_separator_bottom_end", "", "滚动条顶部距离（PX）");
				$row2->addChild("qode_slide_data_separator_bottom_end", $qode_slide_data_separator_bottom_end);

				$qode_slide_data_separator_bottom_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_separator_bottom_end_custom_style", "", "输入用分号分隔的CSS声明");
				$row2->addChild("qode_slide_data_separator_bottom_end_custom_style", $qode_slide_data_separator_bottom_end_custom_style);


//SVG scroll animation
	$qode_slide_svg_animation_scroll = new QodeMetaField("yesno", "qode_slide_svg_animation_scroll", "no", "滚动动画SVG", "启用单独动画SVG", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_svg_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_svg_animation_scroll', $qode_slide_svg_animation_scroll);

	$qode_slide_svg_animation_scroll_container = new QodeContainer('qode_slide_svg_animation_scroll_container', 'qode_slide_svg_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_svg_animation_scroll_container', $qode_slide_svg_animation_scroll_container);

		$qode_slide_svg_animation_data_start = new QodeGroup("滚动动画起点", "这些都是滚动动画第一个关键帧属性");
		$qode_slide_svg_animation_scroll_container->addChild("qode_slide_svg_animation_data_start", $qode_slide_svg_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_svg_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_svg_start = new QodeMetaField("textsimple", "qode_slide_data_svg_start", "", "滚动条顶部距离（PX）");
				$row1->addChild("qode_slide_data_svg_start", $qode_slide_data_svg_start);

				$qode_slide_data_svg_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_svg_start_custom_style", "", "输入用分号分隔的CSS声明");
				$row1->addChild("qode_slide_data_svg_start_custom_style", $qode_slide_data_svg_start_custom_style);

		$qode_slide_svg_animation_data_end = new QodeGroup("滚动动画终点", "这些是滚动动画的最后一个关键帧的属性");
		$qode_slide_svg_animation_scroll_container->addChild("qode_slide_svg_animation_data_end", $qode_slide_svg_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_svg_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_svg_end = new QodeMetaField("textsimple", "qode_slide_data_svg_end", "", "滚动条顶部距离（PX）");
				$row2->addChild("qode_slide_data_svg_end", $qode_slide_data_svg_end);

				$qode_slide_data_svg_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_svg_end_custom_style", "", "输入用分号分隔的CSS声明");
				$row2->addChild("qode_slide_data_svg_end_custom_style", $qode_slide_data_svg_end_custom_style);