(function($) {

  new WOW().init();

  jQuery(window).load(function() {
    jQuery("#preloader").delay(100).fadeOut("slow");
    jQuery("#load").delay(100).fadeOut("slow");
  });
  
  //jQuery to collapse the navbar on scroll
  $(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
      $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
      $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
  });

  //jQuery for page scrolling feature - requires jQuery Easing plugin
  
	$(document).ready(function(){
        $("#menu").on("click","a", function (event) {     //отменяем стандартную обработку нажатия по ссылке
            event.preventDefault();            //забираем идентификатор бока с атрибута href
            var id  = $(this).attr('href'),    //узнаем высоту от начала страницы до блока на который ссылается якорь
                top = $(id).offset().top;     //анимируем переход на расстояние - top за 1500 мс
            $('body,html').animate({scrollTop: top}, 1500);
        });
    });
    
})(jQuery);
