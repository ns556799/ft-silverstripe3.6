<div class="article-swiper-container js-article-swiper">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <% loop $SliderImages %>
        <div class="swiper-slide">
          <div class="slider-img" style="background-image: url('$URL')">

          </div>
        </div>
      <% end_loop %>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
  </div>
</div>
