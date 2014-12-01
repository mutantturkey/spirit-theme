<? include "article-variables.php" ?>
<a href="<?=$url?>">
<div class="fade">
  <div class="img-wrap">
    <div class="location-badge <?=$location?>"><img src="/sites/all/themes/spirit/assets/images/<?=$location;?>-black.png"></div>
    <img src="<?php print image_style_url("470_350", $image)?>">
  </div>
  <div class="info-wrap">
    <h4><?=$node->title ?></h4>
    <span class="category"><?=$section ?> in <?=$location ?></span>
    <p><?=$summary?></p>
    <?php if($author): ?>
      <span class="by">By <?=$author?></span>
    <?php endif ?>
  </div>
</div>
</a>
