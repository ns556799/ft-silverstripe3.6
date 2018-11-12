<div id="disclaimer" class="o-grid-container disclaimer">
  <div class="disclaimer__box" id="paid-post-tooltip-target">
    <span class="disclaimer__paid-post">Paid Post</span>
    <span class="disclaimer__sponsor">by $GetParentContext.Title</span>
    <span class="disclaimer__info">i</span>
  </div>
  <div id="paid-post-tooltip" data-o-component="o-tooltip" data-o-tooltip-position="right"
       data-o-tooltip-target="paid-post-tooltip-target" data-o-tooltip-show-on-construction="true"
       data-o-tooltip-close-after="5" data-o-tooltip-toggle-on-click="true" role="tooltip"
       class="o-tooltip o-tooltip--arrow-left o-tooltip-arrow--align-middle"
       style="display: none; top: -1.30469px; left: 205.188px; opacity: 0;">
    <div class="o-tooltip-content">
      <p>This content was produced by the advertising department of the Financial Times, in collaboration with <span
        class="paid-post-tooltip__sponsor">$GetParentContext.Title</span></p>
    </div>
    <button class="o-tooltip-close" aria-label="Close tooltip" title="Close tooltip"></button>
  </div>
</div>

<% if not $EnableHeroImage %>
  <div class="full-bleed sponsor-hero" style="background-image: url('$ArticleImage.URL')">
<% end_if %>
</div>

<% include StickyRelated %>

<main class="post-container o-grid-container">
  <div class="o-grid-row">
    <% include SocialShare %>

    <div data-o-grid-colspan="12"
      <% if not $EnableHeroImage %>
         class="topper topper-content"
      <% end_if %> >
      $Content
      <% if $StoryDate %>
        <div class="article-date-container">
          <span class="p-date"> $getDateString </span>
      </div>
        <% end_if %>
    </div>
    <% include SocialShareMobile %>

    $BlockArea(AfterContent)
    <% include SocialShareMobile %>
    $BlockArea(AfterSocialMobile)
    <div data-o-grid-colspan="M6 S6" class="left">
      <a class="cta cta--fill cta-sponsor" href="$GetParentContext.ClientLink">
        Find out more on $GetParentContext.Title
      </a>
    </div>

    <% if $Disclaimer %>
      <% include Disclaimer %>
    <% end_if %>
  </div>

</main>

<% include RelatedFooter %>
