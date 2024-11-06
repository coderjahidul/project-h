<?php
$fileName = __DIR__ . '/data/file2.txt';

if(file_exists($fileName) && is_writable($fileName) && is_readable($fileName)){
    $fileOpen = fopen($fileName,"r+"); // Open the file in read and write mode
    $line = fgets($fileOpen); // Read the first line
    echo $line; // Display the first line
 
    fwrite($fileOpen,"Rimi/n"); // Write the new data
    
    $line2 = fgets($fileOpen); // Read the second line
    echo $line2; // Display the second line
    fseek($fileOpen,0); // use or rewind($fileOpen) // Move the pointer to the beginning of the file
    fwrite($fileOpen,"Mizan\n"); // Write the new data
    fclose($fileOpen); // Close the file
}