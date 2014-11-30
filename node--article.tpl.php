<?php include 'head.php'; ?>
<body>
	<?php include 'header.php'; ?>
	<div class="article-fixed">
		<div id="textSize">
			<h5>Text Size</h5>
			<ul>
				<li class="reg-text active" alt="small">A</li>
				<li class="medium-text" alt="medium">A</li>
				<li class="large-text" alt="large">A</li>
			</ul>
		</div>
		<h5>Share</h5>
		<ul class="article-share">
			<li><a href="#"><img src="/sites/all/themes/spirit/assets/images/icons/fb-icon-blk.png"/><span>Facebook</span></a></li>
			<li><a href="#"><img src="/sites/all/themes/spirit/assets/images/icons/twit-icon-blk.png"/><span>Twitter</span></a></li>
			<li><a href="#"><img src="/sites/all/themes/spirit/assets/images/icons/mail-icon-blk.png"/><span>Email</span></a></li>
			<li><a href="#"><img src="/sites/all/themes/spirit/assets/images/icons/fb-icon-blk.png"/><span>Pinterest</span></a></li>
		</ul>
	</div>
	<div class="container">
		<div class="container article article-title-block">
			<span class="category">Sports in Bridesburg</span>
      <h2 class="article-title">
      <?php if ($title): ?><?php print $title ?>
      <?php  endif; ?>
      </h2>
      <span class="By">
        <?php if($node->field_author_name): ?>
          By <?php print $node->field_author_name['und'][0]['value']; ?> | 
        <?php endif ?>
       <?php print date( 'D, M j, Y', $node->created);?> 
      </span>
			<hr class="tiny"/>
		</div>
		<div class="container post article">
			<div class="article-content">	
        <?php print render($node->body[LANGUAGE_NONE][0]['value']); ?>
			</div>
			<div class="spirit-spons">
				<h5>Sponsored by</h5>
				<ul>
					<li><img src="http://placehold.it/500x750"></li>
					<li><img src="http://placehold.it/500x750"></li>
					<li><img src="http://placehold.it/500x750"></li>
					<li><img src="http://placehold.it/500x750"></li>
				</ul>
			</div>
		</div>
	</div>
  <?php print render($page['footer']); ?>
</body>
<?php include 'footer.php'; ?>










<?php exit() ?>

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

          <?php if($node->field_author_name['und'][0]['value']): ?>
            <span class="author">By <?php print $node->field_author_name['und'][0]['value']; ?></span> | 
          <?php endif ?>
          <span class="date"><?php print date( 'D, M j, Y', $node->created);?> 
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

  <div class="container">
  <?php print render($page['Footer']); ?>
  </div>
  <?php include "footer.php" ?>

</div>
