import Swiper from 'swiper'

const swiperContainers = Array.from(document.querySelectorAll('.js-related-footer'))
swiperContainers.forEach((swiperContainer) => {
  const container = swiperContainer.querySelector('.swiper-container')
  const next = swiperContainer.querySelector('.swiper-button-next')
  const prev = swiperContainer.querySelector('.swiper-button-prev')
  const pagination = swiperContainer.querySelector('.swiper-pagination')
  const scrollbar = swiperContainer.querySelector('.swiper-scrollbar')

  const slider = new Swiper(container, {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 2,
    spaceBetween: 10,
    // Navigation arrows
    navigation: {
      nextEl: next,
      prevEl: prev,
    },
    pagination: {
      el: pagination,
    },
    breakpoints: {
      // when window width is <= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 10
      },
      // when window width is <= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 20
      },
    }

  })
})
