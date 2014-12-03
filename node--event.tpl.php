<?php include_once "tags.php" ?>
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
		<div class="container">
		  <div class="container article article-title-block">
			<span class="category">Events in <?php print taxonomy_term_load($node->field_location['und'][0]["tid"])->name ?></span>
      <?php if ($title): ?> 
      <h2 class="article-title"><?php print $title ?></h2>
      <?php  endif; ?>
			<hr class="tiny"/>
      </div>
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
	<div class="container">
		<div class="section-header">
			<span class="left"></span>
				<h4>Related News</h4>
			<span class="right"></span>
		</div>
		<div class="post-grid related">
			<ul class="posts">
				<li>
					<a href="article.php">
						<div class="img-wrap">
							<div class="location-badge bridesburg"><img src="/sites/all/themes/spirit/assets/images/bridesburg-black.png" alt="Bridesburg" /></div>
							<img src="http://placekitten.com/800/600"/>
						</div>
						<span class="category">Sports in Bridesburg</span>
						<h4>The Local Lens</h4>
						<p>Sum exeruptas venist, officipsus eos andaerion et ut quoditatium fugit odioria nos as mo Reperup tatatin vellorum exped magni consed qui od quam sim intiberspero...</p>
						<span class="by">By Authors Name</span>
					</a>
				</li>
				<li>
					<a href="article.php">
						<div class="img-wrap">
							<div class="location-badge bridesburg"><img src="/sites/all/themes/spirit/assets/images/fishtown-black.png" alt="Bridesburg" /></div>
							<img src="http://placekitten.com/800/600"/>
						</div>
						<span class="category">Opinion in Fishtown</span>
						<h4>Miss Know It All’s Quizzo Challenge: Planes, Trains, and Automobiles</h4>
						<p>Sum exeruptas venist, officipsus eos andaerion et ut quoditatium fugit odioria nos as mo Reperup tatatin vellorum exped magni consed qui od quam sim intiberspero...</p>
						<span class="by">By Authors Name</span>
					</a>
				</li>
				<li>
					<a href="article.php">
						<div class="img-wrap">
							<div class="location-badge bridesburg"><img src="/sites/all/themes/spirit/assets/images/kensington-black.png" alt="Kensington" /></div>
							<img src="http://placekitten.com/800/600"/>
						</div>
						<span class="category">Local Business in Kensington</span>
						<h4>Fallen Heroes Honored With Mural: Tribute to Lt. Robert Neary and Firefighter Daniel Sweeney</h4>
						<p>Sum exeruptas venist, officipsus eos andaerion et ut quoditatium fugit odioria nos as mo Reperup tatatin vellorum exped magni consed qui od quam sim intiberspero...</p>
						<span class="by">By Authors Name</span>
					</a>
				</li>
				<li>
					<a href="article.php">
						<div class="img-wrap">
							<div class="location-badge bridesburg"><img src="/sites/all/themes/spirit/assets/images/bridesburg-black.png" alt="Bridesburg" /></div>
							<img src="http://placekitten.com/800/600"/>
						</div>
						<span class="category">Sports in Bridesburg</span>
						<h4>The Local Lens</h4>
						<p>Sum exeruptas venist, officipsus eos andaerion et ut quoditatium fugit odioria nos as mo Reperup tatatin vellorum exped magni consed qui od quam sim intiberspero...</p>
						<span class="by">By Authors Name</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
  <div class="container">
  <?php print render($page['Footer']); ?>
  </div>
</body>
<?php include 'footer.php'; ?>
