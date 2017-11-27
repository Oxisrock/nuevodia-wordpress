  jQuery(document).ready(function () {
  jQuery('#carrusel').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 1,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: jQuery('.prev-btn'),
  nextArrow: jQuery('.next-btn'),
  responsive: [
    {
      breakpoint: 1681,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '155px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 1501,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '155px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 1025,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
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
jQuery('.slider_post').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  speed: 1000,
  prevArrow: "<div class=\'slick-prev\'><i class=\'fa fa-chevron-left\'></i></div>",
  nextArrow: "<div class=\'slick-next\'><i class=\'fa fa-chevron-right\'></i></div>",
  dots: false,

});
jQuery('.slider-img').children().addClass('img-responsive')

});
