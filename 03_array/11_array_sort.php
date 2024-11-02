<?php
// array sort
// $fruits = array("apple", "banana", "orange", "plum", "dates", "mango");
// // sort function
// sort($fruits);
// print_r($fruits);
// // rsort function
// rsort($fruits);
// print_r($fruits);


// $random = array("d"=>12, "b"=>13, "c"=>14, "g"=>15, "e"=>16, "f"=>17, "a"=>18);
// // asort function sort in value
// asort($random);
// print_r($random);

// // arsort function sort in value
// arsort($random);
// print_r($random);

// // ksort function sort in key
// ksort($random);
// print_r($random);

// // krsort function sort in key
// krsort($random);
// print_r($random);

// $randomData = array("Apple", "apple", "Banana", "banana", "Orange", "orange", "Plum", "plum", "Dates", "dates", "Mango", "mango");
// // natsort function sort in value
// natsort($randomData);
// print_r($randomData);

// // natcasesort function sort in value
// natcasesort($randomData);
// print_r($randomData);

// $number = array("One", "one", "Two", "two", "Three", "three", "Four", "four", "Five", "five");
// // sort function in value with string
// sort($number, SORT_STRING);
// print_r($number);

// // rsort function in value with string in case insensitive
// rsort($number, SORT_STRING);
// print_r($number);
// $_number = array("One", "one", "Two", "two", "Three", "three", "Four", "four", "Five", "five");
// // asort function in value with string in case sensitive
// sort($_number, SORT_STRING | SORT_NATURAL);
// print_r($_number);


// Sorting Multiple Arrays Together
$names = ['Ali', 'Ahmed', 'Hossain', 'Rahim', 'Rakib', 'Rahman', 'Rafi'];
$numbers = [10, 20, 30, 40, 50, 60, 70];

// Sort by name in ascending order and keep $ages in sync
array_multisort($names, SORT_ASC, $numbers);
print_r($names);
print_r($numbers);

// Sorting a Multidimensional Array
$users = [
    ['name' => 'Ali', 'age' => 20],
    ['name' => 'Ahmed', 'age' => 25],
    ['name' => 'Hossain', 'age' => 30],
    ['name' => 'Rahim', 'age' => 35],
    ['name' => 'Rakib', 'age' => 40],
    ['name' => 'Rahman', 'age' => 45],
    ['name' => 'Rafi', 'age' => 50]
];

// Extract column to use array_multisort()
$ages = array_column($users, 'age');

// Sort by age in ascending order
array_multisort($ages, SORT_ASC, $users);

print_r($users);


// Shuffle
$numbers = [10, 20, 30, 40, 50, 60, 70];
shuffle($numbers);
print_r($numbers);




