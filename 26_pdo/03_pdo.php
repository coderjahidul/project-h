<?php 
// $pdo = new PDO('mysql:host=localhost;dbname=mschool', 'root', '');
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// $stmt = $pdo->prepare("SELECT * FROM wppn_wlsm_student_records WHERE gender=?");

// $gender = 'female';
// $stmt->bindParam(1, $gender, PDO::PARAM_STR);
// $stmt->execute();

// $gender = 'male';
// $stmt->execute();
// $result = $stmt->fetchAll();
// // $stmt->execute(['female']);
// // $result = $stmt->fetchAll();
// print_r($result);  
























/************************************************ */
try{
    $pdo = new PDO('mysql:host=localhost;dbname=mschool', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Prepared the statement
    $stmt = $pdo->prepare("SELECT * FROM wppn_wlsm_student_records WHERE gender=?");

    // Execute for female
    $stmt->execute(['female']);
    // Result for female
    $result = $stmt->fetchAll();
    echo "Result for female: \n";
    // Print Total Rows for female
    echo "Total Female: " . $stmt->rowCount() . "\n";
    print_r($result);

    // Execute for male
    $stmt->execute(['male']);
    // Result for male
    $result = $stmt->fetchAll();
    echo "Result for male: \n";
    // Print Total Rows for male
    echo "Total Male: " . $stmt->rowCount() . "\n";
    print_r($result);

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}