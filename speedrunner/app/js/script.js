$(document).ready(function () {
  $(".carousel__inner").slick({
    dots: false,
    infinite: true,
    speed: 1200,
    slidesToShow: 1,
    adaptiveHeight: false,
    autoplay: false,
    autoplaySpeed: 2000,
    fade: true,
    cssEase: "linear",

    prevArrow:
      '<button type="button" class="slick-prev"><img src = ../img/slider/chevron-left-solid.png /></button>',
    nextArrow:
      '<button type="button" class="slick-next"><img src = ../img/slider/chevron-right-solid.png /></button>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
          dots: true,
          fade: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
        },
      },
    ],
  });
});
