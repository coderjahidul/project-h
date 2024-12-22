<?php 
// Get the action
//$action = isset($_POST['action']) ? $_POST['action'] : ''; // Ternary operator

// include config file
include_once 'config.php';

// call dbConnect function
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection) {
    throw new Exception("Database connection error");
}else {
    $action = $_POST['action'] ?? ''; // Null coalescing operator
    if(!$action){
        header("Location: index.php");
        die();
    }else{
        if('add' == $action){
            $task = $_POST['task'] ?? '';
            $date = $_POST['date'] ?? '';

            // Insert data into the database
            if(!empty($task) && !empty($date)){
                $query = "INSERT INTO tasks (task, date) VALUES ('{$task}', '{$date}')";
                $result = mysqli_query($connection, $query);
                if($result){
                    header("Location: index.php?added=true");
                }
            }
        }
    }
}   
?>