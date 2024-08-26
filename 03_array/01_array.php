<?php
// PHP array
// $students = array(
//     "Jahidul",
//     "Islam",
//     "Rahman",
//     "Rahim",
//     125,
//     true,
//     array(1, 2, 3),
//     null
// );

//echo $students[2]; // Returns value is Rahman
// echo PHP_EOL;
// echo $students[1]; // Returns value is Islam

// print_r($students); // Prints Array ( [0] => Jahidul, [1] => Islam, [2] => Rahman, [3] => Rahim, [4] => 125, [5] => true, [6] => Array ( [0] => 1, [1] => 2, [2] => 3 ), [7] => null )

// echo PHP_EOL; // Prints new line

// var_dump($students); // Prints Array ( [0] => string(6) "Jahidul" [1] => string(5) "Islam" [2] => string(6) "Rahman" [3] => string(5) "Rahim" [4] => int(125) [5] => bool(true) [6] => array(3) [7] => NULL )

// print($students[0]); // Prints Jahidul

// echo count($students); // Count the number of elements in the array value is 8

// echo $students[6][1]; // Prints array ( [0] => 1, [1] => 2, [2] => 3 )

//$students = array("Jahidul", "Islam", "Rahman", "Rahim"); // Declare an array
//$students = ["Jahidul", "Islam", "Rahman", "Rahim"]; // Declare an array

// loop for through the array 
// for($i = 0; $i < count($students); $i++){
//     echo $students[$i] . "\n";
// }

// reverse loop for through the array
// $n = count($students);
// for($i = $n - 1; $i >= 0; $i--){
//     echo $students[$i] . "\n";
// }

// foreach loop for through the array
// foreach($students as $student){
//     echo $student . "\n";
// }

// while loop for through the array
// $i = 0;
// while($i < count($students)){
//     echo $students[$i] . "\n";
//     $i++;
// }

// do while loop for through the array
// $i = 0; 
// do {
//     echo $students[$i] . "\n";
//     $i++;
// } while ($i < count($students));

// break and continue
// for($i = 0; $i < count($students); $i++){
//     if($students[$i] == "Rahman"){
//         break;
//     }
//     echo $students[$i] . "\n";
// }

// for($i = 0; $i <count($students); $i++){
//     if($students[$i] == "Rahman"){
//         continue;
//     }

//     echo $students[$i] . "\n";
// }

// goto statement
// $i = 0;
// start:
// echo $students[$i] . "\n";
// $i++;
// if($i < count($students)){
//     goto start;
// }

// echo "Starting of the program\n";

// goto start; // Jumps to the label start

// echo "I Love my country\n";
// echo "Amar sonar Bangla ame tomai valobase\n";
// echo "I am Jahidul\n";
// echo "I am Programmer\n";
// echo "I love my country\n";

// start:
// echo "End of the program\n"; 


// Declare an array
// $students = ["Jahidul", "Islam", "Rahman", 123, "Rahim"];
//$students = array("Jahidul", "Islam", "Rahman", 123, "Rahim");

// Modify an array value int 123 to string "Rimi"
//$students[3] = "Rimi";

//var_dump($students); // Prints Array ( [0] => string(6) "Jahidul" [1] => string(5) "Islam" [2] => string(6) "Rahman" [3] => string(4) "Rimi" [4] => string(5) "Rahim" )


// add new value in array at the end
//$students[] = "Salma"; // add new value in the end of the array
//$students = array_push($students, "Emon"); // add new value in the end of the array

//var_dump($students); // Prints Array ( [0] => string(6) "Jahidul" [1] => string(5) "Islam" [2] => string(6) "Rahman" [3] => string(4) "Rimi" [4] => string(5) "Rahim" [5] => string(5) "Salma" [6] => string(5) "Emon" )

// Declare an array
$students = array("Jahidul", "Islam", "Rahman", "Rahim");
array_unshift($students, "Yousuf"); // add new value in the start of the array

//var_dump($students); // Prints Array ( [0] => string(6) "Yousuf" [1] => string(6) "Jahidul" [2] => string(5) "Islam" [3] => string(6) "Rahman" [4] => string(5) "Rahim" )

$student = array_pop($students); // Remove the last value of the array

//var_dump($student); // Prints string(5) "Rahim"
//var_dump($students); // Prints Array ( [0] => string(6) "Yousuf" [1] => string(6) "Jahidul" [2] => string(5) "Islam" [3] => string(6) "Rahman" )

$student = array_shift($students); // Remove the first value of the array

var_dump($student); // Prints string(6) "Yousuf"
var_dump($students); // Prints Array ( [0] => string(5) "Jahidul" [1] => string(5) "Islam" [2] => string(6) "Rahman" [3] => string(5) "Rahim" 



