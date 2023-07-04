var swiper = new Swiper(".slide-container", {
  slidesPerView: 4,
  spaceBetween: 20,
  loop: false,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1000: {
      slidesPerView: 4,
    },
  },
});


$(".textbox").keyup(function(){
  $(".subscribe-button").prop("disabled", $(this).val().trim().length == 0);
})
$(".subscribe-button").click(function(){
  $(".subscribe-form").hide();
  $(".to-expand").addClass("show");
  $(".to-fade-in").addClass("fade-in");
  $(".textbox").val("");
  $(".subscribe-button").prop("disabled", true);
  setTimeout(function(){
    $(".subscribe-form").show();
    $(".to-expand").removeClass("show");
    $(".to-fade-in").removeClass("fade-in");
  }, 6000);
});



