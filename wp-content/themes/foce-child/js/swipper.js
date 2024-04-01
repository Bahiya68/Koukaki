const swiper = new Swiper(".swiper", {
  effect: "coverflow",
  grabCursor: true,
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },

  coverflowEffect: {
    //rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  initialSlide: 1,
});
