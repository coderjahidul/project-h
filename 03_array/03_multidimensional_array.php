<?php
// Multidimensional arrays or native arrays
// $foods = [
//     "vagetables" => explode(", ", "Potato, Tomato, Onion, Cabbage"),
//     "fruits" => explode(", ", "Apple, Orange, Pear, Banana"),
//     "drinks" => explode(", ", "Coke, Sprite, Water"),
//     "meat" => explode(", ", "Beef, Chicken, Pork")
// ];  

// print_r($foods);
// array_push($foods['drinks'], "orange juice");
// print_r($foods);

$number = [
    [1, 2, 3],
    [11,22,33],
    [111,222,333],
    [1111,2222,3333,[11111,22222,33333,[55555,66666,77777]]],
];
print_r($number);
echo $number[3][3][3][1];