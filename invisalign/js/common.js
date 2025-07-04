
//menu
$(function() {
 $(".menu-btn, nav ul li a").click(function() {
  $('.menu-btn, nav').toggleClass('active');
 });
});

// スマホナビメニュー + -
$(function(){
    $('nav ul li').click(function(){
        $(this).addClass('active');
    });
});

//スマホナビメニュー アコーディオン
if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
	$(".menu2 li.open_text").on("click", function() {
	$(this).next().slideToggle();
	});
}

//スムーズスクロール
$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

//症例スライダー
$(document).ready(function () {
    $('.case-slides').slick({
        slidesToShow: 1,
        slidesToScroll: 3,
        centerMode: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        variableWidth: true,
        prevArrow: $('.clinic-prev'),
        nextArrow: $('.clinic-next')
    });
});

// コンタクトフォーム
$(function(){
    $('select').click(function(){
        $(this).addClass('active');
    });
});


// 質問 アコーディオン
$(function(){
$(".qa dl dt").on("click", function() {
$(this).next().slideToggle();
});
});

//質問メニュー + -
$(function(){
    $('.qa dt.open_text').click(function(){
        $(this).toggleClass('active');
    });
});

// フェードイン
$(function(){
  $('.fade-in').on('inview', function(event, isInView){
    if(isInView){
      $(this).addClass('active');
    }
  });
});
