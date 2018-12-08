<?php
class demo{
  public $name;
  public $age;
  
  public function details(){
    echo"This is my details";
  }
  public function viewinfo(){
   echo"View Information function created successfully"; 
  }
 
}

$obj = new demo();
echo $obj->details();

?>
