$(document).ready(function () {
  const colorStateChangeOnScrollDown = () => {
    const $navbar = $(".navbar");
    const $scrollTop = $(window).scrollTop();

    if ($scrollTop > 10) {
      $navbar.addClass("scrolled");
    } else {
      $navbar.removeClass("scrolled");
    }
  };

  $(window).scroll(function () {
    colorStateChangeOnScrollDown();
  });

  $(".scroll-wrapper").owlCarousel({
    dots: false,
    nav: false,
    margin: 1,
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

  $("#platform-filters").on("click", ".btn", function () {
    const selectedPlatform = $(this).data("platform");
    $(".btn").removeClass("btn-dark active").addClass("btn-secondary");
    $(this).removeClass("btn-secondary").addClass("btn-dark active");

    filterPlatformCards(selectedPlatform);
  });

  function filterPlatformCards(platform) {
    const $allCards = $(".card-helpers");
    $allCards.hide();

    // Show only the cards that match the platform
    $allCards.filter('[data-platform="' + platform + '"]').fadeIn(400);
  }

  colorStateChangeOnScrollDown();
});
