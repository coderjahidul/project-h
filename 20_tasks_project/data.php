<?php
require_once "config.php";
// Database connection function
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection) {
    throw new Exception("Database connection error");
}else {
    mysqli_close($connection);
}

// Insert data into the database
// echo mysqli_query($connection, "INSERT INTO tasks (task, date) VALUES ('Do Something', '2024-12-20'), ('Do Nothing', '2024-12-21'), ('Do Anything', '2024-12-22')");

// Select data from the database
// $result = mysqli_query($connection, "SELECT * FROM tasks");

// if($result) {
//     echo "<table>";
//     echo "<tr>";
//     echo "<th>Task</th>";
//     echo "<th>Date</th>";
//     echo "</tr>";
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "<tr>";
//         echo "<td>{$row['task']}</td>";
//         echo "<td>{$row['date']}</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
// }

// Select data from the database
// $result = mysqli_query($connection, "SELECT * FROM tasks");

// while($task = mysqli_fetch_assoc($result)){
//     echo "<pre>"; print_r($task); echo "</pre>";
// }

// Delete data from the database
// echo mysqli_query($connection, "DELETE FROM tasks WHERE id = 3");

// Update data in the database
// $update = mysqli_query($connection, "UPDATE tasks SET task = 'Do Nothing For You', date = '2024-12-25' WHERE id = 2");

// if($update) {
//     echo "Data updated successfully";
// }

