<?php 
// $name_one = "Jahidul";
// $name_two = "Islam";
// var_dump($name_one, $name_two);

// $name = "Earth";
// $uname = strtoupper($name);
// echo 'We\'ar living in: ' . $uname . "\n";

// printf("we'ar living in %s", $name);
// echo "\n";

// $fname = "Jahidul";
// $lname = "Islam";
// printf("His %s Name is %s %s","Full", $fname, $lname);

// $name = array(1,2, array("a","b","c"));
// var_dump($name);

// $b = 3.1;
// $c = true;
// var_dump($b, $c);

// $a = "Hello";
// $a .= " World";
// $b = $a;

// debug_zval_dump($a);

// $name = array(1,2, array("a","b","c"));
// var_export($name);

// $b = 3.1;
// $v = var_export($b, true);
// echo $v;

// function var_dump_pre($mixed = null){
//     echo "<pre>";
//     var_dump($mixed);
//     echo "</pre>";
//     return null;
// }

// $data = array("apple", "banana", "orange");
// var_dump_pre($data);


// function var_ret($mixed = null){
//     ob_start();
//     var_dump($mixed);
//     $content = ob_get_contents();
//     ob_end_clean();
//     return $content;
// }
// $data = array("apple", "banana", "orange");
// $result = var_ret($data);
// echo $result;

// $fname = "Jahidul Islam";
// $lname = "Sabuz";
// printf("His First Name Is %s And Last Name Is %s", $fname, $lname);
// echo "\n";
// $permanent_address = "Cumill, Laksham";
// $present_address = "Dhaka, Uttora";

// printf("His Premanent Address is %s And Present Address is %s", $permanent_address, $present_address);
// echo "\n";

// $name = "Jahidul Islam Sabuz";
// $profation = "Web Developer";
// printf("His Name is %s, And His Profition Is %s.", $name, $profation);
// echo "\n";

// $student_name = "Imtais Ahamad Rifat";
// $student_address = "Cumilla, Laksham";
// printf("Student Name Is %s. And Student Address Is %s.", $student_name, $student_address);

// $number = 12;
// $number = $number + 13;
// echo $number;

// $number = 12;
// $number += 13;
// echo $number;

// $number = (13 - 5) * 6;
// echo $number;

// $number = 11;
// $number++;
// $number++;
// $number++;
// echo $number;
// $x = $y = 5;
// echo $x . "\n";
// echo $y . "\n";
// $decimal = array(0,1,2,3,4,5,6,7,8,9);
// $decimal = [0,1,2,3,4,5,6,7,8,9];

// echo $decimal[2];
// foreach($decimal as $number){
//     echo "This Number is : " . $number . "\n";
// }

// $decimal_number = [0,1,2,3,4,5,6,7,8,9];
// echo $decimal_number;

// $binary_number = "0010";
// $decimal_number = bindec($binary_number);

// echo "Binary Number: " . $binary_number . "\n";
// echo "Decimal Number: " . $decimal_number . "\n";


// $n = 12;
// $o = 017;
// $h = 0x1D;
// printf("The Number is %d and %d and %d", $n, $o,$h);

// $o = 01641427677;
// printf("The binary equivalent of %d is %b", $o, $o);
// echo "\n";
// printf("The hexadecimal equivalent of %d is %X", $o, $o);
// echo "\n";
// printf("The Octal equivalent of %d is %o", 27, 27);

$b = 12145;

// printf("The bunary equivalent of %d and %b",$b, $b);
// echo "\n";
// printf("The hexadecimal equivalent of %d and %X", $b, $b);
// echo "\n";
// printf("The octal equivalent of %d and %o", $b, $b);


// $randomNumber = rand(); // Generate a random integer (not cryptographically secure)
// echo $randomNumber;
// $jahidul = "120";
// echo "\n";
// $fname = "islam";
// $lname = "jahidul";
// $address = "laksham";
// printf('His name is %2$s %1$s and his address is %3$s', $fname, $lname, $address);
// echo "\n";
// $one = 1200;
// printf('The binary equivalent of %1$d is %1$b', $one);

// echo "\n";
// $n = 38.127;
// printf("%.2f", $n);
// echo "\n";
// $m = 120.135;
// printf("%.2f", $m);
// echo "\n";

// $a = "120.145";
// $b = "27.129";
// printf("%07.2f \n", $a);
// printf("%07.2f \n", $b);

// $fname = "islam";
// $lname = "jahidul";
// $address = "laksham";
// printf('His name is %2$s %1$s and his address is %3$s', $fname, $lname, $address);
// echo "\n";
// $number = 15;
// printf('The binary equivalent of %1$d is %1$b', $number);

// $n = 38.128;
// printf("%.2f", $n);
// $m = 125.326;
// printf("%.2f", $m);

// $a = 120.145;
// $b = 27.129;
// printf("%07.2f \n", $a);
// printf("%07.2f \n", $b);
// echo phpinfo(

// );

// $age = 18;
// $message = ($age >= 18) ? "Your are Adult" : "Your are Child";
// echo $message;

// $age = 20;
// $message = ($age >= 18) ? "Your are Adult" : "Your are Child";
// echo $message;
// echo "\n";
// $age = 17;
// $message = (18 <= $age) ? "Please Dawnload Now" : "You are too child";
// echo $message;
// $input = array('jahidul' => 'Web Developer');
// $output = isset($input['jahidul']) ? $input['jahidul'] : null;
// echo $output;

// $item_id = isset($_GET['item_id']) ? $_GET['item_id'] : null;

$color = "parple";
// switch($color){
//     case 'read':
//         echo "Read is my favorite color";
//         break;
//     case 'blue':
//         echo "Blue is my favorite color";
//         break;
//     case 'green':
//         echo "Green is my favorite color";
//         break;
//     case 'yellow':
//         echo "yellow is my favorite color";
//         break;
//     default :
//         echo "I don't know";

// }

// switch($color){
//     case 'green':
//     case 'parple':
//         echo "Green is my favorite color";
//         break;
//     case 'read':
//         echo "Read is my favorite color";
//         break;
//     case 'blue':
//         echo "Blue is my favorite color";
//         break;
//     case 'yellow':
//         echo "Yellow is my favorite color";
//         break;
//     default:
//         echo "I don't know";
// }




































































