/* Sticky Navigation */
$(function() {

  var sticky = $('.sticky');
  var contentOffset;
  var nav_height;

  if (sticky.length) {

    if ( sticky.data('offset') ) {
      contentOffset = sticky.data('offset');
    }
    else {
      contentOffset = sticky.offset().top;
    }
    nav_height = sticky.height();
  }

  var scrollTop = $(window).scrollTop();
  var window_height = $(window).height();
  var doc_height = $(document).height();

  $(window).bind('resize', function() {
    scrollTop = $(window).scrollTop();
    window_height = $(window).height();
    doc_height = $(document).height();
    navHeight();
  });

  $(window).bind('scroll', function() {
    stickyNav();
  });

  function navHeight() {
    sticky.css('max-height', window_height + 'px');
  }

  function stickyNav() {
    scrollTop = $(window).scrollTop();
    if (scrollTop > contentOffset) {
      sticky.addClass('fixed');
    }
    else {
      sticky.removeClass('fixed');
    }
  }

});

$('document').ready(function() {
  var nav_height = 70;

  $("a[data-role='smoothscroll']").click(function(e) {
    e.preventDefault();

    var position = $($(this).attr("href")).offset().top - nav_height;

    $("body, html").animate({
      scrollTop: position
    }, 1000 );
    return false;
  });
});

$('document').ready(function() {
  // Back to top
  var backTop = $(".back-to-top");

  $(window).scroll(function() {
    if($(document).scrollTop() > 400) {
      backTop.css('visibility', 'visible');
    }
    else if($(document).scrollTop() < 400) {
      backTop.css('visibility', 'hidden');
    }
  });

  backTop.click(function() {
    $('html').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
});


$('document').ready(function() {

  // Loader
  $(window).on('load', function() {
    $('.loader-container').fadeOut();
  });

  // Tooltips
  $('[data-toggle="tooltip"]').tooltip();

  // Popovers
  $('[data-toggle="popover"]').popover();

  // Page scroll animate
  new WOW().init();
});

$('document').ready(function() {
  $('#testimonials').owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
  });
});


/*
 *  Counter
 *
 *  Require(" jquery.animateNumber.min.js ", " jquery.waypoints.min.js ")
 */
$(document).ready(function() {
  var counterInit = function() {
    if ( $('.counter-section').length > 0 ) {
      $('.counter-section').waypoint( function( direction ) {

        if( direction === 'down' && !$(this.element).hasClass('animated') ) {

          var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
          $('.number').each(function(){
            var $this = $(this),
              num = $this.data('number');
            $this.animateNumber(
              {
                number: num,
                numberStep: comma_separator_number_step
              }, 5000
            );
          });

        }

      } , { offset: '95%' } );
    }

  }

  counterInit();
});

$(document).ready(function (e) {
    $('#review').on('submit',(function(e) {
        e.preventDefault(); // делаем отмену действия браузера и формируем ajax
        let formData = new FormData($('#review')[0]);
        // данные с формы завернем в переменную для ajax
        $.ajax({
            type:'POST', // тип запроса
            url: $(this).attr('action'), // куда будем отправлять, можно явно указать
            data:formData, // данные, которые передаем
            cache:false, // кэш и прочие настройки писать именно так (для файлов)
            // (связано это с кодировкой и всякой лабудой)
            contentType: false, // нужно указать тип контента false для картинки(файла)
            processData: false, // для передачи картинки(файла) нужно false
            success:function(data){ // в случае успешного завершения
                // Очищаем поля
                $("#review").find("input[type=text], textarea,input[type=file]").val("");

                $('#result').html(`<div class="alert alert-success" role="alert">Форма успешно отправлена</div>`);

                const down = () => {

                    $("#result").animate({
                            height: "0px", // высоту к нулю
                        }, 600, function() {
                            $(this).remove(); // удаляем из DOM (если требуется, если же нет, то "закомментируйте" эту строку)
                        }
                    );
                }
                setInterval(down,4000)

            },
            error: (err) =>{ // в случае провала
                const message = Object.values(err.responseJSON.errors).join('<br/>')

                $('#result').html(`<div class="alert alert-danger" role="alert">${message}</div>`).fadeIn();
            }
        });
    }));
});

