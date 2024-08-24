<?php
function sum($eng,$math,$sci){
    $s=$eng+$math+$sci;
    return $s;
}
function average($eng,$math,$sci){
    $s=$eng+$math+$sci;
    $avg=$s/3;
    return $avg;
}
function grade($avg){
    if($avg>=90){
        $g="A";
    }elseif($avg>=80){
        $g="B";
    }elseif($avg>=70){
        $g="C";
    }elseif($avg>=60){
        $g="D";
    }
    else{
        $g="F";
    }
    return $g;
}
$eng=80;
$math=90;
$sci=70;
$s=sum($eng,$math,$sci);
$avg=average($eng,$math,$sci);
$g=grade($avg);
echo "Sum: $s <br>";
echo "Average: $avg <br>";
echo "Grade: $g <br>";
?>