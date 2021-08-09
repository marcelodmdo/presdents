$(document).ready(function(){
      
    $('.tratamentos-slider').slick({
      dots: true,
      slidesToScroll: 2,
      infinite: false,
      speed: 800,
      fade: false,
      centerMode: false,
      autoplay: true,
      arrows: true,
      mobileFirst: true,
      zIndex: 10,
      responsive: [
        {
          breakpoint: 1900,
          settings: {
            // slidesToShow: 8,
            arrows: true,
            mobileFirst: true,
          }
        },
        {
          breakpoint: 1440,
          settings: {
            slidesToShow: 6,
            arrows: true,
            mobileFirst: true,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToScroll: 2,
            slidesToShow: 5,
            arrows: true,
            // infinite: true,
            // centerMode: true,
            // centerPadding: '10px',
            mobileFirst: false,
          }
        },
        {
          breakpoint: 768,
          settings: {
            infinite: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 4
          }
        },
        {
          breakpoint: 480,
          settings: {
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 0,
          settings: {
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
          }
        }
      ]
    });
  });