<?php
$string = "Hello World";
echo $string[0]; // 0th index
echo "\n";
echo $string[1];
echo "\n";
echo $string[2];
echo "\n";
echo $string[3];
echo "\n";
echo $string[4];
echo "\n";
echo $string[5];
echo "\n";
echo $string[6];
echo "\n";
echo $string[7];
echo "\n";
echo $string[8];
echo "\n";
echo $string[9];
echo "\n";
echo $string[10];
echo "\n";

echo $string[-1];
echo "\n";

// substring
echo substr($string, 0, 5); // from 0th index to 5th index
echo "\n";

$length = strlen($string); // length of string
echo $length;
echo "\n";
echo substr($string, $length - 5); // from last 5th index
echo PHP_EOL;
echo substr($string, -5, 3); // from last 5th index to 3rd index
echo PHP_EOL;