<?php
 
class ParentClass
{
   var $_firstName;
   var $_lastName;
   function ParentClass($first_name, $last_name)
   {
     $this->_firstName = $first_name;
     $this->_lastName = $last_name;
   }
   function toString() {
     return($this->_lastName .", " .$this->_firstName);
   }
}
class ChildClass extends ParentClass
{
   var $_middleInitial;
   function ChildClass($first_name, $middle_initial, $last_name) {
       ParentClass::Name($first_name, $last_name);
       $this->_middleInitial = $middle_initial;
   }
   function toString() {
       return("Name From Parent [ " . ParentClass::toString() . " ] MiddleName from Child [ " . $this->_middleInitial . " ]");
   }
}



$namefromclass = new ChildClass("kevin","mutugi","kithinji");
var_dump( $namefromclass::toString());   

?>






<?php

class Book {
public $title = "";
public $author = "";
public $yearofpublication = "";
}

$book = new Book();
$book->title = "JSF Cookbook";
$book->author = "Anghel Leonard";
$book->yearofpublication="2012";

$result = json_encode($book);
echo 'The JSON representation is:'.$result.'<br>';

echo '************************'.'<br>';
echo 'Decoding the JSON data format into an PHP object:'.'<br>';
$decoded = json_decode($result);

var_dump($decoded);

echo $decoded->title.'<br>';
echo $decoded->author.'<br>';
echo $decoded->yearofpublication.'<br>';

echo '************************'.'<br>';
echo 'Decoding the JSON data format into an PHP array:'.'<br>';
$json = json_decode($result,true);

//listing the array
foreach($json as $prop => $value)
echo '<br/>'. $prop .' : '. $value;
?> 
 


<?php

class ArrayValue implements JsonSerializable {

  public function __construct(array $array) {

    $this->array = $array;

  }

  public function jsonSerialize() {

    return $this->array;

  }

}

$array = array('title', 'author', 'yearofpublication');

echo json_encode(new ArrayValue($array), JSON_PRETTY_PRINT);

?> 

























