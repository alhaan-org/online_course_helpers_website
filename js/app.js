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

  $("#platform-filters").on("click", ".btn", function () {
    const selectedPlatform = $(this).data("platform");
    $(".btn").removeClass("btn-primary active").addClass("btn-outline-primary");
    $(this).removeClass("btn-outline-primary").addClass("btn-primary active");

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
