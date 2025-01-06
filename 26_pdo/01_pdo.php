<?php
// DSN (Data Source Name)
$pdo = new PDO('mysql:host=localhost;dbname=mschool;','root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
if($pdo) {
   $stmt = $pdo->query("SELECT count(*) as N FROM wppn_wlsm_student_records WHERE gender = 'male'");

//    $result = $stmt->fetch(PDO::FETCH_ASSOC); // Return an associative array
//    $result = $stmt->fetch(PDO::FETCH_NUM); // Return a numeric array 
   $result = $stmt->fetchColumn(); // Returns the single value
   print_r($result);
}








// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=mschool;', 'root', '');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->query("SELECT count(*) as N FROM wppn_wlsm_student_records WHERE gender = 'male'");
//     $result = $stmt->fetch(PDO::FETCH_ASSOC);

//     print_r($result);
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
