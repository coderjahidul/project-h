<?php
// array walk
$numbers = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
array_walk($numbers, function($value, $key){
    echo $key . " => " . $value . "\n";
});

// square function in array walk
function square($value){
    printf("Square of %d is %d \n", $value, $value * $value);
}
array_walk($numbers, "square");
printf("\n");
// divide function in array walk
function divide($value){
    printf("Divide of %d is %d \n", $value, $value / 2);
}
array_walk($numbers, "divide");

// array map function
function cube($value){
    return $value * $value;
}
$new_array = array_map("cube", $numbers);
print_r($new_array);

