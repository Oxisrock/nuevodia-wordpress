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
  jQuery(document).ready(function() {
    var owl = jQuery('.owl-carousel');
    owl.owlCarousel({
    center: true,
    items:2,
    loop:true,
    margin:0,
    navContainer: '.owl.nav',
    responsive:{
        600:{
            items:2
        }
    },
   autoplay: true,
   autoplayHoverPause: true,
   autoplayTimeout: 4000,
   autoHeight: true,

});
jQuery('.owl-next-btn').click(function() {
  owl.trigger('next.owl.carousel');
})
jQuery('.owl-prev-btn').click(function() {
  owl.trigger('prev.owl.carousel');
})
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});
});
});
