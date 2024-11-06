<?php
$fileName = __DIR__ . '/data/file4.txt';
$students = array(
    array(
        'id' => 1,
        'fname' => 'Jahid',
        'lname' => 'Islam',
        'class' => '10',
        'age' => 22
    ),
    array(
        'id' => 2,
        'fname' => 'Mojahidul',
        'lname' => 'Islam',
        'class' => '10',
        'age' => 23
    ),
    array(
        'id' => 3,
        'fname' => 'Shajalal',
        'lname' => 'Islam',
        'class' => '10',
        'age' => 24
    ),
    array(
        'id' => 4,
        'fname' => 'Salma',
        'lname' => 'Islam',
        'class' => '10',
        'age' => 25
    ),
    array(
        'id' => 5,
        'fname' => 'Siful',
        'lname' => 'Islam',
        'class' => '10',
        'age' => 26
    )
);
// Insert the data or write the data
// $data = serialize($students); // convert array to string
// file_put_contents($fileName, $data, LOCK_EX); // write the data

// Read the data
$dataFormatFile = file_get_contents($fileName); // read the data
$Allstudents = unserialize($dataFormatFile); // convert string to array
print_r($Allstudents);

// Remove the specific data
unset($Allstudents[1]);
$data = serialize($Allstudents);
file_put_contents($fileName, $data, LOCK_EX);

 