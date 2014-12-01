<? include "article-variables.php" ?>
  <img src="<?php print image_style_url("1500x750", $image)?>">
  <div class="slide-info">
  <a href="<?=$url?>" class="fade">
      <span class="category"><?=$section ?> in <?=$location ?></span>
      <h3><?=$node->title; ?></h3>
      <hr class="tiny"/>
      <p><?=$summary?></p>
      <?php if($author): ?>
        <span class="by">By <?=$author?></span>
      <?php endif ?>
    </a>
  </div>
  <div class="btn layover more">More in <?print $location?></div>
  <img class="slide-location" src="/sites/all/themes/spirit/assets/images/<?=$location?>-red.svg" alt="<?=$location?>" />
