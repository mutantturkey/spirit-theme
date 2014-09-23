<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="page" class="clearfix">

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
      <?php if ($main_menu_links || $secondary_menu_links): ?>
      <div id="site-menu" class="clearfix">
          <?php print $main_menu_links; ?>
          <?php print $secondary_menu_links; ?>
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


  <div id="main">
  <?php print render($title_prefix);
    /*
    <?php if ($title): ?>
      <div id="page-title-wrapper">
        <span id="left-doodle" class="doodle"></span>
        <h4 class="title" id="page-title"><?php print $title; ?></h4>
        <span id="right-doodle" class="doodle"></span>
      </div>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
    */
    ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="clearfix">
      <?php print render($page['content']); ?>
    </div>

    <?php print $feed_icons; ?>
  </div>

  <div id="footer">
      <div id="footer-region" class="clearfix">
        <?php print render($page['footer']); ?>
      </div>
      <div id="footer-image" class="clearfix">
      </div>
  </div>

</div>
