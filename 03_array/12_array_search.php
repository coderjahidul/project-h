<?php
$fruits = array("a"=>"apple", "b"=>"banana", "c"=>"orange", "d"=>"plum", "e"=>"dates", "f"=>"mango");
$number = array(20,"15",10,8,10,12,10);
$random = array("d"=>12, "b"=>13, "c"=>14, "g"=>15, "e"=>16, "f"=>17, "a"=>18);

// in array function
var_dump(in_array("apple", $fruits)); // false
var_dump(in_array("apple", $fruits, true)); // true

var_dump(in_array(15, $number)); // true
var_dump(in_array(15, $number, true)); // false

if(in_array(15, $number)){
    echo "This number is found";
}else {
    echo "This number is not found";
}
echo "\n";

// array_search function
$offset = array_search(10, $number);
echo "Value Found at Position: " . $offset;
echo "\n";


// array_key_exists function
if(array_key_exists("z", $fruits)){
    echo "Key Found";
}else {
    echo "Key Not Found";
}
echo "\n";

if(key_exists("b", $fruits)){
    echo "Key Found";
}else {
    echo "Key Not Found";
}


// array_keys function
$keys = array_keys($fruits); // returns all the keysg
print_r($keys);