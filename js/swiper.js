var mySwiper = new Swiper ('.swiper-container', {
    loop: false,
    slidesPerView :  5,
    centeredSlides: false,
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        1300: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
        1100: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        850: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        550: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
    }
    // And if we need scrollbar
    //scrollbar: {
    //  el: '.swiper-scrollbar',
    //},
  })