<?php 
$string = "Quick brown fox jumps over the laze dog fox";
// strpos function
echo strpos($string, "fox"); // Find the position of "fox" in the string in case-sensitive mode
echo PHP_EOL;

// stripos function
echo stripos($string, "Fox"); // Find the position of "fox" in the string in case-insensitive mode
echo PHP_EOL;

// strrpos function
echo strpos($string, "fox", 13); // Find the position of "fox" in the string in case-sensitive mode
echo PHP_EOL;
$find = "Quick";
$offset = strpos($string, $find);
if($offset !== false){
    echo "The word {$find} was found at offset {$offset}";
}else{
    echo "The word {$find} was not found";
}
echo PHP_EOL;
echo strrpos($string, "fox"); // Find the position of "fox" in reverse order in the string in case-sensitive mode





