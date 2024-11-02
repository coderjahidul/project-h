<?php
// array marge
// $class_six = array("Jahidul", "Shagor", "Rahman", "Rahim", "Salma", "Rimi");
// $class_saven = array("Tanvir", "Rakib", "Rafi", "Mojahid", "Rasel", "Emon");

// $six_student = array_slice($class_six, 3, 5, true);
// print_r($six_student);

// $saven_student = array_slice($class_saven, 2, 3, true);
// print_r($saven_student);

// $school_selected_studebt = array_merge($six_student, $saven_student);
// print_r($school_selected_studebt);


// $six_student = array_slice($class_six, 3, 5);
// print_r($six_student);

// $saven_student = array_slice($class_saven, 2, null, true);
// print_r($saven_student);

// $selected_student = $six_student + $saven_student;
// print_r($selected_student);


$fruits = array("apple", "banana", "orange", "plum", "dates", "mango");
$random = array("a"=>12, "b"=>13, "c"=>14, "d"=>15, "e"=>16, "f"=>17, "g"=>18);

// marge two array
// $random1 = array_merge($fruits, $random);
// print_r($random1);

$ran1 = array_slice($random, 0, 3, true);
print_r($ran1);
$ran2 = array_slice($random, 5, null, true);
print_r($ran2);
$ran3 = array("j"=>20, "k"=>25);
print_r($ran3);
$randomDataCorrectWay = $ran1 + $ran2 + $ran3;
print_r($randomDataCorrectWay);
print_r($random);