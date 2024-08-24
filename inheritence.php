<?php 
class Employee {
    public $name;
    public $age;
    public $salary; 

    function __construct($n, $a, $s) {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

   function info(){
    echo "<h1>Employee Info</h1>";
    echo "Employee Name:" . $this -> name . "<br>";
    echo "Employee Age:" . $this -> age . "<br>";
    echo "Employee Salary:" . $this -> salary . "<br>";
    
   }
}
class Manager extends Employee{
public $ta=1000;
public $da=500;
public $hra=2000;
public $bonus=5000;
public $totalSalary;
function info(){
    $this->totalSalary = $this->salary + $this->ta + $this->da + $this->hra + $this->bonus;
    echo "<h1>Manager Info</h1>";
    echo "Manager Name:" . $this -> name . "<br>";
    echo "Manager Age:" . $this -> age . "<br>";
    echo "Manager Salary:" . $this -> totalSalary . "<br>";

    
    
}
}
$e1 = new Employee("irah",25,200);
$e1->info();

$m1 = new Manager("mani",35,8000);
$m1->info();

// $e1->name = "John";
// $e1->age = 25;
// $e1->salary = 10000;

// $m1->name = "Mike";
// $m1->age = 35;
// $m1->salary = 20000;

// echo "Employee Name:" . $e1->name . "<br>";
// echo "Employee Age:" . $e1->age . "<br>";
// echo "Employee Salary:" . $e1->salary . "<br>";
?>