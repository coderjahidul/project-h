<?php
// array_splice
// $car = array("Volvo", "BMW", "Toyota", "Mercedes", "Jeep", "Kia", "Jaguar", "Tatamotors", "Ferrari", "Lamborghini");
// print_r($car);

// $someCar = array_splice($car, 5, 2); // Returns value is Array ( [0] => "Kia", [1] => "jaguar" )
// print_r($someCar);
// print_r($car);

$phone = array("iphone", "samsung", "nokia", "sony", "htc","sampuny","redmi", "vivo", "oppo", "huawei");
print_r($phone);

$new_array = array("itel", "tecno");
$somePhone = array_splice($phone, 5, 2, $new_array); // Returns value is Array ( [0] => "sampuny", [1] => "redmi" ) and add new value in the array itel, tecno.
print_r($somePhone);
print_r($phone);