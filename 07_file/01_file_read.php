<?php 
// $filename = __DIR__ . "/data/file.txt";
// echo "File Name: " . $filename . "\n";
// if(file_exists($filename)){
//     $fp = fopen($filename, "r");
//     $line = fgets($fp);
//     echo $line;

//     $line = fgets($fp);
//     echo $line;

//     $line = fgets($fp);
//     echo $line;
//     fclose($fp);
// }else{
//     echo "File not found";
// }


// Include file file.txt
$fileName = __DIR__ . "/data/file.txt";

if(file_exists($fileName) && is_readable($fileName)){
    $fileOpen = fopen($fileName, "r"); // Open the file in read mode

    // $line = fgets($fileOpen);
    // echo $line;

    // $line = fgets($fileOpen);
    // echo $line;

    // $line = fgets($fileOpen, 3);
    // echo $line;
    // while loop to read the file line by line
    while($line = fgets($fileOpen)){ 
        echo $line;
    }
    rewind($fileOpen); // Move the file pointer to the beginning of the file
    echo PHP_EOL;

    // Read the file line by line
    while($line = fgets($fileOpen, 5)){
        echo $line . "-";
    }
    echo PHP_EOL;
    echo PHP_EOL;

    //fseek($fileOpen, 8); // Move the file pointer to the specified position
    fseek($fileOpen, -1, SEEK_END); // Move the file pointer to the specified position
    // Read the file line by line
    while($line = fgets($fileOpen)){
        echo $line;
    }

    fclose($fileOpen); // Close the file

    $data = file($fileName); // Read the entire file
    echo $data[2];
    print_r($data); 
    echo PHP_EOL;

    $data = file_get_contents($fileName); // Read the entire file
    echo $data;
}
