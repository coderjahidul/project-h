<?php
// Check numeric value
$value = 123;
if(is_numeric($value)){
    echo "$value is a numeric";
}else{
    echo "$value This Value is not numeric";
}
echo "\n";
// Check int value
$data = 125;
if(is_int($data)){
    echo "$data is a int value";
}else{
    echo "This data is not int value";
}

echo "\n";
// Check float value
$float_value = 145.5;
if(is_float($float_value)){
    echo "$float_value is a float value";
}else{
    echo "$float This data is not float value";
}

echo "\n";
// Check String value
$string = "jahidul";
if(is_string($string)){
    echo "$string This is a String Value";
}else{
    echo "$string This is not String Value";
}