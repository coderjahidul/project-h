<?php
// try{
//     $db_name = "mysql:host=localhost;dbname=mschool";
//     $db_user = "root";
//     $db_pass = "";

//     $pdo_conn = new PDO($db_name, $db_user, $db_pass);
//     $sql = $pdo_conn->query("SELECT id, name, roll_number, gender FROM wppn_wlsm_student_records WHERE gender = 'male'");
//     $results = $sql->fetchAll(PDO::FETCH_ASSOC);
//     print_r($results);
// }catch(PDOException $e){
//     echo "Connection failed: " . $e->getMessage();
// }

/***    ****************** */
try{
    $db_name = "mysql:host=localhost;dbname=mschool";
    $db_user = "root";
    $db_pass = "";

    $pdo_conn = new PDO($db_name, $db_user, $db_pass);
    $stmt = $pdo_conn->prepare("SELECT id, name, roll_number, gender FROM wppn_wlsm_student_records WHERE gender = ?");
    $stmt->execute(['male']);

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($results);

}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}