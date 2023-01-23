<?php
class test{
public $num;
public $count;
   public function __construct(int $val_one, int $val_two){
     echo ($this->init(30)."Class");
     $this->count = $val_one;
   }
   public function init($value){
     echo "WELCOME";
     $this->num = $value;
   }
   public function __destruct(){
     echo $this->num + $this->count;
   }
}
$obj_test = new test(40,30,40);
echo $obj_test->num;
$obj_test->__destruct();
$obj_test->count = 20;
$obj_test->__destruct();








 ?>
