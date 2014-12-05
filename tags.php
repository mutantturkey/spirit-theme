<?php 
function get_tags($tags, $num_tags) {
  $tagcounter=1;
  print "<ul>" ;
  foreach($tags as $tag) {
    print "<li>" . taxonomy_term_load($tag['tid'])->name . "</li>";
    if(++$tagcounter == $num_tags) {
      break; 
     }
  }
    print "</ul>";
}

function get_tags_commas($tags, $num_tags) {
  $tagcounter=1;
  $tag_names = array();
  foreach($tags as $tag) {
  	$tag_names[] = taxonomy_term_load($tag['tid'])->name;
    if(++$tagcounter == $num_tags) {
      break; 
     }
  }
  print join(', ', $tag_names);
}

?>
