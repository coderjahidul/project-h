<?php
$data = [1,2,3,4,5,6,7,8,9,10];

// echo array_reduce($data, 'sum');

// // sum all array data in named function
// function sum($oldData, $newData){
//     return $oldData + $newData;
// }

// sum all array data in anonymous function
echo array_reduce($data, function($oldData, $newData){
    return $oldData + $newData;
});