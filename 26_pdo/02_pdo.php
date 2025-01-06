<?php
// $pdo = new PDO('mysql:host=localhost; dbname=mschool', 'root', '');
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// if($pdo) {
//     $stmt = $pdo->query("SELECT * FROM wppn_wlsm_student_records WHERE gender = 'male'");
//     // $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // Return an associative array
//     // $result = $stmt->fetchAll(PDO::FETCH_NUM); // Return a numeric array
//     $result = $stmt->fetchAll();
//     print_r($result);
// }

/**************************************** */
$pdo = new PDO('mysql:host=localhost; dbname=mschool', 'root', '');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if($pdo){
    $stmt = $pdo->query("SELECT * FROM wppn_wlsm_student_records WHERE gender = 'female'");
    $result = $stmt->fetchAll();
    print_r($result);
}