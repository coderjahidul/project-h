<?php
// ternary operator
$n = 12;
/*
if(12 == $n){
    echo "Twelve";
}elseif(10 == $n){
    echo "Ten";
}else{
    echo "Not Found";
}
echo "\n";
*/

// ternary operator (Condition) ? (True Value) : (False Value);
/*
$numberinWord = (12 == $n) ? "Twelve" : "A Number";
echo $numberinWord;

echo "\n";

if($n % 2 == 0){
    echo "Even Number";
}else{
    echo "Odd Number";
}

echo "\n";
*/

// ternary operator
/*
$result = ($n % 2 == 0) ? "Even Number" : "Odd Number";
echo $result;
echo "\n";
*/

$result1 = ($n == 10) ? "Ten" : (($n == 12) ? "Twelve" : "Not Found");

echo $result1;
