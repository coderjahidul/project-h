<?php
// Multidimensional arrays or native arrays
$foods = [
    "vagetables" => explode(", ", "Potato, Tomato, Onion, Cabbage"),
    "fruits" => explode(", ", "Apple, Orange, Pear, Banana"),
    "drinks" => explode(", ", "Coke, Sprite, Water"),
    "meat" => explode(", ", "Beef, Chicken, Pork")
];  

print_r($foods);
array_push($foods['drinks'], "orange juice");
print_r($foods);