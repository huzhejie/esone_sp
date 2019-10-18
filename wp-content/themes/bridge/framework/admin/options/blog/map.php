<?php

if(!function_exists('qode_blog_options_map')) {
    /**
     * Blog options page
     */
    function qode_blog_options_map()
    {

        $blogPage = new QodeAdminPage("_blog", "博客", "fa fa-files-o");
        qode_framework()->qodeOptions->addAdminPage("blogPage", $blogPage);

        // Blog List

        $panel2 = new QodePanel("博客列表", "blog_list_panel");
        $blogPage->addChild("panel2", $panel2);

	$pagination = new QodeField("zeroone","pagination","1","分页","启用此选项将在博客列表底部显示页码");
        $panel2->addChild("pagination", $pagination);

	$blog_style = new QodeField("select","blog_style","1","归档和分类布局","选择归档博客列表和分类博客列表默认博客布局", array(
       "1" => "博客大图片",
//     "5" => "Blog Masonry Full Width",
       "3" => "博客大图片整个文章",
       "4" => "博客小图片",
        "2" => "博客切片",
        "7" => "博客大图片带分隔",
        "8" => "博客切片 - 日期在图片中",
            "9" => "博客复合",
            "10" => "博客Pinterest",
            "11" => "博客标题",
            "12" => "博客网纹"
        ));
        $panel2->addChild("blog_style", $blog_style);

	$category_blog_sidebar = new QodeField("select","category_blog_sidebar","default","归档和分类侧边栏","选择归档博客列表和分类博客列表侧边栏布局", array( "default" => "无侧边栏",
       "1" => "侧边栏1/3右",
       "2" => "侧边栏1/4右",
       "3" => "侧边栏1/3左",
       "4" => "侧边栏1/4左"
        ));
        $panel2->addChild("category_blog_sidebar", $category_blog_sidebar);

	$blog_hide_comments = new QodeField("yesno","blog_hide_comments","no","隐藏评论","启用此选项将隐藏博客列表和单个博客文章的评论");
        $panel2->addChild("blog_hide_comments", $blog_hide_comments);

	$blog_hide_author = new QodeField("yesno","blog_hide_author","no","隐藏作者","启用此选项将隐藏博客列表作者名");
        $panel2->addChild("blog_hide_author", $blog_hide_author);

	$qode_like = new QodeField("onoff","qode_like","on","赞",'启用此选项将打开"赞"');
        $panel2->addChild("qode_like", $qode_like);

	$blog_page_range = new QodeField("text","blog_page_range","","分页页面范围",'输入"..."之前显示的数字 (例如，输入"3"获取"1 2 3...")', array(), array("col_width" => 3));
        $panel2->addChild("blog_page_range", $blog_page_range);

	$number_of_chars = new QodeField("text","number_of_chars","45","博客列表字数",'输入博客列表每个文章显示的字数', array(), array("col_width" => 3));
        $panel2->addChild("number_of_chars", $number_of_chars);

	$number_of_chars_masonry = new QodeField("text","number_of_chars_masonry","","切片字数",'输入"切片"博客列表每个文章显示字数 (注意：这会覆盖上面的"字数")', array(), array("col_width" => 3));
        $panel2->addChild("number_of_chars_masonry", $number_of_chars_masonry);

	$number_of_chars_large_image = new QodeField("text","number_of_chars_large_image","","大图片字数",'输入"大图片"博客列表每个文章显示字数(注意：这将覆盖上面的"字数")', array(), array("col_width" => 3));
        $panel2->addChild("number_of_chars_large_image", $number_of_chars_large_image);

	$number_of_chars_small_image = new QodeField("text","number_of_chars_small_image","","小图片字数",'输入"小图片"博客列表每个文章显示字数(注意：这将覆盖上面的"字数"))', array(), array("col_width" => 3));
        $panel2->addChild("number_of_chars_small_image", $number_of_chars_small_image);

	$blog_content_position = new QodeField("select","blog_content_position","content_above_blog_list","内容位置","选择当启用侧边栏时博客列表模板内容位置。注意：此设置仅适用于模板，不适合归档页面", array(
		"content_above_blog_list" => "内容在博客列表上面",
		"content_above_blog_list_and_sidebar" => "内容在博客列表和侧边栏上面"
        ));
        $panel2->addChild("blog_content_position", $blog_content_position);

        $pagination_masonry = new QodeField("select", "pagination_masonry", "pagination", "切片/Pinterest/标题分页", '为"切片/Pinterest/标题"博客列表选择分页风格', array(
            "pagination" => "页码",
            "load_more" => "加载更多",
            "infinite_scroll" => "无限滚动"
        ));
        $panel2->addChild("pagination_masonry", $pagination_masonry);

	$blog_masonry_filter = new QodeField("yesno","blog_masonry_filter","no","在切片显示分类筛选",'启用此选项将在"切片"博客列表显示分类筛选');
        $panel2->addChild("blog_masonry_filter", $blog_masonry_filter);

	$blog_masonry_padding = new QodeField("text","blog_masonry_padding","","全宽切片边距",'请插入边距像素值 (例如：5px), 或% (例如：5%)',array(),array("col_width" => 3));
        $panel2->addChild("blog_masonry_padding", $blog_masonry_padding);

	$blog_large_image_subtitle = new QodeTitle("blog_large_image_subtitle", "博客大图片风格");
        $panel2->addChild("blog_large_image_subtitle", $blog_large_image_subtitle);

	$group1 = new QodeGroup("大图片风格",'定义"大图片"博客列表风格');
        $panel2->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);
        $blog_large_image_text_in_box = new QodeField("selectsimple", "blog_large_image_text_in_box", "", "框内文字", 'ThisIsDescription', array("Default" => "默认",
		   "no" => "否",
		   "yes" => "是"
        ));
        $row1->addChild("blog_large_image_text_in_box", $blog_large_image_text_in_box);
        $blog_large_image_border = new QodeField("selectsimple", "blog_large_image_border", "", "文字框边框", 'ThisIsDescription', array("Default" => "默认",
		   "no" => "否",
		   "yes" => "是"
        ));
        $row1->addChild("blog_large_image_border", $blog_large_image_border);
			$blog_large_image_border_width = new QodeField("textsimple","blog_large_image_border_width","","文字框边框宽度（px）","This is some description");
        $row1->addChild("blog_large_image_border_width", $blog_large_image_border_width);
        $row2 = new QodeRow(true);
        $group1->addChild("row2", $row2);
			$blog_large_image_background_color = new QodeField("colorsimple","blog_large_image_background_color","","文字框背景颜色","ThisIsDescription");
        $row2->addChild("blog_large_image_background_color", $blog_large_image_background_color);
			$blog_large_image_border_color = new QodeField("colorsimple","blog_large_image_border_color","","文字框边框颜色","ThisIsDescription");
        $row2->addChild("blog_large_image_border_color", $blog_large_image_border_color);

		$group2 = new QodeGroup("标题风格","定义标题风格。*请注意这些设置也在单个文章标题有效");
        $panel2->addChild("group2", $group2);
        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);
				$blog_large_image_title_color = new QodeField("colorsimple","blog_large_image_title_color","","标题颜色","This is some description");
        $row1->addChild("blog_large_image_title_color", $blog_large_image_title_color);
				$blog_large_image_title_hover_color = new QodeField("colorsimple","blog_large_image_title_hover_color","","标题悬停颜色","This is some description");
        $row1->addChild("blog_large_image_title_hover_color", $blog_large_image_title_hover_color);
				$blog_large_image_title_date_color = new QodeField("colorsimple","blog_large_image_title_date_color","","日期颜色","This is some description");
        $row1->addChild("blog_large_image_title_date_color", $blog_large_image_title_date_color);
				$blog_large_image_title_fontsize = new QodeField("textsimple","blog_large_image_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_large_image_title_fontsize", $blog_large_image_title_fontsize);


        $row2 = new QodeRow(true);
        $group2->addChild("row2", $row2);
				$blog_large_image_title_lineheight = new QodeField("textsimple","blog_large_image_title_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_large_image_title_lineheight", $blog_large_image_title_lineheight);
        $blog_large_image_title_texttransform = new QodeField("selectblanksimple", "blog_large_image_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_large_image_title_texttransform", $blog_large_image_title_texttransform);
				$blog_large_image_title_google_fonts = new QodeField("fontsimple","blog_large_image_title_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_large_image_title_google_fonts", $blog_large_image_title_google_fonts);
        $blog_large_image_title_fontstyle = new QodeField("selectblanksimple", "blog_large_image_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_large_image_title_fontstyle", $blog_large_image_title_fontstyle);

        $row3 = new QodeRow(true);
        $group2->addChild("row3", $row3);
        $blog_large_image_title_fontweight = new QodeField("selectblanksimple", "blog_large_image_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_large_image_title_fontweight", $blog_large_image_title_fontweight);
        $blog_large_image_title_letterspacing = new QodeField("textsimple", "blog_large_image_title_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_large_image_title_letterspacing", $blog_large_image_title_letterspacing);

		$group18 = new QodeGroup("文章信息风格","定义文章信息风格。*请注意这些设置也对单个文章信息有效");
        $panel2->addChild("group18", $group18);
        $row1 = new QodeRow();
        $group18->addChild("row1", $row1);
				$blog_large_image_post_info_color = new QodeField("colorsimple","blog_large_image_post_info_color","","文字颜色","This is some description");
        $row1->addChild("blog_large_image_post_info_color", $blog_large_image_post_info_color);
				$blog_large_image_post_info_link_color = new QodeField("colorsimple","blog_large_image_post_info_link_color","","链接颜色","This is some description");
        $row1->addChild("blog_large_image_post_info_link_color", $blog_large_image_post_info_link_color);
				$blog_large_image_post_info_link_hover_color = new QodeField("colorsimple","blog_large_image_post_info_link_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("blog_large_image_post_info_link_hover_color", $blog_large_image_post_info_link_hover_color);
				$blog_large_image_post_info_fontsize = new QodeField("textsimple","blog_large_image_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_large_image_post_info_fontsize", $blog_large_image_post_info_fontsize);

        $row2 = new QodeRow(true);
        $group18->addChild("row2", $row2);
				$blog_large_image_post_info_lineheight = new QodeField("textsimple","blog_large_image_post_info_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_large_image_post_info_lineheight", $blog_large_image_post_info_lineheight);
        $blog_large_image_post_info_texttransform = new QodeField("selectblanksimple", "blog_large_image_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_large_image_post_info_texttransform", $blog_large_image_post_info_texttransform);
				$blog_large_image_post_info_google_fonts = new QodeField("fontsimple","blog_large_image_post_info_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_large_image_post_info_google_fonts", $blog_large_image_post_info_google_fonts);
        $blog_large_image_post_info_fontstyle = new QodeField("selectblanksimple", "blog_large_image_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_large_image_post_info_fontstyle", $blog_large_image_post_info_fontstyle);

        $row3 = new QodeRow(true);
        $group18->addChild("row3", $row3);
        $blog_large_image_post_info_fontweight = new QodeField("selectblanksimple", "blog_large_image_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_large_image_post_info_fontweight", $blog_large_image_post_info_fontweight);
        $blog_large_image_post_info_letterspacing = new QodeField("textsimple", "blog_large_image_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_large_image_post_info_letterspacing", $blog_large_image_post_info_letterspacing);

		$group23 = new QodeGroup("文章信息引用/链接风格","定义引用/链接文章信息风格。*请注意这些设置也对单个文章信息有效");
        $panel2->addChild("group23", $group23);
        $row1 = new QodeRow();
        $group23->addChild("row1", $row1);
        $blog_large_image_ql_post_info_color = new QodeField("colorsimple", "blog_large_image_ql_post_info_color", "", "文字颜色", "This is some description");
        $row1->addChild("blog_large_image_ql_post_info_color", $blog_large_image_ql_post_info_color);
        $blog_large_image_ql_post_info_link_color = new QodeField("colorsimple", "blog_large_image_ql_post_info_link_color", "", "链接颜色", "This is some description");
        $row1->addChild("blog_large_image_ql_post_info_link_color", $blog_large_image_ql_post_info_link_color);
        $blog_large_image_ql_post_info_link_hover_color = new QodeField("colorsimple", "blog_large_image_ql_post_info_link_hover_color", "", "链接悬停颜色", "This is some description");
        $row1->addChild("blog_large_image_ql_post_info_link_hover_color", $blog_large_image_ql_post_info_link_hover_color);
        $blog_large_image_ql_post_info_fontsize = new QodeField("textsimple", "blog_large_image_ql_post_info_fontsize", "", "字体大小 (px)", "This is some description");
        $row1->addChild("blog_large_image_ql_post_info_fontsize", $blog_large_image_ql_post_info_fontsize);

        $row2 = new QodeRow(true);
        $group23->addChild("row2", $row2);
        $blog_large_image_ql_post_info_lineheight = new QodeField("textsimple", "blog_large_image_ql_post_info_lineheight", "", "行高 (px)", "This is some description");
        $row2->addChild("blog_large_image_ql_post_info_lineheight", $blog_large_image_ql_post_info_lineheight);
        $blog_large_image_ql_post_info_texttransform = new QodeField("selectblanksimple", "blog_large_image_ql_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_large_image_ql_post_info_texttransform", $blog_large_image_ql_post_info_texttransform);
        $blog_large_image_ql_post_info_google_fonts = new QodeField("fontsimple", "blog_large_image_ql_post_info_google_fonts", "-1", "字体系列", "This is some description");
        $row2->addChild("blog_large_image_ql_post_info_google_fonts", $blog_large_image_ql_post_info_google_fonts);
        $blog_large_image_ql_post_info_fontstyle = new QodeField("selectblanksimple", "blog_large_image_ql_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_large_image_ql_post_info_fontstyle", $blog_large_image_ql_post_info_fontstyle);

        $row3 = new QodeRow(true);
        $group23->addChild("row3", $row3);
        $blog_large_image_ql_post_info_fontweight = new QodeField("selectblanksimple", "blog_large_image_ql_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_large_image_ql_post_info_fontweight", $blog_large_image_ql_post_info_fontweight);
        $blog_large_image_ql_post_info_letterspacing = new QodeField("textsimple", "blog_large_image_ql_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_large_image_ql_post_info_letterspacing", $blog_large_image_ql_post_info_letterspacing);


        $blog_small_image_subtitle = new QodeTitle("blog_small_image_subtitle", "博客小图片风格");
        $panel2->addChild("blog_small_image_subtitle", $blog_small_image_subtitle);

        $group3 = new QodeGroup("小图片风格", '定义"小图片"博客列表');
        $panel2->addChild("group3", $group3);
        $row1 = new QodeRow();
        $group3->addChild("row1", $row1);
        $blog_small_image_text_in_box = new QodeField("selectsimple", "blog_small_image_text_in_box", "", "框内文字", "ThisIsDescription", array("Default" => "默认",
            "no" => "否",
            "yes" => "是"
        ));
        $row1->addChild("blog_small_image_text_in_box", $blog_small_image_text_in_box);
        $blog_small_image_border = new QodeField("selectsimple", "blog_small_image_border", "", "文字框边框", "ThisIsDescription", array("Default" => "默认",
            "no" => "否",
            "yes" => "是"
        ));
        $row1->addChild("blog_small_image_border", $blog_small_image_border);
        $blog_small_image_border_width = new QodeField("textsimple", "blog_small_image_border_width", "", "文字框边框宽度 (px)", "ThisIsDescription");
        $row1->addChild("blog_small_image_border_width", $blog_small_image_border_width);
        $row2 = new QodeRow(true);
        $group3->addChild("row2", $row2);
        $blog_small_image_background_color = new QodeField("colorsimple", "blog_small_image_background_color", "", "文字框背景颜色", 'ThisIsDescription');
        $row2->addChild("blog_small_image_background_color", $blog_small_image_background_color);
        $blog_small_image_border_color = new QodeField("colorsimple", "blog_small_image_border_color", "", "文字框边框颜色", "ThisIsDescription");
        $row2->addChild("blog_small_image_border_color", $blog_small_image_border_color);

        $group4 = new QodeGroup("标题风格", "定义标题风格");
        $panel2->addChild("group4", $group4);
        $row1 = new QodeRow();
        $group4->addChild("row1", $row1);
        $blog_small_image_title_color = new QodeField("colorsimple", "blog_small_image_title_color", "", "标题颜色", "This is some description");
        $row1->addChild("blog_small_image_title_color", $blog_small_image_title_color);
        $blog_small_image_title_hover_color = new QodeField("colorsimple", "blog_small_image_title_hover_color", "", "标题悬停颜色", "This is some description");
        $row1->addChild("blog_small_image_title_hover_color", $blog_small_image_title_hover_color);
        $blog_small_image_title_date_color = new QodeField("colorsimple", "blog_small_image_title_date_color", "", "日期颜色", "This is some description");
        $row1->addChild("blog_small_image_title_date_color", $blog_small_image_title_date_color);
        $blog_small_image_title_fontsize = new QodeField("textsimple", "blog_small_image_title_fontsize", "", "字体大小 (px)", "This is some description");
        $row1->addChild("blog_small_image_title_fontsize", $blog_small_image_title_fontsize);


        $row2 = new QodeRow(true);
        $group4->addChild("row2", $row2);
        $blog_small_image_title_lineheight = new QodeField("textsimple", "blog_small_image_title_lineheight", "", "行高 (px)", "This is some description");
        $row2->addChild("blog_small_image_title_lineheight", $blog_small_image_title_lineheight);
        $blog_small_image_title_texttransform = new QodeField("selectblanksimple", "blog_small_image_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_small_image_title_texttransform", $blog_small_image_title_texttransform);
        $blog_small_image_title_google_fonts = new QodeField("fontsimple", "blog_small_image_title_google_fonts", "-1", "字体系列", "This is some description");
        $row2->addChild("blog_small_image_title_google_fonts", $blog_small_image_title_google_fonts);
        $blog_small_image_title_fontstyle = new QodeField("selectblanksimple", "blog_small_image_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_small_image_title_fontstyle", $blog_small_image_title_fontstyle);

        $row3 = new QodeRow(true);
        $group4->addChild("row3", $row3);
        $blog_small_image_title_fontweight = new QodeField("selectblanksimple", "blog_small_image_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_small_image_title_fontweight", $blog_small_image_title_fontweight);
        $blog_small_image_title_letterspacing = new QodeField("textsimple", "blog_small_image_title_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_small_image_title_letterspacing", $blog_small_image_title_letterspacing);

		$group19 = new QodeGroup("文章信息风格","定义文章信息风格");
        $panel2->addChild("group19", $group19);
        $row1 = new QodeRow();
        $group19->addChild("row1", $row1);
				$blog_small_image_post_info_color = new QodeField("colorsimple","blog_small_image_post_info_color","","文字颜色","This is some description");
        $row1->addChild("blog_small_image_post_info_color", $blog_small_image_post_info_color);
				$blog_small_image_post_info_link_color = new QodeField("colorsimple","blog_small_image_post_info_link_color","","链接颜色","This is some description");
        $row1->addChild("blog_small_image_post_info_link_color", $blog_small_image_post_info_link_color);
				$blog_small_image_post_info_link_hover_color = new QodeField("colorsimple","blog_small_image_post_info_link_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("blog_small_image_post_info_link_hover_color", $blog_small_image_post_info_link_hover_color);
				$blog_small_image_post_info_fontsize = new QodeField("textsimple","blog_small_image_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_small_image_post_info_fontsize", $blog_small_image_post_info_fontsize);

        $row2 = new QodeRow(true);
        $group19->addChild("row2", $row2);
				$blog_small_image_post_info_lineheight = new QodeField("textsimple","blog_small_image_post_info_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_small_image_post_info_lineheight", $blog_small_image_post_info_lineheight);
        $blog_small_image_post_info_texttransform = new QodeField("selectblanksimple", "blog_small_image_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_small_image_post_info_texttransform", $blog_small_image_post_info_texttransform);
        $blog_small_image_post_info_google_fonts = new QodeField("fontsimple", "blog_small_image_post_info_google_fonts", "-1", "字体系列", "This is some description");
        $row2->addChild("blog_small_image_post_info_google_fonts", $blog_small_image_post_info_google_fonts);
        $blog_small_image_post_info_fontstyle = new QodeField("selectblanksimple", "blog_small_image_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_small_image_post_info_fontstyle", $blog_small_image_post_info_fontstyle);

        $row3 = new QodeRow(true);
        $group19->addChild("row3", $row3);
        $blog_small_image_post_info_fontweight = new QodeField("selectblanksimple", "blog_small_image_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_small_image_post_info_fontweight", $blog_small_image_post_info_fontweight);
				$blog_small_image_post_info_letterspacing = new QodeField("textsimple","blog_small_image_post_info_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("blog_small_image_post_info_letterspacing", $blog_small_image_post_info_letterspacing);

		$group24 = new QodeGroup("文章信息引用/链接风格","定义引用/链接文章信息风格");
        $panel2->addChild("group24", $group24);
        $row1 = new QodeRow();
        $group24->addChild("row1", $row1);
				$blog_small_image_ql_post_info_color = new QodeField("colorsimple","blog_small_image_ql_post_info_color","","文字颜色","This is some description");
        $row1->addChild("blog_small_image_ql_post_info_color", $blog_small_image_ql_post_info_color);
				$blog_small_image_ql_post_info_link_color = new QodeField("colorsimple","blog_small_image_ql_post_info_link_color","","链接颜色","This is some description");
        $row1->addChild("blog_small_image_ql_post_info_link_color", $blog_small_image_ql_post_info_link_color);
				$blog_small_image_ql_post_info_link_hover_color = new QodeField("colorsimple","blog_small_image_ql_post_info_link_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("blog_small_image_ql_post_info_link_hover_color", $blog_small_image_ql_post_info_link_hover_color);
				$blog_small_image_ql_post_info_fontsize = new QodeField("textsimple","blog_small_image_ql_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_small_image_ql_post_info_fontsize", $blog_small_image_ql_post_info_fontsize);

        $row2 = new QodeRow(true);
        $group24->addChild("row2", $row2);
				$blog_small_image_ql_post_info_lineheight = new QodeField("textsimple","blog_small_image_ql_post_info_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_small_image_ql_post_info_lineheight", $blog_small_image_ql_post_info_lineheight);
        $blog_small_image_ql_post_info_texttransform = new QodeField("selectblanksimple", "blog_small_image_ql_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_small_image_ql_post_info_texttransform", $blog_small_image_ql_post_info_texttransform);
				$blog_small_image_ql_post_info_google_fonts = new QodeField("fontsimple","blog_small_image_ql_post_info_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_small_image_ql_post_info_google_fonts", $blog_small_image_ql_post_info_google_fonts);
        $blog_small_image_ql_post_info_fontstyle = new QodeField("selectblanksimple", "blog_small_image_ql_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_small_image_ql_post_info_fontstyle", $blog_small_image_ql_post_info_fontstyle);

        $row3 = new QodeRow(true);
        $group24->addChild("row3", $row3);
        $blog_small_image_ql_post_info_fontweight = new QodeField("selectblanksimple", "blog_small_image_ql_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_small_image_ql_post_info_fontweight", $blog_small_image_ql_post_info_fontweight);
        $blog_small_image_ql_post_info_letterspacing = new QodeField("textsimple", "blog_small_image_ql_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_small_image_ql_post_info_letterspacing", $blog_small_image_ql_post_info_letterspacing);


        $blog_masonry_subtitle = new QodeTitle("blog_masonry_subtitle", "切片风格");
        $panel2->addChild("blog_masonry_subtitle", $blog_masonry_subtitle);

	$group5 = new QodeGroup("切片风格",'定义"切片"博客列表风格');
        $panel2->addChild("group5", $group5);
        $row1 = new QodeRow();
        $group5->addChild("row1", $row1);
			$blog_masonry_background_color = new QodeField("colorsimple","blog_masonry_background_color","","文字框背景颜色","ThisIsDescription");
        $row1->addChild("blog_masonry_background_color", $blog_masonry_background_color);
			$blog_masonry_border_color = new QodeField("colorsimple","blog_masonry_border_color","","文字框边框颜色","ThisIsDescription");
        $row1->addChild("blog_masonry_border_color", $blog_masonry_border_color);
			$blog_masonry_border_radius = new QodeField("textsimple","blog_masonry_border_radius","","文字框边框半径 (px)","ThisIsDescription");
        $row1->addChild("blog_masonry_border_radius", $blog_masonry_border_radius);

		$group6 = new QodeGroup("标题风格","定义标题风格");
        $panel2->addChild("group6", $group6);
        $row1 = new QodeRow();
        $group6->addChild("row1", $row1);
				$blog_masonry_title_color = new QodeField("colorsimple","blog_masonry_title_color","","标题颜色","This is some description");
        $row1->addChild("blog_masonry_title_color", $blog_masonry_title_color);
				$blog_masonry_title_hover_color = new QodeField("colorsimple","blog_masonry_title_hover_color","","标题悬停颜色","This is some description");
        $row1->addChild("blog_masonry_title_hover_color", $blog_masonry_title_hover_color);
				$blog_masonry_title_fontsize = new QodeField("textsimple","blog_masonry_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_masonry_title_fontsize", $blog_masonry_title_fontsize);
				$blog_masonry_title_lineheight = new QodeField("textsimple","blog_masonry_title_lineheight","","行高（px）","This is some description");
        $row1->addChild("blog_masonry_title_lineheight", $blog_masonry_title_lineheight);

        $row2 = new QodeRow(true);
        $group6->addChild("row2", $row2);
        $blog_masonry_title_texttransform = new QodeField("selectblanksimple", "blog_masonry_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_masonry_title_texttransform", $blog_masonry_title_texttransform);
				$blog_masonry_title_google_fonts = new QodeField("fontsimple","blog_masonry_title_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_masonry_title_google_fonts", $blog_masonry_title_google_fonts);
        $blog_masonry_title_fontstyle = new QodeField("selectblanksimple", "blog_masonry_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_masonry_title_fontstyle", $blog_masonry_title_fontstyle);
        $blog_masonry_title_fontweight = new QodeField("selectblanksimple", "blog_masonry_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("blog_masonry_title_fontweight", $blog_masonry_title_fontweight);

        $row3 = new QodeRow(true);
        $group6->addChild("row3", $row3);
        $blog_masonry_title_letterspacing = new QodeField("textsimple", "blog_masonry_title_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_masonry_title_letterspacing", $blog_masonry_title_letterspacing);

		$group20 = new QodeGroup("文章信息风格","定义文章信息风格");
        $panel2->addChild("group20", $group20);
        $row1 = new QodeRow();
        $group20->addChild("row1", $row1);
        $blog_masonry_post_info_color = new QodeField("colorsimple", "blog_masonry_post_info_color", "", "文字颜色", "This is some description");
        $row1->addChild("blog_masonry_post_info_color", $blog_masonry_post_info_color);
        $blog_masonry_post_info_link_color = new QodeField("colorsimple", "blog_masonry_post_info_link_color", "", "链接颜色", "This is some description");
        $row1->addChild("blog_masonry_post_info_link_color", $blog_masonry_post_info_link_color);
				$blog_masonry_post_info_link_hover_color = new QodeField("colorsimple","blog_masonry_post_info_link_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("blog_masonry_post_info_link_hover_color", $blog_masonry_post_info_link_hover_color);
				$blog_masonry_post_info_fontsize = new QodeField("textsimple","blog_masonry_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_masonry_post_info_fontsize", $blog_masonry_post_info_fontsize);

        $row2 = new QodeRow(true);
        $group20->addChild("row2", $row2);
				$blog_masonry_post_info_lineheight = new QodeField("textsimple","blog_masonry_post_info_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_masonry_post_info_lineheight", $blog_masonry_post_info_lineheight);
        $blog_masonry_post_info_texttransform = new QodeField("selectblanksimple", "blog_masonry_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_masonry_post_info_texttransform", $blog_masonry_post_info_texttransform);
				$blog_masonry_post_info_google_fonts = new QodeField("fontsimple","blog_masonry_post_info_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_masonry_post_info_google_fonts", $blog_masonry_post_info_google_fonts);
        $blog_masonry_post_info_fontstyle = new QodeField("selectblanksimple", "blog_masonry_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_masonry_post_info_fontstyle", $blog_masonry_post_info_fontstyle);

        $row3 = new QodeRow(true);
        $group20->addChild("row3", $row3);
        $blog_masonry_post_info_fontweight = new QodeField("selectblanksimple", "blog_masonry_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_masonry_post_info_fontweight", $blog_masonry_post_info_fontweight);
				$blog_masonry_post_info_letterspacing = new QodeField("textsimple","blog_masonry_post_info_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("blog_masonry_post_info_letterspacing", $blog_masonry_post_info_letterspacing);

		$group25 = new QodeGroup("文章信息引用/链接风格","定义引用/链接文章信息风格");
        $panel2->addChild("group25", $group25);
        $row1 = new QodeRow();
        $group25->addChild("row1", $row1);
				$blog_masonry_ql_post_info_color = new QodeField("colorsimple","blog_masonry_ql_post_info_color","","文字颜色","This is some description");
        $row1->addChild("blog_masonry_ql_post_info_color", $blog_masonry_ql_post_info_color);
				$blog_masonry_ql_post_info_link_color = new QodeField("colorsimple","blog_masonry_ql_post_info_link_color","","链接颜色","This is some description");
        $row1->addChild("blog_masonry_ql_post_info_link_color", $blog_masonry_ql_post_info_link_color);
				$blog_masonry_ql_post_info_link_hover_color = new QodeField("colorsimple","blog_masonry_ql_post_info_link_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("blog_masonry_ql_post_info_link_hover_color", $blog_masonry_ql_post_info_link_hover_color);
				$blog_masonry_ql_post_info_fontsize = new QodeField("textsimple","blog_masonry_ql_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_masonry_ql_post_info_fontsize", $blog_masonry_ql_post_info_fontsize);

        $row2 = new QodeRow(true);
        $group25->addChild("row2", $row2);
				$blog_masonry_ql_post_info_lineheight = new QodeField("textsimple","blog_masonry_ql_post_info_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_masonry_ql_post_info_lineheight", $blog_masonry_ql_post_info_lineheight);
        $blog_masonry_ql_post_info_texttransform = new QodeField("selectblanksimple", "blog_masonry_ql_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_masonry_ql_post_info_texttransform", $blog_masonry_ql_post_info_texttransform);
				$blog_masonry_ql_post_info_google_fonts = new QodeField("fontsimple","blog_masonry_ql_post_info_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_masonry_ql_post_info_google_fonts", $blog_masonry_ql_post_info_google_fonts);
        $blog_masonry_ql_post_info_fontstyle = new QodeField("selectblanksimple", "blog_masonry_ql_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_masonry_ql_post_info_fontstyle", $blog_masonry_ql_post_info_fontstyle);

        $row3 = new QodeRow(true);
        $group25->addChild("row3", $row3);
        $blog_masonry_ql_post_info_fontweight = new QodeField("selectblanksimple", "blog_masonry_ql_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_masonry_ql_post_info_fontweight", $blog_masonry_ql_post_info_fontweight);
        $blog_masonry_ql_post_info_letterspacing = new QodeField("textsimple", "blog_masonry_ql_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_masonry_ql_post_info_letterspacing", $blog_masonry_ql_post_info_letterspacing);


        $blog_masonry_gallery_subtitle = new QodeTitle("blog_masonry_gallery_subtitle", "切片相册风格");
        $panel2->addChild("blog_masonry_gallery_subtitle", $blog_masonry_gallery_subtitle);

        $group41 = new QodeGroup("标题风格", "定义标题风格");
        $panel2->addChild("group41", $group41);
            $row1 = new QodeRow();
            $group41->addChild("row1", $row1);
                $blog_masonry_gallery_title_color = new QodeField("colorsimple", "blog_masonry_gallery_title_color", "", "标题颜色", "This is some description");
                $row1->addChild("blog_masonry_gallery_title_color", $blog_masonry_gallery_title_color);
                $blog_masonry_gallery_title_hover_color = new QodeField("colorsimple", "blog_masonry_gallery_title_hover_color", "", "标题悬停颜色", "This is some description");
                $row1->addChild("blog_masonry_gallery_title_hover_color", $blog_masonry_gallery_title_hover_color);
                $blog_masonry_gallery_title_fontsize = new QodeField("textsimple", "blog_masonry_gallery_title_fontsize", "", "字体大小 (px)", "This is some description");
                $row1->addChild("blog_masonry_gallery_title_fontsize", $blog_masonry_gallery_title_fontsize);
                $blog_masonry_gallery_title_lineheight = new QodeField("textsimple", "blog_masonry_gallery_title_lineheight", "", "行高 (px)", "This is some description");
                $row1->addChild("blog_masonry_gallery_title_lineheight", $blog_masonry_gallery_title_lineheight);

            $row2 = new QodeRow(true);
            $group41->addChild("row2", $row2);
                $blog_masonry_gallery_title_texttransform = new QodeField("selectblanksimple", "blog_masonry_gallery_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
                $row2->addChild("blog_masonry_gallery_title_texttransform", $blog_masonry_gallery_title_texttransform);
                $blog_masonry_gallery_title_google_fonts = new QodeField("fontsimple", "blog_masonry_gallery_title_google_fonts", "-1", "字体系列", "This is some description");
                $row2->addChild("blog_masonry_gallery_title_google_fonts", $blog_masonry_gallery_title_google_fonts);
                $blog_masonry_gallery_title_fontstyle = new QodeField("selectblanksimple", "blog_masonry_gallery_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
                $row2->addChild("blog_masonry_gallery_title_fontstyle", $blog_masonry_gallery_title_fontstyle);
                $blog_masonry_gallery_title_fontweight = new QodeField("selectblanksimple", "blog_masonry_gallery_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
                $row2->addChild("blog_masonry_gallery_title_fontweight", $blog_masonry_gallery_title_fontweight);

            $row3 = new QodeRow(true);
            $group41->addChild("row3", $row3);
                $blog_masonry_gallery_title_letterspacing = new QodeField("textsimple", "blog_masonry_gallery_title_letterspacing", "", "字符间距 (px)", "This is some description");
                $row3->addChild("blog_masonry_gallery_title_letterspacing", $blog_masonry_gallery_title_letterspacing);

        $group42 = new QodeGroup("文章信息风格", "定义文章信息风格");
        $panel2->addChild("group42", $group42);
            $row1 = new QodeRow();
            $group42->addChild("row1", $row1);
                $blog_masonry_gallery_post_info_color = new QodeField("colorsimple", "blog_masonry_gallery_post_info_color", "", "文字颜色", "This is some description");
                $row1->addChild("blog_masonry_gallery_post_info_color", $blog_masonry_gallery_post_info_color);
                $blog_masonry_gallery_post_info_link_color = new QodeField("colorsimple", "blog_masonry_gallery_post_info_link_color", "", "链接颜色", "This is some description");
                $row1->addChild("blog_masonry_gallery_post_info_link_color", $blog_masonry_gallery_post_info_link_color);
                $blog_masonry_gallery_post_info_link_hover_color = new QodeField("colorsimple", "blog_masonry_gallery_post_info_link_hover_color", "", "链接悬停颜色", "This is some description");
                $row1->addChild("blog_masonry_gallery_post_info_link_hover_color", $blog_masonry_gallery_post_info_link_hover_color);
                $blog_masonry_gallery_post_info_fontsize = new QodeField("textsimple", "blog_masonry_gallery_post_info_fontsize", "", "字体大小 (px)", "This is some description");
                $row1->addChild("blog_masonry_gallery_post_info_fontsize", $blog_masonry_gallery_post_info_fontsize);

            $row2 = new QodeRow(true);
            $group42->addChild("row2", $row2);
                $blog_masonry_gallery_post_info_lineheight = new QodeField("textsimple", "blog_masonry_gallery_post_info_lineheight", "", "行高 (px)", "This is some description");
                $row2->addChild("blog_masonry_gallery_post_info_lineheight", $blog_masonry_gallery_post_info_lineheight);
                $blog_masonry_gallery_post_info_texttransform = new QodeField("selectblanksimple", "blog_masonry_gallery_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
                $row2->addChild("blog_masonry_gallery_post_info_texttransform", $blog_masonry_gallery_post_info_texttransform);
                $blog_masonry_gallery_post_info_google_fonts = new QodeField("fontsimple", "blog_masonry_gallery_post_info_google_fonts", "-1", "字体系列", "This is some description");
                $row2->addChild("blog_masonry_gallery_post_info_google_fonts", $blog_masonry_gallery_post_info_google_fonts);
                $blog_masonry_gallery_post_info_fontstyle = new QodeField("selectblanksimple", "blog_masonry_gallery_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
                $row2->addChild("blog_masonry_gallery_post_info_fontstyle", $blog_masonry_gallery_post_info_fontstyle);

            $row3 = new QodeRow(true);
            $group42->addChild("row3", $row3);
                $blog_masonry_gallery_post_info_fontweight = new QodeField("selectblanksimple", "blog_masonry_gallery_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
                $row3->addChild("blog_masonry_gallery_post_info_fontweight", $blog_masonry_gallery_post_info_fontweight);
                $blog_masonry_gallery_post_info_letterspacing = new QodeField("textsimple", "blog_masonry_gallery_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
                $row3->addChild("blog_masonry_gallery_post_info_letterspacing", $blog_masonry_gallery_post_info_letterspacing);

        $group43 = new QodeGroup("引用/链接风格", "定义引用/链接文章风格");
        $panel2->addChild("group43", $group43);
            $row1 = new QodeRow();
            $group43->addChild("row1", $row1);
                $blog_masonry_gallery_ql_post_info_color = new QodeField("colorsimple", "blog_masonry_gallery_ql_post_info_color", "", "文字颜色", "This is some description");
                $row1->addChild("blog_masonry_gallery_ql_post_info_color", $blog_masonry_gallery_ql_post_info_color);
                $blog_masonry_gallery_ql_post_info_fontsize = new QodeField("textsimple", "blog_masonry_gallery_ql_post_info_fontsize", "", "字体大小 (px)", "This is some description");
                $row1->addChild("blog_masonry_gallery_ql_post_info_fontsize", $blog_masonry_gallery_ql_post_info_fontsize);
                $blog_masonry_gallery_ql_post_info_lineheight = new QodeField("textsimple", "blog_masonry_gallery_ql_post_info_lineheight", "", "行高 (px)", "This is some description");
                $row1->addChild("blog_masonry_gallery_ql_post_info_lineheight", $blog_masonry_gallery_ql_post_info_lineheight);
                $blog_masonry_gallery_ql_post_info_texttransform = new QodeField("selectblanksimple", "blog_masonry_gallery_ql_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
                $row1->addChild("blog_masonry_gallery_ql_post_info_texttransform", $blog_masonry_gallery_ql_post_info_texttransform);

            $row2 = new QodeRow(true);
            $group43->addChild("row2", $row2);

                $blog_masonry_gallery_ql_post_info_google_fonts = new QodeField("fontsimple", "blog_masonry_gallery_ql_post_info_google_fonts", "-1", "字体系列", "This is some description");
                $row2->addChild("blog_masonry_gallery_ql_post_info_google_fonts", $blog_masonry_gallery_ql_post_info_google_fonts);
                $blog_masonry_gallery_ql_post_info_fontstyle = new QodeField("selectblanksimple", "blog_masonry_gallery_ql_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
                $row2->addChild("blog_masonry_gallery_ql_post_info_fontstyle", $blog_masonry_gallery_ql_post_info_fontstyle);
                $blog_masonry_gallery_ql_post_info_fontweight = new QodeField("selectblanksimple", "blog_masonry_gallery_ql_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
                $row2->addChild("blog_masonry_gallery_ql_post_info_fontweight", $blog_masonry_gallery_ql_post_info_fontweight);
                $blog_masonry_gallery_ql_post_info_letterspacing = new QodeField("textsimple", "blog_masonry_gallery_ql_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
                $row2->addChild("blog_masonry_gallery_ql_post_info_letterspacing", $blog_masonry_gallery_ql_post_info_letterspacing);


		$blog_gallery_subtitle = new QodeTitle("blog_gallery_subtitle", "相册风格");
		$panel2->addChild("blog_gallery_subtitle", $blog_gallery_subtitle);

		$group51 = new QodeGroup("标题风格", "定义标题风格");
		$panel2->addChild("group51", $group51);
		$row1 = new QodeRow();
		$group51->addChild("row1", $row1);
		$blog_gallery_title_color = new QodeField("colorsimple", "blog_gallery_title_color", "", "标题颜色", "This is some description");
		$row1->addChild("blog_gallery_title_color", $blog_gallery_title_color);
		$blog_gallery_title_hover_color = new QodeField("colorsimple", "blog_gallery_title_hover_color", "", "标题悬停颜色", "This is some description");
		$row1->addChild("blog_gallery_title_hover_color", $blog_gallery_title_hover_color);
		$blog_gallery_title_fontsize = new QodeField("textsimple", "blog_gallery_title_fontsize", "", "字体大小 (px)", "This is some description");
		$row1->addChild("blog_gallery_title_fontsize", $blog_gallery_title_fontsize);
		$blog_gallery_title_lineheight = new QodeField("textsimple", "blog_gallery_title_lineheight", "", "行高 (px)", "This is some description");
		$row1->addChild("blog_gallery_title_lineheight", $blog_gallery_title_lineheight);

		$row2 = new QodeRow(true);
		$group51->addChild("row2", $row2);
		$blog_gallery_title_texttransform = new QodeField("selectblanksimple", "blog_gallery_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
		$row2->addChild("blog_gallery_title_texttransform", $blog_gallery_title_texttransform);
		$blog_gallery_title_google_fonts = new QodeField("fontsimple", "blog_gallery_title_google_fonts", "-1", "字体系列", "This is some description");
		$row2->addChild("blog_gallery_title_google_fonts", $blog_gallery_title_google_fonts);
		$blog_gallery_title_fontstyle = new QodeField("selectblanksimple", "blog_gallery_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
		$row2->addChild("blog_gallery_title_fontstyle", $blog_gallery_title_fontstyle);
		$blog_gallery_title_fontweight = new QodeField("selectblanksimple", "blog_gallery_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row2->addChild("blog_gallery_title_fontweight", $blog_gallery_title_fontweight);

		$row3 = new QodeRow(true);
		$group51->addChild("row3", $row3);
		$blog_gallery_title_letterspacing = new QodeField("textsimple", "blog_gallery_title_letterspacing", "", "字符间距 (px)", "This is some description");
		$row3->addChild("blog_gallery_title_letterspacing", $blog_gallery_title_letterspacing);

		$group52 = new QodeGroup("文章信息风格", "定义文章信息风格");
		$panel2->addChild("group52", $group52);
		$row1 = new QodeRow();
		$group52->addChild("row1", $row1);
		$blog_gallery_post_info_color = new QodeField("colorsimple", "blog_gallery_post_info_color", "", "文字颜色", "This is some description");
		$row1->addChild("blog_gallery_post_info_color", $blog_gallery_post_info_color);
		$blog_gallery_post_info_link_color = new QodeField("colorsimple", "blog_gallery_post_info_link_color", "", "链接颜色", "This is some description");
		$row1->addChild("blog_gallery_post_info_link_color", $blog_gallery_post_info_link_color);
		$blog_gallery_post_info_link_hover_color = new QodeField("colorsimple", "blog_gallery_post_info_link_hover_color", "", "链接悬停颜色", "This is some description");
		$row1->addChild("blog_gallery_post_info_link_hover_color", $blog_gallery_post_info_link_hover_color);
		$blog_gallery_post_info_fontsize = new QodeField("textsimple", "blog_gallery_post_info_fontsize", "", "字体大小 (px)", "This is some description");
		$row1->addChild("blog_gallery_post_info_fontsize", $blog_gallery_post_info_fontsize);

		$row2 = new QodeRow(true);
		$group52->addChild("row2", $row2);
		$blog_gallery_post_info_lineheight = new QodeField("textsimple", "blog_gallery_post_info_lineheight", "", "行高 (px)", "This is some description");
		$row2->addChild("blog_gallery_post_info_lineheight", $blog_gallery_post_info_lineheight);
		$blog_gallery_post_info_texttransform = new QodeField("selectblanksimple", "blog_gallery_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
		$row2->addChild("blog_gallery_post_info_texttransform", $blog_gallery_post_info_texttransform);
		$blog_gallery_post_info_google_fonts = new QodeField("fontsimple", "blog_gallery_post_info_google_fonts", "-1", "字体系列", "This is some description");
		$row2->addChild("blog_gallery_post_info_google_fonts", $blog_gallery_post_info_google_fonts);
		$blog_gallery_post_info_fontstyle = new QodeField("selectblanksimple", "blog_gallery_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
		$row2->addChild("blog_gallery_post_info_fontstyle", $blog_gallery_post_info_fontstyle);

		$row3 = new QodeRow(true);
		$group52->addChild("row3", $row3);
		$blog_gallery_post_info_fontweight = new QodeField("selectblanksimple", "blog_gallery_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row3->addChild("blog_gallery_post_info_fontweight", $blog_gallery_post_info_fontweight);
		$blog_gallery_post_info_letterspacing = new QodeField("textsimple", "blog_gallery_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
		$row3->addChild("blog_gallery_post_info_letterspacing", $blog_gallery_post_info_letterspacing);


		$blog_chequered_subtitle = new QodeTitle("blog_chequered_subtitle", "格纹风格");
		$panel2->addChild("blog_chequered_subtitle", $blog_chequered_subtitle);

		$group61 = new QodeGroup("标题风格", "定义标题风格");
		$panel2->addChild("group61", $group61);
		$row1 = new QodeRow();
		$group61->addChild("row1", $row1);
		$blog_chequered_title_color = new QodeField("colorsimple", "blog_chequered_title_color", "", "标题颜色", "This is some description");
		$row1->addChild("blog_chequered_title_color", $blog_chequered_title_color);
		$blog_chequered_title_hover_color = new QodeField("colorsimple", "blog_chequered_title_hover_color", "", "标题悬停颜色", "This is some description");
		$row1->addChild("blog_chequered_title_hover_color", $blog_chequered_title_hover_color);
		$blog_chequered_title_fontsize = new QodeField("textsimple", "blog_chequered_title_fontsize", "", "字体大小 (px)", "This is some description");
		$row1->addChild("blog_chequered_title_fontsize", $blog_chequered_title_fontsize);
		$blog_chequered_title_lineheight = new QodeField("textsimple", "blog_chequered_title_lineheight", "", "行高 (px)", "This is some description");
		$row1->addChild("blog_chequered_title_lineheight", $blog_chequered_title_lineheight);

		$row2 = new QodeRow(true);
		$group61->addChild("row2", $row2);
		$blog_chequered_title_texttransform = new QodeField("selectblanksimple", "blog_chequered_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
		$row2->addChild("blog_chequered_title_texttransform", $blog_chequered_title_texttransform);
		$blog_chequered_title_google_fonts = new QodeField("fontsimple", "blog_chequered_title_google_fonts", "-1", "字体系列", "This is some description");
		$row2->addChild("blog_chequered_title_google_fonts", $blog_chequered_title_google_fonts);
		$blog_chequered_title_fontstyle = new QodeField("selectblanksimple", "blog_chequered_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
		$row2->addChild("blog_chequered_title_fontstyle", $blog_chequered_title_fontstyle);
		$blog_chequered_title_fontweight = new QodeField("selectblanksimple", "blog_chequered_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row2->addChild("blog_chequered_title_fontweight", $blog_chequered_title_fontweight);

		$row3 = new QodeRow(true);
		$group61->addChild("row3", $row3);
		$blog_chequered_title_letterspacing = new QodeField("textsimple", "blog_chequered_title_letterspacing", "", "字符间距 (px)", "This is some description");
		$row3->addChild("blog_chequered_title_letterspacing", $blog_chequered_title_letterspacing);

		$group62 = new QodeGroup("文章信息风格", "定义文章信息风格");
		$panel2->addChild("group62", $group62);
		$row1 = new QodeRow();
		$group62->addChild("row1", $row1);
		$blog_chequered_post_info_color = new QodeField("colorsimple", "blog_chequered_post_info_color", "", "文字颜色", "This is some description");
		$row1->addChild("blog_chequered_post_info_color", $blog_chequered_post_info_color);
		$blog_chequered_post_info_link_color = new QodeField("colorsimple", "blog_chequered_post_info_link_color", "", "链接颜色", "This is some description");
		$row1->addChild("blog_chequered_post_info_link_color", $blog_chequered_post_info_link_color);
		$blog_chequered_post_info_link_hover_color = new QodeField("colorsimple", "blog_chequered_post_info_link_hover_color", "", "链接悬停颜色", "This is some description");
		$row1->addChild("blog_chequered_post_info_link_hover_color", $blog_chequered_post_info_link_hover_color);
		$blog_chequered_post_info_fontsize = new QodeField("textsimple", "blog_chequered_post_info_fontsize", "", "字体大小 (px)", "This is some description");
		$row1->addChild("blog_chequered_post_info_fontsize", $blog_chequered_post_info_fontsize);

		$row2 = new QodeRow(true);
		$group62->addChild("row2", $row2);
		$blog_chequered_post_info_lineheight = new QodeField("textsimple", "blog_chequered_post_info_lineheight", "", "行高 (px)", "This is some description");
		$row2->addChild("blog_chequered_post_info_lineheight", $blog_chequered_post_info_lineheight);
		$blog_chequered_post_info_texttransform = new QodeField("selectblanksimple", "blog_chequered_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
		$row2->addChild("blog_chequered_post_info_texttransform", $blog_chequered_post_info_texttransform);
		$blog_chequered_post_info_google_fonts = new QodeField("fontsimple", "blog_chequered_post_info_google_fonts", "-1", "字体系列", "This is some description");
		$row2->addChild("blog_chequered_post_info_google_fonts", $blog_chequered_post_info_google_fonts);
		$blog_chequered_post_info_fontstyle = new QodeField("selectblanksimple", "blog_chequered_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
		$row2->addChild("blog_chequered_post_info_fontstyle", $blog_chequered_post_info_fontstyle);

		$row3 = new QodeRow(true);
		$group62->addChild("row3", $row3);
		$blog_chequered_post_info_fontweight = new QodeField("selectblanksimple", "blog_chequered_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row3->addChild("blog_chequered_post_info_fontweight", $blog_chequered_post_info_fontweight);
		$blog_chequered_post_info_letterspacing = new QodeField("textsimple", "blog_chequered_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
		$row3->addChild("blog_chequered_post_info_letterspacing", $blog_chequered_post_info_letterspacing);

		$group63 = new QodeGroup("引用/链接风格", "定义引用/链接文章风格");
		$panel2->addChild("group63", $group63);
		$row1 = new QodeRow();
		$group63->addChild("row1", $row1);
		$blog_chequered_ql_post_info_color = new QodeField("colorsimple", "blog_chequered_ql_post_info_color", "", "文字颜色", "This is some description");
		$row1->addChild("blog_chequered_ql_post_info_color", $blog_chequered_ql_post_info_color);
		$blog_chequered_ql_post_info_fontsize = new QodeField("textsimple", "blog_chequered_ql_post_info_fontsize", "", "字体大小 (px)", "This is some description");
		$row1->addChild("blog_chequered_ql_post_info_fontsize", $blog_chequered_ql_post_info_fontsize);
		$blog_chequered_ql_post_info_lineheight = new QodeField("textsimple", "blog_chequered_ql_post_info_lineheight", "", "行高 (px)", "This is some description");
		$row1->addChild("blog_chequered_ql_post_info_lineheight", $blog_chequered_ql_post_info_lineheight);
		$blog_chequered_ql_post_info_texttransform = new QodeField("selectblanksimple", "blog_chequered_ql_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
		$row1->addChild("blog_chequered_ql_post_info_texttransform", $blog_chequered_ql_post_info_texttransform);

		$row2 = new QodeRow(true);
		$group63->addChild("row2", $row2);

		$blog_chequered_ql_post_info_google_fonts = new QodeField("fontsimple", "blog_chequered_ql_post_info_google_fonts", "-1", "字体系列", "This is some description");
		$row2->addChild("blog_chequered_ql_post_info_google_fonts", $blog_chequered_ql_post_info_google_fonts);
		$blog_chequered_ql_post_info_fontstyle = new QodeField("selectblanksimple", "blog_chequered_ql_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
		$row2->addChild("blog_chequered_ql_post_info_fontstyle", $blog_chequered_ql_post_info_fontstyle);
		$blog_chequered_ql_post_info_fontweight = new QodeField("selectblanksimple", "blog_chequered_ql_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
		$row2->addChild("blog_chequered_ql_post_info_fontweight", $blog_chequered_ql_post_info_fontweight);
		$blog_chequered_ql_post_info_letterspacing = new QodeField("textsimple", "blog_chequered_ql_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
		$row2->addChild("blog_chequered_ql_post_info_letterspacing", $blog_chequered_ql_post_info_letterspacing);



	$blog_large_image_simple_subtitle = new QodeTitle("blog_large_image_simple_subtitle", "博客大图片简单风格");
        $panel2->addChild("blog_large_image_simple_subtitle", $blog_large_image_simple_subtitle);

	$group7 = new QodeGroup("框内容风格","定义内容框风格");
        $panel2->addChild("group7", $group7);
	$blog_large_image_simple_side_padding_left = new QodeField("textsimple","blog_large_image_simple_side_padding_left","","内容左填充(px)","This is some description");
        $group7->addChild("blog_large_image_simple_side_padding_left", $blog_large_image_simple_side_padding_left);

	$blog_large_image_simple_side_padding_right = new QodeField("textsimple","blog_large_image_simple_side_padding_right","","内容右填充(px)","This is some description");
        $group7->addChild("blog_large_image_simple_side_padding_right", $blog_large_image_simple_side_padding_right);

		$group8 = new QodeGroup("标题风格","定义标题风格");
        $panel2->addChild("group8", $group8);
        $row1 = new QodeRow();
        $group8->addChild("row1", $row1);
				$blog_large_image_simple_title_color = new QodeField("colorsimple","blog_large_image_simple_title_color","","标题颜色","This is some description");
        $row1->addChild("blog_large_image_simple_title_color", $blog_large_image_simple_title_color);
				$blog_large_image_simple_title_hover_color = new QodeField("colorsimple","blog_large_image_simple_title_hover_color","","标题悬停颜色","This is some description");
        $row1->addChild("blog_large_image_simple_title_hover_color", $blog_large_image_simple_title_hover_color);
				$blog_large_image_simple_title_fontsize = new QodeField("textsimple","blog_large_image_simple_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_large_image_simple_title_fontsize", $blog_large_image_simple_title_fontsize);
				$blog_large_image_simple_title_lineheight = new QodeField("textsimple","blog_large_image_simple_title_lineheight","","行高（px）","This is some description");
        $row1->addChild("blog_large_image_simple_title_lineheight", $blog_large_image_simple_title_lineheight);

        $row2 = new QodeRow(true);
        $group8->addChild("row2", $row2);
        $blog_large_image_simple_title_texttransform = new QodeField("selectblanksimple", "blog_large_image_simple_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_large_image_simple_title_texttransform", $blog_large_image_simple_title_texttransform);
				$blog_large_image_simple_title_google_fonts = new QodeField("fontsimple","blog_large_image_simple_title_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_large_image_simple_title_google_fonts", $blog_large_image_simple_title_google_fonts);
        $blog_large_image_simple_title_fontstyle = new QodeField("selectblanksimple", "blog_large_image_simple_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_large_image_simple_title_fontstyle", $blog_large_image_simple_title_fontstyle);
        $blog_large_image_simple_title_fontweight = new QodeField("selectblanksimple", "blog_large_image_simple_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("blog_large_image_simple_title_fontweight", $blog_large_image_simple_title_fontweight);

        $row3 = new QodeRow(true);
        $group8->addChild("row3", $row3);
        $blog_large_image_simple_title_letterspacing = new QodeField("textsimple", "blog_large_image_simple_title_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_large_image_simple_title_letterspacing", $blog_large_image_simple_title_letterspacing);

		$group21 = new QodeGroup("日期风格","定义日期风格");
        $panel2->addChild("group21", $group21);
        $row1 = new QodeRow();
        $group21->addChild("row1", $row1);
				$blog_large_image_simple_post_info_color = new QodeField("colorsimple","blog_large_image_simple_post_info_color","","文字颜色","This is some description");
        $row1->addChild("blog_large_image_simple_post_info_color", $blog_large_image_simple_post_info_color);
				$blog_large_image_simple_post_info_fontsize = new QodeField("textsimple","blog_large_image_simple_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_large_image_simple_post_info_fontsize", $blog_large_image_simple_post_info_fontsize);
				$blog_large_image_simple_post_info_lineheight = new QodeField("textsimple","blog_large_image_simple_post_info_lineheight","","行高（px）","This is some description");
        $row1->addChild("blog_large_image_simple_post_info_lineheight", $blog_large_image_simple_post_info_lineheight);
        $blog_large_image_simple_post_info_texttransform = new QodeField("selectblanksimple", "blog_large_image_simple_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row1->addChild("blog_large_image_simple_post_info_texttransform", $blog_large_image_simple_post_info_texttransform);

        $row2 = new QodeRow(true);
        $group21->addChild("row2", $row2);
        $blog_large_image_simple_post_info_google_fonts = new QodeField("fontsimple", "blog_large_image_simple_post_info_google_fonts", "-1", "字体系列", "This is some description");
        $row2->addChild("blog_large_image_simple_post_info_google_fonts", $blog_large_image_simple_post_info_google_fonts);
        $blog_large_image_simple_post_info_fontstyle = new QodeField("selectblanksimple", "blog_large_image_simple_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_large_image_simple_post_info_fontstyle", $blog_large_image_simple_post_info_fontstyle);
        $blog_large_image_simple_post_info_fontweight = new QodeField("selectblanksimple", "blog_large_image_simple_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("blog_large_image_simple_post_info_fontweight", $blog_large_image_simple_post_info_fontweight);
				$blog_large_image_simple_post_info_letterspacing = new QodeField("textsimple","blog_large_image_simple_post_info_letterspacing","","字符间距（px）","This is some description");
        $row2->addChild("blog_large_image_simple_post_info_letterspacing", $blog_large_image_simple_post_info_letterspacing);

		$group26 = new QodeGroup("引用/链接日期风格","定义引用/链接日期风格");
        $panel2->addChild("group26", $group26);
        $row1 = new QodeRow();
        $group26->addChild("row1", $row1);
				$blog_large_image_simple_ql_post_info_color = new QodeField("colorsimple","blog_large_image_simple_ql_post_info_color","","文字颜色","This is some description");
        $row1->addChild("blog_large_image_simple_ql_post_info_color", $blog_large_image_simple_ql_post_info_color);
				$blog_large_image_simple_ql_post_info_fontsize = new QodeField("textsimple","blog_large_image_simple_ql_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_large_image_simple_ql_post_info_fontsize", $blog_large_image_simple_ql_post_info_fontsize);
				$blog_large_image_simple_ql_post_info_lineheight = new QodeField("textsimple","blog_large_image_simple_ql_post_info_lineheight","","行高（px）","This is some description");
        $row1->addChild("blog_large_image_simple_ql_post_info_lineheight", $blog_large_image_simple_ql_post_info_lineheight);
        $blog_large_image_simple_ql_post_info_texttransform = new QodeField("selectblanksimple", "blog_large_image_simple_ql_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row1->addChild("blog_large_image_simple_ql_post_info_texttransform", $blog_large_image_simple_ql_post_info_texttransform);

        $row2 = new QodeRow(true);
        $group26->addChild("row2", $row2);
				$blog_large_image_simple_ql_post_info_google_fonts = new QodeField("fontsimple","blog_large_image_simple_ql_post_info_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_large_image_simple_ql_post_info_google_fonts", $blog_large_image_simple_ql_post_info_google_fonts);
        $blog_large_image_simple_ql_post_info_fontstyle = new QodeField("selectblanksimple", "blog_large_image_simple_ql_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_large_image_simple_ql_post_info_fontstyle", $blog_large_image_simple_ql_post_info_fontstyle);
        $blog_large_image_simple_ql_post_info_fontweight = new QodeField("selectblanksimple", "blog_large_image_simple_ql_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("blog_large_image_simple_ql_post_info_fontweight", $blog_large_image_simple_ql_post_info_fontweight);
        $blog_large_image_simple_ql_post_info_letterspacing = new QodeField("textsimple", "blog_large_image_simple_ql_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
        $row2->addChild("blog_large_image_simple_ql_post_info_letterspacing", $blog_large_image_simple_ql_post_info_letterspacing);


	$blog_large_image_dividers_subtitle = new QodeTitle("blog_large_image_dividers_subtitle", "博客大图片带分隔风格");
        $panel2->addChild("blog_large_image_dividers_subtitle", $blog_large_image_dividers_subtitle);

	$blog_large_image_dividers_background_color = new QodeField("color","blog_large_image_dividers_background_color","","文字框背景颜色","选择博客大图片带分隔背景颜色");
        $panel2->addChild("blog_large_image_dividers_background_color", $blog_large_image_dividers_background_color);

	$group9 = new QodeGroup("标题风格","定义标题风格");
        $panel2->addChild("group9", $group9);
        $row1 = new QodeRow();
        $group9->addChild("row1", $row1);
			$blog_large_image_dividers_title_color = new QodeField("colorsimple","blog_large_image_dividers_title_color","","标题颜色","This is some description");
        $row1->addChild("blog_large_image_dividers_title_color", $blog_large_image_dividers_title_color);
			$blog_large_image_dividers_title_hover_color = new QodeField("colorsimple","blog_large_image_dividers_title_hover_color","","标题悬停颜色","This is some description");
        $row1->addChild("blog_large_image_dividers_title_hover_color", $blog_large_image_dividers_title_hover_color);
			$blog_large_image_dividers_title_fontsize = new QodeField("textsimple","blog_large_image_dividers_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_large_image_dividers_title_fontsize", $blog_large_image_dividers_title_fontsize);
			$blog_large_image_dividers_title_lineheight = new QodeField("textsimple","blog_large_image_dividers_title_lineheight","","行高（px）","This is some description");
        $row1->addChild("blog_large_image_dividers_title_lineheight", $blog_large_image_dividers_title_lineheight);
        $row2 = new QodeRow(true);
        $group9->addChild("row2", $row2);
        $blog_large_image_dividers_title_texttransform = new QodeField("selectblanksimple", "blog_large_image_dividers_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_large_image_dividers_title_texttransform", $blog_large_image_dividers_title_texttransform);
			$blog_large_image_dividers_title_google_fonts = new QodeField("fontsimple","blog_large_image_dividers_title_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_large_image_dividers_title_google_fonts", $blog_large_image_dividers_title_google_fonts);
        $blog_large_image_dividers_title_fontstyle = new QodeField("selectblanksimple", "blog_large_image_dividers_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_large_image_dividers_title_fontstyle", $blog_large_image_dividers_title_fontstyle);
        $blog_large_image_dividers_title_fontweight = new QodeField("selectblanksimple", "blog_large_image_dividers_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("blog_large_image_dividers_title_fontweight", $blog_large_image_dividers_title_fontweight);
        $row3 = new QodeRow(true);
        $group9->addChild("row3", $row3);
			$blog_large_image_dividers_title_letterspacing = new QodeField("textsimple","blog_large_image_dividers_title_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("blog_large_image_dividers_title_letterspacing", $blog_large_image_dividers_title_letterspacing);

		$group22 = new QodeGroup("文章信息风格","定义文章信息风格");
        $panel2->addChild("group22", $group22);
        $row1 = new QodeRow();
        $group22->addChild("row1", $row1);
				$blog_large_image_dividers_post_info_color = new QodeField("colorsimple","blog_large_image_dividers_post_info_color","","文字颜色","This is some description");
        $row1->addChild("blog_large_image_dividers_post_info_color", $blog_large_image_dividers_post_info_color);
				$blog_large_image_dividers_post_info_link_color = new QodeField("colorsimple","blog_large_image_dividers_post_info_link_color","","链接颜色","This is some description");
        $row1->addChild("blog_large_image_dividers_post_info_link_color", $blog_large_image_dividers_post_info_link_color);
				$blog_large_image_dividers_post_info_link_hover_color = new QodeField("colorsimple","blog_large_image_dividers_post_info_link_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("blog_large_image_dividers_post_info_link_hover_color", $blog_large_image_dividers_post_info_link_hover_color);
				$blog_large_image_dividers_post_info_fontsize = new QodeField("textsimple","blog_large_image_dividers_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_large_image_dividers_post_info_fontsize", $blog_large_image_dividers_post_info_fontsize);

        $row2 = new QodeRow(true);
        $group22->addChild("row2", $row2);
				$blog_large_image_dividers_post_info_lineheight = new QodeField("textsimple","blog_large_image_dividers_post_info_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_large_image_dividers_post_info_lineheight", $blog_large_image_dividers_post_info_lineheight);
        $blog_large_image_dividers_post_info_texttransform = new QodeField("selectblanksimple", "blog_large_image_dividers_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_large_image_dividers_post_info_texttransform", $blog_large_image_dividers_post_info_texttransform);
        $blog_large_image_dividers_post_info_google_fonts = new QodeField("fontsimple", "blog_large_image_dividers_post_info_google_fonts", "-1", "字体系列", "This is some description");
        $row2->addChild("blog_large_image_dividers_post_info_google_fonts", $blog_large_image_dividers_post_info_google_fonts);
        $blog_large_image_dividers_post_info_fontstyle = new QodeField("selectblanksimple", "blog_large_image_dividers_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_large_image_dividers_post_info_fontstyle", $blog_large_image_dividers_post_info_fontstyle);

        $row3 = new QodeRow(true);
        $group22->addChild("row3", $row3);
        $blog_large_image_dividers_post_info_fontweight = new QodeField("selectblanksimple", "blog_large_image_dividers_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_large_image_dividers_post_info_fontweight", $blog_large_image_dividers_post_info_fontweight);
        $blog_large_image_dividers_post_info_letterspacing = new QodeField("textsimple", "blog_large_image_dividers_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_large_image_dividers_post_info_letterspacing", $blog_large_image_dividers_post_info_letterspacing);

		$group27 = new QodeGroup("文章信息引用/链接风格","定义引用/链接文章信息风格");
        $panel2->addChild("group27", $group27);
        $row1 = new QodeRow();
        $group27->addChild("row1", $row1);
				$blog_large_image_dividers_ql_post_info_color = new QodeField("colorsimple","blog_large_image_dividers_ql_post_info_color","","文字颜色","This is some description");
        $row1->addChild("blog_large_image_dividers_ql_post_info_color", $blog_large_image_dividers_ql_post_info_color);
				$blog_large_image_dividers_ql_post_info_link_color = new QodeField("colorsimple","blog_large_image_dividers_ql_post_info_link_color","","链接颜色","This is some description");
        $row1->addChild("blog_large_image_dividers_ql_post_info_link_color", $blog_large_image_dividers_ql_post_info_link_color);
				$blog_large_image_dividers_ql_post_info_link_hover_color = new QodeField("colorsimple","blog_large_image_dividers_ql_post_info_link_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("blog_large_image_dividers_ql_post_info_link_hover_color", $blog_large_image_dividers_ql_post_info_link_hover_color);
				$blog_large_image_dividers_ql_post_info_fontsize = new QodeField("textsimple","blog_large_image_dividers_ql_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_large_image_dividers_ql_post_info_fontsize", $blog_large_image_dividers_ql_post_info_fontsize);

        $row2 = new QodeRow(true);
        $group27->addChild("row2", $row2);
				$blog_large_image_dividers_ql_post_info_lineheight = new QodeField("textsimple","blog_large_image_dividers_ql_post_info_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_large_image_dividers_ql_post_info_lineheight", $blog_large_image_dividers_ql_post_info_lineheight);
        $blog_large_image_dividers_ql_post_info_texttransform = new QodeField("selectblanksimple", "blog_large_image_dividers_ql_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_large_image_dividers_ql_post_info_texttransform", $blog_large_image_dividers_ql_post_info_texttransform);
        $blog_large_image_dividers_ql_post_info_google_fonts = new QodeField("fontsimple", "blog_large_image_dividers_ql_post_info_google_fonts", "-1", "字体系列", "This is some description");
        $row2->addChild("blog_large_image_dividers_ql_post_info_google_fonts", $blog_large_image_dividers_ql_post_info_google_fonts);
        $blog_large_image_dividers_ql_post_info_fontstyle = new QodeField("selectblanksimple", "blog_large_image_dividers_ql_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_large_image_dividers_ql_post_info_fontstyle", $blog_large_image_dividers_ql_post_info_fontstyle);

        $row3 = new QodeRow(true);
        $group27->addChild("row3", $row3);
        $blog_large_image_dividers_ql_post_info_fontweight = new QodeField("selectblanksimple", "blog_large_image_dividers_ql_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_large_image_dividers_ql_post_info_fontweight", $blog_large_image_dividers_ql_post_info_fontweight);
        $blog_large_image_dividers_ql_post_info_letterspacing = new QodeField("textsimple", "blog_large_image_dividers_ql_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_large_image_dividers_ql_post_info_letterspacing", $blog_large_image_dividers_ql_post_info_letterspacing);

		$blog_vertical_loop_subtitle = new QodeTitle("blog_vertical_loop_subtitle", "博客垂直循环风格");
        $panel2->addChild("blog_vertical_loop_subtitle", $blog_vertical_loop_subtitle);

		$group10 = new QodeGroup("标题风格","定义标题风格");
        $panel2->addChild("group10", $group10);
        $row1 = new QodeRow();
        $group10->addChild("row1", $row1);
		$blog_vertical_loop_title_color = new QodeField("colorsimple","blog_vertical_loop_title_color","","标题颜色","This is some description");
        $row1->addChild("blog_vertical_loop_title_color", $blog_vertical_loop_title_color);
		$blog_vertical_loop_title_hover_color = new QodeField("colorsimple","blog_vertical_loop_title_hover_color","","标题悬停颜色","This is some description");
        $row1->addChild("blog_vertical_loop_title_hover_color", $blog_vertical_loop_title_hover_color);
		$blog_vertical_loop_title_fontsize = new QodeField("textsimple","blog_vertical_loop_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_vertical_loop_title_fontsize", $blog_vertical_loop_title_fontsize);
		$blog_vertical_loop_title_lineheight = new QodeField("textsimple","blog_vertical_loop_title_lineheight","","行高（px）","This is some description");
        $row1->addChild("blog_vertical_loop_title_lineheight", $blog_vertical_loop_title_lineheight);
        $row2 = new QodeRow(true);
        $group10->addChild("row2", $row2);
        $blog_vertical_loop_title_texttransform = new QodeField("selectblanksimple", "blog_vertical_loop_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_vertical_loop_title_texttransform", $blog_vertical_loop_title_texttransform);
		$blog_vertical_loop_title_google_fonts = new QodeField("fontsimple","blog_vertical_loop_title_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_vertical_loop_title_google_fonts", $blog_vertical_loop_title_google_fonts);
        $blog_vertical_loop_title_fontstyle = new QodeField("selectblanksimple", "blog_vertical_loop_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_vertical_loop_title_fontstyle", $blog_vertical_loop_title_fontstyle);
        $blog_vertical_loop_title_fontweight = new QodeField("selectblanksimple", "blog_vertical_loop_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("blog_vertical_loop_title_fontweight", $blog_vertical_loop_title_fontweight);
        $row3 = new QodeRow(true);
        $group10->addChild("row3", $row3);
		$blog_vertical_loop_title_letterspacing = new QodeField("textsimple","blog_vertical_loop_title_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("blog_vertical_loop_title_letterspacing", $blog_vertical_loop_title_letterspacing);

		$group11 = new QodeGroup("下一文章标题风格","定义下一文章标题风格");
        $panel2->addChild("group11", $group11);
        $row1 = new QodeRow();
        $group11->addChild("row1", $row1);
				$blog_vertical_loop_next_post_title_color = new QodeField("colorsimple","blog_vertical_loop_next_post_title_color","","标题颜色","This is some description");
        $row1->addChild("blog_vertical_loop_next_post_title_color", $blog_vertical_loop_next_post_title_color);
				$blog_vertical_loop_next_post_title_fontsize = new QodeField("textsimple","blog_vertical_loop_next_post_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_vertical_loop_next_post_title_fontsize", $blog_vertical_loop_next_post_title_fontsize);
				$blog_vertical_loop_next_post_title_lineheight = new QodeField("textsimple","blog_vertical_loop_next_post_title_lineheight","","行高（px）","This is some description");
        $row1->addChild("blog_vertical_loop_next_post_title_lineheight", $blog_vertical_loop_next_post_title_lineheight);
        $blog_vertical_loop_next_post_title_texttransform = new QodeField("selectblanksimple", "blog_vertical_loop_next_post_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row1->addChild("blog_vertical_loop_next_post_title_texttransform", $blog_vertical_loop_next_post_title_texttransform);
        $row2 = new QodeRow(true);
        $group11->addChild("row2", $row2);
				$blog_vertical_loop_next_post_title_google_fonts = new QodeField("fontsimple","blog_vertical_loop_next_post_title_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_vertical_loop_next_post_title_google_fonts", $blog_vertical_loop_next_post_title_google_fonts);
        $blog_vertical_loop_next_post_title_fontstyle = new QodeField("selectblanksimple", "blog_vertical_loop_next_post_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_vertical_loop_next_post_title_fontstyle", $blog_vertical_loop_next_post_title_fontstyle);
        $blog_vertical_loop_next_post_title_fontweight = new QodeField("selectblanksimple", "blog_vertical_loop_next_post_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("blog_vertical_loop_next_post_title_fontweight", $blog_vertical_loop_next_post_title_fontweight);
        $blog_vertical_loop_next_post_title_letterspacing = new QodeField("textsimple", "blog_vertical_loop_next_post_title_letterspacing", "", "字符间距 (px)", "This is some description");
        $row2->addChild("blog_vertical_loop_next_post_title_letterspacing", $blog_vertical_loop_next_post_title_letterspacing);


			$group12 = new QodeGroup("文章信息风格","定义文章信息风格");
        $panel2->addChild("group12", $group12);
        $row1 = new QodeRow();
        $group12->addChild("row1", $row1);
		$blog_vertical_loop_post_info_color = new QodeField("colorsimple","blog_vertical_loop_post_info_color","","文字颜色","This is some description");
        $row1->addChild("blog_vertical_loop_post_info_color", $blog_vertical_loop_post_info_color);
		$blog_vertical_loop_post_info_link_color = new QodeField("colorsimple","blog_vertical_loop_post_info_link_color","","链接颜色","This is some description");
        $row1->addChild("blog_vertical_loop_post_info_link_color", $blog_vertical_loop_post_info_link_color);
		$blog_vertical_loop_post_info_hover_color = new QodeField("colorsimple","blog_vertical_loop_post_info_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("blog_vertical_loop_post_info_hover_color", $blog_vertical_loop_post_info_hover_color);
		$blog_vertical_loop_post_info_fontsize = new QodeField("textsimple","blog_vertical_loop_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_vertical_loop_post_info_fontsize", $blog_vertical_loop_post_info_fontsize);
        $row2 = new QodeRow(true);
        $group12->addChild("row2", $row2);
		$blog_vertical_loop_post_info_lineheight = new QodeField("textsimple","blog_vertical_loop_post_info_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_vertical_loop_post_info_lineheight", $blog_vertical_loop_post_info_lineheight);
        $blog_vertical_loop_post_info_texttransform = new QodeField("selectblanksimple", "blog_vertical_loop_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_vertical_loop_post_info_texttransform", $blog_vertical_loop_post_info_texttransform);
		$blog_vertical_loop_post_info_google_fonts = new QodeField("fontsimple","blog_vertical_loop_post_info_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_vertical_loop_post_info_google_fonts", $blog_vertical_loop_post_info_google_fonts);
        $blog_vertical_loop_post_info_fontstyle = new QodeField("selectblanksimple", "blog_vertical_loop_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_vertical_loop_post_info_fontstyle", $blog_vertical_loop_post_info_fontstyle);

        $row3 = new QodeRow(true);
        $group12->addChild("row3", $row3);
        $blog_vertical_loop_post_info_fontweight = new QodeField("selectblanksimple", "blog_vertical_loop_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_vertical_loop_post_info_fontweight", $blog_vertical_loop_post_info_fontweight);
		$blog_vertical_loop_post_info_letterspacing = new QodeField("textsimple","blog_vertical_loop_post_info_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("blog_vertical_loop_post_info_letterspacing", $blog_vertical_loop_post_info_letterspacing);

			$group13 = new QodeGroup("引用/链接标题风格","定义标题风格");
        $panel2->addChild("group13", $group13);
        $row1 = new QodeRow();
        $group13->addChild("row1", $row1);
			$blog_vertical_loop_ql_title_color = new QodeField("colorsimple","blog_vertical_loop_ql_title_color","","标题颜色","This is some description");
        $row1->addChild("blog_vertical_loop_ql_title_color", $blog_vertical_loop_ql_title_color);
			$blog_vertical_loop_ql_title_hover_color = new QodeField("colorsimple","blog_vertical_loop_ql_title_hover_color","","标题悬停颜色","This is some description");
        $row1->addChild("blog_vertical_loop_ql_title_hover_color", $blog_vertical_loop_ql_title_hover_color);
			$blog_vertical_loop_ql_title_author_color = new QodeField("colorsimple","blog_vertical_loop_ql_title_author_color","","引用作者颜色","This is some description");
        $row1->addChild("blog_vertical_loop_ql_title_author_color", $blog_vertical_loop_ql_title_author_color);
			$blog_vertical_loop_ql_title_fontsize = new QodeField("textsimple","blog_vertical_loop_ql_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_vertical_loop_ql_title_fontsize", $blog_vertical_loop_ql_title_fontsize);

        $row2 = new QodeRow(true);
        $group13->addChild("row2", $row2);
			$blog_vertical_loop_ql_title_lineheight = new QodeField("textsimple","blog_vertical_loop_ql_title_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_vertical_loop_ql_title_lineheight", $blog_vertical_loop_ql_title_lineheight);
        $blog_vertical_loop_ql_title_texttransform = new QodeField("selectblanksimple", "blog_vertical_loop_ql_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_vertical_loop_ql_title_texttransform", $blog_vertical_loop_ql_title_texttransform);
			$blog_vertical_loop_ql_title_google_fonts = new QodeField("fontsimple","blog_vertical_loop_ql_title_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_vertical_loop_ql_title_google_fonts", $blog_vertical_loop_ql_title_google_fonts);
        $blog_vertical_loop_ql_title_fontstyle = new QodeField("selectblanksimple", "blog_vertical_loop_ql_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_vertical_loop_ql_title_fontstyle", $blog_vertical_loop_ql_title_fontstyle);

        $row3 = new QodeRow(true);
        $group13->addChild("row3", $row3);
        $blog_vertical_loop_ql_title_fontweight = new QodeField("selectblanksimple", "blog_vertical_loop_ql_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_vertical_loop_ql_title_fontweight", $blog_vertical_loop_ql_title_fontweight);
			$blog_vertical_loop_ql_title_letterspacing = new QodeField("textsimple","blog_vertical_loop_ql_title_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("blog_vertical_loop_ql_title_letterspacing", $blog_vertical_loop_ql_title_letterspacing);

			$group14 = new QodeGroup("引用/链接文章信息","定义引用/链接文章信息风格");
        $panel2->addChild("group14", $group14);
        $row1 = new QodeRow();
        $group14->addChild("row1", $row1);
			$blog_vertical_loop_ql_post_info_color = new QodeField("colorsimple","blog_vertical_loop_ql_post_info_color","","文字颜色","This is some description");
        $row1->addChild("blog_vertical_loop_ql_post_info_color", $blog_vertical_loop_ql_post_info_color);
			$blog_vertical_loop_ql_post_info_link_color = new QodeField("colorsimple","blog_vertical_loop_ql_post_info_link_color","","链接颜色","This is some description");
        $row1->addChild("blog_vertical_loop_ql_post_info_link_color", $blog_vertical_loop_ql_post_info_link_color);
			$blog_vertical_loop_ql_post_info_hover_color = new QodeField("colorsimple","blog_vertical_loop_ql_post_info_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("blog_vertical_loop_ql_post_info_hover_color", $blog_vertical_loop_ql_post_info_hover_color);
			$blog_vertical_loop_ql_post_info_fontsize = new QodeField("textsimple","blog_vertical_loop_ql_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_vertical_loop_ql_post_info_fontsize", $blog_vertical_loop_ql_post_info_fontsize);

        $row2 = new QodeRow(true);
        $group14->addChild("row2", $row2);
			$blog_vertical_loop_ql_post_info_lineheight = new QodeField("textsimple","blog_vertical_loop_ql_post_info_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_vertical_loop_ql_post_info_lineheight", $blog_vertical_loop_ql_post_info_lineheight);
        $blog_vertical_loop_ql_post_info_texttransform = new QodeField("selectblanksimple", "blog_vertical_loop_ql_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_vertical_loop_ql_post_info_texttransform", $blog_vertical_loop_ql_post_info_texttransform);
			$blog_vertical_loop_ql_post_info_google_fonts = new QodeField("fontsimple","blog_vertical_loop_ql_post_info_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_vertical_loop_ql_post_info_google_fonts", $blog_vertical_loop_ql_post_info_google_fonts);
        $blog_vertical_loop_ql_post_info_fontstyle = new QodeField("selectblanksimple", "blog_vertical_loop_ql_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_vertical_loop_ql_post_info_fontstyle", $blog_vertical_loop_ql_post_info_fontstyle);

        $row3 = new QodeRow(true);
        $group14->addChild("row3", $row3);
        $blog_vertical_loop_ql_post_info_fontweight = new QodeField("selectblanksimple", "blog_vertical_loop_ql_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_vertical_loop_ql_post_info_fontweight", $blog_vertical_loop_ql_post_info_fontweight);
			$blog_vertical_loop_ql_post_info_letterspacing = new QodeField("textsimple","blog_vertical_loop_ql_post_info_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("blog_vertical_loop_ql_post_info_letterspacing", $blog_vertical_loop_ql_post_info_letterspacing);

			$group15 = new QodeGroup("下一/上一按钮风格","定义下一/上一按钮风格");
        $panel2->addChild("group15", $group15);
        $row1 = new QodeRow();
        $group15->addChild("row1", $row1);
			$blog_vertical_loop_npb_background_color = new QodeField("colorsimple","blog_vertical_loop_npb_background_color","","背景颜色","This is some description");
        $row1->addChild("blog_vertical_loop_npb_background_color", $blog_vertical_loop_npb_background_color);

			$blog_vertical_loop_npb_background_hover_color = new QodeField("colorsimple","blog_vertical_loop_npb_background_hover_color","","背景悬停颜色","This is some description");
        $row1->addChild("blog_vertical_loop_npb_background_hover_color", $blog_vertical_loop_npb_background_hover_color);

			$blog_vertical_loop_npb_icon_color = new QodeField("colorsimple","blog_vertical_loop_npb_icon_color","","图标颜色","This is some description");
        $row1->addChild("blog_vertical_loop_npb_icon_color", $blog_vertical_loop_npb_icon_color);

			$blog_vertical_loop_npb_icon_hover_color = new QodeField("colorsimple","blog_vertical_loop_npb_icon_hover_color","","图标悬停颜色","This is some description");
        $row1->addChild("blog_vertical_loop_npb_icon_hover_color", $blog_vertical_loop_npb_icon_hover_color);

	$blog_masonry_date_image_subtitle = new QodeTitle("blog_masonry_date_image_subtitle", "切片 - 日期在图片中风格");
        $panel2->addChild("blog_masonry_date_image_subtitle", $blog_masonry_date_image_subtitle);

	$group16 = new QodeGroup("切片 - 日期在图片内风格",'选择博客切片背景颜色 - 日期在图片中');
        $panel2->addChild("group16", $group16);
        $row1 = new QodeRow();
        $group16->addChild("row1", $row1);
			$blog_masonry_date_image_background_color = new QodeField("colorsimple","blog_masonry_date_image_background_color","","文字框背景颜色","ThisIsDescription");
        $row1->addChild("blog_masonry_date_image_background_color", $blog_masonry_date_image_background_color);

		$group17 = new QodeGroup("标题风格","定义标题风格");
        $panel2->addChild("group17", $group17);
        $row1 = new QodeRow();
        $group17->addChild("row1", $row1);
				$blog_masonry_date_image_title_color = new QodeField("colorsimple","blog_masonry_date_image_title_color","","标题颜色","This is some description");
        $row1->addChild("blog_masonry_date_image_title_color", $blog_masonry_date_image_title_color);
				$blog_masonry_date_image_title_hover_color = new QodeField("colorsimple","blog_masonry_date_image_title_hover_color","","标题悬停颜色","This is some description");
        $row1->addChild("blog_masonry_date_image_title_hover_color", $blog_masonry_date_image_title_hover_color);
				$blog_masonry_date_image_title_fontsize = new QodeField("textsimple","blog_masonry_date_image_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_masonry_date_image_title_fontsize", $blog_masonry_date_image_title_fontsize);
				$blog_masonry_date_image_title_lineheight = new QodeField("textsimple","blog_masonry_date_image_title_lineheight","","行高（px）","This is some description");
        $row1->addChild("blog_masonry_date_image_title_lineheight", $blog_masonry_date_image_title_lineheight);

        $row2 = new QodeRow(true);
        $group17->addChild("row2", $row2);
        $blog_masonry_date_image_title_texttransform = new QodeField("selectblanksimple", "blog_masonry_date_image_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_masonry_date_image_title_texttransform", $blog_masonry_date_image_title_texttransform);
				$blog_masonry_date_image_title_google_fonts = new QodeField("fontsimple","blog_masonry_date_image_title_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_masonry_date_image_title_google_fonts", $blog_masonry_date_image_title_google_fonts);
        $blog_masonry_date_image_title_fontstyle = new QodeField("selectblanksimple", "blog_masonry_date_image_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_masonry_date_image_title_fontstyle", $blog_masonry_date_image_title_fontstyle);
        $blog_masonry_date_image_title_fontweight = new QodeField("selectblanksimple", "blog_masonry_date_image_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("blog_masonry_date_image_title_fontweight", $blog_masonry_date_image_title_fontweight);

        $row3 = new QodeRow(true);
        $group17->addChild("row3", $row3);
        $blog_masonry_date_image_title_letterspacing = new QodeField("textsimple", "blog_masonry_date_image_title_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_masonry_date_image_title_letterspacing", $blog_masonry_date_image_title_letterspacing);

        $group35 = new QodeGroup("悬停类型", "定义文章悬停类型");
        $panel2->addChild("group35", $group35);
        $row1 = new QodeRow();
        $group35->addChild("row1", $row1);
        $blog_masonry_date_image_hover_type = new QodeField("selectblanksimple", "blog_masonry_date_image_hover_type", "", "悬停类型", "ThisIsDescription", array(
            'qodef-no-hover' => '无',
            'qodef-zoom' => '放大'
        ));
        $row1->addChild("blog_masonry_date_image_hover_type", $blog_masonry_date_image_hover_type);

        $blog_pinterest_subtitle = new QodeTitle("blog_pinterest_subtitle", "Pinterest风格");
        $panel2->addChild("blog_pinterest_subtitle", $blog_pinterest_subtitle);

        $group30 = new QodeGroup("Pinterest风格", '定义"Pinterest"博客列表风格');
        $panel2->addChild("group30", $group30);
            $row1 = new QodeRow();
            $group30->addChild("row1", $row1);
            $blog_pinterest_background_color = new QodeField("colorsimple", "blog_pinterest_background_color", "", "文字框背景颜色", "ThisIsDescription");
            $row1->addChild("blog_pinterest_background_color", $blog_pinterest_background_color);

        $group31 = new QodeGroup("标题风格", "定义标题风格");
        $panel2->addChild("group31", $group31);
            $row1 = new QodeRow();
            $group31->addChild("row1", $row1);
            $blog_pinterest_title_color = new QodeField("colorsimple", "blog_pinterest_title_color", "", "标题颜色", "This is some description");
            $row1->addChild("blog_pinterest_title_color", $blog_pinterest_title_color);
            $blog_pinterest_title_hover_color = new QodeField("colorsimple", "blog_pinterest_title_hover_color", "", "标题悬停颜色", "This is some description");
            $row1->addChild("blog_pinterest_title_hover_color", $blog_pinterest_title_hover_color);
            $blog_pinterest_title_fontsize = new QodeField("textsimple", "blog_pinterest_title_fontsize", "", "字体大小 (px)", "This is some description");
            $row1->addChild("blog_pinterest_title_fontsize", $blog_pinterest_title_fontsize);
            $blog_pinterest_title_lineheight = new QodeField("textsimple", "blog_pinterest_title_lineheight", "", "行高 (px)", "This is some description");
            $row1->addChild("blog_pinterest_title_lineheight", $blog_pinterest_title_lineheight);

            $row2 = new QodeRow(true);
            $group31->addChild("row2", $row2);
            $blog_pinterest_title_texttransform = new QodeField("selectblanksimple", "blog_pinterest_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
            $row2->addChild("blog_pinterest_title_texttransform", $blog_pinterest_title_texttransform);
            $blog_pinterest_title_google_fonts = new QodeField("fontsimple", "blog_pinterest_title_google_fonts", "-1", "字体系列", "This is some description");
            $row2->addChild("blog_pinterest_title_google_fonts", $blog_pinterest_title_google_fonts);
            $blog_pinterest_title_fontstyle = new QodeField("selectblanksimple", "blog_pinterest_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
            $row2->addChild("blog_pinterest_title_fontstyle", $blog_pinterest_title_fontstyle);
            $blog_pinterest_title_fontweight = new QodeField("selectblanksimple", "blog_pinterest_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
            $row2->addChild("blog_pinterest_title_fontweight", $blog_pinterest_title_fontweight);

            $row3 = new QodeRow(true);
            $group31->addChild("row3", $row3);
            $blog_pinterest_title_letterspacing = new QodeField("textsimple", "blog_pinterest_title_letterspacing", "", "字符间距 (px)", "This is some description");
            $row3->addChild("blog_pinterest_title_letterspacing", $blog_pinterest_title_letterspacing);

        $group32 = new QodeGroup("文章信息风格", "定义文章信息风格");
        $panel2->addChild("group32", $group32);
            $row1 = new QodeRow();
            $group32->addChild("row1", $row1);
            $blog_pinterest_post_info_color = new QodeField("colorsimple", "blog_pinterest_post_info_color", "", "文字颜色", "This is some description");
            $row1->addChild("blog_pinterest_post_info_color", $blog_pinterest_post_info_color);
            $blog_pinterest_post_info_link_color = new QodeField("colorsimple", "blog_pinterest_post_info_link_color", "", "链接颜色", "This is some description");
            $row1->addChild("blog_pinterest_post_info_link_color", $blog_pinterest_post_info_link_color);
            $blog_pinterest_post_info_link_hover_color = new QodeField("colorsimple", "blog_pinterest_post_info_link_hover_color", "", "链接悬停颜色", "This is some description");
            $row1->addChild("blog_pinterest_post_info_link_hover_color", $blog_pinterest_post_info_link_hover_color);
            $blog_pinterest_post_info_fontsize = new QodeField("textsimple", "blog_pinterest_post_info_fontsize", "", "字体大小 (px)", "This is some description");
            $row1->addChild("blog_pinterest_post_info_fontsize", $blog_pinterest_post_info_fontsize);

            $row2 = new QodeRow(true);
            $group32->addChild("row2", $row2);
            $blog_pinterest_post_info_lineheight = new QodeField("textsimple", "blog_pinterest_post_info_lineheight", "", "行高 (px)", "This is some description");
            $row2->addChild("blog_pinterest_post_info_lineheight", $blog_pinterest_post_info_lineheight);
            $blog_pinterest_post_info_texttransform = new QodeField("selectblanksimple", "blog_pinterest_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
            $row2->addChild("blog_pinterest_post_info_texttransform", $blog_pinterest_post_info_texttransform);
            $blog_pinterest_post_info_google_fonts = new QodeField("fontsimple", "blog_pinterest_post_info_google_fonts", "-1", "字体系列", "This is some description");
            $row2->addChild("blog_pinterest_post_info_google_fonts", $blog_pinterest_post_info_google_fonts);
            $blog_pinterest_post_info_fontstyle = new QodeField("selectblanksimple", "blog_pinterest_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
            $row2->addChild("blog_pinterest_post_info_fontstyle", $blog_pinterest_post_info_fontstyle);

            $row3 = new QodeRow(true);
            $group32->addChild("row3", $row3);
            $blog_pinterest_post_info_fontweight = new QodeField("selectblanksimple", "blog_pinterest_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
            $row3->addChild("blog_pinterest_post_info_fontweight", $blog_pinterest_post_info_fontweight);
            $blog_pinterest_post_info_letterspacing = new QodeField("textsimple", "blog_pinterest_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
            $row3->addChild("blog_pinterest_post_info_letterspacing", $blog_pinterest_post_info_letterspacing);

        $group33 = new QodeGroup("文章信息引用/链接风格", "定义引用/链接文章信息风格");
        $panel2->addChild("group33", $group33);
            $row1 = new QodeRow();
            $group33->addChild("row1", $row1);
            $blog_pinterest_ql_post_info_color = new QodeField("colorsimple", "blog_pinterest_ql_post_info_color", "", "文字颜色", "This is some description");
            $row1->addChild("blog_pinterest_ql_post_info_color", $blog_pinterest_ql_post_info_color);
            $blog_pinterest_ql_post_info_fontsize = new QodeField("textsimple", "blog_pinterest_ql_post_info_fontsize", "", "字体大小 (px)", "This is some description");
            $row1->addChild("blog_pinterest_ql_post_info_fontsize", $blog_pinterest_ql_post_info_fontsize);

            $row2 = new QodeRow(true);
            $group33->addChild("row2", $row2);
            $blog_pinterest_ql_post_info_lineheight = new QodeField("textsimple", "blog_pinterest_ql_post_info_lineheight", "", "行高 (px)", "This is some description");
            $row2->addChild("blog_pinterest_ql_post_info_lineheight", $blog_pinterest_ql_post_info_lineheight);
            $blog_pinterest_ql_post_info_texttransform = new QodeField("selectblanksimple", "blog_pinterest_ql_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
            $row2->addChild("blog_pinterest_ql_post_info_texttransform", $blog_pinterest_ql_post_info_texttransform);
            $blog_pinterest_ql_post_info_google_fonts = new QodeField("fontsimple", "blog_pinterest_ql_post_info_google_fonts", "-1", "字体系列", "This is some description");
            $row2->addChild("blog_pinterest_ql_post_info_google_fonts", $blog_pinterest_ql_post_info_google_fonts);
            $blog_pinterest_ql_post_info_fontstyle = new QodeField("selectblanksimple", "blog_pinterest_ql_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
            $row2->addChild("blog_pinterest_ql_post_info_fontstyle", $blog_pinterest_ql_post_info_fontstyle);

            $row3 = new QodeRow(true);
            $group33->addChild("row3", $row3);
            $blog_pinterest_ql_post_info_fontweight = new QodeField("selectblanksimple", "blog_pinterest_ql_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
            $row3->addChild("blog_pinterest_ql_post_info_fontweight", $blog_pinterest_ql_post_info_fontweight);
            $blog_pinterest_ql_post_info_letterspacing = new QodeField("textsimple", "blog_pinterest_ql_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
            $row3->addChild("blog_pinterest_ql_post_info_letterspacing", $blog_pinterest_ql_post_info_letterspacing);


        // Blog Single

        $panel3 = new QodePanel("博客单页", "blog_single_panel");
        $blogPage->addChild("panel3", $panel3);

        $single_templates = array(
			'standard'				=> '标准',
			'image-title-post'		=> '图片标题文章'
		);
        $single_templates = apply_filters('qode_single_blog_templates',$single_templates);

		qode_add_admin_field(
			array(
				'name'          => 'blog_single_type',
				'type'          => 'select',
				'label'         => '选择单个文章页面默认类型',
				'description'   => '',
				'options'     => $single_templates,
				'default_value'		=> 'standard',
				'parent'        => $panel3,
				'args'          => array(
					'dependence' => true,
					'hide'       => array(
						'standard'				=> '#qodef_qode_itp_separator_container',
						'image-title-post' 		=> '#qodef_qode_audio_image_container',
						'news-template' 		=> '#qodef_qode_audio_image_container',
					),
					'show'       => array(
						'standard'				=> '#qodef_qode_audio_image_container',
						'image-title-post'		=> '#qodef_qode_itp_separator_container',
						'news-template'			=> '#qodef_qode_itp_separator_container',
					)
				)
			)
		);

		$qode_itp_separator_container = qode_add_admin_container(
			array(
				'parent'          => $panel3,
				'name'            => 'qode_itp_separator_container',
				'hidden_property' => 'blog_single_type',
				'hidden_value'    => 'standard'
			)
		);

		$qode_audio_image_container = qode_add_admin_container(
			array(
				'parent'          => $panel3,
				'name'            => 'qode_audio_image_container',
				'hidden_property' => 'blog_single_type',
				'hidden_values'    => array('image-title-post', 'news-template')
			)
		);

		qode_add_admin_field(
			array(
				'name'          	=> 'blog_imt_post_separator',
				'type'          	=> 'yesno',
				'label'         	=> '在标题下启用分隔符',
				'description'   	=> '',
				'default_value'		=> 'no',
				'parent'        	=> $qode_itp_separator_container,
				'args' => array(
					'dependence' => true,
					'dependence_hide_on_yes' => '',
					'dependence_show_on_yes' => '#qodef_qode_itp_separator_gradient_container'
				)
			)
		);

		$qode_itp_separator_gradient_container = qode_add_admin_container(
			array(
				'parent'          => $panel3,
				'name'            => 'qode_itp_separator_gradient_container',
				'hidden_property' => 'blog_imt_post_separator',
				'hidden_value'    => 'no'
			)
		);

		qode_add_admin_field(
			array(
				'name'         		=> 'blog_imt_post_separator_gradient',
				'type'          	=> 'yesno',
				'label'         	=> '在分隔符上启用渐变',
				'description'   	=> '',
				'default_value'		=> 'no',
				'parent'        	=> $qode_itp_separator_gradient_container
			)
		);

		qode_add_admin_field(
			array(
				'name'         		=> 'show_image_on_audio_post',
				'type'          	=> 'yesno',
				'label'         	=> '在音频文章显示图片',
				'description'   	=> '启用此选项在音频文章显示图片',
				'default_value'		=> 'no',
				'parent'        	=> $qode_audio_image_container
			)
		);

		$blog_single_sidebar = new QodeField("select", "blog_single_sidebar", "default", "侧边栏布局", "选择博客单篇文章侧边栏布局", array("default" => "无侧边栏",
            "1" => "右侧边栏1/3",
            "2" => "右侧边栏1/4",
            "3" => "左侧边栏1/3",
            "4" => "左侧边栏1/4"
        ));
        $panel3->addChild("blog_single_sidebar", $blog_single_sidebar);

        $custom_sidebars = qode_get_custom_sidebars();

	$blog_single_sidebar_custom_display = new QodeField("selectblank","blog_single_sidebar_custom_display","","显示侧边栏","选择博客单个页面显示侧边栏", $custom_sidebars);
        $panel3->addChild("blog_single_sidebar_custom_display", $blog_single_sidebar_custom_display);

        $blog_share_like_layout = new QodeField("select", "blog_share_like_layout", "in_post_info", "分享/赞布局", "为博客单页选择分享/赞布局", array(
            "in_post_info" => "在文章信息",
            "below_post_text" => "在文章文字之下"
        ));
        $panel3->addChild("blog_share_like_layout", $blog_share_like_layout);



        $blog_author_info = new QodeField("yesno", "blog_author_info", "no", "显示博客作者", "启用此选项将在博客单页显示作者名");
        $panel3->addChild("blog_author_info", $blog_author_info);

	$group1 = new QodeGroup("单个博客间距","设置博客单篇文章间距");
        $panel3->addChild("group1", $group1);
        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);
			$blog_single_image_margin_bottom = new QodeField("textsimple","blog_single_image_margin_bottom","","图片下边距 (px)", "This is some description");
        $row1->addChild("blog_single_image_margin_bottom", $blog_single_image_margin_bottom);
			$blog_single_title_margin_bottom = new QodeField("textsimple","blog_single_title_margin_bottom","","标题下边距 (px)", "This is some description");
        $row1->addChild("blog_single_title_margin_bottom", $blog_single_title_margin_bottom);
			$blog_single_post_info_margin_bottom = new QodeField("textsimple","blog_single_post_info_margin_bottom","","文章信息下边距 (px)", "This is some description");
        $row1->addChild("blog_single_post_info_margin_bottom", $blog_single_post_info_margin_bottom);

		do_action('qode_blog_single_options_map', $panel3);

        // Quote/Link

$panel1 = new QodePanel("引用/链接","quote_link_panel" );
        $blogPage->addChild("panel1", $panel1);
	$blog_quote_link_box_color = new QodeField("color","blog_quote_link_box_color","","框背景颜色",'选择"引用"和"链接"类型博客显示框背景颜色');
        $panel1->addChild("blog_quote_link_box_color", $blog_quote_link_box_color);


$panel4 = new QodePanel("博客侧边栏", "blog_slider_panel");
        $blogPage->addChild("panel4", $panel4);

	$blog_slider_default_subtitle = new QodeTitle("blog_slider_default_subtitle", "博客轮播幻灯片风格");
        $panel4->addChild("blog_slider_default_subtitle", $blog_slider_default_subtitle);

	$group1 = new QodeGroup("标题风格","定义标题风格");
        $panel4->addChild("group1", $group1);

        $row1 = new QodeRow();
        $group1->addChild("row1", $row1);

			$blog_slider_title_color = new QodeField("colorsimple","blog_slider_title_color","","标题颜色","This is some description");
        $row1->addChild("blog_slider_title_color", $blog_slider_title_color);
			$blog_slider_title_hover_color = new QodeField("colorsimple","blog_slider_title_hover_color","","标题悬停颜色","This is some description");
        $row1->addChild("blog_slider_title_hover_color", $blog_slider_title_hover_color);
			$blog_slider_title_fontsize = new QodeField("textsimple","blog_slider_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_slider_title_fontsize", $blog_slider_title_fontsize);
			$blog_slider_title_lineheight = new QodeField("textsimple","blog_slider_title_lineheight","","行高（px）","This is some description");
        $row1->addChild("blog_slider_title_lineheight", $blog_slider_title_lineheight);

        $row2 = new QodeRow();
        $group1->addChild("row2", $row2);

        $blog_slider_title_texttransform = new QodeField("selectblanksimple", "blog_slider_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_slider_title_texttransform", $blog_slider_title_texttransform);
			$blog_slider_title_google_fonts = new QodeField("fontsimple","blog_slider_title_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_slider_title_google_fonts", $blog_slider_title_google_fonts);
        $blog_slider_title_fontstyle = new QodeField("selectblanksimple", "blog_slider_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_slider_title_fontstyle", $blog_slider_title_fontstyle);
        $blog_slider_title_fontweight = new QodeField("selectblanksimple", "blog_slider_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("blog_slider_title_fontweight", $blog_slider_title_fontweight);

        $row3 = new QodeRow();
        $group1->addChild("row3", $row3);

			$blog_slider_title_letterspacing = new QodeField("textsimple","blog_slider_title_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("blog_slider_title_letterspacing", $blog_slider_title_letterspacing);

	$group2 = new QodeGroup("文章信息风格","定义文章信息风格");
        $panel4->addChild("group2", $group2);

        $row1 = new QodeRow();
        $group2->addChild("row1", $row1);

			$blog_slider_post_info_color = new QodeField("colorsimple","blog_slider_post_info_color","","颜色","This is some description");
        $row1->addChild("blog_slider_post_info_color", $blog_slider_post_info_color);

			$blog_slider_post_info_link_color = new QodeField("colorsimple","blog_slider_post_info_link_color","","链接颜色","This is some description");
        $row1->addChild("blog_slider_post_info_link_color", $blog_slider_post_info_link_color);

			$blog_slider_post_info_link_hover_color = new QodeField("colorsimple","blog_slider_post_info_link_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("blog_slider_post_info_link_hover_color", $blog_slider_post_info_link_hover_color);

			$blog_slider_post_info_fontsize = new QodeField("textsimple","blog_slider_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_slider_post_info_fontsize", $blog_slider_post_info_fontsize);

        $row2 = new QodeRow(true);
        $group2->addChild("row2", $row2);

			$blog_slider_post_info_lineheight = new QodeField("textsimple","blog_slider_post_info_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_slider_post_info_lineheight", $blog_slider_post_info_lineheight);

        $blog_slider_post_info_texttransform = new QodeField("selectblanksimple", "blog_slider_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_slider_post_info_texttransform", $blog_slider_post_info_texttransform);

			$blog_slider_post_info_google_fonts = new QodeField("fontsimple","blog_slider_post_info_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_slider_post_info_google_fonts", $blog_slider_post_info_google_fonts);

        $blog_slider_post_info_fontstyle = new QodeField("selectblanksimple", "blog_slider_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_slider_post_info_fontstyle", $blog_slider_post_info_fontstyle);

        $row3 = new QodeRow();
        $group2->addChild("row3", $row3);

        $blog_slider_post_info_fontweight = new QodeField("selectblanksimple", "blog_slider_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_slider_post_info_fontweight", $blog_slider_post_info_fontweight);

        $blog_slider_post_info_letterspacing = new QodeField("textsimple", "blog_slider_post_info_letterspacing", "", "字符间距 (px)", "This is some description");
        $row3->addChild("blog_slider_post_info_letterspacing", $blog_slider_post_info_letterspacing);

	$group9 = new QodeGroup("日风格","定义文章信息风格 - 日，适合文章信息位置 - 底部 (如果不设置，它将从文章信息风格继承)");
        $panel4->addChild("group9", $group9);

        $row1 = new QodeRow();
        $group9->addChild("row1", $row1);

			$blog_slider_day_color = new QodeField("colorsimple","blog_slider_day_color","","颜色","This is some description");
        $row1->addChild("blog_slider_day_color", $blog_slider_day_color);

			$blog_slider_day_fontsize = new QodeField("textsimple","blog_slider_day_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_slider_day_fontsize", $blog_slider_day_fontsize);

			$blog_slider_day_lineheight = new QodeField("textsimple","blog_slider_day_lineheight","","行高（px）","This is some description");
        $row1->addChild("blog_slider_day_lineheight", $blog_slider_day_lineheight);

        $blog_slider_day_texttransform = new QodeField("selectblanksimple", "blog_slider_day_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row1->addChild("blog_slider_day_texttransform", $blog_slider_day_texttransform);

        $row2 = new QodeRow(true);
        $group9->addChild("row2", $row2);

			$blog_slider_day_google_fonts = new QodeField("fontsimple","blog_slider_day_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_slider_day_google_fonts", $blog_slider_day_google_fonts);

        $blog_slider_day_fontstyle = new QodeField("selectblanksimple", "blog_slider_day_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_slider_day_fontstyle", $blog_slider_day_fontstyle);

        $blog_slider_day_fontweight = new QodeField("selectblanksimple", "blog_slider_day_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("blog_slider_day_fontweight", $blog_slider_day_fontweight);

        $blog_slider_day_letterspacing = new QodeField("textsimple", "blog_slider_day_letterspacing", "", "字符间距 (px)", "This is some description");
        $row2->addChild("blog_slider_day_letterspacing", $blog_slider_day_letterspacing);

	$group3 = new QodeGroup("博客幻灯片间距", "定义博客幻灯片内容间距");
        $panel4->addChild("group3", $group3);

        $row1 = new QodeRow();
        $group3->addChild("row1", $row1);

			$blog_slider_title_bottom_margin = new QodeField("textsimple","blog_slider_title_bottom_margin","","标题下边距 (px)","This is some description");
        $row1->addChild("blog_slider_title_bottom_margin", $blog_slider_title_bottom_margin);

			$blog_slider_date_bottom_margin = new QodeField("textsimple","blog_slider_date_bottom_margin","","日期下边距 (px)","This is some description");
        $row1->addChild("blog_slider_date_bottom_margin", $blog_slider_date_bottom_margin);

			$blog_slider_day_margin = new QodeField("textsimple","blog_slider_day_margin","","日下边距 (px)","This is some description");
        $row1->addChild("blog_slider_day_margin", $blog_slider_day_margin);

	$blog_slider_simple_subtitle = new QodeTitle("blog_slider_simple_subtitle", "博客简单幻灯片风格");
        $panel4->addChild("blog_slider_simple_subtitle", $blog_slider_simple_subtitle);

	$group4 = new QodeGroup("标题风格","定义标题风格");
        $panel4->addChild("group4", $group4);

        $row1 = new QodeRow();
        $group4->addChild("row1", $row1);

			$blog_slsimple_title_color = new QodeField("colorsimple","blog_slsimple_title_color","","标题颜色","This is some description");
        $row1->addChild("blog_slsimple_title_color", $blog_slsimple_title_color);
			$blog_slsimple_title_hover_color = new QodeField("colorsimple","blog_slsimple_title_hover_color","","标题悬停颜色","This is some description");
        $row1->addChild("blog_slsimple_title_hover_color", $blog_slsimple_title_hover_color);
			$blog_slsimple_title_fontsize = new QodeField("textsimple","blog_slsimple_title_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_slsimple_title_fontsize", $blog_slsimple_title_fontsize);
			$blog_slsimple_title_lineheight = new QodeField("textsimple","blog_slsimple_title_lineheight","","行高（px）","This is some description");
        $row1->addChild("blog_slsimple_title_lineheight", $blog_slsimple_title_lineheight);

        $row2 = new QodeRow();
        $group4->addChild("row2", $row2);

        $blog_slsimple_title_texttransform = new QodeField("selectblanksimple", "blog_slsimple_title_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_slsimple_title_texttransform", $blog_slsimple_title_texttransform);
			$blog_slsimple_title_google_fonts = new QodeField("fontsimple","blog_slsimple_title_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_slsimple_title_google_fonts", $blog_slsimple_title_google_fonts);
        $blog_slsimple_title_fontstyle = new QodeField("selectblanksimple", "blog_slsimple_title_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_slsimple_title_fontstyle", $blog_slsimple_title_fontstyle);
        $blog_slsimple_title_fontweight = new QodeField("selectblanksimple", "blog_slsimple_title_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row2->addChild("blog_slsimple_title_fontweight", $blog_slsimple_title_fontweight);

        $row3 = new QodeRow();
        $group4->addChild("row3", $row3);

			$blog_slsimple_title_letterspacing = new QodeField("textsimple","blog_slsimple_title_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("blog_slsimple_title_letterspacing", $blog_slsimple_title_letterspacing);

	$group5 = new QodeGroup("文章信息风格","定义文章信息风格");
        $panel4->addChild("group5", $group5);

        $row1 = new QodeRow();
        $group5->addChild("row1", $row1);

			$blog_slsimple_post_info_color = new QodeField("colorsimple","blog_slsimple_post_info_color","","颜色","This is some description");
        $row1->addChild("blog_slsimple_post_info_color", $blog_slsimple_post_info_color);

			$blog_slsimple_post_info_link_color = new QodeField("colorsimple","blog_slsimple_post_info_link_color","","链接颜色","This is some description");
        $row1->addChild("blog_slsimple_post_info_link_color", $blog_slsimple_post_info_link_color);

			$blog_slsimple_post_info_link_hover_color = new QodeField("colorsimple","blog_slsimple_post_info_link_hover_color","","链接悬停颜色","This is some description");
        $row1->addChild("blog_slsimple_post_info_link_hover_color", $blog_slsimple_post_info_link_hover_color);

			$blog_slsimple_post_info_fontsize = new QodeField("textsimple","blog_slsimple_post_info_fontsize","","字体大小（px）","This is some description");
        $row1->addChild("blog_slsimple_post_info_fontsize", $blog_slsimple_post_info_fontsize);

        $row2 = new QodeRow();
        $group5->addChild("row2", $row2);

			$blog_slsimple_post_info_lineheight = new QodeField("textsimple","blog_slsimple_post_info_lineheight","","行高（px）","This is some description");
        $row2->addChild("blog_slsimple_post_info_lineheight", $blog_slsimple_post_info_lineheight);

        $blog_slsimple_post_info_texttransform = new QodeField("selectblanksimple", "blog_slsimple_post_info_texttransform", "", "文字转换", "This is some description", qode_get_text_transform_array());
        $row2->addChild("blog_slsimple_post_info_texttransform", $blog_slsimple_post_info_texttransform);

			$blog_slsimple_post_info_google_fonts = new QodeField("fontsimple","blog_slsimple_post_info_google_fonts","-1","字体系列","This is some description");
        $row2->addChild("blog_slsimple_post_info_google_fonts", $blog_slsimple_post_info_google_fonts);

        $blog_slsimple_post_info_fontstyle = new QodeField("selectblanksimple", "blog_slsimple_post_info_fontstyle", "", "字体风格", "This is some description", qode_get_font_style_array());
        $row2->addChild("blog_slsimple_post_info_fontstyle", $blog_slsimple_post_info_fontstyle);

        $row3 = new QodeRow();
        $group5->addChild("row3", $row3);

        $blog_slsimple_post_info_fontweight = new QodeField("selectblanksimple", "blog_slsimple_post_info_fontweight", "", "字体粗细", "This is some description", qode_get_font_weight_array());
        $row3->addChild("blog_slsimple_post_info_fontweight", $blog_slsimple_post_info_fontweight);

			$blog_slsimple_post_info_letterspacing = new QodeField("textsimple","blog_slsimple_post_info_letterspacing","","字符间距（px）","This is some description");
        $row3->addChild("blog_slsimple_post_info_letterspacing", $blog_slsimple_post_info_letterspacing);

	$group6 = new QodeGroup("博客幻灯片间距", "定义博客幻灯片内容间距");
        $panel4->addChild("group6", $group6);

        $row1 = new QodeRow();
        $group6->addChild("row1", $row1);

			$blog_slsimple_title_bottom_margin = new QodeField("textsimple","blog_slsimple_title_bottom_margin","","标题下边距 (px)","This is some description");
        $row1->addChild("blog_slsimple_title_bottom_margin", $blog_slsimple_title_bottom_margin);

			$blog_slsimple_post_info_bottom_margin = new QodeField("textsimple","blog_slsimple_post_info_bottom_margin","","文章信息下边距 (px)","This is some description");
        $row1->addChild("blog_slsimple_post_info_bottom_margin", $blog_slsimple_post_info_bottom_margin);

			$blog_slsimple_excerpt_bottom_margin = new QodeField("textsimple","blog_slsimple_excerpt_bottom_margin","","摘要下边距 (px)","This is some description");
        $row1->addChild("blog_slsimple_excerpt_bottom_margin", $blog_slsimple_excerpt_bottom_margin);

	$group7 = new QodeGroup("框风格", "定义框风格");
        $panel4->addChild("group7", $group7);

        $row1 = new QodeRow();
        $group7->addChild("row1", $row1);

			$blog_slider_box_background_color = new QodeField("colorsimple","blog_slider_box_background_color","","背景颜色","This is some description");
        $row1->addChild("blog_slider_box_background_color", $blog_slider_box_background_color);

			$blog_slider_box_background_opacity = new QodeField("textsimple","blog_slider_box_background_opacity","","背景透明度 (0-1)","This is some description");
        $row1->addChild("blog_slider_box_background_opacity", $blog_slider_box_background_opacity);

			$blog_slider_box_border_color = new QodeField("colorsimple","blog_slider_box_border_color","","边框颜色","This is some description");
        $row1->addChild("blog_slider_box_border_color", $blog_slider_box_border_color);

			$blog_slider_box_border_opacity = new QodeField("textsimple","blog_slider_box_border_opacity","","边框透明度 (0-1)","This is some description");
        $row1->addChild("blog_slider_box_border_opacity", $blog_slider_box_border_opacity);

        $row2 = new QodeRow();
        $group7->addChild("row2", $row2);

			$blog_slider_box_padding_top = new QodeField("textsimple","blog_slider_box_padding_top","","上填充 (px)","This is some description");
        $row2->addChild("blog_slider_box_padding_top", $blog_slider_box_padding_top);

			$blog_slider_box_padding_right = new QodeField("textsimple","blog_slider_box_padding_right","","右填充（px）","This is some description");
        $row2->addChild("blog_slider_box_padding_right", $blog_slider_box_padding_right);

			$blog_slider_box_padding_bottom = new QodeField("textsimple","blog_slider_box_padding_bottom","","下填充 (px)","This is some description");
        $row2->addChild("blog_slider_box_padding_bottom", $blog_slider_box_padding_bottom);

			$blog_slider_box_padding_left = new QodeField("textsimple","blog_slider_box_padding_left","","左填充（px）","This is some description");
        $row2->addChild("blog_slider_box_padding_left", $blog_slider_box_padding_left);

        $row3 = new QodeRow();
        $group7->addChild("row3", $row3);

			$blog_slider_box_width = new QodeField("textsimple","blog_slider_box_width","","宽 (%)","This is some description");
        $row2->addChild("blog_slider_box_width", $blog_slider_box_width);

        $panel5 = new QodePanel("分页风格", "panel_pagination");
        $blogPage->addChild("panel5", $panel5);

        $group_pagination_styles = qode_add_admin_group(array(
            'name'          => 'group_pagination_styles',
            'title'         => '分页风格',
            'description'   => '定义分页风格',
            'parent'        => $panel5
        ));

        $row_pagination_colors = qode_add_admin_row(array(
            'name'      => 'row_pagination_colors',
            'parent'    => $group_pagination_styles
        ));

            qode_add_admin_field(
                array(
                    'name'          => 'pagination_border_color',
                    'type'          => 'colorsimple',
                    'label'         => '分页边框颜色',
                    'description'   => '',
                    'parent'        => $row_pagination_colors
                )
            );
            qode_add_admin_field(
                array(
                    'name'          => 'pagination_number_color',
                    'type'          => 'colorsimple',
                    'label'         => '分页数字颜色',
                    'description'   => '',
                    'parent'        => $row_pagination_colors
                )
            );
            qode_add_admin_field(
                array(
                    'name'          => 'pagination_hover_background_color',
                    'type'          => 'colorsimple',
                    'label'         => '分页悬停/活动背景颜色',
                    'description'   => '',
                    'parent'        => $row_pagination_colors
                )
            );
            qode_add_admin_field(
                array(
                    'name'          => 'pagination_hover_number_color',
                    'type'          => 'colorsimple',
                    'label'         => '分页悬停/活动数字颜色',
                    'description'   => '',
                    'parent'        => $row_pagination_colors
                )
            );


        $row_pagination_measures = qode_add_admin_row(array(
            'name'      => 'row_pagination_measures',
            'parent'    => $group_pagination_styles
        ));

            qode_add_admin_field(
                array(
                    'name'          => 'pagination_width',
                    'type'          => 'textsimple',
                    'label'         => '分页宽度 (px)',
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );
            qode_add_admin_field(
                array(
                    'name'          => 'pagination_height',
                    'type'          => 'textsimple',
                    'label'         => '分页高度 (px)',
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );
            qode_add_admin_field(
                array(
                    'name'          => 'pagination_border_radius',
                    'type'          => 'textsimple',
                    'label'         => '分页边框半径 (px)',
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );
            qode_add_admin_field(
                array(
                    'name'          => 'pagination_border_width',
                    'type'          => 'textsimple',
                    'label'         => '分页边框宽度 (px)',
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );
            qode_add_admin_field(
                array(
                    'name'          => 'pagination_font_size',
                    'type'          => 'textsimple',
                    'label'         => '分页字体大小 (px)',
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );
            qode_add_admin_field(
                array(
                    'name'          => 'pagination_space',
                    'type'          => 'textsimple',
                    'label'         => '分页项目间距 (px)',
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );

    }
    add_action('qode_options_map','qode_blog_options_map',100);
}