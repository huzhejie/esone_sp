<?php

if(!function_exists('qode_portfolio_options_map')) {
    /**
     * Portfolio options page
     */
    function qode_portfolio_options_map()
    {

$portfolioPage = new QodeAdminPage("_portfolio", "作品", "fa fa-camera-retro");
        qode_framework()->qodeOptions->addAdminPage("portfolioPage", $portfolioPage);

        //Portfolio Single Project

$panel1 = new QodePanel("作品单个项目", "porfolio_single_project");
        $portfolioPage->addChild("panel1", $panel1);

	$portfolio_style = new QodeField("select","portfolio_style","1","作品类型",'选择单个项目页默认类型', array( "1" => "作品小图片",
       "2" => "作品小幻灯片",
       "5" => "作品大图片",
       "3" => "作品大幻灯片",
       "4" => "作品自定义 - 网格",
       "7" => "作品自定义 - 全宽",
       "6" => "作品相册",
            "8" => "作品大幻灯片 - 现代",
        ));
        $panel1->addChild("portfolio_style", $portfolio_style);

	$portfolio_qode_like = new QodeField("onoff","portfolio_qode_like","on","赞",'启用此选项将打开"赞"');
        $panel1->addChild("portfolio_qode_like", $portfolio_qode_like);

	$lightbox_single_project = new QodeField("yesno","lightbox_single_project","yes","图片灯箱","启用此选项将为带图片项目打开灯箱功能.");
        $panel1->addChild("lightbox_single_project", $lightbox_single_project);

	$lightbox_video_single_project = new QodeField("yesno","lightbox_video_single_project","no","视频灯箱","启用此选项将为Youtube/Vimeo项目打开灯箱功能.");
        $panel1->addChild("lightbox_video_single_project", $lightbox_video_single_project);

	$portfolio_columns_number = new QodeField("select","portfolio_columns_number","2","列数",'输入作品相册类型列数', array( "2" => "2 列",
       "3" => "3 列",
       "4" => "4 列"
        ));
        $panel1->addChild("portfolio_columns_number", $portfolio_columns_number);

	$portfolio_single_sidebar = new QodeField("select","portfolio_single_sidebar","default","侧边栏布局","选择单个项目页侧边栏布局", array( "default" => "无侧边栏",
       "1" => "侧边栏1/3右",
       "2" => "侧边栏1/4右",
       "3" => "侧边栏1/3左",
       "4" => "侧边栏1/4左"
        ));
        $panel1->addChild("portfolio_single_sidebar", $portfolio_single_sidebar);

        $custom_sidebars = array();
        foreach ($GLOBALS['wp_registered_sidebars'] as $sidebar) {
            if (isUserMadeSidebar(ucwords($sidebar['name']))) {
                $custom_sidebars[$sidebar['id']] = ucwords($sidebar['name']);
            }
        }
	$portfolio_single_sidebar_custom_display = new QodeField("selectblank","portfolio_single_sidebar_custom_display","","显示侧边栏","选择单个项目页显示侧边栏", $custom_sidebars);
        $panel1->addChild("portfolio_single_sidebar_custom_display", $portfolio_single_sidebar_custom_display);

	$portfolio_single_slug = new QodeField("text","portfolio_single_slug","","单个作品别名",'如果你想使用不同的单个作品别名请输入(注意：输入别名之后，去 设置 -> 固定链接点击"保存"更改效果) ', array(), array("col_width" => 3));
        $panel1->addChild("portfolio_single_slug", $portfolio_single_slug);

        $disable_portfolio_single_title_label = new QodeField("yesno", "disable_portfolio_single_title_label", "no", "禁用项目标题标签", "启用此选项将隐藏作品单页上的关于此项目的标签");
        $panel1->addChild("disable_portfolio_single_title_label", $disable_portfolio_single_title_label);

        $portfolio_text_follow = new QodeField("portfoliofollow", "portfolio_text_follow", "portfolio_single_follow", "粘边文本 ", "启用此选项将使侧面文字粘在单个项目页面");
        $panel1->addChild("portfolio_text_follow", $portfolio_text_follow);

	$portfolio_comments = new QodeField("yesno","enable_portfolio_comments", "no", "启用评论","启用此选项将在作品单页显示评论");
        $panel1->addChild("enable_portfolio_comments", $portfolio_comments);

        $portfolio_related = new QodeField("yesno", "enable_portfolio_related", "no", "启用相册作品", "启用此选项将在作品单页显示相关作品", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_portfolio_related_container"));
        $panel1->addChild("enable_portfolio_related", $portfolio_related);

        $portfolio_related_container = new QodeContainer("portfolio_related_container", "enable_portfolio_related", "no");
        $panel1->addChild("portfolio_related_container", $portfolio_related_container);

        $portfolio_related_image_size = new QodeField("select", "portfolio_related_image_size", "", "图像比例", '选择相关作品项目图片比例。', array(
            "" => "原始",
            "portfolio-landscape" => "横向",
            "portfolio-portrait" => "竖向",
            "portfolio-square" => "方形"
        ));
        $portfolio_related_container->addChild("portfolio_related_image_size", $portfolio_related_image_size);

        $enable_navigation_title = new QodeField("yesno", "enable_navigation_title", "no", "在导航显示标题", "启用此选项将在作品单个导航显示标题和分类");
        $panel1->addChild("enable_navigation_title", $enable_navigation_title);

        $portfolio_navigation_through_same_category = new QodeField("yesno", "portfolio_navigation_through_same_category", "no", "启用通过相同分类的分页", "启用此选项将使作品分布通过当前分类排序。");
        $panel1->addChild("portfolio_navigation_through_same_category", $portfolio_navigation_through_same_category);


        /* Portfolio List */

$panel2 = new QodePanel("作品列表", "porfolio_list");
        $portfolioPage->addChild("panel2", $panel2);

	$group1 = new QodeGroup("叠加风格","定义叠加风格");
        $panel2->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);
	$portfolio_list_overlay_color = new QodeField("colorsimple","portfolio_list_overlay_color","","叠加颜色","选择叠加颜色");
        $row1->addChild("portfolio_list_overlay_color", $portfolio_list_overlay_color);
	$portfolio_list_overlay_opacity = new QodeField("textsimple","portfolio_list_overlay_opacity","","叠加透明度 (值 0-1)","This is some description");
        $row1->addChild("portfolio_list_overlay_opacity", $portfolio_list_overlay_opacity);

	$group2 = new QodeGroup("标题风格 (标准和切片带间距)","定义标题风格");
        $panel2->addChild("group2", $group2);
        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);
	$portfolio_list_standard_title_color = new QodeField("colorsimple","portfolio_list_standard_title_color","","文字颜色","This is some description");
        $row1->addChild("portfolio_list_standard_title_color", $portfolio_list_standard_title_color);
	$portfolio_list_standard_title_hover_color = new QodeField("colorsimple","portfolio_list_standard_title_hover_color","","文字悬停颜色","This is some description");
        $row1->addChild("portfolio_list_standard_title_hover_color", $portfolio_list_standard_title_hover_color);
	$portfolio_list_standard_title_fontsize = new QodeField("textsimple","portfolio_list_standard_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("portfolio_list_standard_title_fontsize", $portfolio_list_standard_title_fontsize);
	$portfolio_list_standard_title_lineheight = new QodeField("textsimple","portfolio_list_standard_title_lineheight","","行高（px）","This is some description");
        $row1->addChild("portfolio_list_standard_title_lineheight", $portfolio_list_standard_title_lineheight);
        $row2 = new QodeRow(true);
        $group2->addChild("row2", $row2);
        $portfolio_list_standard_title_texttransform = new QodeField("selectblanksimple", "portfolio_list_standard_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("portfolio_list_standard_title_texttransform", $portfolio_list_standard_title_texttransform);
	$portfolio_list_standard_title_google_fonts = new QodeField("fontsimple","portfolio_list_standard_title_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("portfolio_list_standard_title_google_fonts", $portfolio_list_standard_title_google_fonts);
        $portfolio_list_standard_title_fontstyle = new QodeField("selectblanksimple", "portfolio_list_standard_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("portfolio_list_standard_title_fontstyle", $portfolio_list_standard_title_fontstyle);
        $portfolio_list_standard_title_fontweight = new QodeField("selectblanksimple", "portfolio_list_standard_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("portfolio_list_standard_title_fontweight", $portfolio_list_standard_title_fontweight);
        $row3 = new QodeRow(true);
        $group2->addChild("row3", $row3);
        $portfolio_list_standard_title_letterspacing = new QodeField("textsimple", "portfolio_list_standard_title_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("portfolio_list_standard_title_letterspacing", $portfolio_list_standard_title_letterspacing);

	$group3 = new QodeGroup("分类风格 (标准和切片带间距)","定义分类风格");
        $panel2->addChild("group3", $group3);
        $row1 = new QodeRow();
        $group3->addChild("row1", $row1);
	$portfolio_list_standard_category_color = new QodeField("colorsimple","portfolio_list_standard_category_color","","文字颜色","This is some description");
        $row1->addChild("portfolio_list_standard_category_color", $portfolio_list_standard_category_color);
	$portfolio_list_standard_category_fontsize = new QodeField("textsimple","portfolio_list_standard_category_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("portfolio_list_standard_category_fontsize", $portfolio_list_standard_category_fontsize);
	$portfolio_list_standard_category_lineheight = new QodeField("textsimple","portfolio_list_standard_category_lineheight","","行高（px）","This is some description");
        $row1->addChild("portfolio_list_standard_category_lineheight", $portfolio_list_standard_category_lineheight);
        $portfolio_list_standard_category_texttransform = new QodeField("selectblanksimple", "portfolio_list_standard_category_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row1->addChild("portfolio_list_standard_category_texttransform", $portfolio_list_standard_category_texttransform);
        $row2 = new QodeRow(true);
        $group3->addChild("row2", $row2);
	$portfolio_list_standard_category_google_fonts = new QodeField("fontsimple","portfolio_list_standard_category_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("portfolio_list_standard_category_google_fonts", $portfolio_list_standard_category_google_fonts);
        $portfolio_list_standard_category_fontstyle = new QodeField("selectblanksimple", "portfolio_list_standard_category_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("portfolio_list_standard_category_fontstyle", $portfolio_list_standard_category_fontstyle);
        $portfolio_list_standard_category_fontweight = new QodeField("selectblanksimple", "portfolio_list_standard_category_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("portfolio_list_standard_category_fontweight", $portfolio_list_standard_category_fontweight);
	$portfolio_list_standard_category_letterspacing = new QodeField("textsimple","portfolio_list_standard_category_letterspacing","","字符间距（px）","This is some description");
        $row2->addChild("portfolio_list_standard_category_letterspacing", $portfolio_list_standard_category_letterspacing);

	$group4 = new QodeGroup("标题风格 (悬停文字、切片无间距和切片有间距（仅图片）)","定义标题风格");
        $panel2->addChild("group4", $group4);
        $row1 = new QodeRow();
        $group4->addChild("row1", $row1);
	$portfolio_list_gallery_title_color = new QodeField("colorsimple","portfolio_list_gallery_title_color","","文字颜色","This is some description");
        $row1->addChild("portfolio_list_gallery_title_color", $portfolio_list_gallery_title_color);
	$portfolio_list_gallery_title_hover_color = new QodeField("colorsimple","portfolio_list_gallery_title_hover_color","","文字悬停颜色","This is some description");
        $row1->addChild("portfolio_list_gallery_title_hover_color", $portfolio_list_gallery_title_hover_color);
	$portfolio_list_gallery_title_fontsize = new QodeField("textsimple","portfolio_list_gallery_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("portfolio_list_gallery_title_fontsize", $portfolio_list_gallery_title_fontsize);
	$portfolio_list_gallery_title_lineheight = new QodeField("textsimple","portfolio_list_gallery_title_lineheight","","行高（px）","This is some description");
        $row1->addChild("portfolio_list_gallery_title_lineheight", $portfolio_list_gallery_title_lineheight);

        $row2 = new QodeRow(true);
        $group4->addChild("row2", $row2);
        $portfolio_list_gallery_title_texttransform = new QodeField("selectblanksimple", "portfolio_list_gallery_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("portfolio_list_gallery_title_texttransform", $portfolio_list_gallery_title_texttransform);
        $portfolio_list_gallery_title_google_fonts = new QodeField("fontsimple", "portfolio_list_gallery_title_google_fonts", "-1", "字体系列", "This is some description");
        $row2->addChild("portfolio_list_gallery_title_google_fonts", $portfolio_list_gallery_title_google_fonts);
        $portfolio_list_gallery_title_fontstyle = new QodeField("selectblanksimple", "portfolio_list_gallery_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("portfolio_list_gallery_title_fontstyle", $portfolio_list_gallery_title_fontstyle);
        $portfolio_list_gallery_title_fontweight = new QodeField("selectblanksimple", "portfolio_list_gallery_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("portfolio_list_gallery_title_fontweight", $portfolio_list_gallery_title_fontweight);
        $row3 = new QodeRow(true);
        $group4->addChild("row3", $row3);
        $portfolio_list_gallery_title_letterspacing = new QodeField("textsimple", "portfolio_list_gallery_title_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("portfolio_list_gallery_title_letterspacing", $portfolio_list_gallery_title_letterspacing);

	$group5 = new QodeGroup("分类风格 (悬停文字、切片无间距和切片有间距（仅图片）)","定义分类风格");
        $panel2->addChild("group5", $group5);
        $row1 = new QodeRow();
        $group5->addChild("row1", $row1);
	$portfolio_list_gallery_category_color = new QodeField("colorsimple","portfolio_list_gallery_category_color","","文字颜色","This is some description");
        $row1->addChild("portfolio_list_gallery_category_color", $portfolio_list_gallery_category_color);
	$portfolio_list_gallery_category_fontsize = new QodeField("textsimple","portfolio_list_gallery_category_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("portfolio_list_gallery_category_fontsize", $portfolio_list_gallery_category_fontsize);
	$portfolio_list_gallery_category_lineheight = new QodeField("textsimple","portfolio_list_gallery_category_lineheight","","行高（px）","This is some description");
        $row1->addChild("portfolio_list_gallery_category_lineheight", $portfolio_list_gallery_category_lineheight);
        $portfolio_list_gallery_category_texttransform = new QodeField("selectblanksimple", "portfolio_list_gallery_category_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row1->addChild("portfolio_list_gallery_category_texttransform", $portfolio_list_gallery_category_texttransform);
        $row2 = new QodeRow(true);
        $group5->addChild("row2", $row2);
	$portfolio_list_gallery_category_google_fonts = new QodeField("fontsimple","portfolio_list_gallery_category_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("portfolio_list_gallery_category_google_fonts", $portfolio_list_gallery_category_google_fonts);
        $portfolio_list_gallery_category_fontstyle = new QodeField("selectblanksimple", "portfolio_list_gallery_category_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("portfolio_list_gallery_category_fontstyle", $portfolio_list_gallery_category_fontstyle);
        $portfolio_list_gallery_category_fontweight = new QodeField("selectblanksimple", "portfolio_list_gallery_category_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("portfolio_list_gallery_category_fontweight", $portfolio_list_gallery_category_fontweight);
	$portfolio_list_gallery_category_letterspacing = new QodeField("textsimple","portfolio_list_gallery_category_letterspacing","","字符间距（px）","This is some description");
        $row2->addChild("portfolio_list_gallery_category_letterspacing", $portfolio_list_gallery_category_letterspacing);

	$group6 = new QodeGroup("分类筛选风格","定义分类筛选风格");
        $panel2->addChild("group6", $group6);

        $row1 = new QodeRow();
        $group6->addChild("row1", $row1);

	$portfolio_list_filter_background_color = new QodeField("colorsimple","portfolio_list_filter_background_color","","背景颜色","选择筛选区域背景颜色");
        $row1->addChild("portfolio_list_filter_background_color", $portfolio_list_filter_background_color);
	$portfolio_list_filter_height = new QodeField("textsimple","portfolio_list_filter_height","","高度（px）","输入筛选区域高度");
        $row1->addChild("portfolio_list_filter_height", $portfolio_list_filter_height);
	$portfolio_filter_margin_bottom = new QodeField("textsimple","portfolio_filter_margin_bottom","","下边距（px）","输入筛选区域下边距。默认值是40");
        $row1->addChild("portfolio_filter_margin_bottom", $portfolio_filter_margin_bottom);

$thin_icon_only_title = new QodeTitle('thin_icon_only', '仅悬停时细加号');
        $panel2->addChild('thin_icon_only', $thin_icon_only_title);
$thin_icon_font_family = new QodeField('font', 'thin_icon_only_font_family', '', '图标字体系列', '选择悬停时出现的字体系列加号图标');
        $panel2->addChild('thin_icon_only_font_family', $thin_icon_font_family);
    }
    add_action('qode_options_map','qode_portfolio_options_map',110);
}