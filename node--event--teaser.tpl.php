<?php include_once "tags.php" ?>
<a href="/node/<?php print $node->nid?>">
	<div class="img-wrap">
		<img src="<?php print image_style_url("event", $node->field_display_image['und'][0]["uri"])?>"> 
	</div>
 	<div class="info-wrap">
    	<span class="category"><?php print format_date(strtotime($node->field_date['und'][0]['value']), 'custom', 'D, M j | g:i A');?></span>
       <h4><?php print $node->title ?></h4>
    	<p><?php print $node->field_blurb['und'][0]['value'];?></p>
    	<span class="by"><?php get_tags_commas($node->field_tags['und'], 5); ?></span>
	</div >   
</a>
