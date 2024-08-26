<?php 
interface parentClass1{

    function calc($a,$ab);
    
}
interface parentClass2{

    function sub($c,$d);
}
class childClass implements parentClass1,parentClass2{

    function calc($a,$ab){
        echo $a+$ab;
    }
    function sub($c,$d){
        echo $c-$d;
    }
}
$obj=new childClass();
$obj->calc(10,20);
echo "<br>";
$obj->sub(30,20);

?>