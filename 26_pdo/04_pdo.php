<?php 
// try{
//     $pdo = new PDO('mysql:host=localhost;dbname=mschool', 'root', '');
//     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//     $stmt = $pdo->prepare("SELECT id, name FROM wppn_wlsm_student_records WHERE gender=?");
//     $stmt->execute(['female']);

//     $result = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
//     print_r($result);
// }catch(PDOException $e){
//     echo "Connection failed: " . $e->getMessage();
// }

try{
    $pdo = new PDO('mysql:host=localhost;dbname=mschool', 'root', '');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare("SELECT roll_number, name FROM wppn_wlsm_student_records WHERE gender=?");
    $stmt->execute(['male']);

    $result = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    print_r($result);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}