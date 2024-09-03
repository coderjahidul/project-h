<?php
// copy by value and copy by reference


// copy by value or Deep copy   
// $person = array("fname" => "Jahidul", "lname" => "Islam");
// $new_person = $person;
// $new_person["lname"] = "Rimi";

// print_r($person);
// print_r($new_person);


// copy by reference or Shallow copy
// $student = array("fname" => "Jahidul", "lname" => "Islam");
// $new_student = &$student;
// $new_student["lname"] = "Rimi";

// print_r($student);
// print_r($new_student);

// copy by value or Deep copy
// $customar = array("fname" => "Mojahidul", "lname" => "Islam");
// $new_customar = $customar;
// $new_customar["lname"] = "Khandokar";
// print_r($customar);
// print_r($new_customar);

// function printData($customar){
//     $customar["lname"] .= " Emon";
//     print_r($customar);
// }

// printData($customar);
// print_r($customar);

// copy by value or Deep Copy
// $employ = array("fname" => "Jahidul", "lname" => "Islam");
// $new_employ = $employ;
// $new_employ["lname"] = "Rimi";
// print_r($employ);
// print_r($new_employ);

// copy by reference or Shallow Copy
// $room_meet = array("fname" => "Hemal", "lname" => "Talukder");
// $new_room_meet = &$room_meet;
// $new_room_meet["lname"] = "Molla";

// print_r($room_meet);
// print_r($new_room_meet);

// copy by value or Deep Copy
$food = array("dirnk" => "orange juice", "meet" => "beef");
$new_food = $food;
$new_food["meet"] = "fish";
print_r($food);
print_r($new_food);

function printData($food){
    $food["meet"] .= " chicken";
    print_r($food);
}

printData($food);
print_r($food);
