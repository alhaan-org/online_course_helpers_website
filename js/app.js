$(document).ready(function () {
  const $slider = $(".slider-images");
  const $horizontalScrollWrapper = $(".horizontal-scroll-wrapper");
  const $horizontalScrollCards = $(".course-card");
  let isDown = false;
  let startX;
  let scrollLeft;

  $slider.on("mousedown", function (e) {
    isDown = true;
    $slider.addClass("active");
    startX = e.pageX - $slider.offset().left;
    scrollLeft = $slider.scrollLeft();
  });

  $(document).on("mouseup mouseleave", function () {
    isDown = false;
    $slider.removeClass("active");
  });

  $slider.on("mousemove", function (e) {
    if (!isDown) return;
    e.preventDefault();

    const x = e.pageX - $slider.offset().left;
    const walk = (x - startX) * 2;
    $slider.scrollLeft(scrollLeft - walk);
  });

  
  $horizontalScrollCards.on("click", () => {
    let direction = 1;
    const value = 300;
    const currentScroll = $horizontalScrollWrapper.scrollLeft();
  
    const maxScroll = $horizontalScrollWrapper[0].scrollWidth - $horizontalScrollWrapper.outerWidth();

   
    if (currentScroll >= maxScroll - 5)
        direction = -1; 
  
    else if (currentScroll <= 0) {
        direction = 1; 
    }

    $horizontalScrollWrapper.animate({
        scrollLeft: currentScroll + (value * direction)
    }, 300);
  });

  $(window).scroll(function () {
    if ($(this).width() > 992) {
      $(".navbar").css("background-color", "#111 !important");
    }
    if ($(this).scrollTop() > 10) {
      $(".navbar").addClass("scrolled");
    } else {
      $(".navbar").removeClass("scrolled");
    }
  });
});
