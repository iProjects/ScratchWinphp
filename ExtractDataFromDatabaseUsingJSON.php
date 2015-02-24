<?php
 include_once('DatabaseSingletonClass.php'); 
 
 $result = DatabaseSingletonClass::getInstance()->query("SELECT * FROM t_participants");
 if($result) {
  echo("<table border='1'>");
  while ($row = mysqli_fetch_row($result)) {
    echo("<tr>");
    for($i = 0; $i < count($row); $i++) {
     echo "<td>".$row[$i]."</td>";
     print json_encode($row[$i]);
    }
 
    echo("<br></tr>");
  } 
  echo("</table><br><br>");
 
  $result->close();
 
 } else { echo("An error occurred while processing!"); }
?> 