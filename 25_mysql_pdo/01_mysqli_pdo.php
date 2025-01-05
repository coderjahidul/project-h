<?php 
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'mschool');

// $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// $stmt = $mysqli->prepare("SELECT * FROM wppn_wlsm_student_records WHERE gender = ?" );

// $gender = 'male';
// $stmt->bind_param('s', $gender);
// $stmt->execute();
// echo $stmt->get_result()->num_rows . "\n";

// $gender = 'female';
// $stmt->execute();
// echo $stmt->get_result()->num_rows . "\n";
// $stmt->close();

// ****************************************************
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'mschool');

// $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// $stmt = $mysqli->prepare("SELECT * FROM wppn_wlsm_student_records WHERE section_id = ? AND gender = ?" );

// $gender = 'male';
// $section_id = 5;
// $stmt->bind_param('si', $section_id, $gender);
// $stmt->execute();
// echo $stmt->get_result()->num_rows . "\n";

// $gender = 'female';
// $section_id = 3;
// $stmt->execute();
// echo $stmt->get_result()->num_rows . "\n";
// $stmt->close();

// ****************************************************

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mschool');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$stmt = $mysqli->prepare("SELECT * FROM wppn_wlsm_student_records WHERE section_id = ? AND gender = ?" );

$gender = 'female';
$section_id = 5;
$stmt->bind_param('si', $section_id, $gender);
$stmt->execute();
$result = $stmt->get_result();

// while($data = $result->fetch_assoc()){
//     print_r($data);
// }

// $data = $result->fetch_all(MYSQLI_ASSOC);
// print_r($data);

while($data = $result->fetch_object()){
    print_r($data);
}