<?php $section=strtolower(taxonomy_term_load($node->field_section['und'][0]["tid"])->name); ?>
<?php $location=strtolower(taxonomy_term_load($node->field_location['und'][0]["tid"])->name); ?>
<a href="/node/<?php print $node->nid?>">
<div class="fade">
  <div class="img-wrap">
    <div class="location-badge <?php print $location; ?>"><img src="/sites/all/themes/spirit/assets/images/<?php print $location;?>-black.png"></div>
    <img src="<?php print image_style_url("470_350", $node->field_image['und'][0]["uri"])?>">
  </div>
  <div class="info-wrap">
    <h4><?php print $node->title ?></h4>
    <span class="category"><?php print $section ?> in <?php print $location ?></span>
    <p><?php print text_summary($node->body[LANGUAGE_NONE][0]['value'], NULL, NULL);?></p>
    <?php if($node->field_author_name): ?>
      <span class="by">By <?php print $node->field_author_name['und'][0]['value']; ?></span>
    <?php endif ?>
  </div>
</div>
</a>
