<?php
class demo{
  public $name;
  public $age;
  
  public function details(){
    echo"This is my details";
  }
 
}

$obj = new demo();
echo $obj->details();

?>
