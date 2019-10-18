jQuery(document).ready(function ($) {
  $(".side ul li").hover(function () {
    $(this).find(".sidebox-scroll").stop().animate({ "width": "210px" }, 200).css({ "opacity": "1", "filter": "Alpha(opacity=100)", "background": "#0dc6db" })
  }, function () {
    $(this).find(".sidebox-scroll").stop().animate({ "width": "58px" }, 200).css({ "opacity": "0.8", "filter": "Alpha(opacity=80)", "background": "#0dc6db" })
  });

  $('.scroll').click(function () {
    goTop();
  });

  $('.wechat-li').hover(function () {
    $('.wechat-image').show();
  }, function () {
    $('.wechat-image').hide();
  });

  function goTop() {
    $('html,body').animate({ 'scrollTop': 0 }, 600);
  }
  $('.gform_confirmation_message').text('感谢您的参与！我们已收到您提交的申请，请保持手机畅通，服务工程师将尽快与您联系。');
});