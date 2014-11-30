<?php


/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<div class="container top">
  <div class="slideshow top">
  <div class="image-area">
    <ul class="slides">
    <?php $right = 0; ?>
    <?php foreach ($rows as $id => $row): ?>
      <?php $div = ($right % 2) ? '<li class="right">' : '<li>'; ?>
      <?php print $div?><?php print $row; ?></li>
      <?php $right++ ?>
    <?php endforeach; ?>
  </ul>
  <div class="next">Next</div>
  <div class="prev">Previous</div>
  </div>
  <ul class="detailpager"></ul>
  <div class="slidePager"></div>
</div>
