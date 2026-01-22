$(document).ready(function () {
  //  Main Functionality Block
  function colorStateChangeOnScrollDown() {
    const $navbar = $(".navbar");
    const $width = $(window).width();
    const $scrollTop = $(window).scrollTop();

    if ($scrollTop > 10) {
      $navbar.addClass("scrolled");
    } else {
      $navbar.removeClass("scrolled");
    }
  }

  $(window).scroll(function () {
    colorStateChangeOnScrollDown();
  });

  $(".scroll-wrapper").owlCarousel({
    dots: false,
    nav: false,
    margin: 15,
    responsive: {
      0: {
        items: 1.3,
        center: true,
      },

      992: {
        items: 3,
        center: false,
      },
    },
  });

  $(".slider-images").owlCarousel({
    dots: false,
    nav: false,
    margin: 10,
    responsive: {
      0: {
        items: 1.3,
        center: true,
      },

      1000: {
        items: 4,
        center: false,
      },
    },
  });
  // rerun the scroll function on page load
  colorStateChangeOnScrollDown();
});
