<?php
class demo{
  public $name;
  public $age;
  
  public function details(){
    echo"This is my details";
  }
  
  public function __construct(){
    echo"Call constructor function";
  }
}

$obj = new demo();
echo $obj->details();

?>
