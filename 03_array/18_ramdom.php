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