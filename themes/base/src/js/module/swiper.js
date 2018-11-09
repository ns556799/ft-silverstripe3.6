import Swiper from 'swiper'

const swiperContainers = Array.from(document.querySelectorAll('.js-article-swiper'))
swiperContainers.forEach((swiperContainer) => {
  const container = swiperContainer.querySelector('.swiper-container')
  const next = swiperContainer.querySelector('.swiper-button-next')
  const prev = swiperContainer.querySelector('.swiper-button-prev')
  const pagination = swiperContainer.querySelector('.swiper-pagination')
  const scrollbar = swiperContainer.querySelector('.swiper-scrollbar')

  const slider = new Swiper(container, {
    direction: 'horizontal',
    loop: true,
    autoplay: {
      delay: 3000,
    },
    // If we need pagination
    pagination: {
      el: pagination,
    },

    // Navigation arrows
    navigation: {
      nextEl: next,
      prevEl: prev,
    },

    // And if we need scrollbar
    scrollbar: {
      el: scrollbar,
    },
  })
})
