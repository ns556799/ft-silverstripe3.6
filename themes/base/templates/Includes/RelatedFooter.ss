<aside class="bottom-buffer bottom-sponsor ">
  <div class="post-container o-grid-container ">
    <div class="o-grid-row">
      <div data-o-grid-colspan="12">
        <h1>Related Content</h1>
      </div>

      <div data-o-grid-colspan="12">
        <div class="related-content-footer js-related-footer">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <% loop $GetAllArticles %>
                <% if $ID != $Top.ID %>
                  <div class="swiper-slide">
                    <a href="$Link" target="_self" class="">
                      <img src="$ArticleImage.URL" alt="$ArticleImage.Title">
                      <h2> $Title </h2>
                    </a>
                  </div>
                <% end_if %>
              <% end_loop %>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</aside>
