<?php if(isset($teaser)): ?>
<a href="/node/<?php print $node->nid?>">
<div class="article-box">
  <div class="article-box-image"><img src="<?php print image_style_url("homepage_article", $node->field_image['und'][0]["uri"])?>"></div>
  <div class="article-box-text">
    <div class="article-box-location-and-section location-and-section"><?php print taxonomy_term_load($node->field_section['und'][0]["tid"])->name ?> in <?php print taxonomy_term_load($node->field_location['und'][0]["tid"])->name ?></div>
    <div class="article-box-title"><?php print $node->title ?></div>
    <div class="article-box-blurb"><?php print $node->body[LANGUAGE_NONE][0]['value'];?></div>
  </div>
</div>
</a>
<?php else: ?>

<div id="page" class="clearfix article">

  <?php include "header.php" ?>
  <?php include "tags.php" ?>

  <div id="article-header">
    <div id="header-left">

      <div class="location-and-section">
        <?php print taxonomy_term_load($node->field_section['und'][0]["tid"])->name ?>
        in
        <?php print taxonomy_term_load($node->field_location['und'][0]["tid"])->name ?>
      </div>

      <?php if ($title): ?>
        <div id="title"> <?php print $title ?> </div>
      <?php  endif; ?>

        <div class="hr"></div>
        <div class= "author-date">
          <span class="by">BY</span>
          <span class="author"><?php print user_load($node->uid)->name; ?></span>
          <span class="date"> | <?php print date( 'D, M j, Y', $node->created);?> 
        </div>
      
    </div>
    <div id="header-right">
      <div class="tags inline">
        <div class="subtitle">tagged as</div>
        <ul id="tag-list" >
          <?php get_tags($node->field_tags['und'], 5); ?>
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

      <div id="main-content" class="clearfix">
        <div class="article-box-image"><img src="<?php print image_style_url("large", $node->field_image['und'][0]["uri"])?>"></div>
        <?php print render($node->body[LANGUAGE_NONE][0]['value']); ?>
      </div>

      <?php print $feed_icons; ?>
    </div>
    <div id="article-right">
    <span class="ad"><img src="http://placehold.it/300x300&text=300x300 AD SPOT"></span>
      <div class="related-articles">
        <div class="mini-header">Related Articles</div>
        <div class="mini-blurb">
          <img src="http://placehold.it/60x60/a6e6a6/ffffff/&text=IMG">
          <div class="mini-title">
          Related article title number one
          </div>
        </div>
        <div class="mini-blurb">
          <img src="http://placehold.it/60x60/e6a6a6/ffffff/&text=IMG">
          <div class="mini-title">
          Related article title number two 
          </div>
        </div>
        <div class="mini-blurb">
          <img src="http://placehold.it/60x60/a6e6e6/ffffff/&text=IMG">
          <div class="mini-title">
          Related article title number three
          </div>
        </div>
        <div class="mini-blurb">
          <img src="http://placehold.it/60x60/e6e6a6/ffffff/&text=IMG">
          <div class="mini-title">
          Related article title number four
          </div>
        </div>
      </div>
    <span class="ad"><img src="http://placehold.it/300x300&text=300x300 AD SPOT"></span>
      <div class="neighborhood-articles">
        <div class="mini-header">Neighborhood Articles</div>
        <div class="mini-blurb">
          <div class="mini-title">
          neigborhood article one
          </div>
        </div>
        <div class="mini-blurb">
          <div class="mini-title">
          neigborhood article two 
          </div>
        </div>
        <div class="mini-blurb">
          <div class="mini-title">
          neigborhood article three
          </div>
        </div>
        <div class="mini-blurb">
          <div class="mini-title">
          neigborhood article four
          </div>
        </div>
      </div>

    <span class="ad"><img src="http://placehold.it/300x300&text=300x300 AD SPOT"></span>

      <div class="top24-articles">
        <div class="mini-header">top24 Articles</div>
        <div class="alt-mini-blurb-1">
          <img src="http://placehold.it/300x300/a6e6a6/ffffff/&text=IMG">
          <p>top24 article title number one</p>
        </div>
        <div class="alt-mini-blurb">
          <img src="http://placehold.it/140x140/e6a6a6/ffffff/&text=IMG">
          <p>top24 article title number two </p>
        </div>
        <div class="alt-mini-blurb">
          <img src="http://placehold.it/140x140/a6a6e6/ffffff/&text=IMG">
          <p>top24 article title number three</p>
        </div>
      </div>


    </div>
  </div>

  <?php include "footer.php" ?>

</div>
<?php endif; ?>
