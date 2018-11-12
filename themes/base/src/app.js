import 'babel-polyfill'
import 'polyfill/customEvent'

// =utils
import 'util/breakpoints'
import 'util/detectTouch'

// =layout
// if (document.querySelector('.header')) {
//   import(/* webpackChunkName: "header" */ 'layout/header')
// }

// debug mode
if (document.querySelector('body').classList.contains('-debug')) {
  import(/* webpackChunkName: "debugger" */ 'util/debugger')
}

// =modules
if (document.querySelector('.js-article-swiper')) {
   import(/* webpackChunkName: "swiperBlock" */ 'module/swiper')
}
if (document.querySelector('.js-related-footer')) {
   import(/* webpackChunkName: "swiperBlock" */ 'module/related-slider')
}

if (document.querySelector('.js-video-block')) {
   import(/* webpackChunkName: "videoBlock" */ 'module/video')
}
if (document.querySelector('header')) {
   import(/* webpackChunkName: "headerScroll" */ 'module/header')
}
if (document.querySelector('.disclosure')) {
   import(/* webpackChunkName: "disclosureReveal" */ 'module/disclosure')
}

// =blocks
// if (document.querySelector('.m-blockname')) {
//   import(/* webpackChunkName: "blockName" */ 'block/blockName')
// }

// =pages
// if (document.querySelector('.page-specific')) {
//   import(/* webpackChunkName: "pageSpecific" */ 'page/pageSpecific')
// }
