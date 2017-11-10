jQuery(document).ready(function () {
  jQuery('.autoplay').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    speed: 1000,
    prevArrow: "<div class=\'slick-prev\'><i class=\'fa fa-chevron-left\'></i></div>",
    nextArrow: "<div class=\'slick-next\'><i class=\'fa fa-chevron-right\'></i></div>"
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
});
