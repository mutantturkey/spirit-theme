<?php 
$section=strtolower(taxonomy_term_load($node->field_section['und'][0]["tid"])->name);
$location=strtolower(taxonomy_term_load($node->field_location['und'][0]["tid"])->name);
$url=drupal_get_path_alias('node/' . $node->nid);
$image=$node->field_image['und'][0]["uri"];
$summary=text_summary($node->body[LANGUAGE_NONE][0]['value'], NULL, NULL);
$author=$node->field_author_name['und'][0]['value']
?>
