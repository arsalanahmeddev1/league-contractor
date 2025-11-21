import './bootstrap';

$(document).ready(function () {
  $('.menu-toggle').click(function () {
    $('.primary-navs').toggleClass('active');
  });
  $('.featured-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    centerMode: true,
    centerPadding: '150px',
    slidesToScroll: 1,
    prevArrow: $('.featured-prev-arrow'),
    nextArrow: $('.featured-next-arrow'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
        }
      },
    ]
  });
  $('.service-cat-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: $('.service-cat-prev-arrow'),
    nextArrow: $('.service-cat-next-arrow'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});

