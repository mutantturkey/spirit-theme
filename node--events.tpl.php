<?php if(isset($teaser)): ?>
<a href="/node/<?php print $node->nid?>">
<div class="event-box">
  <div class="event-box-text">
    <span class="event-box-title-location">
      <?php print $node->title ?> 
    </span>
    <span class="event-box-date">
      | <?php print format_date(strtotime($node->field_date['und'][0]['value']), 'custom', 'D, M j | g:i A');?> 
       </span>
  <div class="event-box-blurb">
    <?php print $node->field_blurb['und'][0]['value'];?>
  </div>
    </div>  
  <div class="event-box-image">
    <img src="<?php print image_style_url("event", $node->field_display_image['und'][0]["uri"])?>"> </div>
</div>
</a>
<?php else: ?>

<div id="page" class="clearfix article">

  <?php include "header.php" ?>
  <?php include "tags.php" ?>

  <div id="article-header">
    <div id="header-left">

      <div class="location-and-section">
        EVENTS IN
        <?php print taxonomy_term_load($node->field_location['und'][0]["tid"])->name ?>
      </div>

      <?php if ($title): ?>
        <div id="title"> <?php print $title ?> </div>
      <?php  endif; ?>

        <div class="hr"></div>
        <div class= "author-date">
          <span>AT <?php print $node->field_location_name['und'][0]['value'] ?></span>
          <span class="date"> | <?php print format_date(strtotime($node->field_date['und'][0]['value']), 'custom', 'D, M j | g:i A');?> </span>
        </div>
      
    </div>
    <div id="header-right">
      <div class="tags inline">
        <div class="subtitle">tagged as</div>
        <ul id="tag-list" >
        </ul>
      </div>
      <div class="share inline">
        <div class="subtitle">share</div>
        <div class="inline">
          <div id="fb"></div>
          <div id="fb"></div>
        </div>
        <div class="inline ">
          <div id="fb"></div>
          <div id="fb"></div>
        </div>
      </div>
    </div>
  </div>
  <div id="article-body">
    <div id="article-left">
      <?php print render($title_suffix); ?>      

      <div id="main-content" class="clearfix">
        <?php print render($page['content']); ?>
      </div>

      <?php print $feed_icons; ?>
    </div>
    <div id="article-right">
      <div class="related-articles">
        <?php $block = module_invoke('block', 'related_articles', '3'); ?>
        <?php print render($block['']);?>
      </div>
    <span class="ad"><img src=http://placehold.it/300x300></span>
    </div>
  </div>

  <?php include "footer.php" ?>
  <pre>
  <?php print_r($node); ?>
  </pre>

</div>
<?php endif; ?>
