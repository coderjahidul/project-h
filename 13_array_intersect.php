<?php
$number1 = array(20, 15, 10, 8, 10, 12, 10, 43, 89, 52);
$number2 = array(15, 13, 14, 15, 16, 17, 18);

$fruits1 = array("z"=>"apple", "b"=>"banana", "c"=>"orange", "d"=>"plum", "e"=>"dates", "f"=>"mango", "g"=>"pineapple", "h"=>"strawberry");
$fruits2 = array("a"=>"apple", "b"=>"banana", "c"=>"orange", "d"=>"plum", "e"=>"dates", "f"=>"mango");

// intersect function in array value
$common_number = array_intersect($number1, $number2);
print_r($common_number);

// intersect function in array value
$common_fruits = array_intersect($fruits1, $fruits2);
print_r($common_fruits);


// intersect function in array key
$common_fruits = array_intersect_assoc($fruits1, $fruits2);
print_r($common_fruits);

// different function in number array value
$different_number = array_diff($number1, $number2);
print_r($different_number);

// different function in fruits array value
$different_fruits = array_diff($fruits1, $fruits2);
print_r($different_fruits);

// different function in fruits array key
$different_fruits_with_key = array_diff_assoc($fruits1, $fruits2);
print_r($different_fruits_with_key);