<?php 
$fileName = __DIR__. '/data/file2.txt';

if(file_exists($fileName) && is_writable($fileName)){
    //$existingData = file_get_contents($fileName); // Get the existing data
    //$fileOpen = fopen($fileName, 'r'); // Open the file in read mode
    $fileOpen = fopen($fileName, 'a'); // Open the file in append mode
    fwrite($fileOpen, "Jahidul Islam \n"); // Write the new data
    fwrite($fileOpen, "Sabbir \n");
    fwrite($fileOpen, "Tanvir \n");
    fwrite($fileOpen, "Emon \n");
    fwrite($fileOpen, "Ressl \n");
    fwrite($fileOpen, "Abu Bochor \n");

    fclose($fileOpen); // Close the file
}