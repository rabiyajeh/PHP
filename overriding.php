<?php 
class base{
    public $name="parent class";
    public function cal($a,$b){
        return $a * $b;
    }
}
class child extends base{
    public $name="child class";
    public function cal($a,$b){
        return $a + $b;
    }
}
 $obj=new child();
echo  $obj->cal(4,3);
 echo $obj->name;



?>