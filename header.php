<div id="floating-header" class="floating-header clearfix">
  <div id="float-bar">
    <div id="left-header">&nbsp;</div>
    <div id="search-button-container" class="clearfix right-header">
      <div id="search-button" class="search-button">Search</div>
    </div> 
    <?php if ($linked_logo_img): ?>
      <div id="logo-parent">
        <span id="logo" class=""><?php print $linked_logo_img; ?></span>
      </div>
    <?php endif; ?>
    <?php if ($main_menu_links): ?>
    <div id="site-menu" class="clearfix">
        <?php print $main_menu_links; ?>
        <?php /* print $secondary_menu_links;s*/ ?>
    </div>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </div>
  <?php // this is the floating search bar ?>
  <div class="search-floater">
  <?php if ($page['search_box']): ?>
    <div id="search-box" class="clearfix"><?php print render($page['search_box']); ?></div>
  <?php endif; ?>
  </div>
</div>
