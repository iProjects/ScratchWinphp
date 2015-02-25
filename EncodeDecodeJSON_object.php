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