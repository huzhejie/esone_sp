<?php

//Testimonials

$qodeTestimonials = new QodeMetaBox("testimonials", "客户评价");
$qodeFramework->qodeMetaBoxes->addMetaBox("testimonials",$qodeTestimonials);

	$qode_testimonial_author = new QodeMetaField("text","qode_testimonial-author","","作者","输入作品名");
	$qodeTestimonials->addChild("qode_testimonial-author",$qode_testimonial_author);

	$qode_testimonial_text = new QodeMetaField("textarea","qode_testimonial-text","","文字","输入客户评价文字");
	$qodeTestimonials->addChild("qode_testimonial-text",$qode_testimonial_text);

	$qode_testimonial_website = new QodeMetaField("text","qode_testimonial_website","","网站","输入作者网站完整网址");
	$qodeTestimonials->addChild("qode_testimonial_website",$qode_testimonial_website);

	$qode_testimonial_rating = new QodeMetaField("select","qode_testimonial_rating","","评分","选择此客户评价评分",array( 
		"" => "",
	   	"1" => "1分，共5分",
	   	"2" => "2分，共5分",
	   	"3" => "3分，共5分",
	   	"4" => "4分，共5分",
	   	"5" => "5分，共5分"
	 ));
	$qodeTestimonials->addChild("qode_testimonial_rating",$qode_testimonial_rating);