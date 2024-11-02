<?php
$numbers = range(40, 72);
// random function
$random = mt_rand(0, 32);
// echo $numbers[$random] . "\n";

$luck = $numbers[$random];
if($luck % 2 == 0){
    echo "Head";
}else{
    echo "Tail";
}

print_r($numbers);

// shuffle function
shuffle($numbers);
print_r($numbers);

$randomNumber = $numbers[3];
echo $randomNumber;
echo "\n";
$new_rendom = mt_rand(1, 15);
print_r($new_rendom);

// create a array with range function
$latter = range("a", "m");
print_r($latter);

// shuffle this latter array
shuffle($latter);
print_r($latter);

// php associative array shuffle and array_rand function
$fruits1 = array("z"=>"apple", "b"=>"banana", "c"=>"orange", "d"=>"plum", "e"=>"dates", "f"=>"mango", "g"=>"pineapple", "h"=>"strawberry");

$key = array_rand($fruits1);
// echo $key;
echo $fruits1[$key];

shuffle($fruits1);
print_r($fruits1);
