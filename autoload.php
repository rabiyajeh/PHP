<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj = new frst();
$obj2 = new secnd();
?>