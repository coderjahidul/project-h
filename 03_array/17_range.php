<?php
// $numbers = array(12, 13, 14, 15, 16, 17, 18, 19, 20);
$numbers = array();
for($i = 12; $i <= 20; $i++){
    array_push($numbers, $i);
}

print_r($numbers);
echo PHP_EOL;

// range function 
$numbers = range(1, 15); // print 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15
print_r($numbers);
echo PHP_EOL;

// range function another example start 0 end 30 step 5
$numbers = range(0, 30, 5); // print 0, 5, 10, 15, 20, 25
print_r($numbers);
echo PHP_EOL;

// range function another example in foreach loop
foreach(range(1, 40, 3) as $value){
    echo $value . "\n";
}

// Create an array of numbers from 1 to 10 using range
$numbers = array();
$number = range(1, 10);
foreach($number as $value){
    array_push($numbers, $value);
}

print_r($numbers);

// Create an array of roll numbers from 1 to 10 using range step 2
$roll_numbers = array();
$range = range(1, 10, 2);
foreach($range as $value){
    array_push($roll_numbers, $value);
}
print_r($roll_numbers);
