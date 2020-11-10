"use strict";

jQuery(function ($) {
  //スムーススクロール
  $('a[href^="#"]').on("click", function () {
    var speedRate = .1;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var goal = target.offset().top;
    var start = $(window).scrollTop();
    $("body,html").animate({
      scrollTop: goal
    }, Math.abs(start - goal) * speedRate, 'linear');
    return false;
  }); //ＴＯＰに戻るボタン

  var page_top = $("#gotop");
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      page_top.fadeIn();
    } else {
      page_top.fadeOut();
    }
  });

  $(".wpcf7-form input[type='submit'], .wpcf7-form button").click(function(event) {
      $( document ).one( "ajaxComplete", function(event, xhr, settings) {
        var data = xhr.responseText;
        var jsonResponse = JSON.parse(data);
        // console.log(jsonResponse);
        if(! jsonResponse.hasOwnProperty('into') || $('.wpcf7' + jsonResponse.into).length === 0) return;
        // alert(jsonResponse.message);
        $.fancybox.open(
          '<div class="message">' + jsonResponse.message + '</div>',
          {
            smallBtn : true,
            toolbar : false
          }
        );
      });
    });
});