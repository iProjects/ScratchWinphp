<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo();
A::foo();
$b = new B();
$b->bar();
B::bar();


class iMyClass
{
  // Class properties and methods go here
}

$iobj = new iMyClass;

var_dump($iobj);


class MyClass
{
  public $prop1 = "I'm a class property!";
}
 
$obj = new MyClass;
 
var_dump($obj);



?>



<?php
class  Books{
    /* Member variables */
    var $price;
    var $title;
    
    function __construct( $par1, $par2 ){
   $this->price = $par1;
   $this->title = $par2;
}

    /* Member functions */
    function setPrice($par){
       $this->price = $par;
    }
    function getPrice(){
       echo $this->price ."<br/>";
    }
    function setTitle($par){
       $this->title = $par;
    }
    function getTitle(){
       echo $this->title ." <br/>";
    }
}

  







?>








































