<?php
$fileName = __DIR__ . '/data/file3.txt';
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
    )
);
// // Open the file in write mode
// $fileOpen = fopen($fileName, 'w');

// // Write the data
// foreach($students as $student){
//     $student_id = $student['id'];
//     $student_fname = $student['fname'];
//     $student_lname = $student['lname'];
//     $student_class = $student['class'];
//     $student_age = $student['age']; 

//     $data = sprintf("%d, %s, %s, %s, %d \n", $student_id, $student_fname, $student_lname, $student_class, $student_age);

//     fwrite($fileOpen, $data);
// }
// fclose($fileOpen);

// write the data csv format
$fileOpen = fopen($fileName, 'w');
foreach($students as $student){
    fputcsv($fileOpen, $student);
}
fclose($fileOpen);

// Read the data
// $fileOpen = fopen($fileName, 'r');
// while($data = fgets($fileOpen)){
//     $student = explode(', ', $data);
//     $student_id = $student[0];
//     $student_fname = $student[1];
//     $student_lname = $student[2];
//     $student_class = $student[3];
//     $student_age = $student[4];
//     printf("Student ID: %d \nStudent First Name: %s \nStudent Last Name: %s \nStudent Class: %s \nStudent Age: %d \n\n", $student_id, $student_fname, $student_lname, $student_class, $student_age);
// }
// fclose($fileOpen);

// Read the data another way
// $fileOpen = fopen($fileName, 'r');
// while($data = fgets($fileOpen)){
//     $student = sscanf($data, "%s %s %s %s %s",  $student_id, $student_fname, $student_lname, $student_class, $student_age);
//     echo "Student ID: $student_id \nStudent First Name: $student_fname \nStudent Last Name: $student_lname \nStudent Class: $student_class \nStudent Age: $student_age \n\n";   
// }
// fclose($fileOpen);

// Read the data csv format
// $fileOpen = fopen($fileName, 'r');
// while($student = fgetcsv($fileOpen)){
//     $student_id = $student[0];
//     $student_fname = $student[1];
//     $student_lname = $student[2];
//     $student_class = $student[3];
//     $student_age = $student[4];
//     printf("Student ID: %d \nStudent First Name: %s \nStudent Last Name: %s \nStudent Class: %s \nStudent Age: %d \n\n", $student_id, $student_fname, $student_lname, $student_class, $student_age);
// }
// fclose($fileOpen);

// write a new student data
// array(
//     'id' => 4,
//     'fname' => 'Salma',
//     'lname' => 'Islam',
//     'class' => '10',
//     'age' => 18
// );
// $fileOpen = fopen($fileName, 'a'); // Open the file in append mode
// fputcsv($fileOpen, $student); // Write the new data
// fclose($fileOpen); // Close the file

// Remove the specific data
$data = file($fileName);
print_r($data);
unset($data[2]);
print_r($data);
$fileOpen = fopen($fileName, 'w');
foreach($data as $value){
    fwrite($fileOpen, $value);
}
fclose($fileOpen);