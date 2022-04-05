"use strict"

$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger,.header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
    $('.new__slider').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 2,
        speed: 700,
        arrows: false,
        
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });
    $('.headline__btn-prev').on('click', function() {
        $('.new__slider').slick('slickPrev');
      });
      $('.headline__btn-next').on('click', function() {
        $('.new__slider').slick('slickNext');
      });
      $('.headline2__btn-prev').on('click', function() {
        $('.short__slider2').slick('slickPrev');
      });
      $('.headline2__btn-next').on('click', function() {
        $('.short__slider2').slick('slickNext');
      });
      $('.headline3__btn-prev').on('click', function() {
        $('.description__slider3').slick('slickPrev');
      });
      $('.headline3__btn-next').on('click', function() {
        $('.description__slider3').slick('slickNext');
      });
      $('.short__slider2').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 2,
        speed: 700,
        arrows: false,
        
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                }
              },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });
    $('.description__slider3').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 700,
        arrows: false,
        
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                }
              },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });
});

