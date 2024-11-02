<?php
// list function
$color = array("red", "green", "blue");
list($red, $green, $blue) = $color;
echo $blue;
echo "\n";
// list function another example
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
list($first, $second, $third, $fourth, $fifth, $sixth, $seventh, $eighth, $ninth, $tenth) = $numbers;
echo $fourth;

// list function another example in student information
$student = array('jahidul islam', 25, 'Cumilla, Bangladesh', 567289, 'Six');
list($name, $age, $address, $roll, $class) = $student;
echo "Student Name: " . $name . "\n";
echo "Student Age: " . $age . "\n";
echo "Student Address: " . $address . "\n";
echo "Student Roll: " . $roll . "\n";
echo "Student Class: " . $class . "\n";
echo "\n";

// list function another example in color code
$colorCode = array('#ffffff', '#000000', '#ff0000', '#00ff00', '#0000ff');
list($white, $black, $red, $green, $blue) = $colorCode;
echo "Blue Color Code: " . $blue;
echo "\n";