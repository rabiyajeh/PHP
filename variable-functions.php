<?php 
 function wow ($name){
    echo "hello $name";
}
$func ="wow";
$func("rabbiya");

$sayhello= function($name){
    echo "hello $name";
};

$sayhello("rabbiya");

//anonymous function
$func = function ($name){
    echo "hello $name";
}

?>