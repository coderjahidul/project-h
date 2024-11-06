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

$string1 = "Hello World, How are you";
$parts = explode(" ", $string1); // Split the string into an array
print_r($parts);
echo PHP_EOL;

// reverse the array 
echo implode(" ", array_reverse(explode(" ", $string1))); // Join the array into a string and reverse it
echo PHP_EOL;

// join the array into a string and reverse it
$explode_string = explode(" ", $string1); // Split the string into an array
print_r($explode_string);
$reverse_string = array_reverse($explode_string); // Reverse the array
print_r($reverse_string);

$join_reverse_string = implode(" ", $reverse_string); // Join the array into a reverse string
echo $join_reverse_string;
echo PHP_EOL;

// Another way
$reverse_string = strrev($string1); // Reverse the string using strrev()
echo $reverse_string;
echo PHP_EOL;

// Another way join array explode string
print_r($explode_string);
$original_string = implode(" ", $explode_string); // Join the array into a string
echo $original_string;
echo PHP_EOL;

// join the explode string in another way
$original_string1 = join(" ", $explode_string); // Join the array into a string
echo $original_string1;
echo PHP_EOL;

$split_string_character = str_split($original_string1); // Split the string into an array
print_r($split_string_character);
echo PHP_EOL;

$string = "Hello World, How are you";
$character = "o"; // The character you want to count

$count = substr_count($string, $character);

echo "The character '$character' appears $count times in the string.";
echo PHP_EOL;

// Convert the string into an array of characters
$characters = str_split($original_string);

// Create an empty array to store the counts
$charCounts = [];

// Loop through the characters and count occurrences
foreach ($characters as $char){
    if(isset($charCount[$char])){
        $charCount[$char]++;
    }else{
        $charCount[$char] = 1;
    }
}

// Display the Result
foreach($charCount as $char => $count){
    echo "The character '$char' appears $count times in the string.";
    echo PHP_EOL;
}
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
// Explain strtok function
$string = "Hello World, How are you";
$parts4 = strtok($string, " ,"); 
while ($parts4 !== false){
    echo $parts4."\n";
    $parts4 = strtok(" ,");
}
echo PHP_EOL;
$string5 = "Quick brown fox jumps over the lazy dog";
$parts5 = strtok($string5, " ,");
while($parts5 !== false){
    echo $parts5."\n";
    $parts5 = strtok(" ,");
}

// Explain preg_split function
$parts6 = preg_split("/ |,/", $string5); 
print_r($parts6);


$parts7 = preg_split("/ |,/", $string);
print_r($parts7);