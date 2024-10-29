<?php 
// array reduce function
$numbers = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 111, 125, 127, 13, 27, 15);

function sum($old_value, $new_value){
    return $old_value + $new_value;
}

$sum = array_reduce($numbers, 'sum');
echo "Sum: " . $sum;
echo "\n";

$number = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 111, 125, 127, 13, 27, 15);
function sumEvenValue($old_value, $new_value){
    if($new_value % 2 == 1){
        echo "Even Value: " . $new_value . "\n";
        return $old_value + $new_value;
    }
}

$sumEvenValue = array_reduce($number, 'sumEvenValue');
echo "Sum of Even Value: " . $sumEvenValue;