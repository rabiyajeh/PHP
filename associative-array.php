<?php 
$a=array("rabia" => 25, 
"iqra" => 30,
 "ayesha" =>35);
echo "the value of rabia is " .$a["rabia"]."<br>";
echo "the value of iqra is " .$a["iqra"]."<br>";
echo "the value of ayesha is " .$a["ayesha"]."<br>";
var_dump($a);

//foreach($rray as $value)
$colors=["red","green","blue"];
foreach($colors as $value)
{
    echo $value ."<br>";
}

$age=[
    "bill"=>24,
    "steve"=>20,
    "abc"=>12,
];
foreach($age as $key=>$value)
{
    echo "age of $key is $value <br>";
}
?>