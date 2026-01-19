
$(document).ready(function () {
//  Main Functionality Block

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
