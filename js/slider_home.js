jQuery(document).ready(function () {
  jQuery('.autoplay').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2004000,
    arrows: false,
    speed: 1000,
    prevArrow: "<div class=\'slick-prev\'><i class=\'fa fa-chevron-left\'></i></div>",
    nextArrow: "<div class=\'slick-next\'><i class=\'fa fa-chevron-right\'></i></div>",
    dots: false,

  });
  jQuery('.news-ticker').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    speed: 1500,
    prevArrow: jQuery('.slick-prev1'),
    nextArrow: jQuery('.slick-next2')
  });
  jQuery('.owl-carousel').owlCarousel({
    center: true,
    items:2,
    loop:true,
    margin:10,
    responsive:{
        600:{
            items:2
        }
    },
   autoplay: true,
   autoplayHoverPause:true,

});
});
