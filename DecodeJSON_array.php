<?php
  //the JSON string to be decoded
  $json_string='{"1":"title","2":"author","3":"yearofpublication","4":"publisher","5":"price"}';
 
  //decoding the above JSON string
  $json=json_decode($json_string,true);
 
  //listing the array
  foreach($json as $prop => $value)
   echo '<br/>'. $prop.' : '. $value;
?> 