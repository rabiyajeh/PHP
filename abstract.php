<?php

abstract class parentClass {
    protected $name; // Adjusted visibility to protected as it's typically accessed by subclasses
    abstract protected function calc($a, $b); // Removed curly braces from abstract method declaration
}

class childClass extends parentClass {
    public function calc($c, $d) {
        return $c + $d;
    }
}

$test = new childClass();
echo $test->calc(5, 5); // Added echo to display the result

?>