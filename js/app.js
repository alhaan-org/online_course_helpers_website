$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 10) {
      $(".navbar").addClass("scrolled");
    } else {
      $(".navbar").removeClass("scrolled");
    }
  });
  
  const $slider = $(".slider-images");
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
});
