jQuery(document).ready(function () {
  jQuery('.autoplay').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow: "<div class=\'slick-prev\'><i class=\'fa fa-angle-left\'></i></div>",
    nextArrow: "<div class=\'slick-next\'><i class=\'fa fa-angle-right\'></i></div>"
  });
});
