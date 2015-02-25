<?php
  //the PHP array that will encoded in the JSON format
  $array = array(1 => 'title', 2 => 'author', 3 => 'yearofpublication', 4 => 'publisher', 5 => 'price');
 
  //encoding the PHP array
  echo json_encode($array);
?> 