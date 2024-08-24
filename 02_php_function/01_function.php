<?php
// PHP function
/**
 * Determines if the argument is even or odd
 */
// function isEven($number){ // Parameter
//     if($number % 2 ==0){
//         return true;
//     }
//     return false;
// }

// $x = 11;
// if(isEven($x)){ // Argument
//     echo "{$x} is an even number";
// }else{
//     echo "{$x} is an odd number";
// }
// echo "\n";
// *********************************************************************
// factorial function
// function factorial(int $n){
//     // if(gettype($n)!="integer"){
//     //     return "Invalid";
//     // }
//     $result = 1;
//     for($i= $n; $i>1; $i--){
//         $result *= $i;
//     }
//     return $result;
// }

// $x = "abc";
// echo "Factorial of {$x} is " . factorial($x) . "\n";

// *********************************************************************

// Default value for function
// function serve($foodType = "pizza", $quantity = 1){
//     echo "Serve {$quantity} Pieces of {$foodType}. \n";
// }

// // Call the function
// serve();
// // Call the function with arguments
// serve("burger", 2);
// serve(1, "Chicken");
// serve(1, 2, "pizza");
// serve(1, 2, "pizza", "burger");

// shop products
// function shop($product = "Papcudent", $quantity = 1){
//     echo "Product Name: {$product} And Quantity: {$quantity}\n";
// }

// // Call the function 
// shop();

// // Call the function with arguments
// shop("Smartphone", 2);

// *********************************************************************
// Function parameter type defined
// function sum( string $name = "Invalid",int $a = 0, float $b = 0.0){
//     echo "Student Name: {$name} And He is Roll Number: {$a} And His Total Marks: {$b} \n";
// }

// // Call this Function 
// sum("Imran Hossin", 8, 520);


// *********************************************************************
// Unlimited arguments accept function
// function sum(int ...$numbers):int {
//     $result = 0;
//     for($i=0; $i<count($numbers); $i++){
//         $result += $numbers[$i];
//     }
//     return $result;
// }
// echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// function sum($x, $y, ...$numbers){
//     $result = $x - $y;
//     for($i = 0; $i<count($numbers); $i++){
//         $result += $numbers[$i];
//     }
//     return $result;
// }

// echo sum(500, 200, 50, 70);

// function divide_function($x, $y, ...$numbers):int {
//     $result = $x / $y;
//     for($i = 0; $i<count($numbers); $i++){
//         $result += $numbers[$i];
//     }
//     return $result;
// }

// echo divide_function(100, 50, 720, 80);

// *********************************************************************
// Big function call to step by step small function

// function doTaskA(){
//     echo "Do Step Task A \n";
// }
// function doTaskB(){
//     echo "Do Step Task B \n";
// }
// function doTaskC(){
//     echo "Do Step Task C \n";
// }
// function doTaskD(){
//     echo "Do Step Task D \n";
// }
// function doTaskE(){
//     echo "Do Step Task E \n";
// }
// function doTaskF(){
//     echo "Do Step Task F \n";
// }

// function doTheLargerTask(){
//     doTaskA();
//     doTaskB();
//     doTaskC();
//     doTaskD();
//     doTaskE();
//     doTaskF();
// }

// // Call the Larger function
// doTheLargerTask();

// ******************************************************************
// Recursive function // recursion

// function printNumber($counter, $end){
//     if($counter>$end){
//         return;
//     }
//     echo $counter."\n";
//     $counter ++;
//     printNumber($counter, $end);
// }

// // Call the printNumber function
// printNumber(1, 50);

function student_roll($first_roll, $last_roll, $stepping = 1){
    if($first_roll>$last_roll){
        return;
    }

    echo $first_roll . "\n";
    $first_roll += $stepping;

    student_roll($first_roll, $last_roll, $stepping);
}

student_roll(5, 50, 5);