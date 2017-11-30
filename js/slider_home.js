  jQuery(document).ready(function () {
  jQuery('#carrusel').slick({
  centerMode: true,
  centerPadding: '180px',
  slidesToShow: 1,
  arrows: true,
  autoplay: false,
  autoplaySpeed: 2000,
  prevArrow: jQuery('.prev-btn'),
  nextArrow: jQuery('.next-btn'),
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 1681,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '200px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 1501,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '200px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 1025,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '50px',
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
  autoplay: false,
  autoplaySpeed: 2000,
  arrows: true,
  speed: 1000,
  prevArrow: jQuery('.prev-btn-opinion'),
  nextArrow: jQuery('.next-btn-opinion'),
  dots: false,

});
jQuery('.slider_post_inter').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  speed: 1000,
  prevArrow: jQuery('.prev-btn-inter'),
  nextArrow: jQuery('.next-btn-inter'),
  dots: false,

});

jQuery('.slider-img').children().addClass('img-responsive')

});
