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
    $('DOMContentLoaded', function() {
        const form = document.getElementById('form');
        form.addEventListener('submit', formSend);

        async function formSend(e) {
            e.preventDefault();

            let error = formValidate(form);
            
            let formData = new FormData(form);
            
            if (error === 0) {
                form.classList.add('_sending');
                let response = await fetch('sendmail.php', {
                    method: 'POST',
                    body: formData
                });
                if (respons.ok) {
                    let result = await respons.json();
                    alert(result.message);
                    form.reset(); 
                } else {
                    alert('Error');
                } 
            } 
        }
        
        
        function formValidate(form) {
            let error = 0;
            let formReq = document.querySelectorAll('._req');
            for (let index = 0; index < formReq.length; index++) {
                const input = formReq[index];
                formRemoveError(input);

                if (input.classList.contains('_email')) {
                    if (emailTest(input)) {
                        formAddError(input);
                        error++;
                    }
                } else {
                    if (input.value === '') {
                        formAddError(input);
                        error++;
                    }
                }
            }
            return error;
        }
        function formAddError(input) {
            input.parentElement.classList.add('_error');
            input.classList.add('_error');
        }
        function formRemoveError(input) {
            input.parentElement.classList.remove('_error');
            input.classList.remove('_error');
        }
        function emailTest(input) {
            return !/^\w+([\.-]&\w+)*@\w+([\.-]&w+)*(\.\w{2,8})+$/.test(input.value);
        }
    });
});

