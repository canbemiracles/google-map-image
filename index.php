<?php

function gen_map_img($x, $y) {

  $width = 300;
  $height = 300;
  $image = file_get_contents('http://maps.googleapis.com/maps/api/staticmap?center='. $x .',' . $y . '&zoom=8&size=' . $width . 'x'. $height .'&markers=color%3ablue%7Clabel%3aS%7C11211&sensor=false'); 
  $fp  = fopen('sample.png', 'w+'); 

  fputs($fp, $image); 
  fclose($fp); 
  unset($image);
}

gen_map_img(40.714728, -73.998672);
?>