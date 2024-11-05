<?php 
    $string = "   Hello World!   \n";

    // php trim function
    $trimmed = trim($string, ' '); // Remove leading and trailing whitespace and none printable characters
    echo $trimmed;
    echo "How are you?";
    echo PHP_EOL;

    // php ltrim function
    $string1 = "   Hello World!  ,\n";
    $trimmed1 = ltrim($string1, ' '); // Remove left whitespace and none printable characters
    echo $trimmed1;
    echo "How are you?";
    echo PHP_EOL;

    // php rtrim function
    $string2 = "   Hello World!,\n";
    $trimmed2 = rtrim($string2, " ,\n"); // Remove right whitespace and none printable characters
    echo $trimmed2;
    echo "How are you?";
    echo PHP_EOL;
?>