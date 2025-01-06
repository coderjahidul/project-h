<?php
// try{
//     $pdo = new PDO('mysql:host=localhost;dbname=mschool', 'root', '');
//     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $stmt = $pdo->prepare("SELECT gender, name, roll_number FROM wppn_wlsm_student_records");
//     $stmt->execute();
//     $result = $stmt->fetchAll(PDO::FETCH_GROUP);
//     echo "Total Male: " . count($result['male']) . "\n";
//     echo "Total Female: " . count($result['female']) . "\n";
//     print_r($result);
// }catch(PDOException $e){
//     echo "Connection failed: " . $e->getMessage();
// }

