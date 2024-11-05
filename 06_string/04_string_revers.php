<?php
$string = "Hello World";
$length = strlen($string) -1; // Get the length of the string
for ($i = $length; $i >= 0; $i--) { // Print the string in reverse
    echo $string[$i]; 
}

echo PHP_EOL;

// Another way
$length = strlen($string);
for ($i = $length - 1; $i >= 0; $i--){
    echo $string[$i];
}

echo PHP_EOL;

// Another way
for ($i = strlen($string) - 1; $i >= 0; $i--){
    echo $string[$i];
}

echo PHP_EOL;

// Another way
$strrev = strrev($string);
echo $strrev;