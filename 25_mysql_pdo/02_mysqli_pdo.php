<?php 
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'mschool');

// $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// $stmt = $mysqli->prepare("SELECT name FROM wppn_wlsm_student_records WHERE name LIKE ?" );

// $name = "%a%";
// $stmt->bind_param('s', $name);
// $stmt->execute();

// print_r($stmt->get_result()->fetch_all(MYSQLI_NUM));

// $stmt->close();

// ****************************************************
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'mschool');

// $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// $stmt = $mysqli->prepare("SELECT name FROM wppn_wlsm_student_records WHERE section_id = ? AND gender IN (?, ?)" );

// $gender = array('male', 'female');
// $section_id = 5;
// $stmt->bind_param('ssi', $section_id, $gender[0], $gender[1]);
// $stmt->execute();

// print_r($stmt->get_result()->fetch_all(MYSQLI_NUM));

// $stmt->close();

// ****************************************************
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mschool');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$stmt = $mysqli->prepare("SELECT count(*) as total FROM wppn_wlsm_student_records WHERE section_id = ? AND gender IN (?, ?)" );

$gender = array('male', 'female');
$section_id = 5;
$stmt->bind_param('ssi', $section_id, $gender[0], $gender[1]);
$stmt->execute();

$data = $stmt->get_result()->fetch_assoc();
echo $data['total'] . "\n";

$stmt->close();
