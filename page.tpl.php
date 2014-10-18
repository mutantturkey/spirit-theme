<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="page" class="clearfix">

  <?php include "header.php" ?>

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

  <?php include "footer.php" ?>

</div>
