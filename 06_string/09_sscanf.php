<?php 
$name = "Jahidul Islam 01641427677 sobuz0349@gmail.com";
// sscanf function
$parts = sscanf($name, "%s %s %11d %s");
print_r($parts);

echo PHP_EOL;

$parts2 = sscanf($name, "%s %s %11s %s", $fname, $lname, $number, $email);
echo PHP_EOL;
echo "First Name: {$fname} \nLast Name: {$lname} \nPhone Number: {$number} \nEmail Address: {$email}\n"; 
echo PHP_EOL;
$hexColor = "#FF2F44";
// sscanf function
$partColor = sscanf($hexColor, "#%2x%2x%2x", $red, $green, $blue);
// print_r($partColor);

echo "Red Color: {$red} \nGreen Color: {$green} \nBlue Color: {$blue}\n";

echo PHP_EOL;

