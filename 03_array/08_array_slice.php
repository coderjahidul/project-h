<?php 
// array_slice
// $foods = array("vagetables", "fruits", "drinks", "meat", "seafood", "fish");
// $slice = array_slice($foods, 3); // Returns value is Array ( [0] => "meat", [1] => "seafood", [2] => "fish" )
// print_r($slice);

// array_slice with limit parameter 
// $foods = array("vagetables", "fruits", "drinks", "meat", "seafood", "fish");
// $slice = array_slice($foods, 3, 2); // Returns value is Array ( [0] => "meat", [1] => "seafood" )
// print_r($slice);

// $foods = array("vagetables", "fruits", "drinks", "meat", "seafood", "fish");
// $slice = array_slice($foods, 3, -2); // Returns nagative value is Array ( [0] => "meat" )
// print_r($slice);

// $foods = array("vagetables", "fruits", "drinks", "meat", "seafood", "fish");
// $slice = array_slice($foods, -4, -2, true); // Returns value is Array orignal index use true
// print_r($slice);

// asociative array slice function
// $random = array(
//     "fname" => "Jahidul",
//     "lname" => "Islam",
//     "address" => "Cumilla",
//     "age" => 22,
//     "class" => "10",
//     "section" => "A",
//     "roll" => 11
// );
// $randomData = array_slice($random, 2, 5);
// print_r($randomData);


$random1 = array(
    "a" => 12,
    "b" => 13,
    "c" => 14,
    "d" => 15,
    "e" => 16,
    15 => 17,
    "f" => 18
);

$random1Data = array_slice($random1, 4, 2); // Returns value is Array ( [e] => 16, [0] => 17 )
$random2Data = array_slice($random1, 4, 2, true); // Returns value is Array orignal index use true ( [e] => 16, [15] => 17 )
print_r($random1Data);
print_r($random2Data);

