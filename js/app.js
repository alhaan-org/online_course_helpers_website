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
    margin: 5,
    responsive: {
      0: {
        loop: true,
        items: 1.3,
        center: true,
      },

      992: {
        loop: true,
        margin: 15,
        items: 3,
        center: false,
      },
    },
  });

  $(".slider-images").owlCarousel({
    dots: false,
    nav: false,
    autoPlay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    margin: 10,
    responsive: {
      0: {
        loop: true,
        items: 1.3,
        center: true,
      },

      1000: {
        loop: true,
        margin: 1,
        items: 4.5,
        center: false,
      },
    },
  });

  $("#platform-filters-buttons").on("click", ".btn", function () {
    const selectedPlatform = $(this).data("platform");

    $(this)
      .siblings(".btn")
      .removeClass("btn-dark active")
      .addClass("btn-outline-dark");

    $(this).removeClass("btn-outline-dark").addClass("btn-dark active");

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
