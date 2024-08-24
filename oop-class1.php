<?php 
class Person{

public  $name;
public $age;

function __construct($name,$age){
$this -> name = $name;
$this -> age = $age;
}

function show(){
echo $this -> name . " -" . $this ->age;

}
// function __destruct(){
//     echo "Object is destroyed";
// }

}
$person1 = new Person("John", 30);
$person2 = new Person("Jane", 25);
$person3 = new Person("Mike", 35);

$person1 -> show();
echo "<br>";
$person2 -> show();
echo "<br>";
$person3 -> show();

?>